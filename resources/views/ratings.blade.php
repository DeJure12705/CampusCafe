@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Sidebar -->
        <nav class="col-md-3 col-lg-2 d-md-block sidebar p-4 bg-dark text-light rounded-3 shadow-sm">
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a id="submit-rating-btn" class="nav-link py-3 d-flex align-items-center text-light" href="#" onclick="showSection('submit-rating')">
                        <i class="bi bi-star-fill fs-4 me-3"></i> <span class="fs-5">Submit Rating</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a id="ratings-list-btn" class="nav-link py-3 d-flex align-items-center text-light" href="#" onclick="showSection('ratings-list')">
                        <i class="bi bi-list-ul fs-4 me-3"></i> <span class="fs-5">View All Ratings</span>
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Main Content -->
        <main class="col-md-9 ms-sm-auto col-lg-10 main-content p-5">
            <!-- Submit Rating Form -->
            <div id="submit-rating" class="section active">
                <h2 class="section-title mb-4 fs-2 text-primary text-center">Rate Us!</h2>
                <form id="rating-form" class="card p-4 rounded-3 shadow-sm">
                    <div class="mb-4">
                        <label for="product" class="form-label fs-5 text-muted">Product Name</label>
                        <input type="text" class="form-control" id="product" placeholder="Enter Product Name" required>
                    </div>

                    <div class="mb-4">
                        <label class="form-label fs-5 text-muted">Rating</label>
                        <div class="stars-container d-flex justify-content-start">
                            <i class="bi bi-star-fill star fs-3 me-2" onclick="setRating(1)"></i>
                            <i class="bi bi-star-fill star fs-3 me-2" onclick="setRating(2)"></i>
                            <i class="bi bi-star-fill star fs-3 me-2" onclick="setRating(3)"></i>
                            <i class="bi bi-star-fill star fs-3 me-2" onclick="setRating(4)"></i>
                            <i class="bi bi-star-fill star fs-3 me-2" onclick="setRating(5)"></i>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="comment" class="form-label fs-5 text-muted">Comment</label>
                        <textarea class="form-control" id="comment" rows="4" placeholder="Enter your feedback here..." required></textarea>
                    </div>

                    <div class="d-flex justify-content-center">
                        <button type="button" class="btn btn-primary px-4 py-2 submit-btn" onclick="submitRating()">Submit Rating</button>
                    </div>
                </form>
            </div>

            <!-- All Ratings -->
            <div id="ratings-list" class="section">
                <h2 class="section-title mb-4 fs-2 text-primary text-center">All Ratings</h2>
                <div id="ratings-list-container"></div>
                <div class="d-flex justify-content-center mt-3">
                    <button type="button" class="btn btn-outline-secondary px-4 py-2" onclick="displayRatings()">Show All Ratings</button>
                </div>
            </div>
        </main>
    </div>
</div>
@endsection

@section('scripts')
<script>
    let currentRating = 0;

    // Show and hide sections
    function showSection(section) {
        // Hide all sections
        const sections = document.querySelectorAll('.section');
        sections.forEach(sec => sec.classList.remove('active'));

        // Show the selected section
        const sectionToShow = document.getElementById(section);
        sectionToShow.classList.add('active');

        // Remove active class from all sidebar links
        const navLinks = document.querySelectorAll('.nav-link');
        navLinks.forEach(link => link.classList.remove('active'));
        
        // Add 'active' to clicked link
        if (section === 'submit-rating') {
            document.getElementById('submit-rating-btn').classList.add('active');
        } else if (section === 'ratings-list') {
            document.getElementById('ratings-list-btn').classList.add('active');
        }
    }

    // Set rating based on clicked star
    function setRating(rating) {
        currentRating = rating;
        const stars = document.querySelectorAll('.star');
        stars.forEach((star, index) => {
            if (index < rating) {
                star.classList.add('active');
            } else {
                star.classList.remove('active');
            }
        });
    }

    // Submit rating
    function submitRating() {
        const product = document.getElementById('product').value;
        const comment = document.getElementById('comment').value;

        if (!product || !comment || currentRating === 0) {
            alert('Please complete the form before submitting.');
            return;
        }

        // Store rating (This can be an API call to save the rating)
        console.log({ product, rating: currentRating, comment });

        // Reset the form
        document.getElementById('rating-form').reset();
        setRating(0);
        alert('Your rating has been submitted!');
    }

    // Display all ratings (This can be an API call to fetch ratings)
    function displayRatings() {
        const ratingsListContainer = document.getElementById('ratings-list-container');
        // Example data (you can replace this with an actual API call)
        const ratings = [
            { product: 'Product 1', rating: 5, comment: 'Excellent product!' },
            { product: 'Product 2', rating: 4, comment: 'Very good, but could improve.' },
            { product: 'Product 3', rating: 3, comment: 'Average product.' },
        ];

        // Display ratings
        ratingsListContainer.innerHTML = ratings.map(rating => `
            <div class="rating-item">
                <h5>${rating.product}</h5>
                <div class="stars-container">${'★'.repeat(rating.rating)}${'☆'.repeat(5 - rating.rating)}</div>
                <p>${rating.comment}</p>
            </div>
        `).join('');
    }

    // Set initial view (optional)
    document.addEventListener('DOMContentLoaded', function() {
        showSection('submit-rating'); // Set initial view
    });
</script>
@endsection

@extends('layouts.app')

@section('content')

<!-- Greeting Section -->
<div class="container mt-5 text-center">
    <h2 class="fw-bold display-3 text-dark">Welcome to Campus Café Express!</h2>
    <p class="lead mt-3 text-muted">
        Located right on campus, Campus Café Express brings you fresh, energizing coffee and delightful treats for every study session, break, or meet-up.
    </p>
    <p class="mb-4">
        Our café is designed for students, faculty, and staff who want quality, convenience, and great taste. Explore our menu, place an order, and experience the best café on campus!
    </p>
    <!-- Promotional Image -->
    <img src="{{ asset('video/campus.jpeg') }}" alt="Campus Café" class="img-fluid rounded shadow-lg mt-4" style="max-height: 400px; object-fit: cover;">
</div>

<!-- Promotional Video Section -->
<div class="container mt-5 text-center">
    <h2 class="fw-bold display-4 text-dark">Experience Our Coffee</h2>
    <p class="lead text-muted">See what makes our coffee special.</p>
    <div class="ratio ratio-16x9" style="max-width: 800px; margin: auto;">
        <!-- Embedded Video -->
        <video autoplay loop muted class="img-fluid rounded" style="object-fit: cover; border-radius: 15px;">
            <source src="{{ asset('video/Cinematic Coffee - Shot on Sony FX6.mp4') }}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
</div>

<!-- Products Section -->
<div class="container mt-5">
    <h2 class="fw-bold text-center text-dark">Our Best Sellers</h2>

    <!-- Coffee Section -->
    <h3 class="fw-bold text-center mt-4 text-dark">Coffees</h3>
    <div class="row mt-4">
        <div class="col-md-3 text-center mb-4">
            <div class="product-card card shadow-sm border-0 d-flex flex-column" style="height: 400px;" data-bs-toggle="modal" data-bs-target="#productModal" data-name="Caramel Latte" data-image="{{ asset('video/Salted_Caramel_Latte.webp') }}" data-description="Smooth espresso with rich caramel flavor.">
                <img src="{{ asset('video/Salted_Caramel_Latte.webp') }}" alt="Caramel Latte" class="img-fluid mb-3 rounded" style="object-fit: cover; height: 200px; width: 100%;">
                <div class="card-body d-flex flex-column justify-content-between">
                    <h5 class="fw-bold">Caramel Latte</h5>
                    <p class="text-muted">Smooth espresso with rich caramel flavor.</p>
                </div>
            </div>
        </div>

        <div class="col-md-3 text-center mb-4">
            <div class="product-card card shadow-sm border-0 d-flex flex-column" style="height: 400px;" data-bs-toggle="modal" data-bs-target="#productModal" data-name="Espresso" data-image="{{ asset('video/espresso.jpg') }}" data-description="A rich and bold shot of espresso.">
                <img src="{{ asset('video/espresso.jpg') }}" alt="Espresso" class="img-fluid mb-3 rounded" style="object-fit: cover; height: 200px; width: 100%;">
                <div class="card-body d-flex flex-column justify-content-between">
                    <h5 class="fw-bold">Espresso</h5>
                    <p class="text-muted">A rich and bold shot of espresso.</p>
                </div>
            </div>
        </div>

        <div class="col-md-3 text-center mb-4">
            <div class="product-card card shadow-sm border-0 d-flex flex-column" style="height: 400px;" data-bs-toggle="modal" data-bs-target="#productModal" data-name="Latte" data-image="{{ asset('video/latte.jpg') }}" data-description="Creamy steamed milk with an espresso.">
                <img src="{{ asset('video/latte.jpg') }}" alt="Latte" class="img-fluid mb-3 rounded" style="object-fit: cover; height: 200px; width: 100%;">
                <div class="card-body d-flex flex-column justify-content-between">
                    <h5 class="fw-bold">Latte</h5>
                    <p class="text-muted">Creamy steamed milk with an espresso.</p>
                </div>
            </div>
        </div>

        <div class="col-md-3 text-center mb-4">
            <div class="product-card card shadow-sm border-0 d-flex flex-column" style="height: 400px;" data-bs-toggle="modal" data-bs-target="#productModal" data-name="Mocha" data-image="{{ asset('video/mocha.webp') }}" data-description="Espresso with chocolate and steamed milk.">
                <img src="{{ asset('video/mocha.webp') }}" alt="Mocha" class="img-fluid mb-3 rounded" style="object-fit: cover; height: 200px; width: 100%;">
                <div class="card-body d-flex flex-column justify-content-between">
                    <h5 class="fw-bold">Mocha</h5>
                    <p class="text-muted">Espresso with chocolate and steamed milk.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Cakes Section -->
    <h3 class="fw-bold text-center mt-4 text-dark">Cakes</h3>
    <div class="row mt-4">
        <div class="col-md-3 text-center mb-4">
            <div class="product-card card shadow-sm border-0 d-flex flex-column" style="height: 400px;" data-bs-toggle="modal" data-bs-target="#productModal" data-name="Chocolate Cake" data-image="{{ asset('video/chocolate.png') }}" data-description="Rich and decadent chocolate cake.">
                <img src="{{ asset('video/chocolate.png') }}" alt="Chocolate Cake" class="img-fluid mb-3 rounded" style="object-fit: cover; height: 200px; width: 100%;">
                <div class="card-body d-flex flex-column justify-content-between">
                    <h5 class="fw-bold">Chocolate Cake</h5>
                    <p class="text-muted">Rich and decadent chocolate cake.</p>
                </div>
            </div>
        </div>

        <div class="col-md-3 text-center mb-4">
            <div class="product-card card shadow-sm border-0 d-flex flex-column" style="height: 400px;" data-bs-toggle="modal" data-bs-target="#productModal" data-name="Vanilla Cake" data-image="{{ asset('video/vanilla.png') }}" data-description="Soft and fluffy vanilla sponge cake.">
                <img src="{{ asset('video/vanilla.png') }}" alt="Vanilla Cake" class="img-fluid mb-3 rounded" style="object-fit: cover; height: 200px; width: 100%;">
                <div class="card-body d-flex flex-column justify-content-between">
                    <h5 class="fw-bold">Vanilla Cake</h5>
                    <p class="text-muted">Soft and fluffy vanilla sponge cake.</p>
                </div>
            </div>
        </div>

        <div class="col-md-3 text-center mb-4">
            <div class="product-card card shadow-sm border-0 d-flex flex-column" style="height: 400px;" data-bs-toggle="modal" data-bs-target="#productModal" data-name="Red Velvet Cake" data-image="{{ asset('video/velvet.png') }}" data-description="Velvety smooth with a hint of cocoa.">
                <img src="{{ asset('video/velvet.png') }}" alt="Red Velvet Cake" class="img-fluid mb-3 rounded" style="object-fit: cover; height: 200px; width: 100%;">
                <div class="card-body d-flex flex-column justify-content-between">
                    <h5 class="fw-bold">Red Velvet Cake</h5>
                    <p class="text-muted">Velvety smooth with a hint of cocoa.</p>
                </div>
            </div>
        </div>

        <div class="col-md-3 text-center mb-4">
            <div class="product-card card shadow-sm border-0 d-flex flex-column" style="height: 400px;" data-bs-toggle="modal" data-bs-target="#productModal" data-name="Cheesecake" data-image="{{ asset('video/cheese.png') }}" data-description="Rich cheesecake with a graham cracker crust.">
                <img src="{{ asset('video/cheese.png') }}" alt="Cheesecake" class="img-fluid mb-3 rounded" style="object-fit: cover; height: 200px; width: 100%;">
                <div class="card-body d-flex flex-column justify-content-between">
                    <h5 class="fw-bold">Cheesecake</h5>
                    <p class="text-muted">Rich cheesecake with a graham cracker crust.</p>
                </div>
            </div>
        </div>
</div>
    </div>

    <!-- Explore Menu Button -->
    <div class="text-center mt-5">
        <a href="{{ route('ordermen') }}" class="btn btn-lg btn-outline-dark rounded-pill shadow-lg">Explore Menu</a>
    </div>
</div>

<!-- Product Modal -->
<div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="productModalLabel">Product Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <img id="modalProductImage" src="" alt="" class="img-fluid mb-3 rounded" style="max-height: 300px; object-fit: cover;">
                <h5 id="modalProductName" class="fw-bold"></h5>
                <p id="modalProductDescription" class="text-muted"></p>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-4 mt-5">
    <div class="container">
        <p>&copy; 2024 Campus Café Express. All rights reserved.</p>
    </div>
</footer>

@endsection

@section('scripts')
<script>
    // Wait for the DOM to fully load before attaching event listeners
    document.addEventListener('DOMContentLoaded', function () {
        // Add event listeners for product card clicks
        const productCards = document.querySelectorAll('.product-card');
        
        productCards.forEach(card => {
            card.addEventListener('click', function () {
                // Get product data from the card's data attributes
                const productName = card.getAttribute('data-name');
                const productImage = card.getAttribute('data-image');
                const productDescription = card.getAttribute('data-description');

                // Update modal content
                document.getElementById('modalProductName').textContent = productName;
                document.getElementById('modalProductImage').src = productImage;
                document.getElementById('modalProductDescription').textContent = productDescription;
                
                // Optionally log the values to debug
                console.log(productName, productImage, productDescription);
            });
        });
    });
</script>
@endsection

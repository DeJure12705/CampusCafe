@extends('layouts.app')

@section('content')

<!-- About Us Section -->
<div class="container my-5">
    <h2 class="section-title text-center mb-4">About Us</h2>
    <p class="about-text text-center mb-5">
        Welcome to Campus Café Express, where we blend the finest coffee and delicious treats to energize your day. Our café offers a warm and inviting atmosphere, perfect for studying, meeting friends, or simply taking a break from campus life. Whether you're in the mood for a rich cup of coffee, a decadent pastry, or a refreshing smoothie, we've got something for everyone. We strive to create a space where students and faculty alike can relax and recharge.
    </p>

    <!-- Inserted Image (Centered and Consistent Size) -->
    <div class="text-center mb-5">
        <img src="video/campus.jpeg" alt="Café Atmosphere" class="img-fluid rounded shadow" style="max-width: 100%; height: auto;">
    </div>

    <!-- Mission & Vision Section -->
    <div class="mission-vision text-center my-5">
        <h3>Our Mission</h3>
        <p>At Campus Café Express, our mission is to provide the highest quality coffee and baked goods, paired with exceptional customer service. We aim to be the go-to spot for students looking for a quick and satisfying break during their busy academic life.</p>
        <h3>Our Vision</h3>
        <p>We envision a café where every cup of coffee tells a story, where creativity is nurtured, and every customer feels at home. We aim to be a staple on campus for years to come, continuously growing and adapting to meet the needs of our community.</p>
    </div>

    <!-- Our Team Section -->
    <h3 class="section-title text-center mt-5">Our Team</h3>
    <div class="row text-center">
        <div class="col-md-3 team-member mb-4">
            <img src="video/wendyl.jpg" alt="Team Member" class="img-fluid rounded-circle" style="width: 200px; height: 200px; object-fit: cover;">
            <h5 class="mt-3">Wendyl Arellano</h5>
            <p>Group Leader / Lead Developer</p>
            <p class="bio">Honesty is the best policy.</p>
        </div>
        <div class="col-md-3 team-member mb-4">
            <img src="video/gian (2).jpg" alt="Team Member" class="img-fluid rounded-circle" style="width: 200px; height: 200px; object-fit: cover;">
            <h5 class="mt-3">Gian Carlo Marin</h5>
            <p>UI DESIGN</p>
            <p class="bio">You can’t become the best without first being the worst.</p>
        </div>
        <div class="col-md-3 team-member mb-4">
            <img src="video/herald.jpg" alt="Team Member" class="img-fluid rounded-circle" style="width: 200px; height: 200px; object-fit: cover;">
            <h5 class="mt-3">Herald Elivera</h5>
            <p>Database</p>
            <p class="bio">In a world of worriers, be the warrior.</p>
        </div>
        <div class="col-md-3 team-member mb-4">
            <img src="video/462575557_584811337568692_6153224087211035342_n.jpg" alt="Team Member" class="img-fluid rounded-circle" style="width: 200px; height: 200px; object-fit: cover;">
            <h5 class="mt-3">Arthur General</h5>
            <p>FullStack Developer</p>
            <p class="bio">I’m a cupcake in search of her stud muffin.</p>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="text-center py-4 mt-5">
    <p>&copy; 2024 Campus Café Express. All rights reserved.</p>
</footer>

@endsection

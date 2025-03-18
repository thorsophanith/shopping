@extends('layouts.main')

@section('content')


<main class="mt-90">
    <div class="mb-4 pb-lg-5"></div>

<section data-aos="fade-up"
data-aos-anchor-placement="center-bottom" class=" py-5 text-center" style="opacity: 80% ;background-repeat: no-repeat;background-size: cover ; background-image: url({{ asset('assets/images/port/istockphoto-1461585260-612x612.jpg') }});">
    <div class="container">
        <h1 class="fw-bold">About Our eCommerce Store</h1>
        <p class="lead">We are dedicated to providing the best shopping experience for our customers.</p>
    </div>
</section>

<!-- Company Info -->
<section class="container py-5">
    <div class="row align-items-center" data-aos="fade-up"
    data-aos-anchor-placement="center-bottom">
        <div class="col-md-6">
            <img src="{{ asset('assets/images/layouts/6.jpg') }}" class="img-fluid rounded mb-2" alt="About Image">
        </div>
        <div class="col-md-6">
            <h2>Who We Are</h2>
            <p>We are an online store specializing in high-quality products with fast delivery and excellent customer service.</p>
            <ul>
                <li>Wide range of products</li>
                <li>Secure payment options</li>
                <li>24/7 customer support</li>
            </ul>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="bg-light py-5 text-center">
    <div class="container">
        <h2>Meet Our Team</h2>
        <div class="row mt-4">
            <div class="col-md-4" data-aos="fade-up"
            data-aos-anchor-placement="center-bottom">
                <img src="{{ asset('assets/images/port/portrait-9134409_640.png') }}" width="130" class="rounded-circle mb-3" alt="Team Member">
                <h5>John Doe</h5>
                <p>CEO & Founder</p>
            </div>
            <div class="col-md-4" data-aos="fade-up"
            data-aos-anchor-placement="center-bottom">
                <img src="{{ asset('assets/images/port/portrait-9134409_640.png') }}" width="130" class="rounded-circle mb-3" alt="Team Member">
                <h5>Jane Smith</h5>
                <p>Marketing Head</p>
            </div>
            <div class="col-md-4" data-aos="fade-up"
            data-aos-anchor-placement="center-bottom">
                <img src="{{ asset('assets/images/port/portrait-9134409_640.png') }}" width="130" class="rounded-circle mb-3" alt="Team Member">
                <h5>Mike Johnson</h5>
                <p>Customer Support</p>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="container py-5 text-center">
    <h2>What Our Customers Say</h2>
    <div class="row mt-4">
        <div class="col-md-4" data-aos="fade-up"
data-aos-anchor-placement="center-bottom">
            <blockquote class="blockquote">
                <p>"Great service and amazing products! Highly recommended."</p>
                <footer class="blockquote-footer">Emily R.</footer>
            </blockquote>
        </div>
        <div class="col-md-4" data-aos="fade-up"
data-aos-anchor-placement="center-bottom">
            <blockquote class="blockquote">
                <p>"Fast delivery and excellent customer support. Will shop again!"</p>
                <footer class="blockquote-footer">David M.</footer>
            </blockquote>
        </div>
        <div class="col-md-4" data-aos="fade-up"
data-aos-anchor-placement="center-bottom">
            <blockquote class="blockquote">
                <p>"Best online store I've ever used. 5-star experience!"</p>
                <footer class="blockquote-footer">Sophia L.</footer>
            </blockquote>
        </div>
    </div>
</section>


</main>



@endsection
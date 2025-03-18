@extends('layouts.main')

@section('content')


<main class="mt-90">
    <div class="mb-4 pb-lg-5"></div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <h2>Contact Us</h2>
            <p>Feel free to reach out to us for any inquiries or support.</p>
            <form>
                <div class="mb-3">
                    <label for="name" class="form-label">Your Name</label>
                    <input type="text" class="form-control" id="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Your Email</label>
                    <input type="email" class="form-control" id="email" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
        <div class="col-md-6">
            <h2>Our Location</h2>
            <p>123 Street, City, Country</p>
            <p>Email: support@ecommerce.com</p>
            <p>Phone: +123 456 7890</p>
            <div class="ratio ratio-16x9">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8354345093747!2d144.95373531531812!3d-37.81627917975171!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d43f1f688f1%3A0x5045675218ce6e0!2sMelbourne%20VIC%2C%20Australia!5e0!3m2!1sen!2sus!4v1614828591323!5m2!1sen!2sus" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</div>
</main>


@endsection
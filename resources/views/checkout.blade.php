@extends('layouts.main')

@section('content')


<main class="mt-90">
    <div class="mb-4 pb-5"></div>


<div class="container mt-md-5">
    <h6 class="pb-5 pt-4"><a href="{{ route('cart') }}" class="navigation__link"><i class="fa-solid fa-arrow-left"></i> Back to Cart</a></h6>

    <div class="row">
        <!-- Billing Details -->
        <div class="col-md-7">
            <h4>Checkout Details</h4>
            <form>
                <div class="mb-3">
                    <label class="form-label">Full Name</label>
                    <input type="text" class="form-control" placeholder="Enter your full name" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Email Address</label>
                    <input type="email" class="form-control" placeholder="Enter your email" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Address</label>
                    <input type="text" class="form-control" placeholder="Street address, Apartment, etc." required>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">City</label>
                        <input type="text" class="form-control" placeholder="Enter city" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Zip Code</label>
                        <input type="text" class="form-control" placeholder="Enter zip code" required>
                    </div>
                </div>

                <!-- Payment Method -->
                <h4 class="mt-4">Payment Method</h4>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="paymentMethod" id="creditCard" checked>
                    <label class="form-check-label" for="creditCard">Credit/Debit Card</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="paymentMethod" id="paypal">
                    <label class="form-check-label" for="paypal">PayPal</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="paymentMethod" id="cod">
                    <label class="form-check-label" for="cod">Cash on Delivery</label>
                </div>

            </form>
        </div>

        <!-- Order Summary -->
        <div class="col-md-5">
            <div class="checkout-summary">
                <h4>Order Summary</h4>
                <p>Product 1 <span class="float-end">$49.99</span></p>
                <p>Product 2 <span class="float-end">$29.99</span></p>
                <hr>
                <p>Subtotal <span class="float-end">$79.98</span></p>
                <p>Shipping <span class="float-end">$5.00</span></p>
                <hr>
                <h5>Total <span class="float-end">$84.98</span></h5>
                <button class="btn btn-success w-100 mt-3">Place Order</button>
            </div>
        </div>
    </div>
</div>



@endsection
@extends('layouts.main')

@section('content')


<main class="mt-90">
    <div class="mb-4 pb-5"></div>


    <div class="cart-wrapper pt-5">
        <div class="container">
            <div class="row g-4">
                <!-- Cart Items Section -->
                <div class="col-lg-8">
                    <h6 class="pb-5"><a href="{{ route('shop') }}" class="navigation__link"><i class="fa-solid fa-arrow-left"></i> Back to shop</a></h6>
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h4 class="mb-0">Shopping Cart</h4>
                        <span class="text-muted">3 items</span>
                    </div>

                    <!-- Product Cards -->
                    <div class="d-flex flex-column gap-3">
                        <!-- Product 1 -->
                        <div class="product-card p-3 shadow-sm">
                            <div class="row align-items-center">
                                <div class="col-md-2">
                                    <img src="{{ asset('assets/images/layouts/7.webp') }}" alt="Product" class="product-image">
                                </div>
                                <div class="col-md-4">
                                    <h6 class="mb-1">Wireless Headphones</h6>
                                    <p class="text-muted mb-0">Black | Premium Series</p>
                                    <span class="discount-badge mt-2">20% OFF</span>
                                </div>
                                <div class="col-md-3">
                                    <div class="d-flex align-items-center gap-2">
                                        <button class="quantity-btn" onclick="updateQuantity(1, -1)">-</button>
                                        <input type="number" class="quantity-input" value="1" min="1">
                                        <button class="quantity-btn" onclick="updateQuantity(1, 1)">+</button>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <span class="fw-bold">$129.99</span>
                                </div>
                                <div class="col-md-1">
                                    <i class="bi bi-trash remove-btn"></i>
                                </div>
                            </div>
                        </div>

                        <!-- Product 2 -->
                        <div class="product-card p-3 shadow-sm">
                            <div class="row align-items-center">
                                <div class="col-md-2">
                                    <img src="{{ asset('assets/images/layouts/7.webp') }}" alt="Product" class="product-image">
                                </div>
                                <div class="col-md-4">
                                    <h6 class="mb-1">Smart Watch</h6>
                                    <p class="text-muted mb-0">Silver | Series 7</p>
                                </div>
                                <div class="col-md-3">
                                    <div class="d-flex align-items-center gap-2">
                                        <button class="quantity-btn" onclick="updateQuantity(2, -1)">-</button>
                                        <input type="number" class="quantity-input" value="1" min="1">
                                        <button class="quantity-btn" onclick="updateQuantity(2, 1)">+</button>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <span class="fw-bold">$299.99</span>
                                </div>
                                <div class="col-md-1">
                                    <i class="bi bi-trash remove-btn"></i>
                                </div>
                            </div>
                        </div>

                        <!-- Product 3 -->
                        <div class="product-card p-3 shadow-sm">
                            <div class="row align-items-center">
                                <div class="col-md-2">
                                    <img src="{{ asset('assets/images/layouts/7.webp') }}" alt="Product" class="product-image">
                                </div>
                                <div class="col-md-4">
                                    <h6 class="mb-1">Wireless Charger</h6>
                                    <p class="text-muted mb-0">White | 15W Fast Charge</p>
                                </div>
                                <div class="col-md-3">
                                    <div class="d-flex align-items-center gap-2">
                                        <button class="quantity-btn" onclick="updateQuantity(3, -1)">-</button>
                                        <input type="number" class="quantity-input" value="1" min="1">
                                        <button class="quantity-btn" onclick="updateQuantity(3, 1)">+</button>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <span class="fw-bold">$49.99</span>
                                </div>
                                <div class="col-md-1">
                                    <i class="bi bi-trash remove-btn"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Summary Section -->
                <div class="col-lg-4">
                    <div class="summary-card p-4 shadow-sm">
                        <h5 class="mb-4">Order Summary</h5>
                        
                        <div class="d-flex justify-content-between mb-3">
                            <span class="text-muted">Subtotal</span>
                            <span>$479.97</span>
                        </div>
                        <div class="d-flex justify-content-between mb-3">
                            <span class="text-muted">Discount</span>
                            <span class="text-success">-$26.00</span>
                        </div>
                        <div class="d-flex justify-content-between mb-3">
                            <span class="text-muted">Shipping</span>
                            <span>$5.00</span>
                        </div>
                        <hr>
                        <div class="d-flex justify-content-between mb-4">
                            <span class="fw-bold">Total</span>
                            <span class="fw-bold">$458.97</span>
                        </div>

                        <!-- Promo Code -->
                        <div class="mb-4">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Promo code">
                                <button class="btn btn-outline-secondary" type="button">Apply</button>
                            </div>
                        </div>

                        <button class="btn btn-primary checkout-btn w-100 mb-3">
                            <a href="{{ route('cart.checkout') }}">Proceed to Checkout</a>
                        </button>
                        
                        <div class="d-flex justify-content-center gap-2">
                            <small class="text-muted">Secure checkout</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>


@endsection
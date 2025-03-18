@extends('layouts.main')

@section('content')

<main class="pt-90">

    <div class="container ">
        <!-- Top Bar -->
        <h5 class="">Shopping</h5>
        <div class="row g-4">
            <!-- Filters Sidebar -->
            <div class="col-lg-3">
                <div class="filter-sidebar p-4 shadow-sm">
                    <div class="filter-group" data-aos="fade-up"
                    data-aos-anchor-placement="center-bottom">
                        <h6 class="mb-3">Categories</h6>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="electronics">
                            <label class="form-check-label" for="electronics">
                               Category 1
                            </label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="clothing">
                            <label class="form-check-label" for="clothing">
                                ategory 2
                            </label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="accessories">
                            <label class="form-check-label" for="accessories">
                                ategory 3
                            </label>
                        </div>
                    </div>

                    <div class="filter-group" data-aos="fade-up"
                    data-aos-anchor-placement="center-bottom">
                        <h6 class="mb-3">Price Range</h6>
                        <input type="range" class="form-range" min="0" max="1000" value="500">
                        <div class="d-flex justify-content-between">
                            <span class="text-muted">$0</span>
                            <span class="text-muted">$1000</span>
                        </div>
                    </div>


                    <div class="filter-group" data-aos="fade-up"
                    data-aos-anchor-placement="center-bottom">
                        <h6 class="mb-3">Brands</h6>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="electronics">
                            <label class="form-check-label" for="electronics">
                                Brand 1
                            </label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="clothing">
                            <label class="form-check-label" for="clothing">
                                Brand 2
                            </label>
                        </div>
                        <div class="form-check mb-2">
                            <input class="form-check-input" type="checkbox" id="accessories">
                            <label class="form-check-label" for="accessories">
                                Brand 3
                            </label>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Product Grid -->
            <div class="col-lg-9">
                <div class="w-100"><img src="{{ asset('assets/images/shop/banner.jpg') }}" data-aos="fade-up"
                    data-aos-anchor-placement="center-bottom" class="mb-4 w-100" style="border-radius: 20px;" alt=""></div>
                <div class="d-flex justify-content-between align-items-center mb-4" data-aos="fade-up"
                data-aos-anchor-placement="center-bottom">
                    <h4 class="mb-0">Product Collection</h4>
                    <div class="d-flex gap-2 align-items-center">
                        <span class="text-muted">Sort by:</span>
                        <button class="sort-btn">
                            Newest <i class="bi bi-chevron-down ms-2"></i>
                        </button>
                    </div>
                </div>
                <div class="row g-4">
                    <!-- Product Card 1 -->
                    <div class="col-md-4" data-aos="fade-up"
                    data-aos-anchor-placement="center-bottom">
                        <div class="product-card shadow-sm">
                            <div class="position-relative">
                                <a href="{{ route('cart.detail') }}"><img src="{{ asset('assets/images/layouts/7.webp') }}" class="product-image w-100" alt="Product"></a>
                                <span class="discount-badge">-20%</span>
                                <button class="wishlist-btn">
                                    <i class="bi bi-heart"></i>
                                </button>
                            </div>
                            <div class="p-3">
                                <span class="category-badge mb-2 d-inline-block">Electronics</span>
                                <h6 class="mb-1">Wireless Headphones</h6>
                                <div class="rating-stars mb-2">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-half"></i>
                                    <span class="text-muted ms-2">(4.5)</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="price">$129.99</span>
                                    <button class="btn cart-btn">
                                        <i class="bi bi-cart-plus">Add Cart</i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Product Card 2 -->
                    <div class="col-md-4" data-aos="fade-up"
data-aos-anchor-placement="center-bottom">
                        <div class="product-card shadow-sm">
                            <div class="position-relative">
                                <img src="{{ asset('assets/images/layouts/7.webp') }}" class="product-image w-100" alt="Product">
                                <button class="wishlist-btn">
                                    <i class="bi bi-heart"></i>
                                </button>
                            </div>
                            <div class="p-3">
                                <span class="category-badge mb-2 d-inline-block">Electronics</span>
                                <h6 class="mb-1">Smart Watch Pro</h6>
                                <div class="rating-stars mb-2">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star"></i>
                                    <span class="text-muted ms-2">(4.0)</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="price">$299.99</span>
                                    <button class="btn cart-btn">
                                        <i class="bi bi-cart-plus">Add Cart</i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Product Card 3 -->
                    <div class="col-md-4" data-aos="fade-up"
data-aos-anchor-placement="center-bottom">
                        <div class="product-card shadow-sm">
                            <div class="position-relative">
                                <img src="{{ asset('assets/images/layouts/7.webp') }}" class="product-image w-100" alt="Product">
                                <span class="discount-badge">-15%</span>
                                <button class="wishlist-btn">
                                    <i class="bi bi-heart"></i>
                                </button>
                            </div>
                            <div class="p-3">
                                <span class="category-badge mb-2 d-inline-block">Accessories</span>
                                <h6 class="mb-1">Leather Wallet</h6>
                                <div class="rating-stars mb-2">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <span class="text-muted ms-2">(5.0)</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="price">$59.99</span>
                                    <button class="btn cart-btn">
                                        <i class="bi bi-cart-plus">Add Cart</i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4" data-aos="fade-up"
data-aos-anchor-placement="center-bottom">
                        <div class="product-card shadow-sm">
                            <div class="position-relative">
                                <img src="{{ asset('assets/images/layouts/7.webp') }}" class="product-image w-100" alt="Product">
                                <span class="discount-badge">-15%</span>
                                <button class="wishlist-btn">
                                    <i class="bi bi-heart"></i>
                                </button>
                            </div>
                            <div class="p-3">
                                <span class="category-badge mb-2 d-inline-block">Accessories</span>
                                <h6 class="mb-1">Leather Wallet</h6>
                                <div class="rating-stars mb-2">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <span class="text-muted ms-2">(5.0)</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="price">$59.99</span>
                                    <button class="btn cart-btn">
                                        <i class="bi bi-cart-plus">Add Cart</i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-md-4" data-aos="fade-up"
data-aos-anchor-placement="center-bottom">
                        <div class="product-card shadow-sm">
                            <div class="position-relative">
                                <img src="{{ asset('assets/images/layouts/7.webp') }}" class="product-image w-100" alt="Product">
                                <span class="discount-badge">-15%</span>
                                <button class="wishlist-btn">
                                    <i class="bi bi-heart"></i>
                                </button>
                            </div>
                            <div class="p-3">
                                <span class="category-badge mb-2 d-inline-block">Accessories</span>
                                <h6 class="mb-1">Leather Wallet</h6>
                                <div class="rating-stars mb-2">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <span class="text-muted ms-2">(5.0)</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="price">$59.99</span>
                                    <button class="btn cart-btn">
                                        <i class="bi bi-cart-plus">Add Cart</i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-md-4" data-aos="fade-up"
data-aos-anchor-placement="center-bottom">
                        <div class="product-card shadow-sm">
                            <div class="position-relative">
                                <img src="{{ asset('assets/images/layouts/7.webp') }}" class="product-image w-100" alt="Product">
                                <span class="discount-badge">-15%</span>
                                <button class="wishlist-btn">
                                    <i class="bi bi-heart"></i>
                                </button>
                            </div>
                            <div class="p-3">
                                <span class="category-badge mb-2 d-inline-block">Accessories</span>
                                <h6 class="mb-1">Leather Wallet</h6>
                                <div class="rating-stars mb-2">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <span class="text-muted ms-2">(5.0)</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="price">$59.99</span>
                                    <button class="btn cart-btn">
                                        <i class="bi bi-cart-plus">Add Cart</i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-md-4" data-aos="fade-up"
data-aos-anchor-placement="center-bottom">
                        <div class="product-card shadow-sm">
                            <div class="position-relative">
                                <img src="{{ asset('assets/images/layouts/7.webp') }}" class="product-image w-100" alt="Product">
                                <span class="discount-badge">-15%</span>
                                <button class="wishlist-btn">
                                    <i class="bi bi-heart"></i>
                                </button>
                            </div>
                            <div class="p-3">
                                <span class="category-badge mb-2 d-inline-block">Accessories</span>
                                <h6 class="mb-1">Leather Wallet</h6>
                                <div class="rating-stars mb-2">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <span class="text-muted ms-2">(5.0)</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="price">$59.99</span>
                                    <button class="btn cart-btn">
                                        <i class="bi bi-cart-plus">Add Cart</i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="col-md-4" data-aos="fade-up"
data-aos-anchor-placement="center-bottom">
                        <div class="product-card shadow-sm">
                            <div class="position-relative">
                                <img src="{{ asset('assets/images/layouts/7.webp') }}" class="product-image w-100" alt="Product">
                                <span class="discount-badge">-15%</span>
                                <button class="wishlist-btn">
                                    <i class="bi bi-heart"></i>
                                </button>
                            </div>
                            <div class="p-3">
                                <span class="category-badge mb-2 d-inline-block">Accessories</span>
                                <h6 class="mb-1">Leather Wallet</h6>
                                <div class="rating-stars mb-2">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <span class="text-muted ms-2">(5.0)</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="price">$59.99</span>
                                    <button class="btn cart-btn">
                                        <i class="bi bi-cart-plus">Add Cart</i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="col-md-4" data-aos="fade-up"
data-aos-anchor-placement="center-bottom">
                        <div class="product-card shadow-sm">
                            <div class="position-relative">
                                <img src="{{ asset('assets/images/layouts/7.webp') }}" class="product-image w-100" alt="Product">
                                <span class="discount-badge">-15%</span>
                                <button class="wishlist-btn">
                                    <i class="bi bi-heart"></i>
                                </button>
                            </div>
                            <div class="p-3">
                                <span class="category-badge mb-2 d-inline-block">Accessories</span>
                                <h6 class="mb-1">Leather Wallet</h6>
                                <div class="rating-stars mb-2">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <span class="text-muted ms-2">(5.0)</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="price">$59.99</span>
                                    <button class="btn cart-btn">
                                        <i class="bi bi-cart-plus">Add Cart</i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="col-md-4" data-aos="fade-up"
data-aos-anchor-placement="center-bottom">
                        <div class="product-card shadow-sm">
                            <div class="position-relative">
                                <img src="{{ asset('assets/images/layouts/7.webp') }}" class="product-image w-100" alt="Product">
                                <span class="discount-badge">-15%</span>
                                <button class="wishlist-btn">
                                    <i class="bi bi-heart"></i>
                                </button>
                            </div>
                            <div class="p-3">
                                <span class="category-badge mb-2 d-inline-block">Accessories</span>
                                <h6 class="mb-1">Leather Wallet</h6>
                                <div class="rating-stars mb-2">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <span class="text-muted ms-2">(5.0)</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="price">$59.99</span>
                                    <button class="btn cart-btn">
                                        <i class="bi bi-cart-plus">Add Cart</i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-md-4" data-aos="fade-up"
data-aos-anchor-placement="center-bottom">
                        <div class="product-card shadow-sm">
                            <div class="position-relative">
                                <img src="{{ asset('assets/images/layouts/7.webp') }}" class="product-image w-100" alt="Product">
                                <span class="discount-badge">-15%</span>
                                <button class="wishlist-btn">
                                    <i class="bi bi-heart"></i>
                                </button>
                            </div>
                            <div class="p-3">
                                <span class="category-badge mb-2 d-inline-block">Accessories</span>
                                <h6 class="mb-1">Leather Wallet</h6>
                                <div class="rating-stars mb-2">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <span class="text-muted ms-2">(5.0)</span>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="price">$59.99</span>
                                    <button class="btn cart-btn">
                                        <i class="bi bi-cart-plus">Add Cart</i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- More product cards can be added here -->

                </div>
            </div>
        </div>
    </div>
</main>

@endsection
@extends('layouts.main')

@section('content')

<main class="pt-90">
    <div class="mb-4 pb-4"></div>



<div class="cart-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h6 class="pb-2"><a href="{{ route('shop') }}" class="navigation__link"><i class="fa-solid fa-arrow-left"></i> Back to Cart</a></h6>
                <div class="main-heading mb-10">My wishlist</div>
                <div class="table-wishlist">
                    <table cellpadding="0" cellspacing="0" border="0" width="100%">
                        <thead>
                            <tr>
                                <th width="45%">Product Name</th>
                                <th width="15%">Unit Price</th>
                                <th width="15%">Stock Status</th>
                                <th width="15%"></th>
                                <th width="10%"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td width="45%">
                                    <div class="display-flex align-center">
                                        <div class="img-product">
                                            <img src="{{ asset('assets/images/layouts/7.webp') }}" alt="" class="mCS_img_loaded">
                                        </div>
                                        <div class="name-product">
                                            Apple iPad Mini
                                        </div>
                                    </div>
                                </td>
                                <td width="15%" class="price">$110.00</td>
                                <td width="15%"><span class="in-stock-box">In Stock</span></td>
                                <td width="15%"><button class="round-black-btn small-btn">Add to Cart</button></td>
                                <td width="10%" class="text-center"><a href="#" class="trash-icon"><i class="far fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <td width="45%">
                                    <div class="display-flex align-center">
                                        <div class="img-product">
                                            <img src="{{ asset('assets/images/layouts/7.webp') }}" alt="" class="mCS_img_loaded">
                                        </div>
                                        <div class="name-product">
                                            Apple iPad Mini
                                        </div>
                                    </div>
                                </td>
                                <td width="15%" class="price">$110.00</td>
                                <td width="15%"><span class="in-stock-box">In Stock</span></td>
                                <td width="15%"><button class="round-black-btn small-btn">Add to Cart</button></td>
                                <td width="10%" class="text-center"><a href="#" class="trash-icon"><i class="far fa-trash-alt"></i></a></td>
                            </tr>
                            <tr>
                                <td width="45%">
                                    <div class="display-flex align-center">
                                        <div class="img-product">
                                            <img src="{{ asset('assets/images/layouts/7.webp') }}" alt="" class="mCS_img_loaded">
                                        </div>
                                        <div class="name-product">
                                            Apple iPad Mini
                                        </div>
                                    </div>
                                </td>
                                <td width="15%" class="price">$110.00</td>
                                <td width="15%"><span class="in-stock-box">In Stock</span></td>
                                <td width="15%"><button class="round-black-btn small-btn">Add to Cart</button></td>
                                <td width="10%" class="text-center"><a href="#" class="trash-icon"><i class="far fa-trash-alt"></i></a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
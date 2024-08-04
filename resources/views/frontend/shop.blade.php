@extends('frontend.layouts.main')
@section('main-container')
    <!-- hero Section -->
    <section id="page-header">
        <h2>#stayhome</h2>
        <p>Save more with coupons & up tp 70% off!</p>
    </section>
    <!-- products Section -->
    <section id="product01" class="section-pa1">
        <div class="pro-container" id="data-output">
            <!-- Populated from the javascript file -->
            @foreach ($products as $product)
                <div class="pro" onclick="window.location.href='{{ url('/product') }}';">
                    <img src='data:image/jpeg;base64,{{ base64_encode($product->image) }}' alt="">
                    <div class="desc">
                        <span>{{ $product->brand }}</span>
                        <h5>{{ $product->description }}</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>{{ $product->price }}</h4>
                    </div>
                    <a href=""><i class="fa-solid fa-cart-shopping cart"></i></a>
                </div>
            @endforeach
        </div>
        <div class="pro-container" id="data-output2">
            <!-- Populated from the javascript file -->
            @foreach ($arrivals as $arrival)
                <div class="pro" onclick="window.location.href='{{ url('/product') }}';">
                    <img src='data:image/jpeg;base64,{{ base64_encode($arrival->image) }}' alt="">
                    <div class="desc">
                        <span>{{ $arrival->brand }}</span>
                        <h5>{{ $arrival->description }}</h5>
                        <div class="star">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                        <h4>{{ $arrival->price }}</h4>
                    </div>
                    <a href=""><i class="fa-solid fa-cart-shopping cart"></i></a>
                </div>
            @endforeach
        </div>
    </section>
    <!-- Pagination section -->
    <section id="pagination" class="section-pa1">
        <a href="#">1</a>
        <a href="#">2</a>
        <a href="#"><i class="fa-solid fa-arrow-right"></i></a>
    </section>
    <!-- News Letter section -->
    <section id="newsLetter" class="section-pa1 section-mr1">
        <div class="newsText">
            <h4>Sign Up For Newsletters</h4>
            <p>Get E-mail updates about our latest shop and <span>special offers.</span></p>
        </div>
        <div class="form">
            <input type="text" placeholder="Your email address">
            <button class="normal">Sign Up</button>
        </div>
    </section>
@endsection

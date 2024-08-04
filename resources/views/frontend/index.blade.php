@extends('frontend.layouts.main')
@section('main-container')
    <!-- hero Section -->
    <section id="hero-section">
        <h4>Trade-in-offer</h4>
        <h2>Super value deals</h2>
        <h1>on all products</h1>
        <p>Save more with coupons & up tp 70% off!</p>
        <button>Shop Now</button>
    </section>
    <!-- feature Section -->
    <section id="feature-section" class="section-pa1">
        <div class="fe-box">
            <img src="{{url('frontend/image/features/f1.png')}}" alt="">
            <h6>Free Shipping</h6>
        </div>
        <div class="fe-box">
            <img src="{{url('frontend/image/features/f2.png')}}" alt="">
            <h6>Online Order</h6>
        </div>
        <div class="fe-box">
            <img src="{{url('frontend/image/features/f3.png')}}" alt="">
            <h6>Save Money</h6>
        </div>
        <div class="fe-box">
            <img src="{{url('frontend/image/features/f4.png')}}" alt="">
            <h6>Promotions</h6>
        </div>
        <div class="fe-box">
            <img src="{{url('frontend/image/features/f5.png')}}" alt="">
            <h6>Happy Sell</h6>
        </div>
        <div class="fe-box">
            <img src="{{url('frontend/image/features/f6.png')}}" alt="">
            <h6>24/7 Support</h6>
        </div>
    </section>
    <!-- products Section -->
    <section id="product01" class="section-pa1">
        <h2>Featured Products</h2>
        <p>Summer Collection New Designs</p>
        <div class="pro-container" id="data-output">
            <!-- Populated from the javascript file -->
        </div>
    </section>
    <!-- Banner Section -->
    <section id="banner" class="section-mr1">
        <h4>Repair Service</h4>
        <h2>Up to <span>70% off</span> - All t-Shirts & Accessories</h2>
        <button class="normal">Explore More</button>
    </section>
    <!-- New Arrivals section -->
    <section id="product01" class="section-pa1">
        <h2>New Arrivals</h2>
        <p>Summer Collection New Designs</p>
        <div class="pro-container" id="data-output2">
            <!-- Populated from the javascript file -->
        </div>
    </section>
    <!-- sm banner -->
    <section id="sm-banner" class="section-pa1">
        <div class="banner-Box">
            <h4>crazy deals</h4>
            <h2>buy 1 get 1 free</h2>
            <span>The best classic dress is on at cara</span>
            <button class="white">Learn More</button>
        </div>
        <div class="banner-Box banner-Box2">
            <h4>spring/summer</h4>
            <h2>upcoming season </h2>
            <span>The best classic dress is on at cara</span>
            <button class="white">Collection</button>
        </div>
    </section>
    <!-- Banner 03 section -->
    <section id="banner3">
        <div class="banner-Box">
            <h2>SEASONAL SALE</h2>
            <h3>Winter Collection -50% OFF</h3>
        </div>
        <div class="banner-Box banner-Box2">
            <h2>NEW FOOTWEAR COLLECTION</h2>
            <h3>Spring / Summer 2022</h3>
        </div>
        <div class="banner-Box banner-Box3">
            <h2>T-SHIRTS</h2>
            <h3>New Trendy Prints</h3>
        </div>
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

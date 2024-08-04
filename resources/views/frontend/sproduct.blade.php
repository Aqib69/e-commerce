@extends('frontend.layouts.main')
@section('main-container')
    <!-- prodetails section -->
    <section id="prodetails" class="section-pa1">
        <div class="single-pro-image">
            <img src="{{url('frontend/image/products/f1.jpg')}}" width="100%" id="mainImage" alt="">
            <div class="small-image-grp">
                <div class="small-image-col">
                    <img src="{{url('frontend/image/products/f1.jpg')}}" width="100%" class="small-image" alt="">
                </div>
                <div class="small-image-col">
                    <img src="{{url('frontend/image/products/f2.jpg')}}" width="100%" class="small-image" alt="">
                </div>
                <div class="small-image-col">
                    <img src="{{url('frontend/image/products/f3.jpg')}}" width="100%" class="small-image" alt="">
                </div>
                <div class="small-image-col">
                    <img src="{{url('frontend/image/products/f4.jpg')}}" width="100%" class="small-image" alt="">
                </div>
            </div>
        </div>
        <div class="single-pro-details">
            <h6>Home / T-shirts</h6>
            <h4>Men's Fashion T-Shirts</h4>
            <h2>$139</h2>
            <select>
                <option>Select Size</option>
                <option>XL</option>
                <option>XXL</option>
                <option>Small</option>
                <option>Large</option>
            </select>
            <input type="number" value="1">
            <button class="normal">Add to Cart</button>
            <h4>Product Details</h4>
            <span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam voluptatum quas, voluptas commodi
                modi tempora architecto, ipsum illum quaerat asperiores magnam excepturi consectetur est
                quis! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel, exercitationem. Lorem ipsum
                dolor sit amet consectetur adipisicing elit. Laborum, hic aut. Aliquid architecto omnis
                commodi.</span>
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

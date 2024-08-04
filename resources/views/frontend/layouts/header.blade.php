<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ url('frontend/sass/index.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/sass/contact.css') }}">
    <title>E-commerce Website</title>
</head>

<body>
    <!-- navBar Section -->
    <section id="header">
        <a href=""><img src="{{ url('frontend/image/logo2.png') }}" class="nav-Logo"
                style="width: 160px; height: 55px;" alt=""></a>
        <div>
            <ul id="navBar">
                <li><a class="active" href="{{ url('/') }}">Home</a></li>
                <li><a href="{{ url('/shop') }}">Shop</a></li>
                <li><a href="{{ url('/blog') }}">Blog</a></li>
                <li><a href="{{ url('/about') }}">About</a></li>
                <li><a href="{{ url('/contact') }}">Contact</a></li>
                <li id="lg-bag"><a href="{{ url('/cart') }}"><i class="fa-solid fa-bag-shopping"></i></a></li>
                <a id="close"><i class="fa-solid fa-xmark fa-lg"></i></a>
            </ul>
        </div>
        <div id="mobile">
            <a href="cart.html"><i class="fa-solid fa-bag-shopping" style="color: #000;"></i></a>
            <i id="bar" class="fas fa-outdent"></i>
        </div>
    </section>

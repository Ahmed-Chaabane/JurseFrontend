<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('frontend/assets/images/favicon.ico') }}">
    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('frontend/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/templatemo-574-mexant.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">

    <!-- header part  -->
</head>

<body>

<!-- ***** Header Area Start ***** -->

<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="{{url('/')}}" class="logo">
                        <img src="{{ asset('frontend/assets/images/logo.png') }}" alt="">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="scroll-to-section">
                            <a href="{{ Request::is('/') ? '#top' : url('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">Home</a>
                        </li>
                        <li class="scroll-to-section"><a href="{{url('/dates')}}">Dates</a></li>
                        <li class="has-sub">
                            <a href="javascript:void(0)">Participation</a>
                            <ul class="sub-menu">
                                <li><a href="{{url('/program')}}">Program</a></li>
                                <li><a href="{{url('/guidelines')}}">Guidelines</a></li>
                                <li><a href="{{url('/callforpapers')}}">Call for Papers</a></li>
                                <li><a href="{{url('/registration')}}">Registration</a></li>
                                <li><a href="{{url('/socialevents')}}">Social Events</a></li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a href="javascript:void(0)">Presentation</a>
                            <ul class="sub-menu">
                                <li><a href="{{url('/keynote')}}">Keynote Speakers</a></li>
                                <li><a href="{{url('/specialsessions')}}">Special Sessions</a></li>
                            </ul>
                        </li>
                        <li class="scroll-to-section"><a href="{{url('/committees')}}">Committees</a></li>
                        <li class="scroll-to-section"><a href="{{url('/sponsors')}}">Sponsors</a></li>
                        <li class="has-sub">
                            <a href="javascript:void(0)">Venue</a>
                            <ul class="sub-menu">
                                <li><a href="{{url('/tunis')}}">Tunis</a></li>
                                <li><a href="{{url('/conference')}}">Conference Venue</a></li>
                                <li><a href="/hotels">Hotels</a></li>
                            </ul>
                        </li>
                        <li class="scroll-to-section"><a href="{{url('/medias')}}">Medias</a></li>
                        <li class="scroll-to-section"><a href="{{url('/contact')}}">Contact</a></li>
                        <li></li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->

@extends('layouts.app')

@section('content')

<body class="stretched" data-loader-timeout="200">
    <!-- Google Tag Manager (noscript) -->
    <!-- End Google Tag Manager (noscript) -->
    <!-- Document Wrapper
        ============================================= -->
    <div id="wrapper" class="clearfix">
        <!-- Header ============================================= -->
        <header id="header" class="transparent-header dark" data-sticky-class="not-dark">
            <div id="header-wrap">
                <div class="container clearfix">
                    <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>
                    <!-- Logo ============================================= -->
                    <div id="logo">
                        <a href="/" class="standard-logo"><img src="/images/logo.png" alt="Akaunting Logo">
                            <a href="/" class="retina-logo"><img src="/images/logo.png" alt="Akaunting Logo"></a>
                    </div>
                    <!-- #logo end -->

                    <div id="top-account" class="dropdown">
                        <a href="#" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="fas fa-user"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu1">
                            <li><a href="{{ route('dashboard') }}">Dashboard</a></li>
                            <li><a href="">Subscriptions</a></li>
                            <li><a href="">Tickets</a></li>
                            <li role="separator" class="divider"></li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                {{-- <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                                    {{ __('Logout') }}
                                </x-responsive-nav-link> --}}
                            </form>
                        </ul>
                    </div>

                    <div id="top-download" class="hidden-xs">
                        <a href="" class="button button-mini button-border button-circle button-light"><i class="fas fa-arrow-alt-circle-right"></i> Get Started</a>
                    </div>


                    <nav id="primary-menu">

                        <ul>
                            <li><a href="" target="_self" class=""> Apps</a></li>
                            <li><a href="" target="_self" class=""> Features</a></li>
                            <li><a href="" target="_self" class=""> Support</a></li>
                            <li><a href="" target="_self" class=""> Blog</a></li>
                        </ul>

                    </nav>
                </div>
            </div>
        </header><!-- #header end -->
        <section id="slider" class="full-screen slider-parallax slider-parallax-visible" style="height: 579px;">
            <div class="slider-parallax-inner hero-pi">
                <div class="vertical-middle hero-vm">
                    <div class="container dark clearfix">
                        <div class="row clearfix">
                            <div class="col-md-6 col-sm-8">
                                <div class="emphasis-title">
                                    <h1 class="font-body hero-h1">Free Accounting Software</h1>
                                </div>
                                <a href="{{ route('dashboard') }}" class="button button-large button-white button-light capitalize" style="border-radius: 23px;">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>
    </boby>
    @endsection

@extends('frontend.layouts.master')

@section('title', 'E-SHOP || About Us')

@section('main-content')

    <!-- Breadcrumbs -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="bread-inner">
                        <ul class="bread-list">
                            <li><a href="{{ route('home') }}"> {{ __('Home') }} <i class="ti-arrow-right"></i></a></li>
                            <li class="active"><a href="#"> {{ __('About Us') }} </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

    <!-- About Us -->
    <section class="about-us section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="about-content">
                        @php
                            $settings = DB::table('settings')->get();
                        @endphp
                        <h3> {{ __('Welcome to') }} <span>Eshop</span></h3>
                        <p>
                            @foreach ($settings as $data)
                                {{ $data->description }}
                            @endforeach
                        </p>
                        <div class="button">
                            <a href="{{ route('blog') }}" class="btn"> {{ __('Our Blog') }} </a>
                            <a href="{{ route('contact') }}" class="btn primary"> {{ __('Contact Us') }} </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="about-img overlay">
                        {{-- <div class="button">
								<a href="https://www.youtube.com/watch?v=nh2aYrGMrIE" class="video video-popup mfp-iframe"><i class="fa fa-play"></i></a>
							</div> --}}
                        <img src="@foreach ($settings as $data) {{ $data->photo }} @endforeach"
                            alt="@foreach ($settings as $data) {{ $data->photo }} @endforeach">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Us -->


    <!-- Start Shop Services Area -->
    <section class="shop-services section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-rocket"></i>
                        <h4> {{ __('Free shiping') }} </h4>
                        <p> {{ __('Orders over ') }}$100 </p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-reload"></i>
                        <h4> {{ __('Free Return') }} </h4>
                        <p> {{ __('Within 30 days returns') }} </p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-lock"></i>
                        <h4> {{ __('Sucure Payment') }} </h4>
                        <p> {{ __('100% secure payment') }} </p>
                    </div>
                    <!-- End Single Service -->
                </div>
                <div class="col-lg-3 col-md-6 col-12">
                    <!-- Start Single Service -->
                    <div class="single-service">
                        <i class="ti-tag"></i>
                        <h4> {{ __('Best Peice') }} </h4>
                        <p> {{ __('Guaranteed price') }} </p>
                    </div>
                    <!-- End Single Service -->
                </div>
            </div>
        </div>
    </section>
    <!-- End Shop Services Area -->

    @include('frontend.layouts.newsletter')
@endsection

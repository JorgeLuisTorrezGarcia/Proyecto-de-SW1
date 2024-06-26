<!DOCTYPE html>
<html lang="zxx">

<head>
    @include('frontend.layouts.head')
</head>

<body class="js">

    <!-- Preloader -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- End Preloader -->

    @unless (request()->is('about-us','contact', 'blog', 'user/register'))
        <!-- Header -->
        @include('frontend.layouts.notification')
        <!--/ End Header -->
        @include('frontend.layouts.header')
    @endunless
    @yield('main-content')

    @include('frontend.layouts.footer')

</body>

</html>

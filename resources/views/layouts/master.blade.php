<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <title>Si-Bapas Madiun</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ 'img/favicon.png' }}" />

    <!-- PLUGINS CSS STYLE -->
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/themify-icons/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/slick/slick-theme.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/fancybox/jquery.fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/aos/aos.css') }}">

    <!-- CUSTOM CSS -->
    <link href="{{ asset('css/publicStyle.css') }}" rel="stylesheet">
</head>

@if (session('alert'))

    <body class="body-wrapper" data-spy="scroll" data-target=".privacy-nav" onLoad="error();">
    @else

        <body class="body-wrapper" data-spy="scroll" data-target=".privacy-nav">
@endif

@include('layouts.navbar')

@yield('content')

<section class="feature section pt-0" id="download">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 ml-auto justify-content-center">
                <!-- Feature Mockup -->
                <div class="image-content" data-aos="fade-right">
                    <img class="img-fluid mt-5" src="{{ asset('img/feature/mockup.png') }}" alt="iphone">
                </div>
            </div>
            <div class="col-lg-6 mr-auto align-self-center">
                <div class="feature-content">
                    <!-- Feature Title -->
                    <h2>Download Aplikasi Si-Bima <a href="#"> Playstore</a></h2>
                    <!-- Feature Description -->
                    <p class="desc">Aplikasi pelayanan informasi digital Balai Pemasyarakatan Kelas II Madiun
                        untuk
                        memudahkan
                        dalam
                        pencarian informasi tentang narapidana, serta untuk pengecekan status warga binaan</p>
                    <p><img src="{{ asset('img/app/google-play.jpg') }}" width="150px" alt="Google Play">
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--====  End of Feature Grid  ====-->
<!-- To Top -->
<div class="scroll-top-to">
    <i class="ti-angle-up"></i>
</div>
@include('layouts.footer')
<!-- JAVASCRIPTS -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ asset('plugins/slick/slick.min.js') }}"></script>
<script src="{{ asset('plugins/fancybox/jquery.fancybox.min.js') }}"></script>
<script src="{{ asset('plugins/syotimer/jquery.syotimer.min.js') }}"></script>
<script src="{{ asset('plugins/aos/aos.js') }}"></script>
<!-- Scroll -->
<script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
<script>
    var scroll = new SmoothScroll('a[href*="#"]', {
        speed: 1000
    });
</script>

<script src="{{ asset('js/page/sweetalert.js') }}"></script>
<script src="{{ asset('bundles/sweetalert/sweetalert.min.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
</body>

</html>

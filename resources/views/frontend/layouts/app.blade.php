<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="urban harvest namibia"/>
    <meta name="description" content="Our Mission. Using advanced technologies to grow fresh, nutritious Namibian vegetables. · Merging Food and Technology">
    <meta name="author" content="Jean Danial">
    <meta name="robots" content="follow"/>
    <meta name="google-site-verification" content="t5SSdSmkdkrNy9oNVQIBppzwAbT2vYgPAhv0A_GuQ08"/>
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <link rel="icon" href="favicon.ico">
	<title>---BANG----</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0"/>
    <link href="https://fonts.googleapis.com/css?family=DM Sans" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Inter" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <!-- <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper-scrollbar.min.css" /> -->
    <link href="//db.onlinewebfonts.com/c/46d3877aa4bb5bcb284281e0c9544c18?family=FF+Kievit" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}"/>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.14.1/mapbox-gl.css' rel='stylesheet' />
    <link href='//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css' rel='stylesheet' />
    <link rel="stylesheet" href="{{asset('frontend/scss/style.css')}} " />
    <link rel="stylesheet" href="{{asset('frontend/css/dev_style.css')}} " />
 
    
    <script>
        let base_url = "{{url('/')}}";
    </script>
</head>

<body class="">
	<!-- Header -->
	{{-- @include('frontend.layouts.header') --}}
    <!-- Header end-->
    <!--Section-->
    <section>
        @yield('content')
    </section>
    @include('frontend.layouts.footer')
    <!-- section end-->
    
    <!--Footer-->
    
    <!--Footer End-->
    
	<!-- JavaScript -->

	<script src="{{asset('frontend/js/jquery.min.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    
    <script src="https://cc-cdn.com/generic/scripts/v1/cc_c2a.min.js"></script>
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.14.1/mapbox-gl.js'></script>
    <script src='//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js'></script>    
    <script src="{{asset('frontend/js/frontend_script.js')}}"></script>
    <!-- <script src="https://unpkg.com/swiper/js/swiper-scrollbar.min.js"></script> -->
    
    <!-- Mobile Navigation End -->

    @yield('script')
   
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic page needs -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <meta name="description"
        content="responsive ,website , web , projects, news, comments">
    <meta name="keywords"
    content="responsive ,website , web , projects, news, comments"/>
    <!-- Mobile specific metas  -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon  -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <!-- CSS Style -->
    @include('front.partials.style')
    <script src="https://kit.fontawesome.com/ea9a619c4d.js" crossorigin="anonymous"></script>


</head>

<body class="cms-index-index cms-home-page">

    @include('front.partials.mobile')
    <div id="page">
        <!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

        <!-- Header -->
        @include('front.partials.header')
        <!-- end header -->

        <!-- Navigation -->
        @include('front.partials.navigation')
        <!-- end nav -->

        <!-- JTV Home Slider -->
        @yield('content')

        @include('front.partials.newsLetter')
        
        @include('front.partials.footer')



    </div>

    <!-- End Footer -->
    @include('front.partials.scripts')

</body>

<!-- Mirrored from htmlmystore.justthemevalley.com/bigstart/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 07 Mar 2021 15:20:05 GMT -->

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>BeautyCenter - The Best in the World</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <title>@yield("title")</title>

    <!-- Favicon -->
    <link href="{{asset("assets")}}/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="{{asset("assets")}}/lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset("assets")}}/lib/owlcarousel/{{asset("assets")}}/owl.carousel.min.css" rel="stylesheet"/>
    <link href="{{asset("assets")}}/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset("assets")}}/css/style.css" rel="stylesheet">
    @yield("head")
</head>



<body>

@include("home.Header")


@section('slider')
@show



@yield('content')

@include('home.Footer')
@yield('foot')
</body>
</html>

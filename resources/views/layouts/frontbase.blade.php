<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>@yield("title")</title>

    <meta name="keywords" content="@yield("keywords")">
    <meta name="description" content="@yield("description")">
    <meta name="author" content="GULCAN OZEL">
    <link rel="shortcut icon" type="image/x-icon" href="@yield("icon")">

    <!-- Site Icons -->
    <link rel="shortcut icon" src="{{asset('assets')}}/img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" src="{{asset('assets')}}/img/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/custom.css">

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield("head")
</head>

<body>
@include("home.header")


@section('sidebar')

@show

@section('slider')
@show

@yield('content')


<@include("home.footer")
@yield('foot')
</body>
</html>

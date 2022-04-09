<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <title>@yield("title")</title>

    <!-- Favicons -->
    <link src="{{asset('assets')}}/admin/img/favicon.png" rel="icon">
    <link src="{{asset('assets')}}/admin/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('assets')}}/admin/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--external css-->
    <link href="{{asset('assets')}}/admin/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{asset('assets')}}/admin/css/style.css" rel="stylesheet">
    <link href="{{asset('assets')}}/admin/css/style-responsive.css" rel="stylesheet">
    @yield("head")
</head>
<body>
@include("admin.header")


@section('sidebar')
    @include("admin.sidebar")
@show

@yield('content')


<@include("admin.footer")
@yield('foot')

</body>
</html>

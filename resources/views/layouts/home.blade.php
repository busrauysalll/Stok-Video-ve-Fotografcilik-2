<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('description')">
    <meta name="author" content="description">
    <!--Less styles -->
    <!-- Other Less css file //different less files has different color scheam
     <link rel="stylesheet/less" type="text/css" href="themes/less/simplex.less">
     <link rel="stylesheet/less" type="text/css" href="themes/less/classified.less">
     <link rel="stylesheet/less" type="text/css" href="themes/less/amelia.less">  MOVE DOWN TO activate
     -->
    <!--<link rel="stylesheet/less" type="text/css" href="themes/less/bootshop.less">
    <script src="themes/js/less.js" type="text/javascript"></script> -->
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="Busra">

    <!-- Bootstrap style -->
    <link id="callCss" rel="stylesheet" href="{{asset('assets')}}/themes/bootshop/bootstrap.min.css" media="screen"/>
    <link href="{{asset('assets')}}/themes/css/base.css" rel="stylesheet" media="screen"/>
    <!-- Bootstrap style responsive -->
    <link href="{{asset('assets')}}/themes/css/bootstrap-responsive.min.css" rel="stylesheet"/>
    <link href="{{asset('assets')}}/themes/css/font-awesome.css" rel="stylesheet" type="text/css">
    <!-- Google-code-prettify -->
    <link href="{{asset('assets')}}/themes/js/google-code-prettify/prettify.css" rel="stylesheet"/>
    <!-- fav and touch icons -->
    <link rel="shortcut icon" href="{{asset('assets')}}/themes/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('assets')}}/themes/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('assets')}}/themes/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('assets')}}/themes/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="{{asset('assets')}}/themes/images/ico/apple-touch-icon-57-precomposed.png">
    <style type="text/css" id="enject"></style>
    @yield('css')
    @yield('headerjs')

</head>
<body>
@include('home._header')
<div id="logoArea" class="navbar">
    <a id="smallScreen" data-target="#topMenu" data-toggle="collapse" class="btn btn-navbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </a>
    @include('home._menu')


</div>
@include('home._slider')
@include('home._category')
@section('content')

@show

@include('home._footer')
@yield('footerjs')

</body>
</html>

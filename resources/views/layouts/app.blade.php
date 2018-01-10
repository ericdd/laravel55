<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>@yield('title') - Laravel</title>

<link rel="stylesheet" href="/assets/css/font-awesome.min.css" />
<link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
<script type="text/javascript" src="/js/app.js"></script>

<style type="text/css">
.result-set { margin-top: 1em }
</style>


<script>
$(function () {
	$('div.alert').not('.alert-important').delay(3000).fadeOut(500);
})
</script>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">


                    <!-- Branding Image -->
                    <a class="navbar-brand" href="/">
                        Laravel
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li><a href="/users">Users</a></li>
						<li><a href="/roles">roles</a></li>
						<li><a href="/permissions">permissions</a></li>
						 <li><a href="/posts">Posts</a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                             <li><a href="/login">Login</a></li>

						<?php if(app('session')->get("name")) { ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                             {{session("name")}} <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="/users/info"><i class="fa fa-btn fa-unlock"></i>用户中心</a>
										<li><a href="/resetpwd">修改密码</a></li>
                                      <li>  <a href="/logout">Logout </a>   </li>




                                </ul>

                      </ul>
					 <?php } ?>


                </div>
            </div>
        </nav>


        <div class="container"> @include('flash::message')</div>


		@if (isset($msg) && is_array($msg))
			<div class="container"> <div class="alert alert-{{$msg[1]}}">{{$msg[0]}}</div></div>
		@elseif(isset($msg))
			<div class="container"> <div class="alert alert-success">{{$msg}}</div></div>
		@endif


        <div class="container">
            @yield('content')
        </div>
    </div>


</body>
</html>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>view</title>
<meta name="Keywords" content="" />
<meta name="Description" content="" />
<style type="text/css">
*{list-style:none;font-size:14px;font-family:tahoma;}
body{padding:20px 20px;margin-bottom:400px;}
.p{margin:4px 0;word-wrap:break-word;word-break:break-all;}
.h2{color:blue;font-size:16px;margin:7px 0;}
</style>
</head>
<body>

<pre>
Blade的语法会自动调用 PHP htmlspecialchars 函数来避免 XSS 攻击。如果你不想你的数据被转义，你可以使用下面的语法：
Hello, @{!! $name !!}.
你可以使用 @ 符号来告知 Blade 渲染引擎你需要保留这个表达式原始形态
https://d.laravel-china.org/docs/5.5/blade

视图的变量传参
(1)、在返回视图里传参，如：return view('xxx',$data);
(2)、外部传参；如：return view('xxx')->with('_data', $data);


</pre>

<hr />

<!-- 生成<input type="hidden" name="_token" value="jkzU9KcvX914HUzI1ci3BXLsla3CGSF9yoqeyNhs"> -->

<h2>服务注入</h2>

@inject('admm', 'App\Models\Admin')
<p class="p">{{$admm->getFirstData()}}</p>
<p class="p">{{$admm->name()}}</p>
<p class="p">{{$admm->foo1()}}</p>


<h2>{{ csrf_field() }}</h2>

<h2 class="h2">视图间共享数据</h2>

<p class="p">{{ $_sitename }}</p>

<h2 class="h2">视图的变量传参</h2>
<p class="p">{{ $city }}</p>
<p class="p">{{ $age }}</p>

<p class="p">{{ $_info }}</p>

<p class="p">{{ $_data1['sex'] }}</p>
<p><?php print_r($_data1); ?></p>

<h2 class="h2">变量</h2>
<p class="p">{{config('test.zd1')}}</p>
<p class="p">{!! config('test.zd1') !!}</p>

<p class="p">{{config('test.zd2')}}</p>
<p class="p">{!! config('test.zd2') !!}</p>
<p class="p">@{{config('test.zd2')}}</p>

<p class="p">{!!trans('user.title')!!}</p>


<h2 class="h2">函数</h2>
<p class="p">{{config('app.locale')}}</p>
<p class="p">{{ app()->getLocale() }}</p>



<h2 class="h2">命名路由</h2>
<p>{{route('a1')}}</p>
<p>{{route('r.a1')}}</p>

<hr />


<div>

<?php

var_dump(Route::has('a1'));
var_dump(Route::has('r.a1'));
var_dump(Route::has('login'));
var_dump(Route::has('route'));
var_dump(Route::has('/'));

?>
</div>

{{ dd(request()->route()->getAction()) }}




<script type="text/javascript">




</script>
</body>
</html>





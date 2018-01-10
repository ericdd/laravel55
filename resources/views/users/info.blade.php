@extends('layouts.app')

@section('title', 'Home')

@section('content')

<style type="text/css">
/* table */
#stable th{background:#eee;}
#stable td{padding:7px 15px;border:1px solid #ddd;text-align:left;}
td.td{width:20%;color:#333;}
</style>

<?php
$ip = getip();
?>


<div class="row">

	<table class="table table-bordered table-striped table-hover" id="stable">

	<tbody>


	<tr>
	<th colspan="4">基本信息</th>
	</tr>
	<tr><td class="td">Name</td>	<td class="td1" colspan=3>{{$rets->name}}</td>	</tr>
	<tr><td class="td">Email</td>	<td class="td1" colspan=3>{{$rets->email}}</td>	</tr>
	<tr><td class="td">updated_at</td>	<td class="td1" colspan=3>{{$rets->updated_at}}</td>	</tr>

	<tr>
	<td class="td">角色</td>
	<td class="td1" colspan=3>{{roles2name(app('session')->get("role_id"))}}</td>
	</tr>

	<tr>
	<td class="td">权限</td>
	<td class="td1" colspan=3>{{perms2name(app('session')->get("perm_id"))}}</td>
	</tr>

	<tr>
	<td class="td">上次登录时间</td>
	<td class="td1" colspan=3>{{app('session')->get("last_login")}}</td>
	</tr>

	<tr>
	<td class="td">登录IP</td>
	<td class="td1" colspan=3>
	<a target="_blank" href="http://www.ip138.com/ips138.asp?ip=<?php echo $ip; ?>"><?php echo $ip; ?></a>
	</td>
	</tr>

	<tr>
	<th colspan="4">系统信息</th>
	</tr>

	<tr>
	<td class="td">系统时间</td>
	<td class="td1" colspan=3><?php echo date('Y-m-d H:i',time()); ?></td>
	</tr>

	<tr>
	<td class="td">内存消耗</td>
	<td class="td1" colspan=3>
	<?php
	echo bsize(memory_get_usage());
	?>
	</td>
	</tr>

	<tr>
	<td class="td">客户端CPU</td>
	<td class="td1" colspan=3>
	<span id="cpu"></span>
	</td>
	</tr>

	<tr>
	<td class="td">客户端操作系统</td>
	<td class="td1" colspan=3>
	<?=getOs()?>
	</td>
	</tr>

	<tr>
	<td class="td">客户端浏览器</td>
	<td class="td1" colspan=3>
	<?=$_SERVER['HTTP_USER_AGENT']?>
	</td>
	</tr>


	</tbody>
	</table>


</div>

<script type="text/javascript">

function getCpu() {
	return navigator["cpuClass"] || (navigator["hardwareConcurrency"]+"核");
}

$("#cpu").html(getCpu());


</script>


@endsection
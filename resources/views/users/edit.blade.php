@extends('layouts.app')

@section('title', '编辑用户')

@section('content')

<style type="text/css">
.lab{vertical-align:middle;display:inline-block;margin:0 10px 0 0;}
b.requ{color:red;margin:0 2px 0 0;vertical-align:middle;}
</style>

    <div class="row">
        <div class="col-lg-12">
					<form method="POST" action="/users/{{ $rets->id }}" accept-charset="UTF-8" id="subform">
					{{ csrf_field() }}
					<input name="_method" type="hidden" value="PUT">

						<div class="form-group">
							<label for="name"><b class="requ">*</b>Name</label>
							<input required="" class="form-control" name="name" type="text" value="{{$rets->name}}" id="name">
						</div>

						<div class="form-group">
							<label for="email"><b class="requ">*</b>Email</label>
							<input required="" class="form-control" name="email" type="email" value="{{$rets->email}}" id="email">
						</div>

						<h5><b class="requ">*</b><b>角色</b></h5>

						<div class='form-group'>

								   @foreach ($roles as $role => $rid)
									<label class="lab"><input class="ckb" id="ckb{{$rid}}" name="roles[]" type="checkbox" value="{{$rid}}"> {{$role}}</label>
								   @endforeach


								</div>

						<div class="form-group">
							<label for="password">Password</label><br>
							<input  class="form-control" name="password" type="password" value="" id="password">

						</div>

						<div class="form-group">
							<label for="password">Confirm Password</label><br>
							<input  class="form-control" id="password2" type="password" value="">

						</div>

						<input class="btn btn-primary" type="submit" value="提 交">

						</form>
        </div>
    </div>


<script type="text/javascript">

var rids = "{{$rets->role_id}}".split(",");

console.log(rids);

for(var i=0, len=rids.length; i<len; i++) {
	$("#ckb"+rids[i]).prop("checked", true);
}


$("#subform").submit(function() {

	var pwd1 = $("#password").val();
	var pwd2 = $("#password2").val();

	if(pwd1) {
		if( pwd1 != pwd2 ) {
			alert("两次密码不一致。");
			return false;
		}
	}

})

</script>
@endsection
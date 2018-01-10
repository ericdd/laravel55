@extends('layouts.app')

@section('title', '修改密码')

@section('content')

<style type="text/css">
.lab{vertical-align:middle;display:inline-block;margin:0 10px 0 0;}
b.requ{color:red;margin:0 2px 0 0;vertical-align:middle;}
</style>

    <div class="row">
        <div class="col-lg-12">
					<form method="POST" action="" accept-charset="UTF-8" id="subform">
					{{ csrf_field() }}

						<div class="form-group">
							<label for="password"><b class="requ">*</b>密码</label><br>
							<input required  class="form-control" name="old_password" type="password" value="" id="old_password">

						</div>


						<div class="form-group">
							<label for="password"><b class="requ">*</b>新密码</label><br>
							<input required  class="form-control" name="password" type="password" value="" id="password1">

						</div>

						<div class="form-group">
							<label for="password"><b class="requ">*</b>重复新密码</label><br>
							<input required  class="form-control" name="password_confirmation" type="password" id="password2" value="">

						</div>

						<input class="btn btn-primary" type="submit" value="提 交">

						</form>
        </div>
    </div>

<script type="text/javascript">


$("#subform").submit(function() {

	var pwd1 = $("#password1").val();
	var pwd2 = $("#password2").val();
	if( pwd1 != pwd2 ) {
		alert("两次密码不一致。");
		return false;
	}

})


</script>
@endsection
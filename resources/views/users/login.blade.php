@extends('layouts.app')

@section('title', '用户登录')

@section('content')


<div class="row">
	<div class="col-lg-10">
		<div class="panel panel-default">
			<div class="panel-heading">Login</div>
			<div class="panel-body">

				<form class="form-horizontal" role="form" method="POST" action="">

					{{ csrf_field() }}

					<div class="form-group">
						<label for="name" class="col-md-4 control-label">用户名</label>

						<div class="col-md-6">
							<input id="name" type="name" class="form-control" name="name" value="{{$name or ''}}" required autofocus>

														</div>
					</div>

					<div class="form-group">
						<label for="password" class="col-md-4 control-label">Password</label>

						<div class="col-md-6">
							<input id="password" type="password" class="form-control" name="password" required>

														</div>
					</div>



					<div class="form-group">
						<div class="col-md-8 col-md-offset-4">
							<button type="submit" class="btn btn-primary">
								Login
							</button>

							<a class="btn btn-link" href="/password/reset">
								Forgot Your Password?
							</a>
						</div>
					</div>
				</form>

			</div>
		</div>
	</div>
</div>


@endsection




@extends('layouts.app')

@section('title', '添加角色')

@section('content')

<style type="text/css">
.lab{display:inline-block;margin:0 0px 10px 0;width:200px;}
b.requ{color:red;margin:0 2px 0 0;vertical-align:middle;}
</style>


<div class="col-lg-12">


    <form method="POST" action="/roles" accept-charset="UTF-8">
		{{ csrf_field() }}
    <div class="form-group">
        <label for="name">Name</label>
        <input class="form-control" name="name" type="text" id="name" required value="">
    </div>

    <h5><b>权限分配</b></h5>

    <div class='form-group' style="width:90%;">

		   @foreach ($perms as $role => $rid)
			<label class="lab"><input class="ckb" id="ckb{{$rid}}" name="perms[]" type="checkbox" value="{{$rid}}"> {{$role}}</label>
		   @endforeach

            </div>

    <input class="btn btn-primary" type="submit" value="Add">

    </form>


</div>
<script type="text/javascript">

var rids = "{{$rets->perm_id}}".split(",");
console.log(rids);

for(var i=0, len=rids.length; i<len; i++) {
	$("#ckb"+rids[i]).prop("checked", true);
}

</script>

@endsection
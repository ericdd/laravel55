@extends('layouts.app')

@section('title', '添加权限')

@section('content')

<?php


?>

<style type="text/css">
.lab{vertical-align:middle;display:inline-block;margin:0 10px 0 0;}
b.requ{color:red;margin:0 2px 0 0;vertical-align:middle;}
</style>


<div class="col-lg-12">


    <form method="POST" action="/permissions/" accept-charset="UTF-8">
	{{ csrf_field() }}
    <div class="form-group">
        <label for="name">Name</label>
        <input class="form-control" name="name" type="text" id="name" required value="">
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
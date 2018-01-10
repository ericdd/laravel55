@extends('layouts.app')

@section('title', '角色')

@section('content')


<div class="row">
<div class="col-md-5">
	<h3 class="modal-title">记录 {{ $result->total() }}  </h3>
</div>
<div class="col-md-7 page-action text-right">
		<a href="{{ URL::to('roles/create') }}" class="btn btn-primary">添加角色</a>
</div>
</div>



<div class="result-set">
<table class="table table-bordered table-striped table-hover" id="data-table" style="word-break:break-all; word-wrap:break-all;">
	<thead>
		<tr>
			<th>角色</th>
			<th>权限</th>
			<th>Created At</th>
			<th>操作</th>
		</tr>
	</thead>

	<tbody>
		@foreach ($result as $item)
		<tr>

			<td>{{ $item->name }}</td>

			<td>{{ perms2name($item->perm_id) }}</td>
			 <td>{{ $item->created_at }}</td>
			<td>
				 <a href="/roles/{{ $item->id }}/edit/" class="btn btn-sm btn-info"> <i class="fa fa-edit"></i> Edit</a>
				 <button delid="{{ $item->id }}" class="btn btn-sm btn-danger">  <i class="fa fa-view"></i> Delete</button>
			</td>
		</tr>
		@endforeach
	</tbody>

</table>
</div>



<form method="post" action="/roles/" id="subhform" style="display:none;">
		<input name="_method" type="hidden" value="DELETE">
		{{ csrf_field() }}
</form>


<script type="text/javascript">

$("#data-table td > .btn-danger").on("click", function() {
	if(confirm("确定要删除？")) {
		var id = $(this).attr("delid");
		var act  = $("#subhform").attr("action") + id;
		$("#subhform").attr("action", act);
		$("#subhform").submit();
	}
})

</script>


@endsection
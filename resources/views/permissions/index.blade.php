@extends('layouts.app')

@section('title', 'permissions')

@section('content')

    <div class="row">
        <div class="col-md-5">
            <h3 class="modal-title">记录 {{ $result->total() }} </h3>
        </div>
        <div class="col-md-7 page-action text-right">
                <a href="/permissions/create" class="btn btn-primary">添加权限</a>
        </div>
    </div>

    <div class="result-set">
        <table class="table table-bordered table-striped table-hover" id="data-table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Created At</th>
                    <th class="text-center">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($result as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->created_at }}</td>

                    <td class="text-center">
						 <a href="/permissions/{{ $item->id }}/edit/" class="btn btn-sm btn-info"> <i class="fa fa-edit"></i> Edit</a>
						 <button delid="{{ $item->id }}" class="btn btn-sm btn-danger">  <i class="fa fa-view"></i> Delete</button>
                    </td>

                </tr>
            @endforeach
            </tbody>
        </table>

        <div class="text-center">
            {{ $result->links() }}
        </div>
    </div>

<form method="POST" action="/permissions/" id="subhform" style="display:none;">
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
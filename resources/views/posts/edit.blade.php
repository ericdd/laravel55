@extends('layouts.app')

@section('title', 'Post编辑')

@section('content')


    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">

        <form method="POST" action="/posts/{{ $rets->id }}" accept-charset="UTF-8">
			{{ csrf_field() }}
			<input name="_method" type="hidden" value="PUT">
        <div class="form-group">
            <label for="title">Title</label>
            <input class="form-control" name="title" type="text" id="title" value="{{$rets->title}}">
            <br>

            <label for="body">Post Body</label>
            <textarea class="form-control" name="body" cols="50" rows="20" id="body">{{ $rets->body }}</textarea>
            <br>

            <input class="btn btn-success btn-lg btn-block" type="submit" value="Create Post">
            </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
	</div>
@endsection
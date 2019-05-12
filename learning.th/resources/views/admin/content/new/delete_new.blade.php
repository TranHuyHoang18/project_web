@extends('admin.layouts.glance')
@section('title')
    Delete New
@endsection
@section('content')
    <h1> Delete New {{ $new->id . ' : ' .$new->name }}</h1>

    <div class="row">
        <div class="form-three widget-shadow">
            <p>Are you want to delete "{{$new->name}}" ?</p>
            <form name="page" action="{{ url('admin/new/'.$new->id.'/delete') }}" method="post" class="form-horizontal">
                @csrf

                <div class="col-sm-offset-2">
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </form>
        </div>
    </div>

@endsection

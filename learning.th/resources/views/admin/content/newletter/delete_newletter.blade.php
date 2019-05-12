@extends('admin.layouts.glance')
@section('title')
    Delete email Newletter
@endsection
@section('content')
    <h1> Delete email {{ $newletter->id }}</h1>

    <div class="row">
        <div class="form-three widget-shadow">
            <p>Are you want to delete "{{$newletter->email}}" ?</p>
            <form name="page" action="{{ url('admin/newletter/'.$newletter->id.'/delete') }}" method="post" class="form-horizontal">
                @csrf

                <div class="col-sm-offset-2">
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </form>
        </div>
    </div>

@endsection

@extends('admin.layouts.glance')
@section('title')
    Newletter Manager
@endsection
@section('content')
    <h1> Email Newletter</h1>

    <div class="tables">
        <div class="table-responsive bs-example widget-shadow">

            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>#id</th>
                    <th>email</th>
                    <th>action</th>
                </tr>
                </thead>
                <tbody style="font-size: 20px">
                @foreach($newletters as $newletter)
                    <tr>
                        <th scope="row">{{ $newletter->id }}</th>
                        <td>{{$newletter->email}}</td>
                        <td>
                            <a href="{{ url('admin/newletter/'.$newletter->id.'/delete') }}" class="btn btn-danger">Delete</a>
                        </td>
                @endforeach

                </tbody>
            </table>
            {{ $newletters->links() }}
        </div>
    </div>
@endsection


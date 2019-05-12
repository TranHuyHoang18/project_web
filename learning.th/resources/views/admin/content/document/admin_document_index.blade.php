@extends('admin.layouts.glance')
@section('title')
    Document Manager
@endsection
@section('content')
    <h1> Document Manager</h1>
    <div style="margin: 20px 0">
        <a href="{{ url('admin/document/create') }}" class="btn btn-success">Add new Document</a>
    </div>
    <div class="tables">
        <div class="table-responsive bs-example widget-shadow">

            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>#id</th>
                    <th>name</th>
                    <th>Date_update</th>
                    <th>Author</th>
                    <th>Desc</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($documents as $document)
                    <tr>
                        <th scope="row">{{ $document->id }}</th>
                        <td>{{ $document->name }}</td>
                        <td>{{ $document->DateUpdate }}</td>
                        <td>{{ $document->name_author }}</td>
                        <td><?php echo($document->Desc) ?></td>
                        <td>
                            <a href="{{ url('admin/document/'.$document->id.'/edit') }}" class="btn btn-warning">Edit</a>
                            <a href="{{ url('admin/document/'.$document->id.'/delete ') }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
            {{ $documents->links() }}
        </div>
    </div>
@endsection

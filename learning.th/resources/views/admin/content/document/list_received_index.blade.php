@extends('admin.layouts.glance')
@section('title')
    Document Manager
@endsection
@section('content')
    <h1> Received Document Manager</h1>

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
                        <td>{{$document->name}}</td>
                        <td>{{ $document->DateUpdate }}</td>
                        <td>{{ $document->name_author }}</td>
                        <td><?php echo ($document->Desc); ?> </td>
                        <td>
                                <?php
                                $path = $document->file;
                                ?>
                                <a href="{{asset($path)}}" class="btn btn-success" style="width:90px">Preview</a>
                            <a href="{{ url('admin/document/'.$document->id.'/save') }}" class="btn btn-warning">Save</a>
                            <a href="{{ url('admin/document/'.$document->id.'/delete') }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
            {{ $documents->links() }}
        </div>
    </div>
@endsection


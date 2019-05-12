@extends('admin.layouts.glance')
@section('title')
    Document Manager
@endsection
@section('content')
    <h1> Report Document Manager</h1>

    <div class="tables">
        <div class="table-responsive bs-example widget-shadow">

            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>#id Document</th>
                    <th>#id Report</th>
                    <th>Desc</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                @foreach($documents as $document)
                    <tr>
                        <th scope="row">{{ $document->id_document }}</th>
                        <td>{{$document->id}}</td>
                        <td><?php echo ($document->desc); ?> </td>
                        <td>
                            <a href="{{ url('admin/document/report/'.$document->id.'/seen') }}" class="btn btn-warning">Seen</a>
                            <a href="{{ url('admin/document/report/'.$document->id.'/delete') }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>
            {{ $documents->links() }}
        </div>
    </div>
@endsection


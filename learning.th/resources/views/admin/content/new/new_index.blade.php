@extends('admin.layouts.glance')
@section('title')
    News Manager
@endsection
@section('content')
    <h1>News manager</h1>

    <div style="margin: 20px 0">
        <a href="{{ url('admin/new/create') }}" class="btn btn-success">Add News</a>
    </div>
    <div class="tables">
        <div class="table-responsive bs-example widget-shadow">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Slug</th>
                    <th>Intro</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>

                @foreach($news as $new)
                    <tr>
                        <th scope="row">{{ $new->id }}</th>
                        <td>{{ $new->name }}</td>
                        <td style="width:150px">
                            <?php
                            $images = isset($new->images) ? json_decode($new->images) : array();
                            ?>
                            @if(!empty($images))
                                @foreach($images as $image)
                                    <img src="{{ asset($image) }}" style="margin-top:15px;max-height:100px;">
                                @endforeach
                            @endif
                        </td>
                        <td>{{ $new->slug }}</td>
                        <td><?php echo $new->intro ?></td>
                        <td>
                            <a href="{{ url('admin/new/'.$new->id.'/edit') }}" class="btn btn-warning">Edit</a>
                            <a href="{{ url('admin/new/'.$new->id.'/delete ') }}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $news->links() }}
        </div>
    </div>
@endsection

@extends('admin.layouts.glance')
@section('title')
    Add new Document
@endsection
@section('content')
    <h1> Add new document</h1>

    <div class="row">
        <div class="form-three widget-shadow">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form name="product" action="{{ url('admin/document') }}" enctype="multipart/form-data" method="post" class="form-horizontal">
                @csrf
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Name's Document</label>
                    <div class="col-sm-8">
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control1" id="focusedinput" placeholder="Default Input">
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Document</label>
                    <div class="col-sm-8">
                        <input type="file" name="file" required="true">
                    </div>
                </div>

                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Type</label>
                    <div class="col-md-8">
                        <select name="type">
                            <option value="1">Math</option>
                            <option value="2">Literature</option>
                            <option value="3">English</option>
                            <option value="4">Chemistry</option>
                            <option value="5">Geography</option>
                            <option value="6">Physics</option>
                            <option value="7">Biology</option>
                            <option value="8">Other</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">status</label>
                    <div class="col-md-8">
                        <select name="status">
                            <option value="0">See</option>
                            <option value="1">Seen</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">ID_Author</label>
                    <div class="col-sm-8">
                        <input type="text" name="id_author" value="{{ old('id_author') }}"  class="form-control1" id="focusedinput"
                               placeholder="Default
                        Input">
                    </div>
                </div>

                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Date Update</label>
                    <div class="col-sm-8">
                        <input type="date" value="{{ old('dateupdate') }}" name="dateupdate" class="form-control1" id="focusedinput"
                               placeholder="Default
                        Input">
                    </div>
                </div>
                <div class="form-group">
                    <label for="txtarea1" class="col-sm-2 control-label">Desc</label>
                    <div class="col-sm-8">
                        <textarea name="desc" id="txtarea1" cols="50" rows="4" class="form-control1 mytinymce">{{ old('desc') }}</textarea></div>
                </div>
                <div class="col-sm-offset-2">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>



@endsection

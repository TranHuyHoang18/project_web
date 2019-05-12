@extends('admin.layouts.glance')
@section('title')
    Edit Document
@endsection
@section('content')
    <h1> Edit Document {{ $document->id . ' : ' .$document->name }}</h1>

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

            <form name="page" action="{{ url('admin/document/'.$document->id) }}" method="post" class="form-horizontal">
                @csrf
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Name's Document</label>
                    <div class="col-sm-8">
                        <input type="text" name="name" value="{{$document->name}}" class="form-control1" id="focusedinput" placeholder="Default
                        Input">
                    </div>
                </div>


                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Type</label>
                    <div class="col-md-8">
                        <select name="type">
                            <option value="1" <?php echo ($document->type == 1) ? 'selected' : '' ?>>Math</option>
                            <option value="2" <?php echo ($document->type == 2) ? 'selected' : '' ?>>Literature</option>
                            <option value="3" <?php echo ($document->type == 3) ? 'selected' : '' ?>>English</option>
                            <option value="4" <?php echo ($document->type == 4) ? 'selected' : '' ?>>Chemistry</option>
                            <option value="5" <?php echo ($document->type == 5) ? 'selected' : '' ?>>Geography</option>
                            <option value="6" <?php echo ($document->type == 6) ? 'selected' : '' ?>>Physics</option>
                            <option value="7" <?php echo ($document->type == 7) ? 'selected' : '' ?>>Biology</option>
                            <option value="8" <?php echo ($document->type == 8) ? 'selected' : '' ?>>Other</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">status</label>
                    <div class="col-md-8">
                        <select name="status">
                            <option value="0"<?php echo ($document->status == 0) ? 'selected' : '' ?>>See</option>
                            <option value="1"<?php echo ($document->status == 1) ? 'selected' : '' ?>>Seen</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">ID_Author</label>
                    <div class="col-sm-8">
                        <input type="text" name="id_author" value="{{$document->id_author}}"  class="form-control1" id="focusedinput"
                               placeholder="Default
                        Input">
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Date Update</label>
                    <div class="col-sm-8">
                        <input type="date" value="{{$document->dateupdate}}" name="dateupdate" class="form-control1" id="focusedinput"
                               placeholder="Default
                        Input">
                    </div>
                </div>
                <div class="form-group">
                    <label for="txtarea1" class="col-sm-2 control-label">Desc</label>
                    <div class="col-sm-8">
                        <textarea name="desc" id="txtarea1" cols="50" rows="4" class="form-control1 mytinymce">{{$document->desc}}</textarea></div>
                </div>

                <div class="col-sm-offset-2">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <script src="{{ asset('/vendor/laravel-filemanager/js/lfm.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.lfm-btn').filemanager('image', {'prefix':'http://localhost/teacher_product/teacher_product/public/laravel-filemanager'});

        });

    </script>
@endsection

@extends('admin.layouts.glance')
@section('title')
    Edit News
@endsection
@section('content')
    <h1> Edit News {{ $new->id . ' : ' .$new->name }}</h1>

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

            <form name="page" action="{{ url('admin/new/'.$new->id) }}" method="post" class="form-horizontal">
                @csrf
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Name</label>
                    <div class="col-sm-8">
                        <input type="text" name="name" class="form-control1" id="focusedinput" value="{{ $new->name }}" placeholder="Default Input">
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">slug</label>
                    <div class="col-sm-8">
                        <input type="text" name="slug" class="form-control1" id="focusedinput" value="{{ $new->slug }}" placeholder="Default Input">
                    </div>
                </div>
                <?php
                $images = $new->images ? json_decode($new->images) : array();
                $i = 0;
                ?>

                @foreach($images as $image)
                    <?php $i++ ?>
                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">Images {{ $i }}</label>
                        <div class="col-sm-8">

                        <span class="input-group-btn">
                             <a id="lfm{{ $i }}" data-input="thumbnail{{ $i }}" data-preview="holder{{ $i }}" class="lfm-btn btn btn-primary">
                               <i class="fa fa-picture-o"></i> Choose
                             </a>
                            <a class="btn btn-warning remove-image">
                           <i class="fa fa-remove"></i> Xóa
                         </a>
                           </span>
                            <input id="thumbnail{{ $i }}" class="form-control" type="text" name="images[]" value="{{ $image }}" placeholder="Default Input">

                            <img id="holder{{ $i }}" src="{{ asset($image) }}" style="margin-top:15px;max-height:100px;">
                        </div>
                    </div>
                @endforeach
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Thêm ảnh</label>
                    <div class="col-sm-8">
                        <a id="plus-image" class="btn btn-success">
                            <i class="fa fa-plus"></i> Thêm
                        </a></div>
                </div>
                <div class="form-group">
                    <label for="txtarea1" class="col-sm-2 control-label">intro</label>
                    <div class="col-sm-8"><textarea name="intro" id="txtarea1" cols="50" rows="4" class="form-control1 mytinymce">{{ $new->intro
                    }}</textarea></div>
                </div>

                <div class="form-group">
                    <label for="txtarea1" class="col-sm-2 control-label">Desc</label>
                    <div class="col-sm-8"><textarea name="desc" id="txtarea1" cols="50" rows="4" class="form-control1 mytinymce">{{ $new->desc
                    }}</textarea></div>
                </div>

                <div class="col-sm-offset-2">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <script src="{{asset('/vendor/laravel-filemanager/js/lfm.js')}}"></script>

    <script type="text/javascript">
        $(document).ready(function () {

            $('.lfm-btn').filemanager('image', {'prefix':'http://learning.th/laravel-filemanager'});


            $('#plus-image').on('click', function (e) {
                e.preventDefault();

                var lfm_count = parseInt($('.lfm-btn').length);
                var next = lfm_count+1;

                var html = '';

                for(var i = 0; i < 1000; i++){

                    if ($('#lfm'+next).length < 1) {

                        html += '<div class="form-group">\n' +
                            '                    <label for="focusedinput" class="col-sm-2 control-label">Images</label>\n' +
                            '                    <div class="col-sm-8">\n' +
                            '                        <span class="input-group-btn">\n' +
                            '                         <a id="lfm'+next+'" data-input="thumbnail'+next+'" data-preview="holder'+next+'" class="lfm-btn btn btn-primary">\n' +
                            '                           <i class="fa fa-picture-o"></i> Choose\n' +
                            '                         </a>\n' +
                            '                            <a class="btn btn-warning remove-image">\n' +
                            '                           <i class="fa fa-remove"></i> Xóa\n' +
                            '                         </a>\n' +
                            '                       </span>\n' +
                            '                        <input id="thumbnail'+next+'" type="text" name="images[]" value="" class="form-control1" id="focusedinput" placeholder="Default Input">\n' +
                            '                        <img id="holder'+next+'" style="margin-top:15px;max-height:100px;">\n' +
                            '                    </div>\n' +
                            '                </div>';


                        break;
                    } else {
                        next++;
                    }


                }

                var box = $(this).closest('.form-group');

                $( html ).insertBefore( box );

                $('.lfm-btn').filemanager('image', {'prefix':'http://learning.th/laravel-filemanager'});

            });


            $(body).on('click', '.remove-image', function (e) {
                e.preventDefault();

                $(this).closest('.form-group').remove();

            });


        });

    </script>
@endsection

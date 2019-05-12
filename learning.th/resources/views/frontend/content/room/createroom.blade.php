@extends('frontend.layouts.roomhomepages')
@section('title')
    Learning Together Document
@endsection
@section('title1')

@endsection
@section('content')
    <div class="row">
        <div class="col-md-3">

        </div>
        <div class="col-md-9">
            <h1 style="margin-left: 150px;color:red; "> Create new room </h1>
            <div style="margin-top: 20px;">
                <form name="room_create" action="{{ url('/room/create') }}" enctype="multipart/form-data" method="post" class="form-horizontal">
                    @csrf
                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">Tên Phòng học</label>
                        <div class="col-sm-8">
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control1" id="focusedinput" placeholder="Default Input">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">Kiểu phòng</label>
                        <div class="col-sm-8">
                            <select name="type">
                                <option value="0">4 người</option>
                                <option value="1">Đại chúng</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="focusedinput" class="col-sm-2 control-label">Môn học</label>
                        <div class="col-sm-8">
                            <select name="type_room">
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
                        <label for="focusedinput" class="col-sm-2 control-label">Images</label>
                        <div class="col-sm-8">
                            <input id="image" type="file" class="form-control"
                                   name="image"
                                   value="{{ old('image') }}" required autofocus>
                        {{--<span class="input-group-btn">
                         <a id="lfm1" data-input="thumbnail1" data-preview="holder1" class="lfm-btn btn btn-primary">
                           <i class="fa fa-picture-o"></i> Choose
                         </a>
                            <a class="btn btn-warning remove-image">
                           <i class="fa fa-remove"></i> Xóa
                         </a>
                       </span>
                            <input id="thumbnail1" type="text" name="images[]" value="" class="form-control1" id="focusedinput"
                                   placeholder="Default Input">
                            <img id="holder1" style="margin-top:15px;max-height:100px;">--}}
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="txtarea1" class="col-sm-2 control-label">Mô tả</label>
                        <div class="col-sm-8">
                            <textarea name="desc" id="txtarea1" cols="50" rows="4" class="form-control1 mytinymce"></textarea>{{ old('desc') }}</div>
                    </div>

                    <div class="col-sm-offset-2">
                        <button type="submit" class="btn btn-success">Create</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
   {{-- <script src="{{asset('/vendor/laravel-filemanager/js/lfm.js')}}"></script>--}}

   {{-- <script type="text/javascript">
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

    </script>--}}
@endsection


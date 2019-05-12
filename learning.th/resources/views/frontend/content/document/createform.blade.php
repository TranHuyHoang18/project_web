@extends('frontend.layouts.document1')
@section('title')
    Learning Together Document
@endsection

@section('content')

    <div class="row" style="padding-top: 20px; padding-bottom: 20px">
        <div class="col-sm-2">

        </div>

        <div class="col-sm-9 " style="border: 1px solid red">
            <h1 style="text-align: center"> Gửi tài Liệu</h1>
            <form name="document_create" action="{{ url('/document/create') }}" enctype="multipart/form-data" method="post" class="form-horizontal" style="text-align:
            center">
                @csrf
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Name's Document</label>
                    <div class="col-sm-8">
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control1" id="focusedinput" placeholder="Default Input">
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Name Author</label>
                    <div class="col-sm-8">
                        <input type="text" name="name_author" value="{{ old('name_author') }}" class="form-control1" id="focusedinput" placeholder="Default Input">
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Id_Author</label>
                    <div class="col-sm-8">
                        <input type="text" name="id_author" required="true" value="{{$id}}">
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Thuôc môn</label>
                    <div class="col-sm-8">
                        <select name="type">
                            <option value="1">Toán</option>
                            <option value="6">Vật Lý</option>
                            <option value="5">Địa Lý</option>
                            <option value="4">Hóa Học</option>
                            <option value="7">Sinh Học</option>
                            <option value="2">Văn Học</option>
                            <option value="3">Tiếng Anh</option>
                            <option value="8">Môn khác</option>
                        </select>
                    </div>
                </div>


                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Document</label>
                    <div class="col-sm-8">
                        <input type="file" name="file" required="true">
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-2 control-label">Date Update</label>
                    <div class="col-sm-8">
                        <input type="date" name="dateupdate" required="true">
                    </div>
                </div>
                <div class="form-group">
                    <label for="txtarea1" class="col-sm-2 control-label">Desc</label>
                    <div class="col-sm-8">
                        <textarea name="desc" id="txtarea1" cols="50" rows="4" class="form-control1 mytinymce"></textarea>{{ old('desc') }}</div>
                </div>

                <div class="col-sm-offset-2">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection

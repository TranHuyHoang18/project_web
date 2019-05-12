@extends('frontend.layouts.document1')
@section('title')
    Learning Together Document
@endsection

@section('content')

    <div class="row" style="padding-top: 20px; padding-bottom: 20px">
        <div class="col-sm-2">

        </div>

        <div class="col-sm-9 " style="border: 1px solid red">
            <h1 style="text-align: center"> Send report Document:{{$document->name}}</h1>

            <form name="document_create" action="{{ url('/document/report/'.$document->id) }}" enctype="multipart/form-data" method="post"
                  class="form-horizontal" style="text-align:
            center">
                @csrf
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-4 control-label">Name's Document :</label>
                    <div class="col-sm-8">
                        {{$document->name}}
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-4 control-label">ID :</label>
                    <div class="col-sm-8">
                       {{$id}}
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-4 control-label">Type :</label>
                    <div class="col-sm-8">
                        <?php
                            $name_type_document = array ();
                            $name_type_document[1]='Math';
                            $name_type_document[2]='Literature';
                            $name_type_document[3]='English';
                            $name_type_document[4]='Chemistry';
                            $name_type_document[5]='Geography';
                            $name_type_document[6]='Physics';
                            $name_type_document[7]='Biology';
                            $name_type_document[8]='Other';

                        ?>
                        {{$name_type_document[$document->type]}}
                    </div>
                </div>
                <div class="form-group">
                    <label for="focusedinput" class="col-sm-4 control-label">Name's Author :</label>
                    <div class="col-sm-8">
                        {{$document->name_author}}
                    </div>
                </div>
                <div class="form-group" style="display: none">
                    <label for="focusedinput" class="col-sm-4 control-label">nguoi gui report:</label>
                    <div class="col-sm-8">
                        <?php
                                $id_author = $idsss;
                        ?>
                        <input type="text" name="id_author" value="{{$id_author}}">
                    </div>
                </div>

                <div class="form-group">
                    <label for="txtarea1" class="col-sm-2 control-label">Desc Report</label>
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

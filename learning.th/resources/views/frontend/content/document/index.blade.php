@extends('frontend.layouts.document')
@section('title')
    Learning Together Document
@endsection
@section('title1')
    All of Documents
@endsection
@section('content')

<div>
    <div class="col-sm-10 document_content_left">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th style="width: 10%;color: black">#STT</th>

                <th style="width: 30%;color: black">Name</th>
                <th style="width: 25%;color: black">Date Update</th>
                <th style="width: 25%;color: black">Author</th>
                <th> Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php
                $i =0;
            ?>
            @foreach($documents as $document)
                <?php
                    $i++;
                ?>

                <tr>
                    <th style="color: black" scope="row">{{ $i }}</th>
                    <td style="color: black"> {{ $document->name }}</td>
                    <td style="color: black" >{{ $document->DateUpdate }}</td>
                    <td style="color: black">{{ $document->name_author }}</td>
                    <th>
                    <div>
                    <?php
                       $path = $document->file;
                    ?>
                    <a href="{{asset($path)}}" class="btn btn-success" style="width:90px">Open</a></div>
                                <div><a class="btn btn-warning" href="{{url('/document/download/'.$document->id)}}"
                                style="width:90px">Download</a></div>
                                <div><a class="btn btn-danger" href="{{url('/document/report/'.$document->id)}}" style="width:90px">Report</a></div>
                    </th>
                </tr>
            @endforeach
        </table>
        {{ $documents->links() }}
    </div>

</div>
@endsection

@extends('frontend.layouts.roomhomepages')
@section('title')
    Learning Together Room
@endsection
@section('title1')
    Chemistry
@endsection
@section('content')
    <div class="row" >
        <div class="col-md-12 room_index_sortby" style="padding-top: 10px" >
            <select >
                <option>Time</option>
                <option>ID number</option>
            </select>
            <i class="fa fa-sort" aria-hidden="true"></i>
        </div>
        <div class="row list_rooms" style="margin-left:15px">
            @foreach($rooms as $room)
                <div class="col-md-3" style="margin-top:10px">
                    <div class="room_image">
                        <img style="width:230px; height:150px; border: 1px solid black;">
                    </div>
                    <div class="row" style="margin-top: 15px">
                        <div class="col-md-8 room_info">
                            ID =  {{$room-> id}}<br>
                            {{$room-> name}}
                        </div>
                        <div class="col-md-4 join_room">
                            <a class="btn btn-success" href="#" style="/*width:150px*/">Join</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $rooms->links() }}




    </div>
@endsection


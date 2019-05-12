@extends('frontend.layouts.roomhomepages')
@section('title')
    Learning Together Document
@endsection
@section('title1')
    ALL of Rooms
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
                <div class="col-md-3" style="margin-top:10px">
                    <div class="room_image">
                        <?php
                        $images = isset($rooms->images) ? json_decode($rooms->images) : array();
                        ?>
                        @if(!empty($images))
                            @foreach($images as $image)
                                <img src="{{ asset($image) }}" class="img-responsive" style="width:230px; height:150px;
                       border: 1px solid black">
                            @endforeach
                        @endif
                       {{-- <img src="{{asset('front_assets/images/room/t1.jpg')}}" alt=" " class="img-responsive" style="width:230px; height:150px;
                       border: 1px solid black"/>--}}
                    </div>
                    <div class="row" style="margin-top: 15px">
                        <div class="col-md-8 room_info">
                              ID =  {{$rooms->id}}<br>
                            {{$rooms-> name}}
                          </div>
                        <div class="col-md-4 join_room">
                                  <a class="btn btn-success" href="{{url('/room/detail/'.$rooms->id)}}" style="/*width:150px*/">Join</a>
                         </div>
                    </div>
                </div>
        </div>





    </div>
@endsection


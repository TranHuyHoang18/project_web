@extends('frontend.layouts.room_detail')
@section('title')
    Learning Together Room
@endsection
@section('style')
        <style type="text/css">
            .blackboard
            {
                background: url("{{asset('front_assets/images/room/blackboard.png')}}") no-repeat center center;
                background-size: cover;
                /*width: 600px;*/
                height: 450px;
                /*border: 1px solid red;*/
            }
            .id_room
            {
                border: 2px solid goldenrod;
                text-align: center;
                color: coral;
                margin-top: 50px;
            }
            .body_room
            {
                margin-top: 30px;
            }
            .tt1
            {
                margin-top: 50px;

            }
            .tt1 a
            {
                font-size: 20px;
            }

            .user_img
            {
                height: 100px;
                text-align: center;
            }
            .user_img img
            {
                width: 95px;
                height: 100px;
                border-radius:50%;
                -moz-border-radius:50%;
                -webkit-border-radius:50%;
                border: 1px solid black;
                background: gainsboro;
            }
            .right_message
            {
                height: 300px;
                background: url("{{asset('front_assets/images/room/mess_background.jpg')}}") no-repeat center center;
                background-size: cover;
                border: 1px solid darkred;

            }
            .right_message p
            {
                font-size: 24px;
                color: black;
                text-align: center;
            }
            .document_room
            {
                border: 2px solid black;
                height:150px;
            }
            .document_room p
            {
                font-size: 24px;
                color: black;
                text-align: center;

            }
            .document_box
            {
                margin-left: 20px;
                margin-top: 10px;
            }
            .blackboard .title
            {
                text-align: center;
                margin-top: 30px;


            }
            .blackboard .title p
            {
                font-size: 28px;
                color: white;
            }
            .blackboard .discussion p
            {
                font-size: 18px;
                color: white;
                margin-left: 10px;
            }
            .button_blackboard
            {
                margin-left: 15px;
            }


        </style>

@endsection
@section('content')

    <div class="row room_body_header banner1" style="min-height: 100px">
        <div class="col-md-1"></div>
        <div class="col-md-2 id_room">
            <h1> ID: {{$room->id}}</h1>
        </div>
        <div class="col-md-4">
        </div>
        <div class="col-md-4 tt1">
            <a class="btn btn-success" href="{{url('')}}" style="width:150px">Invite Friends</a></div>
    </div>
    </div>
    <div class="row body_room">
        <div class="col-md-9">
            <div class="col-md-3 list_member">
                <p class="p1">List of members</p>
                <div class="user" style="margin-top: 50px">
                    <?php
                    use App\User;
                    $member = [];
                    $member = json_decode($room->members);

                    for($i=0;$i<$room->count;$i++)
                    {
                    $id = $member[$i];
                    $user = User::find($id);
                    $userdetail = \App\Model\UserDetailModel::find($id);
                    $name = $userdetail->last_name . $userdetail->first_name;
                    $image = $userdetail->image;
                    { ?>
                    <div class="user_img">
                        <img src="{{asset($image)}}" alt=""/>
                        <p style="padding-top: 10px;" >{{$name}}</p>
                    </div>
                    <?php
                    }}
                    ?>





                </div>
            </div>
            <div class="col-md-9 blackboard">
                <div class="title">
                    <p style="text-align: center; font-size: 26px; color: white">Send Document</p>

                </div>
                <div class="discussion">
                    <form action="{{url('room/senddocument1/'.$room->id)}}" enctype="multipart/form-data"method="post">
                        @csrf
                        <div>
                            <input name="name" type="text"  style="width: 90%; height: 200px; margin-left: 10px" placeholder="Name Document">
                            <input name="document" type="file"  style="width: 90%; height: 50px;margin-left: 10px" placeholder="Document">


                        </div>
                        <input  class="btn btn-warning" type="submit" value="Send" style="margin-top: 10px;margin-left: 10px">
                    </form>
                </div>
                {{--<div class="document_room">
                    <p> Document</p>
                    @foreach($documents as $document)
                        <div class="document_box">
                            <a href="{{asset($document->file)}}">{{$document->name}}</a>
                            <a class="btn btn-warning" style="float: right; margin-right: 5px;height: 30px" href="{{url('/room/download/'.$document->id)
                        }}">Download</a>
                        </div>
                    @endforeach
                    {{ $documents->links() }}
                </div>--}}

            </div>
        </div>
        <div class="col-md-3">
            <div class="right_message">
                <div>
                    <p>Messeage</p>
                    <div id="mes_1" style="overflow:scroll; max-height: 300px; min-height: 300px">
                        @foreach($mess as $mes)
                            <p style="font-size: 16px;text-align: left; margin-left: 5px"><strong>{{$mes->name}}</strong> : {{$mes->content}}</p><br>
                        @endforeach
                    </div>
                </div>
                <div style="">
                    <form action="{{url('/sendmessage')}}" method="post">
                        @csrf
                        <input type="text" name="content" placeholder="Enter the message" style="margin-left: 10px; width: 200px;height:
                50px">
                        <input type="text" name="id_room" value="{{$room->id}}" style="display: none">
                        <i class="fa fa-paper-plane" aria-hidden="true"></i><input class="btn btn-success" type="submit" value="Send">
                    </form>
                </div>

            </div>
        </div>
        <?php $id_room = $room->id ?>
    </div>

    <script src='{{asset('tinymce/js/tinymce/tinymce.min.js')}}'></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://js.pusher.com/4.3/pusher.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
            integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="text/javascript">
        var phantuchon      = $("#mes_1");
        var user2 = $("#user_2");
        var user3 = document.getElementById("user_3");
        var user4 = $("#user_4");
        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('{{env('PUSHER_APP_KEY')}}', {
            cluster   : 'ap1',
            encrypted : true
        });


        // Subscribe to the channel we specified in our Laravel Event
        // message
        var channel = pusher.subscribe('Message');
        var id_room ={{$id_room}};
        // Bind a function to a Event (the full Laravel class)
        channel.bind('send-message', function (data) {
            console.log("hello1");
            console.log(data);
            if (data.id_room ==id_room)
            {
                var html = '<p style="font-size: 16px; float:left; margin-left: 5px"><strong>' + data.name + '</strong> :' + data.content + '</p> <br> ';
                phantuchon.append(html);
            }

        });
    </script>
@endsection


@extends('frontend.layouts.room_detail')
@section('title')
    Learning Together Room
@endsection
@section('style')
    <style type="text/css">
        .blackboard {
            background: url("{{asset('front_assets/images/room/blackboard.png')}}") no-repeat center center;
            background-size: cover;
            /*width: 600px;*/
            height: 450px;
            /*border: 1px solid red;*/
        }

        .id_room {
            border: 2px solid goldenrod;
            text-align: center;
            color: coral;
            margin-top: 50px;
        }

        .body_room {
            margin-top: 30px;
        }

        .tt1 {
            margin-top: 50px;

        }

        .tt1 a {
            font-size: 20px;
        }

        .user_img {
            height: 50px;
            text-align: center;
        }

        .user_img img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            -moz-border-radius: 50%;
            -webkit-border-radius: 50%;
            border: 1px solid black;
            background: gainsboro;
            float: left;
            margin-left: 10px;
        }

        .right_message {
            height: 600px;
            background: url("{{asset('front_assets/images/room/mess_background.jpg')}}") no-repeat center center;
            background-size: cover;
            border: 1px solid darkred;

        }

        .right_message p {
            font-size: 24px;
            color: black;
            text-align: center;
        }

        .document_room {
            border: 2px solid black;
            margin-top: 100px;
            height: 150px;
        }

        .document_room p {
            font-size: 24px;
            color: black;
            text-align: center;


        }

        .document_box {
            margin-left: 20px;
            margin-top: 20px;
        }

        .blackboard .title {
            text-align: center;
            margin-top: 30px;


        }

        .blackboard .title p {
            font-size: 28px;
            color: white;
        }

        .blackboard .discussion p {
            font-size: 18px;
            color: white;
            margin-left: 10px;
        }

        .list_member {
            text-align: center;
        }

        .list_member .p1 {
            color: red;
            font-size: 24px;
        }

        .button_blackboard {
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
            <a class="btn btn-success" href="{{url('')}}" style="width:150px">Invite Friends</a>
            <a class="btn btn-warning" href="{{url('room/outroom/'.$room->id)}}" style="width: 120px; margin-left: 10px">Out
                Room</a>
        </div>
    </div>

    <div class="row body_room">
        <div class="col-md-9">
            <div class="col-md-3 list_member">
                <p class="p1">List of members</p>
                <div id="user" class="user" style="margin-top: 50px">
                    <?php
                    use App\User;
                    $member = [];
                    $member = json_decode($room->members);

                    for($i = 0;$i < $room->count;$i++)
                    {
                    $id = $member[$i];
                    $user = User::find($id);
                    $userdetail = \App\Model\UserDetailModel::find($id);
                    $name = $userdetail->last_name . $userdetail->first_name;
                    $image = $userdetail->image;
                    { ?>
                    <div class="user_img">
                        <img src="{{asset($image)}}" alt=""/>
                        <p style="padding-top: 10px;">{{$name}}</p>
                    </div>
                    <?php
                    }}
                    ?>


                </div>
            </div>
            <div class="col-md-9 blackboard">
                <div class="title">
                    <p style="text-align: center; font-size: 26px; color: white">Write_Board </p>

                </div>
                <div class="discussion">
                    <form action="{{url('room/writeboard/'.$room->id)}}" method="post">
                        @csrf
                        <div>
                            <input name="desc" type="text"  style="width: 90%; height: 50px;margin-left: 10px" placeholder="title">
                            <textarea name="desc1" id="" class="form-control1 mytinymce" cols="50" rows="4" style="width: 90%; height: 200px;
                            margin-left: 10px"
                                      placeholder="Detail"></textarea>
                        </div>
                        <input  class="btn btn-warning" type="submit" value="Write" style="margin-top: 10px;margin-left: 10px"></input>
                    </form>
                </div>
                <div class="document_room">
                    <p> Document</p>
                    <div id="document" >
                    @foreach($documents as $document)
                        <div class="document_box">
                            <a href="{{asset($document->file)}}">{{$document->name}}</a>
                            <a class="btn btn-warning" style="float: right; margin-right: 5px;height: 30px" href="{{url('/room/download/'.$document->id)
                        }}">Download</a>
                        </div>


                    @endforeach
                    {{ $documents->links() }}
                </div>
                </div>

            </div>
        </div>
        <div class="col-md-3">
            <div class="right_message">
                <div>
                    <p>Messeage</p>
                    <div id="mes_1" style="overflow:scroll; max-height: 400px; min-height: 400px">
                        @foreach($mess as $mes)
                            <p style="font-size: 16px;text-align: left; margin-left: 5px"><strong>{{$mes->name}}</strong> : {{$mes->content}}</p><br>
                        @endforeach
                    </div>
                </div>
                <div style="margin-top: 0">
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
        var user            = $("#user");
        var id_room         ={{$id_room}};
        var document1 = $("#document");

        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('{{env('PUSHER_APP_KEY')}}', {
            cluster   : 'ap1',
            encrypted : true
        });


        // Subscribe to the channel we specified in our Laravel Event
        // message
        var channel = pusher.subscribe('Message');


        // Bind a function to a Event (the full Laravel class)
        channel.bind('send-message', function (data) {
            console.log("hello1");
            console.log(data);
            if (data.id_room == id_room) {
                var html = '<p style="font-size: 16px; float:left; margin-left: 5px"><strong>' + data.name + '</strong> :' + data.content + '</p> <br> ';
                phantuchon.append(html);
            }

        });
        // notify -join
        var channel1 = pusher.subscribe('Notify');
        channel1.bind('notify-join', function (data) {
            console.log("hello");
            console.log(data);
            if (data.id_room == id_room) {

                var tt2  = 'http://learning.th/' + data.image;
                var tt1  = '<img src=\"' + tt2 + '\" alt = \"' + '\"' + '/>';
                var html = '<div class=\"user_img\">' + tt1 + ' <p style="padding-top: 10px;" >' + data.name + '</p> </div>'
                console.log(html);
                user.append(html);


            }
        });
        // notify -document
        var channel3 = pusher.subscribe('Document');
        channel3.bind('notify-document', function (data) {
            console.log("hello3");
            console.log(data);
            if (data.id_room ==id_room)
            {
                /*html_title='<p style="text-align: center; font-size: 18px; color: white">'+data.title+'</p>';
                html_content = '<p style="text-align: left; font-size: 14px;margin-top: 5px; color: white">'+data.content+'</p>';
                title.innerHTML = html_title;




                content.innerHTML = html_content;*/
                var tt3 = 'http://learning.th/'+data.path;
                html =  '<div class="document_box">'+' <a href="'+tt3+'>'+data.name+' <a class="btn btn-warning" style="float: right; margin-right:' +
                    ' 5px;height: 30px" href="';
                var tt4 = "\{\{url("+"/room/download/"+data.id +")\}\}"
                html = html+tt4+'">Download</a></div>';
                console.log(html);
                document1.append(html);
            }
        });
    </script>
@endsection


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
            crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@1,300&display=swap" rel="stylesheet">
    <style>


        * {
            box-sizing: border-box;
        }

        .timetable {
            display: grid;
            grid-template-areas: ". week" "time content";
            grid-template-columns: 120px;
            grid-template-rows: 60px;
            width: 100vw;
            height: 100vh;
        }

        .timetable .accent-pink-gradient {
            display: flex;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #ee8ebc, #eea08e);
            transition: 0.2s ease box-shadow, 0.2s ease transform;
        }

        .timetable .accent-pink-gradient:hover {
            box-shadow: 0 20px 30px 0 rgba(238, 142, 188, 0.3);
            transform: scale(1.05);
        }

        .timetable .accent-orange-gradient {
            display: flex;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #eec08e, #dcee8e);
            transition: 0.2s ease box-shadow, 0.2s ease transform;
        }

        .timetable .accent-orange-gradient:hover {
            box-shadow: 0 20px 30px 0 rgba(238, 192, 142, 0.3);
            transform: scale(1.05);
        }

        .timetable .accent-green-gradient {
            display: flex;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #bcee8e, #8eeea0);
            transition: 0.2s ease box-shadow, 0.2s ease transform;
        }

        .timetable .accent-green-gradient:hover {
            box-shadow: 0 20px 30px 0 rgba(188, 238, 142, 0.3);
            transform: scale(1.05);
        }

        .timetable .accent-cyan-gradient {
            display: flex;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #8eeec0, #8edcee);
            transition: 0.2s ease box-shadow, 0.2s ease transform;
        }

        .timetable .accent-cyan-gradient:hover {
            box-shadow: 0 20px 30px 0 rgba(142, 238, 192, 0.3);
            transform: scale(1.05);
        }

        .timetable .accent-blue-gradient {
            display: flex;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #8ebcee, #a08eee);
            transition: 0.2s ease box-shadow, 0.2s ease transform;
        }

        .timetable .accent-blue-gradient:hover {
            box-shadow: 0 20px 30px 0 rgba(142, 188, 238, 0.3);
            transform: scale(1.05);
        }

        .timetable .accent-purple-gradient {
            display: flex;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #c08eee, #ee8edc);
            transition: 0.2s ease box-shadow, 0.2s ease transform;
        }

        .timetable .accent-purple-gradient:hover {
            box-shadow: 0 20px 30px 0 rgba(192, 142, 238, 0.3);
            transform: scale(1.05);
        }

        .timetable .weekend {
            background: #fbfbfc;
            color: #87a1ad;
        }

        .timetable .week-names {
            grid-area: week;
            display: grid;
            grid-template-columns: repeat(7, 1fr);

            font-size: 12px;
        }

        .timetable .week-names > div {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
            box-shadow: inset 1px 0 0 #eceff1;
        }

        .timetable .time-interval {
            grid-area: time;
            display: grid;
            grid-template-rows: repeat(6, 1fr);
            font-size: 14px;
        }

        .timetable .time-interval > div {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 100%;
            box-shadow: inset 0 1px 0 0 #eceff1;
        }

        .timetable .content {
            grid-area: content;
            display: grid;
            grid-template-rows: repeat(6, 1fr);
            grid-template-columns: repeat(7, 1fr);
        }

        .timetable .content > div {
            box-shadow: inset 1px 0 0 #eceff1, inset 0 1px 0 0 #eceff1;
        }

        body {
            ffont-family: 'Montserrat', sans-serif;
        }

        [type="date"] {
            background: #fff url(https://cdn1.iconfinder.com/data/icons/cc_mono_icon_set/blacks/16x16/calendar_2.png) 97% 50% no-repeat;
        }

        [type="date"]::-webkit-inner-spin-button {
            display: none;
        }

        [type="date"]::-webkit-calendar-picker-indicator {
            opacity: 0;
        }

        /* custom styles */


        label {
            display: block;
        }

        input {
            border: 1px solid #c4c4c4;
            border-radius: 5px;
            background-color: #fff;
            padding: 3px 5px;
            box-shadow: inset 0 3px 6px rgba(0, 0, 0, 0.1);
            width: 190px;
        }

        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #6b726f;
            color: white;
        }
    </style>

</head>
<body>
@if(\Illuminate\Support\Facades\Auth::user()->role == 'admin')
    <div style="height: 30px"></div>
    <table id="customers" style="width: 70%;position: relative;left: 15%">
        <tr>
            <th>job title</th>
            <th>date</th>
            <th>worker name</th>
            <th>job type</th>
            <th> approve/reject</th>
        </tr>
        @foreach($jobs as $job)
            <tr>
                <td> {{$job->job_title}} </td>
                <td> {{$job->job_date}} </td>
                <td> {{$job->emp_name}} </td>
                <td> {{$job->job_type}} </td>
                <td style="width: 190px">
                    <button style="" class="btn btn-primary"> approve</button>
                    <button class="btn btn-danger">reject</button>
                </td>

            </tr>
        @endforeach


    </table>
@else
    <button id="requestButton" type="button" class="btn btn-primary" data-bs-toggle="modal"
            data-bs-target="#exampleModal">
        Request job
    </button>
@endif

<div class="timetable" style="width: 90%; position: relative; left: 5%;margin-top: 66px;">
    <div class="week-names">
        <div> day 1</div>
        <div> day 2</div>
        <div> day 3</div>
        <div> day 4</div>
        <div> day 5</div>
        <div> day 6</div>
        <div> day 7</div>


    </div>
    <div class="time-interval">
        <div>security</div>
        <div>work</div>
        <div>barisat</div>

    </div>
    <div class="content">
        <div name="1" class="security"></div>
        <div name="2" class="security"></div>
        <div name="3" class="security"></div>
        <div name="4" class="security"></div>
        <div name="5" security></div>
        <div name="6" class="weekend security"></div>
        <div name="7" class="weekend security"></div>
        <div name="8" class="work"></div>
        <div name="9" class="work"></div>
        <div name="10" class="work"></div>
        <div name="11" class="work">

        </div>
        <div name="12" class="work"></div>
        <div name="13" class="weekend work"></div>
        <div name="14" class="weekend work"></div>
        <div name="15" class="barista">

        </div>
        <div name="16" class="barista"></div>
        <div name="17" class="barista">

        </div>
        <div name="18" class="barista"></div>
        <div name="19" class="barista"></div>
        <div name="20" class="weekend barista"></div>
        <div name="21" class="weekend barista"></div>


    </div>
</div>


<!-- Modal -->
<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Request job</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div style="display: flex;flex-wrap: nowrap;">
                    <input id="name" value="{{\Illuminate\Support\Facades\Auth::user()->name}}" style="width: 33%">
                    <div style="width: 5px"></div>

                    <input placeholder="date" type="date" name="" id="jobDate" style="width: 33%">
                    <div style="width: 5px"></div>

                    <input placeholder="title" type="text" id="jobTitle" style="width: 33%">
                    <div style="width: 5px"></div>

                </div>
            </div>
            <div class="modal-footer">

                <button id="send" type="button" class="btn btn-primary">Request</button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.socket.io/4.2.0/socket.io.min.js"
        integrity="sha384-PiBR5S00EtOj2Lto9Uu81cmoyZqR57XcOna1oAuVuIEjzj0wpqDVfD0JA9eXlRsj"
        crossorigin="anonymous"></script>

<script>

    @foreach( $jobs as $job)
       var sec =  document.getElementsByName({{$job->position}});
       $('div[name =' + {{$job->position}} + ']').append(
       '<div class="accent-green-gradient"></div>'
       )

        @endforeach


    var position;
    var type;
    $(document).ready(function () {
        $('.barista').click(function () {
            $('#exampleModal').modal('show');
            position = $(this).attr('name')
            type = 'barista'
        })
        $('.work').click(function () {
            $('#exampleModal').modal('show');
            position = $(this).attr('name')
            type = 'work'
        })
        $('.security').click(function () {
            $('#exampleModal').modal('show');
            position = $(this).attr('name')
            type = 'security'
        })


    })

    $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').trigger('focus')
    })
    $(function () {
        let ip_address = '127.0.0.1';
        let socket_port = '3000';
        let socket = io(ip_address + ':' + socket_port);
        socket.on('connection')

        $('#send').click(function () {
            alert(position);
            var jobId;
            $.ajax({
                type: 'get',
                url: 'request-job',
                data: {
                    'position': position,
                    'name': $("#name").val(),
                    'jobDate': $('#jobDate').val(),
                    'jobTitle': $('#jobTitle').val(),
                    'jobType': type,

                },
                success: function (data) {
                    jobId = data['jobId']


                }
            })

            let message = {
                'jobDate': $('#jobDate').val(),
                'jobTitle': $('#jobTitle').val(),
                'name': 'gg',
                'jobType': type,
                'jobId': jobId

            };
            socket.emit('sendJobToServer', message)
        })
        socket.on('sendJobToAdmin', (message) => {
            let title = message['jobTitle'];
            let date = message['date'];
            let name = message['name'];
            let type = message['jobType']
            let jobId = message['jobId']
            console.log(message)
            $('#customers').append(
                '<tr> <td>  '+title+' </td> <td>  '+date+' </td> <td>  '+name+' </td> <td>  '+type+' </td> <td style="width: 190px"> <button value='+jobId+' style="" class="btn btn-primary"> approve</button> <button class="btn btn-danger">reject</button> </td> </tr> '

            )


        })
    })
</script>
</body>

</html>

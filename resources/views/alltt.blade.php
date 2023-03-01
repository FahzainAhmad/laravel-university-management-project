<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time Tables | Newland University</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: Helvetica;
        }

        .sidee {
            height: 100vh;
            width: 20%;
            background-color: #252525;
        }

        .logosp {
            display: flex;
            flex-direction: row;
            align-items: center;
            justify-content: center;
            background-color: #151515;
            padding-top: 10px;
            padding-bottom: 10px;
        }

        .logo {
            width: 17%;
        }

        .headtxt {
            color: #2DE2BE;
            margin-left: 10px;
        }

        .options {
            color: #2DE2BE;
            text-align: center;
            height: 50px;
            width: 100%;
            padding: 10px;
        }

        .options:hover {
            transition-duration: 0.2s;
            background-color: #151515;
        }

        .main-div {
            display: flex;
            flex-direction: row;
        }

        .data-content {
            width: 80%;
            padding: 20px;

        }

        .heads {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            width: 100%;
        }

        .head-btn {
            border: none;
            border-radius: 10px;
            background-color: red;
            color: white;
            width: 40%;
            padding: 5px;
        }

        .tt_container {
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            align-items: center;
            border-radius: 10px;
            margin-bottom: 10px;
            margin-top: 10px;
        }

        .data-operate {
            display: flex;
            flex-direction: row;
            width: 70%;
            padding: 10px;
            justify-content: space-around;
            background-color: #151515;
            border-radius: 10px;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .data {
            display: flex;
            flex-direction: column;
        }

        .operate {
            display: flex;
            flex-direction: column;
            justify-content: space-around;
        }

        .oper {
            border: 0;
            border-radius: 10px;
            width: 60px;
            padding: 2px;
            color: white;
        }

        a {
            text-decoration: none;
        }
    </style>
</head>

<body style="background-color:#0F0E0E;">

    <div class="main-div">
        <div class="sidee">
            <div class="logosp">
                <img src="/images/logo.png" alt="NewLand" class="logo">
                <span class="headtxt">Newland <br />University</span>
            </div>
            <a href="/admin">
                <div class="options">
                    Student Info
                </div>
            </a>
            <a href="/allatt">
                <div class="options">
                    Attendence
                </div>
            </a>
            <a href="/report">
                <div class="options">
                    Results
                </div>
            </a>
            <div class="options" style="background-color: #151515;">
                Timetables
            </div>
            <a href="/contacted">
                <div class="options">
                    Contact Us
                </div>
            </a>
            <a href="/complaints">
                <div class="options">
                    Complaints
                </div>
            </a>
            <div class="options">
                Announcements
            </div>
            <div class="options">

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button type="submit" class="head-btn">
                        {{ __('Log Out') }}
                    </button>
                </form>
            </div>
        </div>

        <div class="data-content">
            <div class="heads">
                <span style="color:white;font-size:1.7rem;">Newland Timetable Database</span>
                <a href="/addtt"><button class="btn btn-success">Add Timetable</button></a>
            </div>
            @foreach($time_tables as $tt)
            <div class="tt_container" style="background-color:#252525;">
                <div class="data-operate">
                    <div class="data">
                        <span style="color:white;">Department : {{$tt->dname}}</span>
                        <span style="color:white;">Semester : {{$tt->sem}}</span>
                        <span style="color:white;">Division : {{$tt->div}}</span>
                        <span style="color:white;">From : {{$tt->from_date}}</span>
                        <span style="color:white;">To : {{$tt->to_date}}</span>
                    </div>
                    <div class="operate">
                        <a href="/edittt/{{$tt->id}}"><button class="oper" style="background-color:#18A28C;">Edit</button></a>
                        <a href="/deletett/{{$tt->id}}"><button class="oper" style="background-color:#DD172B;">Delete</button></a>
                        <a href="/images/{{$tt->timet}}" target="_blank"><button class="oper" style="background-color:#2695F4;">Show</button></a>
                    </div>
                </div>
                <div>
                    <img src="/images/{{$tt->timet}}" width="200px" alt="Unable to load the timetable">
                </div>
            </div>
            @endforeach
            <div style="width:80%;height:5%;display:flex;flex-direction:row;margin-top:10px;">{{$time_tables->links()}}</div>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
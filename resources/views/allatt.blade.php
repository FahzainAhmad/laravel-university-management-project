<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendence | Newland University</title>
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

        table {
            margin-top: 20px;
            width: 90%;
            border-spacing: 0;
        }

        th,
        td {
            color: white;
            text-align: center;
            border: 1px solid #2DE2BE;
            padding: 10px;
        }

        .sel {
            height: 50px;
            width: 20%;
            color: white;
            background-color: #151515;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        .nxt {
            color: #252525;
            background-color: #2DE2BE;
            padding: 5px;
            font-size: 1.2rem;
            border: none;
            border-radius: 10px;
            transition-duration: 0.2s;
        }

        .nxt:hover {
            transition-duration: 0.2s;
            box-shadow: 0px 0px 10px #2DE2BE;
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
                <div class="options" style="background-color: #151515;">
                    Attendence
                </div>
            </a>
            <a href="/report">
                <div class="options">
                    Results
                </div>
            </a>
            <a href="/alltt">
                <div class="options">
                    Timetables
                </div>
            </a>
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
                <span style="color:white;font-size:1.7rem;">Newland Attendence Database</span>
                <a href="/addatt"><button class="btn btn-success">Add Attendence</button></a>
            </div>

            <form action="/allattwdata" method="POST">
                @csrf
                <select name="dates" id="" class="sel">
                    @foreach($dates_data as $dd)
                    <option value="{{$dd->date}}">{{$dd->date}}</option>
                    @endforeach
                </select>
                <input type="submit" value="Show" class="nxt" />
            </form>

            <table>
                <tr>
                    <th>Student ID</th>
                    <th>Date</th>
                    <th>Attendance</th>
                </tr>
                <tr>
                    <td colspan="3" style="color:red;">Please select a date</td>
                </tr>
            </table>

        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
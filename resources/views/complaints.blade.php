<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator | Newland University</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: Helvetica;
        }

        .sidee {
            height: 200vh;
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

        .ttr {
            transition-duration: 0.2s;
        }

        .ttr:hover {
            box-shadow: 0px 0px 20px black;
            transition-duration: 0.2s;
        }

        .head-btn {
            border: none;
            border-radius: 10px;
            background-color: red;
            color: white;
            width: 40%;
            padding: 5px;
        }

        img {
            object-fit: contain;
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
                <div class="options" style="background-color: #151515;">
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
                <span style="color:white;font-size:1.7rem;">Newland Contact Database</span>
            </div>
            <div class="container">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                  @foreach ($com_data as $cod)
                    <div class="col" style="color:#2DE2BE;">
                        <div class="card h-100 card-hover" style="background-color:#151515;">
                            <div class="card-body">
                                <h5 class="card-title">Complaint ID : {{$cod->id}}</h5>
                                <p class="card-text">Complaint By : {{$cod->stud_id}}</p>
                                <p class="card-text">{{$cod->complaintcontent}}</p>
                                <div style="display:flex;flex-direction:row;width:100%;justify-content:space-around;">
                                    @if ($cod->status == 'Unresolved')
                                        <p class="card-text" style="background-color:red;color:white;width:40%;border:none;border-radius:5px;padding:5px;text-align:center;">{{$cod->status}}</p>                                    
                                    @else
                                    <p class="card-text" style="background-color:lightgreen;color:black;width:40%;border:none;border-radius:5px;padding:5px;text-align:center;">{{$cod->status}}</p> 
                                    @endif
                                    <a href="/changeshow/{{$cod->id}}" style="width:100%;margin-left:10px;">
                                        <p class="card-text" style="background-color:white;color:black;width:70%;border:none;border-radius:5px;padding:5px;text-align:center;height:35px;">Change</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                  @endforeach
                </div>
            </div>

            <div style="width:80%;height:5%;display:flex;flex-direction:row;margin-left:14px;margin-top:15px;">{{ $com_data->links() }}</div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>

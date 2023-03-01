<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User | Newland University</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: Helvetica, sans-serif;
        }

        html,
        body {
            width: 100%;
        }

        .head-class {
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .head-bar {
            width: 100%;
            height: 30vh;
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            padding: 20px;
            background-color: #151515;
        }

        .imgpfp {
            border-radius: 100px;
            border: 5px solid #2DE2BE;
        }

        .info {
            color: white;
            display: flex;
            flex-direction: column;
        }

        .user-content {
            width: 100%;
            display: flex;
            flex-direction: row;
        }

        .tt-space {
            width: 35%;
            min-height: 200px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 20px;
        }

        .tts-space {
            margin-top: 20px;
            width: 100%;
            min-height: 200px;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        .date-container {
            color: white;
            background-color: #0F0E0E;
            padding: 10px;
            margin-top: 5%;
            margin-left: 5px;
            border-radius: 10px;
        }

        .time-table {
            display: flex;
            justify-content: center;
            flex-direction: column;
            padding: 20px;
            background-color: #151515;
            width: 90%;
            margin-bottom: 10px;
            border-radius: 10px;
        }

        table {
            margin-top: 20px;
            width: 100%;
            border-spacing: 0px;
        }

        th,
        td {
            color: white;
            text-align: center;
            border: 1px solid #2DE2BE;
            padding: 10px;
        }

        .ubtn {
            color: #151515;
            background-color:
                lightgreen;
            padding: 5px;
            margin-top: 10px;
            width: 100%;
            border-radius: 5px;
            border: none;
        }


        .data-content {
            width: 80%;
            padding: 20px;

        }
    </style>
</head>

<body style="background-color:#0F0E0E;">
    <div class="head-class">
        <div class="head-bar">
            <div style="display:flex;flex-direction:column;justify-content:center;align-items:center;">
                <img src="/images/userspfp/{{ $user->pfp }}" alt="" height="100px" width="100px"
                    class="imgpfp">
                <div style="display:flex;flex-direction:row;">
                    <a href="{{ url('edit', $user->id) }}"><button type="button"
                            style="color:#151515;background-color:lightblue;padding:5px;margin-top:10px;width:100%;border-radius:5px;border:none;">Edit
                            Profile</button></a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit"
                            style="color:white;background-color:red;padding:5px;margin-top:10px;width:100%;border-radius:5px;border:none;margin-left:10px;">
                            {{ __('Log Out') }}
                        </button>
                    </form>
                </div>
            </div>
            <div class="info">
                <span style="margin-bottom:20px;">Name : {{ $user->name }}</span>
                <span style="margin-bottom:20px;">Email : {{ $user->email }}</span>
                <span style="margin-bottom:20px;">Age : {{ $user->age }}</span>
                <span style="margin-bottom:20px;">Gender : {{ $user->gender }}</span>
            </div>
            <div class="info">
                <span style="margin-bottom:20px;">Mobile : {{ $user->mobile }}</span>
                <span style="margin-bottom:20px;">Blood Group : {{ $user->bloodgroup }}</span>
                <span style="margin-bottom:20px;">Last school : {{ $user->last_school }}</span>
                <span style="margin-bottom:20px;">Division : {{ $user->div }}</span>
            </div>
        </div>
        <div style="width:100%;display:flex;justify-content:center;">
            <a href="{{ url('downloadreport', $user->id) }}"><button type="button" class="ubtn">Download
                    Profile</button></a>
            <a href="{{ url('complaint', $user->id) }}"><button type="button" class="ubtn"
                    style="margin-left:10px;">File a complaint</button></a>
        </div>
        <div class="user-content">

            <div class="tt-space">
                <p style="text-align:center;color:#2DE2BE;font-size:2rem;">Your TimeTables</p>
                @foreach ($user_time_tables as $utt)
                    <div class="time-table">
                        <img src="/images/{{ $utt->timet }}" alt="" style="width:50%;">
                        <div style="display:flex;flex-direction:row;justify-content:space-between;">
                            <div style="display:flex;flex-direction:row;align-items:center;">
                                <div class="date-container">
                                    {{ $utt->from_date }}
                                </div>
                                <div class="date-container">
                                    {{ $utt->to_date }}
                                </div>
                            </div>
                            <a href="/images/{{ $utt->timet }}" target="_blank"><button type="button"
                                    style="color:#151515;background-color:lightgreen;padding:5px;margin-top:10px;width:100%;border-radius:5px;border:none;">Show
                                    Timetable</button></a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div style="display:flex;flex-direction:column;margin-left:20px;width:70%;">
                <p style="padding-left:20px;text-align:center;color:#2DE2BE;font-size:2rem;margin-top:20px;">Your
                    Marksheets</p>

                <table>
                    <thead>
                        <tr>
                            <th>Student ID</th>
                            <th>Exam Date</th>
                            <th>Soodam</th>
                            <th>BS</th>
                            <th>Laravel</th>
                            <th>PE</th>
                            <th>Java</th>
                            <th>Total</th>
                            <th>%</th>
                            <th>Grade</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($result_data as $result)
                            <tr>
                                <td>{{ $result->stud_id }}</td>
                                <td>{{ $result->exam_date }}</td>
                                <td>{{ $result->Soodam }}</td>
                                <td>{{ $result->BS }}</td>
                                <td>{{ $result->Laravel }}</td>
                                <td>{{ $result->PE }}</td>
                                <td>{{ $result->Java }}</td>
                                <td>{{ $result->total }}</td>
                                <td>{{ $result->percent }}</td>
                                <td>{{ $result->grade }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="tts-space">
                    <div style="width:50%;">
                        <p style="text-align:center;color:#2DE2BE;font-size:2rem;">Your Attendence</p>
                        <table>
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Attend</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($attend as $att)
                                    <tr>
                                        <td>{{ $att->date }}</td>
                                        <td>{{ $att->attend }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div style="width:50%;margin-left:10px;">
                        <p style="text-align:center;color:#2DE2BE;font-size:2rem;">Your Complaints</p>
                        <table>
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Content</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($coms_data as $csd)
                                    <tr>
                                        <td>{{ $csd->id }}</td>
                                        <td>{{ $csd->complaintcontent }}</td>
                                        <td>{{ $csd->status }}</td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="data-content">
            <div class="heads">
                <span style="color:#2DE2BE;font-size:2rem;text-align:center">Important Announcements</span>
            </div>

            <div class="container" style="margin-top:10px;">
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4">
                    @foreach ($ann_data as $ad)
                        <div class="col" style="color:#2DE2BE;border-radius:20px;">
                            <div class="card h-100 card-hover" style="background-color:#151515;">
                                <div class="card-body">
                                    <h5 class="card-title" style="text-align:center;">{{ $ad->id }}</h5>
                                    <p class="card-text">{{ $ad->anncontent }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
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

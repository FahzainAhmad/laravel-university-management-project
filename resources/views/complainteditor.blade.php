<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Complaint Editor | Newland University</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: Helvetica;
        }

        .main-div {
            width: 100%;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .contain {
            padding: 30px;
            background-color: #151515;
            color: white;
            border: none;
            border-radius: 10px;
        }
    </style>
</head>

<body style="background-color:#252525;">
    <div class="main-div">
        <span style="color:white;font-size:1.7rem;margin-bottom:20px;">Change the status of complaint</span>
        <div class="col" style="color:#2DE2BE;min-width:25%;max-width:25%;">
            <div class="card h-100 card-hover" style="background-color:#151515;border-radius:10px;">
                <div class="card-body" style="padding:20px;border-radius:10px;">
                    <h5 class="card-title">Complaint ID : {{ $coms->id }}</h5>
                    <p class="card-text" style="border-bottom:1px dashed white;margin-bottom:10px;padding-bottom:10px;">
                        Complaint By : {{ $coms->stud_id }}</p>
                    <p class="card-text" style="margin-bottom:20px;">{{ $coms->complaintcontent }}</p>
                    <div class="display:flex;flex-direction:row;justify-content:space-around;width:100%;">
                        <form action="/changestatusnow/{{$coms->id}}" method="POST">
                            @csrf
                            <input type="radio" name="status" value="Unresolved"> Unresolved
                            <input type="radio" name="status" value="Resolved"> Resolved
                            <input type="submit" value="Submit" style="padding:5px;float:right;align-self:center;background-color:#2DE2BE;color:#151515;border-radius:5px;">
                        </form>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
</body>

</html>

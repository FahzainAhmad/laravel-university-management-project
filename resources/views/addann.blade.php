<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaint</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: Helvetica, sans-serif;
        }


        .div-block {
            height: 100vh;
            width: 100%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .textlabel {
            color: #2DE2BE;
            font-size: 1.4rem;
            margin-bottom: 10px;
        }

        .tfield {
            width: 80%;
            height: 35px;
            border: none;
            border-bottom: 2px solid black;
            border-radius: 5px;
            background-color: #151515;
            color: white;
            padding-left: 10px;
            margin-bottom: 20px;
            font-size: 1.3rem;
        }

        .nxt {
            color: #252525;
            background-color: #2DE2BE;
            padding: 15px;
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

<body style="background-color: #252525;">
    
    <div class="div-block">
        <p style="color:#2DE2BE;font-size:2.5rem;margin-bottom:2%;">Enter your Announcement Here</p>
        <form method="POST" action="/addann">
            @csrf
            <textarea name="anncontent" id="" cols="50" rows="10" style="border-radius:10px;border:none;font-size:1.2rem;padding:10px;color:white;background-color:#151515;"></textarea>
            <br>
            <input type="submit" class="nxt" style="margin-top:20px;">
        </form>
    </div>
</body>

</html>
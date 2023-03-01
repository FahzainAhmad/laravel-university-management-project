<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Attendence</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: Helvetica, sans-serif;
        }


        .div-block {
            height: 100vh;
            width: 80%;
            display: flex;
            flex-direction: column;
            padding: 20px;

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
    </style>
</head>

<body style="background-color:#252525;">
    <div class="div-block">
        <p style="color:#2DE2BE;font-size:2.5rem;margin-bottom:2%;">Add Attendence</p>
        <form method="POST" action="/store_att" style="width:100%;">
            @csrf
            <div style="display:flex;flex-direction:column;width:100%;">
                <x-input-label for="date" :value="__('Date')" class="textlabel" />
                <input type="date" name="date" id="" class="tfield" style="width:20%;">
                <x-input-label for="sid" :value="__('Select student')" class="textlabel" />
                <table>
                    <tr>
                        <th>Student ID</th>
                        <th>Name</th>
                        <th>Present</th>
                        <th>Absent</th>
                    </tr>
                    @foreach($attuser as $ats)
                    <tr>
                        <input type="hidden" name="students[]" value="{{ $ats->id }}">
                        <td>{{$ats->id}}</td>
                        <td>{{$ats->name}}</td>

                        <td><input type="radio" name="attends[{{ $ats->id }}]" value="P"> </td>
                        <td><input type="radio" name="attends[{{ $ats->id }}]" value="A"> </td>
                    </tr>
                    @endforeach
                </table>
            </div>
            <input type="submit" class="nxt" style="margin-top:20px;">
        </form>
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Marksheets | Newland University</title>
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
            border: 1px solid #2DE2BE;
            padding: 10px;
            border-radius: 10px;
        }

        th {
            color: white;
        }
    </style>
</head>

<body>

    <body style="background-color: #252525;">
        <div class="div-block">
            <p style="color:#2DE2BE;font-size:2.5rem;margin-bottom:2%;">Add Marksheet</p>
            <form method="POST" action="/store_mk" style="width:100%;">
                @csrf
                <div style="display:flex;flex-direction:column;width:100%;">
                    <x-input-label for="exam_date" :value="__('Exam Date')" class="textlabel" />
                    <input type="date" name="exam_date" id="" class="tfield" style="width:20%;">
                    <x-input-label for="sid" :value="__('Select student')" class="textlabel" />
                    <select name="sid" id="sid" style="height:50px;width:40%;color:white;background-color:#151515; border-radius:10px;margin-bottom:10px;">
                        @foreach($mkuser as $mk)
                        <option value="{{$mk->id}}">Student ID : {{$mk->id}}</option> <br>
                        @endforeach
                    </select>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Soodam</th>
                            <th>BS</th>
                            <th>Laravel</th>
                            <th>PE</th>
                            <th>Java</th>
                        </tr>
                    </thead>
                    <tbody>
                        <td><input type="text" class="tfield" name="soodam"></td>
                        <td><input type="text" class="tfield" name="bs"></td>
                        <td><input type="text" class="tfield" name="laravel"></td>
                        <td><input type="text" class="tfield" name="pe"></td>
                        <td><input type="text" class="tfield" name="java"></td>
                    </tbody>
                </table>

                <input type="submit" class="nxt" style="margin-top:20px;">
            </form>
        </div>
    </body>
</body>

</html>
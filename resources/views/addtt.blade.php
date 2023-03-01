<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add TimeTable</title>
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
    </style>
</head>

<body style="background-color: #252525;">
    <div class="div-block">
        <p style="color:#2DE2BE;font-size:2.5rem;margin-bottom:2%;">Add TimeTable</p>
        <form method="POST" action="/store_tt" enctype="multipart/form-data" style="width:100%;">
            @csrf
            <div style="display:flex;flex-direction:column;width:20%;">
                <label for="div" class="textlabel">Division</label>
                <input type="text" name="div" class="tfield" />
            </div>
            <div style="display:flex;flex-direction:column;width:20%;">
                <label for="sem" class="textlabel">Semester</label>
                <input type="text" name="sem" class="tfield" />
            </div>
            <div style="display:flex;flex-direction:column;width:100%;">
                <x-input-label for="dept_id" :value="__('Department')" class="textlabel" />

                <select name="dept_id" id="dept_id">
                    <option value="1">Introduction to Computer Science</option>
                    <option value="2">Bachelor's of Technology</option>
                    <option value="3">Master's of Technology</option>
                    <option value="4">Bachelor's of Computer Applications</option>
                    <option value="5">Master's of Computer Applications</option>
                    <option value="6">Bachelor's of Science in IT</option>
                    <option value="7">Master's of Science in IT</option>
                </select>
            </div>
            <div style="display:flex;flex-direction:row;width:100%;">
                <div style="display:flex;flex-direction:column;width:20%;">
                    <label for="from_date" class="textlabel">From</label>
                    <input type="date" id="from" class="tfield" name="from_date">
                </div>
                <div style="display:flex;flex-direction:column;width:20%;">
                    <label for="to_date" class="textlabel">To</label>
                    <input type="date" id="to" class="tfield" name="to_date">
                </div>
            </div>
            <div style="display:flex;flex-direction:column;width:20%;">
                <label for="timet" class="textlabel">Upload Time Table</label>
                <input type="file" id="exampleInputPassword1" name="timet" style="color:white;">
            </div>
            <input type="submit" class="nxt" style="margin-top:20px;">
        </form>
    </div>
</body>

</html>
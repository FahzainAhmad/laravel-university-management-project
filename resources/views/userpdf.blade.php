<center>
    <h1>Newland University</h1>
</center>

<h3>Personal Information</h3>

<table style="border:1px solid black">
    <tr style="border:1px solid black">
        <th>ID</th>
        <th>Name</th>
        <th>Gender</th>
        <th>Age</th>
        <th>Mobile</th>
        <th>Last School</th>
        <th>Email</th>
        <th>Blood Group</th>
    </tr>
    <tr style="border:1px solid black">
        <td style="border:1px solid black">{{$data->id}}</td>
        <td style="border:1px solid black">{{$data->name}}</td>
        <td style="border:1px solid black">{{$data->gender}}</td>
        <td style="border:1px solid black">{{$data->age}}</td>
        <td style="border:1px solid black">{{$data->mobile}}</td>
        <td style="border:1px solid black">{{$data->last_school}}</td>
        <td style="border:1px solid black">{{$data->email}}</td>
        <td style="border:1px solid black">{{$data->bloodgroup}}</td>
    </tr>
</table>

<h3>Attendence Data</h3>

<table style="border:1px solid black">
    <tr style="border:1px solid black">
        <th>Date</th>
        <th>Attendence</th>
    </tr>
    @foreach ($att_data as $att)
    <tr style="border:1px solid black">
        <td style="border:1px solid black">{{$att->date}}</td>
        <td style="border:1px solid black">{{$att->attend}}</td>
    </tr>
    @endforeach)
</table>

<h3>Exam Information</h3>

<table style="border:1px solid black">
    <tr style="border:1px solid black">
        <th>Exam Date</th>
        <th>Soodam</th>
        <th>BS</th>
        <th>Laravel</th>
        <th>PE</th>
        <th>Java</th>
        <th>Total</th>
        <th>Percentage</th>
        <th>Grade</th>
    </tr>
    @foreach ($exam as $ex)
    <tr style="border:1px solid black">
        <td style="border:1px solid black">{{$ex->exam_date}}</td>
        <td style="border:1px solid black">{{$ex->Soodam}}</td>
        <td style="border:1px solid black">{{$ex->BS}}</td>
        <td style="border:1px solid black">{{$ex->Laravel}}</td>
        <td style="border:1px solid black">{{$ex->PE}}</td>
        <td style="border:1px solid black">{{$ex->Java}}</td>
        <td style="border:1px solid black">{{$ex->total}}</td>
        <td style="border:1px solid black">{{$ex->percent}}</td>
        <td style="border:1px solid black">{{$ex->grade}}</td>
    </tr>
    @endforeach
</table>
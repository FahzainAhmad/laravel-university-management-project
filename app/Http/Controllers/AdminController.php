<?php

namespace App\Http\Controllers;

use App\Mail\Resultmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\announcements;
use App\Models\Marks;
use App\Models\User;
use App\Models\Attendence;
use App\Models\ComplaintModel;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\TimeTables;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function store(Request $request)

    {
        $c = new User();
        $c->name = $request->name;
        $c->email = $request->email;
        $c->password = Hash::make($request->password);
        $c->age = $request->age;
        $c->gender = $request->gender;
        $c->dept_id = $request->dept_id;
        $c->sem = $request->sem;
        $c->div = $request->div;
        $c->mobile = $request->mobile;
        $c->bloodgroup = $request->bloodgroup;
        $c->last_school = $request->last_school;
        $imageName = $request->file('pfp')->getClientOriginalName();
        $request->pfp->move(public_path('images/userspfp/'), $imageName);
        $c->pfp = $imageName;
        $c->save();

        return redirect('admin');
    }
    public function index()
    {
        $search = $request['search'] ?? "";
        if ($search != "") {
            $users = User::select(
                "users.id",
                "users.name",
                "email",
                "age",
                "gender",
                "sem",
                "pfp",
                "div",
                "mobile",
                "bloodgroup",
                "last_school",
                "departments.name as dname"
            )
                ->leftjoin("departments", "users.dept_id", "=", "departments.dept_id")->where('email', 'LIKE', "%$search%")->paginate(10);
        } else {

            $users = User::select(
                "users.id",
                "users.name",
                "email",
                "age",
                "gender",
                "sem",
                "pfp",
                "div",
                "mobile",
                "bloodgroup",
                "last_school",
                "departments.name as dname"
            )
                ->leftjoin("departments", "users.dept_id", "=", "departments.dept_id")->paginate(10);
        }


        $users = compact('users');
        return view('/admin')->with($users);
    }

    public function delete($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function editshow($id)
    {
        $users = User::find($id);
        return view('/editData', compact('users'));
    }

    public function editdata(Request $req, $id)
    {
        $users = User::find($id);
        $users->name = $req->name;
        $users->email = $req->email;
        $users->password =  Hash::make($req->password);
        $users->age = $req->age;
        $users->gender = $req->gender;
        $users->dept_id = $req->dept_id;
        $users->sem = $req->sem;
        $users->div = $req->div;
        $users->mobile = $req->mobile;
        $users->bloodgroup = $req->bloodgroup;
        $users->name = $req->name;
        $users->last_school = $req->last_school;
        $imageName = $req->file('pfp')->getClientOriginalName();
        $req->pfp->move(public_path('images/userspfp/'), $imageName);
        $users->pfp = $imageName;
        $users->save();
        return redirect('admin');
    }

    public function store_tt(Request $request)
    {
        $c = new TimeTables();
        $c->dept_id = $request->dept_id;
        $c->sem = $request->sem;
        $c->div = $request->div;
        $c->from_date = $request->from_date;
        $c->to_date = $request->to_date;
        $c->sem = $request->sem;
        $c->div = $request->div;
        $imageName = $request->file('timet')->getClientOriginalName();
        $request->timet->move(public_path('images'), $imageName);
        $c->timet = $imageName;
        $c->save();
        return redirect('/alltt');
    }
    public function show_tt()
    {
        $time_tables = TimeTables::select(
            "time_tables.id",
            "sem",
            "div",
            "from_date",
            "to_date",
            "timet",
            "departments.full_form as dname"
        )
            ->leftjoin("departments", "time_tables.dept_id", "=", "departments.dept_id")->paginate(3);
        return view('/alltt', compact('time_tables'));
    }

    public function deletett($id)
    {
        $data = TimeTables::find($id);
        $data->delete();
        return redirect('/alltt');
    }


    public function editshowtt($id)
    {
        $tt = TimeTables::find($id);
        return view('/editttData', compact('tt'));
    }


    public function editdatatt(Request $request, $id)
    {
        $c = TimeTables::find($id);
        $c->dept_id = $request->dept_id;
        $c->sem = $request->sem;
        $c->div = $request->div;
        $c->from_date = $request->from_date;
        $c->to_date = $request->to_date;
        $c->sem = $request->sem;
        $c->div = $request->div;
        $imageName = $request->file('timet')->getClientOriginalName();
        $request->timet->move(public_path('images'), $imageName);
        $c->timet = $imageName;
        $c->save();
        return redirect('/alltt');
    }

    public function add_mk()
    {
        $mkuser = User::all();
        return view('/addmk', compact('mkuser'));
    }
    public function store_mk(Request $request)
    {
        $c = new Marks();
        $c->stud_id = $request->sid;
        $c->exam_date = $request->exam_date;
        $c->soodam = $request->soodam;
        $c->bs = $request->bs;
        $c->laravel = $request->laravel;
        $c->pe = $request->pe;
        $c->java = $request->java;
        $total = $request->soodam + $request->bs + $request->laravel + $request->pe + $request->java;
        $c->total = $total;
        $c->percent = ($total / 500) * 100;
        if ($c->percent >= 90) {
            $c->grade = "A";
        } elseif ($c->percent >= 80 && $c->percent < 90) {
            $c->grade = "B";
        } elseif ($c->percent >= 70 && $c->percent < 80) {
            $c->grade = "C";
        } elseif ($c->percent >= 60 && $c->percent < 70) {
            $c->grade = "D";
        } else {
            $c->grade = "F";
        }
        $c->save();
        return redirect('/report');
    }

    public function show_mk()
    {
        $result_data = Marks::select("*")->orderBy('stud_id', 'asc')->paginate(5);
        return view('/report', compact('result_data'));
    }

    public function deletemk($id)
    {
        $data = Marks::find($id);
        $data->delete();
        return redirect('/report');
    }

    public function editshowmk($id)
    {
        $mkuser = User::all();
        $mks = Marks::find($id);
        return view('/editmk', compact('mks', 'mkuser'));
    }
    public function editdata_mk(Request $request, $id)
    {
        $c = Marks::find($id);
        $c->stud_id = $request->sid;
        $c->exam_date = $request->exam_date;
        $c->soodam = $request->soodam;
        $c->bs = $request->bs;
        $c->laravel = $request->laravel;
        $c->pe = $request->pe;
        $c->java = $request->java;
        $total = $request->soodam + $request->bs + $request->laravel + $request->pe + $request->java;
        $c->total = $total;
        $c->percent = ($total / 500) * 100;
        if ($c->percent >= 91) {
            $c->grade = "A";
        } elseif ($c->percent >= 81 && $c->percent < 90) {
            $c->grade = "B";
        } elseif ($c->percent >= 71 && $c->percent < 80) {
            $c->grade = "C";
        } elseif ($c->percent >= 60 && $c->percent < 70) {
            $c->grade = "D";
        } else {
            $c->grade = "E";
        }
        $c->save();
        return redirect('/report');
    }

    public function add_att()
    {
        $attuser = User::all();
        return view('/addatt', compact('attuser'));
    }

    public function all_att()
    {
        $dates_data = Attendence::select('date')->distinct()->get();
        return view('/allatt', compact('dates_data'));
    }

    public function all_att_data(Request $req)
    {
        $stored_att = Attendence::select('stud_id', 'date', 'attend')->where('date', '=', $req->dates)->get();
        $presentCount = DB::table('attendence')
            ->where('attend', '=', 'P')
            ->where('date', '=', $req->dates)
            ->count();
        $absentCount = DB::table('attendence')
            ->where('attend', '=', 'A')
            ->where('date', '=', $req->dates)
            ->count();
        $dates_data = Attendence::select('date')->distinct()->get();
        $cur_date = $req->dates;
        return view('/allattwdata', compact('dates_data', 'stored_att', 'cur_date', 'presentCount', 'absentCount'));
    }

    public function store_att(Request $request)
    {
        $data = array();
        $students = $request->input('students');
        $attends = $request->input('attends');
        $j = 0;
        for ($i = 0; $i < count($students); $i++) {
            $j = $i + 1;
            $data[] = [
                'stud_id' => $students[$i],
                'date' => $request->date,
                'attend' => $attends[$j],
            ];
        }
        DB::table('attendence')->insert($data);
        return redirect('/allatt');
    }

    public function deleteatt($date)
    {
        Attendence::where('date', '=', $date)->delete();
        return redirect('/admin');
    }

    public function downloadreport($id)
    {
        $data = User::all()->where('id', '=', $id)->first();
        $att_data = Attendence::all()->where('stud_id', '=', $id);
        $exam = Marks::all()->where('stud_id', '=', $id);
        $pdf = Pdf::loadView('userpdf', compact('data', 'att_data', 'exam'));
        return $pdf->download('Student_Data.pdf');
    }

    public function store_complaint(Request $request)

    {
        $c = new ComplaintModel();
        $c->stud_id = $request->stud_id;
        $c->complaintcontent = $request->complaintcontent;
        $c->save();

        return redirect('/user/' . $request->stud_id);
    }

    public function showcomplaint()
    {
        $com_data = ComplaintModel::select("*")->orderBy('id', 'asc')->paginate(8);
        return view('/complaints', compact('com_data'));
    }
    public function changeshow($id)
    {
        $coms = ComplaintModel::find($id);
        return view('/complainteditor', compact('coms'));
    }

    public function changestatusnow(Request $req, $id)
    {
        $comps = ComplaintModel::find($id);
        $comps->status = $req->status;
        $comps->save();

        return redirect('/complaints');
    }

    public function showann()
    {
        $ann_data = announcements::select("*")->orderBy('id', 'asc')->paginate(8);
        return view('/announcements', compact('ann_data'));
    }

    public function store_ann(Request $request)

    {
        $c = new announcements();
        $c->anncontent = $request->anncontent;
        //$message = $request->anncontent;
        $c->save();

        //$subject = 'Important Announcement';


        //$recipient = 'saiyedfahzain191@gmail.com';
        //Mail::to($recipient)->send(new Resultmail($subject, $message));
        


        return redirect('/showann');
    }
}

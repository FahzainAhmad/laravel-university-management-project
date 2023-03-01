<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TimeTables;
use App\Models\User;
use App\Models\Marks;
use App\Models\Attendence;
use Illuminate\Support\Facades\DB;
use App\Models\announcements;

class UserController extends Controller
{
    public function show($id)
    {
        $user = User::find($id);
        $result_data = Marks::all()->where('stud_id', $id);
        $attend = Attendence::all()->where('stud_id', $id);
        $user_time_tables = TimeTables::select('from_date', 'to_date', 'timet')
            ->where('dept_id', '=', $user->dept_id)
            ->where('div', '=', $user->div)
            ->where('sem', '=', $user->sem)
            ->get();
        $coms_data = DB::table('complaints')->select('*')->where('stud_id','=',$id)->get();
        $ann_data = announcements::select("*")->orderBy('date', 'asc')->paginate(8);
        return view('user')->with(compact('user', 'user_time_tables', 'result_data', 'attend', 'coms_data', 'ann_data'));
    }
}

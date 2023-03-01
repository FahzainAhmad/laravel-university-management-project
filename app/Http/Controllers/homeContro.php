<?php

namespace App\Http\controllers;

use App\Models\Attendence;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\announcements;
use App\Models\Marks;
use App\Models\TimeTables;
use Illuminate\Support\Facades\DB;

class homeContro extends Controller
{
   public function checkUser()
   {
      if (auth()->user()->email == 'fa@gmail.com') {
         return redirect('/admin');
      } else {
         $id = User::where('email', auth()->user()->email)->pluck('id')->first();
         $user = User::find($id);
         $result_data = Marks::all()->where('stud_id', $id);
         $attend = Attendence::all()->where('stud_id', $id);
         $ann_data = announcements::select("*")->orderBy('date', 'asc')->paginate(8);
         $user_time_tables = TimeTables::select('from_date', 'to_date', 'timet')
            ->where('dept_id', '=', $user->dept_id)
            ->where('div', '=', $user->div)
            ->where('sem', '=', $user->sem)
            ->get();
         $att = User::all()->where('id', '=', $id);
         
        $coms_data = DB::table('complaints')->select('*')->get();
         return view('user')->with(compact('user', 'user_time_tables', 'result_data', 'attend','coms_data','ann_data'));
      }
   }
}

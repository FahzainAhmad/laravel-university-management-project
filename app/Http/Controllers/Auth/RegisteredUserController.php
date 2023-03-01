<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\TimeTables;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'mobile' => ['max:11'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

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
        $request->pfp->move(public_path('images'), $imageName);
        $c->pfp = $imageName;
        $c->save();

        event(new Registered($c));

        Auth::login($c);
        if ($c->email == "fa@gmail.com")
            return redirect('admin');
        else {

            return redirect('user/' . $c->id);
        }
    }
}

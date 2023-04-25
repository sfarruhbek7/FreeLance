<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Direction;
use App\Models\Jobs;
use App\Models\RegisterStage;
use App\Models\Statistic;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Console\View\Components\Info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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

        $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        $info=new \App\Models\Info();
        $info->save();
        $i=DB::select("select MAX(id) as max from infos")[0]->max;
        $statistic=new Statistic();
        $statistic->save();
        $s=DB::select("select MAX(id) as max from statistics")[0]->max;
        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'info_id' => $s,
            'statistic_id' => $i,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $i=DB::select("select MAX(id) as max from users")[0]->max;
        $rs=new RegisterStage();
        $rs->user_id=$i;
        $rs->stage1=true;
        $rs->save();
        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}

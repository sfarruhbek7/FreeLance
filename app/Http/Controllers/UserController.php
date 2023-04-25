<?php

namespace App\Http\Controllers;

use App\Models\Info;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $e=$request->email;
        $data=new User();
        $data->name=$request->first_name;
        $data->email=$request->email;
        $data->password=Hash::make("$request->password");
        $data->save();
        dd($data);
        return redirect()->route('dashboard');
//        $em=substr($e,strlen($e)-7,7);
//        if($em!='@sf.com')
//        {
//            $messenger="Email @sf.com bilan tugashi lozim";
//            return view('AdminPanel.Users.register',["mes"=>$messenger,'data'=>$request]);
//        }
//        $db=DB::select("select * from users where email='$request->email'");
//        if(count($db)!=0)
//        {
//            $messenger="Bunday foydalanuvchi mavjud!";
//            return view('AdminPanel.Users.register',["mes"=>$messenger,'data'=>$request]);
//        }
//        if($request->password!=$request->password_confirmation)
//        {
//            $messenger="Parollar bir biriga mos emas!";
//            return view('AdminPanel.Users.register',["mes"=>$messenger,'data'=>$request]);
//        }
//        if(strlen($request->password)<8)
//        {
//            $messenger="Parol 8 belgidan kam!";
//            return view('AdminPanel.Users.register',["mes"=>$messenger,'data'=>$request]);
//        }
//        $data=new Info();
//        $data->FIO="No`malum";
//        $data->group="No`malum";
//        $data->passport="No`malum";
//        $data->JSHSHIR=0;
//        $data->date_birthday="2022-12-02";
//        $data->location="No`malum";
//        $data->succes="Yo`q";
//        $data->phone="No`malum";
//        $data->reference="No`malum";
//        $data->save();
//        $i=DB::select("select MAX(id) as max from infos")[0]->max;
//        $data=new User();
//        $data->info_id=$i;
//        $data->first_name=$request->first_name;
//        $data->last_name=$request->last_name;
//        $data->gender=$request->gender;
//        $data->position=$request->position;
//        $data->email=$request->email;
//        $data->password=Hash::make("$request->password");
//        $data->save();
//        $sql=DB::select("select * from users where email='$request->email'");
//        $id=$sql[0]->id;
//        $inf=$sql[0]->info_id;
//        copy(public_path("/user/user.jpg"),public_path("/user/$id.jpg"));
//        copy(public_path("/Team/team.png"),public_path("/Team/$inf.png"));
//        return redirect()->route('AdminUsers');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

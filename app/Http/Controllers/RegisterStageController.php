<?php

namespace App\Http\Controllers;

use App\Models\Direction;
use App\Models\Info;
use App\Models\Jobs;
use App\Models\RegisterStage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterStageController extends Controller
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
        $id=auth()->id();
        if(isset($request->direction))
        {
            $info_id=User::find($id)->info_id;
            $info=Info::find($info_id);
            $info->direction=$request->direction;
            $info->save();
            $regst_id=DB::select("select id from register_stages where user_id='$id'")[0]->id;
            $regst=RegisterStage::find($regst_id);
            $regst->stage2=true;
            $regst->save();
        }
        if(isset($request->country))
        {
            $info_id=User::find($id)->info_id;
            $info=Info::find($info_id);
            $info->gender=$request->gender;
            $info->date_birthday=$request->date_birthday;
            $info->country=$request->country;
            $info->save();
            $regst_id=DB::select("select id from register_stages where user_id='$id'")[0]->id;
            $regst=RegisterStage::find($regst_id);
            $regst->stage3=true;
            $regst->save();
        }
        if(isset($request->newdirection))
        {
            $j=DB::select("select * from jobs where name='$request->job'");
            if($j==null)
            {
                $job=new Jobs();
                $job->name=$request->job;
                $job->save();
                $i=DB::select("select MAX(id) as max from jobs")[0]->max;
            }
            else
            {
                $i=$j[0]->id;
            }
            $d=DB::select("select * from directions where name='$request->direirection'");
            if($d==null)
            {
                $dr=new Direction();
                $dr->job_id=$i;
                $dr->name=$request->newdirection;
                $dr->save();
            }
        }
        return redirect()->route('dashboard');
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

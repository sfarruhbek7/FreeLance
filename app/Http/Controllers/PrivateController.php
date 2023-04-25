<?php

namespace App\Http\Controllers;

use App\Models\Direction;
use App\Models\History;
use App\Models\Info;
use App\Models\Jobs;
use App\Models\RegisterStage;
use App\Models\Statistic;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Facades\DB;

class PrivateController extends Controller
{
    function mon($month,$year)
    {
        $a=$month;
        $b=$year;
        if($a==1 || $a==3 || $a==5 || $a==7 || $a==8 || $a==10 || $a==12)
        {
            return 31;
        }
        if($a==4 || $a==6 || $a==9 || $a==11)
        {
            return 30;
        }
        if($a==2)
        {
            if($b%4==0) {
                return 29;
            }
            else{
                return 28;
            }
        }
    }
    function wee($a)
    {
        $day=$a['day'];
        $month=$a['month'];
        $year=$a['year'];
        if($day<8)
        {
            if($month=1)
            {
                $year-=1;
                $month=13;
            }
            $month-=1;
            $day=$this->mon($month,$year)-(7-$day);
        }
        else{
            $day-=7;
        }
        $s=$year;
        if(floor($month/10)==0)
        {
            $s=$s."-0".$month;
        }
        else
        {
            $s=$s."-".$month;
        }
        if(floor($day/10)==0)
        {
            $s=$s."-0".$day;
        }
        else{
            $s=$s."-".$day;
        }
        return $s;
    }
    function WeekPrice($td,$id)
    {
        $dowMap = array('Ya', 'Du', 'Se', 'Ch', 'Pa', 'Ju', 'Sh');

        $td1=$td;
        $td['day']+=1;
        $td2=$td;
        $td['day']+=1;
        $td3=$td;
        $td['day']+=1;
        $td4=$td;
        $td['day']+=1;
        $td5=$td;
        $td['day']+=1;
        $td6=$td;
        $td['day']+=1;
        $td7=$td;
        $td['day']+=1;
        $td8=$td;
        $w1=$this->wee($td1);
        $w2=$this->wee($td2);
        $w3=$this->wee($td3);
        $w4=$this->wee($td4);
        $w5=$this->wee($td5);
        $w6=$this->wee($td6);
        $w7=$this->wee($td7);
        $w8=$this->wee($td8);

        $week[1]=DB::select("select sum(price) as mysum from histories where worker_id='$id' && status=1 && updated_at>='$w1' && updated_at<'$w2'")[0]->mysum - DB::select("select sum(price) as mysum from histories where user_id='$id' && status=1 && updated_at>='$w1' && updated_at<'$w2'")[0]->mysum;
        $week[2]=DB::select("select sum(price) as mysum from histories where worker_id='$id' && status=1 && updated_at>='$w2' && updated_at<'$w3'")[0]->mysum - DB::select("select sum(price) as mysum from histories where user_id='$id' && status=1 && updated_at>='$w2' && updated_at<'$w3'")[0]->mysum;
        $week[3]=DB::select("select sum(price) as mysum from histories where worker_id='$id' && status=1 && updated_at>='$w3' && updated_at<'$w4'")[0]->mysum - DB::select("select sum(price) as mysum from histories where user_id='$id' && status=1 && updated_at>='$w3' && updated_at<'$w4'")[0]->mysum;
        $week[4]=DB::select("select sum(price) as mysum from histories where worker_id='$id' && status=1 && updated_at>='$w4' && updated_at<'$w5'")[0]->mysum - DB::select("select sum(price) as mysum from histories where user_id='$id' && status=1 && updated_at>='$w4' && updated_at<'$w5'")[0]->mysum;
        $week[5]=DB::select("select sum(price) as mysum from histories where worker_id='$id' && status=1 && updated_at>='$w5' && updated_at<'$w6'")[0]->mysum - DB::select("select sum(price) as mysum from histories where user_id='$id' && status=1 && updated_at>='$w5' && updated_at<'$w6'")[0]->mysum;
        $week[6]=DB::select("select sum(price) as mysum from histories where worker_id='$id' && status=1 && updated_at>='$w6' && updated_at<'$w7'")[0]->mysum - DB::select("select sum(price) as mysum from histories where user_id='$id' && status=1 && updated_at>='$w6' && updated_at<'$w7'")[0]->mysum;
        $week[7]=DB::select("select sum(price) as mysum from histories where worker_id='$id' && status=1 && updated_at>='$w7' && updated_at<'$w8'")[0]->mysum - DB::select("select sum(price) as mysum from histories where user_id='$id' && status=1 && updated_at>='$w7' && updated_at<'$w8'")[0]->mysum;

        $week[8]=$dowMap[date_format(date_create($w1),"w")];
        $week[9]=$dowMap[date_format(date_create($w2),"w")];
        $week[10]=$dowMap[date_format(date_create($w3),"w")];
        $week[11]=$dowMap[date_format(date_create($w4),"w")];
        $week[12]=$dowMap[date_format(date_create($w5),"w")];
        $week[13]=$dowMap[date_format(date_create($w6),"w")];
        $week[14]=$dowMap[date_format(date_create($w7),"w")];

        return $week;
    }
    function YearPrice($year,$id)
    {
        for($i=1;$i<=12;$i++)
        {
            if($i<10)
            {
                $month = $year . "-0".$i."-01 00:00:00";
                $Month = $year . "-0".($i+1)."-01 00:00:00";
            }
            else {
                $month = $year . "-".$i."-01 00:00:00";
                $Month = $year . "-".($i+1)."-01 00:00:00";
            }
            if($i!=12) {
                $yearprice[$i] = DB::select("select sum(price) as mysum from histories where worker_id='$id' && status=1 && updated_at>='$month' && updated_at<'$Month'")[0]->mysum - DB::select("select sum(price) as mysum from histories where user_id='$id' && status=1 && updated_at>='$month' && updated_at<'$Month'")[0]->mysum;
            }
            else
            {
                $yearprice[$i] = DB::select("select sum(price) as mysum from histories where worker_id='$id' && status=1 && updated_at>='$month'")[0]->mysum - DB::select("select sum(price) as mysum from histories where user_id='$id' && status=1 && updated_at>='$month'")[0]->mysum;
            }
        }
        return $yearprice;
    }

    public function dashboard()
    {
        $user=auth()->user();
        $id=$user->id;
        if(!isset($_GET['skip'])) {
            $regstg = DB::select("select * from register_stages where user_id='$id'")[0];
            if ($regstg->stage2 == 0) {
                $direction = null;
                $jobs = null;
                $dir = Direction::all();
                $j = Jobs::all();
                foreach ($j as $val) {
                    $jobs[$val->id] = $val;
                }
                foreach ($dir as $val) {
                    $direction[$val->id] = $val;
                }
                $sz = sizeof($j);
                return view('auth.register2', ['direction' => $direction, 'jobs' => $jobs, 'j' => $j, 'sz' => $sz]);
            }
            if ($regstg->stage3 == 0) {
                return view('auth.register3');
            }
        }

        date_default_timezone_set("Asia/Tashkent");
        $dt=\date("Y/m/d H:i:s");
        $todaydate=date_parse($dt);

        $weekprice=$this->WeekPrice($todaydate,$id);
        $statistics=Statistic::find($user->statistic_id);
        $yearprice=$this->YearPrice($todaydate['year'],$id);
        $lastworks=DB::select("select id,user_id,price,degree from histories where worker_id='$id' && status=1 ORDER BY id DESC LIMIT 10 ");
        $degreeusers=DB::select('select id,degree from statistics ORDER BY degree DESC LIMIT 10');
        return view('Private.dashboard',['user'=>$user,'statistics'=>$statistics,"weekprice"=>$weekprice,"yearprice"=>$yearprice,"lastworks"=>$lastworks,'degreeusers'=>$degreeusers]);
    }
    public function billing()
    {
        $user=auth()->user();
        return view('Private.billing',['user'=>$user]);
    }
    public function send()
    {
        $id=auth()->id();
        $directions = null;
        $jobs = null;
        $dir = Direction::all();
        $j = Jobs::all();
        foreach ($j as $val) {
            $jobs[$val->id] = $val;
        }
        foreach ($dir as $val) {
            $directions[$val->id] = $val;
        }
        $histories=DB::select("select * from histories where user_id='$id' ORDER BY id DESC ");
        $sz = sizeof($j);
        $user=auth()->user();
        return view('Private.send',['user'=>$user,'directions'=>$directions,'jobs'=>$jobs,'histories'=>$histories]);
    }
    public function receive()
    {
        $id=auth()->id();
        $info_id=auth()->user()->info_id;
        $mydr=json_decode(Info::find($info_id)->direction);
        $s="";
        foreach ($mydr as $val) {
            $s=$s."|| direction_id=".$val." ";
        }

        $data=DB::select("select * from histories where worker_id=0  && user_id<>$id && (false $s)");
        $moredata=DB::select("select * from histories where status=0 && POSITION('$id' IN workers)<>0 && user_id<>$id");
        $user=auth()->user();
        return view('Private.receive',['user'=>$user,'data'=>$data,'moredata'=>$moredata]);
    }

    /**
     * @return Application|Factory|View
     */
    public function messenger()
    {
        return response([
           "message"=>"Bu bo`limda texnik xizmat ko`rsatish ishlari olib borilmoqda!"
        ]);
        $user=auth()->user();
        return view('Private.messenger',['user'=>$user]);
    }

    public function profile()
    {
        $user=auth()->user();
        $info=Info::find($user->info_id);
        $dir=[];
        foreach (json_decode($info->direction) as $val)
        {
            $dirr=Direction::find($val);
            $dir[]=$dirr->name."(".Jobs::find($dirr->job_id)->name.")";
        }
        $info->direction=$dir;
        return view("Private.profile",['user'=>$user,'info'=>$info]);
    }

    public function orderinfos(Request $request)
    {
        $data=History::find($request->orderid);
        return response()->json([
            "data" => $data
        ]);
    }
    public function videofile(Request $request)
    {
        $request->validate([
            'video'=>'file'
        ]);
        $filename = "video".auth()->id()."." .$request->video->getClientOriginalExtension();
        request()->video->move(public_path("/Videos"), $filename);
        return redirect()->back();
    }
    public function referencefile(Request $request)
    {
        $request->validate([
            'reference'=>'file'
        ]);
        $filename = "reference".auth()->id()."." .$request->reference->getClientOriginalExtension();
        request()->reference->move(public_path("/References"), $filename);
        return redirect()->back();
    }
}

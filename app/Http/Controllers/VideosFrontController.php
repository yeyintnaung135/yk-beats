<?php

namespace App\Http\Controllers;

use App\Videos;
use Illuminate\Http\Request;

class VideosFrontController extends Controller
{
    //
    public function index()
    {
        $videos=Videos::OrderBy('uploaddatetime','desc')->get();
        return view('welcome',['videos'=>$videos]);
    }
    public function detail($id){
        $video=Videos::where('id',$id)->first();
        $similar=Videos::Where([['id','!=',$video->id],['type','=',$video->type]])->get();
        return view('videodetail',['video'=>$video,'sim_videos'=>$similar]);


    }
}

<?php

namespace App\Http\Controllers;

use App\Videos;
use Illuminate\Http\Request;

class VideosFrontController extends Controller
{
    //
    public function index()
    {
        $videos = Videos::OrderBy('uploaddatetime', 'desc')->paginate(12);
        $types = Videos::query()->select('type')->distinct()->get();
        return view('welcome', ['videos' => $videos, 'types' => $types]);
    }

    public function detail($id)
    {
        $video = Videos::where('id', $id)->first();
        if($video->sorforn != 'free'){
            $similar = Videos::Where([['id', '!=', $video->id], ['type', '=', $video->type]])->get();

        }else{
            $similar = Videos::Where([['id', '!=', $video->id], ['sorforn', '=', 'free']])->get();

        }

        $types = Videos::query()->select('type')->distinct()->get();

        return view('videodetail', ['video' => $video, 'sim_videos' => $similar,'types' => $types]);


    }

    public function bytype($type)
    {
        if($type != 'free'){
            $videos = Videos::Where('type',$type)->paginate(12);

        }else{
            $videos = Videos::Where('sorforn',$type)->paginate(12);

        }

        $types = Videos::query()->select('type')->distinct()->get();

        return view('videoslist', ['videos' => $videos,'types' => $types]);


    }
    public function freebeats()
    {
        $videos = Videos::Where('sorforn','free')->orderBy('id','desc')->paginate(12);
        $types = Videos::query()->select('type')->distinct()->get();


        return view('videoslist', ['videos' => $videos,'types' => $types]);


    }
    public function contact(){
        $types = Videos::query()->select('type')->distinct()->get();

        return view('contact',['types' => $types]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Videos;
use Illuminate\Http\Request;

class VideosFrontController extends Controller
{
    //
    public function index()
    {
        $videos = Videos::OrderBy('uploaddatetime', 'desc')->get();
        $types = Videos::query()->select('type')->distinct()->get();
        return view('welcome', ['videos' => $videos, 'types' => $types]);
    }

    public function detail($id)
    {
        $video = Videos::where('id', $id)->first();
        $similar = Videos::Where([['id', '!=', $video->id], ['type', '=', $video->type]])->get();
        $types = Videos::query()->select('type')->distinct()->get();

        return view('videodetail', ['video' => $video, 'sim_videos' => $similar,'types' => $types]);


    }

    public function bytype($type)
    {
        $videos = Videos::Where('type',$type)->get();
        $types = Videos::query()->select('type')->distinct()->get();

        return view('videoslist', ['videos' => $videos,'types' => $types]);


    }
    public function freebeats()
    {
        $videos = Videos::Where('sorforn','free')->get();
        $types = Videos::query()->select('type')->distinct()->get();

        return view('videoslist', ['videos' => $videos,'types' => $types]);


    }
}

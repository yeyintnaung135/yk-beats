<?php

namespace App\Http\Controllers;

use App\Videos;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class VideosController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function createform()
    {
        return view('admin.videos.create');
    }
    public function list()
    {
        $videos=Videos::Orderby('id','desc')->get();
        return view('admin.videos.list',['videos'=>$videos]);
    }
    public function delete(Request $request)
    {
        $videos=Videos::where('id',$request->id);
        if(File::exists(public_path($videos->first()->file_link))){
        }
        if(File::exists(public_path('thumbnail/'.$videos->first()->thumbnail))){
            File::delete(public_path('thumbnail/'.$videos->first()->thumbnail));
        }
       $videos->delete();
        return redirect('admin/video/list');
    }

    public function create(Request $request)
    {
        $input = $request->except('_token');
        $rules = [
            'title' => 'required|max:300', 'description' => 'required|max:5000', 'sorforn' => 'required|max:10', 'youtubelink' => 'max:1000', 'file_link' => 'mimes:mp4,mp3', 'thumbnail' => 'mimes:jpg,png'

        ];
        $messages = [

        ];
        $validator = Validator::make($input, $rules, $messages);
        if ($validator->fails()) {
            return dd($validator->errors());
        }
        if(!empty($request->file('file_link'))){
            $vpath = Storage::disk('public')->putFile('videos', $request->file('file_link'));

        }else{
            $vpath = '';

        }
        $thumbname = time().'.'.$request->file('thumbnail')->extension();
        $request->file('thumbnail')->move(public_path('thumbnail'),$thumbname);

        $tpath = $thumbname;

        $input['file_link'] = $vpath;
        $input['thumbnail'] = $tpath;
        $input['uploaddatetime']=Carbon::createFromFormat('m/d/Y H:i A',$request->uploaddatetime)->toDateTimeString();
        $vupload = Videos::create($input);
        if ($vupload) {
            return 'successfully upload';

        }else{
            return 'upload fail';
        }
    }
}

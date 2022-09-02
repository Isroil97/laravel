<?php

namespace App\Http\Controllers;

use App\Http\Requests\TolovRequest;
use App\Models\Photo;
use App\Models\tolov;
use App\Models\workers;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index ()
    {
        $photos = Photo::all();
        return view('front.index', compact('photos'));
    }
    public function about ()
    {
        $workers = workers::all();
        return view('front.abaut',compact('workers'));
    }
    public function blog ()
    {
        $photos = Photo::all();
        return view('front.blog', compact('photos'));
    }
    public function contact ()
    {
        return view('front.contact');
    }
    public function galereya ()
    {
        $photos = Photo::all();
        return view('front.galareya', compact('photos'));
    }
    public function service ()
    {
        return view('front.service');
    }
    public function showblog($id)
    {
        $photo = Photo::where('id',$id)->first();
        return view('front.showblog', compact('photo'));
    }

    public function payment(TolovRequest $request)
    {
        $params = $request->validated();
        tolov::create($params);
        return back(); 
    }
}

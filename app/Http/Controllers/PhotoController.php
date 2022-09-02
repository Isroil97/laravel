<?php

namespace App\Http\Controllers;

use App\Http\Requests\PhotosRequest;
use App\Models\Photo;
use App\Models\tolov;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photos = Photo::get();

        return view('admin.photos.index', compact('photos'));
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.photos.addphoto');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PhotosRequest $request)
    {
        $params = $request->validated();

        if($request->hasFile('images'))
        {
            $imageName = time().'.'.$request->images->extension();
            $request->images->storeAs('public/assets/images',$imageName);
            $params['images'] = $imageName;
        }
        
        Photo::create($params);
        return redirect()->route('show_photos'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $photo = Photo::where('id', $id)->first();
        return view('admin.photos.showphoto', compact('photo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $photo = Photo::where('id', $id)->first();
       return view('admin.photos.editphoto',compact('photo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $photo = Photo::where('id', $id)->first();
        $photo->update([
            'title' => $request->title,
            'info' => $request->info,
            'maps' => $request->maps,
        ]);
        return redirect()->route('show_photos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Photo  $photo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $photos = Photo::where('id', $id)->first();
        $photos->delete();
        return redirect()->route('dashboard');
    }
   
}

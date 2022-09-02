<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContaktRequest;
use App\Models\contakt;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(ContaktRequest $request)
    {
        $params = $request->validated();
        contakt::create($params);
        return redirect()->route('index'); 
    }

    public function index()
    {
        $contact = contakt::all();
        return view('admin.contact.index', compact('contact'));
        // return "Contact";
    }

    public function delete($id)
    {
        // $photos = Photo::where('id', $id)->first();
        $contact = contakt::where('id', $id)->first();
        $contact->delete();
        return back();
    }
}

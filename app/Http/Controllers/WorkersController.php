<?php

namespace App\Http\Controllers;

use App\Http\Requests\WorkersRequest;
use App\Http\Requests\workRequest;
use App\Models\workers;
use Illuminate\Http\Request;

class WorkersController extends Controller
{
    public function index()
    {
        $workers = workers::all();
        return view('admin.workers.index', compact('workers'));
    }

    public function create()
    {

        return view('admin.workers.add_workers');
    }

    public function store(WorkersRequest $request)
    {
        $params = $request->validated();

        if ($request->hasFile('images')) {
            $imageName = time() . '.' . $request->images->extension();
            $request->images->storeAs('public/assets/user_img', $imageName);
            $params['images'] = $imageName;
        }

        workers::create($params);
        return redirect()->route('workers');
    }

    public function exit($id)
    {
        $workers = workers::where('id', $id)->first();
        return view('admin.workers.update_workers', compact('workers'));
    }

    public function update(workRequest $request, $id)
    {
        $params = $request->validated();

        if ($request->hasFile('images')) {
            $imageName = time() . '.' . $request->images->extension();
            $request->images->storeAs('public/assets/user_img', $imageName);
            $params['images'] = $imageName;
        }

        $workers = workers::where('id', $id)->first();
        $workers->update($params);
        return redirect()->route('workers');
    }

    public function delete($id)
    {
        $workers = workers::where('id', $id)->first();
        $workers->delete();
        return redirect()->route('workers');
    }
}

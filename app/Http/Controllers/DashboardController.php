<?php

namespace App\Http\Controllers;

use App\Models\contakt;
use App\Models\Photo;
use App\Models\tolov;
use App\Models\workers;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $workers = workers::paginate(10);
        $photos = Photo::paginate(10);
        $payment = tolov::paginate(10);
        $contacts = contakt::paginate(10);
        return view('admin.index', compact('photos', 'payment', 'contacts','workers'));
    }

    public function payment()
    {
        $payment = tolov::all();
        return view('admin.index', compact('payment'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\tolov;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function index()
    {
        $photos = Photo::paginate(10);
        $payments = tolov::paginate(10);
        return view('admin.payment.index', compact('payments'));
    }

    public function delete($id)
    {
        $payment = tolov::where('id', $id)->first();
        $payment->delete();
        return back();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function casesPayment()
    {
        return view('payment');
    }

    public function invocie()
    {
        return view('invoice');
    }

    public function invoicePrint()
    {
        return view('invoicePrint');
    }
 
}

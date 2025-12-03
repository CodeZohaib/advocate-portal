<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function activeClient()
    {
        return view('activeClient');
    }

    public function inactiveClient()
    {
        return view('inactiveClient');
    }
}
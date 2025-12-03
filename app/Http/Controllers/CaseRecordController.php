<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaseRecordController extends Controller
{
    public function activeCases()
    {
        return view('activeCases');
    }

    public function closeCases()
    {
        return view('closeCases');
    }
}

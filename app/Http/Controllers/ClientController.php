<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClientController extends Controller
{

    public function showProfileImage($img)
    {
        $path = storage_path('app/private/profiles/' . $img);

        if (!file_exists($path)) {
            abort(404);
        }

        return response()->file($path);
    }


    public function activeClient()
    {
        return view('activeClient');
    }

    public function inactiveClient()
    {
        return view('inactiveClient');
    }
}
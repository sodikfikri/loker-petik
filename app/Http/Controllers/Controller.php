<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    public function mitra(Request $request) {
        session_start();
        return view('mitra-ikal', [
            'token' => $_SESSION["token"]
        ]);
    }

    public function register(Request $request) {
        return view('register');
    }
}

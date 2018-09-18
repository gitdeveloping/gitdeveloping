<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Challenge;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('app.home');
    }

    public function challenge(Challenge $challenge, Request $request) {
        $challenge->load('createdBy');
        return view('app.challenge-detail')->with(['challenge' => $challenge]);
    }
}

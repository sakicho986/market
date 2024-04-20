<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class FleaMarketController extends Controller
{
    public function index()
    {
        return view('index');
    }

        public function mypage()
    {
        return view('mypage');
    }
}
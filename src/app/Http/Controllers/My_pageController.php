<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class My_pageController extends Controller
{
    public function mypage()
    {
        $id = Auth::id();
        $user = DB::table('users')->find($id);
        return view('my_page', ['my_user' => $user]);
    }

}

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

        public function item()
    {
        return view('item');
    }
        public function profile()
    {
        return view('profile');
    }
        public function sell()
    {
        return view('sell');
    }

    public function update(profile $request)
    {
        $user = $request->only(['address', 'name', 'post', 'building', 'pic' ]);
        Todo::find($request->id)->update($user);
        return redirect('/mypage');
    }
}
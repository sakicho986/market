<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function mypage()
    {
        return view('mypage');
    }
    public function profile()
    {
        return view('profile');
    }
    public function edit(Request $request)
    {
        $author = Author::find($request->id);
        return view('profile', ['form' => $author]);
    }
    public function update(Request $request)
    {
        $form = $request->all();
        unset($form['_token']);
        Author::find($request->id)->update($form);
        return redirect('/mypage');
    }
}

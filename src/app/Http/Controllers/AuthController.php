<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;


class AuthController extends Controller
{
    ##会員登録ページ表示
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    ##会員登録処理
    public function register(RegisterRequest $request)
    {
        $form = $request->all();
        User::create($form);
        return redirect('/mypage');
    }
}

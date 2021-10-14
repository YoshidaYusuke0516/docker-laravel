<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// model宣言
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //ログイン状態確認
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
         // Model宣言
    $user = new User;
    // db情報取得
    $value = $user->get();
    //dump($value);
    return view('index', compact('value'));
    }
}

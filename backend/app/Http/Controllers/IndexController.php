<?php

namespace App\Http\Controllers;
// 元々入っていたリクエスト
//use Illuminate\Http\Request;

// データ取得（Request）を使用できるように宣言
use Request;

// Hash化を使用できるように宣言
use Illuminate\Support\Facades\Hash;

// model宣言
use App\Models\User;

class IndexController extends Controller
{
  // Listページ表示
  public function index()
  {
    // Model宣言
    $user = new User;
    // db情報取得
    $value = $user->get();
    //dump($value);
    return view('index', compact('value'));
  }

  // 詳細ページ表示  
  public function detail($id)
  {
    $user = new User;
    // Listページから取得したidを元にDB情報取得
    $value = $user->find($id);
    return view('detail', compact('value'));
  }
  
  // 投稿ページ表示
  public function getAdd()
  {
    return view('add');
  }

  // 投稿データDB格納
  public function getPost()
  {
    // Model宣言
    $user = new User;
    // 入力データ取得
    $data = Request::all();
    // DBデータセット
    $user->fill($data)->save();
    // db情報取得
    $value = $user->get();
    // 更新されたデータ表示
    return view('index', compact('value'));
  }
}

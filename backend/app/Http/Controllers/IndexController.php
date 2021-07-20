<?php

namespace App\Http\Controllers;
// 元々入っていたリクエスト
use Illuminate\Http\Request;

// データ取得（Request）を使用できるように宣言（不要？）
//use Request;

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
  public function detail(Request $request)
  {
    $user = new User;
    // requestデータからID抜き出し
    $id = $request->id;
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
  public function getPost(Request $request)
  {
    // Model宣言
    $user = new User;

    //リクエストデータ内のパスワードをハッシュ化して上書き
    $request->merge(['password' => Hash::make($request->password)]);

    var_dump($request->password);

    // リクエストデータをINSERT
    $user->fill($request->all())->save();

    // db情報取得
    $value = $user->get();
    return view('index', compact('value'));
  }

  // 編集ページ表示
  public function getEdit(Request $request)
  {
    $user = new User;
    // requestデータからID抜き出し
    $id = $request->id;
    // Listページから取得したidを元にDB情報取得
    $value = $user->find($id);
    return view('edit', compact('value'));
  }

  // データ編集
  public function postEdit(Request $request)
    {
      $user = new User;
      // requestデータから各必要データ抜き出し
      //$id = $request->id;
      //$name = $request->name;
      //$email = $request->email;

      //元となるSQL文取得（必要？ないとエラー）
      //$value = $user->find($id);

      //sql文の各項目にrequestから抜き出したデータをセット
      //$value->name = $name;
      //$value->email = $email;

      //アップデート
      //$value->update();

      // アップデート内容を1行にまとめたもの
      $value = $user->where('id',$request->id)->update(['name' => $request->name , 'email' => $request->email]);
      
      // TOP表示データ取得
      $value = $user->get();

      return view('index', compact('value'));
    }
}

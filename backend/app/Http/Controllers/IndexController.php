<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// model宣言
use App\Models\User;

class IndexController extends Controller
{
    public function index()
  {
    $user = new User;
    $value = $user->get();
    //dump($value);
    $arr = ['Snome1', 'Snome2', 'Snome3'];
    return view('index', compact('value', 'arr'));
  }

  public function detail($id)
    {
      $user = new User;
      $value = $user->find($id);
      return view('detail', compact('value'));
    }
}

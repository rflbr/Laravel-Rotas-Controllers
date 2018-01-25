<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExemploController extends Controller
{
  function pagInicial{
  return view('welcome');
  }
  public function receberParametro($nomeDoParametro){
    dd($nomeDoParametro);
    return view('welcome');
  }
}

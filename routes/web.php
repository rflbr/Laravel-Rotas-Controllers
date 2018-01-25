<?php

Route::get('/', function () {
    return 'welcome';
});

Route::get('/','ExemploController@paginicial');

Route::get('/{nomeDoParametro}', 'ExemploController@receberParametro');

class ExemploController extends Controller
{public function pagInicial(){
return view('welcome');
}
public function receberParametro($nomeDoParametro){
dd($nomeDoParametro);
}
}

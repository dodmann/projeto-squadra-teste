<?php

/*
    Rotas da aplicação
*/
Route::resource('/', 'SistemaController');

Route::post('/','SistemaController@Search');
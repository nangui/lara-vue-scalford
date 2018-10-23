<?php

// Route::get('/{any}', function () {
//     return view('welcome');
// });

Route::get('/{any}', 'SpaController@index')->where('any', '.*');
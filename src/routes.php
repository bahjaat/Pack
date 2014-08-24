<?php

// Route::get('pack', 'Bahjaat\Pack\PackController@index');

Route::get('pack', array(
    'as' => 'pack',
    // 'uses' => 'GrahamCampbell\Credentials\Controllers\AccountController@getHistory'
    'uses' => 'Bahjaat\Pack\Controllers\PackController@index'
));


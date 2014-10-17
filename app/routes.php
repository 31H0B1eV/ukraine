<?php
Blade::setContentTags('<%', '%>'); 		// for variables and all things Blade
Blade::setEscapedContentTags('<%%', '%%>'); 	// for escaped data

Route::get('/', [
    'as' => 'home',
    'uses' => 'HomeController@index'
]);

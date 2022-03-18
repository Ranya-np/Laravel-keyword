<?php

Route::get('keywords', function(){
	echo 'Hello from the keywords package!';
});


Route::get('keyword', 'lilac\keywords\KeywordsController@GetKeyword');
//Route::get('subtract/{a}/{b}', 'lilac\keywords\KeywordsController@subtract');



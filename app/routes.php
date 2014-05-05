<?php

Route::group(['prefix'=>'api/v1', 'before' => 'auth.basic'], function(){
	Route::resource('post', 'PostsController');
	Route::resource('author', 'AuthorsController');
	Route::resource('comment', 'CommentsController');
});


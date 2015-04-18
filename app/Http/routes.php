<?php

Route::get('/pages', 'PagesController@index');
Route::get('/pages/{page}', 'PagesController@show');

Route::get('/posts/{page}', 'PostsController@index');
Route::get('/posts/{page}/{post}', 'PostsController@show');

Route::get('/comments/{post}', 'CommentsController@index');
Route::get('/comments/{post}/{comment}', 'CommentsController@show');

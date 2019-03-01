<?php

Route::apiResource('question', 'QuestionController');
Route::apiResource('category', 'CategoryController');
Route::apiResource('question/{question}/reply', 'ReplyController');
Route::post('like/reply/{reply}', 'LikeController@likeIt');
Route::delete('dislike/reply/{reply}', 'likeController@unlikeIt');

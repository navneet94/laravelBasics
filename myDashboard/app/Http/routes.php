<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
| Passing parameters to route
*/
Route::get('user/{id}',function($id){
    echo "user id is".$id;
});

/*
| Passing multiple parameters to route
*/
Route::get('data/{postId}/comment/{postComment}',function($postId,$postComment){
    echo "post id is :".$postId." post comment is :".$postComment;
});

/*
| Adding constrain to routes
*/
Route::get('constrain/{constrain}',function($constraion){
    echo "id".$constraion;
})
->where('id','[0-2]+');

/*
| Passing parameter from route to controller
*/
Route::get('userData/{id}','sample@showProfile');
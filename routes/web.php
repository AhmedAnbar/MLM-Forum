<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/discuss', function () {
    return view('discuss');
});



Route::get('discussions', ['uses' => 'DiscussionsController@index', 'as' => 'discussion.index']);
Route::get('discussion/{slug}', ['uses' => 'DiscussionsController@show', 'as' => 'discussion']);
Route::post('discussion/reply/{id}', ['uses' => 'RepliesController@reply', 'as' => 'discussion.reply']);
Route::get('reply/like/{id}', ['uses' => 'RepliesController@like', 'as' => 'reply.like']);
Route::get('reply/unlike/{id}', ['uses' => 'RepliesController@unlike', 'as' => 'reply.unlike']);
Route::get('channel/{slug}', ['uses' => 'ForumsController@channel', 'as' => 'channel']);


Auth::routes();

Route::get('/forum', ['uses' => 'ForumsController@index', 'as' => 'forum']);

Route::get('{provider}/auth', ['uses' => 'SocialsController@auth', 'as' => 'social.auth']);
Route::get('{provider}/redirect', ['uses' => 'SocialsController@auth_callback', 'as' => 'social.callback']);


Route::group(['middleware' => 'auth'], function(){
	Route::resource('channels', 'ChannelsController');
	Route::get('discussion/create/new', ['uses' => 'DiscussionsController@create', 'as' => 'discussion.create']);
	Route::post('discussion/store', ['uses' => 'DiscussionsController@store', 'as' => 'discussion.store']);
	Route::post('discussion/reply/{id}', ['uses' => 'RepliesController@reply', 'as' => 'discussion.reply']);
	Route::get('reply/like/{id}', ['uses' => 'RepliesController@like', 'as' => 'reply.like']);
	Route::get('reply/unlike/{id}', ['uses' => 'RepliesController@unlike', 'as' => 'reply.unlike']);
	Route::get('discussion/watch/{id}', ['uses' => 'WatchersConrtoller@watch', 'as' => 'discussion.watch']);
	Route::get('discussion/unwatch/{id}', ['uses' => 'WatchersConrtoller@unwatch', 'as' => 'discussion.unwatch']);
	Route::get('reply/best/{id}', ['uses' => 'RepliesController@best_answer', 'as' => 'reply.best.answer']);
	Route::get('discussion.edit/{slug}', ['uses' => 'DiscussionsController@edit', 'as' => 'discussion.edit']);
	Route::post('discussion.update/{id}', ['uses' => 'DiscussionsController@update', 'as' => 'discussion.update']);
	Route::get('reply/edit/{id}', ['uses' => 'RepliesController@edit', 'as' => 'reply.edit']);
	Route::post('reply/update/{id}', ['uses' => 'RepliesController@update', 'as' => 'reply.update']);
});
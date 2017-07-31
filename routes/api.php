<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/search', [
    'as' => 'api.search',
    'uses' => 'ApiSearchController@search'
]);
Route::get('/person/{id}', function($id) {
    return App\Person::findOrFail($id);
});
Route::patch('/person/{id}', function(Request $request, $id) {
    App\Person::findOrFail($id)->update([
        'first_name' => $request->input(['first_name']),
        'last_name' => $request->input(['last_name']),
    ]);
});

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
//確認用 /api/machine でアクセスできる
Route::resource('machine',  'MachineController');
Route::resource('machineName',  'MachineNameController');
Route::resource('machineComment',  'MachineCommentController');
Route::resource('shop',  'ShopController');
Route::resource('shopComment',  'ShopCommentController');

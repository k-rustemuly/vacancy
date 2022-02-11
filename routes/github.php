<?php

use Illuminate\Support\Facades\Route;

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

Route::post('/pull', function (Request $request) {
    $payload = json_decode($request->getContent(), true);
    $key = $payload['secret']?:"default";
    $originalKey = env('GITHUB_PULL_SECRET', 'default');
    if($key == $originalKey) shell_exec('git pull origin master');
    return "set";
});

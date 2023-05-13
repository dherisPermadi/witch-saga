<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/quests/{chapter}', [
    'as'=> 'quests',
    'uses'=>'App\Http\Controllers\QuestController@index'
]);

Route::post('quest', [QuestController::class, 'solve']);
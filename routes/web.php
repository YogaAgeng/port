<?php

use App\Http\Controllers\Api\V1\CustomerController;
use App\Http\Controllers\Api\V1\SkillsController;
use App\Models\Skills;
use Illuminate\Support\Facades\Route;

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
    $skills = Skills::all();
    $skillsC = Skills::where('type', 'C')->get();
    $skillsD = Skills::where('type', 'D')->get();
    return view('welcome',  compact('skillsC', 'skillsD', 'skills'));
});

Route::get('/skills', 'App\Http\Controllers\SkillsController@index');

Route::get('/form', function () {
    return view('form');
});

Route::post('/submit-form', [CustomerController::class, 'store']);
Route::post('/add-skill', [SkillsController::class, 'store']);
Route::delete('/skills-delete/{id}', [SkillsController::class, 'destroy']);
Route::get('/skills-edit', [SkillsController::class, 'edit']);
Route::put('/skills-update/{id}', [SkillsController::class, 'update']);


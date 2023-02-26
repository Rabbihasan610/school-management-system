<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Teacher\LoginController;
use App\Http\Controllers\Api\Student\StudentLoginController;
use App\Http\Controllers\Api\Student\StudentProfileController;
use App\Http\Controllers\Api\Teacher\TeacherProfileController;

use App\Http\Controllers\Api\SearchController;

use App\Http\Controllers\Api\AttandenceController;
use App\Http\Controllers\Api\ExamController;
use App\Http\Controllers\Api\ResultController;


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

Route::post('teacher/login', [LoginController::class, "login"]);
Route::post('student/login', [StudentLoginController::class, "login"]);

Route::group(["middleware" => ["auth:teacherApi"]], function(){
    Route::prefix('teacher')->group(function(){
        Route::get('profile', [TeacherProfileController::class, 'profile']);
        Route::post('logout', [TeacherProfileController::class, 'logout']);


        Route::post('profile/edit', [TeacherProfileController::class, 'edit']);
        Route::post('profile/edit/image', [TeacherProfileController::class, 'edit_image']);

        Route::get('search/session/class/section',[SearchController::class,'session_class_section']);


        Route::get('session',[AttandenceController::class,'session']);
        Route::get('class',[AttandenceController::class,'class']);
        Route::get('section/{class} ',[AttandenceController::class,'section']);
        Route::get('students/{session}/{class}/{section}',[AttandenceController::class,'students']);

        Route::get('attendance/{session}/{class}/{section}/{date}',[AttandenceController::class,'attendance']);


        Route::get('exam',[ExamController::class,'list']);

        Route::get('subject',[ResultController::class,'subject']);
        Route::get('result',[ResultController::class,'result']);




    });
});

Route::group(["middleware" => ["auth:studentApi"]], function(){
    Route::prefix('student')->group(function(){
        Route::get('profile', [StudentProfileController::class, 'profile']);
        Route::post('logout', [StudentProfileController::class, 'logout']);







    });
});



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

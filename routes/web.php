<?php

use App\Http\Controllers\BladeTemplatingController;
use App\Http\Controllers\ImageInterventionController;
use App\Http\Controllers\JsonController;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\PaginateController;
use Illuminate\Support\Facades\Route;

Route::get('/', [JsonController::class, 'index']);
Route::post('/json-insert', [JsonController::class, 'store'])->name('json.post.insert');
Route::get('/json-view', [JsonController::class, 'view']);


// Redirect route
Route::get("catch-rediect-route", function (){
    return "I am from redirect route";
});

Route::redirect('/redirect', 'catch-rediect-route');

// Loop
Route::get("template", [BladeTemplatingController::class, 'index']);

// image Intervention
Route::get('/image', [ImageInterventionController::class, 'image_blade_view']);
Route::post('/image/post', [ImageInterventionController::class, 'image_blade_post'])->name('intervention.store');
Route::get('/image/delete', [ImageInterventionController::class, 'image_delete'])->name('intervention.delete');


// Blade Template
Route::get('template', function (){
    $students = ['hanzal', 'rabbi', 'anamol', 'meer bhaia'];

    return view('blade-template', ['students' => $students]);
});


route::get('ajax', [AjaxController::class, 'index'])->name('ajax');

route::post('/ajax_add', [AjaxController::class, 'create']);


route::get('paginate', [PaginateController::class, 'index'])->name('paginate');
Route::get('/pagination/fetch_data', [PaginateController::class, 'fetch_data']);


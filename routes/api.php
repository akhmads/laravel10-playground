<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/state', function (Request $request) {

    $user = \App\Models\User::orderBy('name','asc');
    if ($request->q){
        $user->where(DB::raw('LOWER(name)'),'like','%'.strtolower($request->q).'%');
    }
    $users = $user->get();

    $res = [];
    foreach( $users as $key => $user ){
        $res[$key]['id'] = $user->id;
        $res[$key]['text'] = $user->name;
    }

    $results = [];
    $results['results'] = $res;
    $results['term'] = $request->q;

    return $results;
});

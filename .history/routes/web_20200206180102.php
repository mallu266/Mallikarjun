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
    $var = range(1, 100); 
 foreach ($var as &$number) {
    if($number % 15 == 0)  {
        echo "<br>BY3 AND 5";
    } elseif ($number % 5 == 0) {
        echo "<br>BY5";
    } elseif ($number % 3 == 0) {
        echo "<br>BY3";
    }
}
    
});

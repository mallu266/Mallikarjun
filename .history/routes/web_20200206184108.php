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

    
    // Number From 1 to 100.
    $var = range(1, 100); 
 foreach ($var as &$number) {
    //  If count 1
    if($number % 15 == 0)  {
        echo "<br>Linianos";
    } elseif ($number % 5 == 0) {
        echo "<br>IT";
    }else{
        echo ($number % 3 == 0)?"<br>Linio":$number;
    }
}
    
});

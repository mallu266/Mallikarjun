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
    echo "<table>";
 foreach ($var as &$number) {
 echo " <tr>
    <td>$number</td>
    <td>";

    if($number % 3 == 0)  {
    echo "BY3";
} elseif ($number % 5 == 0) {
    echo "BY5";
} elseif ($number % 3 and 5 == 0) {
        echo "BY3 AND 5";
}
 echo "</td></tr>";
}
echo "</table>";
});

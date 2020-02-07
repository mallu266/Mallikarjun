<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        $var = range(1, 100);
        foreach ($var as &$number) {
            echo "<br>" . $this->getmultiplicationnumbers($number);
        }
        exit;
        return view('home');
    }

    public function getmultiplicationnumbers($number) {
        $numbers[0] = [15, 'Linianos']; //If the number multiples 3 or 5. 
        $numbers[1] = [3, 'Linio']; //If the number multiples 3.
        $numbers[2] = [5, 'IT']; //If the number multiples 5.
        $numbers[3] = [1, $number]; //Default Number.
        for ($i = 0; $i < count($numbers); $i++) {
//            Only 1 If contition, with No else, elseif, ternary operators
            if ($number % $numbers[$i][0] == 0) {
                return $numbers[$i][1];
            }
        }
    }

}

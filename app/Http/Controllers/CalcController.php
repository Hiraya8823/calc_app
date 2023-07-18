<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalcController extends Controller
{
    public function result($num1, $ope, $num2)
    {
    switch ($ope) {
        case 'addition':
            $result = $num1 + $num2;
            break;

        case 'subtraction':
            $result = $num1 - $num2;
            break;
        
        case 'multiplication':
            $result = $num1 * $num2;
            break;

        case 'division':
            $result = $num2 / $num2;
            break;
    }

    return view('calcs', [
    'result' => $result]);
    }
}

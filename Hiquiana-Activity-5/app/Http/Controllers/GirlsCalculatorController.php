<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GirlsCalculatorController extends Controller
{
    public function compute($operation, $value1, $value2)
    {
        // I-initialize ang error message bilang null
        $errorMessage = null;
        $result = null;
        
        // I-check kung ano ang operation at i-compute ang result
        switch ($operation) {
            case 'multiply':
                $result = $value1 * $value2;
                break;
            case 'add':
                $result = $value1 + $value2;
                break;
            case 'subtract':
                $result = $value1 - $value2;
                break;
            case 'divide':
                // I-check kung ang divisor ay zero
                if ($value2 == 0) {
                    $errorMessage = "Hindi pwedeng hatiin sa zero!";
                } else {
                    $result = $value1 / $value2;
                }
                break;
            default:
                $errorMessage = "Hindi valid ang operation!";
        }
        
        // I-check kung even o odd ang result para sa background color
        $isEven = ($result !== null) && ($result % 2 == 0);
        
        // I-check kung odd o even ang input value para sa text color
        $isOddValue1 = ($value1 % 2 != 0);
        $isOddValue2 = ($value2 % 2 != 0);
        
        // I-return ang view kasama ang lahat ng data
        return view('girls-calculator', [
            'value1' => $value1,
            'value2' => $value2,
            'operation' => $operation,
            'result' => $result,
            'errorMessage' => $errorMessage,
            'isEven' => $isEven,
            'isOddValue1' => $isOddValue1,
            'isOddValue2' => $isOddValue2
        ]);
    }
}
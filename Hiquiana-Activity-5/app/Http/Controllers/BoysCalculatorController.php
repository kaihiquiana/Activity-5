<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BoysCalculatorController extends Controller
{
    public function compute($operation1, $value1, $value2, $operation2, $value3, $value4)
    {
        // I-initialize ang error messages bilang null
        $errorMessage1 = null;
        $errorMessage2 = null;
        $result1 = null;
        $result2 = null;
        
        // First operation calculation
        switch ($operation1) {
            case 'multiply':
                $result1 = $value1 * $value2;
                break;
            case 'add':
                $result1 = $value1 + $value2;
                break;
            case 'subtract':
                $result1 = $value1 - $value2;
                break;
            case 'divide':
                // I-check kung ang divisor ay zero
                if ($value2 == 0) {
                    $errorMessage1 = "Cannot be divided by zero!";
                } else {
                    $result1 = $value1 / $value2;
                }
                break;
            default:
                $errorMessage1 = "Invalid Operation!";
        }
        
        // Second operation calculation
        switch ($operation2) {
            case 'multiply':
                $result2 = $value3 * $value4;
                break;
            case 'add':
                $result2 = $value3 + $value4;
                break;
            case 'subtract':
                $result2 = $value3 - $value4;
                break;
            case 'divide':
                // I-check kung ang divisor ay zero
                if ($value4 == 0) {
                    $errorMessage2 = "Cannot be divided by zero!";
                } else {
                    $result2 = $value3 / $value4;
                }
                break;
            default:
                $errorMessage2 = "Onvalid Operation!";
        }
        
        // I-check kung even o odd ang mga results para sa background color
        $isEven1 = ($result1 !== null) && ($result1 % 2 == 0);
        $isEven2 = ($result2 !== null) && ($result2 % 2 == 0);
        
        // I-check kung odd o even ang input values para sa text color
        $isOddValue1 = ($value1 % 2 != 0);
        $isOddValue2 = ($value2 % 2 != 0);
        $isOddValue3 = ($value3 % 2 != 0);
        $isOddValue4 = ($value4 % 2 != 0);
        
        // I-return ang view kasama ang lahat ng data
        return view('boys-calculator', [
            'value1' => $value1,
            'value2' => $value2,
            'operation1' => $operation1,
            'result1' => $result1,
            'errorMessage1' => $errorMessage1,
            'isEven1' => $isEven1,
            'isOddValue1' => $isOddValue1,
            'isOddValue2' => $isOddValue2,
            
            'value3' => $value3,
            'value4' => $value4,
            'operation2' => $operation2,
            'result2' => $result2,
            'errorMessage2' => $errorMessage2,
            'isEven2' => $isEven2,
            'isOddValue3' => $isOddValue3,
            'isOddValue4' => $isOddValue4
        ]);
    }
}
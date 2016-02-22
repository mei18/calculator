<?php

class calculatorService {

    public function operations($num1, $num2, $operation) {
        if (isset($num1, $num2)) {
            switch($operation) {
                case 'sum': 
                    return $num1 + $num2;
                break;
                case 'sub': 
                    return $num1 - $num2;
                break;
                case 'mult': 
                    return $num1 * $num2;
                break;
                case 'divi': if($num2==0) {
                            $num2="Division por cero";
                        } else {
                            return $num2=$num1/$num2;
                        }
                break;
            }
        }
        
    }
  return null;
}

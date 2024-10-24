<?php
     function calc(){
        $input1 = $_POST['input1'];
        $input2 = $_POST['input2'];
            switch($_POST['dropdown']){
                case "Addition":
                    $add = $input1 + $input2;
                    return $add;
                    break;

                case "Subtraction":
                    $sub = $input1 - $input2;
                    return $sub;
                    break;
                    
                case "Multiply":
                    $mul = $input1 * $input2;
                    return $mul;
                    break;

                case "Divide":
                    $div = $input1 / $input2;
                    return $div;
                    break;
            }
     }

     echo round(calc())


?>


    
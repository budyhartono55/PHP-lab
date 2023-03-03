<?php 

 function FizzBuzz($total)
{
    for ($i=1; $i <= $total ; $i++) { 
    
        if ($i % 3 == 0 && $i % 5 == 0) {
             echo "FizzBuzz" . "\n";
        }elseif ($i % 3 == 0) {
            echo "Fizz" . "\n";
        }elseif ($i % 5 == 0) {
              echo "Buzz" . "\n";
        }else {
            echo $i. "\n";
        }
    }
}

FizzBuzz(50)

?>
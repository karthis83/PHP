<?php
/***************************************************************
** Prime Number or Not                                        **
** Prime numbers are divisible only by the number 1 or itself **
****************************************************************/
function primeCheck($num){ 
    if ($num == 1) 
    return 0; 
      
    for ($i = 2; $i <= sqrt($num); $i++){ 
        if ($num % $i == 0) 
            return 0; 
    } 
    return 1; 
} 
  
// Is Prime or Not 
$num = 83; 
$isPrime = primeCheck($num); 
if ($isPrime == 1) 
    echo $num." is a Prime Number."; 
else
    echo $num." is Not a Prime Number.";

?> 
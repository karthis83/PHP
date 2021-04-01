<?php

/*
Combine two arrays and return a new array without duplicate values.
*/

$array1 = ['user_1', 'user_2', 'user_3'];
$array2 = ['user_3', 'user_4', 'user_2'];

function unique_names(array $array1, array $array2) : array
{
    return [];
}

$names = array_unique(array_merge($array1,$array2), SORT_REGULAR); // Returns new array without any dupllication value.
//print_r($names);
echo implode(', ', $names); // Prints the value as requested format.


?>
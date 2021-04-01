<?php
/* 
Phone Number Validation
Allow 10 digits OR 000-000-0000 format phone numbers only.
*/

function isValidPhoneNumber($phone) {
    if((preg_match('/^[0-9]{10}+$/', $phone)) || (preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $phone))) {
        echo "Valid Phone Number";
    } else {
        echo "Invalid Phone Number. Please enter valid phone number";
    }
}

isValidPhoneNumber("5519989770"); // Valid Phone Number
isValidPhoneNumber("551-998-9770"); // Valid Phone Number
isValidPhoneNumber("551-9980-977"); // Invalid Phone Number. Please enter valid phone number

/* 
 Returns duplicate values from a multidimensional array
*/

$arrays = array(
array(
'name'=>'hello',
),
array(
'name'=>'world',
),
array(
'name'=>'hello',
),
array(
'name'=>'hello',
'type'=>'baz',
),
array(
'name'=>'hell',
'type'=>'worl',
),
array(
'name'=> 'world',
)
);

function duplicateVals($arrays) {
    $name_arr = $res_arr = array();
    foreach ($arrays as $e) {
        $name_val = $e['name'];
        if (isset($name_arr[$name_val])) { 
            array_push($res_arr, $e['name']);
        } else {
            $name_arr[$name_val] = true; 
        }
    }
    $res = implode(',', array_unique($res_arr));
    echo $res;
}

duplicateVals($arrays); // Returns only the duplicate values.

?>
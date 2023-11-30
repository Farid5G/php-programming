<?php
// In php array can be defined as
$a = array(3,5,"farid");//It can hold multiple datatype 
$b = [4,5,"Raj"];//this is the more modern method 
//if you want to print array in again there are two methods
print_r($a);
var_dump($b);
// types of array 

$assoc_array = [
    'name' => 'farid',
    'address' => 'Mumbra'];
    print_r($assoc_array['address']);
    //Add new value in the array
    //there are two methods to do this 
    $assoc_array['department'] = 'computer';
    $assoc_array['language'] = 'php'.' '.'python';
    // print_r($assoc_array);
    // update the value in the array
    $assoc_array['name'] = 'farid khan';
    print_r($assoc_array);
// output of var_dump :-more in detail (refer to array.txt)
// array(4) {
//     ["name"]=>
//     string(10) "farid khan"
//     ["address"]=>
//     string(6) "Mumbra"
//     ["department"]=>
//     string(8) "computer"
//     ["language"]=>
//     string(10) "php python"
//   }

// output of the print_r :-more in human-redable format (refer to array.txt)
// Array
// (
//     [name] => farid khan
//     [address] => Mumbra
//     [department] => computer
//     [language] => php python
// )
  
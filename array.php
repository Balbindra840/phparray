<?php
// Array = Array are the special variable which can hold more than one value at a time.
// Array can be used to store linear data of similar type.

// array() function is used to create an array.

// syntax

// array();

/*there are 3 types of array in php.
1. indexed arrays :- An array with numeric index.
2. Associative arrays :- arrays with the name keys .
3. Mutidimensional arrays :- array containing one or more than one arrays. */

    echo " <h1>Indexed array.</h1><br>";

    $name = array("Ram","Hari","Shyam","Gopal");
    print_r($name);
    $name[4]= "Golu Molu"; //  to add element in array.
    echo "<br>".$name[2]; // to fine single data in array with index.
    $arrlen = count($name); // to count element in array.
    // count is always start from 1.
    echo "<br>The length of array is ".$arrlen;

    for($i=0;$i<$arrlen;$i++){
        echo  "<br>".$name[$i];
    }

echo "<h1> for each loop</h1>";
echo "The foreach loop works only on arrays, and is used to loop through each key/value pair in an array.";

/*
foreach ($array as $value) {
    //code to be executed;
  }
*/
foreach($name as $value){
    echo "<br>".$value;
}

echo "<h1> while loop </h1>";
echo "The while loop - Loops through a block of code as long as the specified condition is true.";
/*
while (condition is true) {
  code to be executed;
}
*/
$a=1;
while ($a<=5){
    echo "<br>Welcome to this";
    $a++;

}

echo "<h1>do... while loop </h1>";
echo "The do...while loop - Loops through a block of code once, and then repeats the loop as long as the specified condition is true.";

/*
do {
  code to be executed;
} while (condition is true);
*/
$x = 1;

do {
  echo "<br>The number is: $x <br>";
  $x++;
} while ($x <= 5);


?>


<h1>break and continue </h1>


<?php


?>
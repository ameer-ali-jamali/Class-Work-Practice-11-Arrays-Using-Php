<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <?php

  // Arrays
  // An array is a collection of data items of the same data type. And it is also known as a subscript variable.

  //  Example:

  $age = array("Virat" => "35", "Arshdeep" => "37", "Rohit" => "43");
  echo "Virat is " . $age['Virat'] . " years old.";


  //    There are three different kinds of arrays. 

  //  1. Numeric Array
  // These are arrays with a numeric index where values are stored and accessed in a linear fashion. 

  //  Example:

  $bike = array("TVS", "YAMAHA", "RAJDOOT");
  echo "I like " . $bike[0] . ", " . $bike[1] . " and " . $bike[2] . ".";


  //    2. Associative Array
  //  These are arrays with string as an index where it stores element values associated with key values.

  // Example:

  $age = array("Ben" => "35", "Stokes" => "37", "Jimi" => "43");
  echo "Ben is " . $age['Ben'] . " years old.";


  //    3. Multidimensional Arrays
  //    A multidimensional Array is an array containing one or more arrays where values are accessed using multiple indices.

  // Example:

  $cars = array(
    array("Volvo", 22, 18),
    array("BMW", 15, 13),
    array("Saab", 5, 2),
    array("Land Rover", 17, 15)
  );
  echo $cars[0][0] . ": In stock: " . $cars[0][1] . ", sold: " . $cars[0][2] . ".<br>";

  ?>
</body>

</html>
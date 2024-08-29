<!-- array  -->

<!-- types of arrays -->

 <!-- indexed arrays -->
 <?php
$fruits = array("apple", "banana", "orange");
echo "I like " . $fruits[0] . ", " . $fruits[1] . " and " . $fruits[2] . ".";
?>
<!-- associative arrays -->
<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";
?>
<!-- multi-dimensional arrays -->
<?php
$cars = array
  (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
  );
  for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
      echo "<li>".$cars[$row][$col]."</li>";
    }
    echo "</ul>";
  }
?>

<!-- modify multi dimensional array elements -->
<?php
// Input multidimensional array
$array = [
    'fruits' => [
        'apple' => 1,
        'banana' => 2,
    ],
    'vegetables' => [
        'carrot' => 3,
        'lettuce' => 4,
    ],
];

// Modify existing value
$array['fruits']['banana'] = 5;

// Add new value
$array['vegetables']['tomato'] = 6;

// Print the modified array
print_r($array['vegetables']['tomato'] );
?>
<!--remove multi dimensional array elements-->
<?php
// Input multidimensional array
$array = [
    'fruits' => [
        'apple' => 1,
        'banana' => 5,
    ],
    'vegetables' => [
        'carrot' => 3,
        'lettuce' => 4,
        'tomato' => 6,
    ],
];

// Remove 'banana' from the fruits array
unset($array['fruits']['banana']);

// Remove 'lettuce' from the vegetables array
unset($array['vegetables']['lettuce']);

// Print the modified array
print_r($array);
?>

 <!--loop through a multidimensional array(for each)-->
<!-- for each loop multidimensional array-->
<?php 
$cars = array
(
array("Volvo",22,18),
array("BMW",15,13),
array("Saab",5,2),
array("Land Rover",17,15)
);
foreach( $cars as $car){
    echo "I want to buy ".$car[0]." with ".$car[1]." miles per gallon and ".$car[2]." miles per hour"."\n";
}
?>



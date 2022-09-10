// Числовые массивы
$names = array("David", "Amy", "John");

$names[0] = "David";
$names[1] = "Amy";
$names[2] = "John";

echo $names[1]; // Выведет "Amy"

$arr = [];

<?php
$myArray[0] = "Aleksandr";
$myArray[1] = "<strong>PHP</strong>";
$myArray[2] = 32;

echo "$myArray[0] is $myArray[2] and knows $myArray[1]";

// Выведет "Aleksandr is 32 and knows PHP"
?>

<?php
$arr[0] = 'PHP';
$arr[1] = 'awesome';
$arr[2] = ' is ';

echo "$arr[0]$arr[2]$arr[1]";
?>

// Ассоциативные массивы 

$people = array("David"=>"27", "Amy"=>"21", "John"=>"42");
// или
$people['David'] = "27";
$people['Amy'] = "21";
$people['John'] = "42";

$people = array("David"=>"27", "Amy"=>"21", "John"=>"42");
echo $people['Amy']; // Выведет "21"

<?php
$man = array("name"=>"John", "age"=>"25");
echo $man['age'];
?>

// Многомерные массивы 

$people = array(
   'online'=>array('David', 'Amy'),
   'offline'=>array('John', 'Rob', 'Jack'),
   'away'=>array('Arthur', 'Daniel')
);

echo $people['online'][0]; //Выведет "David"

echo $people['away'][1]; //Выедет "Daniel"

// Массивы в многомерном массиве могут быть как числовыми, так и ассоциативными.


$cars = array (
  'BMW' => array('X5', 'red', '2013'),   
  'AUDI' => array('A4', 'white', '2008')
);

<?php 
$array[0] = "the mall";
$array[1] = "David";
$array[2] = "brother";
$array[3] = "the store";
$array[4] = "Rob";
echo "$array[1] went to $array[3]"; // David went to the store
?>




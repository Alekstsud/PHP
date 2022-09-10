<?php
if (условие) {
   код будет выполнен, если условие равно true;
} else {
   код будет выполнен, если условие равно false;
}
?>

<?php
if ($age > 18)
{  
echo "Welcome";
}
?>

<?php
$x = 10;
$y = 20;
if ($x >= $y) {
   echo $x;
} else {
   echo $y;
}

// Выведет "20"
?>

<?php
if($num == 100)
{echo "YES";}
else
{echo "NO";} 
?>

<?php
if (условие) {
  код будет выполнен если условие равно true;
} elseif (условие2) {
  код будет выполнен если условие2 равно true;
} else {
   код будет выполнен если оба условия равны false;
}
?>

<?php
$age = 21;

if ($age <= 13) {
    echo "Child";
} elseif ($age > 13 && $age < 19) {
    echo "Teenager";
} else {
    echo "Adult";
}

//Выведет "Adult"
?>



Мы использовали логический оператор AND (&&) для объединения двух условий и проверки, находится ли $age между 13 и 19.
    Фигурные скобки можно опустить, если после if/elseif/else есть только одно утверждение.
    Например:

<?php
if ($age <= 13)
    echo "Child";
else
    echo "Adult";
?>

<?php
if($gender == 0)
    echo "Male";
elseif ($gender == 1)
    echo "Female";
else
    echo "Undefined";
    ?>

<?php
while (условие равно true) {
   код будет выполняться;
}
// Если условие никогда не станет равным false, цикл будет выполняться бесконечно. И с этим нужно быть аккуратным, чтобы программа не зависла.
?>

<?php
$i = 1;
while ($i < 7) {
  echo "The value is $i <br />"; //Тег <br> устанавливает перевод строки в том месте, где этот тег находится.
  $i++;
}
?>

<?php
$i = 1;
while($i <= 15)   {
    echo "$i\n";
    $i++;
}
?>

<?php
do {
  выполняется код;
} while (условие равно true); 

 //   Независимо от того, является ли условие истинным или ложным, код будет выполнен хотя бы один раз, что может понадобиться в некоторых ситуациях.
?>

$i = 5;
do {
   echo "The number is " . $i . "<br/>";
   $i++;
} while($i <= 7);

//Вывод
//The number is 5
//The number is 6
//The number is 7

    Обратите внимание, что в цикле do while условие тестируется после выполнения операторов внутри цикла. Это означает, что в цикле do while его операторы будут выполняться хотя бы один раз, даже если условие ложно (false).


    $i = 0;
do {
$i++;
} while ($i < 10); 


for (init; test; increment) {
   выполняемый код;
}

Параметры:
init: инициализирует значение счетчика цикла;
test: оценивается каждый раз когда цикл выполняется, и цикл продолжается, пока он оценивается как истинный, и заканчивается, если он оценивается как ложный;
increment: увеличивает значение счетчика цикла.

    Каждый параметр может быть пустым или содержать несколько выражений, разделенных запятыми. 
    В операторе for параметры разделяются точкой с запятой.

<?php
for ($a = 0; $a < 6; $a++) {
    echo "Value of a : ". $a . "<br />";
}
?>

<?php
$name = "Bruce";
for($i=0; $i<10; $i++) {
echo $name; 
}
?>

foreach (array as $value) {
  код для выполнения;
}
//или
foreach (array as $key => $value) {
   код для выполнения;
}

<?php
$names = array("John", "David", "Amy");
foreach ($names as $name) {
   echo $name.'<br />';
}

// Выведет:
// John
// David
// Amy
?>

<?php
$items = array("one", "two", "three");
foreach ($items as $item) {
echo "$item\n";
}
?>

<?php
switch (n) {
  case value1:
    //код будет выполнен, если n=value1
    break;
  case value2:
     //код будет выполнен, если n=value2
     break;
  ...
  default:
    // код будет выполнен, если n отличается от всех перечисленных значений
}
?>

<?php
$today = 'Tue';

switch ($today) {
  case "Mon":
    echo "Today is Monday.";
    break;
  case "Tue":
    echo "Today is Tuesday.";
    break;
  case "Wed":
    echo "Today is Wednesday.";
    break;
  case "Thu":
    echo "Today is Thursday.";
    break;
  case "Fri":
     echo "Today is Friday.";
     break;
  case "Sat":
     echo "Today is Saturday.";
     break;
  case "Sun":
     echo "Today is Sunday.";
     break;
  default:
     echo "Invalid day.";
}
//Выведет "Today is Tuesday."
?>

<?php

$x = 5;
switch ($x) {
  case 1:
    echo "One";
    break;
  case 2:
    echo "Two";
    break;
  default:
    echo "No match";
}

//Выведет "No match"
?>

<?php
$day = 'Wed';

switch ($day) {
case 'Mon':
    echo 'First day of the week';
    break;
case 'Tue':
case 'Wed':
case 'Thu':
    echo 'Working day';
    break;
case 'Fri':
    echo 'Friday!';
    break;
default:
    echo 'Weekend!';
}

//Выведет "Working day"
?>

<?php
$x=1;
switch ($x) {
  case 1:
    echo "One";
  case 2:
    echo "Two";
  case 3:
    echo "Three";
  default:
    echo "No match";
}

//Выведет "OneTwoThreeNo match"

// Break также может быть использован, чтобы прервать выполнение циклов for, foreach, while, do-while.
?>

<?php
for ($i = 0; $i <= 50; $i++) {
    echo $i;
    if ($i == 5) {
      break;
    }
  }
?>

<?php
// пример пропускает четные числа в цикле for:

for ($i = 0; $i < 10; $i++) {
  if ($i%2 == 0) {
    continue;
  }
  echo $i . ' ';
}

// Выведет: 1 3 5 7 9
?>

<?php
for ($i = 0; $i <= 15; $i++) {
  if ($i == 10 || $i == 14) {
    continue;
  }
  echo $i."\n"; // код вывел все числа от 0 до 15 (включительно), за исключением чисел 10 и 14.
}
?>



Операторы include и require позволяют вставить содержимое одного PHP-файла в другой PHP-файл до того, как сервер его выполнит

<?php
  echo '<h1>Welcome</h1>';
?>

<html>
  <body>

  <?php include 'header.php'; ?>

  <p>Some text.</p>
  <p>Some text.</p>
  </body>
</html>

Используйте require, когда файл необходим для запуска приложения.
Используйте include, когда файл не является обязательным. Приложение должно продолжать работу, даже если файл не найден.

<?php
for ($i = 0; $i <= 10; $i++) {
    if ($i%2 == 0)
    echo $i."\n"; //Используя цикл for, выведите только четные числа от 0 до 10 (включительно).
}
?>


<?php
$x = 6;
if ($x == 10) {
      echo "A";
}
elseif ($x > 7 && $x < 10) {
       echo "B";
}
elseif ($x == 20) {
       echo "C";
}
else {
       echo "D"; //D
}
?>

<?php
$x = readline();
$y = readline();
if ($x > $y) {
      echo $x;
}
else {
       echo $y; 
}
?>


<?php
    $a = readline();
    $b = readline();
for ($i = $a; $i <= $b; $i++) {
  if ($i%2 == 0) 
  echo $i . ' '; //Выведите (через пробел) все четные числа от a до b (включительно).
}
?>



<?php
    $a = readline();
    $x;
for ($i = 0; $i <= $a; $i++) { 
    $y=readline();
    $x += $y; } 
echo $x; 
//Вводится число N, а затем N чисел, сумму которых необходимо вычислить..
?>



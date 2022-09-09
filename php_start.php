<?php
echo "Привет";
?>

<?php
echo "<h1>Stepik</h1>";
?>

<?php
$x = readline(); // считаем первое число в переменную $x
$y = readline(); // считаем второе число в переменную $y
echo $x + $y;    // выведем сумму чисел
?> 

<?php 
    $name = "Aleksandr";
    $age = 32;
    echo $name, ' ', $age;
?>

// define(name, value, case-insensitive)
<?php
  define("MSG", "Привет, Степик!");
  echo MSG;

   // Выводит "Привет, Степик!"
?> 

<?php
  define("MSG", "Привет, Степик!", true);
  echo msg;

  // Выводит "Привет, Степик!"
?>

<?php  
    $string = "Я изучаю PHP";
    echo $string;
?>

<?php
      $someString = "15";
      $birthyear = 1982;
      echo $someString + $birthyear;
      // 1997
?>

<?php
  $name = 'David';
  function getName() {
    echo $name;
  }
  getName();

  // Error: Undefined variable: name
  // Ошибка: неопределенная переменная: name
  //  так как переменная $name находится в глобальной области видимости

?>

<?php
  $name = 'Дэвид';
  function getName() {
    global $name;
    echo $name;
  }
  getName();

  //Выведет 'Дэвид'
?>

<?php 
$num1 = 56;
function  my_func() {
  $num1 = 89;
  echo $num1;
}
my_func(); // 89
?>


<?php
  $a = 'hello';
  $hello = "Hi!";
  echo $$a;

  // Выведет 'Hi!'
  // $$a - это переменная, которая использует значение другой переменной $a в качестве своего имени. Значение $a равно "hello". В результате получается переменная $hello, которая содержит значение "Hi!".

?>


<?php
  $num1 = 8;
  $num2 = 6;

  //Сложение
  echo $num1 + $num2; //14

  //Вычитание
  echo $num1 - $num2; //2

  //Умножение
  echo $num1 * $num2; //48

  //Деление
  echo $num1 / $num2; //1.33333333333

  //Получение остатка от деления
  echo $num1 % $num2; //2

  //Возведение в степень
  echo $num1 ** $num2; //262144
?>

<?php
  $x = 14;
  $y = 3;
  echo $x % $y; // 2
  //    Если вы используете числа с плавающей точкой с данным оператором, то перед операцией они будут преобразованы в целые числа, путем отбрасывания дробной части.
?>

<?php
$num = 9;
$num = $num%2; //1
?>

<?php
$num = 18;
$num--;
echo $num; //17
?>

<?php
$a = 7; 
$b = 3;
$a += $b;
echo $a; //10
?>


<?php
// На вход подается целое число. Вам необходимо написать программу, которая будет выводить его последнюю цифру.
$a = readline();
echo $a % 10; 
?>


function functionName() {    
   //код для выполнения
}

<?php
function sayHello() {
  echo "Hello!";
}

sayHello(); // Вызов функции

// Выведет "Hello!"
?>

<?php
function multiplyByTwo($number) {
  $answer = $number * 2;
  echo $answer;
}
multiplyByTwo(3);
//Выведет 6
?>

<?php
function multiply($num1, $num2) {
  echo $num1 * $num2;
}
multiply(3, 6);
//Выведет 18
?>

<?php
function test($num) {
echo $num/2;
}
test(14); //7
?>



При использовании аргументов по умолчанию, любые значения по умолчанию должны находиться справа от любых аргументов не по умолчанию; в противном случае, все будет работать не так, как ожидалось.
<?php
function setCounter($num = 10) {
    echo "Counter is ".$num;
 }
 setCounter(42);  // Counter is 42
 setCounter();  // Counter is 10
?>

<?php
function func($arg)  {
    $result = 0;
    for($i = 0; $i < $arg; $i++) {
      $result = $result + $i;
    }
    return $result;
  }
  echo func(5); // 10.. Цикл сложения цифр отработает 5 раз (от 0 до 4)
?>

<?php
function myName($name) {
    return 'Добро пожаловать, '.$name;
        } // Напишите функцию myName(), которая будет принимать в качестве параметра имя и возвращать строку "Добро пожаловать, введенноеимя"
?>

//Напишите функцию myGreater(), которая принимает три числа в качестве аргументов, находит наибольшее из этих трех чисел и возвращает его.
function myGreater($num1, $num2, $num3) {
    return max($num1, $num2, $num3);
}




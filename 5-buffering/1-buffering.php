<?php
// включаем буфер
ob_start();

// выводим информацию
echo "hello ";

// сохраняем всё что есть в буфере в переменную
// на данный момент там только `hello `
$a = ob_get_contents();

// выводим информацию
echo "world ";

// повторный вызов
// теперь буфер содержит `hello world `
$b = ob_get_contents();

echo $b;
echo "<br>";
echo $a;


//ob_clean() — читаем название функции как «очищаем буфер вывода»
//ob_flush() — «отправляем буфер вывода»
//ob_end_clean() — «буфер вывода отключаем и очищаем»
//ob_end_flush() — «буфер вывода отключаем и отправляем в браузер»
//ob_get_clean() — «получаем буфер вывода, очищаем и отключаем» — тут небольшой отступление от правила, эта функция должна именоваться как ob_get_end_clean(), но решили упростить, и выкинули end
//ob_get_flush() — «отправляем буфер вывода, очищаем и отключаем»
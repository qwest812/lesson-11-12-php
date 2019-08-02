<?php

if($_COOKIE['count']){
    setcookie('count',$_COOKIE['count']+1, time()+365);
}else{
    setcookie('count',1, time()+365);
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
echo "Count: " . ($_COOKIE['count']+1);
?>
<br>
<form method="post">
    <input type="submit" value="1" name="count">
</form>
</body>
</html>

<!doctype html>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

$age = isset($_GET['age']) ? $_GET['age'] : 0;

if($age >= 18){
    echo 'hi';
}else{
    echo 'xx';
}

?>




</body>
</html>

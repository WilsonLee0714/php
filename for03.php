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

<table border="1">
    <?php for($k=1; $k<=10; $k++):  ?>
    <tr>
        <?php for($i=1; $i<=10; $i++):
            //echo '<td>'. $i*$k. '</td>';
            printf('<td>%s * %s = %s</td>', $i, $k, $i*$k);
        endfor; ?>
    </tr>
    <?php endfor; ?>
</table>




</body>
</html>

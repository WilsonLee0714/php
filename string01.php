<?php
$a = 'abc';
$b = "def";
$c = "123
        456
        789";

$name = 'Bill';


echo "Hello $name<br>";
echo 'Hello $name<br>';

echo "Hello ${name}123<br>";
echo "Hello {$name}123<br>";


echo "123\n456\"789";
echo '123\\456\'789';

echo '<br>';

echo true ?: 'fff';
echo '<br>';
echo false ?: 'fff';


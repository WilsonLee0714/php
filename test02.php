<?php
$my_var = 66;
$b = "22";
$c = "abc";
echo $my_var + $b;
echo "<br />";
echo $my_var + intval($c); // 型別轉換1
echo "<br />";
echo $my_var + (int)$c; // 型別轉換2


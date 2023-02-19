<?php
$v="cristian"; 
unset($v);
if (!isset($v))
print('la variable ya no existe<br>');
?>

<?php 
print(empty($v));
$v=" ";
print(empty($v));
?>
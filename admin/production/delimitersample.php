<!DOCTYPE html>
<html>
<body>

<?php
$str = "     Delinquent    ";
$str = preg_replace('/\s+/', '', $str);

print_r ($str);
?> 

<?php
$str = "Hello world. It's a beautiful day.";
print_r (explode(" ",$str));
?>

<?php
echo str_replace("world","Peter","Hello world!");
?>

<?php 
$words = '      my words     ';
$words = trim($words);
var_dump($words);
echo $words;
?>
</body>
</html>
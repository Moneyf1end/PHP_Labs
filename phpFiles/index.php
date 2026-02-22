<?php

echo "Hello, world!<br />";

echo "Hello, World with echo!<br />";
print "Hello, World with print!<br />";

$days = 288;
$message = "Все возвращаются на работу!";

$output = $days . "----". $message;
echo "$output<br />";
echo "Его зарплата {$days} долларов очень мала, поэтому  " . $message;
echo "<br />";
echo "Дней = $days, Оповещение = $message";
echo "<br />";
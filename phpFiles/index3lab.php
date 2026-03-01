<?php
$day = (int) date('N'); // 1=Пн, 2=Вт, 3=Ср, 4=Чт, 5=Пт, 6=Сб, 7=Вс

if ($day == 1 || $day == 3 || $day == 5) {
    $john = '8:00-12:00';
} else {
    $john = 'Нерабочий день';
}

if ($day == 2 || $day == 4 || $day == 6) {
    $jane = '12:00-16:00';
} else {
    $jane = 'Нерабочий день';
}
?>

<table border="1">
    <tr>
        <th>№</th>
        <th>Фамилия Имя</th>
        <th>График работы</th>
    </tr>
    <tr>
        <td>1</td>
        <td>John Styles</td>
        <td><?php echo $john; ?></td>
    </tr>
    <tr>
        <td>2</td>
        <td>Jane Doe</td>
        <td><?php echo $jane; ?></td>
    </tr>
</table>

<?php

// for here
$a = 0;
$b = 0;

echo "<h3>Цикл for</h3>";
for ($i = 0; $i <= 5; $i++) {
    $a += 10;
    $b += 5;
    echo "Step $i: a = $a, b = $b<br>";
}
echo "End of the loop: a = $a, b = $b";

// while here
$a = 0;
$b = 0;
$i = 0;

echo "<h3>Цикл while</h3>";
while ($i <= 5) {
    $a += 10;
    $b += 5;
    echo "Step $i: a = $a, b = $b<br>";
    $i++;
}
echo "End of the loop: a = $a, b = $b";

// do while here
$a = 0;
$b = 0;
$i = 0;

echo "<h3>Цикл do-while</h3>";
do {
    $a += 10;
    $b += 5;
    echo "Step $i: a = $a, b = $b<br>";
    $i++;
} while ($i <= 5);
echo "End of the loop: a = $a, b = $b";


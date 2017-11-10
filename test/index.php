<html>
<body>
<?php
$numbers = [1,2,3,4,5,6,7,8,9,10,12,13,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32];
$p1 = [1,2,3,4,5,6,7,8,9,10,12,13,13,14,15,16];
$p2 = [17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32];

$p1score = [2,1,2,1,2,1,2,1,2,1,2,1,2,1,2,1];
$p2score = [1,2,1,2,1,2,1,2,1,2,1,2,1,2,1,2];
$game = [];
$testArray = array_chunk(shuffle($testArray),16,true);
shuffle($numbers);
shuffle($p1);
var_dump($p1);
echo "<br>";
shuffle($p2);
var_dump($p2);
//foreach ($numbers as $number) {
//    echo "$number ";
//    array_push($game,$number);
//
//}

?>
<br>
<h1>32</h1>
<table>
    <tr>
        <th>p1</th>
        <th>p2</th>
    </tr>
    <tr>
        <td><?php foreach ($p1 as $a){echo $a . "<br>";}?></td>
        <td><?php foreach ($p2 as $b){echo $b . "<br>";}?></td>
    </tr>
</table>
<?php
for ($i = 1; $i <= 8; $i++) {
    if ($p1score[$i] < $p2score[$i]) {
        unset($p1[$i]);
        unset($p1score[$i]);

    }
    else{
        unset($p2[$i]);
        unset($p2score[$i]);

    }
}
?>
<h1>16</h1>
<table>
    <tr>
        <th>p1</th>
        <th>p2</th>
    </tr>
    <tr>
        <td><?php foreach ($p1 as $a){echo $a . "<br>";}?><td>
            <?php foreach ($p2 as $b){echo $b . "<br>";}?></td>
    </tr>
</table>
<?php
for ($i = 1; $i <= 4; $i++) {
    if ($p1score[$i] < $p2score[$i]) {
        unset($p1[$i]);
        unset($p1score[$i]);
    }
    else{
        unset($p2[$i]);
        unset($p2score[$i]);

    }
}
?>
<h1>8</h1>
<table>
    <tr>
        <th>p1</th>
        <th>p2</th>
    </tr>
    <tr>
        <td><?php foreach ($p1 as $a){echo $a . "<br>";}?></td>
        <td><?php foreach ($p2 as $b){echo $b . "<br>";}?></td>
    </tr>
</table>
<?php
for ($i = 1; $i <= 2; $i++) {
    if ($p1score[$i] < $p2score[$i]) {
        unset($p1[$i]);
    }
    else{
        unset($p2[$i]);
    }
}
?>
<h1>4</h1>
<table>
    <tr>
        <td><?php foreach ($p1 as $a){echo $a . "<br>";}?></td>
        <td><?php foreach ($p2 as $b){echo $b . "<br>";}?></td>
    </tr>
</table>
<?php
for ($i = 1; $i <= 2; $i++) {
    if ($p1score[$i] < $p2score[$i]) {
        unset($p1[$i]);
    }
    else{
        unset($p2[$i]);
    }
}
?>
<h1>2</h1>
<table>
    <tr>
        <th>p1</th>
        <th>p2</th>
    </tr>
    <tr
    <td><?php foreach ($p1 as $a){echo $a . "<br>";}?></td>
    <td><?php foreach ($p2 as $b){echo $b . "<br>";}?></td>
    </tr>
</table>
<h1>winner: mats</h1>
</body>
</html>




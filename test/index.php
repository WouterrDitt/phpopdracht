<html>
<body>
<?php
$team = [1,2,3,4,5,6,7,8,9,10,12,13,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32];
$p1 = [1,2,3,4,5,6,7,8,9,10,12,13,13,14,15,16];
$p2 = [17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32];
$p1score = [2,1,2,1,2,1,2,1,2,1,2,1,2,1,2,1];
$p2score = [1,2,1,2,1,2,1,2,1,2,1,2,1,2,1,2];
$p1scorer1 = [2,1,2,1,2,1,2,1,2,1,2,1,2,1,2,1];
$p2scorer1 = [1,2,1,2,1,2,1,2,1,2,1,2,1,2,1,2];
$p1scorer2 = [2,1,2,1,2,1,2,1,2,1,2,1];
$p2scorer2 = [1,2,1,2,1,2,1,2,1,2,1,2,1,2,1,2];
$p1scorer3 = [2,1,2,1,2,1,2,1,2,1,2,1,2,1,2,1];
$p2scorer3 = [1,2,1,2,1,2,1,2,1,2,1,2,1,2,1,2];
$p1scorer4 = [2,1,2,1,2,1,2,1,2,1,2,1,2,1,2,1];
$p2scorer4 = [1,2,1,2,1,2,1,2,1,2,1,2,1,2,1,2];
$p1scorer5 = [2,1,2,1,2,1,2,1,2,1,2,1,2,1,2,1];
$p2scorer5 = [1,2,1,2,1,2,1,2,1,2,1,2,1,2,1,2];
$p1r1 = [];
$p2r1 = [];
$p1r2 = [];
$p2r2 = [];
$p1r3 = [];
$p2r3 = [];
$p1r4 = [];
$p2r4 = [];
$game = [];
$winner = 0;
$testArray = array_chunk($team,16,true);
//var_dump($testArray);
shuffle($numbers);
shuffle($p1);
//var_dump($p1);
echo "<br>";
shuffle($p2);
//var_dump($p2);
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
for ($i = 0; $i < 16; $i++) {
    if ($p1score[$i] < $p2score[$i]) {
        array_push($p2r1,$p2[$i]);
        unset($p1[$i]);
//        unset($p1score[$i]);

    }
    else{
        array_push($p1r1,$p1[$i]);
        unset($p2[$i]);
//        unset($p2score[$i]);

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
        <td><?php shuffle($p1r1); foreach ($p1r1 as $a){echo $a . "<br>";}?><td>
            <?php shuffle($p2r1); foreach ($p2r1 as $b){echo $b . "<br>";}?></td>
    </tr>
</table>
<?php
for ($i = 0; $i < 8; $i++) {
    if ($p1scorer1[$i] < $p2scorer1[$i]) {
        array_push($p2r2,$p2r1[$i]);
        unset($p1r1[$i]);
    }
    else{
        array_push($p1r2,$p1r1[$i]);
        unset($p2r1[$i]);

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
        <td><?php shuffle($p1r2); foreach ($p1r2 as $a){echo $a . "<br>";}?></td>
        <td><?php shuffle($p2r2); foreach ($p2r2 as $b){echo $b . "<br>";}?></td>
    </tr>
</table>
<?php
$t = 1;
//array_push($p1r3,$t)
for ($i = 0; $i < 4; $i++) {
    if ($p1scorer2[$i] < $p2scorer2[$i]) {
        array_push($p2r3,$p2r2[$i]);
//        unset($p1r1[$i]);
    }
    else{
        array_push($p1r3,$p1r2[$i]);
//        unset($p2r1[$i]);
    }
}
?>
<h1>4</h1>
<table>
    <tr>
        <th>p1</th>
        <th>p2</th>
    </tr>
    <tr>
        <td><?php foreach ($p1r3 as $a){echo $a . "<br>";}?></td>
        <td><?php foreach ($p2r3 as $b){echo $b . "<br>";}?></td>
    </tr>
</table>
<?php
for ($i = 0; $i < 2; $i++) {
    if ($p1scorer3[$i] < $p2scorer3[$i]) {
        array_push($p2r4,$p2r3[$i]);

//        unset($p1r3[$i]);
    }
    else{
        array_push($p1r4,$p1r3[$i]);

        unset($p2r3[$i]);
    }
}
?>
<h1>2</h1>
<table>
    <tr>
        <th>p1</th>
        <th>p2</th>
    </tr>
    <tr>
    <td><?php foreach ($p1r4 as $a){echo $a . "<br>";}?></td>
    <td><?php foreach ($p2r4 as $b){echo $b . "<br>";}?></td>
    </tr>
</table>
<?php
for ($i = 0; $i < 2; $i++) {
    if ($p1scorer4[$i] < $p2scorer4[$i]) {
        $winner = $p2r4[0];
//        unset($p1r3[$i]);
    }
    else{
        $winner = $p1r4[0];
    }
}
?>
<h1>winner: <?php echo $winner;?></h1>
</body>
</html>




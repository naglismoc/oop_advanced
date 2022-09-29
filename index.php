<?php
// include "./models/NPC.php";
include "./models/Goblin.php";
$npc = new NPC(48);

print_r($npc);

echo $npc->getHp();
$npc->setHp(68);
echo $npc->getHp();

$goblin = new Goblin();

$goblin->shoutAndRun();

echo "<hr>";

print_r($goblin);

echo "<hr>";

echo $npc;

echo "<hr>";

echo $goblin;

echo "<hr>";

$npc->sayAuch();


echo "<hr>";

$goblin->sayAuch();






?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>OOP POWER</h1>
</body>
</html>
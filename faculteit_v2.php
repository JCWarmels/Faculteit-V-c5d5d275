<?php
echo("Welk getal?".PHP_EOL);
$getal = readline();
$ant =1;
$i = 1;
while($i<=$getal){
    $ant = $ant * $i;
    $i++;
}
echo("De faculteit van dat getal is: ".$ant);
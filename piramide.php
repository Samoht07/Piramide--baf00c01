<?php
echo "Hoeveel stapels wil je hebben?"  . PHP_EOL;
$stapel = readline(">");
$A = " ";

for($i=1; $i<=$stapel; $i++)#sets a base of 1
   {
       $A .= "*";
 
    echo $A . PHP_EOL; 
}
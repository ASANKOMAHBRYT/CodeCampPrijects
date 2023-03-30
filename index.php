<?php

echo "<b>"."<u>Using Do While loop to print multiplication table of 5</u>"."</b>"."</br>";
$a=5;
$b=12;
$c=1;
while($c<=$b){
    echo $c."x".$a."=".($c*$a)."</br>";
    $c++;
}

echo"</br>";
echo "<b>"."<u>Using Do While loop print multiplication table of 5</u>"."</b>";
echo"</br>";
do{
    for($c=1;$c<=$b;$c++){
        echo $c."x".$a."=".($c*$a)."</br>";
    }
  
   
}while($c<=$b);

echo"</br>";
echo"<b>"."<u>Using the for loop to print the first 100 even numbers</u> "."</b>";
echo"</br>";
for($m=2;$m<=100;$m=$m+2){
    echo "$m"."</br>";
}

?>
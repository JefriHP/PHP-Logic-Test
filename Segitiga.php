<?php
echo"<br>SEGITIGA SIKU KIRI<br>";
$star=10;
for($a=$star;$a>0;$a--){
for($b=$star;$b>=$a;$b--){
    echo "*";
}
echo "<br>";
}

echo"<br>SEGITIGA SIKU KIRI (REVERSE)<br>";
$star=10;
for($a=1; $a<=$star; $a++){
for($c=$star; $c>=$a; $c-=1){
    echo "*";
}
echo "<br>";
}

echo"<br>SEGITIGA SIKU KANAN<br>";
$star=10;
for($a=$star;$a>0;$a--){
for($i=1; $i<=$a; $i++){
    echo " &nbsp";
}
for($a1=$star;$a1>=$a;$a1--){
    echo"*";
}
echo"<br>";
}

echo"<br>SEGITIGA SIKU KANAN (REVERSE)<br>";
$star=10;
for($a=1; $a<=$star; $a++){
for($i=1; $i<=$a; $i++){
    echo " &nbsp";
}
for($c=$star; $c>=$a; $c-=1){
    echo "*";
}
echo "<br>";
}


echo"<br>SEGITIGA SAMA KAKI<br>";
$star=10;
for( $a=$star;$a>0;$a--){
for($i=1; $i<=$a; $i++){
    echo "&nbsp";
}
for($a1=$star;$a1>=$a;$a1--){
    echo"*";
}
echo"<br>";
}

echo"<br>SEGITIGA SAMA KAKI (REVERSE)<br>";
$star=10;
for($a=1; $a<=$star; $a++){
for($b=1; $b<=$a; $b++){
    echo "&nbsp";
}
for($c=$star; $c>=$a; $c-=1){
    echo "*";
}
echo "<br>";
}



echo"<br>DIAMON<br>";
$star=10;
for($a=1; $a<=$star; $a++){
for($b=$star; $b>=$a; $b-=1){
    echo "&nbsp";
}
for($c=1; $c<=$a; $c++){
    echo "*";
}
echo "<br>";
}
for($a=1; $a<=$star; $a++){
for($b=1; $b<=$a; $b++){
    echo "&nbsp";
}
for($c=$star; $c>=$a; $c-=1){
    echo "*";
}
echo "<br>";
}

?>
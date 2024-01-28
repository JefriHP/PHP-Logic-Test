<?php
echo"<br>SEGITIGA SIKU KIRI<br>";
$MaxValue=10;
for($a=1; $a<=$MaxValue; $a++) { //dari terkecil-terbesar: 1-x
    for($b=1; $b<=$a; $b++) { //Loop 1: a=1 => b:1; Loop 2: a=2 => b:1 & 2; dst..
        //echo "*";
        // echo $a.":".$b." ";
        echo $b." ";
    }
    echo "<br>";
}
echo"<br>SEGITIGA SIKU KIRI (REVERSE) V1 <br>";
$MaxValue=10;
for($a=$MaxValue; $a>=1; $a--) { //dari terbesar misal 1-x
    for($b=$a; $b>=1; $b--) { //Loop 1: a=1 => b:1; Loop 2: a=2 => b:1 & 2; dst..
        // echo "*";
        //  echo $a.":".$b." ";
         echo $b." ";
    }
    echo "<br>";
}

echo"<br>SEGITIGA SIKU KIRI (REVERSE) V2 <br>";
$MaxValue=10;
for($a=1; $a<=$MaxValue; $a++) { //dari terbesar misal 1-x
    for($b=$a; $b<=$MaxValue; $b++) { //Loop 1: a=1 => b:1,2,3..10; Loop 2: a=2 => b:2,3,4..10; dst..
        // echo "*";
        //  echo $a.":".$b." ";
        echo $b." ";
    }
    echo "<br>";
}

echo"<br>SEGITIGA SIKU KIRI (REVERSE) V3 <br>";
$MaxValue=10;
for($a=1; $a<=$MaxValue; $a++) { //dari terbesar misal 1-x
    $tmp=1;
    for($b=$a; $b<=$MaxValue; $b++) { //Loop 1: a=1 => b:1,2,3..10; Loop 2: a=2 => b:2,3,4..10; dst..
        // echo "*";
        echo $tmp." ";
        $tmp++;
    }
    echo "<br>";
}

echo"<br>SEGITIGA SIKU KANAN<br>";
$MaxValue=10;
for($a=1; $a<=$MaxValue; $a++) { //dari terbesar misal 1-x
    // create segitiga siku berisikan space "  &nbsp" 
    for($b=$a; $b<=$MaxValue; $b++) { //Loop 1: a=1 => b:1,2,3..10; Loop 2: a=2 => b:2,3,4..10; dst..
        echo " &nbsp";
    }
    // create segitiga siku berisikan *
    for($b=1;$b<=$a;$b++){ //Loop 1: a=1 => b:1; Loop 2: a=2 => b:1-2; dst..
        echo"*";
        // echo $b." ";
    }
    echo "<br>";
}

echo"<br>SEGITIGA SIKU KANAN (REVERSE)<br>";
$MaxValue=10;
for($a=1; $a<=$MaxValue; $a++) { //dari terbesar misal 1-x
    // create segitiga siku berisikan space "  &nbsp" 
    for($b=1; $b<=$a; $b++) { //Loop 1: a=1 => b:1; Loop 2: a=2 => b:1-2; dst..
        echo " &nbsp";
    }
    // create segitiga siku berisikan *
    for($b=$a;$b<=$MaxValue;$b++){ //Loop 1: a=1 => b:1; Loop 2: a=2 => b:1-2; dst..
        echo"*";
        // echo $b." ";
    }
    echo "<br>";
}

echo"<br>SEGITIGA SAMA KAKI<br>";
$MaxValue=10;
for( $a=1;$a<=$MaxValue;$a++){
    // Create segitiga sikut-left-reverse
    for($i=$a; $i<=$MaxValue; $i++){ //Loop 1: a=1 => b:1,2,3..10; Loop 2: a=2 => b:2,3,4..10; dst..
        echo "&nbsp";
    }
    for($a1=1;$a1<=$a;$a1++){ //Loop 1: a=1 => b:1; Loop 2: a=2 => b:1,2; dst..
        // echo"*";
        echo $a1." ";
    }
    echo"<br>";
}

echo"<br>SEGITIGA SAMA KAKI (REVERSE)<br>";
$MaxValue=10;
for( $a=1;$a<=$MaxValue;$a++){
    // Create segitiga sikut-left-reverse
    for($b=1; $b<=$a; $b++){ //Loop 1: a=1 => b:1; Loop 2: a=2 => b:1,2; dst..
        echo "&nbsp";
    }
    for($c=$a;$c<=$MaxValue;$c++){ //Loop 1: a=1 => b:1; Loop 2: a=2 => b:2,3; dst..
        // echo"*";
        echo $c." ";
    }
    echo"<br>";
}

?>

<?php 

$n1 = $_POST["val1"];
//$n2 = $_POST["val2"];
$cont = 0;


for ($i=1; $i <= 10 ; $i++) { 
    
    for ($c=1; $c <= 10 ; $c++) { 
        echo $cont++." x ".$c." = ".$cont++*$c."";
    }
}



/* for ($i=1; $i <= 10 ; $i++) { 
    echo $n1." x ".$i." = ".$n1*$i."<br>";
}
echo "<br>";
for ($s=1; $s <= 10; $s++) { 

    echo $n1." + ".$s." = ".$n1+$s."<br>";
}*/




/*echo "Soma:".$n1 + $n2."<br>";
echo "Subtração: ".$n1 - $n2."<br>";
echo "Multiplicação: ".$n1 * $n2."<br>";
echo "Divisão: ".number_format($n1 / $n2,2,","," ")."<br>";*/

/*for ($i=1; $i <= $n1 ; $i++) { 
    for ($j=0; $j <= $n2 ; $j++) { 
        echo $cont++." - ";
    }
    echo "<br>";
  }*/

?>
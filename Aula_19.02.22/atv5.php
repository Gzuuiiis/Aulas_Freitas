<?php

echo '<table border="2" >';
$cont = 0;
    
for ($i = 0; $i <= 10 ; $i++) {
    echo "<tr>";
    for ($c = 0; $c <= 10 ; $c++) { 

        if($i == 5 || $c == 5){
            if ($i == 5 && $c == 5) {
                echo "<td style='background-color:yellow;cursor:search'> 0 </td>";
            }
            else{
                echo "<td style='background-color:blue;cursor:search'> X </td>";
            }
        }
        else {
        echo "<td style='background-color:purple;cursor:pointer'> &nbsp </td>";
        } 

       /*  if($i == $c){
            echo "<td style='background-color:blue;cursor:search'> X </td>";
        }
        else {
        echo "<td style='background-color:purple;cursor:pointer'> &nbsp </td>";
        } 

        -

        if($i == 0){
        echo "<td>".$c."</td>";
        }
        else if($c==0){
            echo "<td>".$i."</td>";
        }
        else{
            echo "<td>X</td>";
        }*/
    }
    
 echo "</tr>";

}

echo '</table>';

/* for ($i = 1; $i <= 1 ; $i++) {
    echo "<tr>";
    for ($c = 0; $c <= 10 ; $c++) { 
        echo "<td>".$cont++."</td>";
    }
    
 echo "</tr>";
}

for ($i=1; $i <= 10 ; $i++) { 
    for ($c=0; $c <= 10 ; $c++) { 
        echo 'Olá ';
    }
    echo "<br>";
  }*/
?>
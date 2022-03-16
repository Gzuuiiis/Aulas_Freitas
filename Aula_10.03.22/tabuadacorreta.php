<?php 

echo "<table border='1'>";
for ($i=1; $i <= 10 ; $i++) { 
    echo "<tr>";
    for ($c=1; $c <= 5 ; $c++) { 
       echo"<td>" . $c . ' x ' . $i . ' = ' . ($c * $i) . " &nbsp </td>";
    }
    echo "</tr>";
}
echo "</table>";
echo "<br>";
echo "<table border='1'>";
for ($i=1; $i <= 10 ; $i++) { 
    echo "<tr>";
    for ($c=6; $c <= 10 ; $c++) { 
       echo"<td>" . $c . ' x ' . $i . ' = ' . ($c * $i) . " &nbsp </td>";
    }
    echo "</tr>";
}
echo "</table>";



/* echo "<table>";
echo '<tr>';
for ($i=1; $i <= 10; $i++) { 
    for ($c=1; $c <= 5; $c++) {
        echo "<td>" . $c . ' x ' . $i . ' = ' . ($c * $i) . " &nbsp </td>";
    }  
    echo '</tr>';
    //echo '<tr><tr>' . $numSelect. 'x' . $i . ' = ' . ($numSelect * $i) . '</tr></tr> <br>';
}


for ($i=1; $i <= 10; $i++) { 
    echo '<tr>';
    for ($c=6; $c <= 10; $c++) {
        echo "<td>" . $c . ' x ' . $i . ' = ' . ($c * $i) . " &nbsp </td>";
    }  
    echo '</tr>';
    //echo '<tr><tr>' . $numSelect. 'x' . $i . ' = ' . ($numSelect * $i) . '</tr></tr> <br>';
}

echo "</table>";*/

?>
<?php 

echo "<table>";
for ($i=1; $i <= 10; $i++) { 
    echo '<tr>';
    for ($c=1; $c <= 10; $c++) {
        echo "<td>" . $c . ' x ' . $i . ' = ' . ($c * $i) . " &nbsp </td>";
    }
    echo '</tr>';
    //echo '<tr><tr>' . $numSelect. 'x' . $i . ' = ' . ($numSelect * $i) . '</tr></tr> <br>';
}
echo "</table>"
?>
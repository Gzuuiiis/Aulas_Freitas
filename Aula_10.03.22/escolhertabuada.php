<?php 

$numSelect = $_POST['numero'];
echo "<table>";
for ($i=1; $i <= 10; $i++) { 
    echo "<tr>" . $numSelect . ' x ' . $i . ' = ' . ($numSelect * $i) . "<br> </tr>";
}
echo " </table>";
?>
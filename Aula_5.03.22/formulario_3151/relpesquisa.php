<?php

    $nomeUser = $_POST['nome'];
    $grauinUser = $_POST['grauin'];


    echo "<strong> Nome: </strong> $nomeUser <br>";

    if(isset($_POST['sexo'])){
        if($_POST['sexo'] == "M"){
            echo "<strong>Sexo:</strong> Masculino <br>";
        }else if($_POST['sexo'] == "F"){
            echo "<strong>Sexo:</strong> Feminino <br>";
        }
        else{
            echo "Nada Selecionado";
        }
    }

    //Gambiara para selecionar sexo
    /*if($sexoUser == "M"){
        echo "<strong>Sexo:</strong> Masculino <br>";
    }else if($sexoUser == "F"){
        echo "<strong>Sexo:</strong> Feminino <br>";
    }
    else if($sexoUser == ''){
        echo "<strong>Sexo:</strong> Nada Selecionado <br>";
    }*/

    // Gambiarra para Hobbies
    /*
   for ($i=0 ; $i <= 1 ; $i++ ) { 
    if($i == 0){
        echo "<strong>Hobbies: </strong>";
    }
    else{
        foreach($_POST['hobbies'] as $hobbie){
            echo "$hobbie &nbsp";
        }
    }
}*/

echo "<strong>Grau de Instrução:</strong> $grauinUser <br>";

echo "<strong>Hobbies:</strong> <br>";
foreach($_POST['hobbies'] as $value){
    echo "* $value <br>";
}

?>
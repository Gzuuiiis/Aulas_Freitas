<?php 
$data = date ('d / m / y',strtotime($_POST['datanasc']));

echo "<strong>Nome:</strong> ".$_POST['nome']."<br>";
echo "<strong>CPF:</strong> ".$_POST['cpf']."<br>";
echo "<strong>Nome do Pai:</strong> ".$_POST['nomepai']."<br>";
echo "<strong>Nome da Mãe:</strong> ".$_POST['nomemae']."<br>";
echo "<strong>Data: </strong>".$data."<br>";

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



if(isset($_POST['escolaridade'])){
    if($_POST['escolaridade'] == "ensinI"){
        echo "<strong>Escolaridade:</strong> Ensino Fundamental I <br>";
    }else if($_POST['escolaridade'] == "ensinII"){
        echo "<strong>Escolaridade:</strong> Ensino Fundamental II <br>";
    }
    else if($_POST['escolaridade'] == "ensinM"){
        echo "<strong>Escolaridade:</strong> Ensino Médio <br>";
    }
    else if($_POST['escolaridade'] == "ensinS"){
        echo "<strong>Escolaridade:</strong> Ensino Superior <br>";
    }
    else{
        echo "<strong>Escolaridade:</strong> Nada Selecionado";
    }
}

if(isset($_POST['nacionalidade'])){
    if($_POST['nacionalidade'] == "brasil"){
        echo "<strong>Nacionalidade:</strong> Brasil <br>";
    }else if($_POST['nacionalidade'] == "russia"){
        echo "<strong>Nacionalidade:</strong> Russia <br>";
    }
    else if($_POST['nacionalidade'] == "argentina"){
        echo "<strong>Nacionalidade:</strong> Argentina <br>";
    }
    else if($_POST['nacionalidade'] == "portugal"){
        echo "<strong>Nacionalidade:</strong> Portugal <br>";
    }
    else if($_POST['nacionalidade'] == "austria"){
        echo "<strong>Nacionalidade:</strong> Austria <br>";
    }
    else{
        echo "<strong>Nacionalidade:</strong> Nada Selecionado";
    }
}

echo "<strong>Interesses:</strong> <br>";
foreach($_POST['interesses'] as $value){
    echo "* $value <br>";
}

?>
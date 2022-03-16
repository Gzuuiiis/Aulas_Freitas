<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!--</link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">-->

    <title>Olá, mundo!</title>
  </head>
  <body>
        <form action="cadastro.php"   method="post">
       <table> 
        <tr><td>Nome Completo:</td></tr> 
        <tr><td><input type="text" name="nome" placeholder="Nome Completo"></td></tr>
        
        <tr><td>CPF: </td></tr>
        <tr><td><input type="number" name="cpf" placeholder="CPF"></td></tr>


        <tr><td> Nome do Pai:</td></tr>
        <tr><td><input type="text" name="nomepai" placeholder="Nome do Pai"></td></tr>
          

        <tr><td>Nome da Mãe:</td></tr>
        <tr><td><input type="text" name="nomemae" placeholder="Nome da Mãe"></td></tr>

        <tr><td>Data de Nascimento:</td></tr>
        <tr><td><input type="date" name="datanasc" placeholder="Data de Nascimento"></td></tr>

        <tr><td> Sexo: 
                <input type="radio" name="sexo" value="M">Masculino
                <input type="radio" name="sexo" value="F">Feminino
            </td>
        </tr>


        <tr>
           <td>
            Escolaridade:
               <select name="escolaridade" >
                   <option value="ensinI">Ensino Fundamental I</option>
                   <option value="ensinII">Ensino Fundamental II</option>
                   <option value="ensinM">Ensino Médio</option>
                   <option value="ensinS">Ensino Superior</option>
               </select>
          </td>
        </tr>

        <tr>
            <td>
             Nacionalidade:
               <select name="nacionalidade" >
                   <option value="brasil">Brasil</option>
                   <option value="russia">Russia</option>
                   <option value="argentina">Argentina</option>
                   <option value="portugal">Portugal</option>
                   <option value="austria">Austria</option>
               </select>
            </td>
        </tr>

        <tr> <td> Interesses:</td> </tr>
        <tr> <td>  <input name="interesses[]" type="checkbox" value="livros">Livros </td> </tr>
        <tr> <td>  <input name="interesses[]" type="checkbox" value="jogos">Jogos </td> </tr>
        <tr> <td>  <input name="interesses[]" type="checkbox" value="filmes">Filmes </td> </tr>
        <tr> <td>  <input name="interesses[]" type="checkbox" value="series">Series </td> </tr>
        <tr> <td>  <input name="interesses[]" type="checkbox" value="futebol">Futebol </td> </tr>
        <tr> <td>  <input name="interesses[]" type="checkbox" value="basquete">Basquete </td> </tr>
        <tr> <td>  <input name="interesses[]" type="checkbox" value="musica">Musica </td> </tr>
        <tr> <td>  <input name="interesses[]" type="checkbox" value="natacao">Natação </td> </tr>
        <tr> <td>  <input name="interesses[]" type="checkbox" value="estudar">Estudar</td> </tr>
        <tr> <td>  <input name="interesses[]" type="checkbox" value="programacao">Programação </td> </tr>

    
      </table>


       <!--
        <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
              <label for="">Interesses
            
              <br>
            <label for="">Livro
            <input name="interesses[]" type="checkbox" value="livros">
            <label for="">Jogo
            <input name="interesses[]" type="checkbox" value="jogos">
            <label for="">filme
            <input name="interesses[]" type="checkbox" value="filmes">
            <label for="">Série
            <input name="interesses[]" type="checkbox" value="series">
            <label for="">Futebo
            <input name="interesses[]" type="checkbox" value="futebol">
            <br>
            <label for="">Basquet
            <input name="interesses[]" type="checkbox" value="basquete">
            <label for="">Vole
            <input name="interesses[]" type="checkbox" value="volei">
            <label for="">Nataçã
            <input name="interesses[]" type="checkbox" value="natacao">
            <label for="">Estuda
            <input name="interesses[]" type="checkbox" value="estudar">
            <label for="">Programaçã
            <input name="interesses[]" type="checkbox" value="programacao">
          </div>
        </div>
      </div> -->

    

        <input type="submit" name="" >





</form>



    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
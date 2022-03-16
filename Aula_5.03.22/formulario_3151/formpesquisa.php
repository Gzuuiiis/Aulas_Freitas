<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Olá, mundo!</title>
  </head>
  <body>
    <div class="container">

    <form action="relpesquisa.php" method="post">
      <div class="row">
          <div class="form-group col-md-6">
              <label for="exampleFormControlInput1">Nome</label>
              <input type="text" name="nome" class="form-control" id="exampleFormControlInput1" placeholder="nome">
          </div>

          <div class="input-group col-md-6">
            <div class="input-group-prepend">
                <div class="input-group-text" name="sexo">
                  <input type="radio" name="sexo" value="M">Masculino
                  <input type="radio" name="sexo" value="F">Feminino
                </div>
            </div>
          </div>

      </div>

      
      <div class="form-group col-md-4">
        <label for="inputGrauin">Grau de Instrução</label>
        <select id="inputGrauin" name="grauin" class="form-control">
          <option selected>Ensino Fundamental I</option>
          <option>Ensino Fundamental II</option>
          <option>Ensino Médio</option>
          <option>Ensino Superior</option>
        </select>
      </div>
      
      <div class="input-group">
        <div class="input-group-prepend">
          <div class="input-group-text">
            <label for="">Ler</label>
            <input name="hobbies[]" type="checkbox" value="Ler">
            <label for="">Jogar</label>
            <input name="hobbies[]" type="checkbox" value="Jogar">
            <label for="">Cinefilo</label>
            <input name="hobbies[]" type="checkbox" value="Cinefilo">
          </div>
        </div>
      </div>
      
      <input type="submit" value="Enviar">
    </form>

    </div>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="./css/style.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Amaranth&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <title>navbar teste</title>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
      <!-- 26/12 Cris não conseguiu fazer fixed-top direito -->
      <a class="navbar-brand" href="#">
        <h2 class="text-primary"> Mizanga</h2>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarNav">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="./home.php">Início</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Admin
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="./admin-home.php">Tela inicial</a>
              <a class="dropdown-item" href="./admin-config-inscrito.php">Participantes</a>
              <a class="dropdown-item" href="./admin-config-trabalhos.php">Trabalhos</a>
              <a class="dropdown-item" href="./admin-config-parecerista.php">Pareceristas</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./instrucoes-inscricao.php">Inscrição</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Área do inscrito
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="./inscrito-home.php">Informações pessoais</a>
              <a class="dropdown-item" href="./inscrito-trabalhos-cadastrados.php">Trabalhos cadastrados</a>
              <a class="dropdown-item" href="./inscrito-enviar-trabalho.php">Enviar trabalho</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="parecerista-home.php">Pareceristas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contato.php">Contato</a>
          </li>
        </ul>
      </div>

      <div class="btn-group">
        <button type="button" class="btn px-4">
          <img src="https://www.searchpng.com/wp-content/uploads/2019/02/Deafult-Profile-Pitcher.png" width="40px" height="40px">
        </button>
        <button type="button" class="btn dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="10,20">

        </button>
        <div class="dropdown-menu" class="card" aria-labelledby="dropdownMenuOffset">
          <div >
            <img src="https://www.searchpng.com/wp-content/uploads/2019/02/Deafult-Profile-Pitcher.png"  width="70px" height="70px"  class="card-img-center" alt="..." >
            <div class="card-body ">
              <h5 class="card-title">Seus Dados</h5>
              <p class="card-text">Nome Sobrenome</p>
            </div>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="./inscrito-home.php">Editar dados</a>
          </div>
        </div>

    </nav>
  </header>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


</body>

</html>
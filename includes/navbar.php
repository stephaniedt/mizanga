<nav class="navbar navbar-expand-lg navbar-light bg-white">
<!-- 26/12 Cris não conseguiu fazer fixed-top direito -->
  <a class="navbar-brand" href="#"> <h2 class="text-primary"> Mizanga</h2> </a>
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
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Área do parecerista
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="./parecerista-home.php">Página inicial</a>
          <a class="dropdown-item" href="./parecerista-avaliar-trabalho.php">Avaliar trabalhos</a>
          <a class="dropdown-item" href="./#">xyz</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contato.php">Contato</a>
      </li>
    </ul>

    <div class="btn-group">
        <div type="" class="px-4">
          <img src="https://www.searchpng.com/wp-content/uploads/2019/02/Deafult-Profile-Pitcher.png" width="40px" height="40px">
        </div>
        <button type="button" class="btn dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="10,20">

        </button>
        <div class="dropdown-menu  dropdown-menu-right" class="card" aria-labelledby="dropdownMenuOffset">
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




  </div>
</nav>
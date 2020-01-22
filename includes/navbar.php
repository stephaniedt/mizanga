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
      <li class="nav-item">
        <a class="nav-link" href="parecerista-home.php">Pareceristas</a>
      </li>
    </ul>
  </div>
</nav>
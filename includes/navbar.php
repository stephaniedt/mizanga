<nav class="navbar navbar-expand-lg navbar-light bg-white">
  <!-- 26/12 Cris não conseguiu fazer fixed-top direito -->
  <a class="navbar-brand" href="#">
    <h2 class="text-primary"> Mizanga</h2>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse " id="navbarNav">
    <!-- início navbar antes do login -->
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="./home.php">Início</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="./instrucoes-inscricao.php"> Faça sua inscrição</a>
      </li>
      <!-- fim navbar antes do login -->

      <!-- INÍCIO navbar de ADMIN -->
      <li class="nav-item">
        <a class="nav-link" href="./admin-tabs.php"> Área do admin </a>
      </li>
      <!-- fim navbar de ADMIN -->

      <!-- início navbar INSCRITO -->
      <li class="nav-item">
        <a class="nav-link" href="./inscrito-tabs.php"> Área do inscrito </a>
      </li>
      <!-- FIM navbar INSCRITO -->

      <!-- início navbar PARECERISTA -->
      <li class="nav-item">
        <a class="nav-link" href="./parecerista-tabs.php"> Área do parecerista </a>
      </li>
      <!-- FIM navbar PARECERISTA -->


      <li class="nav-item">
        <a class="nav-link" href="contato.php">Contato</a>
      </li>


    </ul>

    <!-- BUTTON Não está funcionando :(  -->
    <a class="btn btn-primary nav-link rounded-right" href="./login.php">LOGIN</a>


    <!-- início dropdown do perfil do usuário *** STE, NÃO ESTÁ RESPONSIVO, NÃO É UM PROBLEMA MAS SÓ AVISANDO-->

    <div class="btn-group">

      <!-- parte de fora -->
      <div type="" class="px-4">
        <img src="https://www.searchpng.com/wp-content/uploads/2019/02/Deafult-Profile-Pitcher.png" width="40px" height="40px">
      </div>
      <button type="button" class="btn dropdown-toggle" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-offset="10,20">
      </button>
      <!-- parte de dentro (dropdown) -->
      <div class="dropdown-menu  dropdown-menu-right" class="card" aria-labelledby="dropdownMenuOffset">
        <div>
          <img src="https://www.searchpng.com/wp-content/uploads/2019/02/Deafult-Profile-Pitcher.png" width="70px" height="70px" class="card-img-center" alt="...">
          <div class="card-body ">
            <h5 class="card-title">Seus Dados</h5>
            <p class="card-text">Nome Sobrenome</p>
          </div>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="./inscrito-home.php">Editar dados</a>
        </div>
      </div>
      <!-- fim dropdown do perfil do usuário -->

    </div>
</nav>
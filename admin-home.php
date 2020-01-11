<!DOCTYPE html>
<html lang="en">
<?php require('./includes/head.php'); ?>

<body>

  <div class="sticky-top">
    <?php require('./includes/navbar.php'); ?>
  </div>


  <!-- início div container -->
  <div class="container">

    <!-- Início Configurações -->
    <div>
      <h1 class="display-3 text-center">1º Encontro das mizangueiras</h1>
      <p class="lead text-center">de 28/10/2019 a 28/04/2020</p>
      <p class="text-center">Veja como está o andamento das inscrições!</p>
      <hr class="my-3">
    </div>

    <!-- início card deck -->
    <div class="card-deck">
      <div class="card">
        <img src="./img/mizanga3.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Pareceristas</h5>
          <p class="card-text">Acompanhe o andamento dos pareceres e do cadastro de pareceristas.</p>
          <a class="card-title" href="pareceristas.php"> <button type="button" class="btn btn-outline-primary">Configurar pareceristas</button> </a>
        </div>
        <div class="card-footer">
          <small class="text-muted">Atualizado há 1 minuto</small>
        </div>
      </div>
      <div class="card">
        <img src="./img/mizanga2.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Trabalhos</h5>
          <p class="card-text">Veja os trabalhos inscritos em cada modalidade.</p>
          <a class="card-title" href="trabalhos.php"> <button type="button" class="btn btn-outline-primary">Configurar trabalhos</button> </a>
        </div>
        <div class="card-footer">
          <small class="text-muted">Atualizado há 7 dias</small>
        </div>
      </div>
      <div class="card">
        <img src="./img/mizanga1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Participantes</h5>
          <p class="card-text">Quer saber quantas pessoas já se inscreveram? Clique aqui.</p>
          <a class="card-title" href="participantes.php"> <button type="button" class="btn btn-outline-primary">Configurar participantes</button> </a>
        </div>
        <div class="card-footer">
          <small class="text-muted">Atualizado há 3 minutos</small>
        </div>
      </div>
    </div>
    <!-- fim card deck -->
    <!-- Fim Configurações -->



  </div>
  <!-- fim div container -->



  <div>
    <?php require('./includes/footer.php'); ?>
    <?php require('./includes/script.php'); ?>
  </div>

</body>

</html>
<!DOCTYPE html>
<html lang="en">
<?php require('./includes/head.php'); ?>
<body>
<!-- navbar -->
  <div class="sticky-top">
    <div>
      <?php require('./includes/navbar.php'); ?>
    </div>
  </div>
   
<!-- início divona container -->
  <div class="container">
    <!-- Início do menu das tabs ATENÇÃO: os IDs do menu e do conteúdo tem que ser iguais-->
    <nav>
      <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Início</a>
        <a class="nav-item nav-link" id="nav-avaliar-trabalho-tab" data-toggle="tab" href="#nav-avaliar-trabalho" role="tab" aria-controls="nav-avaliar-trabalho" aria-selected="false">Avaliar trabalhos</a>
      </div>
    </nav>
    <!-- fim do menu das tabs -->


    <!-- início do conteúdo das tabs ATENÇÃO: os IDs do menu e do conteúdo tem que ser iguais -->
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
        <?php require('parecerista-home.php'); ?>
      </div>
      <div class="tab-pane fade" id="nav-avaliar-trabalho" role="tabpanel" aria-labelledby="nav-avaliar-trabalho-tab">
        <?php require('parecerista-avaliar-trabalho.php'); ?>
      </div>
    </div>
    <!-- fim do conteúdo das tabs -->

  <!-- fim da divona container -->
  </div>
  
<!-- scripts e footer -->
  <div>
    <?php require('./includes/footer.php'); ?>
    <?php require('./includes/script.php'); ?>
  </div>

</body>
</html>
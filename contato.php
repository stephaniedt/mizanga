<!DOCTYPE html>
<html lang="pt-BR">

<?php require('./includes/head.php'); ?>

<body>

<div>
    <?php require('./includes/navbar.php'); ?>
  </div>
  <div class="container">
    <div class="mb-1 pt-1">
      <h4 class="display-3">Contato</h4>
      <p class="lead font-italic"></p>
    </div>
    <form class="w-50 ml-5">
     <div>   
         <label for="inlineFormInputName">Nome</label>
    <input class="form-control" type="text" placeholder="">
     </div>
    <div class="form-group">
    <label for="exampleInputEmail1">E-mail</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Assunto</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Inscrição</option>
      <option>Dúvidas sobre trabalhos</option>
      <option>Outros</option>
    </select>
    <div class="form-group">
    <label for="exampleFormControlTextarea1"></label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
    
    </div>


  <div>
    <?php require('./includes/footer.php'); ?>
    <?php require('./includes/script.php'); ?>
  </div>
</body>
</html>
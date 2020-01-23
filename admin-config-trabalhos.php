<!DOCTYPE html>
<html lang="en">
<?php require('./includes/head.php'); ?>

<body>


  <div class="sticky-top">
    <?php require('./includes/navbar.php'); ?>
  </div>

  <div class="container">
    <!-- início config -->
    <!-- início Cabeçalho -->
    <div class="mb-1 pt-1">
      <h4 class="display-3">Trabalhos</h4>
      <p class="lead font-italic"></p>
    </div>
    <!-- fim Cabeçalho -->

    <!-- início modalidades criadas -->
    <div class="table-responsive">
      <table class="table table-bordered">
        <thead class="thead-light text-center">
          <tr>
            <th scope="col" style="width: 50%">Modalidade</th>
            <th scope="col">Início</th>
            <th scope="col">Fim</th>
            <th scope="col">carta de aceite</th>
            <th scope="col">Editar/Excluir</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td scope="row">Pôster</td>
            <td scope="row">29/01/2020</td>
            <td scope="row">30/10/2020</td>
            <td class="text-center">
              <input class="btn btn-info" type="submit" value="Enviar">
            </td>
            <td class="text-center">
              <a href="#">
                <i class="mr-2 material-icons text-info">edit</i>
              </a>
              <a href="#">
                <i class="ml-2 material-icons text-info">delete</i>
              </a>
            </td>
        </tbody>
      </table>
    </div>
    <!-- fim modalidades criadas -->

    <!-- início Cabeçalho2 -->
    <div class="container mb-1 pt-1 text-white bg-info">
      <h4>Modalidades criadas</h4>
      <p class="lead font-italic"> Insira as regras para envio dos trabalhos (configuração das modalidades). </p>
    </div>
    <!-- fim Cabeçalho2 -->

    <!-- Início Inserir modalidade -->
    <div>

      <form class="needs-validation">
        <div class="form-row">

          <div class="form-group col-md-5">
            <label for="validationTooltip01">Modalidade</label>
            <input type="text" class="form-control" id="validationTooltip01" placeholder="Escolha um nome" required>
          </div>

          <div class="form-group col-md-3">
            <label for="validationTooltip04">Início das inscrições</label>
            <input type="datetime-local" class="form-control" id="validationTooltip04" placeholder="dd/mm/aaaa" required>
          </div>

          <div class="form-group col-md-3">
            <label for="validationTooltip05">Fim das inscrições</label>
            <input type="datetime-local" class="form-control" id="validationTooltip05" placeholder="dd/mm/aaaa" required>
          </div>

          <div for="validationTooltip06" class="form-group col-md-1" data-toggle="tooltip" data-placement="right" title="Sem limite? Deixe em branco">
            <label>coautores</label>
            <input type="number" class="form-control" id="validationTooltip06">
          </div>

        </div>

        <div class="form-group">
          <div class="form-row">
            <div class="col-md-6">
              <h5>Configurar título</h5>
            </div>
            <div class="col-md-6">
              <h5> Configurar resumo</h5>
            </div>
            <div class="col-3">
              <label for="exampleFormControlTextarea1">Mínimo de caracteres</label>
              <input class="form-control" type="number" id="exampleFormControlTextarea1" placeholder="inserir número">
            </div>
            <div div class="col-3">
              <label for="exampleFormControlTextarea2">Máximo de caracteres</label>
              <input class="form-control" type="number" id="exampleFormControlTextarea2" placeholder="inserir número">
            </div>
            <div class="col-3">
              <label for="exampleFormControlTextarea1">Mínimo de caracteres</label>
              <input class="form-control" type="number" id="exampleFormControlTextarea1" placeholder="inserir número">
            </div>
            <div div class="col-3">
              <label for="exampleFormControlTextarea2">Máximo de caracteres</label>
              <input class="form-control" type="number" id="exampleFormControlTextarea2" placeholder="inserir número">
            </div>
          </div>

        </div>
        <div class="row align-items-end">
          <div class="col-md-12">
            <label for="exampleFormControlTextarea1">Texto de instrução aos autores</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
        </div>
        <div class="my-4">
          <button class="btn btn-info" type="submit" style="width:120px">Criar</button>
        </div>

      </form>
    </div>
    <!-- fim Inserir modalidade -->


    <!-- fim config -->
  </div>
  <div>
    <?php require('./includes/footer.php'); ?>
    <?php require('./includes/script.php'); ?>
  </div>

</body>

</html>
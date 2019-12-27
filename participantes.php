<!DOCTYPE html>
<html lang="en">
<?php require('./includes/head.php'); ?>
<body>

  <div class="container-fluid">
    <div>
      <?php require('./includes/navbar.php'); ?>
    </div> 
  </div>
    <div class="container">
        <!-- início config -->
        <!-- Cabeçalho -->
        <div class="container mb-1 pt-1 text-white bg-primary">
                <h3 class="display-5">Configurar participantes</h3>
                <p class="lead font-italic">Insira as principais informações dos participantes, modalidades, valores e prazos de inscrição.</p>
        </div>
        <!-- Início Inserir modalidade -->
        <div class="py-3">
        <form class="needs-validation" novalidate>
          <div class="form-row">
            <div class="col-md-3 mb-3">
              <label for="validationTooltip01">Identificação</label>
              <input type="text" class="form-control" id="validationTooltip01" value="Escolha um nome" required>
              <div class="valid-tooltip">
                Bom!
              </div>
            </div>
            <div class="col-md-2 mb-3">
              <label for="validationTooltip02">Tipo</label>
              <select class="custom-select" id="validationTooltip02" required>
                <option selected disabled value="">Escolher...</option>
                <option>associado</option>
                <option>não associado</option>
                <option>outro</option>
              </select>
            </div>
            <div class="col-md-2 mb-3">
              <label for="validationTooltip03">Prazo</label>
              <select class="custom-select" id="validationTooltip03" required>
                <option selected disabled value="">Escolher...</option>
                <option>Prazo1</option>
                <option>No local</option>
              </select>
            </div>
            <div class="col-md-2 mb-3">
              <label for="validationTooltip04">Valor</label>
              <input type="text" class="form-control" id="validationTooltip04" value="00,00" required>
              <div class="valid-tooltip">
                Bom!
              </div>
            </div>
            <div class="col-md-2">
              <label for="validationTooltip05"> Anexar comprovante?</label>
              <div class="custom-control custom-radio custom-control-inline pt-2">
                <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                <label class="custom-control-label" for="customRadioInline1">Sim</label>
              </div>
              <div class="custom-control custom-radio custom-control-inline pt-2"">
                <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                <label class="custom-control-label" for="customRadioInline2">Não</label>
              </div>
            </div>
          </div>
          <button class="btn btn-primary" type="submit">Submit form</button>
        </form>
        </div>
        <!-- fim Inserir modalidade -->
        <!-- início modalidades criadas -->
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead class="thead-light text-center">
              <tr>
                <th scope="col">Identificação</th>
                <th scope="col">Tipo</th>
                <th scope="col">Prazo de inscrição</th>
                <th scope="col">Valor</th>
                <th scope="col"> Anexo</th>
                <th scope="col">Editar/Excluir</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Estudante</th>
                <td>associado</td>
                <td>dd/mm/aaaa</td>
                <td>R$00,00</td>
                <td>Sim</td>
                <td class="text-center">
                  <i class="mr-2 material-icons">edit</i>
                  <i class="ml-2 material-icons">delete</i>
                </td>
            </tbody>
          </table>
        </div>
        <!-- início modalidades criadas -->
        <!-- fim config -->
    </div>
  <div>
    <?php require('./includes/footer.php'); ?>
    <?php require('./includes/script.php'); ?>
  </div>

</body>
</html>
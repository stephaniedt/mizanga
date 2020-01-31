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
  <div class="row">
  <div class="col-3">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>






      <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
      <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
      <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
    </div>
  </div>
  <div class="col-9">
    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
 
      
      </div>
      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
      <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
      <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
    </div>
  </div>
</div>
  </div>
  
<!-- início div container -->
    <div class="container">
    <nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>
    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
  <div class="container">
            <!-- início config -->
            <!-- Cabeçalho1 -->
            <div class="mb-1 pt-1">
              <h1 class="display-3">Participação</h1>
              <p class="lead font-italic"> </p>
            </div>
            <!-- fim Cabeçalho1 -->

            <!-- início modalidades criadas -->
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead class="thead-light text-center">
                  <tr>
                    <th scope="col" style="width:50%">Identificação</th>
                    <th scope="col">Início</th>
                    <th scope="col">Fim</th>
                    <th scope="col">Valor</th>
                    <th scope="col">Anexo</th>
                    <th scope="col">Editar/Excluir</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">Estudante</th>
                    <td>dd/mm/aaaa</td>
                    <td>dd/mm/aaaa</td>
                    <td>R$00,00</td>
                    <td>Sim</td>
                    <td class="text-center">
                      <a href="#">
                        <i class="mr-2 material-icons">edit</i>
                      </a>
                      <a href="#">
                        <i class="ml-2 material-icons">delete</i>
                      </a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <!-- fim modalidades criadas -->

            <!-- Cabeçalho 2 -->
            <div class=" pl-3 mt-3 mb-1 pt-1 text-white bg-primary">
              <h4>Configurar participantes</h4>
              <p class="lead font-italic">Insira as principais informações dos participantes, modalidades, valores e prazos de inscrição.</p>
            </div>
            <!-- fim cabeçalho 2 -->
            <!-- Início Inserir modalidade -->
            <div class="py-3">
              <form class="needs-validation" novalidate>
                <div class="form-row">
                  <div class="col-md-6">
                    <label class="font-weight-bold" for="validationTooltip01">Identificação</label>
                    <input type="text" class="form-control" id="validationTooltip01" placeholder="Escolha um nome" required>
                  </div>

                  <div class="col-md-2">
                    <label class="font-weight-bold" for="validationTooltip04">Início das inscrições</label>
                    <input type="date" class="form-control" id="validationTooltip04" placeholder="dd/mm/aaaa" required>
                  </div>

                  <div class="col-md-2">
                    <label class="font-weight-bold" for="validationTooltip05">Fim das inscrições</label>
                    <input type="date" class="form-control" id="validationTooltip05" placeholder="dd/mm/aaaa" required>
                  </div>

                  <div class="col-md-2">
                    <label class="font-weight-bold" for="validationTooltip05"> Anexar comprovante?</label>
                    <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input">
                      <label class="custom-control-label" for="customRadioInline1">Sim</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                      <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input">
                      <label class="custom-control-label" for="customRadioInline2">Não</label>
                    </div>
                  </div>
                </div>

                <div class="my-4">
                  <button class="btn btn-primary" type="submit" style="width:120px">Criar</button>
                </div>
              </form>
            </div>
            <!-- fim Inserir modalidade -->
            <!-- fim config -->
          </div>
  
  
  </div>
  <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">...</div>
  <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">...</div>
</div>

    </div>
<!-- fim div container -->
  


  <div>
    <?php require('./includes/footer.php'); ?>
    <?php require('./includes/script.php'); ?>
  </div>

</body>
</html>
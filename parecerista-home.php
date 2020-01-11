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
        <div>
            <h1 class="display-2 mb-1">Área do parecerista</h1>
            <a href="./link-instrucoes-avaliadores.php" target="_blank" class="d-block">Instruções aos avaliadores</a>
            <!-- add JS para abrir nova pagina pop-up -->
            <a href="#" class="d-block">Exportar resultados para Excel</a>
        </div>
        <hr class="my-3">
        <h5> Trabalhos pendentes </h5>
        <!-- add PHP para popular campos de trabalhos -->
        <form>
            <div class="form-row">
                <div class="col">
                    <label for="codigo-trabalho">Código do trabalho</label>
                    <input type="text" class="form-control" id="codigo-trabalho"placeholder="codigo do trabalho">
                </div>
                <div class="col">
                    <label for="nome-trabalho">Título do trabalho</label>
                    <input type="text" class="form-control" id="nome-trabalho" placeholder="nome do trabalho">
                </div>
                <div class="col align-self-end"> <a href="#">Visualizar trabalho</a></div>
            </div>
        </form>
        <hr class="my-3">
        <h5> Trabalhos aprovados </h5>
        <form>
            <div class="form-row">
                <div class="col">
                    <label for="codigo-trabalho">Código do trabalho</label>
                    <input type="text" class="form-control" id="codigo-trabalho"placeholder="codigo do trabalho">
                </div>
                <div class="col">
                    <label for="nome-trabalho">Título do trabalho</label>
                    <input type="text" class="form-control" id="nome-trabalho" placeholder="nome do trabalho">
                </div>
                <div class="col align-self-end"> <a href="#">Visualizar trabalho</a></div>
            </div>
        </form>
        <hr class="my-3">
        <h5> Trabalhos reprovados </h5>
        <form>
            <div class="form-row">
                <div class="col">
                    <label for="codigo-trabalho">Código do trabalho</label>
                    <input type="text" class="form-control" id="codigo-trabalho"placeholder="codigo do trabalho">
                </div>
                <div class="col">
                    <label for="nome-trabalho">Título do trabalho</label>
                    <input type="text" class="form-control" id="nome-trabalho" placeholder="nome do trabalho">
                </div>
                <div class="col align-self-end"> <a href="#">Visualizar trabalho</a></div>
            </div>
        </form>
        <hr class="my-3">
    </div>
    
  
  


    <div>
        <?php require('./includes/footer.php'); ?>
        <?php require('./includes/script.php'); ?>
    </div>
</body>
</html>
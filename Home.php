<!DOCTYPE html>
<html lang="en">
<?php require('./includes/head.php'); ?>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css?family=Lato&display=swap"
      rel="stylesheet"
    />
    
  </head>

<body>

  <div class="container-fluid">
    <div>
      <?php require('./includes/navbar.php'); ?>
    </div> 
  </div>
   
  <main class="container">

<!-- início config -->

<!-- Banner --> 
<body>
    
<style>
        body{
            margin: 0;
            padding: 0;
        }
        #banner{
            background-color: #721121;
            width: 100%;
            height: 50%;
        }
        #texto{
            color: white; 
            font-size: 80px;
            Margin:30px;
    
        }
        article{
        width: calc(100% - 300px);
        display: flex;
        
        }
        
        

        .sobre{
            text-align:center;
        }
        
        .margem {
    background: #721121;
    color: #721121;
    padding: 5px;
    }

    .margem2{
    background: #721121;
    color: #721121;
    padding: 1px;
    }
   
   .contador{
    width: 100%;
    height: 50%;
    border: 1px solid grey;
    margin: 30px;
   }

   .contador2{
    display: flex;
    align-items: center;
    justify-content: center;
   }

   

   .info{
    border-top: 3px solid #721121;
    padding: 10px;
    margin: 10px;
   }
            
        
    </style>


    <div id="banner">
        <p id="texto">XXI CONGRESSO</p>
        <p id="texto">NACIONAL XXXXX</p>

        <div class="acoes">
            <i class="material-icons"> room
                </i> PUC-SP

             <i class="material-icons"> today
                </i> 16 a 19 de novembro 2020
          </div>
    </div>
    
		
<!-- Contador -->  
<div class="contador">
   <div class="contador2">
   <iframe src="http://free.timeanddate.com/countdown/i73ylhfn/n233/cf12/cm0/cu4/ct0/cs0/ca0/cr0/ss0/cac000/cpc000/pcfff/tcfff/fs100/szw500/szh210/tatTEMPO%20PARA%20O%20FINAL%20DAS%20INSCRI%C3%87%C3%95ES/tac000/tpc000/mac000/mpc000/iso2020-11-16T00:00:00" allowTransparency="true" frameborder="0" width="553" height="105"></iframe>
  </div>
</div>


  <div class="margem2">
</div>
<!-- Sobre o Congresso --> 
<div>
    <H1 class="sobre">Sobre o Congresso Nacional XXXXXX</H1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, nam! Rem perferendis vitae ex nihil, distinctio magnam cum alias amet maiores consequatur deserunt neque, possimus, dolore a nam unde hicLorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, nam! Rem perferendis vitae ex nihil, distinctio magnam cum alias amet maiores consequatur deserunt neque, possimus, dolore a nam unde hic.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, nam! Rem perferendis vitae ex nihil, distinctio magnam cum alias amet maiores consequatur deserunt neque, possimus, dolore a nam unde hic.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, nam! Rem perferendis vitae ex nihil, distinctio magnam cum alias amet maiores consequatur deserunt neque, possimus, dolore a nam unde hic.</p>
</div>

<div class="margem">
</div>
<!-- Informacoes e datas -->  
<article>

          
        <div class="info">
          <h2>Local</h2>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id earum cumque magni aspernatur voluptatum velit, iste quisquam. Voluptatem vero, quos corrupti harum omnis, facere maxime culpa temporibus excepturi voluptates perferendis.</p>
          <div class="acoes">
           <button name="button">Ver mais</button>
          </div>
        </div>
        
        <div class="info">
          <h2>Cronograma</h2>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id earum cumque magni aspernatur voluptatum velit, iste quisquam. Voluptatem vero, quos corrupti harum omnis, facere maxime culpa temporibus excepturi voluptates perferendis.</p>
          <div class="acoes">
           <button name="button">Ver mais</button>
          </div>
        </div>

        <div class="info">
          <h2>Palestrantes</h2>
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Id earum cumque magni aspernatur voluptatum velit, iste quisquam. Voluptatem vero, quos corrupti harum omnis, facere maxime culpa temporibus excepturi voluptates perferendis.</p>
          <div class="acoes">
           <button name="button">Ver mais</button>
          </div>
        </div>
    </article>

	
    <div>
    <?php require('./includes/footer.php'); ?>
    <?php require('./includes/script.php'); ?>
  </div> 
</body>
</html>
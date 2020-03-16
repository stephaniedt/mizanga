<!DOCTYPE html>
<html lang="pt-BR">
<?php require('./includes/head.php'); ?>

<body>
  
  <!-- Titulo -->
  <div>
    <div class="mb-1 pt-1">
      <h4 class="display-3">Avaliar Trabalho</h4>
      <p class="lead font-italic"></p>
    </div>

    <!-- Inicio-->
    <div>
      <div>
        <p><strong>Lorem ipsum dolor sit amet consectet</strong></p>
      </div>
      <div>
        <p>Código do trabalho: XXX-XXX</p>
      </div>
      <div>
        <p>Data de submissão: dd/mm/aaaa - hh:min</p>
      </div>
      <div></div>
    </div>
    <!-- Resumo -->

    <form>
      <div class="form-group mt-4">
        <label for="exampleFormControlTextarea1">Resumo</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis maiores voluptatum, nihil ducimus fuga id quibusdam. Quam repellat, aliquam ea suscipit aperiam, impedit temporibus ad itaque vitae architecto inventore reprehenderit.
        Sint est veniam enim commodi voluptates reiciendis quis porro quisquam assumenda, sit minus delectus corrupti eaque officia possimus ut doloribus id iste veritatis non maiores asperiores! Minima eius similique id.
        In, provident voluptas. Ab quasi autem placeat modi fuga sint, cum ipsa in aspernatur vel, quod error et tenetur rem, molestias sunt dignissimos voluptatibus est facere ex blanditiis! Magnam, debitis.
        Voluptatum cumque ipsum earum quas? Assumenda fuga ullam cum laborum saepe dolore placeat reprehenderit. Reiciendis eveniet a, quos, nostrum qui rem tempore fugit ratione beatae perferendis enim officia! Rem, unde! Dolores minima nulla soluta cupiditate. Odio consequatur ipsam et nobis dicta sequi architecto rem consectetur dolore voluptatem error maxime tenetur ab atque, dignissimos impedit quia, unde voluptates magni? Assumenda, libero.
        </textarea>
      </div>
    </form>
    <div>
      <div>
        <p><strong>Palavras-chave: Lorem ipsum dolor sit amet consectet</strong> </p>
      </div>
      <div>
        <p><strong>1° Opção de Grupo de Trabalho:</strong> Lorem ipsum dolor sit amet consectet</p>
      </div>
      <div>
        <p><strong>2° Opção de Grupo de Trabalho:</strong> Lorem ipsum dolor sit amet consectet</p>
      </div>
      <div>
        <p><strong>3° Opção de Grupo de Trabalho:</strong> Lorem ipsum dolor sit amet consectet</p>
      </div>
    </div>
    <form>
      <p>Avaliar Trabalho</p>
      <select class="form-control mb-4">
        <option selected disabled>Escolha...</option>
        <option>Aprovado</option>
        <option>Recusado</option>
        <option>Aprovado com pôster</option>
        <option>Encaminhado para Opção 2° ou 3° de GT</option>
      </select>
    </form>
    <div></div>
    <!--Add arquivo -->
    <form>
      <p>Incluir Parecer</p>
      <div class="custom-file mb-4">
        <input type="file" class="custom-file-input" id="customFile">
        <label class="custom-file-label" for="customFile"></label>
      </div>
    </form>
    <div class="my-4">
      <button type="submit" class="btn btn-primary" style="width: 10%">Enviar</button>
      <button type="button" class="btn btn-primary" style="width: 10%">Voltar</button>
    </div>
  </div>
  
</body>

</html>
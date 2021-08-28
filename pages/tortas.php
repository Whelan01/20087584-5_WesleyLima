<h2 class="h2all">Torta</h2>

  <div class="main">
    <aside class="texto">
    <?php echo $produtos["bolo"]["descricao"]?>
    </aside>

     <div>
       <img class="img-prod" src="./imagens/<?php echo $produtos["torta"]["img"];?>"  alt="imagem_de_bolos" style="width: 270px;">
       <div class="botao-valor">R$<?php echo $produtos["torta"]["preco"]?></div>
       <div class="botao-valor"><button  class="comprar">Comprar</button></div>
     </div>
  </div>
</body>
</html>
<h1>Productos destacados</h1>
  <?php while($prod = $productos->fetch_object()): ?>
            <div class="product">
            <a href="<?=BASE_URL;?>/producto/view&id=<?=$prod->id;?>">
            <img src="<?=BASE_URL?>/uploads/images/<?=$prod->imagen?>"/>
            <h2><?=$prod->nombre;?></h1></a>
            <p><?=$prod->precio;?></p>
            <a href="#" class="button">Comprar</a>
            </div>
<?php endwhile; ?>
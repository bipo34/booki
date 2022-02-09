<a href="#" class="card card-column">
    <figure>
        <img src="<?php echo $op['img'];?>" alt="">
    </figure>
    <div class="product-detail">
        <h3><?php echo $op['name'];?></h3>
        <p>Nuit à partir de <span class="price"><?php echo $op['price'];?>€</span></p>
        <ul class="list-rate rate-<?php echo $op['rate'];?>">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </ul>
    </div>
</a>
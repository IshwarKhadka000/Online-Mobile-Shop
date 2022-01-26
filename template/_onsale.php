<!-- Start On Sale-->
<?php
    $product_shuffle = $product->getOnsale();
    shuffle($product_shuffle);
?>


<section id="on-sale">
    <div class="container">
        <h4 class="font-rubik font-size-20">On Sale</h4>
        <div class="grid">
            <?php
                foreach ($product_shuffle as $item) {?>
            
            <div class="grid-item border">
                <div class="item py-2" style="width:220px;">
                    <div class="product font-rale">
                        <a href="product.php?product_id=<?php echo $item['id'];?>"><img src="<?php echo $item['image'] ??"./assets/products/default.png";?>" alt="" class="img-fluid" style="height:200px; width:auto;object-fit:cover;"></a>
                        <div class="text-center">
                            <h6><?php echo $item['product_name']??"Unknown";?></h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <strike><span>RS.<?php echo $item['product_price']??"0";?></span></strike><br/>
                                <span>RS.<?php echo $item['discounted_price']  ??"0";?></span>
                            </div>
                            <a href="cart.php"><button type="button" class="btn btn-warning font-size-12">Add to Cart</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>

    </div>
</section>
<!-- End On Sale -->
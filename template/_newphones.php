<!-- Start New Phones -->
<?php
    $product_shuffle = $product->getNewPhones();
    shuffle($product_shuffle);
?>



<section id="new-phones">
    <div class="container">
        <h4 class="font-rubik font-size-20">New Phones</h4>
        <hr>

        <!-- Start Owl Carousel  -->
        <div class="owl-carousel owl-theme">
        <?php
                foreach ($product_shuffle as $item) {?>
            <div class="item py-2 bg-light">
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
                            <span>RS.<?php echo $item['product_price']??"0";?></span>
                        </div>
                        <a href="cart.php?"><button type="button" class="btn btn-warning font-size-12">Add to Cart</button></a>
                    </div>
                </div>
            </div>
            <?php } ?>
            

        </div>
    </div>
</section>
<!-- End New Phones -->
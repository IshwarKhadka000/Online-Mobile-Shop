<?php 
    require 'databaseconfig.php';

    //include header.php file
    include('header.php');
?>


    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3">
                <h5>Filter products</h5>
                <hr>
                
                <h6 class="text-info">Select Brand</h6>
                <ul class="list-group">
                    <?php
                        $select_brand = "SELECT DISTINCT brand FROM product_table ORDER BY brand";
                        $result = $con->query($select_brand);
                        while($row=$result->fetch_assoc()){
                        ?>
                        <li class="list-group-item">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox"class="form-check-input product_check" value="<?= $row['brand'];?>" id="brand"><?= $row['brand'];?>
                        </label>
                            </div>
                        </li>
                        <?php }     
                        
                    ?>
                </ul>

                <h6 class="text-info">Select RAM</h6>
                <ul class="list-group">
                    <?php
                        $select_brand = "SELECT DISTINCT ram FROM product_table ORDER BY ram";
                        $result = $con->query($select_brand);
                        while($row=$result->fetch_assoc()){
                        ?>
                        <li class="list-group-item">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox"class="form-check-input product_check" value="<?= $row['ram'];?>" id="ram"><?= $row['ram'];?>GB
                        </label>
                            </div>
                        </li>
                        <?php }     
                        
                    ?>
                </ul>

                <h6 class="text-info">Select ROM</h6>
                <ul class="list-group">
                    <?php
                        $select_brand = "SELECT DISTINCT hdd FROM product_table ORDER BY hdd";
                        $result = $con->query($select_brand);
                        while($row=$result->fetch_assoc()){
                        ?>
                        <li class="list-group-item">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox"class="form-check-input product_check" value="<?= $row['hdd'];?>" id="rom"><?= $row['hdd'];?>
                        </label>
                            </div>
                        </li>
                        <?php }     
                        
                    ?>
                </ul>
                <h6 class="text-info">Select Price</h6>
                <ul class="list-group">
                    <?php
                        $select_brand = "SELECT DISTINCT product_price FROM product_table ORDER BY product_price";
                        $result = $con->query($select_brand);
                        while($row=$result->fetch_assoc()){
                        ?>
                        <li class="list-group-item">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox"class="form-check-input product_check" value="<?= $row['product_price'];?>" id="price"><?= $row['product_price'];?>
                        </label>
                            </div>
                        </li>
                        <?php }     
                        
                    ?>
                </ul>   
                <h6 class="text-info">Select Processor</h6>
                <ul class="list-group">
                    <?php
                        $select_brand = "SELECT DISTINCT processor FROM product_table ORDER BY processor";
                        $result = $con->query($select_brand);
                        while($row=$result->fetch_assoc()){
                        ?>
                        <li class="list-group-item">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox"class="form-check-input product_check" value="<?= $row['processor'];?>" id="processor"><?= $row['processor'];?>
                        </label>
                            </div>
                        </li>
                        <?php }     
                        
                    ?>
                </ul>  


                <h6 class="text-info">Select Screen-size</h6>
                <ul class="list-group">
                    <?php
                        $select_brand = "SELECT DISTINCT screen_size FROM product_table ORDER BY screen_size";
                        $result = $con->query($select_brand);
                        while($row=$result->fetch_assoc()){
                        ?>
                        <li class="list-group-item">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox"class="form-check-input product_check" value="<?= $row['screen_size'];?>" id="screen_size"><?= $row['screen_size'];?>
                                </label>
                            </div>
                        </li>
                        <?php }     
                        
                    ?>
                </ul>
                <h6 class="text-info">Select Camera</h6>
                <ul class="list-group">
                    <?php
                        $select_brand = "SELECT DISTINCT camera FROM product_table ORDER BY camera";
                        $result = $con->query($select_brand);
                        while($row=$result->fetch_assoc()){
                        ?>
                        <li class="list-group-item">
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="checkbox"class="form-check-input product_check" value="<?= $row['camera'];?>" id="camera"><?= $row['camera'];?>MP
                        </label>
                            </div>
                        </li>
                        <?php }     
                        
                    ?>
                </ul>
                
            </div>
            <div class="col-sm-9">
            <!-- Start All Products-->
                    <h5 class="text-center" id="textChange">All Products</h5>
                    <hr>
                    <div class="text-center">
                        <img src="./assets/loader/loader.gif" id="loader" width="200" alt="loading"style="display:none;">
                    </div>
                    <div class="row" id="result">
                    
                            <?php 
                            
                            $select_sql = "SELECT * FROM product_table";
                            $result = $con->query($select_sql);
                            while($row=$result->fetch_assoc()){
                            ?>
                           
                            <div class="col-sm-3 mb-3">
                                <div class="item py-2" style="width:250px;">
                                    <div class="product font-rale">
                                        <a href="product.php?product_id=<?php echo $row['id'];?>"><img src="<?php echo $row['image'] ??"./assets/products/default.png";?>" alt="" class="img-fluid" style="height:200px; width:auto;object-fit:cover;"></a>
                                        <div class="text-center">
                                        <h5><?php echo $row['product_name']??"Unknown";?></h5>
                                        <h8>By <?php echo $row['brand']??"Unknown";?></h8>
                                            <div class="rating text-warning font-size-12">
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="fas fa-star"></i></span>
                                                <span><i class="far fa-star"></i></span>
                                            </div>
                                            <div><h9>(<?php echo $row['number_of_rating']?> ratings)</h9></div>
                                            <div class="price py-2">
                                                <span>RS.<?php echo $row['product_price']??"0";?></span>
                                            </div>
                                            <a href="cart.php"><button type="button" class="btn btn-warning font-size-12">Add to Cart</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            }
                            ?>
                            
                    </div>
                    
            <!-- End All Products -->
            </div>
            
        </div>
    </div>
    </div>
    
       <?php
       //include footer.php file
    include('footer.php');
    ?>
    <!-- End main -->

    

    

    <script type="text/javascript">
        $(document).ready(function(){

            $(".product_check").click(function(){
                $("#loader").show();

                var action = 'data';
                var brand = get_filter_text('brand');
                var ram = get_filter_text('ram');
                var rom = get_filter_text('rom');
                var price = get_filter_text('price');
                var processor = get_filter_text('processor');
                var screen_size = get_filter_text('screen_size');
                var camera = get_filter_text('camera');
                $.ajax({
                    url:'action.php',
                    method:'POST',
                    data:{action:action, brand:brand, ram:ram, rom:rom, price:price, processor:processor,screen_size:screen_size, camera:camera},
                    success:function(response){
                        $("#result").html(response);
                        $("#loader").hide();
                        $("#textChange").text("Filtered Products");
                    }
                });
            });

            function get_filter_text(text_id){
                var filterData = []; 
                $('#'+text_id+':checked').each(function(){
                   filterData.push($(this).val()); 
                });
                return filterData;
            }
        });
       
    </script>

    <!-- Bootstrap core JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
    <!-- owl carousel js file -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- isotope plugin js cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js" integrity="sha512-Zq2BOxyhvnRFXu0+WE6ojpZLOU2jdnqbrM1hmVdGzyeCa1DgM3X5Q4A/Is9xA1IkbUeDd7755dNNI/PzSf2Pew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <!-- custom js file -->
    <script src="index.js"></script>

</body>

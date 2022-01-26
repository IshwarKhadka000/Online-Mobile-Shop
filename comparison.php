<?php

require 'databaseconfig.php';


//include header.php file
include('header.php');

?>

<div class="container">

    <div>
        <form method="POST">
            <table>
                <tr>
                    <td></td>
                    <td>
                        <h5>Let's Compare Mobiles</h5>
                    </td>
                    <td></td>
                </tr>
                <tr>

                    <td>
                        <select name="product1">
                            <?php
                            $select_sql = "SELECT DISTINCT product_name FROM product_table ORDER BY product_name";
                            $result = $con->query($select_sql);?>
                            <option disabled selected value> -- select a product -- </option>
                            <?php
                            while ($row = $result->fetch_assoc()) {
                            ?>
                                <option value="<?= $row['product_name'] ?>"><?= $row['product_name'] ?></option>
                            <?php } ?>
                        </select>
                    </td>
                    <td>
                        <select name="product2">
                            <?php
                            $select_sql = "SELECT DISTINCT product_name FROM product_table ORDER BY product_name";
                            $result = $con->query($select_sql);?>
                            <option disabled selected value> -- select a product -- </option>
                            <?php
                            while ($row = $result->fetch_assoc()) {
                            ?>
                                <option value="<?= $row['product_name'] ?>"><?= $row['product_name'] ?></option>
                            <?php } ?>
                        </select>
                    </td>
                    <td>
                        <input type="submit" name="compare" value="compare" class="btn btn-danger" />
                    </td>
                </tr>

            </table>
        </form>
    </div>
    
</div>
<?php
if (isset($_POST['compare'])) {
    $product1 = $_POST['product1'];
    $product2 = $_POST['product2'];

    $pr1 = $product->getProductDetails($product1);
    $pr2 = $product->getProductDetails($product2);

    foreach ($pr1 as $p1){
        foreach ($pr2 as $p2){?>

      

    
    <div class="col-12 container">
                
                
                <table class="table">
                    <tbody>
                        <tr>
                            <td></td>
                            <td>
                            <img src="<?php echo $p1['image'] ??"./assets/products/default.png";?>" alt="" class="img-fluid" style="height:200px; width:auto;object-fit:cover;">

                            </td>
                            <td>
                            <img src="<?php echo $p2['image'] ??"./assets/products/default.png";?>" alt="" class="img-fluid" style="height:200px; width:auto;object-fit:cover;">

                            </td>
                        </tr>
                        <tr>
                        <td></td>
                        <th>Rs.<?php echo $p1['discounted_price']; ?></th>
                        <th>Rs.<?php echo $p1['discounted_price']; ?></th>
                        

                        </tr>
                        <tr>
                            <th scope="col">Name:</th>
                            <th scope="col"><?php echo $p1['product_name'];?></th>
                            <th scope="col"><?php echo $p2['product_name'];?></th>
                        </tr>
                        <tr>
                            <th scope="col">Brand:</th>
                            <td scope="col"><?php echo $p1['brand'];?></td>
                            <td scope="col"><?php echo $p2['brand'];?></td>
                        </tr>
                        <tr>
                            <th scope="col">RAM:</th>
                            <td scope="col"><?php echo $p1['ram'];?>GB</td>
                            <td scope="col"><?php echo $p2['ram'];?>GB</td>
                        </tr>
                        <tr>
                            <th scope="col">Internal Storage::</th>
                            <td scope="col"><?php echo $p1['hdd'];?>GB</td>
                            <td scope="col"><?php echo $p2['hdd'];?>GB</td>
                        </tr>
                        <tr>
                            <th scope="col">Processor:</th>
                            <td scope="col"><?php echo $p1['processor'];?></td>
                            <td scope="col"><?php echo $p2['processor'];?></td>
                        </tr>
                        <tr>
                            <th scope="col">Display size:</th>
                            <td scope="col"><?php echo $p1['screen_size'];?></td>
                            <td scope="col"><?php echo $p2['screen_size'];?></td>
                        </tr>
                        <tr>
                            <th scope="col">Display type:</th>
                            <td scope="col"><?php echo $p1['display_discription'];?></td>
                            <td scope="col"><?php echo $p2['display_discription'];?></td>
                        </tr>
                        <tr>
                            <th scope="col">Battery</th>
                            <td scope="col"><?php echo $p1['battery'];?>mah</td>
                            <td scope="col"><?php echo $p2['battery'];?>mah</td>
                        </tr>
                        <tr>
                            <th scope="col">Launch year:</th>
                            <td scope="col"><?php echo $p1['launch_year'];?></td>
                            <td scope="col"><?php echo $p2['launch_year'];?></td>
                        </tr>
                        <tr>
                            <th scope="col">Front Camera</th>
                            <td scope="col"><?php echo $p1['front_camera'];?></td>
                            <td scope="col"><?php echo $p2['front_camera'];?></td>
                        </tr>
                        <tr>
                            <th scope="col">Back Camera:</th>
                            <td scope="col"><?php echo $p1['camera'];?></td>
                            <td scope="col"><?php echo $p2['camera'];?></td>
                        </tr>
                        <tr>
                            <th scope="col">Operating System:</th>
                            <td scope="col"><?php echo $p1['os'];?></td>
                            <td scope="col"><?php echo $p2['os'];?></td>
                        </tr>
                        <tr>
                            <th scope="col">Sensors</th>
                            <td scope="col"><?php 
                            if($p1['fingerprint'])
                                echo "fingerprint sensor,<br>";
                            if($p1['gyro'])
                                echo "gyro sensor,<br>";
                            if($p1['proximity'])
                                echo "proximity sensor,<br>";
                            if($p1['accelemetter'])
                                echo "accelerometer sensor,<br>";
                            if($p1['lidar'])
                                echo "lidar sensor,<br>";
                            if($p1['magnetometer'])
                                echo "magnetometer sensor,<br>";
                            if($p1['gprs'])
                                echo "gprs sensor<br>";
                            ?></td>
                            <td scope="col"><?php 
                            if($p2['fingerprint'])
                                echo "fingerprint sensor,<br>";
                            if($p2['gyro'])
                                echo "gyro sensor,<br>";
                            if($p2['proximity'])
                                echo "proximity sensor,<br>";
                            if($p2['accelemetter'])
                                echo "accelerometer sensor,<br>";
                            if($p2['lidar'])
                                echo "lidar sensor,<br>";
                            if($p2['magnetometer'])
                                echo "magnetometer sensor,<br>";
                            if($p2['gprs'])
                                echo "gprs sensor<br>";
                            ?></td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
    
    
    <?php
      }
    }
}

//include footer.php file
include('footer.php');
?>
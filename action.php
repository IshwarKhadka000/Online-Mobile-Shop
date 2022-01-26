<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<?php 

require 'databaseconfig.php';
if(isset($_POST['action'])){

    $select_sql = "SELECT * FROM  product_table WHERE brand !=''";
    if(isset($_POST['brand'])){
        $brand = implode("','", $_POST['brand']);
        $select_sql .="AND brand IN('".$brand."')";
    }
    if(isset($_POST['ram'])){
        $ram = implode("','", $_POST['ram']);
        $select_sql .="AND ram IN('".$ram."')";
    }
    if(isset($_POST['rom'])){
        $rom = implode("','", $_POST['rom']);
        $select_sql .="AND hdd IN('".$rom."')";

    }
    if(isset($_POST['price'])){
        $price = implode("','", $_POST['price']);
        $select_sql .="AND product_price IN('".$price."')";
    }
    if(isset($_POST['processor'])){
        $processor = implode("','", $_POST['processor']);
        $select_sql .="AND processor IN('".$processor."')";
    }
    if(isset($_POST['screen_size'])){
        $screen = implode("','", $_POST['screen_size']);
        $select_sql .="AND screen_size IN('".$screen."')";
    }
    if(isset($_POST['camera'])){
        $camera = implode("','", $_POST['camera']);
        $select_sql .="AND camera IN('".$camera."')";
    }
    $result = $con->query($select_sql);
    $output = '';
    if($result->num_rows>0){
        while($row=$result->fetch_assoc()){
            $output .= '<div class="col-sm-3 mb-3">
            <div class="item py-2" style="width:250px;">
                <div class="product font-rale">
                    <a href="product.php?product_id='.$row['id'].'"><img src="'.$row['image'].'" alt="" class="img-fluid" style="height:200px; width:auto;object-fit:cover;"></a>
                    <div class="text-center">
                    <h5>'.$row['product_name'].'</h5>
                    <h8>By '.$row['brand'].'</h8>
                        <div class="rating text-warning font-size-12">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>
                        </div>
                        <div><h9>('.$row['number_of_rating'].' ratings)</h9></div>
                        <div class="price py-2">
                            <span>RS.'.$row['product_price'].'</span>
                        </div>
                        <a href="cart.php"><button type="button" class="btn btn-warning font-size-12">Add to Cart</button></a>
                    </div>
                </div>
            </div>
        </div>';
        }
    }
    else{
        $output = "<h3>No Products Found!</h3>";
    }
    echo $output;
    
}

?>
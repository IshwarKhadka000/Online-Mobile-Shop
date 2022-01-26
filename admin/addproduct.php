<?php
    require 'databaseconfig.php';


    if (isset($_POST['submit'])&&isset($_FILES['image'])){
        echo "successful";
    }
    
?>
<form method="POST">
    <h1>Add New Product</h6>
    <table>
        <tr>
            <td>
                <label for="name">Name:</label>
            </td>
            <td>
                <input type="text" name="name" required/>
            </td>
        </tr>
        <tr>
            <td>
                <label for="brand">Brand:</label>
            </td>
            <td>
                <select name="brand" required/>
                    <?php
                        $select_brand = "SELECT * FROM brand ORDER BY brand_name";
                        $result = $con->query($select_brand);
                        while($row =$result->fetch_assoc()){

                            echo "<option value='".$row['brand_name']."'>".$row['brand_name']."</option>";
                        }?>
                            
                            
                        
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <label for="price">Price:</label>
            </td>
            <td>
                <input type="number" name="price" required/><span>RS</span>
            </td>
        </tr>
        <tr>
            <td>
                <label for="os">OS:</label>
            </td>
            <td>
                <input type="text" name="os" required/>
            </td>
        </tr>
        <tr>
            <td>
                <label for="processor">Processor:</label>
            </td>
            <td>
                <input type="text" name="processor" required/>
            </td>
        </tr>
        <tr>
            <td>
                <label for="camera">Main Camera:</label>
            </td>
            <td>
                <input type="number" name="camera" required/><span>MP</span>
            </td>
        </tr>
        <tr>
            <td>
                <label for="selfie">Front Camera:</label>
            </td>
            <td>
                <input type="number" name="selfie" required/>
            </td>
        </tr>
        <tr>
            <td>
                <label for="ram">RAM:</label>
            </td>
            <td>
                <input type="number" name="ram" required/><span>GB</span>
            </td>
        </tr>
        <tr>
            <td>
                <label for="rom">ROM:</label>
            </td>
            <td>
                <input type="number" name="rom" required/><span>GB</span>
            </td>
        </tr>
        <tr>
            <td>
                <label for="display">Display Size:</label>
            </td>
            <td>
                <input type="number" name="display" required/><span>inches</span>
            </td>
        </tr>
        <tr>
            <td>
                <label for="image">Image:</label>
            </td>
            <td>
                <input type="file" name="image" required/>
            </td>
        </tr>
        <tr>

        <td></td>
        <td>
            <input type="submit" name="submit" value="Add Product">
        </td>
        </tr>

    </table>
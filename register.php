<?php 
    require 'databaseconfig.php';

    if(isset($_POST['register'])){
        $name = $_POST['name'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        $password = $_POST['pass'];
        $rpass = $_POST['rpass'];
        if($password != $rpass){

            echo "password mismatch";
        }
        $select_user = "SELECT email FROM users_table WHERE email ='$email'";

        $result = $con->query($select_user);
        if(!$result){
            echo " user already exists";
        }else{
            $hashedpwd = password_hash($password,PASSWORD_DEFAULT);
            $insert_user = "INSERT INTO users_table(name,address,email,contact,password) VALUES ('$name','$address','$email','$contact','$hashedpwd')";
            $insert_result = $con->query($insert_user);
            if(!$insert_result){
                echo "registrstion failed";
            }
            else{
                echo '<script>alert("registrstion successful")</script>';
                header("Location:login.php");
            }
        }
        
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Mobile Shop</title>

    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Owl Carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous"
        referrerpolicy="no-referrer" />

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />

    <!-- CSS file -->
    <link rel="stylesheet" href="style.css">
</head>

<body >
    <section>
        <div class="row m-3 p-3">
            <div class="col-lg-6 text-center border border-dark rounded bg-light text-center">
                <h1>Sign up</h1>
                <br>
                <form  method="POST">
                    <div class="form-group  d-flex col-10 offset-1 col-lg-8 offset-lg-2 div-wrapper d-flex justify-content-center align-items-center">
                        <label class="col-sm-2 col-form-label"> Name</label>
                        <div class="col-sm-10">
                            <input type="text" name="name" class="form-control " placeholder="Enter your name" required>
                        </div>
                    </div><br>
                    <div class="form-group d-flex col-10 offset-1 col-lg-8 offset-lg-2 div-wrapper d-flex justify-content-center align-items-center ">
                        <label class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-10">
                            <input type="text" name="address" class="form-control " placeholder="Enter your Address" value required>
                        </div>
                    </div><br>
                    <div class="form-group d-flex col-10 offset-1 col-lg-8 offset-lg-2 div-wrapper d-flex justify-content-center align-items-center">
                        <label for="email" class="col-sm-2 col-form-label">Email address</label>
                        <div class="col-sm-10">
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email" required>

                        </div>
                    </div><br>
                    <div class="form-group d-flex col-10 offset-1 col-lg-8 offset-lg-2 div-wrapper d-flex justify-content-center align-items-center">
                        <label for="contact" class="col-sm-2 col-form-label">Contact Number</label>
                        <div class="col-sm-10">
                            <input type="number" name="contact" class="form-control" id="exampleInputnumber" aria-describedby="numberHelp" placeholder="Enter your Contact Number" required>
                        </div>
                    </div><br>
                    <div class="form-group d-flex col-10 offset-1 col-lg-8 offset-lg-2 div-wrapper d-flex justify-content-center align-items-center">
                        <label for="pass" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Enter your password" required>
                        </div>
                    </div><br>
                    <div class="form-group d-flex col-10 offset-1 col-lg-8 offset-lg-2 div-wrapper d-flex justify-content-center align-items-center">
                        <label for="rpass" class="col-sm-2 col-form-label">Re-enter Password</label>
                        <div class="col-sm-10">
                            <input type="password" name="rpass" class="form-control" id="exampleInputPassword1" placeholder="Enter your password again" required>
                        </div>
                    </div><br>
                    <input type="submit" name="register" class="btn btn-primary m-3 color-danger" value="Sign up"/>
                </form>
            </div>
        </div>
    </section>

</body>

</html>
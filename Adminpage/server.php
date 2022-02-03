<?php
require_once 'include/DB_Functions.php';
$db = new DB_Functions();


if (isset($_POST['submit'])) {
	
	$product_title = $_POST['product_title'];
    $numb_bathroom = $_POST['bathroom'];
    $numb_toilet = $_POST['toilet'];
    $location = $_POST['product_location'];
	$category = $_POST['category'];
	$price = $_POST['price'];
	$description = $_POST['description'];

	$image1 = $_FILES['Image1']['name'];
	$image2 = $_FILES['Image2']['name'];
	$image3 = $_FILES['Image3']['name'];
	$image4 = $_FILES['Image4']['name'];
	$image5 = $_FILES['Image5']['name'];
	$image6 = $_FILES['Image6']['name'];
	$image7 = $_FILES['Image7']['name'];


	$temp_name1 = $_FILES['Image1']['tmp_name'];
    $temp_name2 = $_FILES['Image2']['tmp_name'];
    $temp_name3 = $_FILES['Image3']['tmp_name'];
    $temp_name4 = $_FILES['Image4']['tmp_name'];
    $temp_name5 = $_FILES['Image5']['tmp_name'];
    $temp_name6 = $_FILES['Image6']['tmp_name'];
    $temp_name7 = $_FILES['Image7']['tmp_name'];

    move_uploaded_file($temp_name1,"images/product_images/$image1");
    move_uploaded_file($temp_name2,"images/product_images/$image2");
    move_uploaded_file($temp_name3,"images/product_images/$image3");
    move_uploaded_file($temp_name4,"images/product_images/$image4");
    move_uploaded_file($temp_name5,"images/product_images/$image5");
    move_uploaded_file($temp_name6,"images/product_images/$image6");
    move_uploaded_file($temp_name7,"images/product_images/$image7");

    $product = $db->storeProducts($product_title,$numb_bathroom,$numb_toilet,$image1,$image2,$image3,$image4,$image5,$image6,$image7,$location,$category,$price,$description);

}

 

session_start();

// initialising varables

$username = "";
$email    = "";
$password = "";

$errors = array();


//connect to database

$db = mysqli_connect('localhost', 'root', 'adeniyi', 'practice') OR die("could not connect to database");

if(isset($_POST['reg_user'])){

$username = mysqli_real_escape_string($db, $_POST['username']);
$email    = mysqli_real_escape_string($db, $_POST['email']);
$password_1 = mysqli_real_escape_string($db, $_POST['password_1']); 
$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

//form validation
if(empty($username)){
    array_push($errors,"Username is required");
}
if(empty($email)){
    array_push($errors,"Email is required");
}
if(empty($password_1)){
    array_push($errors,"Password is required");
}
if($password_1 != $password_2){
    array_push($errors,"Password does not match");
}


// check db for existing user with the same username
 
    $user_check_query = "SELECT * FROM users WHERE username = '$username' OR email = '$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user =mysqli_fetch_assoc($result);

    if($user){

        if($user['username'] === $username){array_push($errors, "Username already exists");}

        if($user['email'] === $email){array_push($errors, "This email id already has a registered  username");}
    }

 //register a user

    if(count($errors) == 0){
      $password = md5($password_1); // This will encrypt the password
      $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

      mysqli_query($db, $query);

      $_SESSION['username'] = $username;
      $_SESSION['success'] =  "You are now logged in"; 

      header('location: ../index.php');
    }
}

    //LOGIN USER

    if(isset($_POST['login_user'])){
        $username = mysqli_real_escape_string($db, $_POST['username_login']);
        $password    = mysqli_real_escape_string($db, $_POST['password_login']);

        // Login Validation

        if(empty($username)){
            array_push($errors, "Username is required");
        }

        if(empty($password)){
            array_push($errors,"Password is required");
        }
        
        if(count($errors) == 0){
            $passwordEnc = md5($password);
            $query = "SELECT * FROM users WHERE username ='$username' && password = '$passwordEnc'";
            $result = mysqli_query($db,$query);
                
            if (mysqli_num_rows($result)) {
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "Logged in successfully";

                header('location: ../index.php');
            }else{
                array_push($errors, "Wrong Username/Password. Please try again." );
            }
        }

    }








?>

<?php
include_once("class/DB_Config.php");
include_once("class/DB_Connection.php");


if(isset($_POST["submit"])){

    $fullnames = $_POST["full_names"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    if(!empty($fullnames)){
        if(!empty($email)) {
            if(!empty($password)){

                $con = new DB_Connection();

                $set = "email='$email'";
                $condition  = "id=3";
                $results = $con->update($set,$condition);

                var_dump($results);


            }else{
                echo 'Please make sure you enter password';
            }
        }else{
            echo 'Please make sure you enter email';
        }
    }else{
        echo 'Please make sure you enter name';
    }

}else{

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update</title>
</head>
<body>
<form method="post" action="update.php">
    <pre>Full Names    <input type="text" value="" name="full_names" /></pre>
    <pre>Email Address <input type="text" value="" name="email" /> </pre>
    <pre>Password      <input type="password" value="" name="password"/></pre>
    <input type="submit" name="submit" value="Update" />
</form>
</body>
</html>
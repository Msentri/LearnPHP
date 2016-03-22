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
                $register = new DB_Connection();

                $password = md5($password);

                $column = "fullnames,password,email";
                $values = "'$fullnames','$password','$email'";

                $insert = $register->insert("users",$column,$values);

                if($insert){
                    echo "user registered";
                }else{
                    echo "user not registered";
                }


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
    <title>Register</title>
</head>
<body>

        <form method="post" action="register.php">
            <pre>Full Names    <input type="text" value="" name="full_names" /></pre>
            <pre>Email Address <input type="text" value="" name="email" /> </pre>
            <pre>Password      <input type="password" value="" name="password"/></pre>
            <input type="submit" name="submit" value="Register" />
        </form>

</body>
</html>
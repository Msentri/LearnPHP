<?php
include_once("class/DB_Config.php");
include_once("class/DB_Connection.php");


$con = new DB_Connection();

$condition = "id='3'";
$results = $con->delete($condition);

if($results){
    echo 'yes';
}else {
    echo 'no';
}
<?php
$localhost="localhost";
$database="glasses";
$user="root";
$pass="";
try{
$konekcija=new PDO("mysql:host=$localhost;dbname=$database",$user,$pass);
$konekcija->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
//$konekcija->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
}
catch(PDOException $er){
    echo "Greska sa konekcijom:". $er.getMessage();
}





?>

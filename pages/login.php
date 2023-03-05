<?php
    if($_SERVER['REQUEST_METHOD']=="POST"){
        session_start();
    include("connection.php");
    $brGresaka;
    $odgovor="";
    $code;
    if($konekcija){
        $brGresaka=0;
            $email=$_POST['email_login'];
            $password=$_POST['password_login'];
            $email_regex="/^([a-z]{3,11}(\d)*)(\.)?([a-z]{3,11}(\d)*)\@(gmail.com|hotmail.com|yahoo.com|outlook.com)$/";
            $password_regex="/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{8,}$/";
            if(!preg_match($email_regex,$email)){
                $brGresaka++;
            }
            if(!preg_match($password_regex,$password)){
                $brGresaka++;
            }
            if($brGresaka==0){
                $kriptovani_password=md5($password);

                $upit_provera="SELECT * FROM users u INNER JOIN role r ON u.role_id=r.id WHERE email='$email' AND password='$kriptovani_password'";
                $rezultat=$konekcija->query($upit_provera)->fetch(); 
                if($rezultat){
                    $_SESSION["korisnik"]=$rezultat;
                    header("Location:../index.php");
                }   
                else{
                    echo "Nema podudaranja";
                }
            }
            else{
                echo "Ima gresaka";
            }

    }
    else{
        echo "Nema konekcije";
    }

    }

?>
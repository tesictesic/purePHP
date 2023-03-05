<?php
    include("connection.php");
    $brGresaka;
    $code=0;
    $odgovor="";

    if(isset($_POST['btn'])){
        $brGresaka=0;
        $first_name=$_POST['first_name'];
        $last_name=$_POST['last_name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $regexName ="/^[A-ZŠĐŽĆČ][a-zšđžćč]{2,15}(\s[A-ZŠĐŽĆČ][azšđžćč]{2,15})?$/";
        $regexEmail="/^([a-z]{3,11}(\d)*)(\.)?([a-z]{3,11}(\d)*)\@(gmail.com|hotmail.com|yahoo.com|outlook.com)$/";
        $regexPassword ="/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[A-Za-z\d]{8,}$/";
        if(!preg_match($regexName,$first_name)){
            $brGresaka++;
            $odgovor=["poruka"=>"First name is not good,try again"];
            $code=403;
        }
        if(!preg_match($regexName,$last_name)){
            $brGresaka++;
            $odgovor=["poruka"=>"Last name is not good,try again"];
            $code=403;
        }
        if(!preg_match($regexEmail,$email)){
            $brGresaka++;
            $odgovor=["poruka"=>"Email is not good,try again"];
            $code=403;
        }
        if(!preg_match($regexPassword,$password)){
            $brGresaka++;
            $odgovor=["poruka"=>"Password is not good try again"];
            $code=403;
        }
        $kriptovana_sifra=md5($password);
        if($brGresaka==0){
            
            if($konekcija){
               $provera="SELECT * FROM users WHERE email='$email'";
               $rezultat=$konekcija->query($provera)->fetch();
               if($rezultat){
                echo "Postoji";
               }
               else{
                $upit="INSERT INTO users(First_name,Last_name,Email,Password,role_id) VALUES (:first_name, :last_name, :email, :password, :role)";
                echo($upit);
                $role_id=2;
                $preparacija=$konekcija->prepare($upit);
                $preparacija->bindParam(":first_name",$first_name);
                $preparacija->bindParam(":last_name",$last_name);
                $preparacija->bindParam(":email",$email);
                $preparacija->bindParam(":password",$kriptovana_sifra);
                $preparacija->bindParam(":role",$role_id);
                $izvrsanaje=$preparacija->execute();
                if($izvrsanaje){
                    echo "Upisano u bazu";
                }
                else{
                    echo "Nije upisano u bazu";
                }
               }

            }
            else{
                echo "Nema konekcije sa bazom";
            }
        }
        else{
            echo "Ima gresaka";
        }
    }
?>
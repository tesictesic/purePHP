<?php session_start();
    include("connection.php");
    if($konekcija){
        if(isset($_POST['btnKlik'])){
            $checkbox_vrednosti=$_POST['checkbox'];
            $radio_vrednosti=$_POST['radio'];
            $radio_upit="SELECT id FROM poll_answers WHERE answers='$radio_vrednosti'";
            $rezultat_id=$konekcija->query($radio_upit)->fetch();
            $user=$_SESSION["korisnik"];
            $user_id=$user[0];
            $upit_za_unos="INSERT INTO user_answers(user_id,answer_id) VALUES (:user_id, :answer_id)";
            $rezultat_za_unos=$konekcija->prepare($upit_za_unos);
            $rezultat_za_unos->bindParam(":user_id",$user_id);
            $rezultat_za_unos->bindParam(":answer_id",$rezultat_id["id"]);
            $done=$rezultat_za_unos->execute();
            foreach($checkbox_vrednosti as $vrednost){
                $upit_checkbox="SELECT id FROM poll_answers WHERE answers='$vrednost'";
                $rezultat_id_chb=$konekcija->query($upit_checkbox)->fetch();
                $upit_za_unos2="INSERT INTO user_answers(user_id,answer_id) VALUES (:user_id, :answer_id)";
            $rezultat_za_unos2=$konekcija->prepare($upit_za_unos2);
            $rezultat_za_unos2->bindParam(":user_id",$user_id);
            $rezultat_za_unos2->bindParam(":answer_id",$rezultat_id_chb["id"]);
            $done2=$rezultat_za_unos2->execute();
            }
            
            echo("You have successfully sent your responses");
        }
    }

?>
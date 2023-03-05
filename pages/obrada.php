<?php
    
    include("connection.php");
if($_SERVER['REQUEST_METHOD']=="POST"){
    $brojGresaka=0;
    if(isset($_POST['Name'])){
        var_dump('setovano');
        $Full_Name=$_POST['Name'];
        $regex_Name="/^([A-ZŠĐŽĆČ][a-zšđžćč]{2,15})\s([A-ZŠĐŽĆČ][a-zšđžćč]{2,15}){0,2}$/";
        if(preg_match($regex_Name,$Full_Name)){
           var_dump("Dobro je"); 
        }
        else{
            $brojGresaka++;
        }
    }
    else{
        $brojGresaka++;
    }
    if(isset($_POST['Email'])){
        $Email=$_POST['Email'];
        $email_regex="/^([a-z]{3,11}(\d)*)(\.)?([a-z]{3,11}(\d)*)\@(gmail.com|hotmail.com|yahoo.com|outlook.com)$/";
        if(preg_match($email_regex,$Email)){
            var_dump("Dobro je");
        }
        else{
            $brojGresaka++;
        }
    }
    else{
        $brojGresaka++;
    }
    if(isset($_POST['Subject'])){
        $subject_tittle=$_POST['Subject'];
        var_dump($subject_tittle);
        echo(strlen($subject_tittle));
        if(strlen($subject_tittle)>3){
            var_dump("Dobro je");
        }
        else{
            $brojGresaka++;
        }
    }
    if(isset($_POST['textarea'])){
        $textarea_value=$_POST['textarea'];
        if(strlen($textarea_value)>5){
            var_dump("Dobro je");
        }
        else{
            $brojGresaka++;
        }
    }
    else{
        $brojGresaka++;
    }
    if($brojGresaka==0){
        echo "Nema gresaka";
        if($konekcija){
            
        $upit="INSERT INTO messages(user_name,email,user_subject,message_text) VALUES (:user_name, :email, :user_subject, :message_text)";
        $unos1=$konekcija->prepare($upit);
         $unos1->bindParam(":user_name",$Full_Name);
         $unos1->bindParam(":email",$Email);
         $unos1->bindParam(":user_subject",$subject_tittle);
         $unos1->bindParam(":message_text",$textarea_value);
         $rezultat=$unos1->execute();
            if($rezultat){
                header("Location: ../contact.php?message='You have successful sent mesage. Your message entered in database'");
            }
            else{
                header("Location: ../contact.php?error=Greska nije upisalo u bazu .");
            }
         
        }
        else{
            header("Location: ../contact.php?error=Nema konekcije sa bazom .");
        }
        
        
    }
    else{
        $brojGresaka++;
        header("Location: ../contact.php?error=Niste dobro uneli nesto.");
    }

}
else{
    header("Location: ../contact.php"); 
}


?>

  
    



<?php 
    include("connection.php");
    
    if($konekcija){
        $upit_navigacija="SELECT * FROM navigation";
        $rezultat_navigacije=$konekcija->query($upit_navigacija)->fetchAll();
        $x="<ul class='navbar-nav nav-mega mx-auto'>";
        if(isset($_SESSION["korisnik"])){
            $profil=$_SESSION["korisnik"];
            if($profil["name"] == "Administrator"){ // ako je admin prikaži sve linkove
                foreach($rezultat_navigacije as $link){
                    $x.= "<li class='nav-item'><a class='nav-link' href='".$link["href"]."'>".$link["title"]."</a></li>";
                }
            }
            elseif($profil["name"] == "Member"){ // ako je user prikaži sve linkove osim admin panela
                foreach($rezultat_navigacije as $link){
                    if($link["title"] != "Admin Panel"){
                        $x.= "<li class='nav-item'><a class='nav-link' href='".$link["href"]."'>".$link["title"]."</a></li>";
                    }
                }
        }   
        
        }
        else{ // ako nije ulogovan prikaži home, shop i contact linkove
            foreach($rezultat_navigacije as $link){
                if($link["title"] == "Home" || $link["title"] == "Shop" || $link["title"] == "About" || $link["title"] == "Contact"){
                    $x.= "<li class='nav-item'><a class='nav-link' href='".$link["href"]."'>".$link["title"]."</a></li>";
                }
            }
        }
        $x.="</ul>";
      
        echo ($x);

    }
    

?>
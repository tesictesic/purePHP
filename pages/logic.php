<?php 
    include("connection.php");
    if($konekcija){

        $upit="SELECT * FROM products";
        if(isset($_POST['brand'])){
            
            $niz=implode(",",$_POST['brand']);
           
        $upit.=" WHERE brand_id IN(".$niz.")";
        }
        if(isset($_POST['gender'])){
            $niz2=implode(",",$_POST['gender']);
            if(!empty($_POST['brand'])){
            $upit .= " AND gender_id IN(".$niz2.")";
            }
            else{
                $upit .= " WHERE gender_id IN(".$niz2.")";
            }   
        }
        if(isset($_POST['pretraga'])){
            $uneto=$_POST['pretraga'];
            if(!empty($_POST['brand']) || !empty($_POST['gender'])){
                $upit.=" AND product_name LIKE '%".$uneto."%'";
            }
            else{
                $upit.=" WHERE product_name LIKE '%".$uneto."%'";
            }
        }
       
        $rezultat=$konekcija->query($upit);

        $duzina=$rezultat->fetchAll();
        

        if(count($duzina)==0){
            echo "
            <div class='d-flex justify-content-center align-items-center pt-5 ' id='alert'>
            <h1 class='text-center text-danger'>Ops we don't have that products</h1>
            </div>
            ";
          
            die;
        }
        else{
            echo"<div class='row'>";
 
        foreach($duzina as $row){
         echo "<div class='col-md-3 product-men women_two shop-gd mt-5'>
         <div class='product-googles-info googles'>
             <div class='men-pro-item'>
                 <div class='men-thumb-item'>
                     <img src=".$row['src']." class='img-fluid' alt=".$row['alt'].">
                 </div>
                 <div class='item-info-product'>
                     <div class='info-product-price'>
                         <div class='grid_meta'>
                             <div class='product_price'>
                                 <h4>
                                     <p>".$row['product_name']."</p>
                                 </h4>
                                 <div class='grid-price mt-2'>
                                     <span class='money'>$".$row['price']."</span>
                                 </div>
                             </div>
                             <div class='more-more  pt-3 pb-3'>
                             <a href='single-page.php?product_id=".$row['id']."' class='more-info-link'>More info</a>
                             </div>
                             </div>
                     </div>
                     <button class=add-to-cart-btn data-id=".$row['id'].">Add to cart</button>
                   
                 </div>
             </div>
         </div>
     </div>";
        }
        echo"</div>";
 
        }
 
 
            
    }
 else{
    echo "Nema konekcije sa bazom";
 }
?>
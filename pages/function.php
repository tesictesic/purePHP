<?php 
    function generatePoll($poll_id, $question_number,$type) {
        include("connection.php");
        if ($konekcija) {
            $upit="SELECT `poll name` FROM `poll` WHERE `id`= " . $poll_id;
            $rezultat=$konekcija->query($upit)->fetch();
            echo "<h4>".$rezultat[0]."?</h4><br>";
            $upit2="SELECT answers FROM poll_answers WHERE poll_id=" . $poll_id;
            $rezultat2=$konekcija->query($upit2)->fetchAll();
            $br=$question_number;
            if($type=="radio"){
                foreach($rezultat2 as $row){ 
                    echo '<input type="radio" name="pitanjeradio" id="pitanje'.$br.'" value="' . $row["answers"] . '"/>';
                    echo '<label class="mx-2" for="pitanje'.$br.'">' . $row["answers"] . '</label>';
                    echo '<br/>';  
                    $br++; 
                }
            } 
            else{
                foreach($rezultat2 as $row){ 
                    echo '<input type="checkbox" name="pitanja" id="pitanje'.$br.'" value="' . $row["answers"] . '"/>';
                    echo '<label class="mx-2" for="pitanje'.$br.'">' . $row["answers"] . '</label>';
                    echo '<br/>';  
                    $br++; 
                }
            }       
        }
    }


?>
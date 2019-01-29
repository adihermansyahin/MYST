<?php
    
    if(isset($_POST['ok-proses'])){
        echo count_handshake($_POST['str']);
    }
    
    function count_handshake($x){
        $b = $x;
        $r = 0;
            for ($i=1; $i <= $x-1; $i++) { 
                $r = $r + $i;
            }
            return $r;
        }
?>
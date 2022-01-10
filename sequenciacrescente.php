<?php

    //Determine o tamanho do array colocando elementos
    $array = [0, 1, 2, 3];
    
    
    function SequenciaCrescente($b){
        $crescente = true;
        $cont = 0;
        echo "[";
        while($cont < count($b) - 1){
            if($b[$cont] >= $b[$cont+1]){
                $crescente = false;
            }
            
            echo $b[$cont] . ", ";
            $cont = $cont + 1;    
        }
        
        echo $b[$cont] . "] ";
        
        if($crescente){
            echo "true";
        } else {
            echo "false";
        }
    
    }
    
    SequenciaCrescente($array);
    
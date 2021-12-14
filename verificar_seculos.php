<?php
    
    function seculosEmAnos($s){        
        $i = ((($s-1) * 100) + 1);
        
        $f = $s * 100;
        echo "O século ".$s." inicia em ".$i." e termina em ".$f;
    }
    
    function anosEmSeculos($a){
        $s = (($a + 100) - 1) / 100;
        $s = intval($s);
        echo "O ano $a pertence ao século $s";
        
    }
    
    $seculo = 20;    
    $s = seculosEmAnos($seculo);
    
    $ano = 301;
    $a = anosEmSeculos($ano);
    
   
    
?>

<?php
// Taha Furkan Bayar
function ucgen($x){
    for ($i=0;$i<$x;$i++){
        $sayac=0;
        while ($sayac<$i){
            echo "O";
            $sayac++;
        }
        echo "</br>";
    }
}
ucgen(25);
?>

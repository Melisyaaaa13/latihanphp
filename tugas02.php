<?php
function luas_segitiga($tinggi, $alas){
    return 2 * ($alas * $tinggi);
}
//pemanggilan fungsi
$a = 3;
$b = 2;
echo "Luas segitiga $alas $tinggi = ";
echo luas_segitiga($a, $b);
?>
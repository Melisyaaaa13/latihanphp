<?php
$semua = 50000;
$makanan = 25000;
$minum = 10000;
$belanja = $semua - $makanan - $minum;
$total = $semua - $belanja;

echo "uang hari : Rp. $semua<br>";
echo "Makan : Rp. $makanan<br>";
echo "Minum : Rp. $minum<br>";
echo " Hari menghabiskan uang sebesar : Rp.$total<br>";
echo "Sisa uang hari : Rp.$belanja<br>";
if ($total >0){
    echo" dan hari  <b>hemat</b>";
}
else{
    echo "hari <b> boros </b>";
}

?>
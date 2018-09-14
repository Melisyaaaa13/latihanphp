<?php
if(isset($_POST['masuk'])){
echo "<center>Data Diri</center>";
echo "<br>";
    $nama= $_POST['nama'];
    echo "Nama :<front style=color:green>$nama</front><br>";
    $nis= $_POST['nis'];
    echo "NIS  :<front style=color:green>$nis</front><br>";
    $alamat= $_POST['alamat'];
    echo "Alamat :<front style=color:green>$alamat</front><br>";
    $jenisk= $_POST['jk'];
    echo "Jenis Kelamin :<front style=color:green>$jenisk</front><br>";
    $agama = $_POST['agama'];
    echo "Agama :<front style=color:green>$agama</front><br>";
    $sekolah= $_POST['asal'];
    echo "Sekolah :<front style=color:green>$sekolah</front><br>";
    $orang= $_POST['orang'];
    echo "Nama Orang Tua :<front style=color:green>$orang</front><br>";
    echo"<br>";
    echo"Pelajaran Yang Disukai :<br>";
    if (isset($_POST['mtk'])) {
        echo "<front style=color:green>PAI</front><br>";
        }
        if (isset($_POST['ipa'])) {
            echo "<front style=color:green>IPS</front><br>";
            }
            if (isset($_POST['ips'])) {
                echo "<front style=color:green>MTK</front><br>";
                }
                if (isset($_POST['bi'])) {
                    echo "<front style=color:green>B.INDONESIA</front><br>";
                    }
                    if (isset($_POST['pai'])) {
                        echo "<front style=color:green>PAI</front><br>";
                        }
    echo "<br>";
    $total= $_POST['nilai'];
    echo "Total Nilai Ijazah :<front style=color:green>$total</front><br>";
    $email= $_POST['email'];
    echo "Email :<front style=color:green>$email</front>";
}

?>
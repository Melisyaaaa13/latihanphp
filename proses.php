<?php
if (!isset($_POST['login'])){
    $user = $_POST['email'];
    $pass = $_POST['password'];
    if($user =="Melisya" && $pass == "maulinaz"){
        echo "<h2>Login Berhasil </h2>";
    } else
    echo"<h2>Login Gagal</h2>";
}
?>
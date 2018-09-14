<html>
    <head>
    <title>Pengelolaan Form</title>
    </head>
    <body>
         <form action="" method="post"  Name="nama" >
          Name anda : <input type "text" Name="nama"> <br>
        <input type="submit" name="input" value="input">
        </form>
    </body>
    </html>
<?php
if(!isset($_POST['input'])){
    $nama = $_POST['Nama'];
    echo "Nama Anda : <b>$nama</b>";
}
?>
<html>
<head><title>Login</title></head>
<body>
<FORM ACTION="" METHOD="POST" >
Email : <input type="text" name="Email"><br>
Password : <input type="password" name="password"><br>
<input type="submit" name="Login" value="Login">
</FORM>
</body>
</html>
<?php
if (isset($_POST['Login'])) {
    $Email = $_POST['Email'];
    $Password = $_POST['password'];
    if($Email =="Melisya" && $Password == "123"){
    echo "<h2 style=color:pink pastel> Alhamdulillah</h2>";
    } else {
    echo"<h2 style=color:gray>Tidak Bisa Masuk</h2>";
    }
}
?>
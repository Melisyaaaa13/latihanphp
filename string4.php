<?php
$str = "is your name o'reilly ?";
$str2 = addslashes($str);
$str3 = stripslashes($str2);
echo"<b>string asli</b> :$str";
echo"<br><b>addslashes()</b> :$str2";
echo"<br><b>stripslashes()</b> :$str3";
?>
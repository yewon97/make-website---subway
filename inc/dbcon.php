<?php
$dbcon = mysqli_connect("localhost", "root", "", "subway") or die("접속에 실패하였습니다.");
mysqli_set_charset($dbcon, "utf8");
?>
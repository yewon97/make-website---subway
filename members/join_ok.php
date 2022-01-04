<meta charset="utf-8">
<?php
header ("content-type:text/html; charset=utf-8");

// 이전 페이지에서 값 가져오기
$u_id = $_POST["u_id"];
$pwd = $_POST["pwd"];
// date("형식") - Y:4자리 연도, y:2자리 연도, H:0~23시간, h:1~12시간
$reg_date = date("Y-m-d");

// 값 확인
echo "아이디 : ".$u_id."<br>";
echo "비밀번호 : ".$pwd."<br>";
echo "가입일 : ".$reg_date."<br>";

include "../inc/dbcon.php";

$sql = "insert into subway_members(";
$sql .= "u_id, pwd, reg_date";
$sql .= ") values(";
$sql .= "'$u_id', '$pwd', '$reg_date'";
$sql .= ");";
echo $sql;

/* 데이터베이스에 쿼리 전송 */
mysqli_query($dbcon, $sql);


/* DB(연결) 종료 */
mysqli_close($dbcon);


/* 리디렉션 */
echo "
    <script type=\"text/javascript\">
        location.href = \"../index.php\";
    </script>
";
?>
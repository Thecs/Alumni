<html>
<body> 
<?php  
//------------ส่วนการเปิด Connection ในการติดต่อกับ MySQL ---------------- 
$hostname = "localhost"; 
$username = "alumni_new"
; $password = "warintorn_it"
; 
$dbname = "alumni_new"; 

$conn = mysql_connect( $hostname, $username, $password ); 
if ( ! $conn ) 
    die ( "เข้าสู่ฐานข้อมูลไม่ได้" ); 

mysql_select_db ( $dbname, $conn ) 
    or die ( "ไม่สามารถเลือกฐานข้อมูลได้" );
mysql_query("SET NAMES UTF8");	
?>
</body> 
</html> 

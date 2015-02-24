<?php

###### db ##########
$db_username = 'alumni_new';
$db_password = 'warintorn_it';
$db_name = 'alumni_new';
$db_host = 'localhost';
################




if(isset($_POST["username"]))
{
  //connect to database
  $connecDB = mysql_connect( $db_host, $db_username, $db_password)or die('could not connect to database');
  mysql_select_db($db_name);
  mysql_query("SET NAMES UTF8",$connecDB); 
  //received username value from registration page
  $username =  $_POST["username"]; 

  //check username in db
  $results = mysql_query("SELECT alumnus_stuid FROM alumnusstu_tb WHERE alumnus_stuid ='".$username."' ");
  
  $username_exist = mysql_num_rows(@$results); //records count
  
  //if returned value is more than 0, username is not available
  if($username_exist!=0) {
      die('&nbsp;&nbsp;ตรวจสอบข้อมูล : &nbsp;&nbsp;<img src="asset/jQuery_Username_Availability_check/imgs/not-available.png" /><span style="color:red"> มีข้อมูลของท่านแล้ว</span>');
	  die();
  }else{
      die('&nbsp;&nbsp;ตรวจสอบข้อมูล : &nbsp;&nbsp;<img src="asset/jQuery_Username_Availability_check/imgs/available.png" /> <span style="color:red"> เพิ่มข้อมูลได้</span>');
  }
}

    mysqli_close($connecDB);

?>
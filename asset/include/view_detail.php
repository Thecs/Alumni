﻿<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
<?php 
  include 'connect_db.inc.php'
?>



<link type="text/css" href="../../../css/mystyle.css')" ?>
<link type="text/css" href="../../../asset/menu/menu.css" rel="stylesheet" />
<script type="text/javascript" src="../../../asset/menu/jquery.js"></script>
<script type="text/javascript" src="../../../asset/menu/menu.js"></script>

<link rel="stylesheet" href="../../../asset/tab/jquery-ui-1.10.2/themes/base/jquery-ui.css" />
<script src="../../../asset/tab/jquery-ui-1.10.2/jquery-1.9.1.js"></script>
<script src="../../../asset/tab/jquery-ui-1.10.2/ui/jquery-ui.js"></script>
<link rel="stylesheet" href="../../../asset/tab/jquery-ui-1.10.2/themes/base/minified/jquery.ui.tabs.min.css" />
<link rel="stylesheet" href="../../../css/mystyle.css" />

<link href="../../../asset/bootstrap/css/bootstrap.min.css" rel="stylesheet">



<link rel="stylesheet" href="../../../asset/bootstraps/css/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="../../../asset/bootstraps/css/ms-viewport.css" />
<link rel="stylesheet" href="../../../asset/bootstraps/css/paragraph.css" />
<link rel="stylesheet" href="../../../asset/bootstraps/css/spacer.css" />
<link rel="stylesheet" href="../../../asset/bootstraps/css/panel-overrided.css" />
<link rel="stylesheet" href="../../../asset/bootstraps/css/list-group-overrided.css" />
<link rel="stylesheet" href="../../../asset/bootstraps/css/newsfeed.css" />
    
    
<link href="../../../asset/bootstraps/css/bootstrap.min.css" rel="stylesheet">
<link href="../../../asset/bootstraps/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="../../../asset/bootstraps/css/style.css" rel="stylesheet">
<title>ผลการค้นหา ฐานข้อมูลศิษย์เก่า คณะ ICT มหาวิทยาลัยพะเยา</title>

</head>
<body>
	<div align="center">
    
	<div style="background-color:#fff5ee ; width: 950px; margin-top: 10px;border-radius: 20px;
-moz-box-shadow: 5px 5px 5px 5px #ccc;
-webkit-box-shadow: 5px 5px 5px 5px #ccc;
box-shadow: 5px 5px 5px 5px #ccc;" >
	<div class="panel-body">
    	<table width="90%" >
        	<tr>
            	<td width="50%" colspan="2"><div class="header_register">ดูข้อมูลศิษย์เก่า คณะเทคโนโลยีสารสนเทศและการสื่อสาร</div></td>
          	</tr>
      	</table>
        
        	<fieldset style="width:95%; margin:0 auto; border: 0px solid #CCC;">
				<div style="border: 1px solid #CCC;margin: 0 1% 1% 0;padding: 1% 1% 1% 1%;-moz-border-radius: 10px;-webkit-border-radius: 10px;border-radius: 10px;">
                <span style="color:#F00; font-size:12px; float:left; font-weight:bold">ข้อมูลด้านการศึกษา</span>
                
                <hr>
            	<?php
				$sql_select = "select * from alumnusstu_tb,alumnuswork_tb where alumnusstu_tb.alumnus_stuid = '".$_GET['id']."' and alumnuswork_tb.alumnus_stuid = '".$_GET['id']."' ";
				$sql_result = mysql_query($sql_select) or die("Error ".$sql_select);
				while ($result= mysql_fetch_array($sql_result)) { 
				?>	
                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table2" align="center">
                        <tbody>
                            <tr>
                                <td colspan="2"></td>
                            </tr>
                            <tr>
                              <td width="20%"><div align="right"><strong>รหัสนิสิต&nbsp;&nbsp;</strong></div></td>
                              <td style="text-align: left" ><input name="username" type="text"  class="inn" id="username" style="width:220px;height:30px;" value="<?=$result['alumnus_stuid']?>" readonly disabled="disabled"></td>
                            </tr>
                            <tr >
                              <td><div align="right"><strong>ชื่อภาษาไทย&nbsp;&nbsp;</strong></div></td>
                              <td style="text-align: left"><input name="username" type="text"  class="inn" id="username" style="width:220px;height:30px;" value="<?=$result['alumnus_regisdata_nameth']?>" readonly disabled="disabled"></td>
                            </tr>
                            <tr>
                              <td><div align="right"><strong>ระดับการศึกษา&nbsp;&nbsp;</strong></div></td>
                              <td style="text-align: left"><input name="username" type="text"  class="inn" id="username" style="width:220px;height:30px;" value="<?php 
					                      if($result['alumnus_regisdata_degree']==1) {
					                        echo "ปริญญาตรี (Bachelor Degree)";
					                      }elseif ($result['alumnus_regisdata_degree']==2) {
					                        echo "ปริญญาโท (Master Degree)";
					                      }
					                      ?>" readonly disabled="disabled">	
                          		</td>
                            </tr>
                            <tr>
                              <td><div align="right"><strong>สาขาวิชา&nbsp;&nbsp;</strong></div></td>
                              <td style="text-align: left"><input name="username" type="text"  class="inn" id="username" style="width:220px;height:30px;" value="<?php 
					                      if($result['alumnus_regisdata_major']==1) {
					                        echo "วิศวกรรมคอมพิวเตอร์";
					                      }elseif ($result['alumnus_regisdata_major']==2) {
					                        echo "วิทยาการคอมพิวเตอร์";
					                      }elseif ($result['alumnus_regisdata_major']==3) {
					                        echo "เทคโนโลยีสารสนเทศ";
					                      }elseif ($result['alumnus_regisdata_major']==4) {
					                        echo "คอมพิวเตอร์ธุรกิจ";
					                      }elseif ($result['alumnus_regisdata_major']==5) {
					                        echo "ภูมิสารสนเทศศาสตร์";
					                      }elseif ($result['alumnus_regisdata_major']==6) {
					                        echo "เทคโนโลยีอินเทอร์เน็ตและสารสนเทศ";
					                      }
					                      ?>" readonly disabled="disabled"></td>
                            </tr>
                            <tr>
                              <td><div align="right"><strong>คณะ &nbsp;&nbsp;</strong></div></td>
                              <td style="text-align: left"><input type="text" name="regisdata_school" id="regisdata_nameeng" class="inp-form" style="width:300px;height:30px;" value="เทคโนโลยีสารสนเทศและการสื่อสาร" disabled></td>
                            </tr>
                        </tbody>
                    </table>
                    
				<br>
                <span style="color:#F00; font-size:12px; float:left; font-weight:bold">ข้อมูลด้านการทำงาน</span>
                <hr>
                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table2" align="center">
                    <tbody>
                        <tr>
                            <td colspan="2"></td>
                        </tr>
                        <tr>
                          <td width="20%"><div align="right"><strong>ตำแหน่งงานปัจจุบัน&nbsp;&nbsp;</strong></div></td>
                          <td style="text-align: left" ><input name="username" type="text"  class="inn" id="username" style="width:220px;height:30px;" value="<?php if ($result['alumnus_position']==""){echo "-";}else{echo $result['alumnus_position'];} ?>" readonly disabled="disabled"></td>
                        </tr>
                        <tr>
                        	<td colspan="2"><span style="color:#F00; font-size:12px; float:left; font-weight:bold">สถานที่ทำงาน</span><hr>
</td>
                        </tr>
                        <tr>
                          <td width="20%"><div align="right"><strong>ชื่อหน่วยงาน&nbsp;&nbsp;</strong></div></td>
                          <td style="text-align: left" ><input name="username" type="text"  class="inn" id="username" style="width:220px;height:30px;" value="<?php if ($result['alumnus_nameplacework']==""){echo "-";}else{echo $result['alumnus_nameplacework'];} ?>" readonly disabled="disabled"></td>
                        </tr>
                        <tr>
                          <td width="20%"><div align="right"><strong>ที่ตั้งเลขที่&nbsp;&nbsp;</strong></div></td>
                          <td style="text-align: left" ><input name="username" type="text"  class="inn" id="username" style="width:220px;height:30px;" value="<?php if ($result['alumnus_idplacework']==""){echo "-";}else{echo $result['alumnus_idplacework'];} ?>" readonly disabled="disabled"></td>
                        </tr>
                        <tr>
                          <td width="20%"><div align="right"><strong>หมู่ที่&nbsp;&nbsp;</strong></div></td>
                          <td style="text-align: left" ><input name="username" type="text"  class="inn" id="username" style="width:220px;height:30px;" value="<?php if ($result['alumnus_mooplacework']==""){echo "-";}else{echo $result['alumnus_mooplacework'];} ?>" readonly disabled="disabled"></td>
                        </tr>
                        <tr>
                          <td width="20%"><div align="right"><strong>อาคาร/ตึก&nbsp;&nbsp;</strong></div></td>
                          <td ><div align="left">
                            <input name="username" type="text"  class="inn" id="username" style="width:220px;height:30px;" value="<?php if ($result['alumnus_buildingplacework']==""){echo "-";}else{echo $result['alumnus_buildingplacework'];} ?>" readonly disabled="disabled">
                            <strong>&nbsp;&nbsp;ชั้น&nbsp;&nbsp;</strong>
                            <input name="username" type="text"  class="inn" id="username" style="width:220px;height:30px;" value="<?php if ($result['alumnus_floorplacework']==""){echo "-";}else{echo $result['alumnus_floorplacework'];} ?>" readonly disabled="disabled"></div>
                          </td>
                        </tr>
                        <tr>
                          <td width="20%"><div align="right"><strong>ตรอก/ซอย&nbsp;&nbsp;</strong></div></td>
                          <td ><div align="left"><strong>
                            <input name="username" type="text"  class="inn" id="username" style="width:220px;height:30px;" value="<?php if ($result['alumnus_alleyplacework']==""){echo "-";}else{echo $result['alumnus_alleyplacework'];} ?>" readonly disabled="disabled"></strong></div>
                          </td>
                        </tr>
                        <tr>
                          <td width="20%"><div align="right"><strong>ถนน&nbsp;&nbsp;</strong></div></td>
                          <td ><div align="left"><strong>
                            <input name="username" type="text"  class="inn" id="username" style="width:220px;height:30px;" value="<?php if ($result['alumnus_streetplacework']==""){echo "-";}else{echo $result['alumnus_streetplacework'];} ?>" readonly disabled="disabled"></strong></div>
                          </td>
                        </tr>
                        <tr>
                     	  <td width="20%"><div align="right"><strong>ตำบล/แขวง&nbsp;&nbsp;</strong></div></td>
                          <td ><div align="left"><strong>
                            <input name="username" type="text"  class="inn" id="username" style="width:220px;height:30px;" value="<?php if ($result['alumnus_districtplacework']==""){echo "-";}else{echo $result['alumnus_districtplacework'];} ?>" readonly disabled="disabled"></strong><strong>&nbsp;&nbsp;อำเภอ&nbsp;&nbsp;</strong>
                            <input name="username" type="text"  class="inn" id="username" style="width:220px;height:30px;" value="<?php if ($result['alumnus_ampurplacework']==""){echo "-";}else{echo $result['alumnus_ampurplacework'];} ?>" readonly disabled="disabled"></strong></div></td>
                        </tr>
                        <tr>
                     	  <td width="20%"><div align="right"><strong>จังหวัด&nbsp;&nbsp;</strong></div></td>
                          <td ><div align="left"><strong>
                            <input name="username" type="text"  class="inn" id="username" style="width:220px;height:30px;" value="<?php if ($result['alumnus_provinceplacework']==""){echo "-";}else{echo $result['alumnus_provinceplacework'];} ?>" readonly disabled="disabled"></strong></div></td>
                        </tr>  
                        <tr>
                     	  <td width="20%"><div align="right"><strong>รหัสไปรษณีย์&nbsp;&nbsp;</strong></div></td>
                          <td ><div align="left"><strong>
                            <input name="username" type="text"  class="inn" id="username" style="width:220px;height:30px;" value="<?php if ($result['alumnus_postcodeplacework']==""){echo "-";}else{echo $result['alumnus_postcodeplacework'];} ?>" readonly disabled="disabled"></strong></div></td>
                        </tr>  
                        <tr>
                     	  <td width="20%"><div align="right"><strong>โทรศัพท์&nbsp;&nbsp;</strong></div></td>
                          <td ><div align="left"><strong>
                            <input name="username" type="text"  class="inn" id="username" style="width:220px;height:30px;" value="<?php if ($result['alumnus_telplacework']==""){echo "-";}else{echo $result['alumnus_telplacework'];} ?>" readonly disabled="disabled"></strong><strong>&nbsp;&nbsp;โทรสาร&nbsp;&nbsp;</strong>
                            <input name="username" type="text"  class="inn" id="username" style="width:220px;height:30px;" value="<?php if ($result['alumnus_faxplacework']==""){echo "-";}else{echo $result['alumnus_faxplacework'];} ?>" readonly disabled="disabled"></strong></div></td>
                        </tr>
                        <tr>
                     	  <td width="20%"><div align="right"><strong>Email&nbsp;&nbsp;</strong></div></td>
                          <td ><div align="left"><strong>
                            <input name="username" type="text"  class="inn" id="username" style="width:220px;height:30px;" value="<?php if ($result['alumnus_emailplacework']==""){echo "-";}else{echo $result['alumnus_emailplacework'];} ?>" readonly disabled="disabled"></strong></div></td>
                        </tr>  
                        </td>
                    </tbody>
                </table>
                </div>
                        <input name="Submit" type="button" class="btn btn-danger" value="ปิดหน้าต่าง" onClick="window.close()">
          	</fieldset>
    </div>
</div>


</table>

<?php
}
?>


</div>
</div>
<div style="visibility: hidden">
     <a href="http://apycom.com/" >Apycom jQuery Menus</a><br />
</div>
<script src="https://code.jquery.com/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="../../../asset/bootstraps/js/bootstrap.min.js"></script>

</body>
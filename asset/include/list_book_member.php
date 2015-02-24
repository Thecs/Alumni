<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
<title>รายชื่อ สำรองที่นั่งงานศิษย์เก่า "Home Sweet Home 2016"</title>

</head>
<body>
	<div align="center">
    
	<div style="background-color:#fff5ee ; width: 600px; margin-top: 10px;border-radius: 20px;
-moz-box-shadow: 5px 5px 5px 5px #ccc;
-webkit-box-shadow: 5px 5px 5px 5px #ccc;
box-shadow: 5px 5px 5px 5px #ccc;" >
	<div class="panel-body">
    	<table width="90%" >
        	<tr>
            	<td width="50%" colspan="2"><div class="header_register">รายชื่อ สำรองที่นั่งงานศิษย์เก่า "Home Sweet Home 2015"</div></td>
          	</tr>
      	</table>
        
        	<fieldset style="width:95%; margin:0 auto; border: 0px solid #CCC;">
				<div style="border: 1px solid #CCC;margin: 0 1% 1% 0;padding: 1% 1% 1% 1%;-moz-border-radius: 10px;-webkit-border-radius: 10px;border-radius: 10px;">
                <span style="color:#F00; font-size:12px; float:left; font-weight:bold">ข้อมูลผ้จอง</span>
                
                <hr>
                <br>
            	<?php
        				$sql_select = "SELECT
                  distinct(alumni_register.name_id),
                  alumni_register.name,
                  alumni_register.tel,
                  alumni_register.email,
                  alumni_register.major,
                  alumni_register.book_type,
                  alumni_register.num_book,
                  alumni_register.name_id,
                  alumni_register.date_book,
                  alumni_register.pay_status
                  FROM
                  alumni_register
                  where alumni_register.name_id = '".$_GET['id']."' ";
				$sql_result = mysql_query($sql_select) or die("Error ".$sql_select);
				while ($result= mysql_fetch_array($sql_result)) { 
				?>	
                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table2" align="center">
                        <tbody>
                            <tr>
                                <td colspan="2"></td>
                            </tr>
                            <tr>
                              <td width="30%"><div align="right"><strong>ชื่อผู้จอง&nbsp;&nbsp;</strong></div></td>
                              <td style="text-align: left" ><input name="username" type="text"  class="inn" id="username" style="width:220px;height:30px;" value="<?=$result['name']?>" readonly disabled="disabled"></td>
                            </tr>
                            <tr >
                              <td><div align="right"><strong>ศิษย์เก่าสาขาวิชา&nbsp;&nbsp;</strong></div></td>
                              <td style="text-align: left"><input name="username" type="text"  class="inn" id="username" style="width:220px;height:30px;" value="<?=$result['major']?>" readonly disabled="disabled"></td>
                            </tr>
                            <tr>
                              <?php 
                              if($result['pay_status']==1){
                                $mes = "ยังไม่ได้ชำระเงิน" ;
                              }else{
                                $mes = "ชำระเงินแล้ว";
                              }
                              ?>
                              <td><div align="right"><strong>สถานะโอนเงิน&nbsp;&nbsp;</strong></div></td>
                              <td style="text-align: left"><input name="username" type="text"  class="inn" id="username" style="width:220px;height:30px;"  value="<?=$mes?>" readonly disabled="disabled">	
                          		</td>
                            </tr>
                            <tr>
                              <td><div align="right"><strong>คณะ &nbsp;&nbsp;</strong></div></td>
                              <td style="text-align: left"><input type="text" name="regisdata_school" id="regisdata_nameeng" class="inp-form" style="width:300px;height:30px;" value="เทคโนโลยีสารสนเทศและการสื่อสาร" disabled></td>
                            </tr>
                            <?php 
                              if($result['book_type']==1){
                                @$num_table = $result['num_book'];
                                $total = $num_table*2400;
                              }else if ($result['book_type']==2){
                                  @$num_chair = $result['num_book'];
                                
                                $total = $num_chair*400;
                              }
                            ?>
                            <tr>
                              <td><div align="right"><strong>จำนวนเงินที่ต้องชำระ &nbsp;&nbsp;</strong></div></td>
                              <td style="text-align: left"><input type="text" name="regisdata_school" id="regisdata_nameeng" class="inp-form" style="width:300px;height:30px;" value="<?=number_format($total)." บาท"?>" disabled></td>
                            </tr>
                        </tbody>
                    </table>
                    
				        <br>
                <?php
                  $sql_select_name = "SELECT
                    alumni_register_name.name
                    FROM
                    alumni_register
                    Inner Join alumni_register_name ON alumni_register.name_id = alumni_register_name.name_id
                    where alumni_register.name_id = '".$result['name_id']."' ";
                  $sql_result_name = mysql_query($sql_select_name) or die("Error ".$sql_select_name);
                   
                ?>
                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table2" align="center">
                    <tbody>
                      <tr>
                      	<td colspan="2"><span style="color:#F00; font-size:12px; float:left; font-weight:bold">ชื่อผู้จองที่นั่ง</span><hr>
</td>
                      </tr>
                      <?php
                      $i=0;
                      while ($result_name= mysql_fetch_array($sql_result_name)) {
                      $i++;
                      ?>
                        <tr>
                          <td width="20%"><div align="right"><strong>ลำดับที่ <?=$i?>&nbsp;&nbsp;</strong></div></td>
                          <td style="text-align: left" ><input name="username" type="text"  class="inn" id="username" style="width:220px;height:30px;" value="<?=$result_name['name']?>" readonly disabled="disabled"></td>
                        </tr>
                      <?php }
                      ?>
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
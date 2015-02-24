<link rel="stylesheet" href="<?=base_url();?>asset/tab/jquery-ui-1.10.2/themes/base/jquery-ui.css" />
<script src="<?=base_url();?>asset/tab/jquery-ui-1.10.2/jquery-1.9.1.js"></script>
<script src="<?=base_url();?>asset/tab/jquery-ui-1.10.2/ui/jquery-ui.js"></script>
<link rel="stylesheet" href="<?=base_url();?>asset/tab/jquery-ui-1.10.2/themes/base/minified/jquery.ui.tabs.min.css" />
<link rel="stylesheet" href="<?=base_url();?>css/mystyle.css" />

<link href="<?=base_url();?>asset/bootstrap/css/bootstrap.min.css" rel="stylesheet">



<link rel="stylesheet" href="<?=base_url()?>asset/bootstraps/css/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?=base_url()?>asset/bootstraps/css/ms-viewport.css" />
    <link rel="stylesheet" href="<?=base_url()?>asset/bootstraps/css/paragraph.css" />
    <link rel="stylesheet" href="<?=base_url()?>asset/bootstraps/css/spacer.css" />
    <link rel="stylesheet" href="<?=base_url()?>asset/bootstraps/css/panel-overrided.css" />
    <link rel="stylesheet" href="<?=base_url()?>asset/bootstraps/css/list-group-overrided.css" />
    <link rel="stylesheet" href="<?=base_url()?>asset/bootstraps/css/newsfeed.css" />
    
    
    <link href="<?=base_url()?>asset/bootstraps/css/bootstrap.min.css" rel="stylesheet">
  	<link href="<?=base_url()?>asset/bootstraps/css/bootstrap-responsive.min.css" rel="stylesheet">
  	<link href="<?=base_url()?>asset/bootstraps/css/style.css" rel="stylesheet">



<?php
    include_once("asset/date_thai.php");
?>
<!--- end fancy box script -->
<script type="text/javascript">
        function display_load(){$("#loading").fadeIn(300,0);$("#loading").html("<div class='loading_in'>Loading...</div>");}
        function hide_load(){$("#loading").fadeOut('slow');};
    </script>
<script type="text/javascript">
  $(function() {
    $( "#tabs_news" ).tabs();
    $( "#tabs-job" ).tabs();
    $("#datepicker-th").datepicker({ dateFormat: 'dd/mm/yy', isBuddhist: true, defaultDate: toDay });


  });
  (function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script>


<script type="text/javascript" src="asset/jQuery_Username_Availability_check/js/jquery-1.9.0.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	$("#username").keyup(function (e) {
	
		//removes spaces from username
		$(this).val($(this).val().replace(/\s/g, ''));
		
		var username = $(this).val();
		if(username.length < 8){$("#user-result").html('');return;}
		
		if(username.length >= 8){
			$("#user-result").html('<img src="asset/jQuery_Username_Availability_check/imgs/ajax-loader.gif" />');
			$.post('asset/jQuery_Username_Availability_check/check_validate.php', {'username':username}, function(data) {
			  $("#user-result").html(data);
			});
		}
	});	
});
</script>

<script language="JavaScript">
	function chkNumber(ele)
	{
	var vchar = String.fromCharCode(event.keyCode);
	if ((vchar<'0' || vchar>'9') && (vchar != '.')) return false;
	ele.onKeyPress=vchar;
	}
	
	function fncSubmit()
	{
		if(document.form1.username.value == "")
		{
			alert('กรุณากรอกรหัสนิสิต 8 ตัว !!!');
			document.form1.username.focus();
			return false;
		}	
		if(document.form1.regisdata_nameth.value == "")
		{
			alert('กรุณากรอกชื่อภาษาไทย !!!');
			document.form1.regisdata_nameth.focus();
			return false;
		}	
		/*if(document.form1.nameeng.value == "")
		{
			alert('กรุณากรอกชื่อภาษาอังกฤษ !!!');
			document.form1.nameeng.focus();
			return false;
		}*/	
		if(document.form1.regisdata_degree.value == 0)
		{
			alert('กรุณาเลือกระดับการศึกษา !!!');
			document.form1.regisdata_degree.focus();
			return false;
		}	
		if(document.form1.regisdata_major.value == 0)
		{
			alert('กรุณาเลือกสาขาวิชา !!!');
			document.form1.regisdata_major.focus();
			return false;
		}
		if(document.form1.regisdata_congrat.value == 0)
		{
			alert('กรุณาเลือกปีที่สำเร็จการศึกษา !!!');
			document.form1.regisdata_congrat.focus();
			return false;
		}
		
		document.form1.submit();	
	}
</script>
  <?php
 $data_image_pr = array(
               'src' => 'images/news.png',
               'height' => '20px',
               'width' => '20px',
               'alt' => 'Pr'
          );
?>
<body>
<form action="alumnus_register/addalumnus" method="POST" onSubmit="JavaScript:return fncSubmit();" name="form1">
	
   	<div id="database" class="panel panel-default">
	
    <div class="panel-body">
    	<table width="100%">
        	<tr>
            	<td width="50%" colspan="2"><div class="header_register">กรุณากรอกข้อมูลของท่านให้ครบถ้วน เพื่อบันทึกสู่ฐานข้อมูลศิษย์เก่า</div></td>
          	</tr>
      	</table>
        
        <br />
        	<fieldset style="width:95%; margin:0 auto;">
				<div style="border: 1px solid #CCC;margin: 0 1% 1% 0;padding: 1% 1% 1% 1%;-moz-border-radius: 10px;-webkit-border-radius: 10px;border-radius: 10px;">
				<span style="color:#F00; font-size:12px; float:right;">**** กรุณาระบุข้อมูลให้ครบถ้วน ****</span>
                <span style="color:#F00; font-size:12px; float:left; font-weight:bold">ข้อมูลด้านการศึกษา</span>
                
                <hr>
                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table2" align="center">
                        <tbody>
                            <tr>
                                <td colspan="2"></td>
                            </tr>
                            <tr>
                              <td width="20%"><div align="right"><strong>รหัสนิสิต&nbsp;&nbsp;</strong></div></td>
                              <td style="text-align: left" ><input name="username" type="text"  class="inn" id="username" style="width:220px;height:30px;" value="" maxlength="8" OnKeyPress="return chkNumber(this)"><span id="user-result"></span><span class="require">&nbsp;*&nbsp;</span></td>
                            </tr>
                            <tr >
                              <td><div align="right"><strong>ชื่อภาษาไทย&nbsp;&nbsp;</strong></div></td>
                              <td style="text-align: left"><input type="text" name="regisdata_nameth" id="regisdata_nameth" class="inp-form" style="width:220px;height:30px;" ><span class="require">&nbsp;*&nbsp;</span></td>
                            </tr>
                            <!--<tr>
                              <td><div align="right"><strong>ชื่อภาษาอังกฤษ&nbsp;&nbsp;</strong></div></td>
                              <td style="text-align: left"><input type="text" name="nameeng" id="nameeng" class="inp-form" style="width:220px;height:30px;" ><span class="require">&nbsp;*&nbsp;</span></td>
                            </tr>-->
                            <tr>
                              <td><div align="right"><strong>ระดับการศึกษา&nbsp;&nbsp;</strong></div></td>
                              <td style="text-align: left">	<select name="regisdata_degree" id="regisdata_degree">
                                            <option value="0" disabled selected>--เลือกระดับการศึกษา--</option>
                                            <option value="1">ปริญญาตรี (Bachelor Degree)</option>
                                            <option value="2">ปริญญาโท (Master Degree)</option>
                                        </select>
                                        <span class="require">&nbsp;*&nbsp;</span>
                              </td>
                            </tr>
                            <tr>
                              <td><div align="right"><strong>สาขาวิชา&nbsp;&nbsp;</strong></div></td>
                              <td style="text-align: left">
									<select name="regisdata_major" id="regisdata_major">
										<option value="0" disabled selected>--ไม่กำหนด--</option>
										<option disabled >------ระดับปริญญาตรี------</option>
										<option value="1">วิศวกรรมคอมพิวเตอร์</option>
										<option value="2">วิทยาการคอมพิวเตอร์</option>
										<option value="3">เทคโนโลยีสารสนเทศ</option>
										<option value="4">คอมพิวเตอร์ธุรกิจ</option>
										<option value="5">ภูมิสารสนเทศศาสตร์</option>
										<option disabled >------ระดับปริญญาโท------</option>
										<option value="6">เทคโนโลยีอินเทอร์เน็ตและสารสนเทศ</option>
									</select>
									<span class="require">&nbsp;*&nbsp;</span>
								</td>
                            </tr>
							<tr >
                              <td><div align="right"><strong>ปีที่สำเร็จการศึกษา&nbsp;&nbsp;</strong></div></td>
                              <td style="text-align: left">
								<select name="regisdata_congrat" id="regisdata_congrat">
									<option value="0" disabled selected>--ไม่กำหนด--</option>
									<option value="2554">2554</option>
									<option value="2555">2555</option>
								</select>
								<span class="require">&nbsp;*&nbsp;</span></td>
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
                <span style="color:#F00; font-size:12px; float:right;">**** กรุณาระบุข้อมูลให้ครบถ้วน ถ้าไม่มีให้เว้นว่าง ****</span>
                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table2" align="center">
                    <tbody>
                        <tr>
                            <td colspan="2"></td>
                        </tr>
                        <tr>
                          <td width="20%"><div align="right"><strong>ตำแหน่งงานปัจจุบัน&nbsp;&nbsp;</strong></div></td>
                          <td style="text-align: left" ><input type="text" name="regisdata_position" id="regisdata_position" class="inp-form" style="width:300px; height:30px;" value=""></td>
                        </tr>
                        <tr>
                        	<td colspan="2"><span style="color:#F00; font-size:12px; float:left; font-weight:bold">สถานที่ทำงาน</span><hr><span style="color:#F00; font-size:12px; float:right;">**** กรุณาระบุข้อมูลให้ครบถ้วน ถ้าไม่มีให้เว้นว่าง ****</span>
</td>
                        </tr>
                        <tr>
                          <td width="20%"><div align="right"><strong>ชื่อหน่วยงาน&nbsp;&nbsp;</strong></div></td>
                          <td style="text-align: left" ><input type="text" name="regisdata_nameplacework" id="regisdata_nameplacework" class="inp-form" style="width:300px; height:30px;" value=""></td>
                        </tr>
                        <tr>
                          <td width="20%"><div align="right"><strong>ที่ตั้งเลขที่&nbsp;&nbsp;</strong></div></td>
                          <td style="text-align: left" ><input type="text" name="regisdata_idplacework" id="regisdata_idplacework" class="inp-form" style="width:220px; height:30px;" value=""></td>
                        </tr>
                        <tr>
                          <td width="20%"><div align="right"><strong>หมู่ที่&nbsp;&nbsp;</strong></div></td>
                          <td style="text-align: left" ><input type="text" name="regisdata_mooplacework" id="regisdata_mooplacework" class="inp-form" style="width:220px; height:30px;" value=""></td>
                        </tr>
                        <tr>
                          <td width="20%"><div align="right"><strong>อาคาร/ตึก&nbsp;&nbsp;</strong></div></td>
                          <td ><div align="left"><strong>
                            <input type="text" name="regisdata_buildingplacework" id="regisdata_buildingplacework" class="inp-form" style="width:220px; height:30px;" value="">
                            <strong>&nbsp;&nbsp;ชั้น&nbsp;&nbsp;</strong>
                            <input type="text" name="regisdata_floorplacework" id="regisdata_floorplacework" class="inp-form" style="width:220px; height:30px;" value=""></strong></div>
                          </td>
                        </tr>
                        <tr>
                          <td width="20%"><div align="right"><strong>ตรอก/ซอย&nbsp;&nbsp;</strong></div></td>
                          <td ><div align="left"><strong>
                            <input type="text" name="regisdata_alleyplacework" id="regisdata_buildingplacework" class="inp-form" style="width:220px; height:30px;" value=""></strong></div>
                          </td>
                        </tr>
                        <tr>
                          <td width="20%"><div align="right"><strong>ถนน&nbsp;&nbsp;</strong></div></td>
                          <td ><div align="left"><strong>
                            <input type="text" name="regisdata_streetplacework" id="regisdata_streetplacework" class="inp-form" style="width:220px; height:30px;" value=""></strong></div>
                          </td>
                        </tr>
                        <tr>
                     	  <td width="20%"><div align="right"><strong>ตำบล/แขวง&nbsp;&nbsp;</strong></div></td>
                          <td ><div align="left"><strong>
                            <input type="text" name="regisdata_districplacework" id="regisdata_districplacework" class="inp-form" style="width:220px; height:30px;" value=""></strong><strong>&nbsp;&nbsp;อำเภอ&nbsp;&nbsp;</strong>
                            <input type="text" name="regisdata_ampurplacework" id="regisdata_ampurplacework" class="inp-form" style="width:220px; height:30px;" value=""></strong></div></td>
                        </tr>
                        <tr>
                     	  <td width="20%"><div align="right"><strong>จังหวัด&nbsp;&nbsp;</strong></div></td>
                          <td ><div align="left"><strong>
                            <input type="text" name="regisdata_provinceplacework" id="regisdata_provinceplacework" class="inp-form" style="width:220px; height:30px;" value=""></strong></div></td>
                        </tr>  
                        <tr>
                     	  <td width="20%"><div align="right"><strong>รหัสไปรษณีย์&nbsp;&nbsp;</strong></div></td>
                          <td ><div align="left"><strong>
                            <input type="text" name="regisdata_postcodeplacework" id="regisdata_postcodeplacework" class="inp-form" style="width:220px; height:30px;" value=""></strong></div></td>
                        </tr>  
                        <tr>
                     	  <td width="20%"><div align="right"><strong>โทรศัพท์&nbsp;&nbsp;</strong></div></td>
                          <td ><div align="left"><strong>
                            <input type="text" name="regisdata_telplacework" id="regisdata_telplacework" class="inp-form" style="width:220px; height:30px;" value=""></strong><strong>&nbsp;&nbsp;โทรสาร&nbsp;&nbsp;</strong>
                            <input type="text" name="regisdata_faxplacework" id="regisdata_faxplacework" class="inp-form" style="width:220px; height:30px;" value=""></strong></div></td>
                        </tr>
                        <tr>
                     	  <td width="20%"><div align="right"><strong>Email&nbsp;&nbsp;</strong></div></td>
                          <td ><div align="left"><strong>
                            <input type="text" name="regisdata_emailplacework" id="regisdata_emailplacework" class="inp-form" style="width:220px; height:30px;" value=""></strong></div></td>
                        </tr>  
                        </td>
                    </tbody>
                </table>
                <hr>
                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table2" align="center">
                    <tbody>
                        <tr>
                          <td width="20%"></td>
                          <td  align="left"><input name="Submit" type="submit" class="btn btn-success" value="เพิ่มข้อมูล">
                            <input type="reset" class="btn btn-default" value="ล้างข้อมูล"></td>
                        </tr>
                  	</tbody>
              	</table>
                
                
                </div>
                
          	</fieldset>
    </div>
</div>
</form>
<script type="text/javascript">
$( function () {
	twitter.screenNameKeyUp();
	$('#username').focus();
});
    

</script>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?=base_url()?>asset/bootstraps/js/bootstrap.min.js"></script>

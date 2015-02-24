<head>
<?php 
  include 'asset/include/connect_db.inc.php';
?>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="stylesheet" href="<?=base_url()?>asset/bootstraps/css/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="<?=base_url()?>asset/bootstraps/css/ms-viewport.css" />
<link rel="stylesheet" href="<?=base_url()?>asset/bootstraps/css/paragraph.css" />
<link rel="stylesheet" href="<?=base_url()?>asset/bootstraps/css/spacer.css" />
<link rel="stylesheet" href="<?=base_url()?>asset/bootstraps/css/panel-overrided.css" />
<link rel="stylesheet" href="<?=base_url()?>asset/bootstraps/css/list-group-overrided.css" />
<link rel="stylesheet" href="<?=base_url()?>asset/bootstraps/css/newsfeed.css" />

<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
<!--script src="js/less-1.3.3.min.js"></script-->
<!--append ‘#!watch’ to the browser URL, then refresh the page. -->

<link href="<?=base_url()?>asset/bootstraps/css/bootstrap.min.css" rel="stylesheet">
<link href="<?=base_url()?>asset/bootstraps/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="<?=base_url()?>asset/bootstraps/css/style.css" rel="stylesheet">




<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<![endif]-->

<!-- Fav and touch icons -->
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?=base_url()?>asset/bootstraps/img/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?=base_url()?>asset/bootstraps/img/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?=base_url()?>asset/bootstraps/img/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="<?=base_url()?>asset/bootstraps/img/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="<?=base_url()?>asset/bootstraps/img/favicon.png">

<script type="text/javascript" src="<?=base_url()?>asset/bootstraps/js/jquery.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>asset/bootstraps/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>asset/bootstraps/js/scripts.js"></script>


<script type="text/javascript">
function popup(url,name,windowWidth,windowHeight){      
    myleft=(screen.width)?(screen.width-windowWidth)/2:100;   
    mytop=(screen.height)?(screen.height-windowHeight)/2:100;     
    properties = "width="+windowWidth+",height="+windowHeight;  
    properties +=",scrollbars=yes, top="+mytop+",left="+myleft;     
    window.open(url,name,properties);  
}
</script>
<script language="JavaScript">
	
	function fncSubmit()
	{
		if(document.form_search.searchdata_alumni.value == "" && document.form_search.namedata.value == "" && document.form_search.place_major.value == 0  && document.form_search.year_congrate.value == 0)
		{
			alert('กรุณาระบุเงื่อนไขในการค้นหา');
			document.form_search.searchdata_alumni.focus();
			return false;
		}	
		document.form1.submit();	
	}
</script>
</head>
<body>
<?php 
?>
<div id="database" class="panel panel-default">
	
    <div class="panel-body">
    	<table width="100%">
        	<tr>
            	<td width="50%"><span style="background-color:#CCC; font-size:20px; ">ค้นหาศิษย์เก่า คณะ ICT ม.พะเยา</span></td>
                <td width="50%" align="right" style="float:right"><a href="alumnus_register"><img src="images/regis_alumnus.png" width="250px"  /></a></td>
          	</tr>
      	</table>
        
        <br />
		<form action="asset/bootstraps/include/view_search.php" method="post" target="_blank" onSubmit="JavaScript:return fncSubmit();" name="form_search">
        	<fieldset style="width:95%; margin:0 auto;">
            	<legend ></legend>
				<div style="border: 1px solid #CCC;margin: 0 1% 1% 0;padding: 1% 1% 1% 1%;-moz-border-radius: 10px;-webkit-border-radius: 10px;border-radius: 10px;">
				<legend ><span style="color:#F00; font-size:12px; float:right;">**** ระบุเพียงบางช่อง หรือระบุทั้งหมดก็ได้ ****</span></legend>
                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table2" align="center">
                        <tbody><tr>
                          <td width="7%">&nbsp;</td>
                          <td width="24%"><div align="right"><strong>ค้นจากรหัสนิสิต&nbsp;&nbsp;</strong></div></td>
                          <td width="69%"><input type="text" name="id_stu" id="searchdata_alumni" class="inp-form" style="width:220px;" maxlength="8"></td>
                        </tr>
                        <!--<tr style="display:none;">
                          <td>&nbsp;</td>
                          <td><div align="right"><strong>ปีการศึกษาที่จบ</strong></div></td>
                          <td><select name="palace_year" id="palace_year">
                              <option value="">ปีการศึกษาที่จบ</option>
                                                <option value="2540">2540</option>
                                                <option value="2541">2541</option>
                                                <option value="2542">2542</option>
                                                <option value="2543">2543</option>
                                                <option value="2544">2544</option>
                                                <option value="2545">2545</option>
                                                <option value="2546">2546</option>
                                                <option value="2547">2547</option>
                                                <option value="2548">2548</option>
                                                <option value="2549">2549</option>
                                                <option value="2550">2550</option>
                                                <option value="2551">2551</option>
                                                <option value="2552">2552</option>
                                                <option value="2553">2553</option>
                                                <option value="2554">2554</option>
                                                <option value="2555">2555</option>
                                                <option value="2556">2556</option>
                                                <option value="2557">2557</option>
                                              </select></td>
                        </tr>-->
                        <tr>
                          <td>&nbsp;</td>
                          <td><div align="right"><strong>ค้นจากชื่อ&nbsp;&nbsp;</strong></div></td>
                          <td><input type="text" name="namedata" id="namedata" class="inp-form" style="width:220px;" value="" ></td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td><div align="right"><strong>ค้นจากสาขาวิชา&nbsp;&nbsp;</strong></div></td>
                          <td>
                          <select name="place_major" id="place_major">
                            <option value="0" selected="selected" disabled="disabled">--ไม่กำหนด--</option>
                            <option value="1">วิศวกรรมคอมพิวเตอร์</option>
                            <option value="2">วิทยาการคอมพิวเตอร์</option>
                            <option value="3">เทคโนโลยีสารสนเทศ</option>
                            <option value="4">คอมพิวเตอร์ธุรกิจ</option>
                            <option value="5">ภูมิสารสนเทศศาสตร์</option>
                            
						</select>
						</td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td><div align="right"><strong>ค้นหาจากปีที่สำเร็จการศึกษา&nbsp;&nbsp;</strong></div></td>
                            <td>
                              <select name="year_congrate" id="year_congrate">
                                <option value="0" selected="selected" disabled="disabled">--ไม่กำหนด--</option>
                                <option value="2554">2554</option>
                                <option value="2555">2555</option>
                                </select>
							</td>
                        </tr>
                        <tr>
                          <td>&nbsp;</td>
                          <td>&nbsp;</td>
                          <td>
                          	<?php /*?><a href="javascript:popup('asset/bootstraps/include/view_search.php?id=<?=$_POST['id_stu']?>','',1000,650)" ><img src="images/add_job.png" style="cursor:pointer;width:25px; height:25px;" title="รายละเอียดเพิ่มเติม" ></a><?php */?>
                          	<input type="submit" name="submit" class="btn btn-success"  value="ค้นหา" >
                            <input type="reset" class="btn btn-default" value="ล้างข้อมูล">
                        </tr>
                      </tbody>
                </table><br />
			</div>
            </fieldset>
       	</form> 
    </div>
</div>
</body>
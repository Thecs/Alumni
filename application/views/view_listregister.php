<link rel="stylesheet" href="<?=base_url();?>asset/tab/jquery-ui-1.10.2/themes/base/jquery-ui.css" />
<script src="<?=base_url();?>asset/tab/jquery-ui-1.10.2/jquery-1.9.1.js"></script>
<script src="<?=base_url();?>asset/tab/jquery-ui-1.10.2/ui/jquery-ui.js"></script>
<link rel="stylesheet" href="<?=base_url();?>asset/tab/jquery-ui-1.10.2/themes/base/minified/jquery.ui.tabs.min.css" />
<link rel="stylesheet" href="<?=base_url();?>css/mystyle.css" />

<link href="<?=base_url();?>asset/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!--- fancy box library-->
<!-- Add jQuery library -->
<!-- Add mousewheel plugin (this is optional) -->
<?php /*
<script type="text/javascript" src="<?=base_url()?>asset/fancybox/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>asset/fancybox/source/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="<?=base_url()?>asset/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
<link rel="stylesheet" href="<?=base_url()?>asset/fancybox/source/jquery.fancybox.css" type="text/css" media="screen" />
*/ ?>


<!--  End fancy box library -->



<?php
    include_once("asset/date_thai.php");
?>
<!--- end fancy box script -->
<script type="text/javascript">
        function display_load(){$("#loading").fadeIn(300,0);$("#loading").html("<div class='loading_in'>Loading...</div>");}
        function hide_load(){$("#loading").fadeOut('slow');};
    </script>
<script>
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
<script type="text/javascript">
function add_table(book_type)
{
    if (book_type == "1" ){
		document.getElementById('num_table').style.display = 'block';
		document.getElementById('num_chair').style.display = 'none';
	}
    else {
		document.getElementById('num_table').style.display = 'none';
		document.getElementById('num_chair').style.display = 'block';
	}

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
<style type="text/css">
	input{
		text-align:left;
	}
</style>
<body>
	
	<div class="row">
		<div class="col-md-6">
			<div class="panel panel-success" >
				<div class="panel-heading">
					<h3 class="panel-title" >:::: ราคาโต๊ะและที่นั่งงานศิษย์เก่า "Home Sweet Home 2015" ::::</h3>
				</div>
				<div class="panel-body" style="text-align: left">
					- โต๊ะจีน 8 ที่นั่ง  ราคา 2,400 บาท<br>
					- 1 ที่นั่ง ราคา 400 บาท 
					<h6>จัดงานวันเสาร์ ที่ 28 กุมภาพันธ์ 2558 ตั้งแต่เวลา 13.00 น. เป็นต้นไป ณ ลานกิจกรรม คณะเทคโนโลยีสารสนเทศและการสื่อสาร</h6><br>

					<b>ข้อมูลบัญชี</b><br>
					น.ส.กลางวารี ไชยวุฒิ และนายยืนยง กันทะเนตร และนายณัฏฐ์ กรีธาชาติ<br><br>
					ธนาคารไทยพาณิชย์ สาขามหาวิทยาลัยพะเยา<br>
					เลขที่บัญชี 8912386370<br><br>
					<b>เมื่อโอนเงินแล้ว ส่งสลิปมาที่ Email : nut_mufc11@hotmail.com<br>
					และโทรแจ้งที่ นายณัฏฐ์ กรีธาชาติ 08-0507-7134</b>
				</div>
		    </div>
		</div>
		<div class="col-md-6">
			<div class="thumbnail">
	          <a href="alumninight/alumniregister"><img data-holder-rendered="true" src="<?=base_url()?>images/banner3.jpg" style="height: 300px; width: 100%; display: block;" data-src="holder.js/100%x200" alt="100%x200"></a>
	          <div class="caption">
	            <h3>สำรองที่นั่งงานศิษย์เก่า "Home Sweet Home 2015"</h3>
	            <p>จัดงานวันเสาร์ ที่ 28 กุมภาพันธ์ 2558 ตั้งแต่เวลา 13.00 น. เป็นต้นไป ณ ลานกิจกรรม คณะเทคโนโลยีสารสนเทศและการสื่อสาร</p>
	            <p><a href="alumninight/alumniregister" class="btn btn-danger btn-lg btn-block" role="button">สำรองที่นั่ง</a></p>
	          </div>
	        </div>
		</div>
	</div>
	<div >
		<div class="alert alert-success" role="alert" style="text-align:left">รายชื่อผู้สำรองโต๊ะและที่นั่งงานคืนสู่เหย้า "ศิษย์เก่า ICT" <h6>จัดงานวันเสาร์ ที่ 28 กุมภาพันธ์ 2558 ตั้งแต่เวลา 13.00 น. เป็นต้นไป</h6></div>
		
			<table class="table table-hover">
				<thead>
					<tr>
						<td><b>ลำดับที่</b></td>
						<td><b>ชื่อผู้จอง</b></td>
						<td><b>ศิษย์เก่าสาขาวิชา</b></td>
						<td><b>ประเภทการจอง</b></td>
						<td><b>จำนวน</b></td>
						<td><b>สถานะการโอนเงิน</b></td>
						<td><b>หมายเหตุ</b></td>
					</tr>
				</thead>
				<?php
				if($row_count_58==0){?>
				<tbody>
					<tr>
						<td colspan="6" align="center">ไม่มีผู้จอง</td>
					</tr>
				</tbody>
				<?php }else{
				$i=1;
				foreach ($report_regis_58 as  $value) {
					
					if ($value->book_type==1){
							$booktype = "โต๊ะ";
							$unit = "โต๊ะ";
					}else{
							$booktype = "ที่นั่ง";
							$unit = "ที่นั่ง";
					}
					
					if($value->pay_status==1){
							$mes = "<span style=\"color:red;\">ยังไม่ได้ชำระเงิน</span>";
					}else{
							$mes = "<span style=\"color:green;\">ชำระเงินแล้ว</span>";
					}
					?>
					<tbody>
						<tr>
							<td><?=$i?></td>
							<td><?=$value->name?></td>
							<td><?=$value->major?></td>
							<td><?=$booktype?></td>
							<td><?php if($value->book_type==1){echo "<span style=\"color:#8D38C9;font-weight:bold;\">";}?> <?=$value->num_book." ".$unit?></td>
							<td><?=$mes?></td>
							<td><?php if($value->book_type==2){ ?> <a href='<?=base_url()?>asset/include/list_book_member.php?id=<?=$value->name_id?> ' class='btn btn-info ' role='button' onclick="window.open(this.href, 'mywin', 'left=20,top=20,width=700,height=600,toolbar=1,resizable=0'); return false;">รายชื่อผู้จอง</a> <?php }else{echo "";}?></td>
						</tr>
					</tbody>
					<?php 
					$i++;
				}
				}?>
			</table>
	</div>
    <hr>
    <!-- รายชื่อผู้สำรองโต๊ะและที่นั่งงานคืนสู่เหย้า "ศิษย์เก่า ICT" <h6>จัดงานวันเสาร์ ที่ 8 กุมภาพันธ์ 2557 ตั้งแต่เวลา 13.00 น. เป็นต้นไป -->
    <div style="color:#CCCCCC">
		<div class="header_register">รายชื่อผู้สำรองโต๊ะและที่นั่งงานคืนสู่เหย้า "ศิษย์เก่า ICT" <h6>จัดงานวันเสาร์ ที่ 8 กุมภาพันธ์ 2557 ตั้งแต่เวลา 13.00 น. เป็นต้นไป</h6></div>
	    
		
			<table class="table table-hover">
				<thead>
					<tr>
						<td><b>ลำดับที่</b></td>
						<td><b>ชื่อผู้จอง</b></td>
						<td><b>ศิษย์เก่าสาขาวิชา</b></td>
						<td><b>ประเภทการจอง</b></td>
						<td><b>จำนวน</b></td>
						<td><b>สถานะการโอนเงิน</b></td>
					</tr>
				</thead>
				<?php
				if($row_count==0){?>
				<tbody>
					<tr>
						<td colspan="6" align="center">ไม่มีผู้จอง</td>
					</tr>
				</tbody>
				<?php }else{
				$i=1;
				foreach ($report_regis as  $value) {
					
					if ($value->book_type==1){
							$booktype = "โต๊ะ";
							$unit = "โต๊ะ";
					}else{
							$booktype = "ที่นั่ง";
							$unit = "ที่นั่ง";
					}
					
					if($value->pay_status==1){
							$mes = "<span style=\"color:red;\">ยังไม่ได้ชำระเงิน</span>";
					}else{
							$mes = "<span style=\"color:green;\">ชำระเงินแล้ว</span>";
					}
					?>
					<tbody>
						<tr>
							<td><?=$i?></td>
							<td><?=$value->name?></td>
							<td><?=$value->major?></td>
							<td><?=$booktype?></td>
							<td><?php if($value->book_type==1){echo "<span style=\"color:#8D38C9;font-weight:bold;\">";}?> <?=$value->num_book." ".$unit?></td>
							<td><?=$mes?></td>
						</tr>
					</tbody>
					<?php 
					$i++;
				}
				}?>
			</table>
	</div>

	

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

<?php
ob_flush();
    require_once("asset/date_thai.php");
?>
<html lang="en">
<!DOCTYPE html>

<head>
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

	<!-- slides script
	<link rel="stylesheet" href="<?=base_url()?>asset/slides/css/global.css"> 
	<script src="<?=base_url()?>asset/slides/js/jquery.min.js"></script>
	<script src="<?=base_url()?>asset/slides/js/slides.min.jquery.js"></script>
	-->
	
	<script>
		$(function(){
			$('#slides').slides({
				preload: true,
				preloadImage: 'img/loading.gif',
				play: 5000,
				pause: 2500,
				hoverPause: true,
				animationStart: function(current){
					$('.caption-slides').animate({
						bottom:-35
					},100);
					if (window.console && console.log) {
						// example return of current slide number
						console.log('animationStart on slide: ', current);
					};
				},
				animationComplete: function(current){
					$('.caption-slides').animate({
						bottom:0
					},200);
					if (window.console && console.log) {
						// example return of current slide number
						console.log('animationComplete on slide: ', current);
					};
				},
				slidesLoaded: function() {
					$('.caption-slides').animate({
						bottom:0
					},200);
				}
			});
		});
	</script>
	<!-- end slides script -->

	<!-- Nivo Slider -->
	<link rel="stylesheet" href="<?=base_url()?>asset/nivo-slider/themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?=base_url()?>asset/nivo-slider/themes/light/light.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?=base_url()?>asset/nivo-slider/themes/dark/dark.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?=base_url()?>asset/nivo-slider/themes/bar/bar.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?=base_url()?>asset/nivo-slider/nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?=base_url()?>asset/nivo-slider/demo/style.css" type="text/css" media="screen" />
    <!-- End Nivo Slider -->
<?php  include 'asset/include/connect_db.inc.php';

	$sql_select = "select * from alumnusstu_tb where SUBSTR(alumnusstu_tb.alumnus_stuid,1,2) = '51' and alumnusstu_tb.alumnus_regisdata_major =  '1' ";
	$sql_result = mysql_query($sql_select) or die("Error ".$sql_select);
	$sql_num_rows_CPE = mysql_num_rows($sql_result) ;
	
	$sql_select = "select * from alumnusstu_tb where SUBSTR(alumnusstu_tb.alumnus_stuid,1,2) = '51' and alumnusstu_tb.alumnus_regisdata_major =  '2' ";
	$sql_result = mysql_query($sql_select) or die("Error ".$sql_select);
	$sql_num_rows_CS = mysql_num_rows($sql_result) ;
	
	$sql_select = "select * from alumnusstu_tb where SUBSTR(alumnusstu_tb.alumnus_stuid,1,2) = '51' and alumnusstu_tb.alumnus_regisdata_major =  '3' ";
	$sql_result = mysql_query($sql_select) or die("Error ".$sql_select);
	$sql_num_rows_it = mysql_num_rows($sql_result) ;
	
	$sql_select = "select * from alumnusstu_tb where SUBSTR(alumnusstu_tb.alumnus_stuid,1,2) = '51' and alumnusstu_tb.alumnus_regisdata_major =  '4' ";
	$sql_result = mysql_query($sql_select) or die("Error ".$sql_select);
	$sql_num_rows_bc = mysql_num_rows($sql_result) ;
	
	$sql_select = "select * from alumnusstu_tb where SUBSTR(alumnusstu_tb.alumnus_stuid,1,2) = '51' and alumnusstu_tb.alumnus_regisdata_major =  '5' ";
	$sql_result = mysql_query($sql_select) or die("Error ".$sql_select);
	$sql_num_rows_gis = mysql_num_rows($sql_result) ;

///count all 54
	$sql_select_all = "select * from alumnusstu_tb where SUBSTR(alumnusstu_tb.alumnus_stuid,1,2) = '51'  ";
	$sql_result_all = mysql_query($sql_select_all) or die("Error ".$sql_select_all);
	$sql_num_rows_all = mysql_num_rows($sql_result_all) ;
?>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
  google.load("visualization", "1", {packages:["corechart"]});
  google.setOnLoadCallback(drawChart);
  function drawChart() {
	var data = google.visualization.arrayToDataTable([
	  ['Task', 'Hours per Day'],
	  ['วิศวกรรมคอมพิวเตอร์',     <? if($sql_num_rows_CPE == 0){ echo "0";}else{echo $sql_num_rows_CPE;}?>],
	  ['วิทยาการคอมพิวเตอร์',      <? if($sql_num_rows_CS== 0){ echo 0;}else{echo $sql_num_rows_CS;}?>],
	  ['เทคโนโลยีสารสนเทศ',  <? if($sql_num_rows_it== 0){ echo 0;}else{echo $sql_num_rows_it;}?>],
	  ['คอมพิวเตอร์ธุรกิจ', <? if($sql_num_rows_bc== 0){ echo 0;}else{echo $sql_num_rows_bc;}?>],
	  ['ภูมิสารสนเทศศาสตร์',    <? if($sql_num_rows_gis== 0){ echo 0;}else{echo $sql_num_rows_gis;}?>]
	]);

	var options = {
	  title: 'สถิติศิษย์เก่าที่สำเร็จการศึกษา ปีการศึกษา 2554 จำนวนทั้งสิ้น  <?=$sql_num_rows_all;?> คน'
	};

	var chart = new google.visualization.PieChart(document.getElementById('piechart_54'));
	chart.draw(data, options);
  }
</script>
<?php
	$sql_select = "select * from alumnusstu_tb where SUBSTR(alumnusstu_tb.alumnus_stuid,1,2) = '52' and alumnusstu_tb.alumnus_regisdata_major =  '1' ";
	$sql_result = mysql_query($sql_select) or die("Error ".$sql_select);
	$sql_num_rows_CPE = mysql_num_rows($sql_result) ;
	
	$sql_select = "select * from alumnusstu_tb where SUBSTR(alumnusstu_tb.alumnus_stuid,1,2) = '52' and alumnusstu_tb.alumnus_regisdata_major =  '2' ";
	$sql_result = mysql_query($sql_select) or die("Error ".$sql_select);
	$sql_num_rows_CS = mysql_num_rows($sql_result) ;
	
	$sql_select = "select * from alumnusstu_tb where SUBSTR(alumnusstu_tb.alumnus_stuid,1,2) = '52' and alumnusstu_tb.alumnus_regisdata_major =  '3' ";
	$sql_result = mysql_query($sql_select) or die("Error ".$sql_select);
	$sql_num_rows_it = mysql_num_rows($sql_result) ;
	
	$sql_select = "select * from alumnusstu_tb where SUBSTR(alumnusstu_tb.alumnus_stuid,1,2) = '52' and alumnusstu_tb.alumnus_regisdata_major =  '4' ";
	$sql_result = mysql_query($sql_select) or die("Error ".$sql_select);
	$sql_num_rows_bc = mysql_num_rows($sql_result) ;
	
	$sql_select = "select * from alumnusstu_tb where SUBSTR(alumnusstu_tb.alumnus_stuid,1,2) = '52' and alumnusstu_tb.alumnus_regisdata_major =  '5' ";
	$sql_result = mysql_query($sql_select) or die("Error ".$sql_select);
	$sql_num_rows_gis = mysql_num_rows($sql_result) ;

///count all 55
	$sql_select_all = "select * from alumnusstu_tb where SUBSTR(alumnusstu_tb.alumnus_stuid,1,2) = '52'  ";
	$sql_result_all = mysql_query($sql_select_all) or die("Error ".$sql_select_all);
	$sql_num_rows_all = mysql_num_rows($sql_result_all) ;
?>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
  google.load("visualization", "1", {packages:["corechart"]});
  google.setOnLoadCallback(drawChart);
  function drawChart() {
	var data = google.visualization.arrayToDataTable([
	  ['Task', 'Hours per Day'],
	  ['วิศวกรรมคอมพิวเตอร์',     <? if($sql_num_rows_CPE == 0){ echo "0";}else{echo $sql_num_rows_CPE;}?>],
	  ['วิทยาการคอมพิวเตอร์',      <? if($sql_num_rows_CS== 0){ echo 0;}else{echo $sql_num_rows_CS;}?>],
	  ['เทคโนโลยีสารสนเทศ',  <? if($sql_num_rows_it== 0){ echo 0;}else{echo $sql_num_rows_it;}?>],
	  ['คอมพิวเตอร์ธุรกิจ', <? if($sql_num_rows_bc== 0){ echo 0;}else{echo $sql_num_rows_bc;}?>],
	  ['ภูมิสารสนเทศศาสตร์',    <? if($sql_num_rows_gis== 0){ echo 0;}else{echo $sql_num_rows_gis;}?>]
	]);

	var options = {
	  title: 'สถิติศิษย์เก่าที่สำเร็จการศึกษา ปีการศึกษา 2555 จำนวนทั้งสิ้น  <?=$sql_num_rows_all;?> คน '
	};

	var chart = new google.visualization.PieChart(document.getElementById('piechart_55'));
	chart.draw(data, options);
  }
</script>

    
</head>

<body >
	
  	<div class="container">
    <!-- Contents -->
        <div class="row">
            <!-- Left Menu -->
            <div class="col-md-2">
                <label><strong>ศิษย์เก่า ICT UP</strong></label>
                <ul id="leftbar" class="nav nav-pills nav-stacked">
                    <hr>
                    <li><a href="newsletter">จดหมายข่าวศิษย์เก่า</a></li>
                    <li><a href="db_alumnus">ทำเนียบศิษย์เก่า</a></li>
                    <li><a href="db_best">ศิษย์เก่าดีเด่น</a></li>
                    <li><a href="db_stat">สถิติศิษย์เก่า</a></li>
                    <li><a href="db_picture">ภาพกิจกรรม</a></li>
                    <li><a href="db_contact">ติดต่อเรา</a></li>
                </ul>
                
                <!--Hot News Panal For Extra Small Devices-->
                
            </div>  <!--End of Left Menu -->
            <!-- Content Container -->
            <div id="content" class=" col-md-6 panel panel-default">
                <p class="article-header" style="line-height:30px;">สถิติศิษย์เก่า คณะเทคโนโลยีสารสนเทศและการสื่อสาร มหาวิทยาลัยพะเยา</p>
				<div id="piechart_54" style="width: 700px; height: 500px;"></div>
                <div id="piechart_55" style="width: 700px; height: 500px;"></div>
            </div>
        </div> <!--End of div#contents-->
	</div> <!--End of Content Container-->
    
    <!-- Javascripts -->
	<script type="text/javascript" src="<?=base_url()?>asset/bootstraps/js/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>asset/bootstraps/css/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>asset/bootstraps/js/site_controller.js"></script>
	<script type="text/javascript" src="<?=base_url()?>asset/nivo-slider/demo/scripts/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>asset/nivo-slider/jquery.nivo.slider.js"></script>
    <script type="text/javascript">
		$(window).load(function() {
			$('#slider').nivoSlider();
		});
    </script>
</body>
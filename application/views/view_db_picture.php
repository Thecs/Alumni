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
    
    <link rel="stylesheet" href="<?=base_url()?>asset/nivo-slider/themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?=base_url()?>asset/nivo-slider/themes/light/light.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?=base_url()?>asset/nivo-slider/themes/dark/dark.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?=base_url()?>asset/nivo-slider/themes/bar/bar.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?=base_url()?>asset/nivo-slider/nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?=base_url()?>asset/nivo-slider/demo/style.css" type="text/css" media="screen" />
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
            <div id="content" class=" ">
                <div id="fb-root"></div><script>(function(d, s, id) { var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "//connect.facebook.net/en_US/all.js#xfbml=1"; fjs.parentNode.insertBefore(js, fjs); }(document, 'script', 'facebook-jssdk'));</script><div class="fb-post" data-href="https://www.facebook.com/media/set/?set=a.652340871493276.1073741825.382402351820464&amp;type=1" data-width="704"><div class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/media/set/?set=a.652340871493276.1073741825.382402351820464&amp;type=1">Post</a> by <a href="https://www.facebook.com/Alumniict">ICT &#064;UP Alumni</a>.</div></div>
        
        <div id="fb-root"></div> <script>(function(d, s, id) { var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "//connect.facebook.net/en_US/all.js#xfbml=1"; fjs.parentNode.insertBefore(js, fjs); }(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-post" data-href="https://www.facebook.com/media/set/?set=a.384146268312739.83315.382402351820464&amp;type=1" data-width="704"><div class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/media/set/?set=a.384146268312739.83315.382402351820464&amp;type=1">Post</a> by <a href="https://www.facebook.com/Alumniict">ICT &#064;UP Alumni</a>.</div></div>
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
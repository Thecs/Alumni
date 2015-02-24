<?php
    require_once("asset/date_thai.php");
?>
<html lang="en">
<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <title>Bootstrap, from LayoutIt!</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

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
</head>

<body >
	<div class="layout_alumni_db">
		<h1 class="header_alumni_title">ระบบฐานข้อมูลศิษย์เก่า คณะเทคโนโลยีสารสนเทศและการสื่อสาร</h1>
		<div class="slider-wrapper theme-light">
		    <div id="slider" class="nivoSlider">
		        <img src="<?=base_url()?>images/slide/1.jpg" alt="" data-transition="slideInLeft"  />
		        <a href="http://dev7studios.com"><img src="<?=base_url()?>images/slide/2.jpg" alt="" data-transition="slideInLeft"/></a>
		        <img src="<?=base_url()?>images/slide/3.jpg" alt="" data-transition="slideInLeft" />
		        <img src="<?=base_url()?>images/slide/4.jpg" alt="" data-transition="slideInLeft" />
		        <img src="<?=base_url()?>images/slide/5.jpg" alt="" data-transition="slideInLeft" />
		        <img src="<?=base_url()?>images/slide/6.jpg" alt="" data-transition="slideInLeft" />
		        <img src="<?=base_url()?>images/slide/7.jpg" alt="" data-transition="slideInLeft" />
		        <img src="<?=base_url()?>images/slide/8.jpg" alt="" data-transition="slideInLeft" />
		    </div>
		    <div id="htmlcaption" class="nivo-html-caption">
		        <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>. 
		    </div>
		</div>
		
		<h1 class="header_alumni">ประวัติศิษย์เก่าน่าสนใจ</h1>
		<div class="row">
			<div class="span12">
				<div class="row">
					<div class="span12">

						<ul class="thumbnails">

							<li class="span4">
								<div class="thumbnail">
									<img alt="300x200" src="<?=base_url()?>images/slide/1.jpg" width="800px" height="600px">
									<div class="caption">
										<h3>
											Thumbnail label
										</h3>
										<p>
											Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
										</p>
										<p>
											<a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
										</p>
									</div>
								</div>
							</li>
							<li class="span4">
								<div class="thumbnail">
									<img alt="300x200" src="<?=base_url()?>images/slide/2.jpg" width="800px" height="600px">
									<div class="caption">
										<h3>
											Thumbnail label
										</h3>
										<p>
											Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
										</p>
										<p>
											<a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
										</p>
									</div>
								</div>
							</li>
							<li class="span4">
								<div class="thumbnail">
									<img alt="300x200" src="<?=base_url()?>images/slide/3.jpg" width="800px" height="600px">
									<div class="caption">
										<h3>
											Thumbnail label
										</h3>
										<p>
											Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
										</p>
										<p>
											<a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
										</p>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div></div></div>
		<div >
		<h1 class="header_alumni">สมาชิกล่าสุด</h1>
		<div class="row">
			<div class="span12">
				<div class="row">
					<div class="span12">

						<ul class="thumbnails">

							<li class="span4">
								<div class="thumbnail">
									<img alt="300x200" src="<?=base_url()?>images/slide/1.jpg" width="800px" height="600px">
									<div class="caption">
										<h3>
											Thumbnail label
										</h3>
										<p>
											Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
										</p>
										<p>
											<a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
										</p>
									</div>
								</div>
							</li>
							<li class="span4">
								<div class="thumbnail">
									<img alt="300x200" src="<?=base_url()?>images/slide/2.jpg" width="800px" height="600px">
									<div class="caption">
										<h3>
											Thumbnail label
										</h3>
										<p>
											Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
										</p>
										<p>
											<a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
										</p>
									</div>
								</div>
							</li>
							<li class="span4">
								<div class="thumbnail">
									<img alt="300x200" src="<?=base_url()?>images/slide/3.jpg" width="800px" height="600px">
									<div class="caption">
										<h3>
											Thumbnail label
										</h3>
										<p>
											Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
										</p>
										<p>
											<a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
										</p>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
            </div>
            </div>	
	</div>
	<script type="text/javascript" src="<?=base_url()?>asset/nivo-slider/demo/scripts/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>asset/nivo-slider/jquery.nivo.slider.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>

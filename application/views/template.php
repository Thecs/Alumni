<!DOCTYPE HTML>	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<html>
<head>
<!--<link rel="stylesheet" type="text/css" href="css/mystyle.css">-->
<?=link_tag('css/mystyle.css'); ?>
<link type="text/css" href="<?=base_url();?>asset/menu/menu.css" rel="stylesheet" />
<script type="text/javascript" src="<?=base_url();?>asset/menu/jquery.js"></script>
<script type="text/javascript" src="<?=base_url();?>asset/menu/menu.js"></script>
<title><?=$page_title ?></title>
<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	
	<!--[if lte IE 7]>
		<link rel="stylesheet" type="text/css" media="all" href="css/ie.css"/>
		<script src="js/IE8.js" type="text/javascript"></script><![endif]-->
		
	<!--[if lt IE 7]>
		<link rel="stylesheet" type="text/css" media="all" href="css/ie6.css"/><![endif]-->

<style>
	#pageshare {
		position: fixed;
		left: 10px;
		float: left;
		border: 1px solid #EF5F00;
		border-radius: 5px;
		background-color: #FFF;
		padding: 5px;
		z-index: 99;
		box-shadow: 0px 0px 5px 5px #CCC;
	}
	body, td, th {
		font-family: Tahoma;
	}
	TD {
		font-size: 11px;
		color: #666;
		font-family: Tahoma,Arial,Helvetica,sans-serif;
	}
</style>
</head>
<body id="index" class="home" >
	<?php 
	if ( $this->uri->segment(1)!= "alumninight" ){?>
		<div id="pageshare">
			<center><a href="<?=base_url()?>alumninight/alumniregister"><img src="<?=base_url()?>images/banner3.jpg" width="230px"></a></center>
		</div>
	<?php }?>
    
	<div align="center">
    
	<div style="background-color:#fff5ee ; width: 1100px; margin-top: 10px;border-radius: 20px;
-moz-box-shadow: 5px 5px 5px 5px #ccc;
-webkit-box-shadow: 5px 5px 5px 5px #ccc;
box-shadow: 5px 5px 5px 5px #ccc;" >
	<div style="height: 1px"></div>
	<div align="center" style="margin-top: 40px; "><img src="<?=base_url()?>images/banner.png" align="center" width="1050px"/></div>
	<div style="height: -15px"></div>
	<div id="menu">
	    <ul class="menu">
	        <li><a href="<?=base_url()?>" class="parent"><span>หน้าหลัก</span></a></li>
	        <!--<li><a href="#" class="parent"><span>จุดประสงค์</span></a>
	            <ul>
	                <li><a href="#" class="parent"><span>Sub Item 1</span></a>
	                    <ul>
	                        <li><a href="#"><span>Sub Item 1.1</span></a></li>
	                        <li><a href="#"><span>Sub Item 1.2</span></a></li>
	                    </ul>
	                </li>
	                <li><a href="#" class="parent"><span>Sub Item 2</span></a>
	                    <ul>
	                        <li><a href="#"><span>Sub Item 2.1</span></a></li>
	                        <li><a href="#"><span>Sub Item 2.2</span></a></li>
	                    </ul>
	                </li>
	                <li><a href="#"><span>Sub Item 3</span></a></li>
	                <li><a href="#"><span>Sub Item 4</span></a></li>
	                <li><a href="#"><span>Sub Item 5</span></a></li>
	                <li><a href="#"><span>Sub Item 6</span></a></li>
	                <li><a href="#"><span>Sub Item 7</span></a></li>
	            </ul>
	        </li>
	        <li><a href="#"><span>เว็บบอร์ด</span></a></li>-->
            <?php
			/*
            if ($this->session->userdata('logged_in')== "" ){ ?>
		        <li class="parent"><a href="<?=base_url()?>p/alumni_db"><span>ฐานข้อมูลศิษย์เก่า</span></a></li>
            <?php 
        	}
            if ($this->uri->segment(1)!= "alumni_register" ){ ?>
		        <li class="parent" style="color:#FFF;" ><a href="<?=base_url()?>register/"><red><span>ลงทะเบียนศิษย์เก่า</span></red></a></li>
            <?php 
        	}   */  ?>
            <?php 
            if ($this->session->userdata('logged_in')== "" ){ ?>
		        <li class="parent"><a href="#"><span>Contact us</span></a>
	                <ul>
	                    <?php if ($this->uri->segment(2) != "staff"){ ?> <li ><a href="<?=base_url()?>p/staff" ><span>ติดต่อเจ้าหน้าที่</span></a></li><?php }?>
		                <?php if ($this->uri->segment(2) != "login" && $this->session->userdata('logged_in')!= 1 ){?> <li><a href="<?=base_url()?>p/login" ><span>ผู้ดูแลระบบ</span></a></li><?php }?>
		            </ul>
		        </li>
            <?php 
        	} ?>
			<?php
                if ($this->session->userdata('user_data')!= "" && $this->uri->segment(2) != "manage"  ) {?> <li class=\"last\"><a href="<?=base_url()."admin";?>"><span>จัดการข่าวสาร</span></a></li> <?php  }
                if ($this->session->userdata('user_data')!= "" ) {?> <li class=\"last\"><a href="<?=base_url()."p/logout";?>"><span>ออกจากระบบ</span></a></li> <?php  }
                ?>
            <li class="parent"><a href="<?=base_url()?>db_best"><span class="regis-evening-alumni">ฐานข้อมูลศิษย์เก่า</span></a></li>
            <li class="parent"><a href="<?=base_url()?>alumninight"><span class="regis-evening-alumni">งานศิษย์เก่า "Home Sweet Home 2015"</span></a></li>
			<li class="parent"><a href="<?=base_url()?>alumninight/coordinator"><span class="regis-evening-alumni">ผู้ประสานงาน งานศิษย์เก่า "Home Sweet Home 2015"</span></a></li>
	    </ul>
	</div>
	<div style="height: -15px"></div>
	<aside id="featured" class="body">
		<?php print $content ?>
        
    	<div class="bottom-free"></div>
    </aside>
	

</div>

</div>
<footer id="contentinfo" class="body">
    <p align="center" class="footer">&copy copyright 2013 School Of Information And Communication Technology at University Of Phayao</p>
</footer>
<div style="visibility: hidden">
     <br />
     <a href="http://apycom.com/" >Apycom jQuery Menus</a><br />
</div>
</body>
</html> 
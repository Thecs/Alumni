<link rel="stylesheet" href="<?=base_url();?>asset/tab/jquery-ui-1.10.2/themes/base/jquery-ui.css" />
<script src="<?=base_url();?>asset/tab/jquery-ui-1.10.2/jquery-1.9.1.js"></script>
<script src="<?=base_url();?>asset/tab/jquery-ui-1.10.2/ui/jquery-ui.js"></script>
<link rel="stylesheet" href="<?=base_url();?>asset/tab/jquery-ui-1.10.2/themes/base/minified/jquery.ui.tabs.min.css" />
<link rel="stylesheet" href="<?=base_url();?>css/mystyle.css" />

<link href="<?=base_url();?>asset/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!--- fancy box library-->
<!-- Add jQuery library -->
<!-- Add mousewheel plugin (this is optional) -->
<?php /*<script type="text/javascript" src="<?=base_url()?>asset/fancybox/jquery-1.8.0.min.js"></script>
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
  <?php
 $data_image_pr = array(
               'src' => 'images/news.png',
               'height' => '20px',
               'width' => '20px',
               'alt' => 'Pr'
          );
?>
<body>
<form action="" method="" >
	<div class="header_register">กรุณากรอกข้อมูลของท่านให้ครบถ้วน เพื่อบันทึกสู่ฐานข้อมูลศิษย์เก่า</div>
   	<table class="tb_register" border="1">
       	<tr class="">
           	<td class="tb_register_left">คำนำหน้า</td>
            <td class="tb_register_right" colspan="4"></td>
        </tr>
        <tr>
           	<td class="tb_register_left">ชื่อ</td>
            <td></td>
            <td>นามสกุล</td>
            <td></td>
        </tr>
            
    </table>
</form>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

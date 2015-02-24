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
<body>
	
    <div class="header_register">รายชื่อผู้ประสานงานสำรองโต๊ะและที่นั่งงาน "ศิษย์เก่า ICT" <h6>จัดงานวันเสาร์ ที่ 28 กุมภาพันธ์ 2557 ตั้งแต่เวลา 13.00 น. เป็นต้นไป</h6></div>
    <!--<div class="note" >
    	<h5>:::: ราคาโต๊ะและที่นั่งงาน "ศิษย์เก่า ICT" ::::</h5>
		- 1 โต๊ะ ราคา 1,500 บาท<br>
        - 1 ที่นั่ง ราคา 300 บาท
        <h6>จัดงานวันเสาร์ ที่ 8 กุมภาพันธ์ 2556 ตั้งแต่เวลา 18.00 น. เป็นต้นไป</h6>
	</div>-->
    <!--<table class="table table-hover">
    	<thead>
            <tr>
                <td><b>ลำดับที่</b></td>
                <td><b>ชื่อผู้จอง</b></td>
                <td><b>ประเภทการจอง</b></td>
                <td><b>จำนวน</b></td>
                <td><b>สถานะการโอนเงิน</b></td>
            </tr>
      	</thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
    </table>
    --->
    <img src="<?=base_url()?>images/coordinator.jpg">

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

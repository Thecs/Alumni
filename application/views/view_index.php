<link rel="stylesheet" href="<?=base_url();?>asset/tab/jquery-ui-1.10.2/themes/base/jquery-ui.css" />
<script src="<?=base_url();?>asset/tab/jquery-ui-1.10.2/jquery-1.9.1.js"></script>
<script src="<?=base_url();?>asset/tab/jquery-ui-1.10.2/ui/jquery-ui.js"></script>
<link rel="stylesheet" href="<?=base_url();?>asset/tab/jquery-ui-1.10.2/themes/base/minified/jquery.ui.tabs.min.css" />
<link rel="stylesheet" href="<?=base_url();?>css/mystyle.css" />


<!--- fancy box library-->
<!-- Add jQuery library -->
<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="<?=base_url()?>asset/fancybox/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>asset/fancybox/source/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="<?=base_url()?>asset/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
<link rel="stylesheet" href="<?=base_url()?>asset/fancybox/source/jquery.fancybox.css" type="text/css" media="screen" />



<!--  End fancy box library -->



<?php
    include_once("asset/date_thai.php");
?>
<!--- fancy box script -->
<script type="text/javascript">
$(document).ready(function() {

        $("#aLink").fancybox({
            'width'             : '800px',
            'height'            : '600px',
            'autoScale'         : false,
            'transitionIn'      : 'none',
            'transitionOut'     : 'none',
            'type'              : 'iframe',
        });
});
</script>
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
	$data_image_pr_2 = array(
               'src' => 'images/techno.png',
               'height' => '20px',
               'width' => '20px',
               'alt' => 'Pr'
          );
?>
<body onLoad="$('#aLink').trigger('click');">
<!--<a id="aLink" href="<?=base_url()?>p/popup"></a> -->
<div id="tabs_news">
	<ul>
		<li><a href="#tabs-1"><sub><?=img($data_image_pr)?></sub><B> ข่าวประชาสัมพันธ์/สมัครงาน</B></a></li>
         <li><a href="#tabs-2"><sub><?=img($data_image_pr_2)?></sub><B> ข่าวสาร IT</B></a></li>
	</ul>
    
	<div id="tabs-1">
                <?php
                $query_webnews = $this -> model_news -> select_show_news();
                if ($query_webnews->num_rows()>0){
                foreach ($query_webnews->result() as $row){
                        $data_image_prNews = array(
                                'src' => 'images/say.png',
                                'height' => '16px',
                                'width' => '16px',
                                'alt' => 'say'
                        );
                        $data_image_prDelete = array(
                                'src' => 'images/delete.png',
                                'height' => '16px',
                                'width' => '16px',
                                'alt' => 'Pr'
                        );
                    ?>
                    <div><sub><?=img($data_image_prNews)?></sub><strong><?=nbs(3)?><a href="p/readnews?p=<?=$row->id?>" target="_blank"><?=$row->topic?></a></strong> - <?=DateThai($row->post_date);?> : <?=$row->headline?></div>
                    
                    <?php
                    }
                }else{
                ?>
                    <div>ไม่มีรายการข่าวสาร !!!</div>
                <?php
                }
                ?>  
    </div>
    <div id="tabs-2">
                <?php
                $query_webnews = $this -> model_news -> select_show_news_it();
                if ($query_webnews->num_rows()>0){
                foreach ($query_webnews->result() as $row){
                        $data_image_prNews = array(
                                'src' => 'images/chat2.png',
                                'height' => '16px',
                                'width' => '16px',
                                'alt' => 'say'
                        );
                        $data_image_prDelete = array(
                                'src' => 'images/delete.png',
                                'height' => '16px',
                                'width' => '16px',
                                'alt' => 'Pr'
                        );
                    ?>
                    <div><sub><?=img($data_image_prNews)?></sub><strong><?=nbs(3)?><a href="p/readnews?p=<?=$row->id?>" target="_blank"><?=$row->topic?></a></strong> - <?=DateThai($row->post_date);?> : <?=$row->headline?></div>
                    
                    <?php
                    }
                }else{
                ?>
                    <div>ไม่มีรายการข่าวสาร !!!</div>
                <?php
                }
                ?>  
    </div>
</div>  
<div align="right"><a href="<?=base_url()?>p/news_show"><image src="images/readmore.png" width="80px"></a></div>
<hr/><br/>
<table width="1050px">
	<tr>
		<td width = "800px"><div class="fb-like-box" data-href="https://www.facebook.com/Alumniict" data-width="800px" data-height="400" data-show-faces="true" data-header="true" data-stream="true" data-show-border="false"></div></td>
		<td width = "250px" valign="top">
		<table width = "250px">
      <tr>
        <td><h1 ><label class="header_widgets_title">Link ที่เกี่ยวข้อง</label></h1></td>
      </tr>
			<tr>
				<td width = "250px"><a href="http://www.dsa.up.ac.th/alumni/" target="_blank"><img src="<?=base_url()?>images/alumni_up.jpg" width="150" height="58"></a></td>
			</tr>
			<tr>
				<td width = "250px"><a href="https://www.facebook.com/groups/348026945233869/" target="_blank"><img src="<?=base_url()?>images/alumni_banner_facebook.jpg" width="150" height="58"></a></td>
			</tr>
		</table>
		<tr>
		</td>
	</tr>
</table>



</body>


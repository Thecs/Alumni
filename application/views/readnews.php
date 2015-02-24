<title><?=$title;?></title>
<div align="center"><image src="<?=base_url()?>images/banner_pr.png" height="50px" width="200px" ></div>
<div align="left" class="header_read_news">ข่าวสารคณะ</div>
<div align="left" class="header_read_news"><?=$title;?></div>
<div align="left" class="content_read_news"><?=$post_date;?></div>
<div><table><tr height="10px"></tr></table></div>
<div ><hr></div>
<div><table><tr height="10px"></tr></table></div>
<div width="1050px" class="read_news_content"> 
    <?php
        $FileNewsTopic = "asset/newsdata/".$posted_file.".txt";
        $file_open = @fopen($FileNewsTopic, "r");
        $content = @fread ($file_open, @filesize($FileNewsTopic));
        $Detail = stripslashes($content);
        echo $Detail;
    ?>
</div>
<div><table><tr height="10px"></tr></table></div>
<div align="left" class="header_read_news">เข้าชม : <?=$pageview?></div>
<div align="left" class="header_read_news">ผู้ประกาศ : <?=$post_by?></div>
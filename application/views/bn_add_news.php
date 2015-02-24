<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<html>
    <head>
        <script type="text/javascript" src="<?php echo base_url(); ?>asset/fckeditor/fckeditor.js"></script>
    </head>
    <body>
    <?php
    $data_image_back = array(
        'src' => 'images/back.png',
        'width' => '130px;',
        'alt' => 'back'
    );
    echo form_open('admin/save_news');
    ?>

    <div align="left"><a href="<?=base_url()."admin/pr"?>"><sub><?=img($data_image_back)?></sub></a></div>
    
    <div style="height: 15px"></div>
    <div id="bn_header_manage">ข่าวสาร/ประชาสัมพันธ์ ศิษย์เก่าคณะเทคโนโลยีสารสนเทศและการสื่อสาร</div>
    <div style="height: 30px"></div>
    
        <div align="left"><strong>หัวข้อข่าว : </strong><input type="text" name="title" id="title"  size="50" /></div>
        <div style="height: 15px"></div>
        <div align="left"><strong>รายละเอียดย่อ : </strong><input type="text" name="detail_shortly" id="detail_shortly"  size="70" /></div>
        <div style="height: 15px"></div>
        <div align="left"><strong>ข้อมูลข่าว : </strong></div>
        
        <div align="left"><textarea name="detail" id="detail" ></textarea></div>
        <script type="text/javascript">
            var oFCKeditor = new FCKeditor( 'detail' ) ;
            oFCKeditor.BasePath	= '<?php echo base_url(); ?>asset/fckeditor/';
            oFCKeditor.Height = 500;
            oFCKeditor.Width = 800;
            oFCKeditor.ReplaceTextarea() ;
        </script>
        <?=br(2)?>
        <input type="submit" name="submit" value="ประกาศข่าว" class="bn_post_news" />
    <?php
    echo form_close();
    //</form>
    ?>
    </body>
</html>
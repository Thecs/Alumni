<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<html>
    <body>
        <?php
        include_once("asset/date_thai.php");
        ?>
        <div align="center">
        <?php
            $data_image_back = array('src' => 'images/back.png','width' => '130px','alt' => 'back');
            $data_image_write_news = array('src' => 'images/write_news.png','width' => '130px','alt' => 'back');
        ?>
        <div align="left"><a href="<?=base_url()."admin"?>"><sub><?=img($data_image_back)?></sub></a><a href="<?=base_url()."admin/bn_add_news_it"?>"><sub><?=img($data_image_write_news)?></sub></a></div>
        <div style="height: 30px"></div>
        <div id="bn_header_manage">ข่าวสาร IT ศิษย์เก่าคณะเทคโนโลยีสารสนเทศและการสื่อสาร</div>
        <div style="height: 15px"></div>
        <table width="900px" id="bn_table_list"  border="1">
            <tbody>
                <tr id="bn_table_list">
                    <td width="50px">ลำดับที่</td>
                    <td width="450px">หัวข้อข่าว</td>
                    <td width="150px">ประกาศโดย</td>
                    <td width="200px">วันที่ประกาศ</td>
                    <td width="80px">####</td>
                </tr>
                <?php
                $query_webnews = $this -> model_news -> select_news_it();
                if ($query_webnews->num_rows()>0){
                $count=1;
                foreach ($query_webnews->result() as $row){
                        $data_image_prEdit = array(
                                'src' => 'images/edit2.png',
                                'height' => '16px',
                                'width' => '16px',
                                'alt' => 'Pr'
                        );
                        $data_image_prDelete = array(
                                'src' => 'images/delete.png',
                                'height' => '16px',
                                'width' => '16px',
                                'alt' => 'Pr'
                        );
                    ?>
                    <tr class="tb_content">
                        <td width="50px" valign="top"><?=$count?></td>
                        <td width="450px" align="left"><?=$row->topic?></td>
                        <td width="150px" valign="top"><?=$row->post_by?></td>
                        <td width="200px" valign="top"><?=DateThai($row->post_date);?></td>
                        <td width="80px" valign="top"><?=img($data_image_prEdit)?><?=nbs(3)?><a href="del_news?id=<?=$row->id?>" onClick="return confirm('กรุณายืนยันการลบ !!!')" ><?=img($data_image_prDelete)?></a></td>
                    </tr>
                    <?php
                    $count++;
                    }
                }else{
                ?>
                    <tr>
                        <td colspan="5" class="tb_content">ไม่มีรายการข่าวสาร !!!</td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <div style="height: 15px"></div>
        <?php
        echo $this->pagination->create_links();
        ?>
        </div>
    </body>
</html>
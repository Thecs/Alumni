<html>
	<body>
		<?php  ///form_open('p/chk_login');?>
            <div width="300px" align="center">		
                                           <TABLE width="700px" align="center" border="0">
                                                    <tbody>
                                                    	<tr>
                                                        	<td colspan="2" align="right"><strong><?=$user?> : กำลังอยู่ในระบบ</strong></td>
                                                        </tr>
                                                           <TR>
                                                                    <TD align="left" width="200px"></TD>
                                                                    <TD align="left" width="500px"><?php
                                                                                                        $data_image_pr = array(
                                                                                                                      'src' => 'images/add_news.png',
                                                                                                                      'height' => '28px',
                                                                                                                      'width' => '28px',
                                                                                                                      'alt' => 'Pr'
                                                                                                                 );
                                                                    ?>                                                                  
                                                                    <a id="bn_topic"  href="<?=base_url()."admin/pr"?>"><sub><?=img($data_image_pr)?></sub> ประชาสัมพันธ์ข่าวทั่วไป</a></TD>
                                                            </TR>
                                                            <TR>
                                                                    <TD align="left" width="200px"></TD>
                                                                    <TD align="left" width="500px"><?php
                                                                                                        $data_image_pr_it = array(
                                                                                                                      'src' => 'images/techno.png',
                                                                                                                      'height' => '28px',
                                                                                                                      'width' => '28px',
                                                                                                                      'alt' => 'Pr_it'
                                                                                                                 );
                                                                    ?>                                                                  
                                                                    <a id="bn_topic"  href="<?=base_url()."admin/pr_it"?>"><sub><?=img($data_image_pr_it)?></sub> ประชาสัมพันธ์ข่าว IT</a></TD>
                                                            </TR>
                                                            <!---<tr>
                                                                <td height="15px"></td>
                                                            </tr>
                                                            <TR>
                                                                    <TD  align="left" width="200px"></TD>
                                                                    <TD align="left" width="500px"><?php
                                                                                                        $data_image_job = array(
                                                                                                                      'src' => 'images/add_job.png',
                                                                                                                      'height' => '28px',
                                                                                                                      'width' => '28px',
                                                                                                                      'alt' => 'Pr'
                                                                                                                 );
                                                                    ?>                                                                  
                                                                    <a id="bn_topic"  href="<?=base_url()."admin/work"?>"><sub><?=img($data_image_job)?></sub> ข่าวสมัครงาน</a></TD>
                                                            </TR>-->
                                                    </tbody>
                                            </TABLE> 
            </div>
		<!-- </form> -->
        <br><br><br>

	</body>
</html>
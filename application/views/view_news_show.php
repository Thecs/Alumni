<?php
    require_once("asset/date_thai.php");
?>
<html>
	<body>
		<div align="left"><strong>ประกาศข่าวสาร - บริการวิชาการ ศิษย์เก่าคณะเทคโนโลยีสารสนเทศและการสื่อสาร</strong></div>
		<br/>
		<div align="center">
			<TABLE width="800px" align="center" border="0">
				<tbody>
				<?php
					foreach ($new_show->result() as $row){
						$data['id'] = $row->id;
						$data['topic'] = $row->topic;
						$data['post_date'] = $row->post_date;
						$data['post_by'] = $row->post_by;
						?>
						<tr>
							<td width="50px" rowspan="2"><img src="<?=base_url()?>images/speaker.png" width="30px" height="30px" valign="center"></td>
							<td width="600px"><strong><a href="<?=base_url()?>p/readnews?p=<?=$data['id']?>">เรื่อง : <?=$data['topic']?></strong></a><br/>เวลาที่ประกาศ : <?=DateThai($row->post_date)?><br/><?="ผู้ประกาศ : ".$data['post_by']?></td>
						</tr>
						<tr>
							<td colspan="2" ><hr/></td>
						</tr>
					<?php 
					}	
					?>
				</tbody>
			</TABLE>
		</div>
	</body>
</html>
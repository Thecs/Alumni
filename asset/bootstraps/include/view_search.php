<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<head>
<?php 
  include 'connect_db.inc.php'
?>



<link type="text/css" href="../../../css/mystyle.css')" ?>
<link type="text/css" href="../../../asset/menu/menu.css" rel="stylesheet" />
<script type="text/javascript" src="../../../asset/menu/jquery.js"></script>
<script type="text/javascript" src="../../../asset/menu/menu.js"></script>

<link rel="stylesheet" href="../../../asset/tab/jquery-ui-1.10.2/themes/base/jquery-ui.css" />
<script src="../../../asset/tab/jquery-ui-1.10.2/jquery-1.9.1.js"></script>
<script src="../../../asset/tab/jquery-ui-1.10.2/ui/jquery-ui.js"></script>
<link rel="stylesheet" href="../../../asset/tab/jquery-ui-1.10.2/themes/base/minified/jquery.ui.tabs.min.css" />
<link rel="stylesheet" href="../../../css/mystyle.css" />

<link href="../../../asset/bootstrap/css/bootstrap.min.css" rel="stylesheet">



<link rel="stylesheet" href="../../../asset/bootstraps/css/bootstrap/css/bootstrap.min.css" />
<link rel="stylesheet" href="../../../asset/bootstraps/css/ms-viewport.css" />
<link rel="stylesheet" href="../../../asset/bootstraps/css/paragraph.css" />
<link rel="stylesheet" href="../../../asset/bootstraps/css/spacer.css" />
<link rel="stylesheet" href="../../../asset/bootstraps/css/panel-overrided.css" />
<link rel="stylesheet" href="../../../asset/bootstraps/css/list-group-overrided.css" />
<link rel="stylesheet" href="../../../asset/bootstraps/css/newsfeed.css" />
    
    
<link href="../../../asset/bootstraps/css/bootstrap.min.css" rel="stylesheet">
<link href="../../../asset/bootstraps/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="../../../asset/bootstraps/css/style.css" rel="stylesheet">

<title>ผลการค้นหา ฐานข้อมูลศิษย์เก่า คณะ ICT มหาวิทยาลัยพะเยา</title>

</head>
<body style="margin: -40px 5% 5% 5%;">

<div style="visibility: hidden">
         <br />
         <a href="http://apycom.com/" >Apycom jQuery Menus</a><br />
</div>
    <br><br>
    <div style="border: 1px solid #CCC;margin: 0 1% 1% 0;padding: 1% 1% 1% 1%;-moz-border-radius: 10px;-webkit-border-radius: 10px;border-radius: 10px; background-color:#FFF5EE">
				<legend ><span style="color:#F00; font-size:12px; float:right;">	<span style="background-color:#CCC; font-size:20px; ">ผลการค้นหา ฐานข้อมูลศิษย์เก่า คณะ ICT มหาวิทยาลัยพะเยา</span>
</span></legend>
                    
                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-hover" >
                  <tbody>
                    <tr style="background-color:#8080C0; color:#FFF">
                        <th width="5%" scope="col">No.</th>
                        <th width="15%" scope="col"><div align="center">รหัสนิสิต</div></th>
                        <th width="27%" scope="col"><div align="left">ชื่อ - นามสกุล</div></th>
                        <th width="40%" scope="col"><div align="left">สาขาวิชา</div></th>
                        <th width="13%" scope="col"><div align="center">รายละเอียด</div></th>
                    </tr>
                  <?php
				  error_reporting(E_ALL ^ E_NOTICE); 
				  
					  if(@$_POST['id_stu'] != ""){
						  //echo "111";
						  $sql_select = "select * from alumnusstu_tb where (alumnusstu_tb.alumnus_stuid LIKE '%".@$_POST['id_stu']."%'  ) ";
						  $sql_result = mysql_query($sql_select) or die("Error ".$sql_select);
						  $sql_num_rows = mysql_num_rows($sql_result) ;
						  $count=0;
						  
							$strSQL = "SELECT * FROM alumnusstu_tb WHERE (alumnusstu_tb.alumnus_stuid LIKE '%".@$_POST['id_stu']."%' )";
							$objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
							$Num_Rows = mysql_num_rows($objQuery);
							
							
							$Per_Page = 100;   // Per Page
							
							$Page = $_GET["Page"];
							if(!$_GET["Page"])
							{
							$Page=1;
							}
							
							$Prev_Page = $Page-1;
							$Next_Page = $Page+1;
							
							$Page_Start = (($Per_Page*$Page)-$Per_Page);
							if($Num_Rows<=$Per_Page)
							{
							$Num_Pages =1;
							}
							else if(($Num_Rows % $Per_Page)==0)
							{
							$Num_Pages =($Num_Rows/$Per_Page) ;
							}
							else
							{
							$Num_Pages =($Num_Rows/$Per_Page)+1;
							$Num_Pages = (int)$Num_Pages;
							}
							
							
							$sql_select .=" order  by alumnus_regisdata_major ASC LIMIT $Page_Start , $Per_Page";
							$sql_result  = mysql_query($sql_select);
							if($sql_num_rows>0){
							  while ($result= mysql_fetch_array($sql_result)) { 
								$count++;
								?>
								<tr>
								  <td style="font-size:12px; text-align:center"><?=$count?></td>
								  <td style="font-size:12px"><?=$result['alumnus_stuid']?></td>
								  <td style="font-size:12px"><?=$result['alumnus_regisdata_nameth']?></td>
								  <td style="font-size:12px"><?php 
								  if($result['alumnus_regisdata_major']==1) {
									echo "วิศวกรรมคอมพิวเตอร์";
								  }elseif ($result['alumnus_regisdata_major']==2) {
									echo "วิทยาการคอมพิวเตอร์";
								  }elseif ($result['alumnus_regisdata_major']==3) {
									echo "เทคโนโลยีสารสนเทศ";
								  }elseif ($result['alumnus_regisdata_major']==4) {
									echo "คอมพิวเตอร์ธุรกิจ";
								  }elseif ($result['alumnus_regisdata_major']==5) {
									echo "ภูมิสารสนเทศศาสตร์";
								  }elseif ($result['alumnus_regisdata_major']==6) {
									echo "เทคโนโลยีอินเทอร์เน็ตและสารสนเทศ";
								  }
								  ?>
								  </td>
								  <td align="center" style="text-align:center;font-size:12px">
									<a href="view_detail.php?id=<?=$result['alumnus_stuid']?>" ><img src="../../../images/add_job.png" style="cursor:pointer;width:25px; height:25px;" title="รายละเอียดเพิ่มเติม" ></a> 
								  </td>
								</tr>
								
								<?php
									
								}
								echo "<br>";
								
								?>
								<tr>
									<td colspan="5">
                                    	<?php
                                    	echo "Total :".$Num_Rows." Record : ".$Num_Pages." Page :";
                                        if($Prev_Page)
                                        {
                                            echo " <a href='$_SERVER[SCRIPT_NAME]?Page=$Prev_Page&txtKeyword=$_POST[id_stu]'><< Back</a> ";
                                        }
                                    
                                        for($i=1; $i<=$Num_Pages; $i++){
                                            if($i != $Page)
                                            {
                                                echo "[ <a href='$_SERVER[SCRIPT_NAME]?Page=$i&txtKeyword=$_POST[id_stu]'>$i</a> ]";
                                            }
                                            else
                                            {
                                                echo "<b> $i </b>";
                                            }
                                        }
                                        if($Page!=$Num_Pages)
                                        {
                                            echo " <a href ='$_SERVER[SCRIPT_NAME]?Page=$Next_Page&txtKeyword=$_POST[id_stu]'>Next>></a> ";
                                        }
										?>
                                    </td>
								</tr>
								<?php
							}else{
						?>
							<tr>
								<td colspan="5" style="text-align:center">ไม่มีรายงานการค้นหา</td>
							</tr>
							<tr>
								<td colspan="3">ค้นพบ 0 รายการ</td>
								<td colspan="2" align="right" scope="col" style="text-align:right;"></td>
							</tr>
						<?php
                        }
				  }else if($_POST['namedata']!=""){
					$sql_select = "select * from alumnusstu_tb where (alumnusstu_tb.alumnus_regisdata_nameth LIKE '%".@$_POST['namedata']."%' )";
					$sql_result = mysql_query($sql_select) or die("Error ".$sql_select);
					$sql_num_rows = mysql_num_rows($sql_result) ;
					$count=0;
					if($sql_num_rows>0){
						while ($result= mysql_fetch_array($sql_result)) { 
						$count++;
					?>
                        <tr>
                            <td style="font-size:12px; text-align:center"><?=$count?></td>
                            <td style="font-size:12px"><?=$result['alumnus_stuid']?></td>
                            <td style="font-size:12px"><?=$result['alumnus_regisdata_nameth']?></td>
                            <td style="font-size:12px"><?php 
                            if($result['alumnus_regisdata_major']==1) {
                                echo "วิศวกรรมคอมพิวเตอร์";
                            }elseif ($result['alumnus_regisdata_major']==2) {
                                echo "วิทยาการคอมพิวเตอร์";
                            }elseif ($result['alumnus_regisdata_major']==3) {
                                echo "เทคโนโลยีสารสนเทศ";
                            }elseif ($result['alumnus_regisdata_major']==4) {
                                echo "คอมพิวเตอร์ธุรกิจ";
                            }elseif ($result['alumnus_regisdata_major']==5) {
                                echo "ภูมิสารสนเทศศาสตร์";
                            }elseif ($result['alumnus_regisdata_major']==6) {
                                echo "เทคโนโลยีอินเทอร์เน็ตและสารสนเทศ";
                            }
                            ?>
                            </td>
                            <td align="center" style="text-align:center;font-size:12px">
                                <a href="view_detail.php?id=<?=$result['alumnus_stuid']?>" ><img src="../../../images/add_job.png" style="cursor:pointer;width:25px; height:25px;" title="รายละเอียดเพิ่มเติม" ></a> 
                            </td>
                        </tr>
				  	<?php
					  	}
					}
                  }else if($_POST['place_major']!=""){
				  		$sql_select = "select * from alumnusstu_tb where (alumnusstu_tb.alumnus_regisdata_major LIKE '%".@$_POST['place_major']."%' )";
						$sql_result = mysql_query($sql_select) or die("Error ".$sql_select);
						$sql_num_rows = mysql_num_rows($sql_result) ;
						$count=0;
						if($sql_num_rows>0){
							while ($result= mysql_fetch_array($sql_result)) { 
							$count++;
						?>
							<tr>
								<td style="font-size:12px; text-align:center"><?=$count?></td>
								<td style="font-size:12px"><?=$result['alumnus_stuid']?></td>
								<td style="font-size:12px"><?=$result['alumnus_regisdata_nameth']?></td>
								<td style="font-size:12px"><?php 
								if($result['alumnus_regisdata_major']==1) {
									echo "วิศวกรรมคอมพิวเตอร์";
								}elseif ($result['alumnus_regisdata_major']==2) {
									echo "วิทยาการคอมพิวเตอร์";
								}elseif ($result['alumnus_regisdata_major']==3) {
									echo "เทคโนโลยีสารสนเทศ";
								}elseif ($result['alumnus_regisdata_major']==4) {
									echo "คอมพิวเตอร์ธุรกิจ";
								}elseif ($result['alumnus_regisdata_major']==5) {
									echo "ภูมิสารสนเทศศาสตร์";
								}elseif ($result['alumnus_regisdata_major']==6) {
									echo "เทคโนโลยีอินเทอร์เน็ตและสารสนเทศ";
								}
								?>
								</td>
								<td align="center" style="text-align:center;font-size:12px">
									<a href="view_detail.php?id=<?=$result['alumnus_stuid']?>" ><img src="../../../images/add_job.png" style="cursor:pointer;width:25px; height:25px;" title="รายละเอียดเพิ่มเติม" ></a> 
								</td>
							</tr>
						<?php
							}
						}else{
						?>
                        <tr>
							<td colspan="5" style="text-align:center">ไม่มีรายงานการค้นหา</td>
						</tr>
                        <tr>
                            <td colspan="3">ค้นพบ 0 รายการ</td>
                            <td colspan="2" align="right" scope="col" style="text-align:right;"></td>
                        </tr>
                        <?php
						}
				  }else if($_POST['year_congrate']!="" && $_POST['year_congrate']!=0){
							$sql_select = "select * from alumnusstu_tb where alumnusstu_tb.alumnus_regisdata_congrat = '".@$_POST['year_congrate']."' order  by alumnus_regisdata_congrat ASC "; 
							$sql_result = mysql_query($sql_select) or die("Error ".$sql_select);
							$sql_num_rows = mysql_num_rows($sql_result) ;
							$count=0;
							if($sql_num_rows>0){
								while ($result= mysql_fetch_array($sql_result)) { 
								$count++;
							?>
								<tr>
									<td style="font-size:12px; text-align:center"><?=$count?></td>
									<td style="font-size:12px"><?=$result['alumnus_stuid']?></td>
									<td style="font-size:12px"><?=$result['alumnus_regisdata_nameth']?></td>
									<td style="font-size:12px"><?php 
									if($result['alumnus_regisdata_major']==1) {
										echo "วิศวกรรมคอมพิวเตอร์";
									}elseif ($result['alumnus_regisdata_major']==2) {
										echo "วิทยาการคอมพิวเตอร์";
									}elseif ($result['alumnus_regisdata_major']==3) {
										echo "เทคโนโลยีสารสนเทศ";
									}elseif ($result['alumnus_regisdata_major']==4) {
										echo "คอมพิวเตอร์ธุรกิจ";
									}elseif ($result['alumnus_regisdata_major']==5) {
										echo "ภูมิสารสนเทศศาสตร์";
									}elseif ($result['alumnus_regisdata_major']==6) {
										echo "เทคโนโลยีอินเทอร์เน็ตและสารสนเทศ";
									}
									?>
									</td>
									<td align="center" style="text-align:center;font-size:12px">
										<a href="view_detail.php?id=<?=$result['alumnus_stuid']?>" ><img src="../../../images/add_job.png" style="cursor:pointer;width:25px; height:25px;" title="รายละเอียดเพิ่มเติม" ></a> 
									</td>
								</tr>
							<?php
								}
							}
						}else{
					  ?>
						<tr>
							<td colspan="5" style="text-align:center">ไม่มีรายงานการค้นหา</td>
						</tr>
                        <tr>
                            <td colspan="3">ค้นพบ 0 รายการ</td>
                            <td colspan="2" align="right" scope="col" style="text-align:right;"></td>
                        </tr>
                        <?php
					  }
					  ?>
                </tbody>
                </table>
                <center><input name="Submit" type="button" class="btn btn-danger" value="ปิดหน้าต่าง" onClick="window.close()"></center>
                <br />
                
			</div>

</body>
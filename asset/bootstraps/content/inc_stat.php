<head>
<?php

  include 'asset/include/connect_db.inc.php';

$sql_select = "select * from alumnusstu_tb where SUBSTR(alumnusstu_tb.alumnus_stuid,1,2) = '51' and alumnusstu_tb.alumnus_regisdata_major =  '1' ";
$sql_result = mysql_query($sql_select) or die("Error ".$sql_select);
echo $sql_num_rows_CPE = mysql_num_rows($sql_result) ;die();
?>
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
  google.load("visualization", "1", {packages:["corechart"]});
  google.setOnLoadCallback(drawChart);
  function drawChart() {
	var data = google.visualization.arrayToDataTable([
	  ['Task', 'Hours per Day'],
	  ['Work',     <? if($sql_num_rows_CPE== 0){ echo 0;}else{echo $sql_num_rows_CPE;}?>],
	  ['Eat',      <? if($sql_num_rows_CPE== 0){ echo 0;}else{echo $sql_num_rows_CPE;}?>],
	  ['Commute',  <? if($sql_num_rows_CPE== 0){ echo 0;}else{echo $sql_num_rows_CPE;}?>],
	  ['Watch TV', <? if($sql_num_rows_CPE== 0){ echo 0;}else{echo $sql_num_rows_CPE;}?>],
	  ['Sleep',    <? if($sql_num_rows_CPE== 0){ echo 0;}else{echo $sql_num_rows_CPE;}?>]
	]);

	var options = {
	  title: 'My Daily Activities'
	};

	var chart = new google.visualization.PieChart(document.getElementById('piechart'));
	chart.draw(data, options);
  }
</script>
</head>
<body>

    <div id="workflow" class="panel panel-default">
        <div class="panel-body">
            
            <p class="article-header">สถิติศิษย์เก่า คณะเทคโนโลยีสารสนเทศและการสื่อสาร มหาวิทยาลัยพะเยา</p>
            
            <p class="article-header">รหัส : 51 <br />สำเร็จการศึกษา ปีการศึกษา : 2554</p>
            
            <div id="piechart" style="width: 900px; height: 500px;"></div>
        </div>
    </div>
</body>
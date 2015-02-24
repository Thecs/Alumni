<link rel="stylesheet" href="<?=base_url();?>asset/tab/jquery-ui-1.10.2/themes/base/jquery-ui.css" />
<script src="<?=base_url();?>asset/tab/jquery-ui-1.10.2/jquery-1.9.1.js"></script>
<!-- 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>-->
<script src="<?=base_url();?>asset/tab/jquery-ui-1.10.2/ui/jquery-ui.js"></script>
<link rel="stylesheet" href="<?=base_url();?>asset/tab/jquery-ui-1.10.2/themes/base/minified/jquery.ui.tabs.min.css" />
<link rel="stylesheet" href="<?=base_url();?>css/mystyle.css" />

<link href="<?=base_url();?>asset/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<link rel="canonical" href="http://www.encodedna.com/2013/07/dynamically-add-remove-form-elements-using-jquery-demo.htm" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script> 
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
<div style="text-align:left"><div class="alert alert-danger" role="alert" style="text-align:left;width:500px;loat:left" >*** กรุณาระบุข้อมูลของท่านให้ครบถ้วน ***</h6></div></div>
<form action="addregister" method="post" >
    <div class="header_register">กรุณาระบุจำนวนโต๊ะ/ที่นั่ง ที่ท่านต้องการจอง</div>
    <div class="note">
    	<h5><b>:::: ราคาโต๊ะและที่นั่งงาน "ศิษย์เก่า ICT" ::::</b></h5>
		- โตีะจีน 8 ที่นั่ง ราคา 2,400 บาท<br>
        - 1 ที่นั่ง ราคา 400 บาท
        <h6>จัดงานวันเสาร์ ที่ 28 กุมภาพันธ์ 2558 ตั้งแต่เวลา 13.00 น. เป็นต้นไป</h6><br>
		
		<b>ข้อมูลบัญชี</b><br>
		น.ส.กลางวารี ไชยวุฒิ นายยืนยง กันทะเนตร และนายณัฏฐ์ กรีธาชาติ<br><br>
		ธนาคารไทยพาณิชย์ สาขามหาวิทยาลัยพะเยา<br>
		เลขที่บัญชี 8912386370<br><br>
		<b>เมื่อโอนเงินแล้ว ส่งสลิปมาที่ Email : nut_mufc11@hotmail.com<br>
		และโทรแจ้งที่ นายณัฏฐ์ กรีธาชาติ 08-0507-7134</b>
	</div>
    <div class="row" >
        <div class="col-xs-12 col-sm-6 col-md-2" style="text-align: right">
            <text style="font-weight: bold">ระบุการจอง</text>
        </div>
        <div class="col-xs-6 col-md-10" style="text-align: left">
            <table class="tb_register" height="15" >
                <tr>
                    <td width="50" align="left">&nbsp;&nbsp;<input type="radio" name="book_type" id="book_type" value="1" onChange="add_table(this.value);"  >&nbsp;&nbsp;โต๊ะ</td>
                    <td width="253" align="left">
                        <select name="num_table" id="num_table" style="display:none">
                            <option value="" disabled selected>---ระบุจำนวนโต๊ะ---</option>
                            <?php for($i=1;$i<=10;$i++){?>
                            <option value="<?=$i?>"><?=$i." โต๊ะ"?></option>
                            <?php }?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td width="50" align="left">&nbsp;&nbsp;<input type="radio" name="book_type" id="book_type" value="2" onChange="add_table(this.value);">&nbsp;&nbsp;ที่นั่ง</td>
                    <!-- <td width="253" align="left">
                        <select name="num_chair" id="num_chair" style="display:none">
                            <option value="" disabled selected>---ระบุจำนวนที่นั่ง---</option>
                            <?php for($i=1;$i<=7;$i++){?>
                            <option value="<?=$i?>"><?=$i." ที่นั่ง"?></option>
                            <?php }?>
                        </select>
                        
                    </td>-->
                </tr>

            </table>
            
            <!-- <div id='TextBoxesGroup' > -->
            <div id="num_chair" style="display:none">
                <div class="alert alert-success " role="alert" style="width:450px;margin-top:10px;" >
                    * กรุณาระบุชื่อ - สกุล ผู้นั่งโต๊ะ<b>ตามจำนวนที่นั่งที่จอง</b> เพื่อใช้ตรวจสอบหน้างาน *<br>
                    หากจองมากกว่า 7 ที่นั่ง กรุณาระบุการจองเป็นประเภท "โต๊ะ"
                </div>
                <div id="TextBoxDiv1" style="height:45px;width:600px;">
                    <label>ชื่อผู้จอง 1 : </label><input type='textbox' id='textbox1' name='textbox1' class="form-control" placeholder="กรอกชื่อ-นามสกุล" >
                </div>
                <div id="TextBoxDiv1" style="height:45px;width:600px">
                    <label>ชื่อผู้จอง 2 : </label><input type='textbox' id='textbox2' name='textbox2' class="form-control" placeholder="กรอกชื่อ-นามสกุล">
                </div>
                <div id="TextBoxDiv1" style="height:45px;width:600px">
                    <label>ชื่อผู้จอง 3 : </label><input type='textbox' id='textbox3' name='textbox3' class="form-control" placeholder="กรอกชื่อ-นามสกุล">
                </div>
                <div id="TextBoxDiv1" style="height:45px;width:600px">
                    <label>ชื่อผู้จอง 4 : </label><input type='textbox' id='textbox4' name='textbox4' class="form-control" placeholder="กรอกชื่อ-นามสกุล">
                </div>
                <div id="TextBoxDiv1" style="height:45px;width:600px">
                    <label>ชื่อผู้จอง 5 : </label><input type='textbox' id='textbox5' name='textbox5' class="form-control" placeholder="กรอกชื่อ-นามสกุล">
                </div>
                <div id="TextBoxDiv1" style="height:45px;width:600px">
                    <label>ชื่อผู้จอง 6 : </label><input type='textbox' id='textbox6' name='textbox6' class="form-control" placeholder="กรอกชื่อ-นามสกุล">
                </div>
                <div id="TextBoxDiv1" style="height:45px;width:600px">
                    <label>ชื่อผู้จอง 7 : </label><input type='textbox' id='textbox7' name='textbox7' class="form-control" placeholder="กรอกชื่อ-นามสกุล">
                </div>
            </div>
            <!--
            <input type='button' value='เพิ่มที่นั่ง' id='addButton'>
            <input type='button' value='ลบที่นั่ง' id='removeButton'>
            <input type='button' value='Get TextBox Value' id='getButtonValue'>
            -->
            
        </div>
    </div>

    
    <hr>

    <div class="header_register">กรุณาระบุข้อมูลสำหรับการติดต่อ</div>
    <div class="row" style="height:45px;">
        <div class="col-xs-12 col-sm-6 col-md-2" style="text-align: right">
            <text style="font-weight: bold">ชื่อผู้จอง</text>
        </div>
        <div class="col-xs-6 col-md-10" style="text-align: left">
            <input type="text" class="form-control" id="book_name" name="book_name" placeholder="กรอกชื่อ-นามสกุล" style="width:350px" >
        </div>
    </div>
    <div class="row" style="height:45px;">
        <div class="col-xs-12 col-sm-6 col-md-2" style="text-align: right">
            <text style="font-weight: bold">หมายเลขโทรศัพท์</text>
        </div>
        <div class="col-xs-6 col-md-8" style="text-align: left" >
            <input type="tel" class="form-control" id="book_tel" name="book_tel" placeholder="กรอกหมายเลขโทรศัพท์" style="width:350px">
        </div>
    </div>
    <div class="row" style="height:45px;">
        <div class="col-xs-12 col-sm-6 col-md-2" style="text-align: right">
            <text style="font-weight: bold">Email</text>
        </div>
        <div class="col-xs-6 col-md-10" style="text-align: left">
            <input type="email" class="form-control" id="book_email" name="book_email" placeholder="Email" style="width:350px">
        </div>
    </div>
    <div class="row" style="height:45px;">
        <div class="col-xs-12 col-sm-6 col-md-2" style="text-align: right">
            <text style="font-weight: bold">ระบุสาขาวิชา</text>
        </div>
        <div class="col-xs-6 col-md-10" style="text-align: left">
            <select name="book_major" id="select" class="form-control">
            <option value="" selected="selected" disabled="disabled">---กรุณาเลือกสาขาวิชา---</option>
                <option value="วิศวกรรมคอมพิวเตอร์">วิศวกรรมคอมพิวเตอร์</option>
                <option value="วิทยาการคอมพิวเตอร์">วิทยาการคอมพิวเตอร์</option>
                <option value="เทคโนโลยีสารสนเทศ">เทคโนโลยีสารสนเทศ</option>
                <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
                <option value="ภูมิศาสตร์/ภูมิสารสนเทศศาสตร์">ภูมิศาสตร์/ภูมิสารสนเทศศาสตร์</option>
            </select>
        </div>
    </div>
    <table>
        <tr>
            <td></td>
            <td colspan="4" align="left"><br><button class="btn btn-success" type="submit">สำรองที่นั่ง</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-danger" href="" role="button" type="button">ยกเลิกการจอง</button></td>
        </tr>
    </table>
</form>
         
        <script type="text/javascript" src="<?=base_url()?>asset/jquery-1.3.2.min.js"></script>
         
        <style type="text/css">
            div{


            }
        </style>
        <script type="text/javascript">
     
        $(document).ready(function(){
         
            var counter = 2;
         
            $("#addButton").click(function () {
         
            if(counter>7){
                    alert("จองได้ไม่เกิน 7 ที่นั่งเท่านั้น ! ");
                    return false;
            }   
         
            var newTextBoxDiv = $(document.createElement('div'))
                 .attr("id", 'TextBoxDiv' + counter);
         
            newTextBoxDiv.after().html('<label>ชื่อผู้จอง '+ counter + ' : </label>' +
                  '<input type="text" name="textbox' + counter + 
                  '" id="textbox' + counter + '" value="" >');
         
            newTextBoxDiv.appendTo("#TextBoxesGroup");
         
         
            counter++;
             });
         
             $("#removeButton").click(function () {
            if(counter==1){
                  alert("No more textbox to remove");
                  return false;
               }   
         
            counter--;
         
                $("#TextBoxDiv" + counter).remove();
         
             });
         
             $("#getButtonValue").click(function () {
         
            var msg = '';
            for(i=1; i<counter; i++){
              msg += "\n Textbox #" + i + " : " + $('#textbox' + i).val();
            }
                  alert(msg);
             });
          });
        </script>
     
 
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

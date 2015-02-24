<html>
	<body>
		<?=form_open('p/manage');?>
			<TABLE width="100%" align="center" border="0">
				<tbody>
                                        <tr>
                                            <td height="15px"></td>
                                        </tr>
					<TR>
						<TD width="40%" align="right"><B>ชื่อผู้ใช้ : </B></TD>
						<TD align="left"><INPUT TYPE="text" NAME="uname"></TD>
					</TR>
                                        <tr>
                                            <td height="15px"></td>
                                        </tr>
					<TR>
						<TD width="40%" align="right"><B>รหัสผ่าน : </B></TD>
						<TD align="left"><input name="upass" type="password" ></TD>
					</TR>
                                        <tr>
                                            <td height="15px"></td>
                                        </tr>
					<TR>
						<TD ></TD>
						<TD  align="left"><INPUT TYPE="submit" VALUE=" เข้าระบบ ">    <input type="reset" name="Reset" id="button" value="  ล้างข้อมูล  " /></TD>
					</TR>
				</tbody>
			</TABLE>
		</form>
	</body>
</html>
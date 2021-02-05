	<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
	<script src="js/prototype.js" type="text/javascript"></script>
	<script src="js/scriptaculous.js?load=effects,builder" type="text/javascript"></script>
	<script src="js/lightbox.js" type="text/javascript"></script>
	<LINK rel=stylesheet type=text/css href="css/css.css">
<style type="text/css">
<!--
.style40 {
	color: #666666;
	font-family: Tahoma;
	font-size: 13px;
	font-weight: bold;
}
.style45 {
	font-family: Tahoma;
	font-size: 9px;
}
.tooltipdetailmenu {	BACKGROUND-IMAGE: url(image/bgtool.png); POSITION: absolute; PADDING-BOTTOM: 20px; PADDING-LEFT: 20px; WIDTH: 240px; PADDING-RIGHT: 20px; DISPLAY: none; BACKGROUND-REPEAT: no-repeat; HEIGHT: 110px; PADDING-TOP: 20px
}
-->
</style>



<STYLE>
A {
	COLOR: #6699cc; TEXT-DECORATION: none
}
A:hover {
	COLOR: #6666cc; TEXT-DECORATION: underline
}
.bh1 {
	BORDER-BOTTOM: #ffffff 1px solid; BORDER-LEFT: #ffffff 1px solid; BORDER-TOP: #ffffff 1px solid; BORDER-RIGHT: #ffffff 1px solid
}
.bh1:hover {
	BORDER-BOTTOM: #c4cedf 1px solid; BORDER-LEFT: #c4cedf 1px solid; BACKGROUND-COLOR: #d7eff7; BORDER-TOP: #c4cedf 1px solid; BORDER-RIGHT: #c4cedf 1px solid
}
.tt1 {
	COLOR: #9966cc; TEXT-DECORATION: none
}
.tt1:hover {
	COLOR: #9966cc; TEXT-DECORATION: underline
}
.picPhoto {
	BORDER-BOTTOM: #dfdbe8 1px solid; BORDER-LEFT: #dfdbe8 1px solid; PADDING-BOTTOM: 5px; BACKGROUND-COLOR: #f2f4f9; PADDING-LEFT: 5px; PADDING-RIGHT: 5px; BORDER-TOP: #dfdbe8 1px solid; BORDER-RIGHT: #dfdbe8 1px solid; PADDING-TOP: 5px
}
.tooltipdetail {
	BORDER-BOTTOM: #006699 1px outset; POSITION: absolute; BORDER-LEFT: #006699 1px outset; PADDING-BOTTOM: 4px; BACKGROUND-COLOR: #ffffff; PADDING-LEFT: 4px; PADDING-RIGHT: 4px; DISPLAY: none; BORDER-TOP: #006699 1px outset; BORDER-RIGHT: #006699 1px outset; PADDING-TOP: 4px
}
.tooltipdetailmenu {
	BACKGROUND-IMAGE: url(image/bgtool.png); POSITION: absolute; PADDING-BOTTOM: 20px; PADDING-LEFT: 20px; WIDTH: 240px; PADDING-RIGHT: 20px; DISPLAY: none; BACKGROUND-REPEAT: no-repeat; HEIGHT: 110px; PADDING-TOP: 20px
}
.tooltip4 {
	BACKGROUND-IMAGE: url(image/bgtool3.png); POSITION: absolute; PADDING-BOTTOM: 15px; PADDING-LEFT: 15px; WIDTH: 252px; PADDING-RIGHT: 15px; DISPLAY: none; BACKGROUND-REPEAT: no-repeat; HEIGHT: 62px; PADDING-TOP: 15px
}
.backg1 {
	BACKGROUND-IMAGE: url(image/ban1.png)
}
.bh11 {
	BORDER-BOTTOM: #ffffff 1px solid; BORDER-LEFT: #ffffff 1px solid; BORDER-TOP: #ffffff 1px solid; BORDER-RIGHT: #ffffff 1px solid
}
.bh12 {
	BORDER-BOTTOM: #e8f3f9 1px solid; BORDER-LEFT: #e8f3f9 1px solid; BORDER-TOP: #e8f3f9 1px solid; BORDER-RIGHT: #e8f3f9 1px solid
}
.tabtd {
	BORDER-BOTTOM: #ffffff 1px solid; BORDER-LEFT: #ffffff 1px solid; BORDER-TOP: #ffffff 1px solid; BORDER-RIGHT: #ffffff 1px solid
}
.tabtd:hover {
	BORDER-BOTTOM: #c2d0e0 1px solid; BORDER-LEFT: #c2d0e0 1px solid; BACKGROUND-COLOR: #d8e3f1; BORDER-TOP: #c2d0e0 1px solid; BORDER-RIGHT: #c2d0e0 1px solid
}
.tabtdpic {
	BORDER-BOTTOM: #f7f7f7 1px solid; BORDER-LEFT: #f7f7f7 1px solid; BORDER-TOP: #f7f7f7 1px solid; BORDER-RIGHT: #f7f7f7 1px solid
}
.tabtdpic:hover {
	BORDER-BOTTOM: #c2d0e0 1px solid; BORDER-LEFT: #c2d0e0 1px solid; BACKGROUND-COLOR: #d8e3f1; BORDER-TOP: #c2d0e0 1px solid; BORDER-RIGHT: #c2d0e0 1px solid
}
.tabtdright:hover {
	BACKGROUND-COLOR: #ced2df
}
.bgm1 {
	BORDER-BOTTOM: #545492 1px solid; BORDER-LEFT: #545492 1px solid; BORDER-TOP: #545492 1px solid; BORDER-RIGHT: #545492 1px solid
}
.bgm1:hover {
	BORDER-BOTTOM: #9999cc 1px solid; BORDER-LEFT: #9999cc 1px solid; BACKGROUND-COLOR: #7575c0; BORDER-TOP: #9999cc 1px solid; BORDER-RIGHT: #9999cc 1px solid
}
.style47 {font-size: 12px}
</STYLE>
<table border="0" cellspacing="0" cellpadding="0" 
width="100%">
  <!--DWLayoutTable-->
  <tbody>
    <tr>
      <td height="10" width="18"></td>
      <td width="667"></td>
      <td width="20"></td>
    </tr>
    <tr>
      <td height="23"></td>
      <td style="BORDER-BOTTOM: #6699cc 2px solid" 
                            valign="top"><font color="#9966cc" 
                              face="sans-serif"><img src="icons/linkbullet.gif" width="17" height="11" /> News</font> <font 
                              size="2"><b>มุมข่าวสาร และ กิจกรรมต่างๆ 
        </b></font></td>
      <td></td>
    </tr>
    <tr>
      <td height="18" valign="top"></td>
      <td valign="top"><span class="style37"> <br />
            <? 
include("include/connect.php");                                       
$sql = "SELECT * FROM  nt_act where id_act='$id_act' ";
$dbq=mysql_query($sql) or die ("ไม่สามารถติดต่อฐานข้อมูลได้");
$numrow=mysql_num_rows($dbq); 
if($numrow > 0)
{
?>
        </span>
          <table width="100%" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="99%"><table width="100%"   border="0" cellpadding="1" cellspacing="0">
                  <?
$i=1;
while($i <= $numrow)
{
$result=mysql_fetch_array($dbq);
$id_act=$result[id_act];
$name_act=$result[name_act];
$date_act=$result[date_act];
$detail_act=$result[detail_act];
$id_photo=$result[id_photo];
$status_act=$result[status_act];
?>
                  <tr style="BORDER-BOTTOM: #FFEAF4 1px solid; BORDER-LEFT: #FFEAF4 1px solid; BORDER-TOP: #FFEAF4 1px solid; BORDER-RIGHT: #FFEAF4 1px solid" border="0" cellspacing="0" cellpadding="5">
                    <td bgcolor="#F9F9F9" style="BORDER-BOTTOM: #FFEAF4 1px solid; BORDER-LEFT: #FFEAF4 1px solid; BORDER-TOP: #FFEAF4 1px solid; BORDER-RIGHT: #FFEAF4 1px solid "  border="0" cellspacing="0" cellpadding="1"><span class="style37"> </span>
                        <table width="100%" border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td colspan="2"><img src="icon/pp.png" width="9" height="8" /></td>
                          </tr>
                          <tr>
                            <td width="1%">&nbsp;</td>
                            <td><span class="style19"> <span class="style24">
                              <?=$name_act?>
                              </span> <span class="style45">
                              <?=$date_act?>
                              </span> <br />
                              <br />
                              &nbsp;&nbsp; <span class="style31">
                                <?=$detail_act?>
                              </span></td>
                          </tr>
                          <tr>
                            <td colspan="2"><img src="icon/pp.png" width="9" height="8" /></td>
                          </tr>
                      </table></td >
                  </tr>
                  <tr >
                    <td   border="0" cellspacing="0" cellpadding="1"><img src="icon/pp.png" width="9" height="8" /></td >
                  </tr>
                  <?
$i++;
}
?>
              </table></td>
            </tr>
          </table>
        <p>
            <?
}
else
//echo"<br> <font color=red>ยังไม่มีการเพิ่มข้อมูลใดๆเข้าสู่ระบบ ! </b>";

?>
          </p>
        <table width="100%" border="0" cellpadding="1" cellspacing="0">
            <tr>
              <td width="99%" height="60"><div align="left"><span class="style37">
                  <? 
include("include/connect.php");    
$strSQL = "SELECT * FROM nt_act where id_act='$id_act' ";
$objQuery = mysql_query($strSQL);
 $objResult = mysql_fetch_array($objQuery);
	 echo"<b><font color='#000000' face='Tahoma' size='2'>ภาพกิจกรรม $objResult[name_act]</font> </b>  <br>";
	 
    $strSQL = "SELECT * FROM nt_photo where id_act='$id_act' ORDER BY id_photo ASC ";
    $objQuery = mysql_query($strSQL);
    $objResult = mysql_fetch_array($objQuery);
    if(!$objResult)
	{
	echo"<img src='administrator/modules/mod_photo/images/9MNUSsbvD0i.png'  width='32' height='32' /><font color='#000000' face='Tahoma' size='1'> ยังไม่ได้เพิ่มรูปภาพใดๆ </font>";
	}
	else
	{	
    $strSQL = "SELECT * FROM nt_photo where id_act='$id_act' ORDER BY id_photo ASC ";
    $objQuery = mysql_query($strSQL) or die ("Error Query [".$strSQL."]");
    echo"<table border=\"0\"  cellspacing=\"1\" cellpadding=\"1\"><tr>";   
    $intRows = 0;
    while($objResult = mysql_fetch_array($objQuery))
    {
   $intRows++;
   echo "<td>";                                 
   ?>
                </span> </div>
                  <table width="100%" border="0" cellpadding="0" cellspacing="0">
                    <tr>
                      <td valign="top"><table id="Table_01" width="128" height="64" border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td width="5"><img src="administrator/modules/mod_photo/images/b1_01.gif" width="4" height="4" alt="" /></td>
                            <td width="120" background="administrator/modules/mod_photo/images/b1_02.gif"><img src="administrator/modules/mod_photo/images/b1_02.gif" width="100"  height="4" /></td>
                            <td width="46"><img src="administrator/modules/mod_photo/images/b1_03.gif" width="4" height="4" alt="" /></td>
                          </tr>
                          <tr>
                            <td height="43" background="administrator/modules/mod_photo/images/b1_04.png"><img src="administrator/modules/mod_photo/images/b1_04.png" width="4" height="20" /></td>
                            <td valign="top"><a href="administrator/modules/mod_photo/myphoto/<?=$objResult["name_photo"];?>" rel="lightbox[roadtrip]"><img src="administrator/modules/mod_photo/myphoto/<?=$objResult["name_photo"];?>" width="120" border="0" /></a></td>
                            <td background="administrator/modules/mod_photo/images/b1_06.gif"><img src="administrator/modules/mod_photo/images/b1_06.gif" width="4" height="20" /></td>
                          </tr>
                          <tr>
                            <td><img src="administrator/modules/mod_photo/images/b1_07.gif" width="4" height="4" alt="" /></td>
                            <td background="administrator/modules/mod_photo/images/b1_08.gif"><img src="administrator/modules/mod_photo/images/b1_08.gif" width="100" height="4" /></td>
                            <td><img src="administrator/modules/mod_photo/images/b1_09.gif" width="4" height="4" alt="" /></td>
                          </tr>
                      </table></td>
                    </tr>
                  </table>
                <?
        echo"</td>";
        if(($intRows)%5==0)
       {
        echo"</tr>";
        }
       else
       {
       echo "<td>";
        }  
    }
    echo"</tr></table>";
	}
    ?></td>
            </tr>
        </table></td>
      <td></td>
    </tr>
  </tbody>
</table>

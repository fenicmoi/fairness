<style type="text/css">
<!--
.style35 {font-family: Tahoma;
	font-size: 10px;
}
.style45 {font-family: Tahoma;
	font-size: 9px;
}
.style46 {color: #666666}
.style19 {font-family: Tahoma;
	font-size: 12px;
}
.tabtd {BORDER-BOTTOM: #ffffff 1px solid; BORDER-LEFT: #ffffff 1px solid; BORDER-TOP: #ffffff 1px solid; BORDER-RIGHT: #ffffff 1px solid
}
.style24 {color: #009900;
	font-weight: bold;
}
.style31 {font-family: "MS Sans Serif";
	font-size: 14px;
	color: #666666;
}
-->
</style>
<table border="0" cellspacing="0" cellpadding="0" 
width="100%">
  <!--DWLayoutTable-->
  <tbody>
    <tr>
      <td height="10" width="30"></td>
      <td width="1146"></td>
      <td width="38"></td>
    </tr>
    <tr>
      <td height="23"></td>
      <td style="BORDER-BOTTOM: #6699cc 2px solid" 
                            valign="top"><font color="#9966cc" 
                              face="sans-serif"><img src="icons/linkbullet.gif" width="17" height="11" /> News</font> <font 
                              size="2"><b>มุมข่าวสาร และ กิจกรรมต่างๆ </b></font></td>
      <td></td>
    </tr>
  </tbody>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="1%">&nbsp;</td>
    <td width="99%" valign="top"><?
//============ อ่านข้อมุลหมวด
include("include/connect.php");  
//"SELECT * FROM  tb_act where status_act='1' order by id_act desc ";
//$sqlCat="select * from nt_act   ";
$sqlCat="SELECT * FROM  nt_act where status_act='1' ";
		$queryCat=mysql_query($sqlCat);
		$Num_Rows = mysql_num_rows($queryCat);

		$Per_Page = 3;   // Per Page

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

		$sqlCat.=" order  by id_act desc LIMIT $Page_Start , $Per_Page";
		$queryCat  = mysql_query($sqlCat);


		echo"<table border=\"0\"  cellspacing=\"1\" cellpadding=\"1\"><tr>";
		$intRows = 0;
		while($resutCat=mysql_fetch_array($queryCat))
		{
			echo "<td>"; 
			$intRows++;
?>
        <table cellspacing="10" cellpadding="5" 
                                width="100%">
          <tbody>
            <tr>
              <td height="255" valign="top" class="tabtd"><table id="Table_01" width="126" height="100" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="12" height="9"><img src="images/bx_01.png" width="10" height="9" alt="" /></td>
                    <td width="110" background="images/bx_02.png"><img src="images/bx_02.png" width="50" height="9" alt="" /></td>
                    <td width="37"><img src="images/bx_03.png" width="6" height="9" alt="" /></td>
                  </tr>
                  <tr>
                    <td height="85" background="images/bx_04.png"><img src="images/bx_04.png" width="10" height="50" alt="" /></td>
                    <td><img src="administrator/modules/mod_photo/myphoto/<?  
include("include/connect.php");     
$strSQL = "SELECT * FROM nt_photo where id_photo='$resutCat[id_photo]' ";
$objQuery = mysql_query($strSQL);
 $objResult = mysql_fetch_array($objQuery); 
 if($objResult[id_act]=="$resutCat[id_act]")
 {
 echo"$objResult[name_photo]";
 }
 else
 {
 echo"post1.png";
 }
 ?>" width="195" height="123" border="0"></td>
                    <td background="images/bx_06.png"><img src="images/bx_06.png" width="6" height="50" alt="" /></td>
                  </tr>
                  <tr>
                    <td height="6"><img src="images/bx_07.png" width="10" height="6" alt="" /></td>
                    <td background="images/bx_08.png"><img src="images/bx_08.png" width="50" height="6" alt="" /></td>
                    <td><img src="images/bx_09.png" width="6" height="6" alt="" /></td>
                  </tr>
                </table>
                  <br />
                  <b><font 
                                size="2">
                    <?=$resutCat["name_act"];?>
                    </font></b><br />
                  <font 
                                color="#999999" size="2">Update :
                    <?=$resutCat["date_act"];?>
                </font><br />
                  <font size="2">
                    <?=$message=substr("$resutCat[detail_act]",0,80)."&nbsp;..."; ?>
                  </font><br />
                  <font  size="2"><a href="civil-new.php?id_act=<?=$resutCat["id_act"];?>"  title="ดูรายละเอียด" >ดูรายละเอียด...</a></font> </td>
            </tr>
          </tbody>
        </table>
      <span class="style19">
        <?
		if($Prev_Page)
		{
			echo "";
			//echo " <a href='$_SERVER[SCRIPT_NAME]?Page=$Prev_Page' title='กลับ'><< Back</a> ";
		}

		for($i=1; $i<=$Num_Pages; $i++){
			if($i != $Page)
			{
			    echo "";
				//echo "[ <a href='$_SERVER[SCRIPT_NAME]?Page=$i' >$i</a> ]";
			}
			else
			{
			    echo "";
				//echo "<b> $i </b>";
			}
		}
		if($Page!=$Num_Pages)
		{
			echo "";
			//echo " <a href ='$_SERVER[SCRIPT_NAME]?Page=$Next_Page' title='ถัดไป'>Next>></a> ";
		}
		?>
        </span>
        <?
	//============  แสดงแถวละ 3 ตัว
													echo"</td>";
			if(($intRows)%3==0)
			{
				echo"</tr>";
			}
		}
		echo"</tr></table>";
?>
        <span class="style19">
        <!--       <?= $Num_Rows;?> อัลบั้ม : -->
        <!-- <?=$Num_Pages;?> หน้า :-->
      </span></td>
  </tr>
</table>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="1%" height="122">&nbsp;</td>
    <td width="99%" valign="top"><?
//============ อ่านข้อมุลหมวด
include("include/connect.php");  
//"SELECT * FROM  tb_act where status_act='1' order by id_act desc ";
//$sqlCat="select * from nt_act   ";
$sqlCat="SELECT * FROM  nt_act  where status_act='0' ";
		$queryCat=mysql_query($sqlCat);
		$Num_Rows = mysql_num_rows($queryCat);

		$Per_Page = 6;   // Per Page

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

		$sqlCat.=" order  by id_act desc LIMIT $Page_Start , $Per_Page";
		$queryCat  = mysql_query($sqlCat);


		echo"<table border=\"0\"  cellspacing=\"1\" cellpadding=\"1\"><tr>";
		$intRows = 0;
		while($resutCat=mysql_fetch_array($queryCat))
		{
			echo "<td>"; 
			$intRows++;
?>
        <table 
                                width="100%" border="0" cellpadding="5" cellspacing="5">
          <tbody>
            <tr>
              <td height="82" valign="top" class="tabtd"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td colspan="4" valign="top"><img src="icons/pp.png" width="9" height="8" /></td>
                  </tr>
                  <tr>
                    <td width="1%" valign="top">&nbsp;</td>
                    <td width="6%" valign="top"><table id="Table_01" width="23" height="25" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                          <td height="25" bgcolor="#000000"><table border="0" cellpadding="0" cellspacing="1">
                              <tr>
                                <td height="25" bgcolor="#FFFFFF"><img src="administrator/modules/mod_photo/myphoto/<?  
include("include/connect.php");     
$strSQL = "SELECT * FROM nt_photo where id_photo='$resutCat[id_photo]' ";
$objQuery = mysql_query($strSQL);
 $objResult = mysql_fetch_array($objQuery); 
 if($objResult[id_act]=="$resutCat[id_act]")
 {
 echo"$objResult[name_photo]";
 }
 else
 {
 echo"post1.png";
 }
 ?>" width="75" height="56" border="0" /></td>
                              </tr>
                          </table></td>
                        </tr>
                    </table></td>
                    <td width="1%" valign="top">&nbsp;</td>
                    <td width="92%" valign="top"><b><font 
                                size="2">
                      <?=$resutCat["name_act"];?>
                      </font></b><br />
                      <span class="style35"><font 
                                color="#999999">Update :
                        <?=$resutCat["date_act"];?>
                      </font> </span><br />
                      <font size="2">
                      <?=$message=substr("$resutCat[detail_act]",0,50)."&nbsp;..."; ?>
                      </font><br />
                      <font  size="2"><a href="civil-new.php?id_act=<?=$resutCat["id_act"];?>"  title="ดูรายละเอียด" >ดูรายละเอียด...</a>
                      <?
$strDateAdd = date('d-m-Y',strtotime("-7 day"));
if($resutCat[date_in] >= "$strDateAdd")	
{
echo"<img src='icons/neww.gif' />";
//echo"$strDateAdd---$resutCat[date_file]";
}
else
{
//echo"$strDateAdd---$resutCat[date_file]";
}
?>
                    </font></td>
                  </tr>
              </table></td>
            </tr>
          </tbody>
        </table>
      <span class="style19">
        <?
		if($Prev_Page)
		{
			echo "";
			//echo " <a href='$_SERVER[SCRIPT_NAME]?Page=$Prev_Page' title='กลับ'><< Back</a> ";
		}

		for($i=1; $i<=$Num_Pages; $i++){
			if($i != $Page)
			{
			    echo "";
				//echo "[ <a href='$_SERVER[SCRIPT_NAME]?Page=$i' >$i</a> ]";
			}
			else
			{
			    echo "";
				//echo "<b> $i </b>";
			}
		}
		if($Page!=$Num_Pages)
		{
			echo "";
			//echo " <a href ='$_SERVER[SCRIPT_NAME]?Page=$Next_Page' title='ถัดไป'>Next>></a> ";
		}
		?>
        </span>
        <?
	//============  แสดงแถวละ 3 ตัว
													echo"</td>";
			if(($intRows)%2==0)
			{
				echo"</tr>";
			}
		}
		echo"</tr></table>";
?>
        <span class="style19">
        <!--       <?= $Num_Rows;?> อัลบั้ม : -->
        <!-- <?=$Num_Pages;?> หน้า :-->
      </span></td>
  </tr>
</table>

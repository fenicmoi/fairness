<?
session_start();
if ($_SESSION[sess_userid]<>session_id())
{
	header("Location: ../../admin.php");
	exit();
	}
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/Tem-admin.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-874" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>administrator</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
	
	<script src="js/prototype.js" type="text/javascript"></script>
	<script src="js/scriptaculous.js?load=effects,builder" type="text/javascript"></script>
	<script src="js/lightbox.js" type="text/javascript"></script>

	<style type="text/css">
		body{ color: #333; font: 13px 'Lucida Grande', Verdana, sans-serif;	}
.style18 {
	font-family: Tahoma;
	font-size: 10px;
}
    .style19 {font-size: 10px}
    .style20 {
	font-family: Tahoma;
	font-size: 12px;
}
    </style>
<!-- InstanceEndEditable -->
<STYLE TYPE="TEXT/CSS">
<!--
A:link {
text-decoration:none;
}
A:visited {
text-decoration:none;
}
//-->
</STYLE>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
	background-image:    url();
	background-color: #4A4A4A;
}
-->
</style>
<style type="text/css">
<!--
.dxnbGroupContent {BORDER-BOTTOM: #a8a8a8 1px solid; BORDER-LEFT: #a8a8a8 1px solid; PADDING-BOTTOM: 5px; PADDING-LEFT: 5px; PADDING-RIGHT: 5px; FONT: 9pt Tahoma; COLOR: #1e3695; BORDER-TOP: #a8a8a8 1px solid; BORDER-RIGHT: #a8a8a8 1px solid; PADDING-TOP: 5px
}
.dxnbGroupHeader {	TEXT-ALIGN: left;
	vertical-align: top;
}
.dxnbGroupHeader {BORDER-BOTTOM: #a8a8a8 1px solid; BORDER-LEFT: #a8a8a8 1px solid; PADDING-BOTTOM: 4px; BACKGROUND-COLOR: #e0e0e0; PADDING-LEFT: 10px; PADDING-RIGHT: 10px; FONT: bold 9pt Tahoma; COLOR: black; BORDER-TOP: #a8a8a8 1px solid; BORDER-RIGHT: #a8a8a8 1px solid; PADDING-TOP: 4px
}
.dxnbItem {TEXT-ALIGN: left
}
.dxnbItem {PADDING-BOTTOM: 5px; PADDING-LEFT: 5px; PADDING-RIGHT: 5px; PADDING-TOP: 4px
}
.dxnbItem {FONT: 9pt Tahoma; COLOR: #1e3695
}
.style11 {
	font-family: Tahoma;
	font-size: 14px;
}
.style14 {
	color: #FFFFFF;
	font-weight: bold;
}
.style15 {color: #CCCCCC}
.style1 {	font-family: Tahoma;
	font-size: 13px;
	color: #CCCCCC;
}
-->
</style>
<script type="text/JavaScript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>




<style type='text/css'>
.style1 a{ color:#FFFFFF}
.style1 a:hover{color:#CCCCCC}
.style16 {color: #FFFFFF}
</style>
</head>

<body onload="MM_preloadImages('../../../icons/name-n%5B1%5D.png','../../../icons/name-x%5B1%5D.png','../../../icons/kk%5B2%5D.png','../../../icons/sa%5B2%5D.png','../../../icons/make%5B1%5D.png','../../../icons/st%5B1-%5D.png','../../../icons/pet%5B2%5D.png','../../../icons/room%5B1-%5D.png','../../../icons/le%5B2%5D.png','../../../icons/set%5B2%5D.png','../../../icons/ad%5B2%5D.png','../../../icon/logout2.png')">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="100%" colspan="5" valign="top" bgcolor="#84B5FF">ระบบจัดการข้อมูลข่าวสาร</td>
  </tr>
  
  <tr>
    <td colspan="5" valign="top" background="../../../icons/L.png"><table width="100%" border="0" cellpadding="0" cellspacing="0">
          
        
      <tr>
        <td width="17%" valign="top" bgcolor="#4A4A4A"><table width="100%" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td width="5%" background="../../../images/bg_left_center.png"><img src="../../../images/bg_left_center.png" width="9" height="106" /></td>
              <td width="25%" background="../../../images/bg_left_center.png"><div align="center">
                <table width="44" border="1" cellpadding="1" cellspacing="1" bordercolor="#C8C8C8" bgcolor="#C8C8C8">
                  <tr>
                    <td><img src="../../../images/avatar.png" width="44" height="44" /></td>
                  </tr>
                  </table>
                </div>              
              <div align="center"></div></td>
              <td width="6%" background="../../../images/bg_left_center.png">&nbsp;</td>
              <td width="64%" background="../../../images/bg_left_center.png"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td height="22"><span class="style11"><span class="style15">Logged in as:</span></span></td>
                </tr>
                <tr>
                  <td height="22"><span class="style11"><span class="style14">Administrator</span></span></td>
                </tr>
                <tr>
                  <td height="22"><span class="style11"><a href="../../logout.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image5','','../../../icon/logout2.png',1)" title="ออกจากระบบ"><img src="../../../icon/logout1.png" name="Image5" width="60" height="20" border="0" id="Image5" /></a></span></td>
                </tr>
                </table>              </td>
            </tr>
              
              </table>
          <table width="100%" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="1%" background="../../../images/bg_menu.png"><img src="../../../images/bg_menu.png" width="4" height="35" /></td>
              <td width="99%" background="../../../images/bg_menu.png"><div align="left"><span class="style1">&nbsp;<a href="../../index.php" title="หน้าหลัก">หน้าหลัก</a></span></div></td>
            </tr>
            
            
            
            
			
			
			            <tr>
              <td background="../../../images/bg_menu.png"><img src="../../../images/bg_menu.png" width="4" height="35" /></td>
              <td background="../../../images/bg_menu.png"><div align="left"><span class="style1">&nbsp;<a href="data_act.php" title="ข้อมูลกิจกรรม / รูปภาพกิจกรรม">ข้อมูลกิจกรรม / รูปภาพกิจกรรม</a></span></div></td>
            </tr>
          </table>          </td>
        <td width="83%" height="25" valign="top" bgcolor="#FFFFFF"><table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="1%" background="../../../images/bg_breadcrumb.png"><img src="../../../images/bg_breadcrumb.png" width="5" height="41" /></td>
            <td width="99%" background="../../../images/bg_breadcrumb.png"><span class="style11"><img src="../../../icon/objects_001.gif" width="16" height="16" /><!-- InstanceBeginEditable name="Editad0" -->Editad1<!-- InstanceEndEditable --></span></td>
          </tr>
        </table>
          <!-- InstanceBeginEditable name="Editad1" -->
          <table width="100%" border="0" cellspacing="0" cellpadding="1">
            <tr>
              <td>&nbsp;</td>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <td>&nbsp;</td>
              <td><span class="style19">
                <span class="style20">
                <? include "menu.php"; ?>
                </span>
              </span></td>
            </tr>
            <tr>
              <td height="18">&nbsp;</td>
              <td valign="top">
<div align="right">
<?  
include("../../../include/connect.php");     
$strSQL = "SELECT * FROM nt_act where id_act='$id_act' ";
$objQuery = mysql_query($strSQL);
 $objResult = mysql_fetch_array($objQuery); ?>
 [<a href="photo_add.php?id_act=<?=$objResult["id_act"];?>" title="เพิ่มรูปภาพ">เพิ่มรูปภาพ</a>]&nbsp;</div></td>
            </tr>
            <tr>
              <td width="1%" height="60">&nbsp;</td>
              <td width="99%" valign="top"><? 
 

	 echo"<img src='images/ic_pho.PNG' width='23' height='23' />  <b>$objResult[name_act]</b>   <br><br>";
	 
    $strSQL = "SELECT * FROM nt_photo where id_act='$id_act' ORDER BY id_photo ASC ";
    $objQuery = mysql_query($strSQL);
    $objResult = mysql_fetch_array($objQuery);
    if(!$objResult)
	{
	echo"<img src='images/9MNUSsbvD0i.png'  width='32' height='32' /> ยังไม่ได้เพิ่มรูปภาพใดๆ [<a href='photo_add.php?id_act=$id_act' title='เพิ่มรูปภาพ'>เพิ่ม</a>]
";
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
                <table width="100%" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td valign="top"><table id="Table_01" width="171" height="64" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td><img src="images/b1_01.gif" width="4" height="4" alt="" /></td>
                        <td background="images/b1_02.gif"><img src="images/b1_02.gif"  height="4"  /></td>
                        <td><img src="images/b1_03.gif" width="4" height="4" alt="" /></td>
                      </tr>
                      <tr>
                        <td height="43" background="images/b1_04.png"><img src="images/b1_04.png" width="4" height="10"  /></td>
                        <td valign="top">
					
<a href="myphoto/<?=$objResult["name_photo"];?>" rel="lightbox[roadtrip]"><img src="myphoto/<?=$objResult["name_photo"];?>" width="163" border="0"  /></a></td>
                        <td background="images/b1_06.gif"><img src="images/b1_06.gif" width="4" height="10"  /></td>
                      </tr>
                      <tr>
                        <td><img src="images/b1_07.gif" width="4" height="4" alt="" /></td>
                        <td background="images/b1_08.gif"><img src="images/b1_08.gif" height="4"  /></td>
                        <td><img src="images/b1_09.gif" width="4" height="4" alt="" /></td>
                      </tr>
                    </table>                      
                      <table width="171" border="0" cellpadding="0" cellspacing="1">
                        <tr>
                          <td><div align="left"><span class="style18"><a href="photo_title_page.php?id_photo=<?=$objResult["id_photo"];?>&id_act=<?=$objResult["id_act"];?>" title="ตั้งภาพนี้เป็นปกอัลบั้ม">ตั้งภาพนี้เป็นปกอัลบั้ม</a></span></div></td>
                        </tr>
                        <tr>
                          <td><div align="left"><span class="style18"><a href="photo_del.php?id_photo=<?=$objResult["id_photo"];?>&id_act=<?=$objResult["id_act"];?>" onclick="return confirm('ยืนยันการลบข้อมูล')" title="ลบ">ลบภาพนี้</a></span></div></td>
                        </tr>
                      </table></td>
                  </tr>
                </table>
                <?
        echo"</td>";
        if(($intRows)%6==0)
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
          </table>
          <!-- InstanceEndEditable --></td>
        </tr>
    </table></td>
  </tr>
<!-- 
  <tr>
    <td colspan="5" valign="top">&nbsp;</td>
  </tr>
--> 
</table>
</body>
<!-- InstanceEnd --></html>

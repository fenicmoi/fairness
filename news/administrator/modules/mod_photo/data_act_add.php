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
<style type="text/css">
<!--
.style19 {font-family: Tahoma;
	font-size: 12px;
}
.style21 {font-family: Tahoma; font-size: 12px; font-weight: bold; }
.style22 {font-size: 12px}
.style23 {font-size: 10px}
-->
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
                <? include "menu.php"; ?>
              </span></td>
            </tr>
            <tr>
              <td width="1%" height="390">&nbsp;</td>
              <td width="99%" valign="top"><script language="JavaScript" type="text/javascript">
  //<---
  function checkma()
  {
  d=document.form1
  if(d.name_act.value=="")
  {
  alert("ระบุ ชื่อกิจกรรม ด้วยครับ !");
  d.name_act.focus();
  return false;
  }  
    if(d.date_act.value=="")
  {
  alert("ระบุวันที่ ด้วยครับ!");
  d.date_act.focus();
  return false;
  } 
  if(d.detail_act.value=="")
  {
  alert("ระบุรายละเอียด ด้วยครับ!");
  d.detail_act.focus();
  return false;
  } 
else
  return true;
  }
  //--->
                           </script>
                  <form id="form1" name="form1" method="post" action="data_act_save.php" enctype="multipart/form-data" onsubmit="return checkma()">
                    <br />
                    <img src="images/icon_tellfriend.png" width="16" height="16" />                    <span class="style21"> เพิ่มกิจกรรมใหม่ </span>
                    <table width="70%"   border="0" cellpadding="1" cellspacing="0">
                      <tr style="BORDER-BOTTOM: #999999 1px solid; BORDER-LEFT: #999999 1px solid; BORDER-TOP: #999999 1px solid; BORDER-RIGHT: #999999 1px solid" border="0" cellspacing="0" cellpadding="5">
                        <td height="28" valign="top" bgcolor="#F7F7F7" style="BORDER-BOTTOM: #999999 1px solid; BORDER-LEFT: #999999 1px solid; BORDER-TOP: #999999 1px solid; BORDER-RIGHT: #999999 1px solid "  border="0" cellspacing="0" cellpadding="1"><table width="100%" border="0" cellpadding="0" cellspacing="2">
                            <tr>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                            </tr>
                            <tr>
                              <td><div align="right" class="style19">ชื่อกิจกรรม : </div></td>
                              <td><label>
                                <input name="name_act" type="text" id="name_act" size="40" />
                              </label></td>
                            </tr>
                            <tr>
                              <td width="99"><div align="right" class="style19">วันที่ : </div></td>
                              <td width="480"><script language="JavaScript" src="popcalendar.js" type="text/javascript"></script>
                                  <input id="timer" class="default_bold" type="text" readonly="true" name="date_act" size="25" value="<? if($pro_time!=""){echo $pro_time;}?>"/>
                                  <script language='JavaScript' type="text/javascript"> if (!document.layers) {document.write("<img src='img/cal.gif'  width='16' height='16' alt='ปฏิทิน' onclick='popUpCalendar(this, form1.date_act, \"d mmm yyyy\")'style='font-size:11px border:1px solid #36f;cursor:pointer'>  ")  }   </script></td>
                            </tr>
                            
                            <tr>
                              <td valign="top"><div align="right" class="style19">รายละเอียด : </div></td>
                              <td><textarea name="detail_act" cols="100" rows="9" id="detail_act"></textarea></td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td><input name="submit" type="submit" id="submit" style="BORDER-RIGHT: #999999 1px solid; BORDER-TOP: #999999 1px solid; BORDER-LEFT: #999999 1px solid; BORDER-BOTTOM: #999999 1px solid" value="บันทึก"/>
                                <input name="submit2" type="reset" id="submit2" style="BORDER-RIGHT: #999999 1px solid; BORDER-TOP: #999999 1px solid; BORDER-LEFT: #999999 1px solid; BORDER-BOTTOM: #999999 1px solid" value="ยกเลิก"/></td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td>&nbsp;</td>
                            </tr>
                        </table></td >
                      </tr>
                    </table>
                    <p>&nbsp;</p>
                  </form></td>
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

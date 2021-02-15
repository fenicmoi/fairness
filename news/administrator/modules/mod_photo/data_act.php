<?php 
session_start();
if ($_SESSION["sess_userid"]<>session_id())
{
	header("Location: ../../admin.php");
	exit();
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator</title>
</head>

<body >
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="100%" colspan="5" valign="top" bgcolor="#84B5FF">New Management</td>
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
                  <td height="22"><span class="style11"><a href="../../logout.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image5','','../../../icon/logout2.png',1)" title="�͡�ҡ�к�"><img src="../../../icon/logout1.png" name="Image5" width="60" height="20" border="0" id="Image5" /></a></span></td>
                </tr>
                </table>              </td>
            </tr>
              
              </table>
          <table width="100%" border="0" cellpadding="0" cellspacing="0">
            <tr>
              <td width="1%" background="../../../images/bg_menu.png"><img src="../../../images/bg_menu.png" width="4" height="35" /></td>
              <td width="99%" background="../../../images/bg_menu.png"><div align="left"><span class="style1">&nbsp;<a href="../../index.php" >หน้าหลัก</a></span></div></td>
            </tr>
            
            
			
			            <tr>
              <td background="../../../images/bg_menu.png"><img src="../../../images/bg_menu.png" width="4" height="35" /></td>
              <td background="../../../images/bg_menu.png"><div align="left"><span class="style1">&nbsp;<a href="data_act.php">test</a></span></div></td>
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
                <?php  include "menu.php"; ?>
              </span></td>
            </tr>
            <tr>
              <td width="1%" height="60">&nbsp;</td>
              <td width="99%" valign="top"><br />
                <img src="images/icon_tellfriend.png" width="16" height="16" />              <span class="style21"> �����šԨ���� </span>
                  <table width="100%"   border="0" cellpadding="1" cellspacing="0">
                    <tr style="BORDER-BOTTOM: #999999 1px solid; BORDER-LEFT: #999999 1px solid; BORDER-TOP: #999999 1px solid; BORDER-RIGHT: #999999 1px solid" border="0" cellspacing="0" cellpadding="5">
                      <td height="28" valign="top" bgcolor="#F7F7F7" style="BORDER-BOTTOM: #999999 1px solid; BORDER-LEFT: #999999 1px solid; BORDER-TOP: #999999 1px solid; BORDER-RIGHT: #999999 1px solid "  border="0" cellspacing="0" cellpadding="1"><span class="style19">
                        <?php 
                        include("../../../include/database.php");                                       
                        $sql = "SELECT * FROM  nt_act  order by id_act desc ";
                        $dbq=($sql) or die ("no databases");
                        $numrow = dbNumRows(dbq); 
                        ?>
                        �Ԩ���������� <?php echo $numrow ?> �Ԩ����
                        <?php  
                            if($numrow > 0){
                        ?>
                        </span>
                          <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC" class="textMidBlack">
                            <tr>
                              <td width="100%" height="39" bgcolor="#CCCCCC"><table width="100%" border="0" align="center" cellpadding="0" cellspacing="1">
                                  <tr bgcolor="#0C5B7A">
                                    <td width="30" height="17" background="../../images/bk_h01.gif" bgcolor="#FFFFFF"><div align="center" class="style19">���</div></td>
                                    <td width="335" background="../../images/bk_h01.gif" bgcolor="#FFFFFF"><div align="center" class="style19">���͡Ԩ����</div></td>
                                    <td width="157" background="../../images/bk_h01.gif" bgcolor="#FFFFFF"><div align="center" class="style19">�ѹ��� </div></td>
                                    <td width="71" background="../../images/bk_h01.gif" bgcolor="#FFFFFF"><div align="center" class="style19">�Ҿ����ź��� </div></td>
                                    <td width="84" background="../../images/bk_h01.gif" bgcolor="#FFFFFF"><div align="center" class="style19">�ٻ�Ҿ�Ԩ����</div></td>
                                    <td width="98" background="../../images/bk_h01.gif" bgcolor="#FFFFFF"><div align="center" class="style19">����繡Ԩ������</div></td>
                                    <td width="31" background="../../images/bk_h01.gif" bgcolor="#FFFFFF"><div align="center" class="style19">���</div></td>
                                    <td width="37" background="../../images/bk_h01.gif" bgcolor="#FFFFFF"><div align="center" class="style19">ź</div></td>
                                  </tr>
                                  <?php 
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
                                  <tr>
                                    <td height="18"><div  class="dxnbItem style21 style22">
                                        <div align="center">
                                          <?php echo $i ?>
                                        </div>
                                    </div></td>
                                    <td><div align="left" class="style19">&nbsp;
                                      &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
                                                                <?php echo $name_act?>
                                    </div></td>
                                    <td><div align="center" class="style19 style23">
                                        <?php echo$date_act?>
                                    </div></td>
                                    <td><div align="center">
                                  <?php     
                                    $strSQL = "SELECT * FROM nt_photo where id_photo=$id_photo";
                                    $objQuery = dbQuery($strSQL);
                                    $objResult = dbFetchArray($objQuery); 
                                    echo "$objResult[name_photo]";
                                ?>
<img src="images/photo.PNG" width="19" height="16" border="0" /></a>
</div>
</td>
 <td><div align="center" class="style19 style23"><a href="photo_act.php?id_act=<?php echo $id_act?>" title="�����ٻ�Ҿ�Ԩ����">Add Photo <img src="images/attach.gif" width="8" height="13" border="0" /></a></div></td>
<td><div align="center" class="style19 style23">
                            <?php 
                            if($status_act=='1'){
                            echo"<form id='form1' name='form1' method='post' action='data_status.php?id_act=$id_act&status_act=$status_act'><input type='image' name='submit' value='submit' src='images/icon_approve.png' width='16' height='16' title='¡��ԡ�Ԩ������' /></form>";
                            }else{
                            echo"<form id='form1' name='form1' method='post' action='data_status.php?id_act=$id_act&status_act=$status_act'><input type='image' name='submit' value='submit' src='images/icon_delete.png' width='16' height='16' title='����繡Ԩ������' /></form>";
                            }
                            ?>
</div></td>
                                    <td><div align="center"><a href="data_act_edit.php?id_act=<?=$id_act?>" title="��䢡Ԩ����" ><img src="../../images/forward_f2.png" width="16" border="0" /></a></div></td>
                                    <td><div align="center"><a href="data_act_del.php?id_act=<?=$id_act?>" onclick="return confirm('�س�������������ź�����šԨ�������  ++ �׹�ѹ���ź�����˹�ҷ�� ++ ')"><img src="../../images/publish_x.png" width="16" height="16" border="0" title="ź" /></a></div></td>
                                  </tr>
                                  <?php $i++; ?>
                              </table></td>
                            </tr>
                          </table>
                        <?php 
}else{
echo"<br> <font color=red>�ѧ����ա���������������������к� ! </b>";
}

?></td >
                    </tr>
                </table></td>
            </tr>
          </table>
          </td>
        </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
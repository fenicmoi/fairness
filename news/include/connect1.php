<?
$host="localhost";
$user="root";
$pass="123456";
$dbname="sk000"; //��駪��Ͱҹ�����ŵç����Ѻ
$connect=mysql_connect($host,$user,$pass);
if(!$connect) {
echo "�Դ��Ͱҹ�����������";
exit();
}
//���������µç���ФѺ
$cs1="SET character_set_results=tis620";
mysql_query($cs1) or die("ERR: Results");
$cs2="SET character_set_client=tis620";
mysql_query($cs2) or die("ERR: Client");
$cs3="SET character_set_connection=tis620";
mysql_query($cs3) or die("ERR: Connection");

?>
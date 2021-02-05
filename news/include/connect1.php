<?
$host="localhost";
$user="root";
$pass="123456";
$dbname="sk000"; //ตั้งชื่อฐานข้อมูลตรงนี้ครับ
$connect=mysql_connect($host,$user,$pass);
if(!$connect) {
echo "ติดต่อฐานข้อมูลไม่ได้";
exit();
}
//เพิ่มภาษาไทยตรงนี้นะคับ
$cs1="SET character_set_results=tis620";
mysql_query($cs1) or die("ERR: Results");
$cs2="SET character_set_client=tis620";
mysql_query($cs2) or die("ERR: Client");
$cs3="SET character_set_connection=tis620";
mysql_query($cs3) or die("ERR: Connection");

?>
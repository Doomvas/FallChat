<?php
//������������ � ��
include("includes/connection.php");
//�������� ��� ���������
$res=mysqli_query($con, "SELECT * FROM `messages` ORDER BY `id` ");
//������� ��� ��������� �� �����
while($d=mysqli_fetch_array($res))
{	
	echo "<b><font color='orange'>".$d['username'].":&nbsp;</font></b>"."<font color='red'>".$d['message']."</font></b>"."<br>";
}
?>
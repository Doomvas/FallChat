<?php
//�������� ���� �� ���������� �� ����������
if(isset($_POST['mess']) && $_POST['mess']!="" && $_POST['mess']!=" ")
{
	//�������� ������ ��� ������ ������ ������������
	session_start();
	//��������� ���������� ���������
	$mess=$_POST['mess'];
	//���������� � ������� ������������
	$username=$_SESSION['session_username'];
	//������������ � ����
	include("includes/connection.php");
	//��������� ��� � �������
	$res=mysqli_query($con, "INSERT INTO `messages` (`username`,`message`) VALUES ('$username','$mess') ");
}
?>
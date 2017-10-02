<?php
 error_reporting(E_ALL & ~E_DEPRECATED);
 $connect = mysql_connect('localhost','root','14011995') or die(mysql_error());
 mysql_select_db('mysql');
 
 if(isset($_POST['regist'])){
	$new_username=$_POST['new_username'];
	$new_login=$_POST['new_login'];
	$new_password=$_POST['new_password'];
	$r_new_password=$_POST['r_new_password'];
	if($new_password == $r_new_password) {
		$new_password = md5($new_password);
		$query = mysql_query("INSERT INTO registration VALUES (0,'$new_username','$new_login','$new_password')") or die(mysql_error());
		require('index.html');
		echo "Поздравляю! Вы успешно прошли регистрацию";
	}
	else{
		die('Упс, кажется вы не в сотояние повторить пару символов');
	}
 }
 
 if(isset($_POST['enter'])){
	$login=$_POST['login'];
	$password=md5($_POST['password']);
	 
	$query = mysql_query("SELECT * FROM registration WHERE login= '$login'");
	$user_info = mysql_fetch_array($query);
	
	if ($user_info['password'] == $password){
		$Name_of_user = $user_info['username'];
		require('index_content.html');
	}
	else{
		echo "Ало!! Это не ваша учетная запись! Я звоню в полицию";
	}
	
 }
 
?>

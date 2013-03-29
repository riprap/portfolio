<?php
/*
    File Name: login.php
    Name: Nolan Knill
    Web site name: Business Contacts List
    File Description: Login functionality, checks user/pass combo
*/

session_start();

function secure_password($password){
	$salt = sha1("facebook");
	$pepper = sha1("twitter");
	$secured_password = $salt . sha1($password) . $pepper;
	return $secured_password;
}

function check_login($username, $password, $db){

	$stmt = $db->prepare("SELECT id, username, password FROM admin WHERE username=?");
	$stmt->execute(array($username));
	$admin = $stmt->fetch(PDO::FETCH_ASSOC);

	if ($admin['username'] == $username && $password == $admin['password']){
		$_SESSION['id'] = 1;
		header('Location: index.php');
	}
	else{
		header("Location: index.php?login=failed");
	}
}

if (isset($_POST['username']) && isset($_POST['password'])){
	require('pdoconfig.php');
	check_login($_POST['username'], secure_password($_POST['password']), $db);
}
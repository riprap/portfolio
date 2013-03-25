
<!-- regular header -->

<!-- main content will be different -->
<?php
session_start();
if (isset($_SESSION['id'])){
	require ('get_contacts.php');
}
else{
	if ($_GET['login']=='failed'){
		echo "<p>Login failed. Try again.</p>";
	}
	else if ($_GET['logout']=="yes"){
		echo "<p>You have successfully logged out.</p>";
	}
	?> 
	<div id = "login-form">
		<form action = "login.php" method = "POST">
			<label for="username">Username: </label><input type="text" name="username">
			<label for="password">Password: </label><input type="password" name="password">
				<input type="submit" value="Login">
		</form>
	</div>


<?php } ?>
<!-- regular footer -->
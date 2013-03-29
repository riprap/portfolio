<!--
    File Name: index.php
    Author's Name: Nolan Knill
    Web site name: Business Contacts List
    File Description: This is the business contacts homepage
-->

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Nolan Knill</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="/css/slider.css">
        <link rel="stylesheet" href="/css/normalize.min.css">
        <link rel="stylesheet" href="/css/main.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>

    </head>
    <body>
        <!--[if lt IE 7]>

            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <div class="header-container">
            <header class="wrapper clearfix">
                <img src="/img/logo.png" alt="Nolan Knill">
                <nav>
                    <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="/about.html">About</a></li>
                    <li><a href="/projects.html">Projects</a></li>
                    <li><a href="/services.html">Services</a></li>
                    <li><a href="http://www.github.com/riprap">GitHub</a></li>
                    <li><a href="/contact.html">Contact</a></li>
                    <li><a href="/business/" class="active">Admin</a></li>
                    </ul>
                </nav>
            </header>
        </div>

        <div class="main-container">
            <div class="main wrapper clearfix">
            	<h1>Business Contacts</h1>
            	
            	<?php
				session_start();
				if (isset($_SESSION['id'])){
					require ('get_contacts.php');
				}
				else{
					//error messages
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

            </div> <!-- #main -->
        </div> <!-- #main-container -->

        <div class="footer-container">
            <footer class="wrapper">
                <h3>&#169;2013 NolanKnill.com. Terms of Use and Privacy Policy are applicable to you. All rights reserved.</h3>
            </footer>
        </div>

        </script>
    </body>
</html>
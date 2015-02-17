<!DOCTYPE html>
<html>

  <head>
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="main.css">
    
    <style type="text/css">
<!--
.textbox {
width:100px;
height:18px;
}

.nav-login {
color: #5a5a5a;
font-size: 11px;
font-weight: bold;
padding: 14px 10px;
text-transform: uppercase;
}
-->

.button {
border: 1px solid #006;
background: #E0E0E0;
margin: 1px 1px 1px 1px;
font-size: 11px;
font-weight: bold;
}
</style>

  </head>

  <body>
   <div align="center">
		<?php 	require_once 'connect.php';
				if (isset($_POST['submit'])){
				$username = $_POST['username'];
				$password = $_POST['password'];
				$sql = "SELECT * FROM `user` WHERE username='$username' and password='$password' and active=1";
				$result = mysql_query($sql) or die(mysql_error());
				$count = mysql_num_rows($result);
				if ($count == 1){
					echo "You are logged in";
				} 
				else {
					echo "Login Failed";
				}
				} ?>
	</div>
    <div class="nav">
      <div class="container">
        <ul class="pull-left">
          <li><a href="http://localhost:8888/PowerliftingHub/index.html">Home</a></li>
          <li><a href="#">Browse</a></li>
        </ul>
        <ul class="pull-right">
          <form action="" method="POST">
          <li><span class="nav-login">Username: <input type="text" class="textbox" id="username" name="username" placeholder="username"/></span>
          <li><span class="nav-login">Password: <input type="password" class="textbox" id="password" name="password" placeholder="password"/></span>
          <li><input type="submit" name="submit" class="button" value="Login" />
          <li><a href="http://localhost:8888/PowerliftingHub/register.php" size="8px">Sign Up</a></li>
          </form>
        </ul>
      </div>
    </div>

    <div class="jumbotron">
      <div class="container">
        <h1>Powerlifting Hub</h1>
        <p>Built by powerlifters, for powerlifters.</p>
        <a href="#">Who are we?</a>
      </div>
    </div> 
    
    <div class="neighborhood-guides">
        <div class="container">
       
            <h2>Features</h2>
            <p>This site was made to be an information center for powerlifters, where we can simultaneously access all the resources we need in one place.</p>
            <div class="row">
                <div class="col-md-4">
                    <div class="thumbnail">
                        <img src="http://www.animalpak.com/images/choicewords.jpg">
                    </div>
                    <div class="thumbnail">
                        <img src="http://synergystrength.ca/wp-content/uploads/2014/01/1513212_10152145946569245_698426690_n.jpg">
                    </div>
                <div class="col-md-4"></div>
                <div class="col-md-4"></div>
            </div>
        </div>
    </div>

    <div class="learn-more">
	  <div class="container">
		<div class="row">
	      <div class="col-md-4">
			<h3>Wilks Calculator</h3>
			<p>Want to keep track of your Wilks strength? Our calculator will store your 
			past Wilks values and display your progress over time.</p>
			<p><a href="#">Find you Wilks value.</a></p>
	      </div>
		  <div class="col-md-4">
			<h3>Leaderboards</h3>
			<p>See how your numbers stack up against other members. Sort by weight class 
			and Wilks values to get a more accurate portrayal of your performance.</p>
			<p><a href="#">The leaderboards.</a></p>
		  </div>
		  <div class="col-md-4">
			<h3>Programming Spreadsheets</h3>
			<p>Choose from your favorite training programs. StrongLifts, Sheiko, Candito, 
			Madcow.  We'll compile as many as we can and allow you to input your stats 
			directly into the webpage. No more copying your programs over from Excel to a 
			fitness app on your phone.  Just visit our page on any device and your program 
			will be stored.</p>
			<p><a href="#">View training regimens.</a></p>
		  </div>
	    </div>
	  </div>
	</div>
  </body>
</html>
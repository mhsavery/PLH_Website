<!DOCTYPE html>
<html>

<head>

    <title> Powerlifting Hub </title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="main.css">
    
    <script>
		$('#sidebar').affix({
      		offset: {
        		top: 240
      		}
		}); 
	</script>
	
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

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header"> 
                <a class="navbar-brand" href="#">PLH</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
                    <li><a href="#">Forums</a></li>
                    <li><a href="#">About</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Features <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Wilks Calculator</a></li>
                            <li><a href="#">Program Tracker</a></li>
                            <li><a href="#">Find Your Macros</a></li>
                        </ul>
                    </li>
                </ul>

                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
          
                <ul class="nav navbar-nav navbar-right">
                    <form action="" method="POST">
                        <li><span class="nav-login">Username: <input type="text" class="textbox" id="username" name="username" placeholder="username"/></span>
                        <li><span class="nav-login">Password: <input type="password" class="textbox" id="password" name="password" placeholder="password"/></span>
                        <li><input type="submit" name="submit" class="button" value="Login" />
                        <li><a href="http://localhost:8888/PowerliftingHub/register.php" size="8px">Sign Up</a></li>
                    </form>
                </ul>
            </div>
        </div>
    </nav>

	<?php	require('connect.php');
		// If the values are posted, insert them into the database.
		$password = $_POST['password'];
		$cpassword = $_POST['cpassword'];
		
		if ($cpassword != $password){
			echo "<b>ERROR:</b> Passwords do not match</br>";
			echo "Please follow this link to return to registration: "."<a href=\"http://localhost:8888/PowerliftingHub/register.php\">Registration</a>";
			exit;
		}
		
		if ((strlen($password) < 8) && (strlen($password) > 15)){
			echo "<b>ERROR:</b> Password must be at least 8 characters";
		}
		
		
		if (isset($_POST['username']) && isset($_POST['password'])){
			$username = $_POST['username'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$query = "INSERT INTO `user` (username, password, email) VALUES ('$username', '$password', '$email')";
			$result = mysql_query($query);
		if($result){
			$msg = "Thanks for joining!";
			echo $msg;
		}
		}
	?>

  	<div class="register-form" align="center">
		<h1>Register</h1>
			<form action="" method="POST">
				<p><label>&nbsp;&nbsp;&nbsp;&nbsp;User Name : </label>
					<input name="username" type="text" id="username" maxlength="15" placeholder="username" /></p>
				<p><label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E-Mail : </label>
					<input id="email" type="email" name="email" placeholder="email"/></p>
				<p><label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Password : </label>
					<input id="password" type="password" name="password" placeholder="password" /> (8 - 15 characters)</p>
				<p><label>Confirm Password : </label>
					<input id="cpassword" type="password" name="cpassword" placeholder="confirm" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>	
				<p><label>Sex : </label>
					<input id="sex" type="radio" name="sex" /> Male
					<input id="sex" type="radio" name="sex" /> Female
					<input id="sex" type="radio" name="sex" /> None of your business</p>
				<p><label>	
						<a class="btn" href="login.php">Login</a>
					<input class="btn register" type="submit" name="submit" value="Register" />
			</form>
	</div>



<nav class="navbar navbar-inverse navbar-bottom" style="padding:0 0 80px 0" id="bottomNavbar">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <h5 id='footer-header'> SITEMAP </h3>
                    <div class="col-sm-4" style="padding: 0 0 0 0px">
                        <p>News</p>
                        <p>contact</p>
                    </div>
                    <div class="col-sm-4" style="padding: 0 0 0 0px">
                        <p>FAQ</p>
                        <p>Privacy Policy</p>
                    </div>
                </div>
            </div>
        </div>
    </nav>



</body>

</html>

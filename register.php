<?php include("navmenu.php");?>
<link rel="stylesheet" href="./css/style.css">
<?php
function NewUser() {
	require('dbconnect.php');
	$userName = $_POST['username']; 
	$email = $_POST['email']; 
	$password = $_POST['password'];
	$query = "INSERT INTO associates (username,password,email) VALUES ('$userName','$password','$email')"; 
	$data = mysql_query ($query)or die(mysql_error()); 
	if($data) { 	
	echo "<div class='row'>";
    echo "<div class='alert alert-success col-md-offset-4 col-md-4' role='alert'>YOUR REGISTRATION IS COMPLETED...</div>";
	echo "</div>";
	echo "<script>window.location.href='index.php'</script>";	
	}
	}
	function SignUp() { 
	require('dbconnect.php');
	if(!empty($_POST['username'])) 
		{ 
	$username = $_POST['username'];
    $password = $_POST['password'];
	$query = "SELECT * FROM associates WHERE username='$username' and password='$password'";
    $query = mysql_query($query);
		  
		if(!$row = mysql_fetch_array($query) or die(mysql_error()))
		{ 
		NewUser(); 
		} 
		else {			
		echo "</br>";
	    echo "<h4 align='center'>";	
        echo "<font class='bg-danger'>SORRY...YOU ARE ALREADY REGISTERED USER...</font>";
        echo "</h4>";			 
		}
		}
		} 
		if(isset($_POST['submit'])) {
			
			SignUp(); 
		}
?>
<div class="container"> 
  <div class="row" id="pwd-container">
    <div class="col-md-4"></div>   
    <div class="col-md-4">
      <section class="login-form">
        <form method="post" action="#" role="login">
          <h1 align="center" style="font-weight:bold;">KEDB</h1>
		  <input type="text" name="username" placeholder="Username" required class="form-control input-lg"  />
		  <input type="password" class="form-control input-lg" id="password" placeholder="Password" required="" name="password" /> 
          <input type="email" name="email" placeholder="Email" required class="form-control input-lg"  />          
          <button type="submit" name="submit" class="btn btn-lg btn-primary btn-block">Create Account</button>
          <div>
            <a href="login.php">Log In to Existing Account</a>
          </div>         
        </form>       
      </section>  
      </div>     
      <div class="col-md-4"></div>  </div>
 </div>
<?php include("footer.php"); ?>
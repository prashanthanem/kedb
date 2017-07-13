<?php include("navmenu.php");?>
<link rel="stylesheet" href="./css/style.css">
<?php
	function Login() { 
	require('dbconnect.php');
	if(!empty($_POST['email'])) 
		{ 
	$email = $_POST['email'];
    $password = $_POST['password'];
	$query = "SELECT * FROM associates WHERE email='$email' and password='$password'";
    $result = mysql_query($query);
	$count=mysql_num_rows($result);
	$row = mysql_fetch_array($result);
	
	if($count==1){
    //session_start();
    $_SESSION['loggedin'] = true;
    //$_SESSION['username'] = $email;
	$_SESSION['username'] = $row['username'];
	echo "<script>window.location.href='index.php'</script>";
	}
	else{
	    echo "</br>";		
		echo "<div class='row'>";
        echo "<div class='alert alert-danger col-md-offset-4 col-md-4' role='alert'>Invalid Login Credentials</div>";
	    echo "</div>";
	}
		
		}
		} 
		if(isset($_POST['login'])) {
			
			Login(); 
		}
?>
<div class="container">  
  <div class="row" id="pwd-container">
    <div class="col-md-4"></div>    
    <div class="col-md-4">
      <section class="login-form">
        <form method="post" action="#" role="login">
          <h3 align="center" style="font-weight:bold;">Log in to KEDB</h3>
          <input type="email" name="email" placeholder="Email" required class="form-control input-lg"  />
          <input type="password" class="form-control input-lg" id="password" placeholder="Password" required="" name="password"/> 
          <button type="submit" name="login" class="btn btn-lg btn-primary btn-block">Log In</button>
          <div>
            <a href="register.php">Sign up for KEDB</a>
          </div>          
        </form>      
      </section>  
      </div>      
      <div class="col-md-4"></div>
	  </div>  
</div>
<?php include("footer.php"); ?>
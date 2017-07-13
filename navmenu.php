<html>
<head>
<title>KEDB</title>
<?php session_start(); ?>
	<script src="./js/jquery-1.12.4.js"></script>	
	<script src="./js/jquery.dataTables.min.js"></script>
	<script src="./js/dataTables.bootstrap4.min.js"></script>	
    <link rel="stylesheet" href="./css/bootstrap.min.css" type='text/css'>
    <link href="./css/dataTables.bootstrap4.min.css" rel='stylesheet' type='text/css'>
	<link href="./css/sticky-footer.css" rel="stylesheet" type='text/css'>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
  	<style type='text/css'>
	.center{
	text-align:center;
	}
	.marg{
	margin:15px;	
	}
	.foot{
	background-color:black;
	color:white;
	}
	</style>
<script type="text/javascript">
function showcreate(){
	window.location.href="create.php";
}
</script>
</head>
<body class="jumbotron">
 <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">KEDB</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>			
          </ul>
		   <ul class="nav navbar-nav navbar-right">
		   <?php if($_SESSION['username']) { ?>
              <li class="active"><a href="./">Welcome <?php echo  $_SESSION['username'] ?></a></li>
			  <li><a href="logout.php">Log Out</a></li>
			  <?php }else{ ?>
              <li><a href="login.php">Login/Register</a></li>
			  <?php } ?>
              
            </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
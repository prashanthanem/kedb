<?php include("navmenu.php");?>
<?php
require('dbconnect.php');
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
if(isset($_POST['submit']))
{
$problem = $_POST['problem']; 
$description = $_POST['description']; 
$resolution = $_POST['resolution'];
$poc = $_POST['poc'];
$snaps = $_POST['snaps'];
$queryy = "INSERT INTO tracking (problem,description,resol,poc,snaps) VALUES ('$problem','$description','$resolution','$poc','$snaps')";
$resultt = mysql_query($queryy);
if($resultt) { 
	echo "</br>";
	echo "<div class='row'>";
    echo "<div class='alert alert-success col-md-offset-4 col-md-4' role='alert'>Entry is created...</div>";
	echo "</div>";
	echo "<script>window.location.href='index.php'</script>";
	}
}
}
else {
echo "<script>window.location.href='login.php'</script>";
}
?>
</br>
<div class="container">
	<div class="row">
		<form class="form-horizontal" method="post">
            <fieldset>
                <!-- Form Name -->
                <legend>Create Form</legend>
                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Problem</label>
                    <div class="col-md-6">
					  <textarea class="form-control" id="color" name="problem" placeholder="Problem" required=""></textarea>                      
                    </div>
                </div>
                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="color">Description</label>
                    <div class="col-md-6">                       
						  <textarea class="form-control" id="color" name="description" placeholder="Description" required=""></textarea>
                    </div>
                </div>
               
                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="thresholdvalue">Resolution</label>
                    <div class="col-md-6">
                       <textarea class="form-control" id="color" name="resolution" placeholder="Resolution" required=""></textarea>
                    </div>
                </div>
               
                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="email">POC</label>
                    <div class="col-md-6">
                        <textarea class="form-control" id="color" name="poc" placeholder="POC" required="" ></textarea>
                    </div>
                </div>
                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="sms">Snaps</label>
                    <div class="col-md-6">
                        <textarea class="form-control" id="color" name="snaps" placeholder="Snapshots" required="" ></textarea>
                    </div>
                </div>
              
                <!-- Button (Double) -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="submitButton"></label>
                    <div class="col-md-8">
                        <button id="submitButton" name="submit" class="btn btn-success" type="submit">Save</button>
                        <button id="cancel" name="cancel" class="btn btn-danger">Cancel</button>
                    </div>
                </div>
            </fieldset>
        </form>
	</div>
</div>
<?php include("footer.php"); ?>
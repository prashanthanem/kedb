<?php include("navmenu.php");?>
<?php
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
$id = $_GET['ID'];
require('dbconnect.php');
$query = "SELECT * FROM `tracking` WHERE ID=$id";
$result = mysql_query($query);
$row = mysql_fetch_array($result);
}
else{
echo "<script>window.location.href='login.php'</script>";}
?>
<?php
if(isset($_POST['Update']))
{
$problem = $_POST['problem']; 
$description = $_POST['description']; 
$resolution = $_POST['resolution'];
$poc = $_POST['poc'];
$snaps = $_POST['snaps'];
$queryy = "UPDATE tracking
      SET problem='$problem',description='$description',resol='$resolution',poc='$poc',snaps='$snaps'
      WHERE ID='$id'";
$resultt = mysql_query($queryy);
if($resultt) { 
	echo "</br>";
	echo "<div class='row'>";
    echo "<div class='alert alert-success col-md-offset-4 col-md-4' role='alert'>Successfully Updated...</div>";
	echo "</div>";
	echo "<script>window.location.href='index.php'</script>";
	}
}
?>
</br>
<div class="container">
	<div class="row">
		<form class="form-horizontal" method="post">
            <fieldset>
                <!-- Form Name -->
                <legend>Edit Data</legend>
                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Problem</label>
                    <div class="col-md-6">
					  <textarea class="form-control" id="color" name="problem" placeholder="Problem" required=""><?php echo $row['problem']?></textarea>                      
                    </div>
                </div>
                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="color">Description</label>
                    <div class="col-md-6">                       
						  <textarea class="form-control" id="color" name="description" placeholder="Description" required=""><?php echo $row['description']?></textarea>
                    </div>
                </div>
               
                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="thresholdvalue">Resolution</label>
                    <div class="col-md-6">
                       <textarea class="form-control" id="color" name="resolution" placeholder="Resolution" required=""><?php echo $row['resol']?></textarea>
                    </div>
                </div>
               
                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="email">POC</label>
                    <div class="col-md-6">
                        <textarea class="form-control" id="color" name="poc" placeholder="POC" required="" ><?php echo $row['poc']?></textarea>
                    </div>
                </div>
                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="sms">Snaps</label>
                    <div class="col-md-6">
                        <textarea class="form-control" id="color" name="snaps" placeholder="Snapshots" required="" ><?php echo $row['snaps']?></textarea>
                    </div>
                </div>
              
                <!-- Button (Double) -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="submitButton"></label>
                    <div class="col-md-8">
                        <button id="submitButton" name="Update" class="btn btn-success" type="submit">Update</button>
                        <button id="cancel" name="cancel" class="btn btn-danger">Cancel</button>
                    </div>
                </div>
            </fieldset>
        </form>
	</div>
</div>
<?php include("footer.php"); ?>
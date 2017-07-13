<?php include("navmenu.php");?>
<?php
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
	echo "</br>";
	echo "<div class='row'>";
    echo "<div class='alert alert-info col-md-offset-4 col-md-4' role='alert'>Welcome back," + $_SESSION['username'] + "</div>";
	echo "</div>";    
} else {
    echo "<script>window.location.href='login.php'</script>";
}
?>
<script type="text/javascript">
function showcreate(){
	window.location.href="create.php";
}
</script>
<div class="container-fluid"> 
<div align="right">
<button type="button" class="btn btn-sm btn-primary btn-create marg"  onClick="showcreate()">Create New</button>
</div>
 
 <table id="test" class="table table-hover table-striped table-bordered" cellspacing="0" width="100%">
	<thead>
		<tr>	
		<th>Problem</th>
		<th>Description</th>
		<th>Resolution</th>
		<th>POC</th>
		<th>Snaps</th>
		<th align="center"><em class="btn btn-info btn-sm">Edit</em></th>
		<th align="center"><em class="btn btn-danger btn-sm">Delete</em></th>
		</tr>
	</thead>
	</table>
	</div>
<?php include("footer.php"); ?>
<script>
$(document).ready(function(){
    $('#test').DataTable({
		"bProcessing": true,
        "sAjaxSource": "server.php",
 "aoColumns": [{
      "sWidth": "20%",
      "mData": 1
    }, {
      "sWidth": "20%",
      "mData": 2
    }, {
      "sWidth": "20%",
      "mData": 3
    }, {
      "sWidth": "20%",
      "mData": 4
    }, {
      "sWidth": "20%",
      "mData": 5
    }, {
      "mData": null,
      "bSortable": false,
	  "sClass": "center",
      "mRender": function(data, type, full) {
	  return '<a class="ui-tooltip fa fa-pencil"  href="edit.php?ID=' + full[0] + '"></a>';
      },
    },
	{
      "mData": null,
      "bSortable": false,
	  "sClass": "center",
     "mRender": function (data, type, full) { 
	 return '<a class="ui-tooltip fa fa-trash-o" href="delete.php?ID=' + full[0] + '"></a>';	 
	 },
    }],

        });   
	});
</script>

 
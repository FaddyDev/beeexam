
<?php
 session_start();
if(isset($_SESSION['loguser'])){}else{header("location:login.php");}

?>
 <body style="background: url(img/index.jpg) no-repeat center center fixed">
 <?php include("mainheader.php");?>
 <div class="container">
<div class="row">
 <?php include("servicesidebar.php");?>
 
 
 <div class="col-xs-10 table-responsive">
  <div class = "panel-heading" style="background-color:green;"> 
		<font color=white><center><h3 class ="panel-title"><b>LIST OF SUPPLIERS</b></center></h3></font>
		</div>
 <table class="table table-stripped table-hover table-bordered table-condensed" style="background-color:white;">
	<thead>
		<tr>
			<th>SUPPLIER NAME</th>
			<th>SUPPLIER ADDRESS</th>
			<th>PHONE</th>
			<th>LOCATION</th>
			<th>DESCRIPTION</th>
		</tr>
	</thead>
	<tbody>		
		
		<?php
		require("include/connection.php");				
			$results = mysql_query("SELECT * FROM `supplier`") or die (mysql_error());			
			while($project = mysql_fetch_array($results)){
				echo "
				<tr> 
					<td>".$project['supplier_name']."</td>
					<td>".$project['supplier_address']."</td>
					<td>".$project['phone']."</td>
					<td>".$project['location']."</td>
					<td>".$project['description']."</td>		
				</tr>
				";
				
				
			}
		?>
		
	</tbody>
 </table>
 
 
 </div>
 
</div>
<BR />


<br />
<?php include("mainfooter.php");?>
</div>
</body>
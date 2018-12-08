<?php 
require_once('config.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/jquery.dataTables.min.css">
	<style>
.table-bordered tbody tr:nth-child(odd) td,
		.table-bordered tbody tr:nth-child(odd) th {
			background-color: #FFFFF0;
		}

		.table-bordered thead tr th{background-color: #95c4ff;}
		.table-bordered tbody tr:nth-child(even) th {
			background-color: #efe2e3;
			border-color: #abc123;
			color:#000;
		}
		.table-bordered, .table-bordered td{
   border-color: red;
}
	</style>
  </head>
  <body>
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1" style="padding:15px 0px 15px 13px;">
				<a href="index.php" class="btn btn-sm btn-success">Click here to Registration</a>
			</div>
			<div class="col-md-10 col-md-offset-1">
				<table id="myTable" class="table table-bordered">
					<thead>
						<tr>
							<th>Name</th>
							<th>Email</th>
							<th>Phone</th>
							<th>Zip</th>
							<th>Country</th>
							<th>Sex</th>
							<th>D.B</th>
							<th>Address</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th>Name</th>
							<th>Email</th>
							<th>Phone</th>
							<th>Zip</th>
							<th>Country</th>
							<th>Sex</th>
							<th>D.B</th>
							<th>Address</th>
						</tr>
					</tfoot>
					<tbody>
					<?php 
						$get_data=mysql_query("Select * from test order by first_name desc");
						while($row=mysql_fetch_array($get_data)){
							$fname=$row['first_name'];
							$lname=$row['last_name'];
							$email=$row['email'];
							$phone=$row['phone'];
							$password=$row['password'];
							$zip=$row['zip'];
							$country=$row['country'];
							$sex=$row['sex'];
							$date_of_birth=$row['date_of_birth'];
							$address=$row['Address'];
							
					?>
						<tr>
							<td><?php echo $fname." ".$lname; ?></td>
							<td><?php echo $email; ?></td>
							<td><?php echo $phone; ?></td>
							<td><?php echo $zip;?></td>
							<td><?php echo $country; ?></td>
							<td><?php echo $sex;?></td>
							<td><?php echo $date_of_birth;?></td>
							<td><?php echo $address;?></td>
						</tr>
						<?php } ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/jquery.dataTables.min.js"></script>
	<script>
		$(document).ready( function () {
            $('#myTable').DataTable();
})
	</script>
  </body>
</html>
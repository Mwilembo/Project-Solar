<?php
    $conn = mysqli_connect("localhost", "root", "", "solardatalog");       
    // Check connection
    if($conn === false){
    die("ERROR: Could not connect. "
    . mysqli_connect_error());
    }
    $query = "SELECT * FROM datalog";
	$resultSet = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Solar-Data-Entry</title>
</head>
<body>
    <div class="headImg">
        <img src="VE-img.jpg" alt="Victron Energy Logo">
    </div>
    <div class="headTitle">
        <h5>Below is a list of log entries for Victron Energy Solar.</h5>
    </div>
    <br>
    <table>
		<tr>
			<th>AC LOADS</th>
			<th>BATTERY POWER</th>
			<th>PV CHARGER</th>
			<th>AC INPUT</th>
            <th>TIME RECORDED</th>
		</tr>
		<?php
			while($rows = mysqli_fetch_assoc($resultSet)){
		?>
		<tr>
			<td><?php echo $rows['acLoads'];?></td>
			<td><?php echo $rows['batteryPower'];?></td>
			<td><?php echo $rows['pvCharger'];?></td>
			<td><?php echo $rows['acInput'];?></td>
			<td><?php echo $rows['timestamp'];?></td>
		</tr>
		<?php
	        }
		?>
		</table>
    <script src="app.js"></script>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
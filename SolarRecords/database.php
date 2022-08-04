<?php
	// servername => localhost
	// username => root
	// password => empty
	// database name => staff
	$conn = mysqli_connect("localhost", "root", "", "solardatalog");
		
		// Check connection
	if($conn === false){
	    die("ERROR: Could not connect. "
		. mysqli_connect_error());
	}
	// Taking all 5 values from the form data(input)
	$acLoads = $_REQUEST['acLoads'];
    $batteryPower = $_REQUEST['batteryPower'];
	$pvCharger = $_REQUEST['pvCharger'];
	$acInput = $_REQUEST['acInput'];
		
	// Performing insert query execution
	// here our table name is datalog
	$sql = "INSERT INTO datalog (acLoads, batteryPower, pvCharger, acInput) VALUES ('$acLoads',
		'$batteryPower','$pvCharger','$acInput')";
		
	if(mysqli_query($conn, $sql)){
		header('Location: showResults.php');
	} else{
		echo "ERROR: Hush! Sorry $sql. "
			. mysqli_error($conn);
	}
		
		
	// Close connection
	mysqli_close($conn);
?>
<?php

// Connect to the database
$conn = new mysqli("localhost", "root", "Aasha@1107", "auditorium");

// Check connection
// Check connection
if($conn === false){
    die("ERROR: Could not connect. "
        . mysqli_connect_error());
}

// Get the form data
$username = $_POST['username'];
$hallid = $_POST['hallid'];
$date = $_POST['date'];
$start_time = $_POST['start_time'];
$updated_date = $_POST['updated_date'];
$updated_end_time = $_POST['updated_end_time'];
$updated_start_time = $_POST['updated_start_time'];


// Prepare the update query
$sql = "UPDATE timings SET edate='$updated_date',end_time ='$updated_end_time', start_time='$updated_start_time' WHERE user_name='$username' and hid='$hallid' and edate='$date'";

if(mysqli_query($conn, $sql)){
			echo"<h1>DATA UPDATED SUCCESSFULLY..!!</h1><br>";

		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div><a href="new.php"> Click here to see your registration </a>
</div>
</body>
<style>
	body{         background-color: #fde7ff;
   }
h1 {
    text-align: center;
    border: solid black 2px;
    background-color: #9bf4d5;
    color: #303841;
	margin-top:22%;
}
div{
background-color: #fde7ff;
    border-width: 5px;
    border-color: #B4CDE6;
    border-style: inset;
    padding: 10px;
	width:300px;
	text-align : center;
	margin-left: 600px;
}
</style>
</html>

<?php
$conn = mysqli_connect("localhost", "root", "Aasha@1107", "auditorium");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$user_name = $_REQUEST['user_name'];
		//$last_name = $_REQUEST['last_name'];
		//$gender = $_REQUEST['gender'];
		//$address = $_REQUEST['address'];
		//$email = $_REQUEST['email'];
        //$password=$_REQUEST['password'];
		$hid=$_REQUEST['hid'];
        $edate=$_REQUEST['date'];
		// Performing insert query execution
		// here our table name is college
		$sql = "DELETE FROM  event_happening where user_name='$user_name' and hid='$hid' ";
		$abc= "DELETE FROM timings where user_name='$user_name' and hid='$hid' and edate='$edate'";
		if(mysqli_query($conn, $sql)){
			echo "<div><h1>DATA DELETED FROM DATABASE SUCCESSFULLY.</h1></div>";

			//echo nl2br("\n$user_name\n "
			//	. "$gender\n $address\n $email \n$password \n");
			
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<a href="new.php" class="backb" >BACK</a><br>
    <style>
       body{
            background-image: linear-gradient(to right,#d4145a, #fbb03b);
        }
		.backb {
  display: inline-block;
  background-color: #d9f2ff;
  color: #9f1e49;
  text-align: center;
  font-size: 20px;
  padding: 10px;
  width: 50px;
  height:10px;
  transition: all 0.5s;
  cursor: pointer;
  margin-top:220px;
}
        .button {
  display: inline-block;
  border-radius: 4px;
  background-color: black;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}h1 {
    text-align: center;
    border: solid black 2px;
    background-color: #9bf4d5;
    color: #303841;
}
div{
background-color: #fde7ff;
    border-width: 5px;
    border-color: #B4CDE6;
    border-style: inset;
    border-left-width: 10px;
    padding: 10px;
	margin-top:22%;
}
.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
} 

</body>
</html>

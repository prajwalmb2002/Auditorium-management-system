<?php

// Connect to the MySQL database
$host = "localhost";
$username = "root";
$password = "";
$dbname = "auditorium";

$conn = mysqli_connect($host, $username, "Aasha@1107", $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

//$user_name = $_REQUEST['user_name'];

// Escape user inputs for security
$user_name = mysqli_real_escape_string($conn, $_POST['user_name']);
$hallid = mysqli_real_escape_string($conn, $_POST['hallid']);
//$date = mysqli_real_escape_string($conn, $_POST['date']);
//$start_time = mysqli_real_escape_string($conn, $_POST['start_time']);
//$end_time = mysqli_real_escape_string($conn, $_POST['end_time']);
$event_name = mysqli_real_escape_string($conn, $_POST['event_name']);

// Attempt insert query execution
//$sql = "INSERT INTO timings (user_name, hid, edate, start_time,end_time) VALUES ('$user_name', '$hallid', '$date', '$start_time','$end_time')";
$sql = "INSERT INTO event_happening (user_name, hid, event_name) VALUES ('$user_name', '$hallid', '$event_name')";

if(mysqli_query($conn, $sql)){
    echo "<div><h1>RECORDS ARE ADDED SUCCESSFULLY</h1></div>";
} else{
    echo "<div><h1>TRY TO GIVE A VALID USERNAME .</h1></div>";
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
    <a href="reserve.php" class="button" >back</a><br>
    <style>
       body{
            background-image: linear-gradient(to right,#d4145a, #fbb03b);
        }


        .button {
  display: inline-block;
  background-color: #d9f2ff;
  border-radius: 20%;
  color: black;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 50px;
  height:15px;
  transition: all 0.5s;
  cursor: pointer;
  margin-top:220px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}
h1 {
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
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
$user_name1 = $_POST['user_name1'];
$hallid1 = $_POST['hallid1'];
$date = $_POST['date'];
$start_time = $_POST['start_time'];
$end_time = $_POST['end_time'];

// Escape user inputs for security
/*$user_name1 = mysqli_real_escape_string($conn, $_POST['user_name']);
$hallid1 = mysqli_real_escape_string($conn, $_POST['hallid']);
$date = mysqli_real_escape_string($conn, $_POST['date']);
$start_time = mysqli_real_escape_string($conn, $_POST['start_time']);
$end_time = mysqli_real_escape_string($conn, $_POST['end_time']);*/
//$event_name = mysqli_real_escape_string($conn, $_POST['event_name']);

// Attempt insert query execution
//$sql = "INSERT INTO timings (user_name, hid, edate, start_time,end_time) VALUES ('$user_name1', '$hallid1', '$date', '$start_time','$end_time')";
//$sql = "INSERT INTO event_happening (user_name, hid, event_name) VALUES ('$user_name', '$hallid', '$event_name')";

/*if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not execute $sql. " . mysqli_error($conn);
}*/
$query = "SELECT * FROM event_happening WHERE user_name='$user_name1' AND hid='$hallid1' ";
    $result = mysqli_query($conn, $query);
$abc = "SELECT * FROM timings WHERE user_name='$user_name1' AND hid='$hallid1'AND start_time ='$start_time'";
    $resp=mysqli_query($conn,$abc);
    if(mysqli_num_rows($result) == 0) {
        // Show an error if the values does not exist in the table
        echo "<div><h1>ERROR..!! VALUE DOSEN'T EXISTS. PLEASE REGISTER FIRST</h1></div> ";
    }
    elseif(mysqli_num_rows($resp)>0){
        echo"<div><h1>SORRY ...!! HALL IS ALREADY BOOKED. TRY FOR ANOTHER SLOT</h1> </div>";
    }
    else{
        // Insert the data into the table
        $sql = "INSERT INTO timings (user_name, hid, edate, start_time,end_time) VALUES ('$user_name1', '$hallid1', '$date', '$start_time','$end_time')";

//        $query = "INSERT INTO  (field1, field2, field3) VALUES ('$field1', '$field2', '$field3')";
        mysqli_query($conn, $sql);
        echo "<div><h1>VALUES INSERTED SUCCESSFULLY..!!.</h1></div>";
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
    <style>
       body{
            background-image: linear-gradient(to right,#d4145a, #fbb03b);
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

    </style>
    <title>Document</title>
</head>
<body>
<html>
  <body>
    <a href="new.php" class="button">See Registration</a><br>
  </body>
</html>

</body>
</html>
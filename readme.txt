
-->to display all details about the person who has booked the hall


$sql = "SELECT n.user_name,h.hid,t.start_time,t.end_time,e.event_name FROM\n"

    . "new_regs n,hall_no h,timings t,event_happening e WHERE\n"

    . "n.user_name=h.user_name and n.user_name=t.user_name and n.user_name=t.user_name\n"

    . "and n.user_name=e.user_name;"


    while ($row = mysqli_fetch_assoc($result)) {
    echo "hall id     :  ",$row['hid'] . "<br>";
    echo "start time  :  " ,$row['start_time'] . "<br>";
    echo "end time    :  " ,$row['end_time'] . "<br>";
    echo "event_name  :  ",$row['event_name'] . "<br>";
}


<?php
$conn = mysqli_connect("Localhost","root","", "auditorium");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  $sql = "SELECT n.user_name,h.hid,t.start_time,t.end_time,e.event_name FROM new_regs n,hall_no h,timings t,event_happening e WHERE n.user_name=e.user_name and n.user_name=t.user_name ;
  $result = mysqli_query($conn, $sql);
    ?>






    <?php

// Connect to the MySQL database
$host = "localhost";
$username = "root";
$password = "";
$dbname = "auditorium";

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$user_name = $_REQUEST['user_name'];

// Escape user inputs for security
$user_name = mysqli_real_escape_string($conn, $_POST['user_name']);
$hallid = mysqli_real_escape_string($conn, $_POST['hallid']);
$date = mysqli_real_escape_string($conn, $_POST['date']);
$start_time = mysqli_real_escape_string($conn, $_POST['start_time']);
$end_time = mysqli_real_escape_string($conn, $_POST['end_time']);
$event_name = mysqli_real_escape_string($conn, $_POST['event_name']);

// Attempt insert query execution
$sql = "INSERT INTO timings (user_name, hid, edate, start_time,end_time) VALUES ('$user_name', '$hallid', '$date', '$start_time','$end_time')";
$sql = "INSERT INTO event_happening (user_name, hid, event_name) VALUES ('$username', '$hallid', '$event_name')";

if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not execute $sql. " . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);
?>







<label for="date">Date:</label><br>
  <input type="date" id="date" name="date" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}"><br>
  <br>
  
  <label for="start_time">Start Time:</label><br>
  <input type="time" id="start_time" name="start_time"><br>

  <label for="end_time">End Time:</label><br>
  <input type="time" id="end_time" name="end_time"><br>
  <br>



  <div class="formtag">
<form action="logs.php" method="POST" >
  <h1>Login</h1>
  <label for="username">Username:</label><br>
  <input type="text" id="username" name="username"><br>
  <label for="password">Password:</label><br>
  <input type="password" id="password" name="password"><br><br>
  <input type="submit" value="Submit">
</form> 
</div>

body{
            background-image: linear-gradient(to right,#d4145a, #fbb03b);
        }
        .formtag{
          margin: 56px;
         margin-left: 50%;
        }

--------------------------------------------------------------------------------------------


        <style>
		body{
            background-image: linear-gradient(to right,#d4145a, #fbb03b);
        }
		.fromss{
			background-color:white;
			padding:0;
		}
	</style>
</head>
<body>
	<center>
		<h1>Storing Form data in Database</h1>
		<div class="fromss">
		<form action="insert.php" method="post">
			
<p>
			<label for="userName">First Name:</label>
			<input type="text" name="user_name" id="userName">
			</p>

			
<p>
			<label for="Gender">Gender:</label>
			<input type="text" name="gender" id="Gender">
			</p>
			
<p>
			<label for="Address">Address:</label>
			<input type="text" name="address" id="Address">
			</p>

			
<p>
			<label for="emailAddress">Email Address:</label>
			<input type="text" name="email" id="emailAddress">
			</p>
            
            <p>
			<label for="password">Passwor:</label>
			<input type="password" name="password" id="password">
			</p>
			
            <input type="submit" value="Submit">
		</form>
		</div>
	</center>
</body>
</html>


<label for="gender" class="fl fontLabel"> Gender: </label>
    				<input type="radio" name="Gender" value="Male" required> Male &nbsp; &nbsp; &nbsp; &nbsp;
    				<input type="radio" name="Gender" value="Female" required> Female
    		</div>
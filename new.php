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
        .navig{
            background-color: rgb(30 132 135);
            color: white;
        }
    
  </style>
    <title>page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>
  <div class="navig">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="index.html">Home</a>
        <a class="nav-link" href="reserve.php">New reservations </a>
        <a class="nav-link" href="delete.html">Delete reservations </a>
        <a class="nav-link" href="update.html">update reservations </a>
        
        
      </div>
      </div>
    </div>
  </div>
</nav>
    <h1><center>HALLS BOOKED</center></h1>
    <?php

// Connect to the database
$host = "localhost";
$user = "root";
$password = "";
$dbname = "auditorium";

$conn = mysqli_connect($host, $user, "Aasha@1107", $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Select all rows from the table
$sql = "select e.user_name,e.hid,e.event_name,t.edate,t.start_time ,t.end_time from event_happening e,timings t WHERE e.user_name=t.user_name and e.hid=t.hid;";
$result = mysqli_query($conn, $sql);

// Check if there are any rows
if (mysqli_num_rows($result) > 0) {
    // Output the data for each row
    ?>
      <div class="det"> >
      <?php
    while($row = mysqli_fetch_assoc($result)) {
      ?>
      <div class="details"> >
      <?php
        echo "user_name: " . $row["user_name"]."<br>";
        echo "hall id     :  ",$row['hid'] . "<br>";
        echo "date  :  " ,$row['edate'] . "<br>";
        echo "start time  :  " ,$row['start_time'] . "<br>";
        echo "end time    :  " ,$row['end_time'] . "<br>";
        echo "event_name  :  ",$row['event_name'] . "<br>";
        echo "-------------------------"."<br>";
        ?>
        </div>
        <?php
}
?>
        </div>
        <?php
    
} else {
    echo "No results found.";
}

// Close connection
mysqli_close($conn);

?>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
<style>
.details{
background-color: #fde7ff;
    border-width: 5px;
    border-color: #B4CDE6;
    border-style: inset;
    border-left-width: 10px;
    padding: 10px;

}
.det {
  margin-top:50px;
  display : flex;
  flex-direction : row;
  justify-content:space-around;
}
h1 {
    text-align: center;
    border: solid black 2px;
    background-color: #9bf4d5;
    color: #303841;
}
</style>
</html>
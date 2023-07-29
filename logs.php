<?php
  // Connect to the database
  //$host = "localhost";
  //$username = "root";
  //$password = "";
  //$dbname = "auditorium";
  $conn = mysqli_connect("Localhost","root","Aasha@1107", "auditorium");

  // Check connection
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // Get the submitted username and password
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Query the database for a matching username and hashed password
  $sql = "SELECT * FROM new_regs WHERE user_name='$username' AND password='$password'";
  $result = mysqli_query($conn, $sql);

  // If a match is found, login is successful
  if (mysqli_num_rows($result) > 0) {
    // Redirect to dashboard or home page
    header("Location: new.php");
  } else {
    // Display error message
    echo " Invalid username or password";
  }

  // Close the database connection
  mysqli_close($conn);
?>

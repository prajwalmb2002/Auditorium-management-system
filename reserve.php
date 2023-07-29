
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reservations</title>
    <style>
        body{
            background-image: linear-gradient(to right,#d4145a, #fbb03b);
        }
        .reserve{
            margin: 38px;
            margin-left: 192px;
            padding:15px;
        }
        .packet{
            display:flex;
        
        }
        .reserve1{
            margin: 64px;
            margin-left: 164px;
            margin-top:40px
        }
        #full_name{
            padding: 7px 31px;
            border:0;
        }
    </style>
</head>
<body>
    <h2>BOOK YOUR AUDITORIUM HERE</h2>
    <div class="packet">
 <div class="reserve">
<h2><b>Book Your Hall</b></h2>
<form action="con_reserv.php" method="POST">

  <label for="user_name">Username:</label><br>
  <input type="text" id="user_name" name="user_name"><br>
  <br>

  <label for="hallid">Hall ID:</label><br>
  <select id="hallid" name="hallid">
    <option value="1">Hall 1</option>
    <option value="2">Hall 2</option>
    <option value="3">Hall 3</option>
    <option value="4">Hall 4</option>
    <option value="5">Hall 5</option>
  </select>
  <br><br>
  
  <label for="event_name">Event Name:</label><br>
  <input type="text" id="event_name" name="event_name"><br>
  <br>
  <input type="submit" value="Submit">

</form> 

</div>

<div class="reserve1">
    <h2><b>Event Details</b></h2>
<br>

    <form action="con_reserve1.php" method="post">

    <label for="user_name1">Username:</label><br>
  <input type="text" id="user_name1" name="user_name1"><br>
  <br>

  <label for="hallid1">Hall ID:</label><br>
  <select id="hallid1" name="hallid1">
    <option value="1">Hall 1</option>
    <option value="2">Hall 2</option>
    <option value="3">Hall 3</option>
    <option value="4">Hall 4</option>
    <option value="5">Hall 5</option>
  </select>
  <br><br>

  <label for="full_name">Full name:</label><br>
  <input type="text" id="full_name" name="full_name"><br>
  <br>
  <label for="Age">Age:</label><br>
  <input type="text" id="Age" name="Age"><br>
        <br>
      
  <label for="date">Date:</label><br>
  <input type="date" id="date" name="date" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}"><br>
  <br>

  <label for="start_time">Start Time:</label><br>
  <input type="time" id="start_time" name="start_time"><br>
    <br>
  <label for="end_time">End Time:</label><br>
  <input type="time" id="end_time" name="end_time"><br>
  <br>

  <input type="submit" value="Submit">

    </form>
</div>
</div>
<a href="new.php" class="button"  >back</a><br>

</body>
<style>  		.button {
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
}</style>
</html>
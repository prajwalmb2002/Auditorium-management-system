
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="box-form">
	<div class="left">
		<div class="overlay">
		<h1>Hello User.</h1>
		<p>Wlecome to our auditorium managemnt system .please feel free to give any feedback </p>
		
		</div>
	</div>
	
	
		<div class="right">
    <form action="logs.php" method="post">
		<h5>Login</h5>
		<p>Don't have an account? <a href="new_reg.php">Create Your Account</a> it takes less than a minute</p>
		<div class="inputs">
			<input type="text" placeholder="user name" name="username" required>
			<br>
			<input type="password" placeholder="password" name="password" required>
		</div>
			
			<br><br>
			
		<div class="remember-me--forget-password">
				<!-- Angular -->
		<div>   
    			<label for="ch">Remember me</label>
		</div>	
		<p><a href="">forgot password?</a> </p>
		</div>
			
			<br>
			<button>Login</button>
	</div>
	</form>
</div>
<!-- partial -->
  
</div>


</body>
</html>
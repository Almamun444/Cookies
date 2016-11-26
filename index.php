<?php 

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		setcookie('fontsize', (int) $_POST['font-size'], time() +60 * 60);
	}

	if (isset($_POST['font-size'])) {
		$fontSize = $_POST['font-size'];
	} else if (isset($_COOKIE['fontsize'])) {
		$fontSize = $_COOKIE['fontsize'];
	} else{
		$fontsize = 16;
	}
	
 ?>


<!doctype html>
 <html>
 	<head>
 	 	<title>Cookies</title>

 	 	<style>
 	 		body{font-size: 
 	 			<?php echo $fontSize . 'px';?>;
 	 		}
 	 		li{list-style: none; margin:20px 0;}
 	 	</style>

 	</head>

 	
	<header>

	</header>

 		<body>
 			<form action="" method="post">
 				<li>
 					<label for="font-size"> Your preferded font size</label><br>
 					<select name="font-size" id="font-size">
 						<option value="10">10</option>
 						<option value="20">20</option>
 						<option value="30">30</option>
 					</select>
 				</li>

 				<li>
 					<input type="submit" name="submit" value="Submit">
 				</li>
 			</form>

			<h1>This is for testing</h1>
			<p>This is first testing paragraph</p>
 		</body>
 </html>
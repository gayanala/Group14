<html>
	<head>
		<title>Registration</title>
	</head>

	<body>
		<?php
			$conn = new mysqli("sql9.freesqldatabase.com", "sql9159534", "BNTn9f31zL", "sql9159534");

			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
			
			$username = $_POST["inputEmail"];
			$username     = mysql_real_escape_string($username);
			$password = $_POST["inputPassword"];
			$password     = mysql_real_escape_string($password);
			
			$sql_query = "insert into ApplicantData(AppUsername, AppPasswrd, AppLoginStat) values ('$username','$password','1')";
			$db_output = $conn->query($sql_query);
		?>
	</body>
</html>
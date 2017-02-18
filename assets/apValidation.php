<html>
	<head>
		<title>Login Validation</title>
	</head>

	<body>
		<?php
			$conn = new mysqli("sql9.freesqldatabase.com", "sql9159534", "BNTn9f31zL", "sql9159534");

			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
			
			$username = $_POST["inputEmail"];
			$username = mysql_real_escape_string($username);
			$password = $_POST["inputPassword"];
			
			$sql_query = "select AppUsername, AppPasswrd from ApplicantData";
			$db_output = $conn->query($sql_query);
			
			if($db_output->num_rows > 0)	{
				$match = false;
				while($row = $db_output->fetch_assoc()) {
					echo $username ." 1".$row["AppUsername"];
					if($username == $row["AppUsername"] && $password == $row["AppPasswrd"])	{
						$sql_query = "UPDATE ApplicantData SET AppLoginStat='1' WHERE AppUsername=$username";
						$conn->query($sql_query);
						$match = true;
						header("Location: app_profile_page.php");
					}
				}
				if(!$match)	{
					header("Location: sign_in_student.html");
				}
			}
			else{
				header("Location: sign_in_student.html");
			}
		?>
	</body>
</html>
	

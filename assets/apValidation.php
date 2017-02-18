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
			$password = $_POST["inputPassword"];
			
			$sql_query = "select AppUsername, AppPasswrd from ApplicantData";
			$db_output = $conn->query($sql_query);
			
			if($db_output->num_rows > 0)	{
				while($row = $db_output->fetch_assoc()) {
					if($username == $row["AppUsername"] && $password == $row["AppPasswrd"])	{
						header("Location: profile_page_student.html");
						exit;
					}
				}
				header("Location: sign_in_student.html");
			}
			else{
				header("Location: sign_in_student.html");
			}
		?>
	</body>
</html>
	

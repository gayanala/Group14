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
			
			$sql_query = "select EmpUsername, EmpPasswrd from EmployerData";
			$db_output = $conn->query($sql_query);
			
			if($db_output->num_rows > 0)	{
				while($row = $db_output->fetch_assoc()) {
					if($username == $row["EmpUsername"] && $password == $row["EmpPasswrd"])	{
						$sql_query = "UPDATE EmployerData SET EmpLoginStat='1' WHERE EmpUsername=$username";
						$conn->query($sql_query);
						header("Location: profile_page_employer.html");
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
	

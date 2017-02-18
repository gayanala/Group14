<html>
	<head>
		<title>Profile</title>
	</head>
	<body>
      <?php
        if(isset($_POST["link"])) {
			$conn = new mysqli("sql9.freesqldatabase.com", "sql9159534", "BNTn9f31zL", "sql9159534");

			if ($conn->connect_error) {
				die("Connection failed: " . $conn->connect_error);
			}
            $link = $_POST["link"];
			$link = mysql_real_escape_string($link);
			
			$sql_query = "UPDATE ApplicantData SET AppLink = $link WHERE AppLoginStat=1";
			$conn->query($sql_query);
            
        }else {
            ?>
			<form method = "post" action = "<?php $_PHP_SELF ?>">
				Video URL:	<input type='text' name='link'><br>
				<input type='submit'>
            </form>
            <?php
		}
        if(isset($_POST["tag"])) {
            $tag = $_POST["tag"];
			$link = mysql_real_escape_string($tag);
			
			$sql_query = "UPDATE ApplicantData SET AppTag = $tag WHERE AppLoginStat=1";
			$conn->query($sql_query);
            
        }else {
            ?>
			<form method = "post" action = "<?php $_PHP_SELF ?>">
				Profession Tag:	<input type='text' name='tag'><br>
				<input type='submit'>
            </form>
            <?php
		}
		?>
	</body>
</html>
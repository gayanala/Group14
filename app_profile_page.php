<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard Template for Bootstrap</title>

    <link href="assets/css/dashboard.css" rel="stylesheet">

    <link href="assets/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="assets/css/justified-nav.css" rel="stylesheet">
    <link href="assets/css/bootstrap.css" rel="stylesheet">

  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Reports</a></li>
            <li><a href="#">Analytics</a></li>
            <li><a href="#">Export</a></li>
          </ul>
          <ul class="nav nav-sidebar">
            <li><a href="">Nav item</a></li>
            <li><a href="">Nav item again</a></li>
            <li><a href="">One more nav</a></li>
            <li><a href="">Another nav item</a></li>
            <li><a href="">More navigation</a></li>
            </ul>
        </div>
          <div class="col-xs-6 col-sm-3 placeholder">
			<?php>
				$conn = new mysqli("sql9.freesqldatabase.com", "sql9159534", "BNTn9f31zL", "sql9159534");

				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				}
				
				$sql_query = "select AppPic from ApplicantData";
				$db_output = $conn->query($sql_query);
				
				if($db_output->num_rows > 0)	{
					while($row = $db_output->fetch_assoc()) {
						if($row["AppLoginStat"] == '1')	{
							$picURL = $row["AppPic"]
						}
					}
				}else {
					$picURL = "data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw=="
				}
			?>
              <img src= <?php> $picURL ?> width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <h4>Label</h4>
              <span class="text-muted">Something else</span>
			  <div class="col-xs-6">
			<?php
				if(isset($_POST["link"])) {
				$conn = new mysqli("sql9.freesqldatabase.com", "sql9159534", "BNTn9f31zL", "sql9159534");

				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				}
				$link = $_POST["link"];
				$link = mysql_real_escape_string($link);
				
				$sql_query = "UPDATE ApployerData SET AppLink = $link WHERE AppLoginStat=1";
				$conn->query($sql_query);
				
			}else {?>
			<form class="form-signin">
				<h2 class="form-signin-heading"></h2>
				<label for="Video_URL" class="sr-only">Video URL</label>
				<input type="email" name="link" class="form-control" placeholder="Video URL" required autofocus>
			</form>
			<?php>
			if(isset($_POST["tag"])) {
				$tag = $_POST["tag"];
				$tag = mysql_real_escape_string($tag);
				
				$sql_query = "UPDATE ApplicantData SET AppTag = $tag WHERE AppLoginStat=1";
				$conn->query($sql_query);
				
			}else {
            ?>
			<form class="form-signin">
				<h2 class="form-signin-heading"></h2>
				<label for="Tag" class="sr-only">Profession Tag</label>
				<input type="text" name="tag" class="form-control" placeholder="Profession Tag" required>
            </form>
			<?php>
			if(isset($_POST["pic"])) {
				$pic = $_POST["pic"];
				$pic = mysql_real_escape_string($pic);
				
				$sql_query = "UPDATE ApplicantData SET AppPic = $pic WHERE AppLoginStat=1";
				$conn->query($sql_query);
				
			}else {?>
			<form class="form-signin">
				<h2 class="form-signin-heading"></h2>
				<label for="Profile_picture" class="sr-only">Profile Picture</label>
				<input type="text" name="pic" class="form-control" placeholder="Profile Picture URL" required>
            </form>
			</div>
            </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
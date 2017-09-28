<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>Details of the entered URL</title>
  </head>
  <body>
    <div class="container-fluid">
      <div class="jumbotron">
        <div class="wel">
          <h1>
            <?php
				if (isset($_POST["url"]) && !empty($_POST["url"])) {
					//get website url
					$url = $_POST["url"];
					//validate url 
					if(filter_var($url, FILTER_VALIDATE_URL) == true){
					$url = $_POST["url"];
					echo "<h3>All Information Regarding To : $url</h3>";
			?>
          </h1> 
        </div>
        <hr>
        <div class="row">
          <?php include("title.php"); ?>
        </div>
        <div class="row">
          <?php include("ipaddress.php"); ?>
        </div>
        <div class="row">
          <?php include("httpstatus.php"); ?>
        </div>
        <div class="row">
          <?php include("loadtime.php"); ?>
        </div>
        <div class="row">
			<?php include("links.php");
					}else{
            echo"<h3>Url Not Valid : $url</h3>";
          }
				}
			?> 
        </div> 
      </div>
    </div>
  </body>
</html>
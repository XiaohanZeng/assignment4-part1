<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
?>
<!DOCTYPE html>
<html>
  <head><title></title></head>
  <body>
    <?php
	if($_SERVER["REQUEST_METHOD"] == "GET")
	{
		echo '{"Type" : "[GET]", "parameters":';
	}
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		echo '{"Type" : "[POST]", "parameters":';	
	}
	if(empty($_REQUEST))
	{
		echo 'null';
	}
	else
	{
		echo json_encode($_REQUEST, JSON_FORCE_OBJECT);
	}
	#no value only print "";
	echo "}";
	?>
	</body>
	</html>
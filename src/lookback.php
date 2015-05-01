<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
?>
<!DOCTYPE html>
<html>
  <head><title></title></head>
  <body>
    <?php
	$data = array();
	/*if(isset($_GET['key'], $_GET['value'])// unknown number of key/value pair
	{
		$data[$GET['key']] = $_GET['value'];
	}
	if(!isset($_GET['value']))
	{
		// undefiend?
	}
	if(isset($_GET['key'], $_GET['value'])
	{
		$data['parameters']] = 'null';
	}
	*/
	echo "{"Type" : "[GET|POST]", ";
	echo json_encode($_GET, JSON_FORCE_OBJECT);
	echo "}";
	?>
	</body>
	</html>
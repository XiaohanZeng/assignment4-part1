<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
session_start();
?>
<!DOCTYPE html>
<html>
  <head><title>Login Result</title></head>
  <body>
	<?php
		if (isset($_SESSION['username']))
		{
			echo "Hello ".$newName. " you have visited this page ".$_SESSION['count']. " times".".<br/>";
			echo "Click here to logout ";
			echo '<a href="login.php?logout=sb">here</a>.';
			$_SESSION['count'] = $_SESSION['count']+1;	
		}
		else
		{
			echo "A username must be entered. Click here to return to the login screen ";
			echo "<a href=\"login.php\">here</a>";
		}
		echo "<a href=\"content1.php\">content1</a>";  
     ?>
  </body>
</html>

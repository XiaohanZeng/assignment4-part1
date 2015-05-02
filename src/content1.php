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
	#User not logged in yet
    #User already logged in
    #New user trying to login while old is still logged in
    #$_SESSION['username'] = $_REQUEST['username']
    if(isset($_REQUEST['username'])) 
	{
		$newName = $_REQUEST['username'];
		if(isset($_SESSION[$newName])) 
		{
			$_SESSION[$newName]=$_SESSION[$newName]+1;	
		 } 
		else 
		{
			$_SESSION[$newName] = 0;
			
      }
		echo "Hello ".$newName. "you have visited this page ".$_SESSION[$newName]. ".<br/>";
		$_SESSION[$newName]=$_SESSION[$newName]+1;
		echo "Click here to logout";
		echo '<a href="login.php?logout=sb">here</a>.';
    }
	else 
	{
		echo "A username must be entered. Click here to return to the login screen ";
		echo "<a href=\"login.php\">here</a>";
     
    }
    ?>
  </body>
</html>

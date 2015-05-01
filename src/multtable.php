<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
?>
<!DOCTYPE html>
<html>
  <head><title></title></head>
  <body>
    <?php
	# not set
	if(!isset($_GET['min-multiplicand'], $_GET['max-multiplicand'], $_GET['min-multiplier'], $_GET['max-multiplier']))
	{
		if(!isset($_GET['min-multiplicand']))
		{
			echo "Missing parameter min-multiplicand ";
		}
		if(!isset($_GET['max-multiplicand']))
		{
			echo "Missing parameter max-multiplicand ";
		}
		if(!isset($_GET['min-multiplier']))
		{
			echo "Missing parameter min-multiplier ";
		}
			if(!isset($_GET['max-multiplier']))
		{
			echo "Missing parameter max-multiplier ";
		}
	}
	#biger
	else if($_GET['min-multiplicand'] > $_GET['min-multiplicand'] || $_GET['min-multiplier'] > $_GET['max-multiplier'])
	{
		echo "Minimum [multiplicand|multiplier] larger than maximum.";

	}
	#if it is not a int
	else if(!ctype_digit($_GET['min-multiplicand'])|| !ctype_digit($_GET['max-multiplicand'])||!ctype_digit( $_GET['min-multiplier'])||!ctype_digit( $_GET['max-multiplier'])) 
	{
		if(!ctype_digit($_GET['min-multiplicand']))
		{
			echo "min-multiplicand must be an integer ";
		}
		if(!ctype_digit($_GET['max-multiplicand']))
		{
			echo "max-multiplicand must be an integer";
		}
		if(!ctype_digit($_GET['min-multiplier']))
		{
			echo "min-multiplier must be an integer ";
		}
		if(!ctype_digit($_GET['max-multiplier']))
		{
			echo "max-multiplier must be an integer ";
		}
	}

	# all meet creat table
	else
	{
		#wild 
		$maxCol = intval($_GET['max-multiplier']) - intval($_GET['min-multiplier']) + 2;
		#tall 
		$maxRow = intval($_GET['max-multiplicand']) - intval($_GET['min-multiplicand']) + 2;
		$wild = 1;
		$tall = 1;
		$startWild = intval($_GET['min-multiplier']);
		$startTall = intval($_GET['min-multiplicand']);
		echo "<table>";
			while($tall <= $maxRow)
			{
				if($tall == 1)
				{
					echo "<tr>";
					echo "<th>";
					echo "</th>";
					$wild = $wild +1;
					while($wild <= $maxCol)
					{
						echo "<th>";
						echo $startWild;
						echo "</th>";
						$startWild++;
						$wild ++;
					}
				}
				
				else
				{
					while($tall <=$maxRow)
					{
						echo"<tr>";
						echo"<th>";
						echo $startTall;
						echo"</th>";
						while($wild <= $maxCol)
						{
							echo "<th>";
							echo $startWild * $startTall;
							echo "</th>";
							$startWild++;
							$wild ++;
							
						}
						$startTall++;
					}				
				}
				$tall++;
			}
		echo "</table>";
	}
	?>
	</body>
</html>
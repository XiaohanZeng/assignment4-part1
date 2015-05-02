<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');
?>
<!DOCTYPE html>
<html>
  <head><title></title></head>
  <body>
    <?php
	$exist_error = false;
	# not set or any of parameter is not int
	if(!isset($_GET['min-multiplicand']) || !isset($_GET['max-multiplicand']) || !isset($_GET['min-multiplier']) !isset($_GET['max-multiplier']) || 
	(!ctype_digit($_GET['min-multiplicand'])|| !ctype_digit($_GET['max-multiplicand'])||!ctype_digit( $_GET['min-multiplier'])||!ctype_digit( $_GET['max-multiplier'])))
	{
		if(!isset($_GET['min-multiplicand']))
		{
			echo "Missing parameter min-multiplicand.<br> ";
		}
		elseif(!ctype_digit($_GET['min-multiplicand']))
		{
			echo "min-multiplicand must be an integer <br>";
		}
		
		if(!isset($_GET['max-multiplicand']))
		{
			echo "Missing parameter max-multiplicand.<br> ";
		}
		elseif(!ctype_digit($_GET['max-multiplicand']))
		{
			echo "max-multiplicand must be an integer<br>";
		}
		
		if(!isset($_GET['min-multiplier']))
		{
			echo "Missing parameter min-multiplier. <br>";
		}
		elseif(!ctype_digit($_GET['min-multiplier']))
		{
			echo "min-multiplier must be an integer<br> ";
		}
		
		if(!isset($_GET['max-multiplier']))
		{
			echo "Missing parameter max-multiplier. <br>";
		}
		elseif(!ctype_digit($_GET['max-multiplier']))
		{
			echo "max-multiplier must be an integer <br>";
		}
		$exist_error = true;
	}
	#biger
	if(
	(isset($_GET['min-multiplicand']) && isset($_GET['max-multiplicand']) && ctype_digit($_GET['min-multiplicand']) && ctype_digit($_GET['max-multiplicand']) && intval($_GET['min-multiplicand']) > intval($_GET['max-multiplicand'])) || 
	(isset($_GET['min-multiplier']) && isset($_GET['max-multiplier']) && ctype_digit( $_GET['min-multiplier']) && ctype_digit( $_GET['max-multiplier']) && intval($_GET['min-multiplier']) > intval($_GET['max-multiplier'])))
	{
		if(intval($_GET['min-multiplicand']) > intval($_GET['max-multiplicand']))
		{
			echo "Minimum multiplicand larger than maximum. <br>";
		}
		if(intval($_GET['min-multiplier']) > intval($_GET['max-multiplier']))
		{
			echo "Minimum multiplier larger than maximum.<br>";
		}
		$exist_error = true;
	}
	# all meet creat table
	if (!$exist_error)
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
					echo "</tr>";
				}
				
				else
				{
					
						$wild = 2;
						$startWild = intval($_GET['min-multiplier']);
						echo"<tr>";
						echo"<th>";
						echo $startTall;
						echo"</th>";
						while($wild <= $maxCol)
						{
							echo "<td>";
							echo $startWild * $startTall;
							echo "</td>";
							$startWild++;
							$wild ++;
							
						}
						$startTall++;
						echo "</tr>";
								
				}
				$tall++;
			}
		echo "</table>";
	}
	?>
	</body>
</html>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Bubble Sort Algorithm in PHP</title>
	</head>
	<body>
		<?php
			
			// Array of numbers to be sorted
			$numbers = [
				3,
				8,
				2,
				7,
				1,
				12,
				80,
				-3];
			
			// Sorts array of numbers from smallest to largest
			function bubble_sort($array)
			{
				for($i = 0; $i < (count($array) - 1); $i++)
				{
					foreach($array as $key => $value)
					{
						if(isset($array[$key + 1]) && $value > $array[$key + 1])
						{
							$temp_var = $array[$key];
							$array[$key] = $array[$key + 1];
							$array[$key + 1] = $temp_var;
						}
					}
				}
				return $array;
			}
			
			// Sort $numbers array
			$numbers = bubble_sort($numbers);
			
			// Output sorted array
			foreach($numbers as $value)
			{
				echo "$value<br />";
			}
		?>
	</body>
</html>
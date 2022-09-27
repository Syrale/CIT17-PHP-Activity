<!DOCTYPE html>
<html>
<head>
		<meta charset="utf -8"
		meta name="viewport" content="
		width=device width, initial - scale=1"/>
		<title>Today's Month's Weather</title>
		
</head>
	
<body>

	<h2><center>Today's Month's Weather</center></h2>

	<?php
    	#Array variable of weather conditions

    	$weather_conditions_array=array ("rain", "sunshine", "clouds", "hail", "sleet", "snow", "wind");

    	echo "We've seen all kinds of weather this month. At the beginning of the month, <br /> we had $weather_conditions_array[5] and 
    		$weather_conditions_array[6]. Then came $weather_conditions_array[1] with a few $weather_conditions_array[2] and some $weather_conditions_array[0]. <br /> At least we didn't get any $weather_conditions_array[3] or $weather_conditions_array[4]."
    	
	?>
		

	
</body>

</html>
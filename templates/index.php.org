<!DOCTYPE html>
<html>
<body>
<?php

// Just grab whatever data was stored in the template

echo "<h1>Modified by: " .  $this->name . "</H1>";



$current_data = $this->my_data;


foreach ($current_data as $row ) 
	{
		
	$current_row = $row;	
		
	
	echo "<P>" . $current_row[0];
	echo " - " . $current_row[1];
	echo "......... " . $current_row[2];
	
	
	
	
	}


?>
</body>
</html>

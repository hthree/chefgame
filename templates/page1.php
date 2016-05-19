<!DOCTYPE html>
<html>
<body>
<?php

// The fetch() function is called until there are no more rows
while ( $row = $this->query_results->fetch() ) 
	{
	//print_r( $row );
	echo "<P>" . $row[0];
	echo " - " . $row[1];
	echo "......... " . $row[2];
	}

?>
</body>
</html>

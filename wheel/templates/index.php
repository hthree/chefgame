<!DOCTYPE html>
<html>
<body>
<div style ="width:100%;height:100%">
<div style="width:500px;height:400px;align:center;">
<?php

// Just grab whatever data was stored in the template
echo "<div style=\"width:250px;height:400px;overflow:auto;float:left;\">";
foreach($rec as $step){

}
echo "</div><div style=\"width:100px;height:400px;float:left;\">";
echo "<div style=\"width:250px;height:300px;overflow:auto;float:left;\" id=\"jac\">";
echo "</div><div style=\"width:250px;height:100px;float:left;\">";
echo "<div style=\"width:250px;height:100px;float:left;\" id=\"mic\" onclick = \"clickIng()\">add ingredient</div>";
echo "</div></div>";
	
echo "<script>\n"; 
//echo"document.getElementById(\"ing\").onclick = function() {clickIng()};document.getElementById(\"met\").onclick = function() {clickMet()};";
//echo "function clickIng(){var menu = document.getElementById(\"mic\"); menu.removeAttribute(\"onclick\"); var input = document.createElement(\"select\");"
//echo "var opt$step = document.createElement(\"option\"); opt$step.setAttrute(\"value\",\"$step\"); var wr$step = document.createTextNode(\"$step\"); opt$step.appendChild(\"wr$step\") select.appendChild(\"op$step\");";


echo "</script>";
	
	
	


?>
</div></div> 
</body>
</html>

<!DOCTYPE html>
<html>
<body>
<div style ="width:100%;height:100%">
<div style="width:750px;height:400px;align:center;">
<?php

// Just grab whatever data was stored in the template
$rec = $this->recipe;
$ing = $this->ingredients;
$met = $this->methods;
$js = $this->java;
echo "<div style=\"width:250px;height:400px;overflow:auto;float:left;\">";
foreach($rec as $step){
	echo "<div style=\"float:left;width:230px;height:100px\">$step</div>";
}
echo "</div><div style=\"width:250px;height:400px;float:left;\">";
echo "<div style=\"width:250px;height:300px;overflow:auto;float:left;\" id=\"jac\">";
echo "</div><div style=\"width:250px;height:100px;float:left;\">";
echo "<div style=\"width:250px;height:100px;float:left;\" id=\"mic\" onclick = \"clickMet()\">add Step</div>";
//6zjv193

echo "<div style=\"width:250px;height:300px;overflow:auto;float:left;\" id=\"tic\">";
echo "</div><div style=\"width:250px;height:100px;float:left;\">";
echo "<div style=\"width:250px;height:100px;float:left;\" id=\"mic\" onclick = \"clickIng()\">add ingredient</div>";
echo "</div></div>";
	
echo "<script>\n"; 
//echo"document.getElementById(\"ing\").onclick = function() {clickIng()};document.getElementById(\"met\").onclick = function() {clickMet()};";
echo "function clickMet(){var menu = document.getElementById(\"mic\"); menu.removeAttribute(\"onclick\"); var select = document.createElement(\"select\");"

foreach($met as $step){
    echo "var opt$step = document.createElement(\"option\"); opt$step.setAttribute(\"value\",\"$step\"); var wr$step = document.createTextNode(\"$step\"); opt$step.appendChild(wr$step); select.appendChild(op$step);";
 }

echo "input = document.createElement(\"input\"); input.setAttribute(\"type\",\"submit\"); input.setAttribrute(\"onclick\",\"sub()\"); menu.appendChild(select); menu.appendChild(input);};";

echo "</script>";
	
	
	


?>
</div></div> 
</body>
</html>

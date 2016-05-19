<!DOCTYPE html>
<html>
<body>
<div style ="width:100%;height:100%">
<div style="width:500px;height:400px;align:center;">
<?php

// Just grab whatever data was stored in the template
$rec = $this->recipe;
$ing = $this->ingredients;
$met = $this->methods;
echo "<div style=\"width:250px;height:400px;overflow:auto;float:left;\">";
foreach($rec as $step){
	echo "<div style=\"float:left;width:230px;height:100px\">$step</div>";
}
echo "</div><div style=\"width:250px;height:400px;float:left;\">";
echo "<div style=\"width:250px;height:300px;overflow:auto;float:left;\" id=\"jac\">";
echo "</div><div style=\"width:250px;height:100px;float:left;\">";
echo "<div style=\"width:125px;height:100px;float:left;\" onclick = \"clickIng()\">add ingredient</div>";
echo "<div style=\"width:125px;height:100px;float:left;\" onclick = \"clickMet()\">add step</div>";
echo "</div></div>";
	
echo "<script>\n"; 
//echo"document.getElementById(\"ing\").onclick = function() {clickIng()};document.getElementById(\"met\").onclick = function() {clickMet()};";
echo "function clickIng() {var div = document.getElementById(\"jac\"); var hid = document.createElement(\"div\"); hid.setAttribute(\"style\",\"float:left;width:230px;height:100px\"); var form = document.createElement(\"form\"); form.setAttribute(\"method\",\"post\"); form.setAttribute(\"action\",\"http://jheino.rop.launchbrigade.com/infotech/\"); var select = document.createElement(\"select\"); select.setAttribute(\"name\",\"Ing\");";
foreach($ing as $gred){
    echo "\nvar opt$gred = document.createElement(\"option\"); opt$gred.setAttribute(\"value\",\"$gred\"); var wr$gred = document.createTextNode(\"$gred\"); opt$gred.appendChild(wr$gred); select.appendChild(opt$gred);";
}
echo "\nvar grams = document.createElement(\"input\"); grams.setAttribute(\"name\",\"mass\"); grams.setAttribute(\"style\",\"width:200px\"); var sub = document.createElement(\"input\"); sub.setAttribute(\"type\",\"submit\"); sub.setAttribute(\"value\",\"add\"); form.appendChild(select); form.appendChild(grams); form.appendChild(sub); hid.appendChild(form); div.appendChild(hid);};";

echo "function clickMet() {var div = document.getElementById(\"jac\"); var hid = document.createElement(\"div\"); hid.setAttribute(\"style\",\"float:left;width:230px;height:100px\"); var form = document.createElement(\"form\"); form.setAttribute(\"method\",\"post\"); form.setAttribute(\"action\",\"http://jheino.rop.launchbrigade.com/infotech/\"); var select = document.createElement(\"select\"); select.setAttribute(\"name\",\"Ing\");";
foreach($met as $gred){
    echo "\nvar opt$gred = document.createElement(\"option\"); opt$gred.setAttribute(\"value\",\"$gred\"); var wr$gred = document.createTextNode(\"$gred\"); opt$gred.appendChild(wr$gred); select.appendChild(opt$gred);";
}
echo "\nvar sub = document.createElement(\"input\"); sub.setAttribute(\"type\",\"submit\"); sub.setAttribute(\"value\",\"add\"); form.appendChild(select); form.appendChild(sub); hid.appendChild(form); div.appendChild(hid);};";

echo "</script>";
	
	
	


?>
</div></div> 
</body>
</html>

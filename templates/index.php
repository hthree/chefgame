<!DOCTYPE html>
<html>
<body>
<div style ="width:100%;height:100%">
<div style="width:750px;height:400px;align:center;">
    <style>
        .ingdiv{
            float:left;width:230px;height:100px
        }
    </style>
<?php

// Just grab whatever data was stored in the template
$rec = $this->recipe;
$ing = $this->ingredients;
$met = $this->methods;
$js = $this->Java;
echo "<div style=\"width:250px;height:400px;overflow:auto;float:left;\">";
foreach($rec as $step){
	echo "<div style=\"float:left;width:230px;height:100px\">$step</div>";
}
echo "</div><div style=\"width:250px;height:400px;float:left;\">";
echo "<div style=\"width:250px;height:300px;overflow:auto;float:left;\" id=\"jac\">";
echo "</div><div style=\"width:250px;height:100px;float:left;\">";
echo "<div style=\"width:250px;height:100px;float:left;\" id=\"mic\" onclick = \"clickMet()\">add Step</div>";
//6zjv193

echo "</div></div><div style=\"width:250px;height:300px;overflow:auto;float:left;\" id=\"tic\">";
echo "</div><div style=\"width:250px;height:100px;float:left;\">";
echo "<div style=\"width:250px;height:100px;float:left;\" id=\"mic\" onclick = \"clickIng()\">add ingredient</div>";
	
echo "<script>\n"; 
    echo "var js = array(); var ingnum = 0; ingar = array(); function adding(ing){ingar[ingnum] = ing; ingdiv(ingnum); ingnum = ingnum + 1;}; function run(h){ switch(h) {"; 
//echo"document.getElementById(\"ing\").onclick = function() {clickIng()};document.getElementById(\"met\").onclick = function() {clickMet()};";
echo "function ingdiv(hhh){var hing = createTextNode(hhh); jsobj.appendChild(hing);};";
$x = 0;
foreach($js as $key => $script){
    echo "case $key: $script break;";
    $x = $x + 1;
}
echo "} };var stepnum = 0;";
$x = 0;
foreach($js as $key => $script){
echo "js[$x] = $key;"; 
 $x = $x + 1;
}
echo "\nfunction clickMet(){var menu = document.getElementById(\"mic\"); menu.removeAttribute(\"onclick\"); menu.removeChild(menu.firstChild); var select = document.createElement(\"select\");";

foreach($met as $step){
    echo "\nvar opt$step = document.createElement(\"option\"); \nopt$step.setAttribute(\"value\",\"$step\"); \nvar wr$step = document.createTextNode(\"$step\"); \nopt$step.appendChild(wr$step); \nselect.appendChild(opt$step);";
 }

echo "\ninput = document.createElement(\"input\"); input.setAttribute(\"type\",\"submit\"); input.setAttribute(\"onclick\",\"sub(select.value)\"); input.setAttribute(\"value\",\"add\");  menu.appendChild(input); menu.appendChild(select);};";
echo "\n function sub(thing){var jsobj = document.createElement(\"div\"); dig.setAttribute(\"class\",\"ingdiv\"); run(thing); document.getElementById(\"tic\").appendChild(dig);};";

echo "\nfunction clickIng(){var menu = document.getElementById(\"tic\"); menu.removeAttribute(\"onclick\"); menu.removeChild(menu.firstChild); var select = document.createElement(\"select\");";

foreach($ing as $step){
    echo "\nvar opt$step = document.createElement(\"option\"); \nopt$step.setAttribute(\"value\",\"$step\"); \nvar wr$step = document.createTextNode(\"$step\"); \nopt$step.appendChild(wr$step); \nselect.appendChild(opt$step);";
 }

echo "\ninput = document.createElement(\"input\"); input.setAttribute(\"type\",\"submit\"); input.setAttribute(\"onclick\",\"sub(select.value)\"); input.setAttribute(\"value\",\"add\");  menu.appendChild(input); menu.appendChild(select);};";
echo "\n function sub(thing){var jsobj = document.createElement(\"div\"); dig.setAttribute(\"class\",\"ingdiv\"); adding(thing); document.getElementById(\"tic\").appendChild(dig);};";


echo "</script>";
	
	
	


?>
</div></div> 
</body>
</html>

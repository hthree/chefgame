<?php

include_once('View.php');
include_once('DB.php');

$template = new View();
$bad = new DB();

//removed most of the point of this for testing purposes

$template->recipe = $bad->recipe;
$template->ingredients = $bad->ingredients;
$template->methods = $bad->methods;


// This file can be found in the templates directory.
$template->render( 'index.php' );


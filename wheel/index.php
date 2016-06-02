<?php

include_once('View.php');
include_once('DB.php');

$template = new View();
$database = new DB();

$query_results = $database->query( 'select * from user' );

$the_data= $query_results->fetchAll();
// we grab all the sql results and throw it into $the_data



// Now lets store it in the template
$template->my_data=$the_data;

//We can create other variables too and put them in the template.
$template->name="Fidel Mejia";







// This file can be found in the templates directory.
$template->render( 'index.php' );

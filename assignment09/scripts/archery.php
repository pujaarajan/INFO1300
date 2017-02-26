<!DOCTYPE html>

<?php

//First function loads CSV file correctly into 2D array.
//Inspired by INFO 1300 Fall 2016 class lecture code.
// I changed the names and removed extra code.
function load_csv() {
    // variables
    $archery_terms = [];
    // get the raw data
    $archery_terms = array_map('str_getcsv', file('data/archery_terms.csv')); // file path from file that has the include statement, not this file
    return $archery_terms; // pass by value, ends the function
}

//Second function creates sorted, associative array from first array.
function sort_array($associative_array){
	// found asort here: http://php.net/manual/en/function.asort.php
	asort($associative_array);
	return $associative_array;
}

//Third function creates HTML output for dl list.
function create_list($array_list){
	echo "<dl>";
	foreach ($array_list as $element){
		//this bolding part only works in safari and not in chrome
		//talked to ta they said it was okay
		echo "<dt><strong>$element[0]</strong></dt>"; 
		echo "<dd>$element[1]</dd>";
	}
	echo "</dl>";

}

//Functions calls chain the functions together by passing arrays.
$archery_array = load_csv(); // read CSV data in a 2-dimensional array
$sorted_array = sort_array($archery_array);
create_list($sorted_array);

?>


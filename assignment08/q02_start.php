<?php
/*
* INFO/CS 1300
* Fall 2016
*
* Assignment 8, question 2
*
*/

// variables
$i; // counter variable
$j; // counter variable
$k; // counter variable
$temp_num; // holder for random value
$number_array = []; // array of random integers 1-5
$high_array = []; // integers from $number_array greater than 3

/* Function takes in an empty array and makes an array with 10 random numbers */
function make_randoms() {
	global $number_array;
	for ($i=0;$i<10;$i++)
    	$number_array[] = rand(1, 5);

    $len = count($number_array);
    for ($j=0;$j<$len;$j++)
    	echo $j.": ".$number_array[$j]."<br>";  
    }

function get_and_sort() {
	global $number_array;
	make_randoms();
	$len1 = count($number_array);
	for ($k=0;$k<$len1;$k++)
		if ($number_array[$k]>3)
			$high_array[]  = $number_array[$k];
    $len2 = count($high_array);
    echo "<br>";
    for ($l=0;$l<$len2;$l++)
    	echo $l.": ".$high_array[$l]."<br>";  
    }

    get_and_sort();




?>
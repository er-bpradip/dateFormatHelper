<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
	Codeigniter date format helper collected by pradip bhattarai.
	This takes the input in standard date time format (YY-mm-dd H:i:s) and converts to our required format
*/

//DATE FORMATS
//Converts date to "2015-03-25" format
if ( ! function_exists('iso_date_format')){
    function iso_date_format($datetime = NULL){
	return date_format(date_create($datetime), 'Y-m-d');
	}
}


//Converts date to "03/25/2015" format
if ( ! function_exists('short_date_format')){
    function short_date_format($datetime  = NULL){
	return date_format(date_create($datetime), 'Y/m/d');
	}
}


//Converts date to "Mar 25 2015" format
if ( ! function_exists('long_date_format')){
    function long_date_format($datetime = NULL){
	return date_format(date_create($datetime), 'F j, Y');
	}
}


//Converts date to "Wednesday March 25, 2015" format
if ( ! function_exists('full_date_format')){
    function full_date_format($datetime = NULL){
	return date_format(date_create($datetime), 'D M j, Y');
	}
}


//Converts date time to "2015/03/25  11:49 PM" format
if ( ! function_exists('short_date_time_format')){
    function short_date_time_format($datetime  = NULL){
	return date_format(date_create($datetime), 'Y/m/d H:i a');
	}
}

//Converts date time to "August 2, 2016 9:44 am" format
if ( ! function_exists('long_date_time_format')){
	function long_date_time_format($datetime = NULL){
		return date_format(date_create($datetime), 'F j, Y g:i a');
	}
}


//Converts time to "10:44 am" format
if ( ! function_exists('short_time_format')){
    	function short_time_format($datetime = NULL){
		return date_format(date_create($datetime), 'g:i a');
	}
}

//Converts time to "22:49:12" format
if ( ! function_exists('long_time_format')){
    function long_time_format($datetime = NULL){
		return date_format(date_create($datetime), 'H:i:s');
	}
}

//Converts time to "Wednesday March 25, 2014 11:49:12 PM" format
if ( ! function_exists('full_date_time_format')){
    function full_date_time_format($datetime = NULL){
	return date_format(date_create($datetime), 'D M j, Y H:i:s a');
	}
}


//Converts time to "10:15 AM February 02 2014" format
if ( ! function_exists('long_time_date_format')){
    function long_time_date_format($datetime = NULL){
	return date_format(date_create($datetime), 'g:i A F j Y ');
	}
}

//EOF

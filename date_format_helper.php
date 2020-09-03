<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


/*
	Codeigniter date format helper collected by pradip bhattarai
*/

//DATE FORMATS
//2015-03-25
if ( ! function_exists('iso_date_format'))
{
    function iso_date_format($datetime = NULL){
		return date_format(date_create($datetime), 'Y-m-d');
	}
}


//03/25/2015
if ( ! function_exists('short_date_format'))
{
    function short_date_format($datetime  = NULL){
		return date_format(date_create($datetime), 'Y/m/d');
	}
}


//Mar 25 2015
if ( ! function_exists('long_date_format'))
{
    function long_date_format($datetime = NULL){
		return date_format(date_create($datetime), 'F j, Y');
	}
}


//Wednesday March 25, 2015
if ( ! function_exists('full_date_format'))
{
    function full_date_format($datetime = NULL){
		return date_format(date_create($datetime), 'D M j, Y');
	}
}



//TIME FORMATS
//10:44 am
if ( ! function_exists('short_time_format'))
{
    function short_time_format($datetime = NULL){
		return date_format(date_create($datetime), 'g:i a');
	}
}

//22:49:12 PM
if ( ! function_exists('long_time_format'))
{
    function long_time_format($datetime = NULL){
		return date_format(date_create($datetime), 'H:i:s');
	}
}


//DATE TIME FORMATS
//03/25/2015
if ( ! function_exists('short_date_time_format'))
{
    function short_date_time_format($datetime  = NULL){
		return date_format(date_create($datetime), 'Y/m/d H:i a');
	}
}

//August 2, 2016 9:44 am
if ( ! function_exists('long_date_time_format'))
{
    function long_date_time_format($datetime = NULL){
		return date_format(date_create($datetime), 'F j, Y g:i a');
	}
}


if ( ! function_exists('full_date_time_format'))
{
    function full_date_time_format($datetime = NULL){
		return date_format(date_create($datetime), 'D M j, Y H:i:s a');
	}
}


//TIME DATE FORMAT
//10:15AM 02 FEB 2014
if ( ! function_exists('long_time_date_format'))
{
    function long_time_date_format($datetime = NULL){
		return date_format(date_create($datetime), 'g:i A F j Y ');
	}
}

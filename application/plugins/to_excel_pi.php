<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/*
* Excel library for Code Igniter applications
* Author: Derek Allard, Dark Horse Consulting, http://www.darkhorse.to, April 2006
*/

function to_excel($headerxz, $dataxz, $filename){

	$headers = ""; // just creating the var for field headers to append to below
	$data = ""; // just creating the var for field data to append to below

	foreach ($headerxz as $field){
		$headers .= $field;
	}
	foreach($dataxz as $value) {
		$data .= $value;

	}
	//header("Content-type: application/x-msdownload");
	header("Content-type: application/vnd.ms-excel");
	header("Content-Disposition: attachment; filename=$filename.csv");
	echo "$headers\n$data";
}

?>
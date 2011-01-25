<?php
/**
 * index.php: homework for Anm293 
 * 
 * comply code to Zend code formatting style/standards
 * 
 * LICENSE: as fit
 * 
 * @category Anm293
 * @package  
 * @copyright Copyright (c) 2011 me
 * @license ...
 * @version  0.001
 * @link git@github.com:dailyTangents/Project-01.git
 * @since File available since Release 0.0.0
 */ 

// Turn on output buffering
// While output buffering is active no output is sent from the script 
// (other than headers), instead the output is stored in an internal buffer.

ob_start();

// When a string is literal (contains no variable substitutions), 
// the apostrophe or "single quote" should always be used to demarcate the string:
echo 'My First Project with Output Buffering';

// Copy the contents of the internal buffer 
// into a string variable using ob_get_contents().
$v = ob_get_contents();

// clean (erase) the output buffer and turn off output buffering
ob_end_clean();

// echo the contents of the internal buffer
echo $v;

<?php
// echo date('d');
// echo date('m');
// echo date('Y');

// echo date('l Y-m-d h:i:s');

$timestamp = mktime(16, 3, 2, 5, 3, 1960);

// echo $timestamp;

// echo date('Y-m-d h:i a', $timestamp);

$timestamp2 = strtotime('tomorrow');
// echo $timestamp2;
echo date('Y-m-d h:i a', $timestamp2);

?>
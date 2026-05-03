<?php
//METRIC CONVERSIONS
$centimetre = 1;
$millimetre = $centimetre * 10;  // 1 cm = 10 mm

$decimetre = 1;
$centimetre_from_dm = $decimetre * 10;  // 1 dm = 10 cm

$metre = 1;
$centimetre_from_m = $metre * 100;  // 1 m = 100 cm

$kilometre = 1;
$metre_from_km = $kilometre * 1000;  // 1 km = 1000 m
//---------------------------------------------------------------------

// IMPERIAL CONVERSIONS
$foot_val = 1;
$inches_from_foot    = $foot_val * 12;

$yard_val = 1;
$feet_from_yard      = $yard_val * 3;

$chain_val   = 1;
$yards_from_chain    = $chain_val * 22;

$furlong_val = 1;
$yards_from_furlong  = $furlong_val * 220;

$mile_val    = 1;
$chains_from_furlong = $furlong_val * 10;


$yards_from_mile     = $mile_val * 1760;


$furlongs_from_mile  = $mile_val * 8;
?>
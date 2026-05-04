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


// -----------------------------------------------------------------------
$mm_val = 1;
$cm_val = 1;
$m_val  = 1;
$km_val = 1;


$inches_from_mm = $mm_val * 0.03937;
$inches_from_cm = $cm_val * 0.39370;
$inches_from_m  = $m_val  * 39.37008;
$feet_from_m    = $m_val  * 3.28084;
$yards_from_m   = $m_val  * 1.09361;
$yards_from_km  = $km_val * 1093.6133;
$miles_from_km  = $km_val * 0.62137;


//------------------------------------------------------------------------

$cm_from_1inch = 2.54;       
$cm_from_1foot = 30.48;      
$cm_from_1yard = 91.44;      
$m_from_1yard = 0.9144;      
$m_from_1mile = 1609.344;     
$km_from_1mile = 1.609344;    
?>

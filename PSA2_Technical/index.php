
<?php include'MyVariables.php'; ?>


<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name= "viewport" content="width=device-width, initial-scale=1.0">
    <title>PSA2 Technical</title>
    <link rel="stylesheet" href="style.css">
</head>

<hr>
<table class = "tableheader">
    <tr>
        <th>Name</th>
        <th>Date</th>
    </tr>
</table>

<h1>MEASURE CONVERSION CHART -- Lengths (UK)</h1>


<body>

<table class = "conversions">
  <thead>
    <tr>
        <th colspan="6" style="text-align: center; background-color: yellow; color: black;"> METRIC CONVERSIONS </th>
    </tr>
 </thead>
    <tr>
      <th>1 Centimeter</th>
    <th style="text-align: center;">=</th>
      <th><?php echo $millimetre; ?> Millimeters</th>
      <th>1 cm</th>
      <th style="text-align: center;">=</th>
      <th><?php echo $millimetre; ?> mm</th>
    </tr>
  
  <tbody>
    <tr>
     <th>1 Decimeter</th>
      <th style="text-align: center;">=</th>
      <th><?php echo $centimetre_from_dm; ?> Centimeters</th>
      <th>1 dm</th>
      <th style="text-align: center;">=</th>
      <th><?php echo $centimetre_from_dm; ?> cm</th>
    </tr>

     <tr>
     <th>1 Meter</th>
      <th style="text-align: center;">=</th>
      <th><?php echo $centimetre_from_m; ?> Centimeters</th>
      <th>1 m</th>
      <th style="text-align: center;">=</th>
      <th><?php echo $centimetre_from_m; ?> cm</th>
    </tr>

     <tr>
     <th>1 Kilometer</th>
      <th style="text-align: center;">=</th>
      <th><?php echo $metre_from_km; ?> Meters</th>
      <th>1 km</th>
      <th style="text-align: center;">=</th>
      <th><?php echo $metre_from_km; ?> m</th>
    </tr>
  </tbody>
</table>


<table class = "metric_conversions">
  <thead>
    <tr>
        <th colspan="6" style="text-align: center; background-color: yellow; color: black;"> IMPERIAL CONVERSIONS </th>
    </tr>
 </thead>
    <tr>
      <th>1 Foot</th>
      <th style="text-align: center;">=</th>
      <th><?php echo $inches_from_foot; ?> Inches</th>
      <th>1 ft</th>
      <th style="text-align: center;">=</th>
      <th><?php echo $inches_from_foot; ?> in</th>
    </tr>
  
  <tbody>
    <tr>
     <th>1 Yard</th>
      <th style="text-align: center;">=</th>
      <th><?php echo $feet_from_yard; ?> Feet</th>
      <th>1 yd</th>
      <th style="text-align: center;">=</th>
      <th><?php echo $feet_from_yard; ?> ft</th>
    </tr>

     <tr>
     <th>1 Chain</th>
      <th style="text-align: center;">=</th>
      <th><?php echo $yards_from_chain; ?> Yards</th>
      <th>1 ch</th>
      <th style="text-align: center;">=</th>
      <th><?php echo $yards_from_chain; ?> yd</th>
    </tr>

     <tr>
     <th>1 Furlong</th>
      <th style="text-align: center;">=</th>
      <th><?php echo $yards_from_furlong; ?> Yards (or 10 Chains)</th>
      <th>1 fur</th>
      <th style="text-align: center;">=</th>
      <th><?php echo $yards_from_furlong; ?> yd</th>
    </tr>

      <tr>
     <th>1 Mile</th>
      <th style="text-align: center;">=</th>
      <th><?php echo $yards_from_mile; ?> Yards (or 8 Furlongs)</ th>
      <th>1 mi</ th>
      <th style="text-align: center;">=</ th>
      <th><?php echo $yards_from_mile; ?> yd</ th>
    </tr>
  </tbody>
</table>


<table class = "metric_conversions">
  <thead>
    <tr>
        <th colspan="6" style="text-align: center; background-color: yellow; color: black;"> METRIC ⮕ IMPERIAL CONVERSIONS </th>
    </tr>
 </thead>
    <tr>
      <th>placeholder</th>
      <th style="text-align: center;">=</th>
      <th>placeholder</th>
      <th>placeholder</th>
      <th style="text-align: center;">=</th>
      <th>placeholder</th>
    </tr>
  
  <tbody>
    <tr>
     <th>placeholder</th>
      <th style="text-align: center;">=</th>
      <th>placeholder</th>
      <th>placeholder</th>
      <th style="text-align: center;">=</th>
      <th>placeholder</th>
    </tr>

     <tr>
     <th>placeholder</th>
      <th style="text-align: center;">=</th>
      <th>placeholder</th>
      <th>placeholder</th>
      <th style="text-align: center;">=</th>
      <th>placeholder</th>
    </tr>

     <tr>
     <th>placeholder</th>
      <th style="text-align: center;">=</th>
      <th>placeholder</th>
      <th>placeholder</th>
      <th style="text-align: center;">=</th>
      <th>placeholder</th>
    </tr>

      <tr>
     <th>placeholder</th>
      <th style="text-align: center;">=</th>
      <th>placeholder</th>
      <th>placeholder</th>
      <th style="text-align: center;">=</th>
      <th>placeholder</th>
    </tr>

      <tr>
     <th>placeholder</th>
      <th style="text-align: center;">=</th>
      <th>placeholder</th>
      <th>placeholder</th>
      <th style="text-align: center;">=</th>
      <th>placeholder</th>
    </tr>

      <tr>
     <th>placeholder</th>
      <th style="text-align: center;">=</th>
      <th>placeholder</th>
      <th>placeholder</th>
      <th style="text-align: center;">=</th>
      <th>placeholder</th>
    </tr>
  </tbody>
</table>

<table class = "metric_conversions">
  <thead>
    <tr>
        <th colspan="6" style="text-align: center; background-color: yellow; color: black;"> IMPERIAL ⮕ METRIC CONVERSIONS </th>
    </tr>
 </thead>
    <tr>
      <th>placeholder</th>
      <th style="text-align: center;">=</th>
      <th>placeholder</th>
      <th>placeholder</th>
      <th style="text-align: center;">=</th>
      <th>placeholder</th>
    </tr>
  
  <tbody>
    <tr>
     <th>placeholder</th>
      <th style="text-align: center;">=</th>
      <th>placeholder</th>
      <th>placeholder</th>
      <th style="text-align: center;">=</th>
      <th>placeholder</th>
    </tr>

     <tr>
     <th>placeholder</th>
      <th style="text-align: center;">=</th>
      <th>placeholder</th>
      <th>placeholder</th>
      <th style="text-align: center;">=</th>
      <th>placeholder</th>
    </tr>

     <tr>
     <th>placeholder</th>
      <th style="text-align: center;">=</th>
      <th>placeholder</th>
      <th>placeholder</th>
      <th style="text-align: center;">=</th>
      <th>placeholder</th>
    </tr>

      <tr>
     <th>placeholder</th>
      <th style="text-align: center;">=</th>
      <th>placeholder</th>
      <th>placeholder</th>
      <th style="text-align: center;">=</th>
      <th>placeholder</th>
    </tr>

      <tr>
     <th>placeholder</th>
      <th style="text-align: center;">=</th>
      <th>placeholder</th>
      <th>placeholder</th>
      <th style="text-align: center;">=</th>
      <th>placeholder</th>
    </tr>

  </tbody>
</table>

</body>


<footer class = "footer">
    <p>Created By Nick Shane S Lasic 202410346</p> 
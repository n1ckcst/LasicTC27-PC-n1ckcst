<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Volume Calculator · Geometric Shapes</title>
    <link rel="stylesheet" href="VolumeOfShapesStyle.css">
</head>
<body>
<div class="main-card">
    <a href="index.php" class="back-btn">← BACK TO MENU</a>
    <div class="title-wrapper">
        <h1>VOLUME OF SHAPES</h1>

        <div class="badge">shapes · values · formula · volume</div>
    </div>

    <?php
    // 1. Cube: V = s³
    function cubeVolume($side) {
        return pow($side, 3);
    }

    // 2. Right Rectangular Prism: V = l × w × h
    function rectangularPrismVolume($length, $width, $height) {
        return $length * $width * $height;
    }

    // 3. Cylinder: V = π × r² × h
    function cylinderVolume($radius, $height) {
        return pi() * pow($radius, 2) * $height;
    }

    // 4. Cone: V = (1/3) × π × r² × h
    function coneVolume($radius, $height) {
        return (1/3) * pi() * pow($radius, 2) * $height;
    }

    // 5. Square Pyramid: V = (1/3) × side² × h
    function squarePyramidVolume($side, $height) {
        return (1/3) * pow($side, 2) * $height;
    }

    // 6. Sphere: V = (4/3) × π × r³
    function sphereVolume($radius) {
        return (4/3) * pi() * pow($radius, 3);
    }

    // Sample values
    $cube_side = 5;
    $prism_l = 8; $prism_w = 3; $prism_h = 4;
    $cylinder_r = 3; $cylinder_h = 7;
    $cone_r = 4; $cone_h = 9;
    $pyramid_side = 6; $pyramid_h = 10;
    $sphere_r = 5;

    // Display results with new "Values" column
    echo "<table>";
    echo "<tr><th>Shape</th><th>Values (only)</th><th>Formula</th><th>Volume (Answer)</th></tr>";

    // Cube
    echo "<tr><td>Cube</td>";
    echo "<td>s = $cube_side</td>";
    echo "<td>V = s³</td>";
    echo "<td>" . cubeVolume($cube_side) . "</td></tr>";
    
    // Rectangular Prism
    echo "<tr><td>Rectangular Prism</td>";
    echo "<td>l = $prism_l, w = $prism_w, h = $prism_h</td>";
    echo "<td>V = l × w × h</td>";
    echo "<td>" . rectangularPrismVolume($prism_l, $prism_w, $prism_h) . "</td></tr>";
    
    // Cylinder
    echo "<tr><td>Cylinder</td>";
    echo "<td>r = $cylinder_r, h = $cylinder_h</td>";
    echo "<td>V = π × r² × h</td>";
    echo "<td>" . number_format(cylinderVolume($cylinder_r, $cylinder_h), 4) . "</td></tr>";
    
    // Cone
    echo "<tr><td>Cone</td>";
    echo "<td>r = $cone_r, h = $cone_h</td>";
    echo "<td>V = (1/3) × π × r² × h</td>";
    echo "<td>" . number_format(coneVolume($cone_r, $cone_h), 4) . "</td></tr>";
    
    // Square Pyramid
    echo "<tr><td>Square Pyramid</td>";
    echo "<td>side = $pyramid_side, h = $pyramid_h</td>";
    echo "<td>V = (1/3) × side² × h</td>";
    echo "<td>" . number_format(squarePyramidVolume($pyramid_side, $pyramid_h), 4) . "</td></tr>";
    
    // Sphere
    echo "<tr><td>Sphere</td>";
    echo "<td>r = $sphere_r</td>";
    echo "<td>V = (4/3) × π × r³</td>";
    echo "<td>" . number_format(sphereVolume($sphere_r), 4) . "</td></tr>";
    
    echo "</table>";
    ?>

    <div class="footer">
        User Defined Functions · created by Nick Shane S Lasic | 202410346
</div>
</body>
</html>
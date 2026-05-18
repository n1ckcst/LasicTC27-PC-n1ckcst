<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Directory · Philippine Senators</title>
    <link rel="stylesheet" href="Number1ActStyle.css">
</head>
<body>
<div class="main-card">
    <div class="btn-wrapper">
        <a href="index.php" class="back-btn">
            <span>←</span> BACK TO MENU
        </a>
    </div>

    <div class="title-wrapper">
        <h1>⟡ PHILIPPINE SENATE DIRECTORY ⟡</h1>
        
        <div class="badge">sorted by name — ascending</div>
    </div>

    <?php
    $profileImage = "https://static.vecteezy.com/system/resources/thumbnails/008/442/086/small/illustration-of-human-icon-user-symbol-icon-modern-design-on-blank-background-free-vector.jpg";
    
    $persons = array(
        array("name" => "Alan Peter Cayetano", "image" => $profileImage, "age" => 53, "birthday" => "1970-10-28", "contact" => "09171234567"),
        array("name" => "Bong Go", "image" => $profileImage, "age" => 49, "birthday" => "1975-12-13", "contact" => "09181234567"),
        array("name" => "Bong Revilla", "image" => $profileImage, "age" => 56, "birthday" => "1968-09-25", "contact" => "09191234567"),
        array("name" => "Chiz Escudero", "image" => $profileImage, "age" => 54, "birthday" => "1969-10-10", "contact" => "09201234567"),
        array("name" => "Cynthia Villar", "image" => $profileImage, "age" => 73, "birthday" => "1950-07-29", "contact" => "09211234567"),
        array("name" => "Francis Escudero", "image" => $profileImage, "age" => 54, "birthday" => "1969-10-10", "contact" => "09221234567"),
        array("name" => "Franklin Drilon", "image" => $profileImage, "age" => 78, "birthday" => "1945-11-28", "contact" => "09231234567"),
        array("name" => "Grace Poe", "image" => $profileImage, "age" => 55, "birthday" => "1968-09-03", "contact" => "09241234567"),
        array("name" => "Imee Marcos", "image" => $profileImage, "age" => 68, "birthday" => "1955-11-12", "contact" => "09251234567"),
        array("name" => "Joel Villanueva", "image" => $profileImage, "age" => 48, "birthday" => "1975-08-02", "contact" => "09261234567"),
        array("name" => "Juan Miguel Zubiri", "image" => $profileImage, "age" => 54, "birthday" => "1969-04-13", "contact" => "09271234567"),
        array("name" => "Lito Lapid", "image" => $profileImage, "age" => 68, "birthday" => "1955-10-25", "contact" => "09281234567"),
        array("name" => "Nancy Binay", "image" => $profileImage, "age" => 50, "birthday" => "1973-05-23", "contact" => "09291234567"),
        array("name" => "Pia Cayetano", "image" => $profileImage, "age" => 57, "birthday" => "1966-03-22", "contact" => "09301234567"),
        array("name" => "Ronald Dela Rosa", "image" => $profileImage, "age" => 61, "birthday" => "1962-01-21", "contact" => "09311234567")
    );
    
    $names = array();
    for($i = 0; $i < count($persons); $i++) {
        $names[] = $persons[$i]["name"];
    }
    sort($names);

    $sortedPersons = array();
    for($i = 0; $i < count($names); $i++) {
        for($j = 0; $j < count($persons); $j++) {
            if($persons[$j]["name"] == $names[$i]) {
                $sortedPersons[] = $persons[$j];
                break;
            }
        }
    }

    echo "<table>";
    echo "<tr>";
    echo "<th>NO.</th>";
    echo "<th>NAME</th>";
    echo "<th>IMAGE</th>";
    echo "<th>AGE</th>";
    echo "<th>BIRTHDAY</th>";
    echo "<th>CONTACT NUMBER</th>";
    echo "</tr>";

    $counter = 1;
    for($i = 0; $i < count($sortedPersons); $i++) {
        echo "<tr>";
        echo "<td>" . $counter . "</td>";
        echo "<td>" . $sortedPersons[$i]["name"] . "</td>";
        echo "<td><img class='person-img' src='" . $sortedPersons[$i]["image"] . "' alt='senator'></td>";
        echo "<td>" . $sortedPersons[$i]["age"] . "</td>";
        echo "<td>" . $sortedPersons[$i]["birthday"] . "</td>";
        echo "<td>" . $sortedPersons[$i]["contact"] . "</td>";
        echo "</tr>";
        $counter++;
    }
    echo "</table>";
    ?>

    <div class="footer">
        Created by Nick Shane S Lasic | 202410346
    </div>
</div>

</body>
</html>
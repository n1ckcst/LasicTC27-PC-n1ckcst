<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP String Functions - Name Processor</title>
    <link rel="stylesheet" href="ListofNamesStyle.css">
</head>
<body>
    <div class="main-card">
        <h1>✦ LIST OF NAMES ✦</h1>
        <div class="subtitle">↯ 20 names processed using strlen() | ucfirst() | str_replace() | strpos() | strrev() ↯</div>


        <?php
        // Define constant for the array of 20 different names
        define('NAME_LIST', [
            'chris allen',
            'john michael',
            'sarah jane',
            'mark anthony',
            'maria concepcion',
            'james patrick',
            'lisa marie',
            'robert william',
            'catherine anne',
            'daniel john',
            'angela marie',
            'christopher paul',
            'jennifer rose',
            'michael jordan',
            'elizabeth ann',
            'david mark',
            'patricia jane',
            'joseph john',
            'kimberly anne',
            'brian christopher'
        ]);
        ?>

        <table>
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Characters</th>
                    <th>Uppercase First</th>
                    <th>Vowels → @</th>
                    <th>Position of 'a'</th>
                    <th>Reverse Name</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $counter = 1;
                foreach (NAME_LIST as $name) {

                    $charCount = strlen($name);
                    

                    $upperFirst = ucfirst($name);
                    

                    $replaceVowels = str_replace(['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'], '@', $name);
                    

                    $posA = strpos($name, 'a');
                    if ($posA === false) {
                        $posAText = "Not found";
                    } else {
                        $posAText = $posA;
                    }
                    
                    $reverseName = strrev($name);
                    
                    echo "<tr>";
                    echo "<td>" . $counter . "</td>";
                    echo "<td>" . $name . "</td>";
                    echo "<td>" . $charCount . "</td>";
                    echo "<td>" . $upperFirst . "</td>";
                    echo "<td>" . $replaceVowels . "</td>";
                    echo "<td>" . $posAText . "</td>";
                    echo "<td>" . $reverseName . "</td>";
                    echo "</tr>";
                    $counter++;
                }
                ?>
            </tbody>
        </table>
        
        <div class="info-box">
            <h3>PHP String Functions I Used:: </h3>
            <ul>
                <li><strong>define()</strong> - Creates a constant for the array of 20 names</li>
                <li><strong>strlen()</strong> - Returns the length of a string (counts characters including spaces)</li>
                <li><strong>ucfirst()</strong> - Converts the first character of a string to uppercase</li>
                <li><strong>str_replace()</strong> - Replaces all vowels (a, e, i, o, u) with @ symbol</li>
                <li><strong>strpos()</strong> - Finds the position of the first occurrence of letter 'a' (returns FALSE if not found)</li>
                <li><strong>strrev()</strong> - Reverses the entire string</li>
            </ul>
        </div>
        
        <div class="footer">
            <?php echo date("Y"); ?> © PHP String Functions Activity | Created by Nick Shane S Lasic
        </div>
    </div>
</body>
</html>
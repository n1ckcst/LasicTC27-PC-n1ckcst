<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Ranking Program</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
<div class="container">
    <div class="header">
        <h1>🎓 Grade Ranking Program</h1>
    </div>

    <div class="content">
        <?php
        // ---------- only variable to edit ----------
        $student_grade = 96;
       // -------------------------------------------


        $firstname = "Jane";
        $middlename = "M";
        $lastname = "Doe";
        

        $middlename_initial = !empty($middlename) ? strtoupper(substr($middlename, 0, 1)) . '.' : '';
        $fullname = $firstname . " " . $middlename_initial . " " . $lastname;
        $fullname = trim($fullname);
        
     
        $grade = $student_grade; 
        
        if ($grade >= 93 && $grade <= 100) {
            $ranking = "A";
            $color = "#4CAF50";
            $emoji = "🌟";
        } elseif ($grade >= 90 && $grade <= 92) {
            $ranking = "A-";
            $color = "#8BC34A";
            $emoji = "⭐";
        } elseif ($grade >= 87 && $grade <= 89) {
            $ranking = "B+";
            $color = "#CDDC39";
            $emoji = "📚";
        } elseif ($grade >= 83 && $grade <= 86) {
            $ranking = "B";
            $color = "#FFC107";
            $emoji = "📖";
        } elseif ($grade >= 80 && $grade <= 82) {
            $ranking = "B-";
            $color = "#FF9800";
            $emoji = "✏️";
        } elseif ($grade >= 77 && $grade <= 79) {
            $ranking = "C+";
            $color = "#c2441d";
            $emoji = "⚠️";
        } elseif ($grade >= 73 && $grade <= 76) {
            $ranking = "C";
            $color = "#f44336";
            $emoji = "📉";
        } elseif ($grade >= 70 && $grade <= 72) {
            $ranking = "C-";
            $color = "#e4d914";
            $emoji = "😐";
        } elseif ($grade >= 67 && $grade <= 69) {
            $ranking = "D+";
            $color = "#b08727";
            $emoji = "😕";
        } elseif ($grade >= 63 && $grade <= 66) {
            $ranking = "D";
            $color = "#ff0000";
            $emoji = "😟";
        } elseif ($grade >= 60 && $grade <= 62) {
            $ranking = "D-";
            $color = "#ff0000";
            $emoji = "😔";
        } elseif ($grade < 60 && $grade >= 0) {
            $ranking = "F";
            $color = "#000000";
            $emoji = "💔";
        } else {
            $ranking = "Invalid";
            $color = "#999";
            $emoji = "❓";
        }
        ?>

        <?php
        if ($grade >= 0 && $grade <= 100) {
            echo '
            <div class="result-card">
                <div class="result-content">
                    <div class="result-info">
                        <p class="name">📌 Name: ' . $fullname . '</p>
                        <p>🏆 Rank: <span class="rank-box" style="background: ' . $color . '20; color: ' . $color . ';">' . $ranking . '</span></p>
                        <p>📊 Grade: <span class="grade-box" style="background: ' . $color . '20; color: ' . $color . ';">' . $grade . '</span></p>
                    </div>
                    <div class="picture-box">
                        <div class="avatar" style="background: ' . $color . ';">
                            <span>' . $emoji . '</span>
                        </div>
                        <div class="picture-label">Student Photo</div>
                    </div>
                </div>
            </div>';
        } else {
            echo '<div class="result-card" style="background: #ffebee; text-align: center;">
                    <p>❌ Invalid grade! Please set $student_grade between 0-100.</p>
                  </div>';
        }
        ?>

        <hr>
        <div class="footer-note">
     <strong>By Nick Shane S Lasic</strong>
    </div>
</div>
</body>
</html>
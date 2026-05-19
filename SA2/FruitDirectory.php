<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruit Directory · 20 Fruits</title>
    <link rel="stylesheet" href="FruitDirectoryStyle.css">
</head>
<body>
<div class="main-card">
    <a href="index.php" class="back-btn">← BACK TO MENU</a>
    <div class="title-wrapper">
        <h1>MY FRUIT DIRECTORY</h1>
        <div class="subtitle">alphabetical order</div>
        
    </div>

    <?php

    $fruits = array(
        array("name" => "Apple", "image" => "https://i.pinimg.com/originals/7d/7d/55/7d7d55cb6f1e7a9df2d28584f36fcf27.jpg?nii=t", "description" => "Crisp and sweet, available in red, green, or yellow.", "facts" => "High in fiber and vitamin C. Keeps the doctor away!"),
        array("name" => "Apricot", "image" => "https://www.shutterstock.com/image-vector/cute-cartoon-apricot-happy-smiling-600nw-2608722857.jpg", "description" => "Small, golden-orange fruit with velvety skin.", "facts" => "Rich in beta-carotene and fiber."),
        array("name" => "Avocado", "image" => "https://media.istockphoto.com/id/939768622/vector/funny-happy-cute-happy-smiling-avocado.jpg?s=612x612&w=0&k=20&c=JoW3ySzFKcFGWxpvp_9sRZ2uRwwz3Y8wBu02vaCqdKY=", "description" => "Creamy, green fruit often used in savory dishes.", "facts" => "Technically a berry! Loaded with healthy fats."),
        array("name" => "Banana", "image" => "https://static.vecteezy.com/system/resources/previews/043/763/073/non_2x/cute-banana-cartoon-emoji-icon-character-illustration-vector.jpg", "description" => "Creamy and soft, yellow when ripe.", "facts" => "Rich in potassium and natural energy."),
        array("name" => "Blackberry", "image" => "https://png.pngtree.com/png-clipart/20230913/original/pngtree-blackberry-clipart-cartoon-cartoon-blackberry-with-leaves-and-eyes-smiling-vector-png-image_11059241.png", "description" => "Dark purple, small, and tart-sweet.", "facts" => "Packed with antioxidants and vitamin C."),
        array("name" => "Blueberry", "image" => "https://img.freepik.com/free-vector/hand-drawn-blueberry-cartoon-illustration_23-2150739219.jpg?semt=ais_hybrid&w=740&q=80", "description" => "Tiny, blue-purple, sweet-tart berry.", "facts" => "Brain food – improves memory and heart health."),
        array("name" => "Cherry", "image" => "https://img.freepik.com/premium-vector/cute-cartoon-cherries-with-smiling-faces-green-leaf_1294240-50656.jpg?w=360", "description" => "Small, round, and juicy with a pit.", "facts" => "Contains melatonin, helps improve sleep quality."),
        array("name" => "Coconut", "image" => "https://img.freepik.com/premium-vector/coconut-cute-cartoon-fruit-fresh-animation-kawaii-healthy-character_598925-9148.jpg?w=360", "description" => "Large, brown, hairy fruit with water inside.", "facts" => "Every part is useful: water, milk, oil, meat."),
        array("name" => "Durian", "image" => "https://static.vecteezy.com/system/resources/previews/016/102/800/non_2x/durian-cartoon-icon-illustration-vector.jpg", "description" => "Spiky shell, pungent smell, creamy flesh.", "facts" => "Known as 'King of Fruits' in Southeast Asia."),
        array("name" => "Grapes", "image" => "https://images.rawpixel.com/image_800/cHJpdmF0ZS9sci9pbWFnZXMvd2Vic2l0ZS8yMDI1LTA3L3NyLWltYWdlLTA1MDYyNS1nbGEwMy1zLTIzNi1tY2xkN3M5di5qcGc.jpg", "description" => "Small, sweet, grows in clusters.", "facts" => "Can be dried to make raisins. Full of antioxidants."),
        array("name" => "Guava", "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRIMlTLsiIhsrPKP21d9m4FnXSFb5P953Iiww&s", "description" => "Green skin, pink or white flesh.", "facts" => "Very high in vitamin C – more than oranges!"),
        array("name" => "Kiwi", "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2BWQgIum65Bbe15QNjCJYyV5q22AZfwgiHw&s", "description" => "Brown fuzzy skin, bright green inside.", "facts" => "Contains actinidin, an enzyme that helps digest protein."),
        array("name" => "Lemon", "image" => "https://thumbs.dreamstime.com/b/cheerful-lemon-cartoon-mascot-waving-set-minimalist-vector-illustration-style-against-clean-white-background-character-hand-384891442.jpg", "description" => "Yellow, sour citrus fruit.", "facts" => "Natural disinfectant and rich in vitamin C."),
        array("name" => "Mango", "image" => "https://img.magnific.com/premium-vector/mango-cartoon-vector-art-illustration_669954-57318.jpg", "description" => "Tropical fruit with golden flesh.", "facts" => "National fruit of India, Philippines, and Pakistan."),
        array("name" => "Orange", "image" => "https://t3.ftcdn.net/jpg/06/15/40/56/360_F_615405673_4ewkLGonApipIDIhwnCc0u9DIhrkCh9i.jpg", "description" => "Citrus fruit with bright orange rind.", "facts" => "One orange provides 100% of daily vitamin C."),
        array("name" => "Papaya", "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRs4_-vwpP6E5UPhKPZBsQ4uTeQsFbh3F0HaQ&s", "description" => "Orange flesh with black seeds inside.", "facts" => "Contains papain enzyme that aids digestion."),
        array("name" => "Peach", "image" => "https://thumbs.dreamstime.com/b/cute-cartoon-peach-kawaii-peach-vector-illustration-isolated-cute-cartoon-peach-kawaii-peach-vector-illustration-isolated-white-117664189.jpg", "description" => "Soft, fuzzy skin, sweet juicy flesh.", "facts" => "Related to almonds, cherries, and plums."),
        array("name" => "Pear", "image" => "https://t3.ftcdn.net/jpg/15/39/05/80/360_F_1539058089_TNAf1kaaxmFj6EmQOlubESpAbfXc9MsL.jpg", "description" => "Sweet, bell-shaped fruit.", "facts" => "Good source of copper and vitamin K."),
        array("name" => "Pineapple", "image" => "https://img.freepik.com/free-vector/cute-pineapple-fruit-cartoon-vector-icon-illustration-food-nature-icon-isolated-flat-vector_138676-10733.jpg?semt=ais_hybrid&w=740&q=80", "description" => "Rough, spiky skin, sweet yellow flesh.", "facts" => "Contains bromelain, an anti-inflammatory enzyme."),
        array("name" => "Strawberry", "image" => "https://t3.ftcdn.net/jpg/03/25/61/62/360_F_325616239_jPMacbnlr5hNYLBOazcKMtwvLWGKUEy3.jpg", "description" => "Red, juicy, and heart-shaped.", "facts" => "Only fruit with seeds on the outside (about 200 seeds!)."),
        array("name" => "Watermelon", "image" => "https://www.shutterstock.com/image-vector/vector-illustration-cute-watermelon-cartoon-600nw-2705502481.jpg", "description" => "Large, green rind, red flesh.", "facts" => "92% water – great for hydration in summer.")
    );

    
    $names = array();
    for ($i = 0; $i < count($fruits); $i++) {
        $names[] = $fruits[$i]["name"];
    }
    sort($names);

    $sortedFruits = array();
    for ($i = 0; $i < count($names); $i++) {
        for ($j = 0; $j < count($fruits); $j++) {
            if ($fruits[$j]["name"] == $names[$i]) {
                $sortedFruits[] = $fruits[$j];
                break;
            }
        }
    }

   
    echo "<table>";
    echo "<tr><th>Image</th><th>Name</th><th>Description</th><th>Facts</th></tr>";
    for ($i = 0; $i < count($sortedFruits); $i++) {
        echo "<tr>";
        echo "<td style='text-align:center'><img class='fruit-img' src='" . $sortedFruits[$i]["image"] . "' alt='" . $sortedFruits[$i]["name"] . "'></td>";
        echo "<td><strong>" . $sortedFruits[$i]["name"] . "</strong></td>";
        echo "<td>" . $sortedFruits[$i]["description"] . "</td>";
        echo "<td>" . $sortedFruits[$i]["facts"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    ?>

    <div class="footer">
        sorted using sort() | Created by Nick Shane S Lasic | 202410346
    </div>
</div>
</body>
</html>
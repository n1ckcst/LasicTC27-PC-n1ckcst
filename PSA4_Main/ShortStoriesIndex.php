<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Short Stories Collection</title>
    <link rel="stylesheet" href="ShortStoriesIndexStyle.css">
</head>
<body>
    <div class="main-card">
        <h1>✦ SHORT STORIES ✦</h1>
        <div class="subtitle">a collection of 5 inspiring tales</div>
        
        <!-- GRID: Story 1 to Story 5 with full content -->
        <div class="story-grid">
            <?php include 'story1.php'; ?>
            <?php include 'story2.php'; ?>
            <?php include 'story3.php'; ?>
            <?php include 'story4.php'; ?>
            <?php include 'story5.php'; ?>
        </div>
        
        <div class="footer">
            <?php echo date("Y"); ?> © Short Stories Collection
        </div>
    </div>
</body>
</html>
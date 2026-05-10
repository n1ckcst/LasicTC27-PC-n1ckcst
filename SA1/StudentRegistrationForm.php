<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>Template | Nick Shane S Lasic</title>
    <style>
        /* Simple reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Courier New', 'Lucida Sans Typewriter', monospace;
            background: #f0ebe0;
            min-height: 100vh;
            padding: 30px 20px;
        }

        /* Main card container - consistent with main page */
        .main-card {
            max-width: 800px;
            width: 100%;
            margin: 0 auto;
            background: #fffef7;
            border: 1px solid #ccc5b5;
            padding: 2rem 1.8rem;
            text-align: center;
            box-shadow: 5px 5px 0 rgba(0,0,0,0.05);
        }

        /* Title styling */
        h1 {
            font-size: 24px;
            font-weight: normal;
            color: #3a2c1f;
            margin-bottom: 8px;
            letter-spacing: 1px;
        }

        .desc {
            color: #2a4b74;
            font-weight: 500;
            font-size: 13px;
            margin: 15px 0 25px 0;
            background: #f7f3ea;
            display: inline-block;
            padding: 4px 12px;
        }

        /* Back button */
        .back-btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: #e8dfd0;
            border: 1px solid #b8a88a;
            padding: 8px 20px;
            font-family: 'Courier New', monospace;
            font-size: 13px;
            font-weight: bold;
            color: #3a2c1f;
            text-decoration: none;
            margin-bottom: 25px;
            transition: all 0.2s ease;
            box-shadow: 2px 2px 0 rgba(100, 70, 40, 0.15);
        }

        .back-btn:hover {
            background: #ddd0bb;
            transform: translate(-1px, -1px);
            box-shadow: 3px 3px 0 rgba(100, 70, 40, 0.2);
        }

        /* Content area - put your page content here */
        .content {
            text-align: left;
            margin: 20px 0;
        }


        /* Simple button styling */
        .btn {
            background: #e8dfd0;
            border: 1px solid #b8a88a;
            padding: 10px 24px;
            font-family: 'Courier New', monospace;
            font-size: 13px;
            font-weight: bold;
            color: #3a2c1f;
            cursor: pointer;
            transition: all 0.2s ease;
            box-shadow: 2px 2px 0 rgba(100, 70, 40, 0.15);
        }

        .btn:hover {
            background: #ddd0bb;
            transform: translate(-1px, -1px);
            box-shadow: 3px 3px 0 rgba(100, 70, 40, 0.2);
        }

        .btn:active {
            transform: translate(1px, 1px);
            box-shadow: 1px 1px 0 rgba(100, 70, 40, 0.15);
        }

        /* Footer */
        .footer {
            margin-top: 25px;
            padding-top: 15px;
            border-top: 1px solid #e2d8c8;
            font-size: 11px;
            color: #8b775a;
        }

        /* Responsive */
        @media (max-width: 600px) {
            .main-card {
                padding: 1.2rem;
            }
            h1 {
                font-size: 20px;
            }
        }
    </style>
</head>
<body>

<div class="main-card">
    <h1>📄 Student Registration Form</h1>
    <div class="desc">Applications Development and Emerging Technologies</div>
    
    <div class="content">
        <!-- ========================================== -->
        <!-- PUT YOUR PAGE CONTENT HERE                 -->
        <!-- ========================================== -->
        
        <p style="text-align: center; color: #6b5a48; margin: 20px 0;">
            Your content goes here...
        </p>
        
        <!-- Example: simple form -->
        <!--
        <div class="form-row">
            <label>Name:</label>
            <input type="text" placeholder="Enter name">
        </div>
        <div class="form-row">
            <label>Email:</label>
            <input type="email" placeholder="Enter email">
        </div>
        <button class="btn">Submit</button>
        -->
        
        <!-- Example: simple message -->
        <!--
        <div class="message">
            This is a message box.
        </div>
        -->
        
        <!-- ========================================== -->
    </div>
    <a href="Index.php" class="back-btn">← Back to Main Page</a>
    <div class="footer">
        © 2026 Nick Shane S Lasic | 202410346
    </div>
</div>

</body>
</html>
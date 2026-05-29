<?php
$fullName = "ศักดา เกื้อสีทอง";
$profession = "นักพัฒนาเว็บเริ่มต้น";
$description = "สวัสดีครับ ผมชื่อ $fullName ยินดีที่ได้รู้จัก ผมสนใจพัฒนาเว็บไซต์และเขียนโปรแกรมด้วย PHP, HTML, CSS, และ JavaScript.";
$skills = [
    "PHP", 
    "HTML / CSS", 
    "JavaScript", 
    "การออกแบบเว็บพื้นฐาน"
];
$goals = "ผมต้องการพัฒนาทักษะการเขียนโปรแกรมและสร้างเว็บไซต์ที่ใช้งานได้จริง";
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>หน้าแนะนำตัว - <?php echo $fullName; ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 40px auto;
            background: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
        }
        h1 {
            margin-bottom: 10px;
            color: #1a73e8;
        }
        h2 {
            margin-top: 30px;
            color: #333;
        }
        p {
            line-height: 1.6;
        }
        .skills {
            list-style: none;
            padding: 0;
        }
        .skills li {
            background: #e8f0fe;
            color: #1a73e8;
            display: inline-block;
            margin: 5px 10px 5px 0;
            padding: 8px 12px;
            border-radius: 20px;
        }
        .footer {
            margin-top: 40px;
            font-size: 0.95rem;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>สวัสดีครับ ผม <?php echo $fullName; ?></h1>
        <p><?php echo $description; ?></p>

        <h2>เกี่ยวกับผม</h2>
        <p>ชื่อ: <strong><?php echo $fullName; ?></strong></p>
        <p>ตำแหน่ง: <strong><?php echo $profession; ?></strong></p>

        <h2>ทักษะที่สนใจ</h2>
        <ul class="skills">
            <?php foreach ($skills as $skill): ?>
                <li><?php echo $skill; ?></li>
            <?php endforeach; ?>
        </ul>

        <h2>เป้าหมาย</h2>
        <p><?php echo $goals; ?></p>

        <div class="footer">
            <p>ขอบคุณที่เข้ามาชมหน้าดูแลนี้ครับ</p>
        </div>
    </div>
</body>
</html>

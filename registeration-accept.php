<?php
// รับค่าจาก $_POST และตรวจสอบก่อนแสดงผล (htmlspecialchars เพื่อความปลอดภัย)

$fullname  = isset($_POST['fullname']) ? htmlspecialchars($_POST['fullname']) : '-';
$email     = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '-';
$phone     = isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : '-';
$password  = isset($_POST['password']) ? htmlspecialchars($_POST['password']) : '-';
$salary    = isset($_POST['salary']) ? htmlspecialchars($_POST['salary']) : '-';
$startdate = isset($_POST['startdate']) ? htmlspecialchars($_POST['startdate']) : '-';
$gender    = isset($_POST['gender']) ? htmlspecialchars($_POST['gender']) : '-';
$position  = isset($_POST['position']) ? htmlspecialchars($_POST['position']) : '-';
$intro     = isset($_POST['intro']) ? htmlspecialchars($_POST['intro']) : '-';

// ทักษะความสามารถ (checkbox array) -> ใช้ implode() เชื่อมค่าเป็นข้อความเดียว
if (isset($_POST['skills']) && is_array($_POST['skills'])) {
    $skills = implode(", ", $_POST['skills']);
} else {
    $skills = "ไม่ได้เลือกทักษะใด ๆ";
}
?>
<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<title>ผลการสมัครงาน</title>
</head>
<body>
<div class="container">
    <h2>ข้อมูลใบสมัครงานที่ได้รับ</h2>

    <p>ชื่อผู้สมัคร: <?php echo $fullname; ?></p>
    <p>อีเมล: <?php echo $email; ?></p>
    <p>เบอร์โทรศัพท์: <?php echo $phone; ?></p>
    <p>รหัสผ่าน: <?php echo $password; ?></p>
    <p>เงินเดือนที่คาดหวัง: <?php echo $salary; ?> บาท</p>
    <p>วันที่เริ่มงานได้: <?php echo $startdate; ?></p>
    <p>เพศ: <?php echo $gender; ?></p>
    <p>ตำแหน่งที่สนใจ: <?php echo $position; ?></p>
    <p>ทักษะความสามารถ: <?php echo $skills; ?></p>
    <p>แนะนำตัวเพิ่มเติม: <?php echo nl2br($intro); ?></p>

    <a href="registeration-form.php">&laquo; กลับไปแก้ไขข้อมูล</a>
</div>
</body>
</html>
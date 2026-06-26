<!DOCTYPE html>
<html lang="th">
<head>
<meta charset="UTF-8">
<title>แบบฟอร์มสมัครงาน</title>

<body>
<div class="container">
    <h2>แบบฟอร์มสมัครงาน</h2>
    <form action="registeration-accept.php" method="POST">

        <label for="fullname">ชื่อ-นามสกุล</label>
        <input type="text" id="fullname" name="fullname" required>
        <br>

        <label for="email">อีเมล</label>
        <input type="email" id="email" name="email" required>
        <br>

        <label for="phone">เบอร์โทรศัพท์</label>
        <input type="tel" id="phone" name="phone" pattern="[0-9]{9,10}" required>
        <br>

        <label for="password">รหัสผ่าน (สำหรับเข้าสู่ระบบ)</label>
        <input type="password" id="password" name="password" required>
        <br>

        <label for="salary">เงินเดือนที่คาดหวัง (บาท)</label>
        <input type="number" id="salary" name="salary" min="0" step="500">
        <br>

        <label for="startdate">วันที่เริ่มงานได้</label>
        <input type="date" id="startdate" name="startdate">
        <br>

        <label>เพศ</label>
        <div class="radio-group">
            <label><input type="radio" name="gender" value="ชาย" required> ชาย</label>
            <label><input type="radio" name="gender" value="หญิง"> หญิง</label>
            <label><input type="radio" name="gender" value="อื่นๆ"> อื่น ๆ</label>
        </div>

        <label for="position">ตำแหน่งที่สนใจ</label>
        <select id="position" name="position">
            <option value="โปรแกรมเมอร์">โปรแกรมเมอร์</option>
            <option value="กราฟิกดีไซน์">กราฟิกดีไซน์</option>
            <option value="การตลาด">การตลาด</option>
        </select></div>

        <label>ทักษะความสามารถ (เลือกได้มากกว่า 1)</label>
        <div class="checkbox-group">
            <label><input type="checkbox" name="skills[]" value="PHP"> PHP</label>
            <label><input type="checkbox" name="skills[]" value="HTML"> HTML</label>
            <label><input type="checkbox" name="skills[]" value="CSS"> CSS</label>
            <label><input type="checkbox" name="skills[]" value="SQL"> SQL</label>
        </div>

        <label for="intro">แนะนำตัวเพิ่มเติม</label>
        <textarea id="intro" name="intro" rows="4"></textarea></div>

        <div class="btn-group">
            <button type="submit" class="btn-submit">ส่งใบสมัคร</button>
            <button type="reset" class="btn-reset">ล้างข้อมูล</button>
        </div>

    </form>
</div>
</body>
</html>
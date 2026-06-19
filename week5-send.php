<html lang='th'>
<head>
    <title>page Title</title>
</head>
<body>
    <form action="week5-receive.php" method="get">
        <label>uesrname</label>
        <input type="text" name="uesrname">
       <br>
   
        <label>password</label>
        <input type="password" name="password">
        <br>
   
        <label>email</label>
        <input type="email" name="email">
        <br>

        <label>อายุ</label>
        <input type="number" name="useraAge">
        <br>

        <label>วันเกิด</label>
        <input type="date" name="useraBirth">
        <br>

        <label>เพศ</label>
        <input type="radio" name="userGender" value="ชาย">ชาย
        <input type="radio" name="userGender" value="หญิง">หญิง
        <br>

        <label>จังหวัด</label>
        <select name="userProvince">
             <option value="ไม่ระบุ">-</option>
            <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
        </select>
         <br>

        <label>งานอดิเรก</label>
        <input type="checkbox" name="userHobby[]" value="อ่านหนังสือ">อ่านหนังสือ
        <input type="checkbox" name="userHobby[]" value="เล่นเกม">เล่นเกม
        <br>

            
     <input type="submit" value="ส่งข้อมูล">

</body>
</html>
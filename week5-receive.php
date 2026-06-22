<?php
    $name = $_GET["uesrname"];
    $password = $_GET["password"];
    $email = $_GET["email"];
    $useraAge = $_GET["useraAge"];
    $useraBirth = $_GET["useraBirth"];
    $userGender = $_GET["userGender"];
    $userProvince = $_GET["userProvince"];
    $userHobby = $_GET["userHobby"];
    $userMsg = $_GET["userMsg"];

    echo "สวัสดี $name<br>";
    echo "รหัสผ่านของคุณคือ: $password<br>";
    echo "อีเมลของคุณคือ: $email<br>";
    echo "อายุของคุณคือ: $useraAge<br>";
    echo "วันเกิดของคุณคือ: $useraBirth<br>";
    echo "เพศของคุณคือ: $userGender<br>";
    echo "จังหวัดของคุณคือ: $userProvince<br>";
    echo "งานอดิเรกของคุณคือ: " . implode(", ", $userHobby) . "<br>";
    echo "ความคิดเห็นของคุณคือ: $userMsg<br>";
?>
<?php
// ============================================
// ฟังก์ชันที่ 1: สูตรคูณ
// ============================================
function multiplicationTable($num) {
    if ($num < 1 || $num > 12) {
        return '<div class="result"><p class="error">❌ โปรดป้อนตัวเลขระหว่าง 1-12</p></div>';
    }

    $output = '<div class="result">';
    $output .= '<h3>สูตรคูณ ' . $num . ':</h3>';
    $output .= '<div class="multiplication-table">';

    for ($i = 1; $i <= 12; $i++) {
        $result = $num * $i;
        $output .= '<div class="table-item">' . $num . ' × ' . $i . ' = <strong>' . $result . '</strong></div>';
    }

    $output .= '</div></div>';
    return $output;
}

// ============================================
// ฟังก์ชันที่ 2: การบวก
// ============================================
function addition($a, $b) {
    $sum = $a + $b;
    $output  = '<div class="result">';
    $output .= '<h3>ผลลัพธ์:</h3>';
    $output .= '<div class="result-content">';
    $output .= '<p>' . $a . ' + ' . $b . ' = <span class="success">' . $sum . '</span></p>';
    $output .= '</div></div>';
    return $output;
}
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ฟังก์ชัน PHP - สูตรคูณและการบวก</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            padding: 20px;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }
        h1 {
            text-align: center;
            color: white;
            margin-bottom: 30px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }
        .functions-wrapper {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }
        .function-card {
            background: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.3);
        }
        .function-card h2 {
            color: #667eea;
            margin-bottom: 20px;
            font-size: 22px;
            border-bottom: 2px solid #667eea;
            padding-bottom: 10px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            color: #333;
            font-weight: bold;
        }
        input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }
        input[type="number"]:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 5px rgba(102, 126, 234, 0.3);
        }
        button {
            width: 100%;
            padding: 12px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: transform 0.2s;
        }
        button:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        }
        .result {
            margin-top: 20px;
            padding: 15px;
            background: #f0f4ff;
            border-left: 4px solid #667eea;
            border-radius: 5px;
        }
        .result h3 {
            color: #667eea;
            margin-bottom: 10px;
        }
        .result-content {
            color: #333;
            line-height: 1.8;
        }
        .multiplication-table {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
            margin-top: 10px;
        }
        .table-item {
            background: white;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
            border: 1px solid #667eea;
        }
        .error {
            color: #e74c3c;
            font-weight: bold;
        }
        .success {
            color: #27ae60;
            font-weight: bold;
            font-size: 24px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>🔢 ฟังก์ชัน PHP สำหรับการคำนวณ</h1>

        <div class="functions-wrapper">

            <!-- ฟังก์ชัน 1: สูตรคูณ -->
            <div class="function-card">
                <h2>📊 ฟังก์ชันที่ 1: สูตรคูณ</h2>
                <form method="POST">
                    <div class="form-group">
                        <label for="number1">ป้อนตัวเลข (1-12):</label>
                        <input type="number" id="number1" name="number1" min="1" max="12" placeholder="เช่น 5"
                               value="<?php echo isset($_POST['number1']) ? (int)$_POST['number1'] : ''; ?>">
                    </div>
                    <button type="submit" name="function1_btn">แสดงสูตรคูณ</button>
                </form>

                <?php
                if (isset($_POST['function1_btn']) && !empty($_POST['number1'])) {
                    $num = (int)$_POST['number1'];
                    echo multiplicationTable($num);
                }
                ?>
            </div>

            <!-- ฟังก์ชัน 2: การบวก -->
            <div class="function-card">
                <h2>➕ ฟังก์ชันที่ 2: การบวก</h2>
                <form method="POST">
                    <div class="form-group">
                        <label for="number2">ป้อนตัวเลขตัวที่ 1:</label>
                        <input type="number" id="number2" name="number2" placeholder="เช่น 10"
                               value="<?php echo isset($_POST['number2']) ? (int)$_POST['number2'] : ''; ?>">
                    </div>
                    <div class="form-group">
                        <label for="number3">ป้อนตัวเลขตัวที่ 2:</label>
                        <input type="number" id="number3" name="number3" placeholder="เช่น 20"
                               value="<?php echo isset($_POST['number3']) ? (int)$_POST['number3'] : ''; ?>">
                    </div>
                    <button type="submit" name="function2_btn">คำนวณผลบวก</button>
                </form>

                <?php
                if (isset($_POST['function2_btn']) && !empty($_POST['number2']) && !empty($_POST['number3'])) {
                    $num2 = (int)$_POST['number2'];
                    $num3 = (int)$_POST['number3'];
                    echo addition($num2, $num3);
                }
                ?>
            </div>

        </div>
    </div>
</body>
</html>
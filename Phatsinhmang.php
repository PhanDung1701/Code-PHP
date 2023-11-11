<!DOCTYPE html>
<html>
<head>
<title>Phat sinh mang</title>
    <style>
        .form-container {
            width: 400px;
            margin: 0 auto;
            border: 1px solid #ccc;
            background-color: #fecce7;
        }
        h1{
            margin: 0;
            text-align: center;
            font-style: italic;
            font-size: 20px;
        }
        .header {
            text-align: center;
            background-color: #980065;
            color: white;
            width: 400px;

        }
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .form-group {
            display: flex;
            align-items: center;
            margin: 5px 0;
        }
        .form-group label {
            width: 180px;
            text-align: left;
            margin-right: 10px;
        }
        button[type="submit"] {
        margin-left: 165px;
        background-color: #fdfd9b;
        }
        .form-group input[type="text"] {
            width: 150px;
            height: 5px;
            padding: 7px;
        }
        
        .result input[type="text"]{
            margin-top: 10px;
            width: 180px;
            text-align: center;
        }
        .result{
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <div class="header">
            <h1>Phát sinh mảng và tính toán</h1>
        </div>
        
        <form method="post">
            <div class="form-group">
                <label for="chuoi">Nhập số phần tử:</label>
                <input type="text" name="phan_tu" id="phan_tu" required>
            </div>

            <button type="submit" name="tim_kiem" style="border: 1px solid #000;">Phát sinh và tính toán</button>

            <div class="form-group">
                <label for="tu_can_tim">Mảng:</label>
                <input type="text" name="mang" id="mang" readonly style="background-color: #fb9997">
            </div>
            <div class="form-group">
                <label for="tu_can_tim">GTLN (Max) trong mảng:</label>
                <input type="text" name="gtln" id="gtln" readonly style="background-color: #fb9997">
            </div>
            <div class="form-group">
                <label for="tu_can_tim">GTNN (Min) trong mảng:</label>
                <input type="text" name="gtnn" id="gtnn" readonly style="background-color: #fb9997">
            </div>
            <div class="form-group">
                <label for="tu_can_tim">Tổng mảng:</label>
                <input type="text" name="tong_mang" id="tong_mang" readonly style="background-color: #fb9997">
            </div>
                <label>(Ghi chú: Các phần tử trong mảng sẽ có giá trị từ 0-20)</label>                      
        </form>
        <?php
    if (isset($_POST['tim_kiem'])) {
        $n = intval($_POST['phan_tu']);

        // Tạo mảng
        $mang = array();
        for ($i = 0; $i < $n; $i++) {
            $mang[] = rand(0, 20);
        }

        // Tính toán các giá trị
        $mang_kq = implode(', ', $mang);
        $max = max($mang);
        $min = min($mang);
        $tong = array_sum($mang);

        // Hiển thị kết quả lên các trường input
        echo '<script>';
        echo 'document.getElementById("mang").value = "' . $mang_kq . '";';
        echo 'document.getElementById("gtln").value = "' . $max . '";';
        echo 'document.getElementById("gtnn").value = "' . $min . '";';
        echo 'document.getElementById("tong_mang").value = "' . $tong . '";';
        echo '</script>';
    }
    ?>

        </body>
</html>
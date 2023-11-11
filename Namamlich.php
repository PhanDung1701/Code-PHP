<!DOCTYPE html>
<html>
<head>
    <style>
        .form-container {
            width: 350px;
            height: 150px;
            margin: 0 auto;
            border: 1px solid #ccc;
            background-color: #cce6ff;
        }
        form {

            display: flex;
                flex-direction: row;
                flex-wrap: wrap;
                justify-content: space-evenly;
                align-items: baseline;
                align-content: center;
                align-items: center;
                    }
        .input-group {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 20px;
        }
        label {
            display: inline-block;
            margin-bottom: 5px;
        }
        input[type="text"] {
            width: 100px;
        }
        button {
            width: 40px;
        }
        .button-group {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 20px;
        }
        h1 {
            color: #ffffff;
            text-align: center;
            margin: 0;
        }
        .header-div {
            background-color: blue;
            margin: 0;
            height: 40px;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <div class="header-div">
            <h1>Tính năm âm lịch</h1>
        </div>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="input-group">
                <label for="number">Năm dương lịch</label>
                <input type="text" name="number" id="number" required>
            </div>
            <div class="button-group">
            <button type="submit" name="convert">=></button>
            </div>
            <div class="input-group">
                <label for="text">Năm âm lịch</label>
                <input type="text" name="text" id="text" readonly>
            </div>
        </form>
                <?php
        if(isset($_POST['convert'])){
            $namDuongLich = $_POST['number'];
            

            $soDuCan = ($namDuongLich - 3) % 10;
            $canArr = ["Quý", "Giáp", "Ất", "Bính", "Đinh", "Mậu", "Kỷ", "Canh", "Tân", "Nhâm"];
            $can = $canArr[$soDuCan];

            // Tính chi
            $soDuChi = ($namDuongLich - 3) % 12;
            $chiArr = ["Hợi", "Tý", "Sửu", "Dần", "Mão", "Thìn", "Tỵ", "Ngọ", "Mùi", "Thân", "Dậu", "Tuất"];
            $chi = $chiArr[$soDuChi];

            // Ghép can và chi để tạo năm âm lịch
            $namAmLich = $can . " " . $chi;

            // Hiển thị kết quả lên trường "Năm âm lịch"
            echo '<script>document.getElementById("text").value = "'.$namAmLich.'";</script>';
        }
        ?>

    </div>
</body>
</html>

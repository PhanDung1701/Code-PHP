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
            <h1>ĐỌC SỐ</h1>
        </div>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
            <div class="input-group">
                <label for="number">Nhập số (0-9)</label>
                <input type="text" name="number" id="number" required>
            </div>
            <div class="button-group">
            <button type="submit" name="convert">=></button>
            </div>
            <div class="input-group">
                <label for="text">Bằng chữ:</label>
                <input type="text" name="text" id="text" readonly>
            </div>
        </form>
        <?php
        if (isset($_POST['convert'])) {
            $number = $_POST['number'];
            $text = '';

            switch ($number) {
                case 0:
                    $text = 'Không';
                    break;
                case 1:
                    $text = 'Một';
                    break;
                case 2:
                    $text = 'Hai';
                    break;
                case 3:
                    $text = 'Ba';
                    break;
                case 4:
                    $text = 'Bốn';
                    break;
                case 5:
                    $text = 'Năm';
                    break;
                case 6:
                    $text = 'Sáu';
                    break;
                case 7:
                    $text = 'Bảy';
                    break;
                case 8:
                    $text = 'Tám';
                    break;
                case 9:
                    $text = 'Chín';
                    break;
                default:
                    $text = 'Số không hợp lệ';
            }

            // Thay đổi giá trị trường nhập "text" thành chữ tương ứng
            echo '<script>document.getElementById("text").value = "' . $text . '";</script>';
        }
        ?>
    </div>
</body>
</html>

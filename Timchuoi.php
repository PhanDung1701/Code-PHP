<!DOCTYPE html>
<html>
<head>
    <style>
        .form-container {
            width: 300px;
            margin: 0 auto;
            border: 1px solid #ccc;
            background-color: #b3ffb3;
        }
        h1{
            margin: 0;
            text-align: center;
            font-style: italic;
        }
        .header {
            text-align: center;
            background-color: #ffcccc;
            color: #ff3333;
            width: 300px;
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
            width: 80px;
            text-align: left;
            margin-right: 5px;
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
            <h1>Tìm từ trong chuỗi</h1>
        </div>
        <form method="post">
            <div class="form-group">
                <label for="chuoi">Chuỗi:</label>
                <input type="text" name="chuoi" id="chuoi" required>
            </div>

            <div class="form-group">
                <label for="tu_can_tim">Từ cần tìm:</label>
                <input type="text" name="tu_can_tim" id="tu_can_tim" required>
            </div>

            <button type="submit" name="tim_kiem">Tìm kiếm</button>
        </form>

        <?php
        if (isset($_POST['tim_kiem'])) {
            $chuoi = $_POST['chuoi'];
            $tu_can_tim = $_POST['tu_can_tim'];

            if (strpos($chuoi, $tu_can_tim) !== false) {
                $vi_tri = strpos($chuoi, $tu_can_tim);
                echo '<div class="result">
                        <input type="text" id="ket_qua" value="Tìm thấy từ ' . $tu_can_tim . ' tại vị trí số ' . $vi_tri . '" readonly>
                    </div>';
            } else {
                echo '<div class="result">
                        <input type="text" id="ket_qua" value="Không tìm thấy từ trong chuỗi" readonly>
                    </div>';
            }
        }
        ?>
    </div>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <style>
        .form-container {
            width: 300px;
            margin: 0 auto;
            border: 1px solid #ccc;
            background-color: #53c68c;
        }
        h1{
            margin: 0;
            text-align: center;
            font-style: italic;
        }
        .header {
            text-align: center;
            background-color: #339966;
            color: white;
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
            width: 250px;
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
            <h1>So sánh chuỗi</h1>
        </div>
        <form method="post">
            <div class="form-group">
                <label for="chuoi">Chuỗi 1:</label>
                <input type="text" name="chuoi" id="chuoi" required>
            </div>

            <div class="form-group">
                <label for="tu_can_tim">Chuỗi 2:</label>
                <input type="text" name="tu_can_tim" id="tu_can_tim" required>
            </div>

            <button type="submit" name="tim_kiem">So sánh</button>
        </form>

        <?php
            if (isset($_POST['tim_kiem'])) {
                $chuoi1 = $_POST['chuoi'];
                $chuoi2 = $_POST['tu_can_tim'];

                $result = '';

                if ($chuoi1 == $chuoi2) {
                    $result = "Hai chuỗi giống nhau";
                } elseif (strlen($chuoi1) > strlen($chuoi2)) {
                    $result = "Chuỗi 1 dài hơn chuỗi 2";
                } else {
                    $result = "Chuỗi 1 ngắn hơn chuỗi 2";
                }

                echo '<div class="result">
                        <input type="text" id="ket_qua" value="'.$result.'" readonly>
                      </div>';
            }
        ?>
    </div>
</body>
</html>

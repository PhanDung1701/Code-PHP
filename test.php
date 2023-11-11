<!DOCTYPE html>
<html>
<head>
    <style>
        .form-container {
            width: 400px;
            margin: 0 auto;
            border: 1px solid #ccc;
            background-color: #d1ded4;
        }
        h1{
            margin: 0;
            text-align: center;
            font-style: italic;
            font-size: 20px;
        }
        .header {
            text-align: center;
            background-color: #2d9c97;
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
        margin-left: 92px;
        background-color: #8fcffd;
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
            <h1>Tìm kiếm</h1>
        </div>
        
        <form method="post">
            <div class="form-group">
                <label for="chuoi">Nhập mảng:</label>
                <input type="text" name="nhap_mang" id="nhap_mang" required>
            </div>
            <div class="form-group">
                <label for="chuoi" style="width: 140px; text-align: left; margin-right: 9px;">Nhập số cần tìm:</label>
                <input type="text" name="tim_so" id="tim_so" required style="width:70px">
            </div>

            <button type="submit" name="tim_kiem" style="border: 1px solid #000;">Tìm kiếm</button>

            <div class="form-group">
                <label for="tu_can_tim">Mảng:</label>
                <input type="text" name="mang" id="mang" readonly>
            </div>
            <div class="form-group">
                <label for="tu_can_tim">Kết quả tìm kiếm:</label>
                <input type="text" name="tim_kiem" id="tim_kiem" readonly style="background-color: #cdfcfd">
            </div> 
            <label>(Các phần tử trong mảng cách nhau bằng dấu ",")</label>                    
        </form> 
        <?php
                // PHP code for searching
                if (isset($_POST['tim_kiem'])) {
                    $input_mang = $_POST['nhap_mang'];
                    $gia_tri = $_POST['tim_so'];
                    $mang = explode(',', $input_mang);
                    $result = tim_kiem($mang, $gia_tri);
                    echo "<script>";
                    echo "document.getElementById('mang').value = '" . implode(', ', $mang) . "';";
                    echo "document.getElementById('tim_kiem').value = 'Tìm thấy $gia_tri tại vị trí thứ " . $result . "';";
                    echo "</script>";
                }
                function tim_kiem($mang, $gia_tri) {
                    for ($i = 0; $i < count($mang); $i++) {
                        if ($mang[$i] == $gia_tri) {
                            return $i;
                        }
                    }
                    return -1;
                }
                ?>
     
        </body>
</html>
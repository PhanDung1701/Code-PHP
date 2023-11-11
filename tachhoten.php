<!DOCTYPE html>
<html>
<head>
    <title>Tách họ tên</title>
    <style>
        .form-container {
            width: 300px;
            margin: 0 auto;
            border: 1px solid #ccc;
            background-color: #ccccff;
        }
        h1{
            margin: 0;
            text-align: center;
            font-style: italic;
        }
        .header {
            background-color: #4d4dff;
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
            <h1>Tách họ và tên</h1>
        </div>

        <form method="post">
            <div class="form-group">
                <label for="chuoi">Họ và tên</label>
                <input type="text" name="hoten" id="hoten" required>
            </div>

            <div class="form-group">
                <label for="tu_can_tim">Họ</label>
                <input type="text" name="ho" id="ho" readonly>
            </div>
            <div class="form-group">
                <label for="tu_can_tim">Tên đệm</label>
                <input type="text" name="ten_dem" id="ten_dem" readonly>
            </div>
            <div class="form-group">
                <label for="tu_can_tim">Tên</label>
                <input type="text" name="ten_d" id="ten_d" readonly>
            </div>

            <button type="submit" name="tach_ho">Tách họ tên</button>
        </form>
        <?php
        if(isset($_POST['tach_ho'])) {
            $hoten = $_POST['hoten'];
            $ho_ten_dem_ten = explode(' ', $hoten);
            
            if (count($ho_ten_dem_ten) === 3) {
                list($ho, $ten_dem, $ten) = $ho_ten_dem_ten;
            } elseif (count($ho_ten_dem_ten) === 2) {
                list($ho, $ten) = $ho_ten_dem_ten;
                $ten_dem = '';
            } elseif (count($ho_ten_dem_ten) === 1) {
                $ho = $ho_ten_dem_ten[0];
                $ten_dem = $ten = '';
            } else {
                $ho = $ten_dem = $ten = '';
            }
            
            echo "<script>
                    document.getElementById('ho').value = '$ho';
                    document.getElementById('ten_dem').value = '$ten_dem';
                    document.getElementById('ten_d').value = '$ten';
                </script>";
        }
    ?>
    </div>
</body>
</html>

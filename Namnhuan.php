<!DOCTYPE html>
<html>
<head>
    <style>
        .form-container {
            width: 300px;
            margin: 0 auto;
            border: 1px solid #ccc;
            background-color: #aee4ff;
        }
        h1 {
            margin: 0;
            text-align: center;
            font-style: italic;
            font-size: 20px;
        }
        .header {
            text-align: center;
            background-color: #0658ba;
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
            text-align: left;
            margin-right: 5px;
        }
        .button-container {
            display: flex;
            justify-content: center;
        }
        button[type="submit"] {
            background-color: #6acafd;
            border: 1px solid #000;
            color: #9b2264;
        }
        .form-group label[for="ket_qua"] {
        font-size: 14px;
        text-align: center;
    }
    </style>
</head>
<body>
    <div class="form-container">
        <div class="header">
            <h1>Tìm năm nhuận</h1>
        </div>
        
        <form method="post">
            <div class="form-group">
                <label for="chuoi">Năm:</label>
                <input type="text" name="chuoi" id="chuoi" required>
            </div>

            <div class="form-group">
                <label for="ket_qua"></label>
                <?php
                if (isset($_POST['tim_kiem'])) {
                    $nam = $_POST['chuoi'];
                    $kq = "";

                    function nam_nhuan($nam) {
                        if (($nam % 400 == 0) || (($nam % 4 == 0) && ($nam % 100 != 0))) {
                            return 1; // Năm nhuận
                        } else {
                            return 0; // Không phải năm nhuận
                        }
                    }

                    $nams = array();
                    foreach (range(2000, $nam) as $year) {
                        if (nam_nhuan($year)) {
                            $nams[] = $year;
                        }
                    }

                    if (!empty($nams)) {
                        $kq = "Năm " . implode(', ', $nams) . " là năm nhuận";
                    } else {
                        $kq = "Không có năm nhuận";
                    }
                    echo $kq;
                }
                ?>
            </div>

            <div class="button-container">
                <button type="submit" name="tim_kiem">Tính năm nhuận</button>
            </div>
        </form>
    </div>
</body>
</html>

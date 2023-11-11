<!DOCTYPE html>
<html>
<head>
    <style>
        .form-container {
            width: 350px;
            margin: 0 auto;
            border: 1px solid #ccc;
            text-align: center;
            background-color:  #ff4d94;
        }

        form {
            margin-top: 20px;
        }

        .input-group {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 10px;
        }
        input {
            width: 40px;
            padding: 5px;
            margin-top: 10px;
            margin-left: 10px;
        }

        button {
            color: black;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            background-color: #ff99c2;
        }

                .header-div {
            background-color: #e6005c;
            text-align: center;
            margin: 0; /* Remove any margin */
            padding: 10px 0; /* Adjust the top and bottom padding */
        }

h1 {
    color: #FFFFFF;
    margin: 0; /* Remove any margin */
    padding: 0; /* Remove any padding */
}
    </style>
</head>
<body>
<div class="form-container">
    <div class="header-div">
        <h1>Tìm thứ trong tuần</h1>
    </div>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="input-group">
            <label for="date">Ngày/Tháng/Năm:</label>
            <input type="text" name="day" id="day" placeholder="Ngày" required>
            /
            <input type="text" name="month" id="month" placeholder="Tháng" required>
            /
            <input type="text" name="year" id="year" placeholder="Năm" required>
        </div>
        <button type="submit">Tìm thứ trong tuần</button>
    </form>
    <?php
    setlocale(LC_TIME, 'vi_VN');
    $result = "";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $day = $_POST["day"];
        $month = $_POST["month"];
        $year = $_POST["year"];
    
        // Kiểm tra định dạng ngày, tháng, năm hợp lệ
        if (is_numeric($day) && is_numeric($month) && is_numeric($year)) {
            if (checkdate($month, $day, $year)) {
                $timestamp = mktime(0, 0, 0, $month, $day, $year);
                $dayOfWeek = date("N", $timestamp);
    
                switch ($dayOfWeek) {
                    case 1:
                        $result = "Ngày $day/$month/$year là Chủ Nhật.";
                        break;
                    case 2:
                        $result = "Ngày $day/$month/$year là Thứ Hai.";
                        break;
                    case 3:
                        $result = "Ngày $day/$month/$year là Thứ Ba.";
                        break;
                    case 4:
                        $result = "Ngày $day/$month/$year là Thứ Tư.";
                        break;
                    case 5:
                        $result = "Ngày $day/$month/$year là Thứ Năm.";
                        break;
                    case 6:
                        $result = "Ngày $day/$month/$year là Thứ Sáu.";
                        break;
                    case 7:
                        $result = "Ngày $day/$month/$year là Thứ Bảy.";
                        break;
                }
            } else {
                $result = "Ngày không hợp lệ.";
            }
        } else {
            $result = "Định dạng ngày, tháng, năm không hợp lệ. Sử dụng số.";
        }
    }
    
    ?>
    <div class="input-group">
        <input type="text" id="result" readonly value="<?php echo $result; ?>"style="width: 250px; background-color:#ffff66">
    </div>
</div>

</body>
</html>

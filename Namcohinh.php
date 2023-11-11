<!DOCTYPE html>
<html>
<head>
    <style>
        .form-container {
            width: 350px;
            height: 210px;
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
        #image-container img {
            max-width: 70px; /* Adjust the width as needed */
            max-height: 80px; /* Adjust the height as needed */
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
            
            <div id="image-container">
            <!-- The image will be displayed here -->
        </div>
        </form>
       
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["convert"])) {
            $nam = intval($_POST["number"]);

            $mang_can = array("Quý", "Giáp", "Ất", "Bính", "Đinh", "Mậu", "Kỷ", "Canh", "Tân", "Nhâm");
            $mang_chi = array("Hợi", "Tý", "Sửu", "Dần", "Mão", "Thìn", "Tỵ", "Ngọ", "Mùi", "Thân", "Dậu", "Tuất");
            $mang_hinh = array("hoi.jpg", "ty.jpg", "suu.jpg", "dan.jpg", "mao.jpg", "thin.gif", "ran.jpg", "ngo.jpg", "mui.jpg", "than.gif", "dau.jpg", "tuat.jpg");
            $nam = $nam - 3;
            $can = $nam % 10;
            $chi = $nam % 12;
            $nam_al = $mang_can[$can] . " " . $mang_chi[$chi];
            $hinh = $mang_hinh[$chi];
            echo "<script>
                document.getElementById('text').value = '$nam_al';
                document.getElementById('image-container').innerHTML = '<img src=\"12con_giap/$hinh\" alt=\"$nam_al\" />';
            </script>";
        }
        ?>
    </div>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <style>
        .form-container {
            width: 300px;
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
            background-color: #319a96;
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
            width: 100px;
            text-align: left;
            margin-right: 5px;
        }
        button[type="submit"] {
        margin-left: 26px;
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
            <h1>Nhập và tính trên dãy số</h1>
        </div>
        
        <form method="post">
            <div class="form-group">
                <label for="chuoi">Nhập dãy số:</label>
                <input type="text" name="chuoi" id="chuoi" required>
            </div>

            <button type="submit" name="tim_kiem" style="border: 1px solid #000;">Tổng dãy số</button>

            <div class="form-group">
                <label for="tu_can_tim">Tổng dãy số:</label>
                <input type="text" name="tu_can_tim" id="tu_can_tim" readonly style="background-color: #ccfe9a">
            </div>
            <?php
                if (isset($_POST['tim_kiem'])) {
                    $input = $_POST['chuoi'];

                    // Replace any commas with spaces to ensure consistent delimiters
                    $input = str_replace(',', ' ', $input);

                    // Split the input string into an array using space as the delimiter
                    $numberArray = explode(' ', $input);

                    // Initialize a variable to store the sum
                    $tong = 0;

                    // Iterate through the array and calculate the sum
                    foreach ($numberArray as $number) {
                        $tong += is_numeric($number) ? (int)$number : 0;
                    }

                    // Display the sum in the "tu_can_tim" input field
                    echo '<script>
                            document.getElementById("tu_can_tim").value = ' . $tong . ';
                        </script>';
                }
                ?>

        </form>
        </body>
</html>
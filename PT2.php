<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giải Phương Trình Bậc 2</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
        }
        h3{
            text-align: center;
        }
        label {
            font-size: 16px;
            color: #555;
        }
        input[type="number"] {
            width: calc(100% - 22px);
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ddd;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007BFF;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .result {
            margin-top: 20px;
            font-size: 18px;
            color: #333;
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Giải Phương Trình Bậc 2</h2>
        <h3>ax<sup>2</sup> + bx + c = 0</h3>

        <form method="post">
            <label for="a">Nhập a:</label>
            <input type="number" step="any" name="a" id="a" required>

            <label for="b">Nhập b:</label>
            <input type="number" step="any" name="b" id="b" required>

            <label for="c">Nhập c:</label>
            <input type="number" step="any" name="c" id="c" required>

            <input type="submit" name="solve" value="SUBMIT">
        </form>

        <?php
        function giaiPT2($a, $b, $c) {
            if ($a == 0) {
                if ($b == 0) {
                    return ($c == 0) ? "Phương trình vô số nghiệm." : "Phương trình vô nghiệm.";
                } else {
                    $x = -$c / $b;
                    return "Phương trình có một nghiệm: x = $x";
                }
            } else {
                $delta = $b * $b - 4 * $a * $c;

                if ($delta < 0) {
                    return "Phương trình vô nghiệm.";
                } elseif ($delta == 0) {
                    $x = -$b / (2 * $a);
                    return "Phương trình có nghiệm kép:<br>x1 = x2 = $x";
                } else {
                    $x1 = (-$b + sqrt($delta)) / (2 * $a);
                    $x2 = (-$b - sqrt($delta)) / (2 * $a);
                    return "Phương trình có hai nghiệm phân biệt:<br>x1 = $x1<br>x2 = $x2";
                }
            }
        }

        if (isset($_POST['solve'])) {
            $a = $_POST['a'];
            $b = $_POST['b'];
            $c = $_POST['c'];

            echo '<div class="result">';
            echo giaiPT2($a, $b, $c);
            echo '</div>';
        }
        ?>

    </div>
</body>
</html>

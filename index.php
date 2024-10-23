<!DOCTYPE html>
<html>
<head>
    <title>Decimal Conversion</title>
</head>
<body>
    <h1>Decimal to Binary, Octal, and Hexadecimal Conversion</h1>
    <form method="POST" action="">
        Enter a Decimal Number: <input type="number" name="decimal" required>
        <input type="submit" value="Convert">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $decimal = $_POST['decimal'];

        function toBinary($num) {
            $binary = '';
            while ($num > 0) {
                $binary = ($num % 2) . $binary;
                $num = (int)($num / 2);
            }
            return $binary;
        }

        function toOctal($num) {
            $octal = '';
            while ($num > 0) {
                $octal = ($num % 8) . $octal;
                $num = (int)($num / 8);
            }
            return $octal;
        }

        function toHexadecimal($num) {
            $hexChars = '0123456789ABCDEF';
            $hex = '';
            while ($num > 0) {
                $hex = $hexChars[$num % 16] . $hex;
                $num = (int)($num / 16);
            }
            return $hex;
        }

        echo "Binary: " . toBinary($decimal) . "<br>";
        echo "Octal: " . toOctal($decimal) . "<br>";
        echo "Hexadecimal: " . toHexadecimal($decimal) . "<br>";
    }
    ?>
</body>
</html>

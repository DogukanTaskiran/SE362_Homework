<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>  
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <label>Enter a number between 0 and 999.999.999.999 →</label>
            <input type="text" name="number" value="<?php echo isset($_POST['number']) ? $_POST['number'] : ''; ?>" />
            <input type="submit" value="Convert" />
        </form>
        <?php
        function numberToTurkishWords($number) {
            $ones = ['', 'Bir', 'İki', 'Üç', 'Dört', 'Beş', 'Altı', 'Yedi', 'Sekiz', 'Dokuz'];
            $tens = ['', 'On', 'Yirmi', 'Otuz', 'Kırk', 'Elli', 'Altmış', 'Yetmiş', 'Seksen', 'Doksan'];


            if ($number == 0) {
                return 'Sıfır';
            }

            $words = '';

            if ($number >= 1000000000) {
                $words .= numberToTurkishWords((int)($number / 1000000000)) . ' Milyar ';
                $number %= 1000000000;
            }

            if ($number >= 1000000) {
                $words .= numberToTurkishWords((int)($number / 1000000)) . ' Milyon ';
                $number %= 1000000;
            }

            if ($number >= 1000) {
                $words .= numberToTurkishWords((int)($number / 1000)) . ' Bin ';
                $number %= 1000;
            }

            if ($number >= 100) {
                $hundreds = (int)($number / 100);
                $words .= $ones[$hundreds] . ' Yüz ';
                $number %= 100;
            }

            if ($number < 10) {
                if ($number != 1) {
                    $words .= $ones[$number];
                }
            } else {
                $tensDigit = (int)($number / 10);
                $onesDigit = $number % 10;

                if ($tensDigit == 1) {
                    $words .= $tens[$tensDigit] . ' ' . $ones[$onesDigit];
                } else {
                    $words .= $tens[$tensDigit];
                    if ($onesDigit != 0) {
                        $words .= ' ' . $ones[$onesDigit];
                    }
                }
            }

            return $words;
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $number = $_POST["number"];

            if (!is_numeric($number)) {
                exit("Enter a number.");
            }

            $number = (float)$number;

            if ($number > 999999999999 || $number < 0) {
                exit("Out of range. Enter a number between 0 and 999.999.999.999");
            }

            $words = numberToTurkishWords($number);
            echo "Turkish → " . $words;
        }
        ?>
    </body>
</html>

<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <!-- PHP part -->
        <?php
            echo "<h1>"."Homework1_7"."</h1>";

            function fibonacci($n) {
                if ($n <= 1) {
                    return $n;
                } else {
                    return fibonacci($n - 1) + fibonacci($n - 2);
                }
            }
            
            if (isset($_POST['number'])) {
                $input = $_POST['number'];
                if (is_numeric($input) && $input >= 0) {
                    $result = fibonacci($input);
                    echo "$input's Fibonacci number is → $result";
                } else {
                    echo "Please enter a non-negative integer.";
                }
            }
        ?>

        <!-- HTML part -->
        <form method="post" action="">
        Enter a integer →
        <input type="text" name="number">
        <button type="submit">Calculate</button>

    </form>
    </body>
</html>
<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <?php
            echo "<h1>"."Homework1_8"."</h1>";
            echo "<h2>"."Digital lotto"."</h2>";
        function generateRandomNumbers() {
            $randomNumbers = [];

            // 6 Random numbers between 1-49 which are non-repeated
            while (count($randomNumbers) < 6) {
                $num = rand(1, 100);
                if (!in_array($num, $randomNumbers)) {
                    $randomNumbers[] = $num;
                }
            }

            return $randomNumbers;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            // Calling function randomNumbers
            $randomNumbers = generateRandomNumbers();

            // Input from user
            $userNumbers = [];
            for ($i = 1; $i <= 6; $i++) {
                $userNumbers[] = $_POST['number' . $i];
            }

            // Checking
            $matchCount = count(array_intersect($userNumbers, $randomNumbers));

            // Results
            echo "<p>Your numbers → " . implode(', ', $userNumbers) . "</p>";
            echo "<p>Random numbers → " . implode(', ', $randomNumbers) . "</p>";
            echo "<p>Matching numbers → $matchCount</p>";
        }
        ?>

        <!-- Input numbers from user -->
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="number1">Number 1 (1-100) →</label>
            <input type="number" name="number1" min="1" max="100" required><br>
            
            <label for="number2">Number 2 (1-100) →</label>
            <input type="number" name="number2" min="1" max="100" required><br>
            
            <label for="number3">Number 3 (1-100) →</label>
            <input type="number" name="number3" min="1" max="100" required><br>
            
            <label for="number4">Number 4 (1-100) →</label>
            <input type="number" name="number4" min="1" max="100" required><br>
            
            <label for="number5">Number 5 (1-100) →</label>
            <input type="number" name="number5" min="1" max="100" required><br>
            
            <label for="number6">Number 6 (1-100) →</label>
            <input type="number" name="number6" min="1" max="100" required><br>

            <button type="submit">Submit</button>
        </form>   
    </body>
</html>
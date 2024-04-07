<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <?php
            echo "<h1>"."Homework1_4"."</h1>";

            function genNumbers() {
                $numbers = array();
                
                while (count($numbers) < 6) {
                    $randomNumber = rand(1, 49);
                    if (!in_array($randomNumber, $numbers)) {
                        $numbers[] = $randomNumber;
                    }
                }
            
                return $numbers;
            }
            
            // Example
            $Numbers = genNumbers();
            echo "Random 6 numbers → " . implode(", ", $Numbers);
        
        ?>
            
    </body>
</html>
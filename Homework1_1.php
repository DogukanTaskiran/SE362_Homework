<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <?php
            echo "<h1>"."Homework1_1"."</h1>";
            function numOfOdd($array) {
                $count = 0;

                for ($i = 0; $i < count($array); $i++) {
                    $number = $array[$i]; 

                    if ($number % 2 !== 0) {
                        $count++; 
                    }
                }

                return $count;
            }

            // Example
            $array = [12,56,17,84,645,188,156];
      
            echo "Array elements: ";
    
            foreach ($array as $value) {
                echo "<li>$value</li>";
            }

            echo "<br>";
            echo "Count of odd numbers in the array → " . numOfOdd($array); 
        ?>
    </body>
</html>
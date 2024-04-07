<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <?php
            echo "<h1>"."Homework1_2"."</h1>";
            function reverseArray($array) {
            
                for ($i = count($array) - 1; $i >= 0; $i--) {
                    $reversedArray[] = $array[$i];
                }
            
                return $reversedArray;
            }
            
            // Example
            $Array = [12,56,17,84,645,189,156];
            $Reverse = reverseArray($Array);
      
            echo "Array → " . implode(", ", $Array) . "\n";
            echo "<br>";
            echo "Reversed → " . implode(", ", $Reverse) . "\n";

        ?>
    </body>
</html>
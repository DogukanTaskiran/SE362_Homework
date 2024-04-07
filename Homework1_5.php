<!DOCTYPE html>
<html>
    <head>
        <!-- CSS Part -->
        <style>
            table, th, td {
                border: 1px solid black;
                padding: 8px;
                text-align: center;
            }
        </style>
    </head>
    <body>
        <!-- PHP part -->
        <?php
            echo "<h1>"."Homework1_5"."</h1>";
       
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                // User inputs
                $numRows = isset($_POST['rows']) ? (int)$_POST['rows'] : 0;
                $numCols = isset($_POST['columns']) ? (int)$_POST['columns'] : 0;

                // Generating table
                if ($numRows > 0 && $numCols > 0) {
                    echo '<h2>Table</h2>';
                    echo '<table>';

                    // Inner loop. First rows then columns
                    for ($i = 0; $i < $numRows; $i++) {
                        echo '<tr>';
                        
                        for ($j = 0; $j < $numCols; $j++) {
                            // Background part. Via checking even or odd
                            $backgroundColor = ($j % 2 == 0) ? '#F5E0DB' : '#EFA99A';
                            echo '<td style="background-color: ' . $backgroundColor . ';">' . ($i * $numCols + $j) . '</td>';
                        }

                        echo '</tr>';
                    }

                    echo '</table>';
                } else {   

                }
            }
        ?>
        <!-- HTML part -->
        <h2>Create a Table</h2>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <label for="rows">Enter number of rows → </label>
                <input type="number" name="rows" min="1" required><br><br>
                <label for="columns">Enter number of columns → </label>
                <input type="number" name="columns" min="1" required><br><br>
                <input type="submit" value="Create Table">
            </form>
        </body>
</html>

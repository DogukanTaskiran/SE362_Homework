<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>

        <?php
            echo "<h1>"."Homework1_3"."</h1>";

            if (isset($_POST['submit'])) {

                $start = intval($_POST['start']);
                $end = intval($_POST['end']);

                if ($end >= $start) {
                    echo '<h3>Generated Combobox between ' . $start . ' and ' . $end . '</h3>';
                    echo '<select>';

                    for ($i = $start; $i <= $end; $i++) {
                        echo '<option value="' . $i . '">' . $i . '</option>';
                    }

                    echo '</select>';
                } else {
                    echo '<p style="color: red;">2nd number must be greater than or equal to 1st number.</p>';
                }
            }
        ?>

        <!-- HTML part -->
        <h2>Choose a Number Range</h2>

        <form method="post">
            <label for="start">Start:</label>
            <input type="number" id="start" name="start" required>
            <br><br>
            <label for="end">End:</label>
            <input type="number" id="end" name="end" required>
            <br><br>
            <input type="submit" name="submit" value="Combobox">
        </form>

    </body>
</html>

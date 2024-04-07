<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <!-- PHP part -->
        <?php
            echo "<h1>"."Homework1_6"."</h1>";

            if (isset($_POST['generate'])) {
                if (isset($_POST['input_text']) && isset($_POST['style'])) {
                    $input_text = $_POST['input_text'];
                    $style = $_POST['style'];
                    $size = strlen($input_text);

                    
                    switch ($style) {
                        case 'Right':
                            for ($i = 1; $i <= $size; $i++) {
                                echo substr($input_text, 0, $i) . "<br>";
                            }
                            break;
                        case 'Left':
                            for ($i = $size; $i >= 1; $i--) {
                                echo substr($input_text, 0, $i) . "<br>";
                            }
                            break;
                        case 'Center':
                            for ($i = 1; $i <= $size; $i++) {
                                $spaces = str_repeat("&nbsp;", $size - $i);
                                $chars = substr($input_text, 0, $i);
                                echo $spaces . $chars . "<br>";
                            }
                            break;
                        default:
                            echo "Invalid pyramid style.";
                            break;
                    }
                } else {
                    echo "Please fill out all fields.";
                }
            }
        ?>

        <br>

        <!-- HTML part -->
        <form method="post">
            <label for="input_text">Text → </label>
            <input type="text" id="input_text" name="input_text" required><br><br>

            <label for="style">Pyramid Style → </label>
            <select id="style" name="style">
                <option value="Right">Right</option>
                <option value="Left">Left</option>
                <option value="Center">Center</option>
            </select><br><br>

            <input type="submit" name="generate" value="Generate Pyramid">
        </form>

        <br>

    </body>
</html>

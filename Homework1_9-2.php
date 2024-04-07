<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['numOfStd'])) {
                $numOfStd = $_POST['numOfStd'];
            ?>
                <h2>Enter Students' Grades</h2>
                <form action="Homework1_9-3.php" method="post">
                    <?php for ($i = 1; $i <= $numOfStd; $i++) { ?>
                        <label for="studentName<?= $i ?>">Student Name <?= $i ?></label>
                        <input type="text" id="studentName<?= $i ?>" name="studentName[]" required>
                        <label for="midterm<?= $i ?>">Midterm Grade</label>
                        <select id="midterm<?= $i ?>" name="midterm[]">
                            <?php for ($grade = 0; $grade <= 100; $grade++) { ?>
                                <option value="<?= $grade ?>"><?= $grade ?></option>
                            <?php } ?>
                        </select>
                        <label for="final<?= $i ?>">Final Grade</label>
                        <select id="final<?= $i ?>" name="final[]">
                            <?php for ($grade = 0; $grade <= 100; $grade++) { ?>
                                <option value="<?= $grade ?>"><?= $grade ?></option>
                            <?php } ?>
                        </select>
                        <br><br>
                    <?php } ?>
                    <button type="submit">Calculate</button>
                </form>
        <?php } else {
                header("Location → Homework1_9-1.html");
            exit();
        }
        ?>
    </body>
</html>

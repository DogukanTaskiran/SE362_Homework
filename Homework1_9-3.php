<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['studentName'])) {
                $studentNames = $_POST['studentName'];
                $midterm_grades = $_POST['midterm'];
                $final_grades = $_POST['final'];

                // Calculate average
                $numOfStd = count($studentNames);
                $midterm_average = array_sum($midterm_grades) / $numOfStd;
                $final_average = array_sum($final_grades) / $numOfStd;

                // Find max and min grades
                $max_midterm_grade = max($midterm_grades);
                $min_midterm_grade = min($midterm_grades);
                $max_final_grade = max($final_grades);
                $min_final_grade = min($final_grades);
        ?>
            <h2>Students' Grades Summary →</h2>
            <p>Midterm Average Grade → <?= $midterm_average ?></p>
            <p>Final Average Grade → <?= $final_average ?></p>
            <p>Maximum Midterm Grade → <?= $max_midterm_grade ?></p>
            <p>Minimum Midterm Grade → <?= $min_midterm_grade ?></p>
            <p>Maximum Final Grade → <?= $max_final_grade ?></p>
            <p>Minimum Final Grade → <?= $min_final_grade ?></p>
            
        <?php } else {
                header("Location → Homework1_9-1.html");
                exit();
            }
        ?>
    </body>
</html>

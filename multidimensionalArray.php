<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Multidimensional Array</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

    <?php
    include 'header.php';
    ?>

    <div class="wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="card">
                        <div class="card-header">Multidimensional Array <code>three students Each student has grades for three subjects: Math, English, and Science</code></div>
                        <div class="card-body">
                            <?php
                                // Create a multidimensional array with student grades
                                $studentGrades = array(
                                    'Student1' => array('Math' => 85, 'English' => 92, 'Science' => 78),
                                    'Student2' => array('Math' => 88, 'English' => 95, 'Science' => 90),
                                    'Student3' => array('Math' => 76, 'English' => 82, 'Science' => 88)
                                );
                            ?>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Student Name</th>
                                        <th scope="col">Grades</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($studentGrades as $student => $grades) { 
                                        $total = array_sum($grades); // Calculate the total grades
                                        $count = count($grades); // Count the number of subjects
                                        $average = $total / $count; // Calculate the average grade
                                    ?>
                                        
                                        <tr>
                                            <td><?php echo $student; ?></td>
                                            <td><?php echo $average; ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
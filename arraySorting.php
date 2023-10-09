<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Array Sorting</title>
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
                        <div class="card-header">Array Sorting <code>following values: 85, 92, 78, 88, 95</code></div>
                        <div class="card-body">
                            <?php
                                function sortGradesDescending($grades) {
                                    // Sort the grades in descending order
                                    rsort($grades);

                                    // Print the sorted grades as an array
                                    print_r($grades);
                                }

                                // Create an array with the given values
                                $grades = array(85, 92, 78, 88, 95);

                                // Call the function with the grades array
                                sortGradesDescending($grades);
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
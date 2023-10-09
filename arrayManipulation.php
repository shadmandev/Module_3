<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Array Manipulation</title>
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
                        <div class="card-header">Array Manipulation <code>containing the numbers 1 to 10</code></div>
                        <div class="card-body">
                            <?php
                                function removeEvenNumbers($numbers) {
                                    // Initialize an empty array to store odd numbers
                                    $oddNumbers = array();

                                    // Iterate through the numbers array
                                    foreach ($numbers as $number) {
                                        // Check if the number is odd (not divisible by 2)
                                        if ($number % 2 != 0) {
                                            // Add odd numbers to the new array
                                            $oddNumbers[] = $number;
                                        }
                                    }

                                    // Print the resulting array
                                    print_r($oddNumbers);
                                }

                                // Create an array containing numbers from 1 to 10
                                $numbers = range(1, 10);

                                // Call the function with the numbers array
                                removeEvenNumbers($numbers);
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
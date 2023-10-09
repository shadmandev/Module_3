<?php 
    function generatePassword($length) {
        // Define character sets for different types of characters
        $lowercaseChars = 'abcdefghijklmnopqrstuvwxyz';
        $uppercaseChars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $numberChars = '0123456789';
        $specialChars = '!@#$%^&*()_+';

        // Combine all character sets
        $allChars = $lowercaseChars . $uppercaseChars . $numberChars . $specialChars;

        // Initialize the password as an empty string
        $password = '';

        // Randomly select characters from the combined set to build the password
        for ($i = 0; $i < $length; $i++) {
            $randomIndex = mt_rand(0, strlen($allChars) - 1);
            $password .= $allChars[$randomIndex];
        }

        return $password;
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the user input from the form
        $length = $_POST["length"];

        $password = generatePassword($length);
    }else{
        $password = generatePassword(12);
    }
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Password Generator</title>
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
                        <div class="card-header">Password Generator</div>
                        <div class="card-body">
                            <form method="post" action="">
                                <div class="mb-3">
                                    <label for="length" class="form-label">Enter Length</label>
                                    <input type="number" class="form-control" id="length" name="length">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                            <div class="alert alert-primary mt-3 text-center" role="alert">
                                <?php echo $password;  ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
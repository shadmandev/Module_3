<?php
// Task 1: String Manipulation

// Original text
$orignal_text = "The quick brown fox jumps over the lazy dog.";
function modifyText($text) {
    // Convert the string to all lowercase
    $lowercaseText = strtolower($text);
    
    // Replace "brown" with "red" in the string
    $modifiedText = str_replace("brown", "red", $lowercaseText);
    
    // Print the modified text
    return $modifiedText;
}
// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the user input from the form
    $userInput = $_POST["text"];

    if($userInput != NULL){
        // Call the function to perform string manipulation
        $modifiedText = modifyText($userInput);
    }else{
        // Call the function to perform string manipulation
        $modifiedText = modifyText($orignal_text);
    }    
}else{
    // Call the function to perform string manipulation
    $modifiedText = modifyText($orignal_text);
}

?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>String Manipulation</title>
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
                        <div class="card-body">
                            <div class="alert alert-secondary mt-3 text-center" role="alert">
                            Replace "brown" with "red" in the string
                            </div>
                            <form method="post" action="">
                                <div class="mb-3">
                                    <label for="text" class="form-label">Enter Text</label>
                                    <input type="text" class="form-control" id="text" name="text">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                            <div class="alert alert-primary mt-3 text-center" role="alert">
                                <?php echo $modifiedText;  ?>
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
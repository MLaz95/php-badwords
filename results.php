<?php

$text = $_GET['text'];
$badWord = $_GET['bad-word'];
$redactedText = str_ireplace($badWord, "***", $text);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Result</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body data-bs-theme="dark">

    <div class="container d-flex justify-content-between text-center mt-5">
        <div>
            <div class="border">
                <h2>Here is the original text</h2>
                <p class="text-start px-3">
                    <?php echo $text ?>
                </p>
            </div>
            <div class="py-2">Your text is <?php echo strlen($text) ?> characters long</div>
        </div>
        <div>
            <div class="border">
                <h2>Here is the censored text</h2>
                <p class="text-start px-3">
                    <?php echo $redactedText ?>
                </p>
            </div>
            <div class="py-2">The censored text is <?php echo strlen($redactedText) ?> characters long</div>
        </div>
    </div>

    <div class="text-center py-3">
        <a href="form.php">Back to Form</a>
    </div>



    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
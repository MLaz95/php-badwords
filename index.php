<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form - PHP</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body data-bs-theme="dark">
    <form class="container mt-5 d-flex flex-column gap-3 align-items-center" action="results.php">
        <h1 class="text-center">Insert some text and a "bad word" you want me to censor</h1>
        <div class="input-group">
            <span class="input-group-text">Text</span>
            <textarea class="form-control" aria-label="Text" name="text" rows="10"></textarea>
        </div>
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Bad Word</span>
            <input type="text" class="form-control" aria-label="Badword" aria-describedby="basic-addon1" name="bad-word">
        </div>
        <input type="submit" value="Confirm" class="col-1">

    </form>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
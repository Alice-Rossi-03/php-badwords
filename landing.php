<?php 
$paragraph_text=$_POST['paragraph']; 
$badword_text=$_POST['badword']; 
$shorter_paragraph= str_replace($badword_text, '***', $paragraph_text);
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords 2/2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1 class="my-2 text-center">The Result</h1>
    <div class="mx-auto my-3 w-50 d-flex flex-column gap-1 text-center">
        <h4 class="text-warning-emphasis">Text With Curse Words:</h4>
        <p><?php echo $paragraph_text; ?></p>
        <h6 class="text-warning">Length:</h6>
        <span><?php echo strlen($paragraph_text); ?></span>
        <h4 class="text-warning-emphasis mt-4">Text With Curse Words:</h4>
        <p><?php echo $shorter_paragraph; ?></p>
        <h6 class="text-warning">Length:</h6>
        <span><?php echo strlen($shorter_paragraph); ?></span>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>

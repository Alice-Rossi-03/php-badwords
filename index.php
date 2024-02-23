<!-- Descrizione:

Creare un form PHP che permetta di inviare due campi: 
    - un paragrafo 
    - una parola da censurare.

Gestire il tutto con due file diversi.

Il primo file dovrà permettere all’utente di inserire i dati e inviare la richiesta al server.

Il secondo file riceverà la richiesta ed eseguirà queste operazioni:
- stampare a schermo il paragrafo e la sua lunghezza
- stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare -->

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Badwords 1/2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1 class="my-4 text-center">Write Down Here:</h1>
    <div class="mx-auto my-3 w-50">
        <form action="landing.php" method="POST" class="d-flex flex-column gap-1">
            <h4 class="text-warning">Write a paragraph:</h4>
            <textarea name="paragraph"></textarea>
            <h4 class="text-warning mt-4">Write a curse word:</h4>
            <input type="text" name="badword">
            <button type="submit" class="btn btn-primary mt-4">SEND</button>
        </form>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>prenota un tavolo</title>
    
</head>
<body>
    <?php
        if(isset($_POST["prenota"])){
            echo "<h2> prenotazione avvenuta con successo <h2>";
        }
    ?>
    <form action="prenotazione.php" method="POST">

        <label for="nome_cognome_in"> nome e cognome: </label>
        <input type="text" id="nome_cognome_in" name="nome_cognome_in">
        <br>

        <label for="nummber_in"> numero di telefono: </label>
        <input type="number" id="number_in" name="number_in">
        <br>

        <label for="posti_in"> numero di persone: </label>
        <input type="number" id="posti_in" name="posti_in">
        <br>

        <label for="data_in"> data: </label>
        <input type="datetime-local" id="data_in" name="data_in">
        <br>

        <input type="submit" value="prenota">
    </form>
</body>
</html>
<?php
    //Funzione
    function generaPassword($length) {
        $caratteri = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*_+-=;:,.<>?';
        $password = '';
        $caratteriLunghezza = strlen($caratteri);
        
        for ($i = 0; $i < $length; $i++) {
            $password .= $caratteri[rand(0, $caratteriLunghezza - 1)];
        }

        return $password;
    }

    //stampa password
    if (isset($_GET['length'])) {
        $lunghezza = intval($_GET['length']);
        if ($lunghezza > 0) {
            $passwordGenerata = generaPassword($lunghezza);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Strong Password Generator
    </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    
    <div class='col text-center'>
        <h1>
            PHP Strong Password Generator
        </h1>
    </div>

        <!-- Form -->
        <div>
            <form action='index.php' method="GET">
            <label for="length">Lunghezza password:</label>
            <input type="number" id="length" name="length" placeholder='Scegli il numero di carat.' min="1" required>
            <button type="submit" class="btn btn-dark">Invio</button>
            </form>
        </div>

        <div>
            <p>
                Password generata:
                <strong>
                    <?php
                        echo $passwordGenerata;
                    ?>
                </strong>
            </p>
        </div>

        <?php

        ?>
    
</body>
</html>
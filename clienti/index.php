<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clienti Database</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>
        Clienti
    </h1>
    <?php
        //uso della libreria
        require_once '../librerie/library.php';

        //inizializza la connessione al database tramite funzione contenuta nella libreria libreria
        connectDatabase('clienti');
        
        //esegui la query che legge la tabella clienti
        $query = 'SELECT * FROM clienti';

        $result = mysqli_query($mysqli, $query);

        //ciclo sulle righe restituite e stampo il valore di ogni riga
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<div><h2>' . $row['id'] . '</h2><p>' . $row['nome'] . ' ' . $row['cognome'] . '</p></div>';
        }
    ?>
</body>
</html>
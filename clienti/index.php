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
        $dbConnection = connectDatabase('cescot');

        //esegui la query che legge la tabella clienti
        $query = 'SELECT id, nome, cognome FROM clienti';
        $result = mysqli_query($dbConnection, $query);

        //ciclo sulle righe restituite e stampo il valore di ogni riga
        while ($row = mysqli_fetch_assoc($result)) {
            $clientiDivContent = '<h2>' . $row['id'] . '</h2><p>' . $row['nome'] . ' ' . $row['cognome'] . '</p>';
            printDiv($clientiDivContent, 'cliente');
        }
    ?>
</body>
</html>
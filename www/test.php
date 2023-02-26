<?php
    echo "<h1>Hello world!</h1>";

    $hostname = 'db';
    $username ='root';
    $password ='1234';
    $dbname = 'mysql';

    try {
        $conn = new mysqli($hostname, $username, $password, $dbname);

        if($conn) {
            print("La connessione al database con msqli è stata eseguita correttamente.<br>");
        }

        print("<h1>Test query</h1>");
        $user = $conn->query("SELECT User FROM user");
        echo "<h2> Elenco degli utenti:</h2>";
        while($record = $user->fetch_assoc()) {
            $u = $record['User'];
            echo "$u <br>";
        }

    } catch (mysqli_sql_exception $e) {
        echo $e->getMessage();
        echo "<br>";
        echo $e->getTraceAsString();
        exit;
    }
    print("<h1>Versione PHP e configurazione</h1>");
    phpinfo();
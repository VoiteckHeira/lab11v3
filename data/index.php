<!DOCTYPE html>
<html>

<head>
    <title>Moja strona</title>
</head>

<body>
    <h1>Informacje o bazie danych</h1>
    <?php
    echo "istny dramat debila";
    echo "dupa";
    /*// Dane do połączenia z bazą danych
    $hostname = 'localhost';
    $username = 'root';
    $password = 'root';
    $database = 'testbaza';

    // Połączenie z bazą danych
    $conn = mysqli_connect($hostname, $username, $password, $database);

    // Sprawdzenie czy udało się połączyć z bazą danych
    if (!$conn) {
        die("Błąd połączenia z bazą danych: " . mysqli_connect_error());
    }

    // Wykonanie zapytania do bazy danych
    $result = mysqli_query($conn, "SELECT DATABASE() as db");

    // Sprawdzenie czy udało się pobrać informacje
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $dbName = $row['db'];
        echo "<p>Aktualnie podłączony do bazy danych: $dbName</p>";
    } else {
        echo "Błąd zapytania do bazy danych: " . mysqli_error($conn);
    }

    // Zamknięcie połączenia
    mysqli_close($conn);
    */?>
    <hr />
    <br />
    <h3>Imię i nazwisko autora</h3>
    <p>Imię: Wojciech</p>
    <p>Nazwisko: Dziedzic</p>

</body>

</html>
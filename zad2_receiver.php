<?php
require_once dirname(__FILE__).'/config.php';

if ($_SERVER['REQUEST_METHOD'] != 'GET') {
    echo 'Proszę wejść na stronę metodą GET';
} elseif ($_SERVER['REQUEST_METHOD'] == 'GET') {
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DBNAME);
    if ($_GET['userId'] == '') {
        echo 'Brak przesłania wymaganych danych GET';
    } elseif ($_GET['userId'] != '') {
        $id = $_GET['userId'];
        $sql = "select * from Messages";
        $result = $conn->query($sql);
        
    if ($result->num_rows >= 1) {
    while($row = $result->fetch_assoc()) {
        if ($id == $row["user_id"]) {
        echo "id: " . $row["user_id"] . " wiadomosc: " . $row["message"] . '</br>';
    }  
    }
    } elseif ($result->num_rows == null) {
    echo "Brak wiadomości dla danego użytkownika";
}
   $conn->close();
    
}
}

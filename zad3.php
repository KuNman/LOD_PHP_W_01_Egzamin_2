
<form action="#" method="POST">
    <label>Nazwa:
        <input type="text" name="name">
    </label>
    <label>Cena:
        <input type="number" name="price">
    </label>
    <label>Opis:
        <input type="text" name="description">
    </label>
    <input type="submit" value="wyślij">
</form>
<br>

<?php
require_once dirname(__FILE__).'/config.php';

if (isset($_POST['name']) && isset($_POST['description']) && isset($_POST['price'])) {
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DBNAME);
        
        
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        
        $sql = "Insert into Items (name, description, price) values ($name, $description, $price)";
        $conn->query($sql);
        $last = $conn->insert_id;
        
        echo "Do bazy danych został dodany nowy produkt o id : $last";
        $conn->close();

} else {
    echo 'Brak przesłania wymaganych danych POST';
}



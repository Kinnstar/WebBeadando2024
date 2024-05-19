<!DOCTYPE html>
<?php if(isset($_SESSION['login'])) { ?>
<html>
    <head>
    <title>Adatok listázása</title>
    </head>
    <body>
    <h2>Panaszok listája</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Email</th>
        <th>Név</th>
        <th>Telefonszám</th>
        <th>Megjegyzés</th>
        <th>Küldés ideje</th>
    </tr>
    
<?php 
define('DB_PASS', 'Webbeadando2024');
define('DB_NAME', 'vhpet03');
try {
    // Kapcsolódás
    $dbh = new PDO('mysql:host=localhost;dbname='.DB_NAME.';charset=utf8', DB_NAME, DB_PASS);

    $sql = "SELECT id, email, nev, teloszam, megjegyzes,ido FROM kapcsolat ORDER BY ido DESC;";
    $stmt = $dbh->query($sql);

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["nev"] . "</td>";
        echo "<td>" . $row["teloszam"] . "</td>";
        echo "<td>" . $row["megjegyzes"] . "</td>";
        echo "<td>" . $row["ido"] . "</td>";
        echo "</tr>";
    }
}catch (PDOException $e) {
    echo "Hiba";
}
?>
<?php } 
 else { ?>
    <h1 id="jelentkezzbe">Ahhoz, hogy lásd az üzeneteket, jelentkezz be!</h1>
    <?php  }; ?>
</body>
</html>
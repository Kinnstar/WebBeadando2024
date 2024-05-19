<!DOCTYPE html>
<html>
<head>
 <title>Beolvasott adatok</title>
 <meta charset="utf-8">
</head>
<body>
<?php
$helyes=true;
if(!isset($_POST['nev']) || strlen($_POST['nev']) < 5)
{
exit("Hibás név: ".$_POST['nev']);
$helyes=false;
}

$re = '/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/';
if(!isset($_POST['email']) || !preg_match($re,$_POST['email']))
{
exit("Hibás email: ".$_POST['email']);
$helyes=false;
}

if(!isset($_POST['szoveg']) || empty($_POST['szoveg']))
{
exit("Hibás szöveg: ".$_POST['szoveg']);
$helyes=false;
}

define('DB_PASS', 'Webbeadando2024');
define('DB_NAME', 'vhpet03');

if(isset($_POST['email']) && isset($_POST['nev']) && isset($_POST['phone']) && isset($_POST['szoveg'])) {
try {
    // Kapcsolódás
    $dbh = new PDO('mysql:host=localhost;dbname='.DB_NAME.';charset=utf8', DB_NAME, DB_PASS);

    if($helyes==true)
    {
        $sqlInsert = "insert into kapcsolat(id, email, nev, teloszam, megjegyzes)
        values(0, :Temail, :Tnev, :Tphone, :Tszoveg)";
        $stmt = $dbh->prepare($sqlInsert); 
        $stmt->execute(array(':Temail' => $_POST['email'], ':Tnev' => $_POST['nev'],
                             ':Tphone' => $_POST['phone'], ':Tszoveg' => $_POST['szoveg']));
    }
else{}
}
catch (PDOException $e) {
    echo "Hiba: ";
}   
}



echo "Elküldve: ";
echo "<br>";
echo "Email: ".$_POST["email"]."<br>";
echo "Név: ".$_POST["nev"]."<br>";
echo "Telefonszám ".$_POST["phone"]."<br>";
echo "Megjegyzés: ".$_POST["szoveg"]."<br>";
?>
</body>
</html>
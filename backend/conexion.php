<?php

$dbname = 'mysql:host=localhost;dbname=tabla_de_usuarios';
$user = "root";
$pass = "";

try {
    $dbh = new PDO($dbname, $user, $pass);
    foreach($dbh->query('SELECT * from user_details') as $row) {
        // print_r($row);
    }
    echo "Base Data Connected";
    
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>

<?php
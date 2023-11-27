<?php
    require_once "constants.php";
    try {
        $DbConn = new PDO("mysql:host=$hostname; dbname=$dbname", $username, $userpass);
        $DbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        if ($DbConn) {
        echo "Connected successfully";
    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>

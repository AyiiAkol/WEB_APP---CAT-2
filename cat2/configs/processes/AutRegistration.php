<?php

require_once '../configs/DbConn.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Author_ID = $_POST['Author_ID'];
    $AuthorFullname = $_POST['AuthorFullName'];
    $AuthorEmail = $_POST['AuthorEmail'];
    $AuthorAddress = $_POST['AuthorAddress'];
    $AuthorDateOfBirth = $_POST['AuthorDateOfBirth'];
    $AuthorBiography = $_POST['AuthorBiography'];
    $AuthorStatus = $_POST['AuthorStatus'];

    $hostname = "localhost"; 
    $username = "root";      
    $userpass = "";          
    $dbname = "authordb";    

    try {
        $pdo = new PDO("mysql:host=$hostname;dbname=$dbname", $username, $userpass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $stmt = $pdo->prepare("INSERT INTO authorstb (Author_ID, AuthorFullname, AuthorEmail, AuthorAddress, AuthorDateOfBirth, AuthorBiography, AuthorStatus) VALUES (?, ?, ?, ?, ?, ?, ?)");

        $stmt->bindParam(1, $Author_ID);
        $stmt->bindParam(2, $AuthorFullname);
        $stmt->bindParam(3, $AuthorEmail);
        $stmt->bindParam(4, $AuthorAddress);
        $stmt->bindParam(5, $AuthorDateOfBirth);
        $stmt->bindParam(6, $AuthorBiography);
        $stmt->bindParam(7, $Authorstatus);

        if ($stmt->execute()) {
            echo "Successfully Added!";
        } else {
            echo "Error: Failed to insert data.";
        }
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
}
?>
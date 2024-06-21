<?php

if ($_SERVER["REQUEST_METHOD"]=="POST") {

    $Email = $_POST["Email"];
    $FirstName = $_POST["firstName"];
    $Surname = $_POST["Surname"];
    $phoneNumber = $_POST["phoneNumber"];
    $Comments = $_POST["comment"];

    try {
        require_once "dbh.inc.php";

        $query = "INSERT INTO comments (Email, FirstName, Surname, phoneNumber, Comments) VALUE
        (:Email, :FirstName, :Surname,:phoneNumber, :Comments);";

        $stmt = $pdo->prepare($query);

        $stmt->bindParam(":Email",$Email );
        $stmt->bindParam(":FirstName",$FirstName );
        $stmt->bindParam(":Surname",$Surname );
        $stmt->bindParam(":phoneNumber",$phoneNumber );
        $stmt->bindParam(":Comments",$Comments );

        $stmt->execute();

        $pdo = null;
        $stmt = null;

        header("location: ../index.php");

        die();

    } catch (PDOExeption $e) {
        die("Query failed: " . $e->getMessage());
    }


}else {
    header("location: ../index.php");
}
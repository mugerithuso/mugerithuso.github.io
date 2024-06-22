<?php


    try {
        require_once "includes/dbh.inc.php";

        $query = " SELECT * FROM comments;";

        $stmt = $pdo->prepare($query);

       

        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $pdo = null;
        $stmt = null;
    } catch (PDOExeption $e) {
        die("Query failed: " . $e->getMessage());
    }



<?php
    

    try {
        require_once "includes/dbh.inc.php";

        $query = " SELECT * FROM `comments` ORDER BY `Created_at` DESC;";

        $stmt = $pdo->prepare($query);

       

        $stmt->execute();

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $pdo = null;
        $stmt = null;
    } catch (PDOExeption $e) {
        die("Query failed: " . $e->getMessage());
    }
    


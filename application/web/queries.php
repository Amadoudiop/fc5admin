<?php

//include_once 'sql/Queries/count.sql';

$countQuery = file_get_contents('sql/Queries/count.sql');
$selectOnePlayer = file_get_contents('sql/Queries/select-1.sql');
$select5000Players = file_get_contents('sql/Queries/select-5000.sql');
$select10000Players = file_get_contents('sql/Queries/select-10000.sql');
$selectOnePlayerWithStats = file_get_contents('sql/Queries/select-with-stats-1.sql');
$select5000PlayersWithStats = file_get_contents('sql/Queries/select-with-stats-5000.sql');
$select10000PlayersWithStats = file_get_contents('sql/Queries/select-with-stats-10000.sql');
$deleteOnePlayer = file_get_contents('sql/Queries/delete-1.sql');
$delete5000Players = file_get_contents('sql/Queries/delete-5000.sql');
$delete10000Players = file_get_contents('sql/Queries/delete-10000.sql');
$insertOnePlayer = file_get_contents('sql/Queries/insert-1.sql');
$insert5000Players = file_get_contents('sql/Queries/insert-5000.sql');
$insert10000Players = file_get_contents('sql/Queries/insert-10000.sql');

$servername = "mariadb";
$username = "root";
$password = "root";

//$startTime = microtime(true);
//
////Do your query and stuff here
//
//$endTime = microtime(true);
//$duration = $endTime - $startTime; //calculates total time taken


try {
    $conn = new PDO("mysql:host=$servername;dbname=database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    /**
     * insert one player
     */
//    $startTime = microtime(true);
//
//    $stmt = $conn->prepare($insertOnePlayer);
//    $stmt->execute();
//
//    $endTime = microtime(true);
//    $duration = $endTime - $startTime;
//    $insertOnePlayerSpeed += $duration;
//    echo 'Insert one players : ' . $duration . ' microsecondes <br><br>';

    /**
     * insert 10000 player
     */
    $startTime = microtime(true);

    $stmt = $conn->prepare($insertOnePlayer);
    $stmt->execute();

    $endTime = microtime(true);
    $duration = $endTime - $startTime;
    echo 'Insert 10000 players : ' . $duration . ' microsecondes <br><br>';

    /**
     * insert 5000 player
     */
//    $startTime = microtime(true);
//
//    $stmt = $conn->prepare($insert5000Players);
//    $stmt->execute();
//
//    $endTime = microtime(true);
//    $duration = $endTime - $startTime;
//    $insert5000PlayersSpeed += $duration;
//    echo 'Insert 5000 players : ' . $duration . ' microsecondes <br><br>';


} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
<?php

include 'config/connection.php';

$category_id = $_GET['cat'];

$sql = "SELECT COUNT(*) AS total_question FROM questions WHERE is_enabled = 1";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result))
{
    $totalQuestion = $row['total_question'];
}

mysqli_free_result($result);

$sql = "SELECT SUM(score) AS total_score FROM scores WHERE user_id = 1";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_array($result))
{
    $totalScore = $row['total_score'];
}

echo $totalScore . '/' . $totalQuestion;
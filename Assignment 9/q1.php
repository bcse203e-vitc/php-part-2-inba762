<?php
$students = [
    "Rahul" => 85,
    "Sheshan" => 99,
    "Arun"  => 78,
    "Arthi" => 95,
    "Blessing"=> 88
];
arsort($students);
$top_students = array_slice($students, 0, 3, true);
echo "<h2>Top 3 Students</h2>";
echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr><th>Rank</th><th>Name</th><th>Marks</th></tr>";
$rank = 1;
foreach ($top_students as $name => $marks) {
    echo "<tr>";
    echo "<td>{$rank}</td>";
    echo "<td>{$name}</td>";
    echo "<td>{$marks}</td>";
    echo "</tr>";
    $rank++;
}
echo "</table>";
?>


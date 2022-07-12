<?php
$mysqli = new mysqli("localhost", "root", "", "airfpt_project");
if($mysqli->connect_error) {
  exit('Could not connect');
}

$sql = "SELECT id, flight_number, [date], current_seatmap FROM flights WHERE id = ?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($acid, $flight_number, $date, $current_seatmap);
$stmt->fetch();
$stmt->close();

echo "<table>";
echo "<tr>";
echo "<th>ID</th>";
echo "<td>" . $acid . "</td>";
echo "<th>Flight Number</th>";
echo "<td>" . $flight_number . "</td>";
echo "<th>Date</th>";
echo "<td>" . $date . "</td>";
echo "<th>Seatmap</th>";
echo "<td>" . $current_seatmap . "</td>";

echo "</tr>";
echo "</table>";
?>
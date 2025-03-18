<?php
include 'database.php';

// Exemple de requête pour récupérer des statistiques fictives
$sql = "SELECT type, valeur FROM statistiques";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<ul class='list-disc list-inside'>";
    while($row = $result->fetch_assoc()) {
        echo "<li>" . $row["type"] . ": " . $row["valeur"] . "</li>";
    }
    echo "</ul>";
} else {
    echo "Aucune donnée disponible.";
}

$conn->close();
?>

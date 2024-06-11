<!DOCTYPE html>
<html>
<head>
<title>Afficher une table MariaDB</title>
</head>
<body>

<h1>Mon logo</h1>
<img src="logo.jpg" alt="Logo de mon site">

<?php
// Connecter à la base de données MariaDB
$db = new mysqli('10.3.0.6', 'warzo', '18022000Dragau&', 'bankto');

// Sélectionner les données de la table
$query = "SELECT * FROM employes";
$result = $db->query($query);

// Afficher les données dans un tableau HTML
echo "<table>";
echo "<tr><th>Nom</th><th>Prenom</th><th>Service</th><th>Fonction</th><th>Login</th><th>Mail</th></tr>";
while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['Numero'] . "</td>";
    echo "<td>" . $row['Prenom'] . "</td>";
    echo "<td>" . $row['Service'] . "</td>";
    echo "<td>" . $row['Fonction'] . "</td>";
    echo "<td>" . $row['Login'] . "</td>";
    echo "<td>" . $row['Mail'] . "</td>";
    echo "</tr>";
}
echo "</table>";

// Fermer la connexion à la base de données
$db->close();
?>

</body>
<html>

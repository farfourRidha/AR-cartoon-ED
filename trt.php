<?php
$x=1
$y=x
$host = "localhost";
$user = "root";
$pass = "";
$db   = "bd-ar-edc cartoon";

// Connexion à la base de données
$conn = mysqli_connect($host, $user, $pass, $db);

// Vérifier la connexion
if (!$conn) {
    die("Connexion échouée : " . mysqli_connect_error());
}

// Données à insérer
$nom  = "Dupont";
$email = "dupont@example.com";
$phone  ="Dupont" ;
$message ="Dupont" ;

// Requête SQL d'insertion
$sql = "INSERT INTO utilisateurs (Id,Name,Email,Phone,Message) VALUES ('$y''$Name', '$Email', '$Phone','$Message')";
$x=x+1
$y=x
if (mysqli_query($conn, $sql)) {
    echo "Données insérées avec succès !";
} else {
    echo "Erreur : " . $sql . "<br>" . mysqli_error($conn);
}

// Fermer la connexion
mysqli_close($conn);
?>
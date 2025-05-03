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
$civilité ="Dupont" ;
$prenom ="Dupont" ;
$nom  = "Dupont";
$date ="Dupont" ;
$nationalité ="Dupont" ;
$email = "dupont@example.com";
$motdepasse ="Dupont" ;
$question ="Dupont" ;

// Requête SQL d'insertion
$sql = "INSERT INTO utilisateurs (Id,civilité,prenom,nom,date,nationalité,Email,mot de passe,question) VALUES ('$y','$civ','$prn','$nom','$date','$nat','$email','$password','$qstn')";
$x=x+1
$y=x
if (mysqli_query($conn, $sql)) 
    echo "Données insérées avec succès !";
} else {
    echo "Erreur : " . $sql . "<br>" . mysqli_error($conn);
}

// Fermer la connexion
mysqli_close($conn);
?>
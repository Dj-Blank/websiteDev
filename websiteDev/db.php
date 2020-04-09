<?php

$bdd = new PDO("mysql:host=localhost;dbname=reservation;charset=utf8", "root", "");
$Email = $_POST['Email'];
$Téléphone = $_POST['Téléphone'];
$Nom = $_POST['Nom'];

if (!empty($Email) AND !empty($Téléphone) AND !empty($Nom))
{
    $requete = $bdd->prepare("INSERT INTO contact(Email, Téléphone, Nom, NbrPersonnes, Dates) VALUES(?, ?, ?, ?, ?)");
    $requete->execute(array($_POST['Email'], $_POST['Téléphone'], $_POST['Nom'], $_POST['NbrPersonnes'], $_POST['Dates']));

    echo"<h1>Votre réservation a bien était prise en compte.</h1>
    <h3></br>Détail de la réservation :</br></br>
    Nom : " . $_POST['Nom'] . "</br>
    Le : " . $_POST['Dates'] . "</br>
    Pour " . $_POST['NbrPersonnes'] . " personne(s)</h3></br>
    Cliquez <a href='accueil.html'>ici</a> pour revenir à la page d'accueil.";
}
else
{
    echo"<h1>Votre réservation n'a pas pu être prise en compte.</br></h1>
    <h2>Un champ n'a pas été rempli.</br></h2>
    Cliquez <a href='reserver.html'>ici</a> pour revenir à la page précedente.</a>";
}
?>

<?php

$db = new PDO("mysql:host=localhost;db=registry;charset=utf8", "root", "");
$surname = $_POST['surname'];
$name = $_POST['name'];
$address = $_POST['address'];
$phonenumber = $_POST['phoneNumber'];
$email = $_POST['email'];
$kids = $_POST['kids'];
$pets = $_POST['pets'];
$home = $_POST['home'];
$pusheen = $_POST['pusheen'];

if ( !empty($surname) AND !empty($name) AND !empty($address) AND !empty($phonenumber) AND !empty($email) AND !empty($kids) AND !empty($pets) AND !empty($home) AND !empty($pusheen)) {
$requete = $db->prepare("INSERT INTO registry(surname, name, address, phonenumber, email, kids, pets, home, pusheen) values (?, ?, ?, ?, ?, ?, ?, ?, ?) ");
$requete->execute(array($_POST['surname'], $_POST['name'], $_POST['address'], $_POST['phonenumber'], $_POST['email'],$_POST['kids'], $_POST['pets'], $_POST['home'],$_POST['pusheen'],));

    echo 'good';
} else {
    echo 'not good';
}
?>



<?php
$surname = $_POST['surname'];
$name = $_POST['name'];
$address = $_POST['address'];
$phonenumber = $_POST['phonenumber'];
$email = $_POST['email'];
$kids = $_POST['kids'];
$pets = $_POST['pets'];
$home = $_POST['home'];
$pusheen = $_POST['pusheen'];

if ( !empty($surname) !empty($name) !empty($address) !empty($phonenumber) !empty($email) !empty($kids) !empty($pets) !empty($home) !empty($pusheen)) {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "registry";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName );
    if(mysqli_connect_error()) {
        die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
        $SELECT = "SELECT email From registry Where email = ? Limit 1";
        $INSERT = "INSERT Into registry (surname, name, address, phonenumber, email, kids, pets, home, pusheen) values (?, ?, ?, ?, ?, ?, ?, ?, ?) ";

        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        $rnum-> $stmt->num_rows;

        if (rnum = ) {
            $stmt->close();

            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("sssisssss", $surname, $name, $address, $phonenumber, $email, $kids, $pets, $home, $pusheen);
            $stmt->execute();
            echo "New Adoption candidate in line";
        } else {
            echo "Someone already registered using this email"
        }
        $stmt->close();
        $conn->close();
    }

} else {
    echo "All Field are rquired";
    die();
}
?>





<?php

$db = new PDO("mysql:host=localhost;db=adoption;charset=utf8", "root", "");
$surname = $_POST['surname'];
$name = $_POST['name'];
$address = $_POST['address'];
$phonenumber = $_POST['phoneNumber'];
$email = $_POST['email'];
$kids = $_POST['kids'];
$pets = $_POST['pets'];
$home = $_POST['home'];
$pusheen = $_POST['pusheen'];

if ( !empty($surname) !empty($name) !empty($address) !empty($phonenumber) !empty($email) !empty($kids) !empty($pets) !empty($home) !empty($pusheen))
{
    $requete = $db->prepare("INSERT Into registry (surname, name, address, phonenumber, email, kids, pets, home, pusheen) values (?, ?, ?, ?, ?, ?, ?, ?, ?) ");
    $requete->execute(array($_POST['surname'], $_POST['name'], $_POST['address'], $_POST['phonenumber'], $_POST['email'],$_POST['kids'], $_POST['pets'], $_POST['home'],$_POST['pusheen'],));

    echo 'good';
    
} else {
    echo 'not good';
}
?>
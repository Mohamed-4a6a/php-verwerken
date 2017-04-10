<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <title>Verwerken</title>
</head>
    <body>
        <h2>Uw gegevens zijn</h2><br>
    <?php
    if(isset($_POST["submit"]) ){
        if(empty($_POST["achternaam"]) ){

        }
    else{
        $achternaam = $_POST["achternaam"];
        $voornaam = $_POST["voornaam"];
        $adres = $_POST["adres"];
        $postcode = $_POST["postcode"];
        $plaats = $_POST["plaats"];
        $email = $_POST["email"];
        $taal = $_POST["vak"];
        if($taal == "I") {
            echo "Achternaam: " . $achternaam . "<br>" . "Voornaam: " . $voornaam . "<br>" . "Adres: " . $adres . "<br>" . "Postcode: " . $postcode . "<br>" . "Plaats: " . $plaats . "<br>" . "E-mailadres: " . $email . "<br><br>" . "ICT-opleidingen zijn vol. Kies een andere opleiding. ";
        }
        elseif($taal == "E") {
            echo "Achternaam: " . $achternaam . "<br>" . "Voornaam: " . $voornaam . "<br>" . "Adres: " . $adres . "<br>" . "Postcode: " . $postcode . "<br>" . "Plaats: " . $plaats . "<br>" . "E-mailadres: " . $email . "<br><br>" . "U wordt ingeschreven voor de volgende opleiding: Engels ";
        }
        elseif($taal == "T") {
            echo "Achternaam: " . $achternaam . "<br>" . "Voornaam: " . $voornaam . "<br>" . "Adres: " . $adres . "<br>" . "Postcode: " . $postcode . "<br>" . "Plaats: " . $plaats . "<br>" . "E-mailadres: " . $email . "<br><br>" . "U wordt ingeschreven voor de volgende opleiding: Techniek ";
        }
        elseif($taal == "N") {
            echo "Achternaam: " . $achternaam . "<br>" . "Voornaam: " . $voornaam . "<br>" . "Adres: " . $adres . "<br>" . "Postcode: " . $postcode . "<br>" . "Plaats: " . $plaats . "<br>" . "E-mailadres: " . $email . "<br><br>" . "U wordt ingeschreven voor de volgende opleiding: Nederlands ";
        }
        else{
            echo "Opleiding niet ingevuld";
        }
    }
}
?>
    </body>
</html>
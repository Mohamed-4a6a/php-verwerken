<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="utf-8">
    <title>PHP oefening - Mohamed Hohoud</title>
</head>
    <body>
        <h2>Inschrijfformulier:</h2>
     <?php
        ?>
        <form action="PHP-verwerken.php" method="post">
        <table border="1">
        <tr>
            <td><?php echo "Achternaam: "?></td>
            <td><input required type="text" name="achternaam"></td>
        </tr>
        <tr>
            <td><?php echo "Voornaam: " ?></td>
            <td><input required type="text" name="voornaam"></td>
        </tr>
        <tr>
            <td><?php echo "Adres: "?></td>
            <td><input required type="text" name="adres"></td>
        </tr>
        <tr>
            <td><?php echo "Postcode: "?></td>
            <td><input required type="text" name="postcode"></td>
        </tr>
        <tr>
            <td><?php echo "Plaats: "?></td>
            <td><select required name="plaats">
                      <option></option>
                      <option value="Amsterdam">Amsterdam</option>
                      <option value="Eindhoven">Eindhoven</option>
                      <option value="Rotterdam">Rotterdam</option>
                      <option value="Utrecht">Utrecht</option>
                </select> </td>
        </tr>
        <tr>
            <td><?php echo "E-mailadres: "?></td>
            <td><input required type="email" name="email"></td>
        </tr>
        </table>
        <h4>Kies een opleiding: </h4>
        <input type="radio" name="vak" value="I"> ICT <br>
        <input type="radio" name="vak" value="E"> Engels <br>
        <input type="radio" name="vak" value="T"> Techniek <br>
        <input type="radio" name="vak" value="N"> Nederlands <br><br>
        <input type="submit" name="submit" value="Versturen"> <input TYPE="button" onClick="history.go(0)" VALUE="Refresh">
        </form>
    </body>
</html>
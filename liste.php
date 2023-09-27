<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <fieldset id="liste">
        <?php
        $Obpdo = new PDO('mysql:host=localhost;dbname=my_data_base', 'root', '');

        $req = "SELECT * FROM participants ORDER BY IdPart ASC";
        $res = $Obpdo->query($req);
        if (!$res) {
            echo "erreur de recuperation des données";
        } else {
            $listpart = $res->rowCount();
        }
        ?>
        <h1>la liste des participants</h1>
        <h3 style="padding-left: 60px;">il y a <?= $listpart ?> participants inscris</h3>

        <table id="table" border="1">
            <tr>
                <th>N°</th>
                <th>NOM</th>
                <th>PRENOM</th>
                <th>CONTACT</th>
                <th>EMAIL</th>
            </tr>
            <?php
            while ($list = $res->fetch(PDO::FETCH_ASSOC)) {
            ?>
                <tr id="value">
                    <?php
                    foreach ($list as $valeur) {
                        echo "<td>$valeur</td>";
                    } ?>
                </tr>
            <?php
            }
            ?>
        </table>
        <?php
        $res->closeCursor();
        ?>
    </fieldset>
</body>

</html>
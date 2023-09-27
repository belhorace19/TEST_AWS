<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
    <title>TP form</title>
</head>
<body >  
    <div>
        <a href="liste.php">voir la liste</a>
    </div>
    <fieldset>
        <form action="soumi.php" method="POST"> 
            <h1>inscrivez-vous!</h1>
            <hr><br>
            <table>
                <tr>
                    <td>Nom :</td><td><input type="text" name="NomPart" id="nom" autofocus required maxlength="30" ><br></td>
                </tr>
                <tr>
                    <td>Prenom :</td><td><input type="text" name="PnomPart"  id="prenom"required maxlength="50"><br></td>
                </tr>
                <tr>
                    <td>Contact :</td><td><input type="text" name="ContaPart"  id="contact" required maxlength="10"><br></td>
                </tr>
                <tr>
                    <td>Email :</td><td><input type="text" name="EmailPart"  id="email" required maxlength="50"><br></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" id="submit" value ="Valider" ></td>
                </tr>
            </table>
             </hr>
        </form>
        <tr><a href="liste.php"></a></tr>
    </fieldset>

   



   
</body>
</html>
<!DOCTYPE html>
    <head>
        <meta charset = UTF-8 />
        <title>lab1.08</title>
        <style>
            table, th, td 
            {
            border:1px solid black;
            }
        </style>
    </head>

    <header>
        <h1>Inschrijfformulier</h1>
    </header>

    <body>

        <form action="lab1.08.verwerken.php" method="post">
        <input type="hidden" name="taal" value="false">
        <table>
            <tr>
                <th>Achternaam</th>
                <th><input type="text" name="naam"></th>
            </tr>
            <tr>
                <th>Voornaam</th>
                <th><input type="text" name="naam2"></th>
            </tr>
            <tr>
                <th>Straat</th>
                <th><input type="text" name="straat"></th>
            </tr>
            <tr>
                <th>Postcode</th>
                <th><input type="text" name="postcode"></th>
            </tr>
            <tr>
                <th>Plaats</th>
                <th><input type="text" name="plaats"></th>
            </tr>
            <tr>
                <th>E-mail</th>
                <th><input type="text" name="E-mail"></th>
            </tr>
        </table>

        <p>Kies een opleiding:</p>
        <input type="radio" name="opleiding" value="I"> ICT
        <br>
        <input type="radio" name="opleiding" value="E"> Engels
        <br>
        <input type="radio" name="opleiding" value="T"> Techniek
        <br>
        <input type="radio" name="opleiding" value="N"> Nederlands
        <br>
        <br>
        <input type="submit" name="submit" value="Versturen">
        <input type="reset" name="sub" value="Reset">
        <br>
        <br>
        </form>
        </body>

</html>
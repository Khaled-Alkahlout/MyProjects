<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    </head>
    <body>
        <form action="verwerken.php" method="post">
            Uw naam :
            <input type="text" name="naam">
            <!-- <input type="hidden" name="taal" value="false"> --> <!-- Waarom hebben we dit input gebriuken -->
            <br>
            <br>Kies een taal:
            <input type="radio" name="taal" value="N"> Nederlands
            <input type="radio" name="taal" value="E"> Engels
            <input type="radio" name="taal" value="S"> Spaans
            <br>
            <br>
            <input type="submit" name="submit" value="Versturen">
        </form>
        <?php
        if( isset($_POST["submit"]) ) 
        {
            if( empty($_POST["naam"]) )
            {
            echo "naam niet ingevuld";
            }
            else 
            {
                $naam = $_POST["naam"];
                $taal = $_POST["taal"];
                if ($taal == "N")
                {
                    echo " Goedendag " . $naam;
                }
                elseif ($taal == "E")
                {
                    echo " Good morning " . $naam;
                }
                elseif ($taal == "S")
                {
                    echo " Buenos dias " . $naam;
                }
                else 
                {
                    echo " Taal niet ingevuld ";
                }
            }
        }
        ?>
    </body>
</html>
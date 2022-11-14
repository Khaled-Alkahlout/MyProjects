<?php
    if( isset($_POST["submit"]) ) 
    {
        if( empty($_POST["naam"]) )
        {
            echo "Achternaam niet ingevuld";
        }
        else if( empty($_POST["naam2"]) )
        {
            echo "Voornaam niet ingevuld";
        }
        else if( empty($_POST["straat"]) )
        {
            echo "Straat niet ingevuld";
        }
        else if( empty($_POST["postcode"]) )
        {
            echo "Postcode niet ingevuld";
        }
        else if( empty($_POST["plaats"]) )
        {
            echo "Plaats niet ingevuld";
        }
        else if( empty($_POST["E-mail"]) )
        {
            echo "E-mail niet ingevuld";
        }
        else
        {
            $naam = $_POST["naam"];
            $naam2 = $_POST["naam2"];
            $straat = $_POST["straat"];
            $postcode = $_POST["postcode"];
            $plaats = $_POST["plaats"];
            $email = $_POST["E-mail"];
            $opleiding = $_POST["opleiding"];
            if ($opleiding == "I")
            {
                echo " ICT opleidingen zijn vol. Kies een andere opleiding. ";
                echo "<br>";
                echo "<br>";
                echo "Uw gegevens zijn: ";
                echo "<br>";
                echo "<br>";
                echo "Achternaam: " . $naam;
                echo "<br>";
                echo "Voornaam: " . $naam2;
                echo "<br>";
                echo "Straat: " . $straat;
                echo "<br>";
                echo "Postcode: " . $postcode;
                echo "<br>";
                echo "Plaats: " . $plaats;
                echo "<br>";
                echo "E-mail adres: " . $email;
                echo "<br>";
                echo "<br>";
                echo "Uw wordt ingeschreven voor de volgende opleiding: ";
                echo "<br>";
                echo "ICT";
            }
            elseif ($opleiding == "E")
            {
                echo "Uw gegevens zijn: ";
                echo "<br>";
                echo "<br>";
                echo "Achternaam: " . $naam;
                echo "<br>";
                echo "Voornaam: " . $naam2;
                echo "<br>";
                echo "Straat: " . $straat;
                echo "<br>";
                echo "Postcode: " . $postcode;
                echo "<br>";
                echo "Plaats: " . $plaats;
                echo "<br>";
                echo "E-mail adres: " . $email;
                echo "<br>";
                echo "<br>";
                echo "Uw wordt ingeschreven voor de volgende opleiding: ";
                echo "<br>";
                echo "Engels";
            }
            elseif ($opleiding == "T")
            {
                echo "Uw gegevens zijn: ";
                echo "<br>";
                echo "<br>";
                echo "Achternaam: " . $naam;
                echo "<br>";
                echo "Voornaam: " . $naam2;
                echo "<br>";
                echo "Straat: " . $straat;
                echo "<br>";
                echo "Postcode: " . $postcode;
                echo "<br>";
                echo "Plaats: " . $plaats;
                echo "<br>";
                echo "E-mail adres: " . $email;
                echo "<br>";
                echo "<br>";
                echo "Uw wordt ingeschreven voor de volgende opleiding: ";
                echo "<br>";
                echo "Techniek";
            }
            elseif ($opleiding == "N")
            {
                echo "Uw gegevens zijn: ";
                echo "<br>";
                echo "<br>";
                echo "Achternaam: " . $naam;
                echo "<br>";
                echo "Voornaam: " . $naam2;
                echo "<br>";
                echo "Straat: " . $straat;
                echo "<br>";
                echo "Postcode: " . $postcode;
                echo "<br>";
                echo "Plaats: " . $plaats;
                echo "<br>";
                echo "E-mail adres: " . $email;
                echo "<br>";
                echo "<br>";
                echo "Uw wordt ingeschreven voor de volgende opleiding: ";
                echo "<br>";
                echo "Nederlands";
            }
            else 
            {
                echo " Opleiding niet ingevuld ";
            }
        }
    }
?>
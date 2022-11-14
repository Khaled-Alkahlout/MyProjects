<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="windth=device-width, initial-scale=1.0">
    </head>
    <body>

<?php
$array = array("$naam");
$domain = "";
if(isset($_POST["submit"]))
{
    $naam = htmlspecialchars($_POST["naam"]);
    $straat = htmlspecialchars($_POST["straat"]);
    $postcode = htmlspecialchars($_POST["postcode"]);
    $plaats = htmlspecialchars($_POST["plaats"]);
    $email = htmlspecialchars($_POST["e-mail"]);
    $commentaar = htmlspecialchars($_POST["commentaar"]);
    
    $naam = trim($naam);
    $straat = trim($straat);
    $postcode = trim($postcode);
    $plaats = trim($plaats);
    $email = trim($email);
    $commentaar = trim($commentaar);

    $plaats = strtoupper($plaats);
    if($plaats == "AMSTERDAM")
    {
        $bezorgkosten = 10.00;
    }
    else if($plaats == "UTRECHT")
    {
        $bezorgkosten = 20.00;
    }
    else
    {
        $bezorgkosten = 30.00;
    }
    echo "<br>Bezorgkosten: $bezorgkosten";

    $email = strtolower($email);
    echo "<br>E-mailadres: $email";

    $naam = ucfirst($naam);
    echo "<br>Domain: " . $domain;

    $emailarray = explode("@", $email);
    $user = $emailarray[0];
    $domain = $emailarray[1];
    echo "<br>User: " . $user;
    echo "<br>Domain: " . $domain;
    
    if(strlen($postcode) !=7)
    echo "<br> Postcode incorrect ingevuld. ";

    $postcodePrefix = substr($postcode,0,4);
    $postcodeSuffix = substr($postcode,5,2);
    echo "<br> Postcode prefix: $postcodePrefix";
    echo "<br> Postcode suffix: $postcodeSuffix";

    $nl = strpos($email, ".nl");
    $be = strpos($email, ".be");
    $fr = strpos($email, ".fr");
    if($nl > 0) echo "<br>Nederlands e-mailadres";
    if($be > 0) echo "<br>Belgisch e-mailadres";
    if($fr > 0) echo "<br>Frans e-mailadres";

    $commentaar = nl2br($commentaar);

    $scheldwoorden = array("debiel", "laf", "gestoord");
    $commentaar = str_replace($scheldwoorden, "*#@#*!%!", $commentaar);
    echo "<br>Commentaar: $commentaar";

    $langetekst = "Onderwerp: deze tekst bevat aan het einde het woord luminus";
    $resultaat = str_starts_with($langetekst, "Onderwerp");
    var_dump($resultaat);

    $resultaat = str_ends_with($langetekst, "luminus");
    var_dump($resultaat);

    $resultaat = str_contains($langetekst, "gloeiend");
    var_dump($resultaat);
}
?>

    </body>
</html>
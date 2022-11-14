<?php
$breif="Beste <b><<abonnee>></b><br>
U heeft het laatste nummer van ons magazine ontvangen.<br>
Omdat we u heel graag als abonnee willen behouden, bieden we u een aantrekkelijke en exclusieve korting:<br>U betaalt <b><<bedrag-met-korting>></b>
in plaats van 65 euro.<br><br><i>profiteer nu van deze aanbieding!<br><br>Met vriendelijk groet,<br>Sam Simons<br>Hoofdredacteur<br>";

$replace_word1 = "<<abonnee>>";
$breif = str_replace($replace_word1, "Jan Davids", $breif);

$replace_word2 = "<<bedrag-met-korting>>";
$breif = str_replace($replace_word2, "50", $breif);

echo "<br>Commentaar: $breif";

?>
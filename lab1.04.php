<?php
    $naam = "Karim";
    $nederlands = "8.5";
    $engels = "7.7";
    $rekenen = "6.7";
    $programmeren = "8.5";
    $databases = "9.4";
    $gemiddeld = "8.16";
    $naam1 = "Sophie";
    $nederlands1 = "8.9";
    $engels1 = "8.7";
    $rekenen1 = "9.7";
    $programmeren1 = "9.5";
    $databases1 = "9.2";
    $gemiddeld1 = "9.2";
    $gemiddeld2 = ($gemiddeld+$gemiddeld1)/2;
    echo "<table border='1'>
    <caption>
    <strong>Rapport</strong>
    </caption>
    <thead>
    <tr>
    <th>Naam</th><th>Nederlands</th><th>Engels</th>
    <th>Rekenen</th><th>Programmeren</th>
    <th>Databases</th>
    <th>Gemiddeld</th>
    </tr>
    </thead>
    <td>$naam</td><td>$nederlands</td><td>$engels</td>
    <td>$rekenen</td><td>$programmeren</td>
    <td>$databases</td><td>$gemiddeld</td>
    </tr>
    </tbody>
    <tbody>
    <tr>
    <td>$naam1</td><td>$nederlands1</td><td>$engels1</td>
    <td>$rekenen1</td><td>$programmeren1</td>
    <td>$databases1</td><td>$gemiddeld1</td>
    </tr>
    </tbody>
    <tfoot>
    <tr>
    <td colspan='6'>Groep gemiddeld</td><td>$gemiddeld2</td>
    </tr>
    </tfoot>
    </table>";
?>
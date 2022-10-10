<?php
    $playlist = array(
        array("genre" => "Hiphop", "auteur" => "John Williams", "titel" => "My Girl "),
        array("genre" => "Jaaz", "auteur" => "John Coltrane", "titel" => "New York "),
        array("genre" => "Hiphop", "auteur" => "Shakira", "titel" => "Obsession ")
    );


    array_push($playlist, ["genre" => "Latin", "auteur" => "Caetano Veloso", "titel" => "Cafe Atlantico"]); 
    echo "<br>";


    function printArray2($item, $key)
    {
        echo "<br />Track  ".$key." | ".$item['genre']." | ".$item['auteur']." | ".$item['titel'];
    }
    
    
    array_walk($playlist, 'printArray2');
    ?>
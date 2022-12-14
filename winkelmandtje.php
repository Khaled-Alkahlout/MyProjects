<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta http-equiv="Content-Type" content="text/html" charset="UTF-8"/>
        <style>
            .album{clear: left; width: 100%;}
            .omslag{float: left;}
            .gegevens{float: left; padding-left: 20px;}
            .korting{clear: left;}
            .aantal{background-color: #f8ce6c;}
        </style>
        <title>Mijn winkelmandje</title>
    </head>
    <body>
        <h3>Mijn winkelmandtje</h3>
        <form name="albums" action="" method="post">
            <div class="album">
                <div class="omslag">
                    <img src="images/Cesaria_Evora.jpg" width="50px" alt="X"/>
                </div>
                <div class="gegevens">
                    Cesaria Evora "Em Um Concerto" Prijs: $9
                    <input type="hidden" name="albumcode[0]" value="001">
                    <input type="hidden" name="artiest[0]" value="Cesaria Evora">
                    <input type="hidden" name="album[0]" value="Em Um Concerto">
                    <input type="hidden" name="prijs[0]" value="9">
                    <input type="hidden" name="genre[0]" value="World">
                    <br />Aantal:
                    <input type="text" size=2 maxlength=3 name="aantal[0]" class="aantal" value="0">
                </div>
            </div>
            <div class="korting">
                <br><hr />Korting:<br />
                <input type="checkbox" name="student" value="15"/>
                student: 15%<br />
                <input type="checkbox" name="klant" value="10"/>
                klant: 10%<br />
                <input type="submit" width="300px" name="verzenden" value="Bestellen"/>
            </div>
        </form>
        <?php
        $korting = 0;
        $besteldeAlbums = 0;
        if ( isset($_POST["aantal"][0]) ) {
            $besteldeAlbums = $besteldeAlbums + ($_POST["aantal"][0]);
            echo "<br>" . "Bestelde albums: " . $besteldeAlbums;
        }
        if( isset($_POST["student"], $_POST["klant"]) ) {
            $korting = $korting + 25;
            echo "<br>" . "Korting is: " . $korting . "%";
        }
        elseif( isset($_POST["student"]) ) {
            $korting = $korting + 15;
            echo "<br>" . "Korting is: " . $korting . "%";
        }
        elseif( isset($_POST["klant"]) ) {
            $korting = $korting + 10;
            echo "<br>" . "Korting is: " . $korting . "%";
        }
        ?>
    </body>
</html>
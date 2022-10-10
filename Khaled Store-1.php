<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>Khaled Store</title>
        <link rel="stylesheet" href="style.css"/>
        <meta view="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <h1>Khaled Store</h1>
    <h2>
        <?php 
            date_default_timezone_set('Europe/Amsterdam');
            echo $runningTime = date('h:i:s');
        ?> 
    </h2>
    <table>
        <tr>
            <th class= "f_row" width="280" ; margen="0" ;> Product </th>
            <th class= "f_row" width="600"; margen="0";> Description </th>
            <th class= "f_row" width="600"; margen="0";> Price </th>
            <th class= "f_row" width="600"; margen="0";>
                Payment methodes
                <br>
                <br>
                <img src="payment.jpg" width="300" length="300" >
            </th>
        </tr>
        <tr>
            <td class="Photo"> <img src="coffee-machine.jpg" width="180" length="150"></td>
            <td class="Des-Pr"> <p>Coffee machine </p></td>
            <td class="Des-Pr"> 269 € </td>
            <td class="BuyButton-text">
            <a href="https://www.bol.com/nl/nl/p/homesse-coffee-machine-koffiezetapparaat-koffiemachine-met-bonen-koffiezetapparaat-filterkoffie/9300000074468608/?bltgh=s3rg2gcRpcBBj7XmRkRCBg.2_18.19.ProductTitle">
            <button class="BuyButton">Buy now</button></td></a>
        </tr>
            <td class="Photo"> <img src="Espresso-machine.jpg" width="200" length="170"> </td>
            <td class="Des-Pr"> Espresso machine </td>
            <td class="Des-Pr"> 400 € </td>
            <td class="BuyButton-text"><a href="https://www.bol.com/nl/nl/p/philips-series-2200-volautomatische-espressomachines-voor-3-dranken/9300000018369976/?bltgh=p8xhjXU1x169VV8f2RxEDA.ias8RlhyHxasIrtXXCJNmA_0_11.12.ProductTitle">
            <button class="BuyButton">Buy now</button></td></a>
        <tr>
            <td class="Photo"> <img src="Coffee-machine-melk.jpg" width="180" length="130"> </td>
            <td class="Des-Pr"> Coffee machine with milk fridge </td>
            <td class="Des-Pr"> 726,79 € </td>
            <td class="BuyButton-text"><a href="https://www.bol.com/nl/nl/p/de-longhi-esam420-80-tb-volautomatische-espressomachine/9300000016724267/?bltgh=oJwMAIpD9rX82bqrnAJJJQ.hqNdCgYLWmKwxJoKjzZBqw_0_17.36.ProductTitle">
            <button class="BuyButton">Buy now</button></td></a>
    </table>
    </body>
    <footer class="footer">
    <h2 class="h2">contact</h2>
    <table>
        <tr>
            <th class= "contact-img" width = "630"><img src="E-mail.jpg" width="150" height="120"></th>
            <th class= "contact-img" width = "630"><img src="WhatsApp.jpg" width="110" height="120"></th>
            <th class= "contact-img" width = "630"><img src="Instagram.jpg" width="120" height="120"></th>
        </tr>
        <tr>
            <td class="con-info">KhaledStore@gmail.com</td>
            <td class="con-info">+316888666222</td>
            <td class="con-info">@KhaledStore</td>
        </tr>
    </table>
    </footer>
</html>
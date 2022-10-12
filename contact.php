<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="windth=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="contact.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>Cars Parts</title>

  </head>

  <header>

      <h1>Cars Parts</h1>

  </header>

  <body>

  <h2 class='input'>Thanks for your massge, We wil send you E-mail back</h2>

  <?php
  if( isset($_POST["submit"]) )
  {
  if( empty($_POST["fname"]) )
  {
    echo "name not failed";
  }
  else if( empty($_POST["email"]) )
  {
    echo "E-mail not failed";
  }
  else
  {

  $name= $_REQUEST['fname'];

  $email= $_REQUEST['email'];

  $bericht= $_REQUEST['bericht'];


  echo "<html><p class='name'>$name</p></html>";
  echo "<br>";
  echo "<html><p class='email'>$email</p></html>";
  echo "<br>";
  echo "<html><p class='bericht'>$bericht</p></html>";

  }

  }
  ?>

 
  </body>
</html>
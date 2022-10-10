<!DOCTYPE html>
<html>


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="windth=device-width, initial-scale=1.0">
  <!-- <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->




  <title>Cars Parts</title>

</head>


<header>

      <h1>Cars Parts</h1>

</header>


<body>

   <h2>Welcome to Cars Parts</h2>

   <p id="time"><strong><?php echo "The time is " . date("h:i:sa");?> </strong> </p>

   <p><strong>Cars Parts offers cars engine's with warranty</strong></p>
   <p>
    if you looking for new warranted engine for your car, you are in the right website. We offers only checked and warranted engine from our store. 
    If you n't satisfied with the engine which you bought from us, We wil give you your money back.
  </p>

  <p>If you want to buy car's engine from us. Contact us from the next form</p>

</body>
<footer>

    <h2>Contact us</h2>
    <form action="contact.php" method="post">

        Name: <input type="text" name="fname">
        <br><br>

        E-mail: <input type="text" name="email">
        <br><br>

        Comment: <textarea name="bericht" rows="5" cols="40"></textarea>
        <br><br>

        <input type="submit" name="submit" value="Send">

    </form>

</footer>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>CLASSE 19</h1>

    <?php
      
    // paragrafo
    $text = 'corso boolean per sviluppatori web ,nel corso boolean si studia molto.';
     
    //  lunghezza paragrafo
    $length = strlen($text);

    //  richiamo parola da url
    $badword = $_GET['badword'];
    
    //  paragrafo censurato
    $censorship = str_replace('boolean' , '***' , $text);


    ?>

    <h1>testo :</h1>
    <p> <?php echo $text; ?> </p>

    <h1>la lunghezza del testo e' :</h1>
    <p> <?php echo $length; ?> </p>

    <h1>La parola nascosta e' :</h1>
    <p> <?php echo $badword; ?> </p>

    <h1>testo censurato :</h1>
    <p> <?php echo $censorship; ?> </p>


     
</body>
</html>
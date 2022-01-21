
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        // Crea una variabile con un paragrafo di testo 
        $explicit_text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam dolor ut nisi explicabo! Alias, at modi. Est autem sint assumenda fugit dolor cribibus illum numquam tempora dolor deserunt enim, repudiandae iusto?';     
        // Crea una variabile con la lunghezza del paragrafo
        $explicit_text_length = strlen($explicit_text);

        // Crea una parola da censurare viene passata dall'utente tramite parametro GET
        $bad_word = $_GET['bad_word'];

        // Crea una variabile con il paragrafo di testo censurato
        $censored_text = str_replace($bad_word, '***', $explicit_text);
        // Crea una variabile con la lunghezza del paragrafo censurato
        $censored_text_length = strlen($censored_text);
    ?>

    <h2>Paragraph</h2>

    <!-- Stampa a schermo il paragrafo esplicito e la sua lunghezza. -->
    <h4>Text (explicit)</h4>
    <p><?php echo $explicit_text ?></p>  
    <h4>Length</h4>
    <span><?php echo $explicit_text_length ?> characters</span>
 
    <!-- Stampare di il paragrafo censurato e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare -->
    <h4>Text (censored)</h4>
    <p><?php echo $censored_text ?></p>
    <h4>Length</h4>
    <span><?php echo $censored_text_length ?> characters</span>
  
</body>
</html>


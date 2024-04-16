<?php
// Inclusione della funzione di generazione password e dei dati
require_once __DIR__ . '/data/functions.php';

session_start();

if (empty($_SESSION['input_length'])) {
  header('Location: ./index.php');
} else {
  $input_length = intval($_SESSION['input_length']);
  $output_message = passwordGenerator($input_length, $charactersType, $symbolsList);
}
?>

<!-- HTML -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- CSS -->
  <link rel="stylesheet" href="./style.css">

  <title> PHP Strong Password Generator</title>
</head>

<body>
  <h1 class="text-center mt-5">Strong Password Generator</h1>
  <h3 class="text-center my-3">Genera una password sicura</h3>

  <div class="container">
    <div class="output_box my-3"><?php echo $output_message ?></div>
    <button type="submit" class="btn btn-light"><a href="logout.php">Annulla</a></button>
  </div>
</body>

</html>
<!-- /HTML -->
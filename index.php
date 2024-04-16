<!-- PHP -->
<?php

$output_message = 'Nessun parametro valido inserito';

if (!isset($_GET['checkTypes'])) {
  $charactersType = [
    'letters', 'capitalLetters', 'numbers', 'symbols'
  ];
} else {
  foreach ($_GET['checkTypes'] as $check) {
    $charactersType[] = $check;
  }
}

if (isset($_GET['inputLength'])) {
  session_start();
  $_SESSION['input_length'] = $_GET['inputLength'];
  $_SESSION['characters_type'] = $charactersType;
  header('Location: ./output.php');
}

?>
<!-- /PHP -->

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

    <div class="form_box">
      <form action="index.php" method="GET">
        <!-- Input: password length -->
        <div class="mb-3 d-flex align-items-center">
          <label for="inputLength" class="me-5">Lunghezza password:</label>
          <input type="number" class="form-control" id="inputLength" name="inputLength">
        </div>
        <!-- /Input -->

        <!-- Radio button: allow/not allow characters repetitions -->
        <div class="d-flex align-items-center mb-3">
          <div>Consenti ripetizioni di uno o più caratteri:</div>
          <div class="mx-3">
            <input class="form-check-input" type="radio" name="radioRepetition" id="radioRepetition1" checked>
            <label class="form-check-label" for="radioRepetition1">
              Sì
            </label>
          </div>
          <div class="mx-3">
            <input class="form-check-input" type="radio" name="radioRepetition" id="radioRepetition2">
            <label class="form-check-label" for="radioRepetition2">
              No
            </label>
          </div>
        </div>
        <!-- /Radio button -->

        <!-- Checkbox: select types of characters -->
        <div class="d-flex mb-3">
          <div>Seleziona la tipologia di caratteri da includere:</div>
          <div class="d-flex flex-column">
            <div class="mx-3">
              <input class="form-check-input" type="checkbox" value="letters" id="letters" name="checkTypes[]">
              <label class="form-check-label" for="letters">
                Lettere minuscole
              </label>
            </div>
            <div class="mx-3">
              <input class="form-check-input" type="checkbox" value="capitalLetters" id="capitalLetters" name="checkTypes[]">
              <label class="form-check-label" for="capitalLetters">
                Lettere maiuscole
              </label>
            </div>
            <div class="mx-3">
              <input class="form-check-input" type="checkbox" value="numbers" id="numbers" name="checkTypes[]">
              <label class="form-check-label" for="numbers">
                Numeri
              </label>
            </div>
            <div class="mx-3">
              <input class="form-check-input" type="checkbox" value="symbols" id="symbols" name="checkTypes[]">
              <label class="form-check-label" for="symbols">
                Simboli
              </label>
            </div>
          </div>
        </div>
        <!-- /Checkbox -->

        <button type="submit" class="btn btn-primary">Invia</button>
      </form>
    </div>
  </div>
</body>

</html>
<!-- /HTML -->
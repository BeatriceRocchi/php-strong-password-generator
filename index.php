<!-- PHP -->

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
    <div class="output_box my-3">Nessun parametro valido inserito</div>

    <div class="form_box">
      <form action="index.php" method="GET">
        <div class="mb-3 d-flex align-items-center">
          <label for="inputLength" class="me-5">Lunghezza password:</label>
          <input type="text" class="form-control" id="inputLength" name="inputLength">
        </div>
        <button class="btn btn-primary">Invia</button>
      </form>
    </div>
  </div>
</body>

</html>
<!-- /HTML -->
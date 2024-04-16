<?php
// Dati
$symbolsList = [
  '!', '?', '&', '%', '$', '<', '>', '^', '+', '-', '*', '/', '(', ')', '[', ']', '{', '}', '@', '#', '_', '='
];

// Funzione di generazione password
function passwordGenerator($input_length, $characters_type, $symbolsList, $repetition)
{
  $password = [];

  while (count($password) < $input_length) {
    $indexType = mt_rand(0, count($characters_type) - 1);

    if ($characters_type[$indexType] === 'letters') {
      $character = strtolower(chr(64 + rand(1, 26)));
    } elseif ($characters_type[$indexType] === 'capitalLetters') {
      $character = chr(64 + rand(1, 26));
    } elseif ($characters_type[$indexType] === 'numbers') {
      $character = mt_rand(0, 9);
    } elseif ($characters_type[$indexType] === 'symbols') {
      $character = $symbolsList[mt_rand(0, count($symbolsList) - 1)];
    }

    if ($repetition === '1') {
      $password[] = $character;
    } elseif ($repetition === '0') {
      if (!in_array($character, $password)) {
        $password[] = $character;
      }
    }
  }
  return implode('', $password);
}

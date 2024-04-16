<?php
// Dati
$symbolsList = [
  '!', '?', '&', '%', '$', '<', '>', '^', '+', '-', '*', '/', '(', ')', '[', ']', '{', '}', '@', '#', '_', '='
];

// Funzione di generazione password
function passwordGenerator($input_length, $charactersType, $symbolsList)
{
  $password = [];
  for ($i = 0; $i < $input_length; $i++) {
    $indexType = mt_rand(0, count($charactersType) - 1);

    if ($charactersType[$indexType] === 'letters') {
      $character = strtolower(chr(64 + rand(1, 26)));
    } elseif ($charactersType[$indexType] === 'capitalLetters') {
      $character = chr(64 + rand(1, 26));
    } elseif ($charactersType[$indexType] === 'numbers') {
      $character = mt_rand(0, 9);
    } elseif ($charactersType[$indexType] === 'symbols') {
      $character = $symbolsList[mt_rand(0, count($symbolsList) - 1)];
    }

    $password[] = $character;
  }
  return implode('', $password);
}

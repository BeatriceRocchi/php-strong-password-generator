# PHP Strong Password Generator

Creare una pagina che permetta agli utenti di utilizzare il nostro generatore di password (abbastanza) sicure.

**Milestone 1**

Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente. Scrivere tutto (logica e layout) in un unico file _index.php_.

**Milestone 2**

Verificato il corretto funzionamento del codice, spostare la logica in un file _functions.php_ da includere poi nella pagina principale.

**Milestone 3 (BONUS)**

Invece di visualizzare la password nella index, effettuare un redirect ad una pagina dedicata che tramite $\_SESSION recupererà la password da mostrare all’utente.

**Milestone 4 (BONUS)**

Gestire ulteriori parametri per la password: quali caratteri usare fra numeri, lettere e simboli. Possono essere scelti singolarmente (es. solo numeri) oppure possono essere combinati fra loro (es. numeri e simboli, oppure tutti e tre insieme). Dare all’utente anche la possibilità di permettere o meno la ripetizione di caratteri uguali.

## Svolgimento

1. Creare un form (method='GET') con un campo di input per l'inserimento del numero di caratteri richiesto per la password.
2. Creare una funzione passwordGenerator che riceve l'input inserito dall'utente (input_length) e genera la password.
3. Nella funzione: a) inizializzare un array vuoto che conterrà la password, b) con un ciclo for (da da 0 a input_length) estrarre casualmente il tipo di carattere e poi, a seconda di quanto estratto, il carattere specifico da pushare all'interno dell'array. Per lettere maiuscole e minuscole usare chr(64 + rand(1, 26)), per numeri mt_rand(0, 9) e per simboli estrarre con mt_rand l'indice nell'array contenente la lista di simboli e c) ritornare l'array trasformato in stringa.
4. Spostare la funzione in un file separato _functions.php_.

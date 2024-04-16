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

1. Creare un form (method='GET') con un campo di input per l'inserimento del numero di caratteri richiesto per la passowrd.

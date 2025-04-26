--QUERY DELLA PROPOSTA 4
----------------------
--1 Elenco degli immobili (con codice, indirizzo, prezzo) che soddisfano alle richieste di un acquirente, 
--usando come criteri di ricerca: limite di prezzo, quartiere di collocazione, tipologia di immobili;
<<<<<<< HEAD

--2 Elenco degli immobili di un certo quartiere 
--(con codice, indirizzo, tipologia di immobile e prezzo) che sono immediatamente disponibili e nello stato "offerto";

--3 Elenco (con codice, indirizzo, tipologia di immobile e prezzo) 
--degli immobili di un quartiere per i quali è in atto una trattativa, ordinato per tipologia di immobile e per prezzo;
=======



--2lenco degli immobili di un certo quartiere 
--(con codice, indirizzo, tipologia di immobile e prezzo) che sono immediatamente disponibili e nello stato "offerto";
SELECT codice, indirizzo, tipologia, prezzo
FROM immobili
WHERE quartiere = :quartiere AND stato = 'offerto';

--3 Elenco (con codice, indirizzo, tipologia di immobile e prezzo) 
--degli immobili di un quartiere per i quali è in atto una trattativa, ordinato per tipologia di immobile e per prezzo;
SELECT codice, indirizzo, tipologia, prezzo
FROM immobili
WHERE quartiere = idQuartiere AND stato = 'in trattativa'
ORDER BY tipologia, prezzo;
>>>>>>> a3c5d711ed26783b009ce61d8cd0b3209b8b93fc

--4 Numero di telefono dell’acquirente o del proprietario di un dato immobile per organizzare una visita;

--5Numero di visite effettuate e numero di vendite ottenute, nell’ultimo mese, da parte di un venditore;

--6Elenco degli immobili di tipo villa per i quali non sia state trattative;

--7Numero totale delle visite eseguite nell’ultimo anno;

--8Totale del venduto e delle provvigioni di ogni venditore nell’ultimo anno;

--9Elenco degli immobili venduti e per ciascuno: prezzo richiesto, prezzo di vendita, numero di clienti interessati, numero di visite eseguite;

--10Nome del quartiere con il maggior numero di immobili in archivio;

--11Nome del venditore con il minor numero di immobili attribuiti;




  
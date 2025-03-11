--QUERY DELLA PROPOSTA 4
----------------------

--1
SELECT codice, indirizzo, prezzo
FROM immobili
WHERE prezzo <= limite_prezzo 
  AND quartiere = 'quartiere_specifico' 
  AND tipologia IN ('tipologia_immobile_1', 'tipologia_immobile_2', ...);

--2
SELECT codice, indirizzo, tipologia, prezzo
FROM immobili
WHERE quartiere = 'quartiere_specifico'
  AND stato = 'offerto';

--3
SELECT a.numero_telefono AS telefono_acquirente, p.numero_telefono AS telefono_proprietario
FROM immobili i
JOIN acquirenti a ON i.acquirente_id = a.id
JOIN proprietari p ON i.proprietario_id = p.id
WHERE i.codice = 'codice_immobile_specifico';

--4
SELECT COUNT(visite.id) AS numero_visite, COUNT(vendite.id) AS numero_vendite
FROM visite
LEFT JOIN vendite ON visite.immobile_id = vendite.immobile_id
WHERE vendite.venditore_id = 'venditore_specifico';

--5
SELECT codice, indirizzo, prezzo
FROM immobili
WHERE tipologia = 'villa';

--6
SELECT COUNT(*)
FROM visite
WHERE data_visita >= DATE_SUB(CURDATE(), INTERVAL 1 YEAR);

--7
SELECT SUM(prezzo_vendita) AS totale_venduto, SUM(provvigione) AS totale_provvigioni
FROM vendite;

--8
SELECT codice, prezzo_richiesto, prezzo_vendita, numero_clienti, numero_visite
FROM vendite;

--9
SELECT quartiere, COUNT(*) AS numero_immobili
FROM immobili
GROUP BY quartiere
ORDER BY numero_immobili DESC
LIMIT 1;

--10
SELECT venditore_id, COUNT(*) AS numero_immobili
FROM immobili
GROUP BY venditore_id
ORDER BY numero_immobili ASC
LIMIT 1;

--11
SELECT venditore_id, quartiere, COUNT(*) AS numero_immobili
FROM immobili
GROUP BY venditore_id, quartiere;

--12
SELECT *
FROM immobili
WHERE tipologia = 'quadrilocale'
  AND prezzo = 'prezzo_specifico';


  
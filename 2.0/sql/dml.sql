INSERT INTO CS_ACQUIRENTE(nome, cognome,visite_fatte, capitale)
VALUES("Gianmarco", "Esdrongo", 5, 104500);
INSERT INTO CS_ACQUIRENTE(nome, cognome,visite_fatte, capitale)
VALUES("Elena", "Battipanni", 13, 30780);
INSERT INTO CS_ACQUIRENTE(nome, cognome,visite_fatte, capitale)
VALUES("Petunia", "Giannizzari", 3, 1260);


INSERT INTO CS_IMMOBILE(stato, idType, prezzoRichiesto, superfice, idQuartiere, indirizzo, Data_disponibilita)
VALUES("Offerto", 4, 3000 , 500, 2, "Via 1914 13A", "2025/07/04");
INSERT INTO CS_IMMOBILE(stato,  idType, prezzoRichiesto, superfice,  idQuartiere, indirizzo, Data_disponibilita)
VALUES("Offerto", 2, 1550 , 230, 3, "Via della Repubblica 95", "2026/01/28");
INSERT INTO CS_IMMOBILE(stato,  idType, prezzoRichiesto, superfice,  idQuartiere, indirizzo, Data_disponibilita)
VALUES("Offerto", 6, 5000 , 630, 4, "Via Collodi 234", "2021/12/31");
INSERT INTO CS_IMMOBILE(stato,  idType, prezzoRichiesto, superfice,  idQuartiere, indirizzo, Data_disponibilita)
VALUES("Offerto", 5, 15000 , 1000, 5, "Via della Spiritualita", "2023/03/17");


INSERT INTO CS_ADMIN(nome, cognome, email, password)
VALUES("Elisa" ,"Schermidori" , "agenzia1@gmail.com" , "12345678");
INSERT INTO CS_ADMIN(nome, cognome, email, password)
VALUES("Benito" ,"Meloni" , "agenzia2@gmail.com" , "234567");
INSERT INTO CS_ADMIN(nome, cognome, email, password)
VALUES("Francesco" ,"Totti" , "agenzia3@gmail.com" , "3456789");

INSERT INTO CS_QUARTIERE(descrizione)
VALUES ("Quartiere");
INSERT INTO CS_QUARTIERE(descrizione)
VALUES ("Trastevere");
INSERT INTO CS_QUARTIERE(descrizione)
VALUES ("Parioli");
INSERT INTO CS_QUARTIERE(descrizione)
VALUES ("Colosseo");
INSERT INTO CS_QUARTIERE(descrizione)
VALUES ("Vaticano");

INSERT INTO CS_TIPOCASA(descrizione)
VALUES ("Seleziona tipo di casa");
INSERT INTO CS_TIPOCASA(descrizione)
VALUES ("Monocale");
INSERT INTO CS_TIPOCASA(descrizione)
VALUES ("Negozio");
INSERT INTO CS_TIPOCASA(descrizione)
VALUES ("Bilocale");
INSERT INTO CS_TIPOCASA(descrizione)
VALUES ("Villa");
INSERT INTO CS_TIPOCASA(descrizione)
VALUES ("Attico");
INSERT INTO CS_TIPOCASA(descrizione)
VALUES ("Ufficio");
INSERT INTO CS_TIPOCASA(descrizione)
VALUES ("Box");
INSERT INTO CS_TIPOCASA(descrizione)
VALUES ("Capannone");
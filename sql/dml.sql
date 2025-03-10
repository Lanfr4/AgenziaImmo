INSERT INTO CS_ACQUIRENTE(nome, cognome,visite_fatte, capitale)
VALUES("Gianmarco", "Esdrongo", 5, 104500);
INSERT INTO CS_ACQUIRENTE(nome, cognome,visite_fatte, capitale)
VALUES("Elena", "Battipanni", 13, 30780);
INSERT INTO CS_ACQUIRENTE(nome, cognome,visite_fatte, capitale)
VALUES("Petunia", "Giannizzari", 3, 1260);


INSERT INTO CS_VENDITORE(nome, cognome)
VALUES("Elisa" ,"Schermidori");
INSERT INTO CS_VENDITORE(nome, cognome)
VALUES("Benito" ,"Meloni");
INSERT INTO CS_VENDITORE(nome, cognome)
VALUES("Francesco", "Totti");

INSERT INTO CS_IMMOBILE(stato, type, prezzoRichiesto, superfice, quartiere, indirizzo, Data_disponibilita)
VALUES("Offerto", "Bilocale", 3000 , 500, "Trastevere", "Via 1914 13A", "2025/07/04");
INSERT INTO CS_IMMOBILE(stato, type, prezzoRichiesto, superfice, quartiere, indirizzo, Data_disponibilita)
VALUES("Offerto", "Monolocale", 1550 , 230, "Parioli", "Via della Repubblica 95", "2026/01/28");
INSERT INTO CS_IMMOBILE(stato, type, prezzoRichiesto, superfice, quartiere, indirizzo, Data_disponibilita)
VALUES("Offerto", "Attico", 5000 , 630, "Colosseo", "Via Collodi 234", "2021/12/31");
INSERT INTO CS_IMMOBILE(stato, type, prezzoRichiesto, superfice, quartiere, indirizzo, Data_disponibilita)
VALUES("Offerto", "Villa", 15000 , 1000, "Vaticano", "Via della Spiritualita", "2023/03/17");


INSERT INTO CS_ADMIN(email, password)
VALUES("agenzia1@gmail.com" , "12345678");
INSERT INTO CS_ADMIN(email, password)
VALUES("agenzia2@gmail.com" , "0123456789");
INSERT INTO CS_ADMIN(email, password)
VALUES("agenziaIssues@gmail.com" , "666104");

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
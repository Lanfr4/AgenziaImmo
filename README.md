Agenzia Immobiliare – Progetto Database
1. Introduzione

Il progetto consiste nella realizzazione di un database per la gestione di un'agenzia immobiliare che opera in una grande città.

L'agenzia si occupa della vendita di diverse tipologie di immobili, distribuiti nei vari quartieri della città. Il sistema ha lo scopo di organizzare e gestire tutte le informazioni relative agli immobili, ai venditori, agli acquirenti e alle trattative di vendita.

Il database permette di mantenere uno storico delle operazioni effettuate dall'agenzia e di consultare facilmente le informazioni necessarie attraverso interrogazioni SQL.

2. Obiettivi del progetto

Gli obiettivi principali del progetto sono:

Gestire un archivio degli immobili disponibili per la vendita.
Organizzare gli immobili in base alla tipologia e al quartiere.
Memorizzare le informazioni relative agli acquirenti e ai proprietari.
Gestire i venditori che lavorano all'interno dell'agenzia.
Registrare le visite effettuate dai potenziali acquirenti.
Monitorare lo stato degli immobili.
Memorizzare le trattative concluse e le relative vendite.
Analizzare le prestazioni dei venditori attraverso statistiche e interrogazioni.
3. Funzionamento del sistema

L'agenzia immobiliare gestisce immobili di diverse tipologie, ad esempio:

Monolocali
Bilocali
Attici
Ville
Negozi
Uffici
Capannoni
Box

Per ogni immobile vengono registrate diverse informazioni, tra cui:

Codice identificativo dell'immobile.
Tipologia.
Indirizzo.
Quartiere di appartenenza.
Superficie.
Prezzo richiesto per la vendita.
Classe energetica.
Data di disponibilità.

Ogni immobile viene seguito da un solo venditore, mentre un venditore può occuparsi di più immobili.

Stato degli immobili

Ogni immobile può assumere uno dei seguenti stati:

Offerto: l'immobile è disponibile e può essere proposto ai potenziali acquirenti.
Riservato: è in corso una trattativa e l'immobile non può essere proposto ad altri acquirenti.
Venduto: la vendita è stata conclusa.

Un immobile può essere visitato dai potenziali acquirenti solamente quando si trova nello stato di "offerto".

4. Gestione delle visite e delle trattative

Il sistema permette di registrare tutte le visite effettuate dai potenziali acquirenti.

Per ogni visita vengono memorizzati:

L'immobile visitato.
L'acquirente interessato.
Il venditore responsabile.
La data della visita.

Quando un acquirente decide di acquistare un immobile, viene registrata una trattativa.

Se la trattativa va a buon fine, l'immobile passa allo stato di "venduto" e viene inserito nell'archivio delle vendite.

Per ogni vendita vengono conservate informazioni come:

L'immobile venduto.
L'acquirente.
Il prezzo effettivo di vendita.
La data della vendita.
La provvigione ottenuta dall'agenzia.

In questo modo è possibile mantenere uno storico delle vendite concluse.

5. Organizzazione dei dati

Il database deve gestire diverse entità collegate tra loro.

Le principali entità individuate sono:

Immobile: contiene tutte le informazioni relative agli immobili gestiti dall'agenzia.
Quartiere: identifica la zona della città in cui si trova un immobile.
Venditore: rappresenta il personale dell'agenzia che si occupa della gestione e della vendita degli immobili.
Acquirente: rappresenta il potenziale cliente interessato all'acquisto di un immobile.
Proprietario: identifica il soggetto proprietario dell'immobile.
Visita: registra gli appuntamenti effettuati dagli acquirenti per visitare gli immobili.
Vendita: registra le trattative concluse con successo e le informazioni economiche relative alla vendita.

Le entità vengono collegate attraverso relazioni, in modo da evitare la duplicazione dei dati e garantire una corretta organizzazione delle informazioni.

6. Interrogazioni e analisi dei dati

Il progetto prevede la realizzazione di interrogazioni SQL e di pseudocodice per ottenere informazioni utili alla gestione dell'agenzia.

Le principali funzionalità richieste sono:

Ricercare gli immobili in base al prezzo massimo, al quartiere e alla tipologia.
Visualizzare gli immobili disponibili in un determinato quartiere.
Elencare gli immobili per i quali è attualmente in corso una trattativa.
Recuperare i numeri di telefono dell'acquirente e del proprietario per organizzare una visita.
Calcolare il numero di visite e di vendite effettuate da un venditore nell'ultimo mese.
Individuare le ville per le quali non è mai stata registrata una trattativa.
Calcolare il numero totale di visite effettuate nell'ultimo anno.
Calcolare il totale delle vendite e delle provvigioni ottenute da ogni venditore nell'ultimo anno.
Analizzare gli immobili venduti, confrontando il prezzo richiesto con quello effettivo di vendita.
Individuare il quartiere con il maggior numero di immobili presenti nell'archivio.
Individuare il venditore con il minor numero di immobili assegnati.
Visualizzare il numero di immobili assegnati a ogni venditore nei diversi quartieri attraverso una tabella a campi incrociati.
Individuare l'immobile quadrilocale meno costoso in un determinato quartiere.

Queste interrogazioni consentono di ottenere statistiche e informazioni utili per valutare l'andamento dell'agenzia.

7. Risultato finale

Il risultato finale del progetto è un sistema di gestione basato su un database relazionale, progettato per organizzare tutte le attività principali di un'agenzia immobiliare.

Attraverso il database è possibile gestire gli immobili, controllare il loro stato, organizzare le visite, seguire le trattative e registrare le vendite concluse.

Le interrogazioni SQL permettono inoltre di effettuare analisi statistiche, confrontare i risultati dei venditori e individuare informazioni utili per migliorare l'organizzazione e l'efficienza dell'agenzia.

8. Conclusione

Questo progetto permette di applicare concretamente le conoscenze acquisite durante il percorso di studi nell'ambito dei database e dei sistemi informativi.

In particolare, vengono utilizzati concetti come la progettazione concettuale tramite modello E/R, la trasformazione nel modello logico relazionale, la definizione delle tabelle, delle chiavi primarie e delle chiavi esterne e la realizzazione di interrogazioni SQL.

Il progetto rappresenta quindi un esempio pratico di come un database possa semplificare e automatizzare la gestione delle informazioni all'interno di un'attività commerciale.

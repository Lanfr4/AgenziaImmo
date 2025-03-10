CREATE TABLE CS_ACQUIRENTE(
    id integer unsigned auto_increment,
    nome varchar(20) not null,
    cognome varchar(20) not null,
    visite_fatte integer not null,
    capitale float not null,
    idImmobileINT integer unsigned,

    primary key(id),
    foreign key(idImmobileINT) references CS_IMMOBILE(id)
)ENGINE=InnoDB;

CREATE TABLE CS_VENDITORE(
    id integer unsigned auto_increment,
    nome varchar(20) not null,
    cognome varchar(20) not null,
   
    primary key(id)
)ENGINE=InnoDB;


/*
DATI CHE L' AGENZIA PUO MODIFICARE NELLA ZONA RISERVATA:
-STATO
-DATA DI DISPONIBILITA
-PREZZORICHIESTO
*/
CREATE TABLE CS_IMMOBILE(
    id integer unsigned auto_increment,
    stato varchar(20) not null,
    idType integer unsigned,
    prezzoRichiesto float not null,
    superfice float not null,
    idQuartiere integer unsigned,
    indirizzo varchar(30) not null,
    Data_disponibilita date not null,

    primary key(id),
    foreign key(idQuartiere) references CS_QUARTIERE(id),
    foreign key(idType) references CS_TIPOCASA(id)

)ENGINE=InnoDB;

CREATE TABLE CS_QUARTIERE(

    id integer unsigned auto_increment,
    descrizione varchar(30) not null,

    primary key(id)
)ENGINE=InnoDB;

CREATE TABLE CS_TIPOCASA(
    id integer unsigned auto_increment,
    descrizione varchar(30) not null,

    primary key(id)
)ENGINE = InnoDB;

CREATE TABLE CS_VENDITA(
    id integer unsigned auto_increment,
    prezzo float not null,
    data_di_vendita date not null,
    idAcquirente  integer unsigned,
    idVenditore integer unsigned,
    idImmobile integer unsigned,

    primary key(id),
    foreign key(idAcquirente) references CS_ACQUIRENTE(id),
    foreign key(idVenditore) references CS_VENDITORE(id),
    foreign key(idImmobile) references CS_IMMOBILE(id)
    
)ENGINE=InnoDB;


CREATE TABLE CS_ADMIN(
    id integer unsigned auto_increment,
    email varchar(30) not null,
    password varchar(30) not null,

    primary key(id)
)ENGINE=InnoDB;

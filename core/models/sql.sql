/* insert depositor example */
INSERT INTO `Sql750465_2`.`depositors` (`depositor no.`, `name`, `surname`, `mobile`, `telephone`, `email`, `state`, `hours no.`) VALUES ('0', 'Banca', 'Del Tempo', '0000', '0000', 'info@bancadeltempo-sv.it', 'active', '1000000000');

/* il numero del ultimo correntista */
SELECT `depositor no.` FROM depositors ORDER BY `depositor no.` DESC LIMIT 1

/* Query per inserimento correntisti e transazioni */

INSERT INTO `depositors` (`name`, `surname`, `mobile`, `telephone`, `email`, `hours no.`) VALUES ('name', 'surname', 'mobile', 'telephone', 'email', 'hours no.')

INSERT INTO `transactions` (`data`, `by`,`hours`,`for`,	`transaction type`, `activity`  ) VALUES ('data', 'by', 'hours', 'for', 'transaction type', 'activity')

/* Istruzione tipo per la modifica dei dati contenuti in una tabella */

UPDATE anagrafica SET età=25, sport='pattinaggio' WHERE cognome='Feltri' and nome='Daniela

/*
__________________________________________
|                                        |
|             Creazione DB               |
|                                        |
------------------------------------------
 */
CREATE TABLE bdt.depositors (
	`depositor no.`      mediumint UNSIGNED NOT NULL  AUTO_INCREMENT,
	`name`                 varchar(100)  NOT NULL  ,
	`surname`              varchar(100)  NOT NULL  ,
	`mobile`               varchar(20)  NOT NULL  ,
	`telephone`            varchar(20)    ,
	`email`                varchar(100)    ,
	`state`                set('active','unactive')   NOT NULL DEFAULT 'active' ,
	`hours no.`          int  NOT NULL DEFAULT 5 ,
	CONSTRAINT pk_correntisti PRIMARY KEY ( `depositor no.` ),
	CONSTRAINT pk_depositors UNIQUE ( `email`, `depositor no.` )
 ) engine=InnoDB

CREATE TABLE bdt.other_data (
	`depositor no.`      mediumint UNSIGNED NOT NULL  AUTO_INCREMENT,
	`sex`                  set('m','f')   NOT NULL  ,
	`date of birth`        date  NOT NULL  ,
	`place of birth`       tinytext  NOT NULL  ,
	`adress`               longtext    ,
	`city`                 varchar(20)  NOT NULL  ,
	`index`                mediumint    ,
	`province`             varchar(2)    ,
	`document`             varchar(200)   ,
	`document type`        tinytext    ,
	`profession`           varchar(30)    ,
	`degree`               varchar(20)    ,
	`notes`                longtext    ,
	`channel`              varchar(20)    ,
	`other associations`   tinytext    ,
	CONSTRAINT `pk_dati aggiuntivi` PRIMARY KEY ( `depositor no.` )
 ) engine=InnoDB

CREATE INDEX idx_other_data ON bdt.other_data ( `availability for bank` )

CREATE TABLE bdt.purview (
	`id`                   int UNSIGNED NOT NULL  AUTO_INCREMENT,
	`activity`             text  NOT NULL  ,
	`offers`               text    ,
	CONSTRAINT pk_purview PRIMARY KEY ( `id` )
 ) engine=InnoDB

CREATE TABLE bdt.transactions (
	`transaction no`     int UNSIGNED NOT NULL  AUTO_INCREMENT,
	`data`                 date    ,
	`by`                   mediumint UNSIGNED NOT NULL  ,
	`hours`                mediumint UNSIGNED NOT NULL  ,
	`for`                  mediumint UNSIGNED NOT NULL  ,
	`transaction type`   set('normale','corso')   NOT NULL DEFAULT 'normale' ,
	`activity`             text  NOT NULL  ,
	CONSTRAINT pk_transactions PRIMARY KEY ( `transaction no` )
 ) engine=InnoDB

CREATE INDEX idx_transactions ON bdt.transactions ( `by` )

CREATE INDEX idx_transactions_0 ON bdt.transactions ( `for` )

CREATE TABLE bdt.auth (
	`email`                varchar(100)  NOT NULL  ,
	`pwd`                  longtext  NOT NULL  ,
	`depositor no.`      mediumint UNSIGNED NOT NULL  ,
	CONSTRAINT idx_auth UNIQUE ( `depositor no.` ) ,
	CONSTRAINT pk_auth PRIMARY KEY ( `email` )
 ) engine=InnoDB

CREATE INDEX idx_auth_0 ON bdt.auth ( `email`, `depositor no.` )

ALTER TABLE bdt.other_data ADD CONSTRAINT fk_other_data_depositors FOREIGN KEY ( `depositor no.` ) REFERENCES bdt.depositors( `depositor no.` ) ON DELETE NO ACTION ON UPDATE NO ACTION

ALTER TABLE bdt.transactions ADD CONSTRAINT fk_transactions_depositors FOREIGN KEY ( `by` ) REFERENCES bdt.depositors( `depositor no.` ) ON DELETE NO ACTION ON UPDATE NO ACTION

ALTER TABLE bdt.transactions ADD CONSTRAINT fk2_transactions_depositors FOREIGN KEY ( `for` ) REFERENCES bdt.depositors( `depositor no.` ) ON DELETE NO ACTION ON UPDATE NO ACTION

ALTER TABLE bdt.auth ADD CONSTRAINT fk_auth_depositors FOREIGN KEY ( email, `depositor no.` ) REFERENCES bdt.depositors( email, `depositor no.` ) ON DELETE CASCADE ON UPDATE CASCADE



---- Ricerca correntisti ----

-- Lista completa (di default)

SELECT *
FROM Depositors

-- Filtra per cognome

SELECT *
FROM Depositors
WHERE Surname = XXXXXXXXXXXX


-- Filtra per cognome e stato

SELECT *
FROM Depositors
WHERE Surname = XXXXXXXXXXXX AND State = XXXXXXXXXXXX


-- Filtra per nome

SELECT *
FROM Depositors
WHERE Name = XXXXXXXXXXXX


-- Filtra per nome e stato

SELECT *
FROM Depositors
WHERE Name = XXXXXXXXXXXX AND State = XXXXXXXXXXXX


-- Filtra per stato

SELECT *
FROM Depositors
WHERE State = XXXXXXXXXXXX


-- Dettagli correntista

SELECT *
FROM Other_Data
WHERE Depositor_Num = XXXXXXXXXXXXX




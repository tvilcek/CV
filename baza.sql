DROP TABLE IF EXISTS `osobne_inf`;
CREATE TABLE `osobne_inf` (
  `id` int NOT NULL primary key AUTO_INCREMENT,
  `naziv` varchar(100) DEFAULT NULL,
  `vrijednost` text DEFAULT NULL
) ENGINE=InnoDB;


INSERT INTO `osobne_inf` (naziv, vrijednost) VALUES ('Ime i prezime', 'Tena Vilček'),
 ('Datum i godina rođenja', '29.10.1994.'), 
 ('Državljanstvo', 'Hrvatsko'), 
 ('Telefon/mobitel', '099/693-4313, 033/553-520'), 
 ('E-mail', 'tvilcek@ffos.hr');


DROP TABLE IF EXISTS `obrazovanje`;
CREATE TABLE `obrazovanje` (
  `id` int NOT NULL primary key AUTO_INCREMENT,
  `trajanje` varchar(100) DEFAULT NULL,
  `stupanj` text DEFAULT NULL,
  `ustanova` text DEFAULT NULL

) ENGINE=InnoDB;


INSERT INTO `obrazovanje` (trajanje, stupanj, ustanova) VALUES ('Listopad 2013 - rujan 2016', 'Prvostupnik Informatologije', 'Filozofski fakultet u Osijeku'),
 ('Rujan 2009 - svibanj 2013', 'Ekonomist', 'Ekonomija i trgovina, Srednja škola Marka Marulića Slatina');

DROP TABLE IF EXISTS `iskustvo`;
CREATE TABLE `iskustvo` (
  `id` int NOT NULL primary key AUTO_INCREMENT,
  `trajanje` varchar(100) DEFAULT NULL,
  `pozicija` text DEFAULT NULL,
  `ustanova` text DEFAULT NULL

) ENGINE=InnoDB;

INSERT INTO `iskustvo` (trajanje, pozicija, ustanova) VALUES ('Listopad 2014 - rujan 2015', 'JAVA Junior Developer', 'ORKA');

DROP TABLE IF EXISTS `vjestine`;
CREATE TABLE `vjestine` (
 `id` int NOT NULL primary key AUTO_INCREMENT,
  `naziv` varchar(100) DEFAULT NULL,
  `vrijednost` text DEFAULT NULL
) ENGINE=InnoDB;

INSERT INTO `vjestine`  (naziv, vrijednost) VALUES ('Engleski jezik', 'Slušanje - B2, Čitanje - B2, Govorna interakcija - B2, Govorna produkcija - B2'),
('Digitalne kompetencije', 'Poznavanje HTML/CSS (uz poznavanje Foundation i Bootstrap frameworka), JavaScript, MySQL, MSSQL, osnove PHP-a i JAVA programskih jezika, osnove Ionic Framework, PhoneGap framework, NativeScript framework za izradu hibridnih mobilnih aplikacija – stečene kroz obrazovanje i samostalni rad
▪	Osnovno poznavanje aplikacija grafičkog dizajna (Adobe PhotoShop, Adobe Illustrator, InDesign, PhotoScape, GIMP, InkScape, Scribus).
');



DROP TABLE IF EXISTS `dodatne_inf`;
CREATE TABLE `dodatne_inf` (
 `id` int NOT NULL primary key AUTO_INCREMENT,
  `naziv` varchar(100) DEFAULT NULL,
  `vrijednost` text DEFAULT NULL
) ENGINE=InnoDB;

INSERT INTO `vjestine`  (naziv, vrijednost) VALUES ('Konferencije', '▪	MIPRO (Opatija, 2017) – sudionik i govornik (Comparative analysis of tools for development of
native and hybrid mobile applications)
▪	InfoDASKA (Zadar, 2017) – sudionik i govornik (Suradnja volonterskih centara i narodnih knjižnica u Republici Hrvatskoj : http://exlibris.unizd.hr/infodaska2017/program/prezentacije/petak/Stojanovic_Vilcek.pptx)
▪	KulenDayz IT Innovation Conference (Osijek, 2016) – sudjelovanje 
▪	LIDA (Zadar, 2016) – sudjelovanje s posterom (Perception and use of digital sources in the library of Law Faculty in Osijek) i volontiranje 
▪	Droidcon (Zagreb, 2016) – volontiranje i sudjelovanje
▪	KulenDayz IT Innovation Conference (Osijek, 2015) – volontiranje i sudjelovanje
▪	ASIS&T European Workshop (Osijek, 2015) - volontiranje i sudjelovanje
▪	InfoDASKA  (Osijek, 2015) – volontiranje i sudjelovanje
▪	Droidcon (Zagreb, 2015) - sudjelovanje
▪	PubMet (Zadar, 2014) - volontiranje i sudjelovanje
');

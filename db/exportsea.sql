-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.10-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             10.3.0.5771
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for exportsea
DROP DATABASE IF EXISTS `exportsea`;
CREATE DATABASE IF NOT EXISTS `exportsea` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `exportsea`;

-- Dumping structure for table exportsea.branchdocket
DROP TABLE IF EXISTS `branchdocket`;
CREATE TABLE IF NOT EXISTS `branchdocket` (
  `branch` varchar(40) NOT NULL,
  `docketno` varchar(40) NOT NULL,
  PRIMARY KEY (`branch`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table exportsea.branchdocket: ~5 rows (approximately)
/*!40000 ALTER TABLE `branchdocket` DISABLE KEYS */;
INSERT INTO `branchdocket` (`branch`, `docketno`) VALUES
	('Haryana', '12'),
	('Ludhiana', '6'),
	('Mumbai', '16'),
	('New Delhi', '17'),
	('Uttar Pradesh', '7');
/*!40000 ALTER TABLE `branchdocket` ENABLE KEYS */;

-- Dumping structure for table exportsea.demo
DROP TABLE IF EXISTS `demo`;
CREATE TABLE IF NOT EXISTS `demo` (
  `name` varchar(20) NOT NULL,
  `address` varchar(20) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table exportsea.demo: ~4 rows (approximately)
/*!40000 ALTER TABLE `demo` DISABLE KEYS */;
INSERT INTO `demo` (`name`, `address`) VALUES
	('alan', 'kolkata'),
	('anna', 'chennai'),
	('john', 'delhi'),
	('mary', 'mumbai');
/*!40000 ALTER TABLE `demo` ENABLE KEYS */;

-- Dumping structure for table exportsea.edijob
DROP TABLE IF EXISTS `edijob`;
CREATE TABLE IF NOT EXISTS `edijob` (
  `branch` varchar(40) NOT NULL,
  `jobno` varchar(40) NOT NULL,
  PRIMARY KEY (`branch`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table exportsea.edijob: ~5 rows (approximately)
/*!40000 ALTER TABLE `edijob` DISABLE KEYS */;
INSERT INTO `edijob` (`branch`, `jobno`) VALUES
	('Haryana', '7'),
	('Ludhiana', '8'),
	('Mumbai', '9'),
	('New Delhi', '14'),
	('Uttar Pradesh', '4');
/*!40000 ALTER TABLE `edijob` ENABLE KEYS */;

-- Dumping structure for table exportsea.edisb1
DROP TABLE IF EXISTS `edisb1`;
CREATE TABLE IF NOT EXISTS `edisb1` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `jobno` varchar(20) NOT NULL,
  `jobdate` date NOT NULL,
  `branch` varchar(40) NOT NULL,
  `fy` varchar(40) NOT NULL,
  `exportername` varchar(40) NOT NULL,
  `exporteraddress1` varchar(100) NOT NULL,
  `exporteraddress2` varchar(100) NOT NULL,
  `city` varchar(40) NOT NULL,
  `state` varchar(40) NOT NULL,
  `pin` varchar(40) NOT NULL,
  `gstintype` varchar(40) NOT NULL,
  `gstin` varchar(40) NOT NULL,
  `panno` varchar(40) NOT NULL,
  `gststate` varchar(40) NOT NULL,
  `gstcode` varchar(40) NOT NULL,
  `iec` varchar(40) NOT NULL,
  `branchcode` varchar(40) NOT NULL,
  `adcode` varchar(40) NOT NULL,
  `forexcode` varchar(40) NOT NULL,
  `ifsccode` varchar(40) NOT NULL,
  `exportertype` varchar(40) NOT NULL,
  `exporterclass` varchar(40) NOT NULL,
  `consigneename` varchar(40) NOT NULL,
  `consigneeaddress` varchar(40) NOT NULL,
  `consigneecountryname` varchar(40) NOT NULL,
  `consigneecountrycode` varchar(40) NOT NULL,
  `chaname` varchar(40) NOT NULL,
  `locationname` varchar(40) NOT NULL,
  `chanumber` varchar(40) NOT NULL,
  `stateorigin` varchar(40) NOT NULL,
  `dischargecountryname` varchar(40) NOT NULL,
  `dischargecountrycode` varchar(40) NOT NULL,
  `dischargeportname` varchar(40) NOT NULL,
  `dischargeportcode` varchar(40) NOT NULL,
  `destinationcountryname` varchar(40) NOT NULL,
  `destinationcountrycode` varchar(40) NOT NULL,
  `destinationportname` varchar(40) NOT NULL,
  `destinationportcode` varchar(40) NOT NULL,
  `rbiwaiverno` varchar(40) NOT NULL,
  `rbiwaiverdate` date NOT NULL,
  `seal` varchar(20) NOT NULL,
  `factorystuffed` varchar(40) NOT NULL,
  `natureofcargo` varchar(40) NOT NULL,
  `sample` varchar(30) NOT NULL,
  `totalpackages` varchar(30) NOT NULL,
  `packunit` varchar(30) NOT NULL,
  `loosepackages` varchar(40) NOT NULL,
  `noofcontainers` varchar(40) NOT NULL,
  `grossweight` varchar(40) NOT NULL,
  `netweight` varchar(40) NOT NULL,
  `wtunit` varchar(40) NOT NULL,
  `packfrom` varchar(40) NOT NULL,
  `packto` varchar(40) NOT NULL,
  `packtype` varchar(40) NOT NULL,
  `containerno` varchar(60) NOT NULL,
  `containersize` varchar(40) NOT NULL,
  `excisesealno` varchar(40) NOT NULL,
  `sealdate` date NOT NULL,
  `noofpacketsstuffed` varchar(40) NOT NULL,
  `sealtype` varchar(40) NOT NULL,
  `deviceid` varchar(40) NOT NULL,
  `doctype` varchar(40) NOT NULL,
  `docno` varchar(40) NOT NULL,
  `marksno` varchar(250) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

-- Dumping data for table exportsea.edisb1: ~28 rows (approximately)
/*!40000 ALTER TABLE `edisb1` DISABLE KEYS */;
INSERT INTO `edisb1` (`sno`, `jobno`, `jobdate`, `branch`, `fy`, `exportername`, `exporteraddress1`, `exporteraddress2`, `city`, `state`, `pin`, `gstintype`, `gstin`, `panno`, `gststate`, `gstcode`, `iec`, `branchcode`, `adcode`, `forexcode`, `ifsccode`, `exportertype`, `exporterclass`, `consigneename`, `consigneeaddress`, `consigneecountryname`, `consigneecountrycode`, `chaname`, `locationname`, `chanumber`, `stateorigin`, `dischargecountryname`, `dischargecountrycode`, `dischargeportname`, `dischargeportcode`, `destinationcountryname`, `destinationcountrycode`, `destinationportname`, `destinationportcode`, `rbiwaiverno`, `rbiwaiverdate`, `seal`, `factorystuffed`, `natureofcargo`, `sample`, `totalpackages`, `packunit`, `loosepackages`, `noofcontainers`, `grossweight`, `netweight`, `wtunit`, `packfrom`, `packto`, `packtype`, `containerno`, `containersize`, `excisesealno`, `sealdate`, `noofpacketsstuffed`, `sealtype`, `deviceid`, `doctype`, `docno`, `marksno`) VALUES
	(1, '1', '2019-11-02', 'New Delhi', '20-21', '5-ELEMENTS', '16/10181 GURUDWARA ROAD,', 'Karol Bagh,', 'Delhi,', 'NEW DELHI,', '110027,', 'GSTIN', '', '', 'Delhi,', '07', '', '', '', '', '', 'Merchant', 'P', 'REVIMPORT S.A.S,', 'ESPACE POLYGONE NORD,122 RUE BEAU DE ROC', 'United States', 'US', 'Amrit Seair Express', 'Agra, ICD', 'AAACA6571BCH001', 'Delhi,', 'China', 'CN', 'Nanyang', 'CNNNY', 'China', 'CN', 'Dalian', 'CN DLC', '', '0000-00-00', '', 'NO', 'C', 'NO', '14', 'kg', '0', '', '1100', '1000', '', '1', '14', '', 'mrkf9173651', '20""', '', '0000-00-00', '', '', '', '', '', 'I/WE UNDERTAKE TO ABIDE BY FOREIGN EXCHANGE MANAGEMENT ACT, 1999, AS AMENDED FROM TIME;TO TIME, INCLUDING REALIZATION/REPATRIATION OF FOREIGN EXCHANGE TO FROM INDIA.WE INTEND TO CLAIM; REWARDS UNDER MERCHANDISE EXPORTS FROM INDIA SCHEME (MEIS).'),
	(2, '1', '2019-11-04', 'Haryana', '20-21', 'NIDHI EXPORTS', 'D-108, UDYOG VIHAR, PHASE-V,', 'Gurgoan', 'Haryana,', 'GURGAON,', '', '', '', '', '', '', '', '', '', '', '', 'Merchant', '', 'REVIMPORT S.A.S,', 'ESPACE POLYGONE NORD,122 RUE BEAU DE ROC', 'France', 'FR', 'Amrit Seair Express', 'ACC,New Delhi', 'AAACA6571BCH001', 'Delhi,', 'France', 'FR', 'Paris', 'FR PAR', 'France', 'FR', 'Rouen', 'FR URO', '', '0000-00-00', '', 'NO', 'CP', 'NO', '11', 'Array[packunit]', '0', '', '1000', '900', 'kg', '1', '11', '', 'mrkf82374622', '4o st', '', '0000-00-00', '', '', '', '', '', 'I/WE UNDERTAKE TO ABIDE BY FOREIGN EXCHANGE MANAGEMENT ACT, 1999, AS AMENDED FROM TIME;TO TIME, INCLUDING REALIZATION/REPATRIATION OF FOREIGN EXCHANGE TO FROM INDIA.WE INTEND TO CLAIM; REWARDS UNDER MERCHANDISE EXPORTS FROM INDIA SCHEME (MEIS).'),
	(3, '2', '2019-11-08', 'New Delhi', '20-21', 'RUP MAYA SHOE LAST INDUSTRIES (P) LTD.,', 'E-125 UPSIDC SITE-C,', 'SIKANDARA ,', 'Uttar Pradesh,', 'AGRA ,', '282007,', '', '', '', 'Uttar Pradesh,', '09', '0605002231', '', '0303870', '', '', 'Manufacturer', 'P', 'IFABA DEUTSCHLAND GMBH', 'CHARLOTTENSTR. 6,D- 66955 PIRMASENS,MR. ', '', '', 'Amrit Seair Express', 'CusHouse JNPT', 'AAACA6571BCH003', 'Uttar Pradesh,', 'Germany', 'DE', 'Hamburg', 'DE HAM', 'Germany', 'DE', 'Hamburg', 'DE HAM', '', '0000-00-00', '', 'NO', 'P', '', '20', 'CTN', '0', '', '526', '506', 'KGS', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', 'I/WE UNDERTAKE TO ABIDE BY FOREIGN EXCHANGE MANAGEMENT ACT, 1999, AS AMENDED FROM TIME;TO TIME, INCLUDING REALIZATION/REPATRIATION OF FOREIGN EXCHANGE TO FROM INDIA.WE INTEND TO CLAIM; REWARDS UNDER MERCHANDISE EXPORTS FROM INDIA SCHEME (MEIS).'),
	(4, '1', '2019-11-11', 'Mumbai', '20-21', 'SHEPHERDS INDIA INC.', 'GALI NO.5 PEERZADA ROAD,', 'HAYAT NAGAR,', 'Uttar Pradesh,', 'MORADABAD,', '244001,', 'GSTIN', '', '', 'Jharkhand,', '20', '2907000586', '0', '0211859', '', '', 'Merchant', 'P', 'GODINGER SILVER CO', '20 BOND STREET, CENTRAL VALLEY ,NY 10917', 'United States', 'US', 'Amrit Seair Express Pvt Ltd', 'CusHouse JNPT', 'AAACA6571BCH003', 'Uttar Pradesh,', 'United States', 'US', 'New York/New Jersey', 'US NYC', 'United States', 'US', 'New York/New Jersey', 'US NYC', '', '0000-00-00', '', 'NO', 'P', '', '172', 'CTN', '0', '', '1414.95', '734.68', 'kgs', '01', '172', 'CTN', '', '', '', '0000-00-00', '', '', '', '', '', 'I/WE UNDERTAKE TO ABIDE BY FOREIGN EXCHANGE MANAGEMENT ACT, 1999, AS AMENDED FROM TIME;TO TIME, INCLUDING REALIZATION/REPATRIATION OF FOREIGN EXCHANGE TO FROM INDIA.WE INTEND TO CLAIM; REWARDS UNDER MERCHANDISE EXPORTS FROM INDIA SCHEME (MEIS).'),
	(5, '2', '2019-11-11', 'Mumbai', '20-21', 'SHEPHERDS INDIA INC.', 'GALI NO.5 PEERZADA ROAD,', 'HAYAT NAGAR,', 'Uttar Pradesh,', 'MORADABAD,', '244001,', 'GSTIN', '', '', 'Jharkhand,', '20', '2907000586', '0', '0211859', '', '', '', '', 'QINGDAO RITZY INTERNATIONAL CARGO TRANSP', '11F TIMES SQUARE NO. 52 HONGKONG MIDDLE ', 'China', 'CN', 'Amrit Seair Express', 'CusHouse JNPT', 'AAACA6571BCH003', 'Uttar Pradesh,', 'United Kingdom', 'GB', 'Felixstowe', 'GB FXT', 'United Kingdom', 'GB', 'Felixstowe', 'GB FXT', '', '0000-00-00', '', 'NO', 'P', '', '9', 'PKG', '', '', '60.42', '49.02', 'kg', '', '1', '9', '', '', '', '0000-00-00', '', '', '', '', '', 'I/WE UNDERTAKE TO ABIDE BY FOREIGN EXCHANGE MANAGEMENT ACT, 1999, AS AMENDED FROM TIME;TO TIME, INCLUDING REALIZATION/REPATRIATION OF FOREIGN EXCHANGE TO FROM INDIA.WE INTEND TO CLAIM; REWARDS UNDER MERCHANDISE EXPORTS FROM INDIA SCHEME (MEIS).'),
	(6, '1', '2019-11-13', 'Ludhiana', '20-21', 'BASANT ISPAT UDYOG PVT. LTD.', 'c-34 ,FOUNDRY,', 'NAGAR,', 'Uttar Pradesh,', '', '282006,', 'GSTIN', '09AABCB265', '', '', '', '', '', '', '', '', 'Merchant', '', 'SHAH BROTHERS IMPORTS', 'ONTARIO LST,1XB ,', 'Canada', 'CA', 'amrit seair', 'CusHouse JNPT', 'AAACA6571BCH003', 'Select State', 'Canada', 'CA', 'Sydney', 'CA SYD', 'American Samoa', 'AS', 'Pago Pago', 'AS PPG', '', '0000-00-00', '', 'NO', 'P', 'NO', '10', 'ctn', '0', '', '200', '180', '', '1', '10', 'ctn', '', '', '', '0000-00-00', '', '', '', '', '', 'I/WE UNDERTAKE TO ABIDE BY FOREIGN EXCHANGE MANAGEMENT ACT, 1999, AS AMENDED FROM TIME;TO TIME, INCLUDING REALIZATION/REPATRIATION OF FOREIGN EXCHANGE TO FROM INDIA.WE INTEND TO CLAIM; REWARDS UNDER MERCHANDISE EXPORTS FROM INDIA SCHEME (MEIS).'),
	(7, '2', '2019-11-26', 'Haryana', '20-21', 'QUEENBEE FOODS PVT.LTD.', 'A-36 IInd FLOOR,', ',LOK VIHAR  Pitampura,', 'Delhi,', 'New Delhi', '110034,', 'GSTIN', '07AAACQ305', '', 'Delhi,', '07', '0512093776', '', '', '5612165574', '', 'Manufacturer', '', 'ODEM INTERNATIONAL INC', '3400 RUE DOUGLAS B.FLOREANI,ST LAURENT,Q', 'Canada', 'CA', 'Amrit Freight Forwarders', 'Panipat,ICD', 'AAACA6571BCH001', 'Select State', 'United States', 'US', 'Chicago', 'US CHI', 'United States', 'US', 'Chicago', 'US CHI', '', '0000-00-00', '', 'YES', 'C', '', '124', 'pkg', '0', '', '39432', '37200', 'kg', '01', '124', 'Pkg', '', '', '', '0000-00-00', '', '', '', '', '', 'I/WE UNDERTAKE TO ABIDE BY FOREIGN EXCHANGE MANAGEMENT ACT, 1999, AS AMENDED FROM TIME;TO TIME, INCLUDING REALIZATION/REPATRIATION OF FOREIGN EXCHANGE TO FROM INDIA.WE INTEND TO CLAIM; REWARDS UNDER MERCHANDISE EXPORTS FROM INDIA SCHEME (MEIS).'),
	(8, '3', '2019-11-30', 'Mumbai', '20-21', 'SHUBHAM OVERSEAS INC.', 'NAGLA BHAU  INDUSTRIAL AREA,', 'BEHIND PETROL PUMP,', 'Uttar Pradesh,', 'Firozabad,', '283203,', '', '', '', 'Uttar Pradesh,', '09', '0610004352', '0', '0360394', '', '', 'Merchant', '', 'Lifetime INC', '22 BLAKE STREET MEDFORD,MA 02155,', 'United States', 'US', 'Amrit Seair Express', 'CusHouse JNPT', 'AAACA6571BCH003', 'Maharashtra,', 'United States', 'US', 'SAN PEDRO', 'USSPQ', 'United States', 'US', 'SAN PEDRO', 'USSPQ', '', '0000-00-00', '', 'NO', 'P', 'NO', '448', 'CTN', '', '', '2503', '1881.66', 'Kg', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', 'I/WE UNDERTAKE TO ABIDE BY FOREIGN EXCHANGE MANAGEMENT ACT, 1999, AS AMENDED FROM TIME;TO TIME, INCLUDING REALIZATION/REPATRIATION OF FOREIGN EXCHANGE TO FROM INDIA.WE INTEND TO CLAIM; REWARDS UNDER MERCHANDISE EXPORTS FROM INDIA SCHEME (MEIS).'),
	(9, '1792', '2019-12-04', 'Mumbai', '19-20', 'JIN AAGAM LIFESTYLE SOLUTIONS PRIVATE LI', 'A/2  ADINATH APARTMENT ,', '281 TARDEO Road Opp Matru Mandir,', 'Maharashtra,', 'MUMBAI,', '400007,', 'GSTIN', '27AACCJ9152F1ZI', '', 'Maharashtra,', '27', '0312069049', '0', '0290170', '', '', 'Manufacturer', 'P', 'TATARA GROUP', '381 BLAIR ROAD AVENEL, NJ, 07001 U.S.A,', 'United States', '', 'AMRIT SEAIR EXPRESS', 'CusHouse JNPT', 'AAACA6571BCH003', 'Maharashtra,', 'United States', 'US', 'New York', 'US NYC', 'United States', 'US', 'New York', 'US NYC', '', '0000-00-00', '', 'NO', 'P', 'NO', '44', 'CTN', 'o', '', '488.84', '369.6', 'KGS', '1', '44', 'CTN', '', '', '', '0000-00-00', '', '', '', '', '', 'I/WE UNDERTAKE TO ABIDE BY FOREIGN EXCHANGE MANAGEMENT ACT, 1999, AS AMENDED FROM TIME;TO TIME, INCLUDING REALIZATION/REPATRIATION OF FOREIGN EXCHANGE TO FROM INDIA.WE INTEND TO CLAIM; REWARDS UNDER MERCHANDISE EXPORTS FROM INDIA SCHEME (MEIS).'),
	(10, '1794', '2019-12-04', 'Mumbai', '19-20', 'JIN AAGAM LIFESTYLE SOLUTIONS PRIVATE LI', 'A/2  ADINATH APARTMENT ,', '281 TARDEO Road Opp Matru Mandir,', 'Maharashtra,', 'MUMBAI,', '400007,', 'GSTIN', '27AACCJ9152F1ZI', '', 'Maharashtra,', '27', '0312069049', '0', '0290170', '', '', 'Manufacturer', 'P', 'TATARA GROUP', '381 BLAIR ROAD AVENEL, NJ, 07001 U.S.A,', 'United States', 'US', 'Amrit Seair Express', 'CusHouse JNPT', 'AAACA6571BCH003', 'Maharashtra,', 'United States', 'US', 'New York', 'US NYC', 'United States', 'US', 'New York', 'US NYC', '', '0000-00-00', '', 'NO', 'P', 'NO', '44', 'CTN', '0', '', '844.89', '839.9', 'CTN', '1', '44', '', '', '', '', '0000-00-00', '', '', '', '', '', 'I/WE UNDERTAKE TO ABIDE BY FOREIGN EXCHANGE MANAGEMENT ACT, 1999, AS AMENDED FROM TIME;TO TIME, INCLUDING REALIZATION/REPATRIATION OF FOREIGN EXCHANGE TO FROM INDIA.WE INTEND TO CLAIM; REWARDS UNDER MERCHANDISE EXPORTS FROM INDIA SCHEME (MEIS).'),
	(11, '2', '2019-12-06', 'Ludhiana', '19-20', 'UNCLE FOODS', 'B-XXX A-131/5  ST. NO. 20 ,', 'JEEWAN NAGAR  CHD- ROAD ,', 'Punjab,', 'Ludhiana,', '141010.', 'GSTIN', '03ANSPD7300D1ZI', '', 'Punjab,', '03', 'ANSPD7300D', '0', '0303198', '', '', 'Merchant', 'P', 'VERSOVA INC.', '6800 REXWOOD ROAD,MISSISSAUGA,Ontanrio,', 'Canada', 'CA', 'Amrit seair express', 'Kanech Sahniwal ICD', 'AAACA6571BCH004', 'Select State', 'Canada', 'CA', 'Toronto', 'CA TOR', 'Canada', 'CA', 'Toronto', 'CA TOR', '', '0000-00-00', '', 'NO', 'C', 'NO', '1961', 'PKG', '0', '', '25931', '23300', 'KGS', '1', '1961', 'PKG', '', '', '', '0000-00-00', '', '', '', '', '', 'I/WE UNDERTAKE TO ABIDE BY FOREIGN EXCHANGE MANAGEMENT ACT, 1999, AS AMENDED FROM TIME;TO TIME, INCLUDING REALIZATION/REPATRIATION OF FOREIGN EXCHANGE TO FROM INDIA.WE INTEND TO CLAIM; REWARDS UNDER MERCHANDISE EXPORTS FROM INDIA SCHEME (MEIS).'),
	(12, '3', '2019-12-06', 'Ludhiana', '19-20', 'UNCLE FOODS', 'B-XXX A-131/5  ST. NO. 20 ,', 'JEEWAN NAGAR  CHD- ROAD ,', 'Punjab,', 'Ludhiana,', '141010.', 'GSTIN', '03ANSPD7300D1ZI', '', 'Punjab,', '03', 'ANSPD7300D', '0', '0303198', '', '', 'Merchant', 'P', 'VERSOVA INC.', '6800 REXWOOD ROAD,MISSISSAUGA,Ontanrio,', 'Canada', 'CA', 'Amrit Seair Express ', 'Kanech Sahniwal ICD', 'AAACA6571BCH004', 'Select State', 'Canada', 'CA', 'Montreal', 'CA MTR', 'Canada', 'CA', 'Montreal', 'CA MTR', '', '0000-00-00', '', 'NO', 'P', 'NO', '1810', 'PKG', '', '', '2210', '2019', 'PKG', '1', '1810', 'PKG', '', '', '', '0000-00-00', '', '', '', '', '', 'I/WE UNDERTAKE TO ABIDE BY FOREIGN EXCHANGE MANAGEMENT ACT, 1999, AS AMENDED FROM TIME;TO TIME, INCLUDING REALIZATION/REPATRIATION OF FOREIGN EXCHANGE TO FROM INDIA.WE INTEND TO CLAIM; REWARDS UNDER MERCHANDISE EXPORTS FROM INDIA SCHEME (MEIS).'),
	(13, '2', '2019-12-06', 'Uttar Pradesh', '19-20', 'BENARA UDYOG LIMITED', 'BHARATPUR ROAD,', 'BODLA,', 'Uttar Pradesh,', 'AGRA,', '282007,', 'GSTIN', '09AAACB6515A1Z7', '', 'Select State', 'Selec', '0697002373', '', '0242228', '', '', 'Merchant', 'P', 'TATARA GROUP', '381 BLAIR ROAD AVENEL, NJ, 07001 U.S.A,', 'United States', 'US', 'amrit seair express', 'Chakeri Kanpur ICD', 'AAACA6571BCH001', 'Uttar Pradesh,', 'United States', 'US', 'Houston', 'US HOU', 'United States', 'US', 'Houston', 'US HOU', '', '0000-00-00', '', 'NO', 'P', 'NO', '', '', '0', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', 'I/WE UNDERTAKE TO ABIDE BY FOREIGN EXCHANGE MANAGEMENT ACT, 1999, AS AMENDED FROM TIME;TO TIME, INCLUDING REALIZATION/REPATRIATION OF FOREIGN EXCHANGE TO FROM INDIA.WE INTEND TO CLAIM; REWARDS UNDER MERCHANDISE EXPORTS FROM INDIA SCHEME (MEIS).'),
	(14, '4', '2019-12-06', 'Ludhiana', '19-20', 'UNCLE FOODS', 'B-XXX A-131/5  ST. NO. 20 ,', 'JEEWAN NAGAR  CHD- ROAD ,', 'Punjab,', 'Ludhiana,', '141010.', 'GSTIN', '03ANSPD7300D1ZI', '', 'Punjab,', '03', 'ANSPD7300D', '0', '0303198', '', '', 'Merchant', '', 'SALWAN TRADING . INC.', '1125 WESTOVER LANE,SCHAUMBURG,IL 60193', 'United States', 'US', 'Amrit Seair Express Pvt.Ltd', 'Chakeri Kanpur ICD', 'AAACA6571BCH001', 'Select State', 'United States', 'US', 'Chicago', 'US CHI', 'United States', 'US', 'Chicago', 'US CHI', '', '0000-00-00', '', 'NO', 'C', 'NO', '836', 'PKG', '', '', '10848.700', '9260', 'KGS', '1', '836', 'PKG', '', '', '', '0000-00-00', '', '', '', '', '', 'I/WE UNDERTAKE TO ABIDE BY FOREIGN EXCHANGE MANAGEMENT ACT, 1999, AS AMENDED FROM TIME;TO TIME, INCLUDING REALIZATION/REPATRIATION OF FOREIGN EXCHANGE TO FROM INDIA.WE INTEND TO CLAIM; REWARDS UNDER MERCHANDISE EXPORTS FROM INDIA SCHEME (MEIS).'),
	(15, '4', '2019-12-10', 'Mumbai', '19-20', 'BKG OVERSEAS', '3- BOHRAN STREET,', ',', 'FIROZABAD,', 'UTTAR PRADESH,', '283203,', 'GSTIN', '09AAGFB8391P2ZL', '', 'Uttar Pradesh,', '09', '0605012466', '0', '0242228', '', '', 'Merchant', 'P', 'THE IMPORT COLLECTION', '7885 NELSON ROAD,PANORAMA CITY,CA -91402', 'United States', 'US', 'AMRIT SEAIR EXPRESS PVT. LTD.', 'CusHouse JNPT', 'AAACA6571BCH003', 'Uttar Pradesh,', 'United States', 'US', 'Los Angeles', 'US LAX', 'United States', 'US', 'Los Angles', 'USLAX', '', '0000-00-00', '', 'NO', 'P', 'NO', '169', 'CTN', '0', '', '1230.420', '778.450', 'KGS', '1', '169', '', '', '', '', '0000-00-00', '', '', '', '', '', 'I/WE UNDERTAKE TO ABIDE BY FOREIGN EXCHANGE MANAGEMENT ACT, 1999, AS AMENDED FROM TIME;TO TIME, INCLUDING REALIZATION/REPATRIATION OF FOREIGN EXCHANGE TO FROM INDIA.WE INTEND TO CLAIM; REWARDS UNDER MERCHANDISE EXPORTS FROM INDIA SCHEME (MEIS).'),
	(16, '5', '2019-12-11', 'Mumbai', '19-20', 'ECO ORGANICS', 'B-5/C-5 INDUSTRIAL ESTATE,', 'AJEETPUR,', 'Uttar Pradesh,', 'RAMPUR,', '244901,', '', '09AAAFO9156B1ZB', '', 'Uttar Pradesh,', '09', '2903001936', '', '0202566', '', '', 'Manufacturer', 'P', 'SHANGHAI POLAR BEARPHARMACEUTICAL', 'CO LTD-NO 2076,WAQIAN rdWAIGANG TOWN JIA', 'China', 'CN', 'AMRIT SEAIR EXPRESS PVT. LTD.', 'CusHouse JNPT', 'AAACA6571BCH003', 'Select State', 'China', 'CN', 'Shanghai', 'CN SHA', 'China', 'CN', 'Shanghai', 'CN SHA', '', '0000-00-00', '', 'NO', 'P', 'NO', '80', 'DRM', '0', '', '16109.300', '14400.00', 'KGS', '1', '80', '', '', '', '', '0000-00-00', '', '', '', '', '', 'I/WE UNDERTAKE TO ABIDE BY FOREIGN EXCHANGE MANAGEMENT ACT, 1999, AS AMENDED FROM TIME;TO TIME, INCLUDING REALIZATION/REPATRIATION OF FOREIGN EXCHANGE TO FROM INDIA.WE INTEND TO CLAIM; REWARDS UNDER MERCHANDISE EXPORTS FROM INDIA SCHEME (MEIS).'),
	(17, '3', '2020-01-03', 'New Delhi', '19-20', 'INDOCAN HONEY PVT LTD', 'PLOT NO.1  KAMI GANNAUR ROAD,', 'VILLAGE KAMI ,', 'Haryana,', 'sonepat,', '131001,', 'GSTIN', '06AADCI818', '', 'Haryana,', '06', '0515019771', '', '0180010', '', '', 'Merchant', 'P', 'ODEM INTERNATIONAL INC', '3400 RUE DOUGLAS B.FLOREANI,ST LAURENT,Q', 'Canada', 'CA', '', 'CusHouse JNPT', 'AAACA6571BCH003', 'Haryana,', 'Canada', 'CA', 'Halifax', 'CA HAL', 'Canada', 'CA', 'Toronto', 'CA TOR', '', '0000-00-00', '', 'NO', 'P', 'NO', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', 'I/WE UNDERTAKE TO ABIDE BY FOREIGN EXCHANGE MANAGEMENT ACT, 1999, AS AMENDED FROM TIME;TO TIME, INCLUDING REALIZATION/REPATRIATION OF FOREIGN EXCHANGE TO FROM INDIA.WE INTEND TO CLAIM; REWARDS UNDER MERCHANDISE EXPORTS FROM INDIA SCHEME (MEIS).'),
	(18, '5', '2020-01-03', 'New Delhi', '19-20', 'A.S. SPINNERS (P) LTD.', 'KABRI ROAD,', 'NEAR S.R. GODOWN,', '', 'PANIPAT,', '132103,', 'GSTIN', '', '', 'Haryana', '6', '3395001016', '', '', '', '', '', '', 'SHAH BROTHERS IMPORTS', '6070 TOMKEN ROAD, MISSISSAUGA,ONTARIO L5', 'Canada', 'CA', '', '', '', 'Select State', '', '', '', '', 'Australia', 'AU', 'Adelaide', 'AUPAE', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', 'I/WE UNDERTAKE TO ABIDE BY FOREIGN EXCHANGE MANAGEMENT ACT, 1999, AS AMENDED FROM TIME;TO TIME, INCLUDING REALIZATION/REPATRIATION OF FOREIGN EXCHANGE TO FROM INDIA.WE INTEND TO CLAIM; REWARDS UNDER MERCHANDISE EXPORTS FROM INDIA SCHEME (MEIS).'),
	(19, '6', '2020-01-03', 'Mumbai', '19-20', 'SAAV INC.', 'PLOT NO. 111 PHASE 1 ,', 'HSIDC KUNDLI ,', 'Haryana,', 'Sonepat,', '131028,', 'GSTIN', '', '', 'Haryana,', '06', '0599064056', '0', '6500110', '', '', 'Merchant', 'P', 'SEASALT LIMITED', 'UNIT 8 FALMOUTH BUSINESS PARK, BICKLAND ', 'United Kingdom', 'GB', 'Amrit Seair Express Pvt.Ltd', 'CusHouse JNPT', 'AAACA6571BCH003', 'Haryana,', 'United Kingdom', 'GB', 'Portsmouth', 'GBPME', 'United Kingdom', 'GB', 'London', 'GBLON', '', '0000-00-00', '', 'NO', 'P', 'NO', '210', 'PKG', '0', '', '2408', '2202', 'kgs', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', 'I/WE UNDERTAKE TO ABIDE BY FOREIGN EXCHANGE MANAGEMENT ACT, 1999, AS AMENDED FROM TIME;TO TIME, INCLUDING REALIZATION/REPATRIATION OF FOREIGN EXCHANGE TO FROM INDIA.WE INTEND TO CLAIM; REWARDS UNDER MERCHANDISE EXPORTS FROM INDIA SCHEME (MEIS).'),
	(20, '7', '2020-01-04', 'Mumbai', '19-20', 'BKG OVERSEAS', '3- BOHRAN STREET,', ',', 'Uttar Pradesh,', 'FIROZABAD,', '283203,', 'GSTIN', '09AAGFB8391P2ZL', '', 'Uttar Pradesh,', '09', '0605012466', '0', '0242228', 'CNRB0002341', '', 'Merchant', '', 'CREATIVE CO-OP INC', '6000 FREEPORT AVE SUITE 101,MEMPHIS,TN 3', 'United States', 'US', 'Amrit Seair Express Pvt.Ltd', 'CusHouse JNPT', 'AAACA6571BCH003', 'Uttar Pradesh,', 'United States', 'US', 'Memphis', 'USMEM', 'United States', 'US', 'Memphis', 'USMEM', '', '0000-00-00', '', 'NO', 'P', 'NO', '837', 'CTN', '0', '', '6007.910', '3025.600', 'KGS', '1', '837', 'CTN', '', '', '', '0000-00-00', '', '', '', '', '', 'I/WE UNDERTAKE TO ABIDE BY FOREIGN EXCHANGE MANAGEMENT ACT, 1999, AS AMENDED FROM TIME;TO TIME, INCLUDING REALIZATION/REPATRIATION OF FOREIGN EXCHANGE TO FROM INDIA.WE INTEND TO CLAIM; REWARDS UNDER MERCHANDISE EXPORTS FROM INDIA SCHEME (MEIS).'),
	(21, '8', '2020-01-04', 'Mumbai', '19-20', 'KLK INTERNATIONAL', 'PETAL BASTI,', 'RAMPUR ROAD ,', 'Uttar Pradesh,', 'MORADABAD,', '244001,', 'GSTIN', '09AADFK6604M1Z2', '', 'Uttar Pradesh,', '09', '2900002770', '0', '0292138', '', '', 'Manufacturer', 'P', 'TATARA GROUP', '381 BLAIR ROAD AVENEL, NJ, 07001 U.S.A,', 'United States', 'US', 'Amrit Seair Express Pvt.Ltd', 'CusHouse JNPT', 'AAACA6571BCH003', 'Uttar Pradesh,', 'United States', 'US', 'New York', 'USNYC', 'United States', 'US', 'New York', 'USNYC', '', '0000-00-00', '', 'NO', 'P', 'NO', '988', 'CTN', '0', '', '4042.500', '2869.560', 'KGS', '1', '988', '', '', '', '', '0000-00-00', '', '', '', '', '', 'I/WE UNDERTAKE TO ABIDE BY FOREIGN EXCHANGE MANAGEMENT ACT, 1999, AS AMENDED FROM TIME;TO TIME, INCLUDING REALIZATION/REPATRIATION OF FOREIGN EXCHANGE TO FROM INDIA.WE INTEND TO CLAIM; REWARDS UNDER MERCHANDISE EXPORTS FROM INDIA SCHEME (MEIS).'),
	(22, '8', '2020-01-06', 'New Delhi', '19-20', 'BALI MANTRA EXPORTS PRIVATE LIMITED', '11 FEROZE GANDHI ROAD,', 'LAJPAT NAGAR-III,', 'Delhi,', 'New Delhi,', '110024,', 'GSTIN', '07AAECB6718P1Z7', '', 'Delhi,', '07', '0511074841', '0', '6690002', '', '', 'Manufacturer', 'P', 'BALI MANTRA LLC.', 'DBA STRAIGHT LINE COLLECTION,244 MADISON', 'United States', 'US', 'Amrit Seair Express Pvt.Ltd', 'CusHouse JNPT', 'AAACA6571BCH003', 'Delhi,', 'United States', 'US', 'New York', 'USNYC', 'United States', 'US', 'New York', 'USNYC', '', '0000-00-00', '', 'NO', 'P', 'NO', '202', 'PKG', '0', '', '2454.400', '1965.78', 'KGS', '1', '202', 'PKG', '', '', '', '0000-00-00', '', '', '', '', '', 'I/WE UNDERTAKE TO ABIDE BY FOREIGN EXCHANGE MANAGEMENT ACT, 1999, AS AMENDED FROM TIME;TO TIME, INCLUDING REALIZATION/REPATRIATION OF FOREIGN EXCHANGE TO FROM INDIA.WE INTEND TO CLAIM; REWARDS UNDER MERCHANDISE EXPORTS FROM INDIA SCHEME (MEIS).'),
	(23, '9', '2020-01-06', 'New Delhi', '19-20', 'QUEENBEE FOODS PVT.LTD.', 'A-36 IInd FLOOR,', ',LOK VIHAR  Pitampura,', 'Delhi,', 'New Delhi', '110034,', 'GSTIN', '07AAACQ305', '', 'Delhi,', '07', '0512093776', '', '', '', '', '', '', 'ODEM INTERNATIONAL INC', '3400 RUE DOUGLAS B.FLOREANI,ST LAURENT,Q', 'Canada', 'CA', 'Amrit Seair Express Pvt.Ltd', 'CusHouse JNPT', 'AAACA6571BCH003', 'Delhi,', 'Canada', 'CA', 'Toronto', 'CATOR', 'Canada', 'CA', 'Montreal', 'CAMTR', '', '0000-00-00', '', 'NO', 'P', 'NO', '200', 'OKG', '0', '', '2400', '2200', 'kgs', '', '1', '200', '', '', '', '0000-00-00', '', '', '', '', '', 'I/WE UNDERTAKE TO ABIDE BY FOREIGN EXCHANGE MANAGEMENT ACT, 1999, AS AMENDED FROM TIME;TO TIME, INCLUDING REALIZATION/REPATRIATION OF FOREIGN EXCHANGE TO FROM INDIA.WE INTEND TO CLAIM; REWARDS UNDER MERCHANDISE EXPORTS FROM INDIA SCHEME (MEIS).'),
	(24, '10', '2020-01-06', 'New Delhi', '19-20', '5-ELEMENTS', '16/10181 GURUDWARA ROAD,', 'Karol Bagh,', '', '', '110005,', 'GSTIN', 'ghdhd333', '', 'Delhi', '07', '0508027560', '1', '', '', '', 'Manufacturer', 'P', 'IFABA DEUTSCHLAND GMBH', 'CHARLOTTENSTR. 6,D- 66955 PIRMASENS,MR. ', 'Germany', 'DE', 'Amrit Seair Express Pvt.Ltd', 'CusHouse JNPT', 'AAACA6571BCH003', 'Andhra pradesh(beefore division),', '', '', '', '', 'Bahrain', 'BH', 'Mina Salman', 'BHMIN', '', '0000-00-00', '', 'NO', 'C', 'NO', '11', 'ff', '0', '', '34343', '343', 'kgs', '1', '11', '', '', '', '', '0000-00-00', '', '', '', '', '', 'I/WE UNDERTAKE TO ABIDE BY FOREIGN EXCHANGE MANAGEMENT ACT, 1999, AS AMENDED FROM TIME;TO TIME, INCLUDING REALIZATION/REPATRIATION OF FOREIGN EXCHANGE TO FROM INDIA.WE INTEND TO CLAIM; REWARDS UNDER MERCHANDISE EXPORTS FROM INDIA SCHEME (MEIS).'),
	(25, '11', '2020-01-07', 'New Delhi', '19-20', 'JASLEEN OVERSEAS', 'PLOT NO 164,', 'SEC 29 PART-2 HUDA,', 'Haryana,', 'Panipat,', '132103,', 'GSTIN', '06ACDPR2659B1ZS', '', 'Haryana,', '06', '3310002217', '0', '0220742', '', '', 'Manufacturer', 'P', 'SEASALT LIMITED', 'UNIT 8 FALMOUTH BUSINESS PARK, BICKLAND ', 'United Kingdom', 'GB', 'Amrit Seair Express Pvt.Ltd', 'CusHouse JNPT', 'AAACA6571BCH003', 'Haryana,', 'United Kingdom', 'GB', 'Plymouth', 'GBPLY', 'United Kingdom', 'GB', 'Thamesport', 'GBRCS', '', '0000-00-00', '', 'NO', 'P', 'NO', '102', 'PKG', '0', '', '1254', '1100', 'KGS', '1', '102', 'PKG', '', '', '', '0000-00-00', '', '', '', '', '', 'I/WE UNDERTAKE TO ABIDE BY FOREIGN EXCHANGE MANAGEMENT ACT, 1999, AS AMENDED FROM TIME;TO TIME, INCLUDING REALIZATION/REPATRIATION OF FOREIGN EXCHANGE TO FROM INDIA.WE INTEND TO CLAIM; REWARDS UNDER MERCHANDISE EXPORTS FROM INDIA SCHEME (MEIS).'),
	(26, '12', '2020-01-07', 'New Delhi', '19-20', 'AARAV IMPEX PRIVATE LIMITED', '1102 11 Floor KLJ Tower,', 'Netaji Subhash Place', 'Delhi,', 'NEW DELHI,', '110027,', 'GSTIN', '07AAJCA678', '', 'Delhi', '7', '511045531', '', '', '', '', 'Merchant', 'P', 'SHAH BROTHERS IMPORTS', '6070 TOMKEN ROAD, MISSISSAUGA,ONTARIO L5', 'Canada', 'CA', 'Amrit Seair Express Pvt.Ltd', 'CusHouse JNPT', 'AAACA6571BCH003', 'Delhi,', 'Canada', 'CA', 'Halifax', 'CAHAL', 'Canada', 'CA', 'Halifax', 'CAHAL', '', '0000-00-00', '', 'NO', 'P', 'NO', '112', 'KGS', '0', '', '345', '222', 'kgs', '', '1', '112', '', '', '', '0000-00-00', '', '', '', '', '', 'I/WE UNDERTAKE TO ABIDE BY FOREIGN EXCHANGE MANAGEMENT ACT, 1999, AS AMENDED FROM TIME;TO TIME, INCLUDING REALIZATION/REPATRIATION OF FOREIGN EXCHANGE TO FROM INDIA.WE INTEND TO CLAIM; REWARDS UNDER MERCHANDISE EXPORTS FROM INDIA SCHEME (MEIS).'),
	(27, '13', '2020-01-07', 'New Delhi', '19-20', 'SRF Limited', 'D-II/I GIDC PCPIR GIDC PHASE-2,', 'TAL VAGRA VILLAGE DAHEJ,', 'Gujarat,', 'Bharuch,', '392130,', 'GSTIN', '', '', '', '', '0588109592', '', '', '', '', '', 'P', 'GODINGER SILVER CO', '20 BOND STREET, CENTRAL VALLEY ,NY 10917', 'United States', 'US', 'Amrit Seair Express Pvt.Ltd', 'CusHouse JNPT', 'AAACA6571BCH003', 'Gujarat,', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', 'I/WE UNDERTAKE TO ABIDE BY FOREIGN EXCHANGE MANAGEMENT ACT, 1999, AS AMENDED FROM TIME;TO TIME, INCLUDING REALIZATION/REPATRIATION OF FOREIGN EXCHANGE TO FROM INDIA.WE INTEND TO CLAIM; REWARDS UNDER MERCHANDISE EXPORTS FROM INDIA SCHEME (MEIS).'),
	(28, '9', '2020-01-08', 'Mumbai', '19-20', 'SUNRISE HANDICRAFTS', '84/A2,', 'CivilLines,', 'Uttar Pradesh;', 'Moradabad,', '244001,', 'GSTIN', '09AAAAS4208D1ZU', '', 'Uttar Pradesh,', '09', '0588007617', '0', '0004113', '', '', 'Manufacturer', 'P', 'RNA RESOURCES GROUP LTD', 'LANDMARK (HOME CENTRE),\r\nPO BOX 25030,Du', 'United Arab Emirates', 'AE', 'Amrit Seair Express Pvt.Ltd', 'CusHouse JNPT', 'AAACA6571BCH003', 'Uttar Pradesh,', 'United Arab Emirates', 'AE', 'Ajman', 'AEAJM', 'United Arab Emirates', 'AE', 'Ajman', 'AEAJM', '', '0000-00-00', '', 'NO', 'P', 'NO', '84', 'CTN', '0', '', '803.64', '429.910', 'KGS', '1', '84', 'CTN', '', '', '', '0000-00-00', '', '', '', '', '', 'I/WE UNDERTAKE TO ABIDE BY FOREIGN EXCHANGE MANAGEMENT ACT, 1999, AS AMENDED FROM TIME;TO TIME, INCLUDING REALIZATION/REPATRIATION OF FOREIGN EXCHANGE TO FROM INDIA.WE INTEND TO CLAIM; REWARDS UNDER MERCHANDISE EXPORTS FROM INDIA SCHEME (MEIS).'),
	(29, '3', '2020-01-08', 'Haryana', '19-20', 'SHEPHERDS INDIA INC.', 'GALI NO.5 PEERZADA ROAD,', '', '', '', '244001,', 'GSTIN', '', '', 'Jharkhand,', '20', '2907000586', '0', '0211859', '', '', 'Merchant', 'P', 'SHAH BROTHERS IMPORTS', '6070 TOMKEN ROAD, MISSISSAUGA,ONTARIO L5', 'Canada', 'CA', 'Amrit Seair Express Pvt.Ltd', 'CusHouse JNPT', 'AAACA6571BCH003', 'Jharkhand,', 'Canada', 'CA', 'Churchill', 'CACHV', 'Canada', 'CA', 'Churchill', 'CACHV', '', '0000-00-00', '', 'NO', 'P', 'NO', '121', 'kg', '', '', '121', '100', 'kgs', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', 'I/WE UNDERTAKE TO ABIDE BY FOREIGN EXCHANGE MANAGEMENT ACT, 1999, AS AMENDED FROM TIME;TO TIME, INCLUDING REALIZATION/REPATRIATION OF FOREIGN EXCHANGE TO FROM INDIA.WE INTEND TO CLAIM; REWARDS UNDER MERCHANDISE EXPORTS FROM INDIA SCHEME (MEIS).'),
	(30, '4', '2020-01-21', 'Haryana', '19-20', 'QUEENBEE FOODS PVT.LTD.', 'A-36 IInd FLOOR,', ',LOK VIHAR  Pitampura,', 'Delhi,', 'New Delhi', '110034,', 'GSTIN', '07AAACQ305', '', 'Delhi,', '07', '0512093776', '', '', '', '', 'Merchant', 'P', 'SWEET HOLDINGS LLC', '15100 BUSINESS PARKAWAY ROSEMOUNT ,MN 55', '', '', '', 'ICD, Panki', 'AAACA6571BCH001', 'Delhi,', 'United States', 'US', 'Charleston', 'USCHS', 'United States', 'US', 'Beaumont', 'USBPT', '', '0000-00-00', '', 'NO', 'P', 'NO', '124', 'PKG', '0', '', '39432', '37200', 'KGS', '1', '124', 'drun', '', '', '', '0000-00-00', '', '', '', '', '', 'I/WE UNDERTAKE TO ABIDE BY FOREIGN EXCHANGE MANAGEMENT ACT, 1999, AS AMENDED FROM TIME;TO TIME, INCLUDING REALIZATION/REPATRIATION OF FOREIGN EXCHANGE TO FROM INDIA.WE INTEND TO CLAIM; REWARDS UNDER MERCHANDISE EXPORTS FROM INDIA SCHEME (MEIS).'),
	(31, '5', '2020-02-03', 'Haryana', '19-20', 'CHAMAN LAL SETIA EXPORTS LTD.', 'KAITHAL ROAD,', 'OPPOSITE CENTRAL SCHOOL,', 'Haryana,', 'Karnal,', '132001,', 'GSTIN', ' 06AAACC7350G1ZX', '', 'Haryana,', '06', '1288036868', '1', '6550002', '', '', 'Merchant', 'P', 'To Order', ',,,', '', '', 'Amrit Freight Forwarders', 'CusHouse JNPT', 'AAACA6571BCH003', 'Haryana,', 'Canada', 'CA', 'Toronto', 'CATOR', 'Canada', 'CA', 'Toronto', 'CATOR', '', '0000-00-00', '', 'NO', 'P', '', '9240', 'Bags', '0', '', '42596', '41950', 'Kgs', '1', '3920', '', '', '', '', '0000-00-00', '', '', '', '', '', 'I/WE UNDERTAKE TO ABIDE BY FOREIGN EXCHANGE MANAGEMENT ACT, 1999, AS AMENDED FROM TIME;TO TIME, INCLUDING REALIZATION/REPATRIATION OF FOREIGN EXCHANGE TO FROM INDIA.WE INTEND TO CLAIM; REWARDS UNDER MERCHANDISE EXPORTS FROM INDIA SCHEME (MEIS).'),
	(32, '5', '2020-02-18', 'Ludhiana', '19-20', 'BENARA UDYOG LIMITED', 'BHARATPUR ROAD,', 'BODLA,', 'Uttar Pradesh,', 'AGRA,', '282007,', 'GSTIN', '09AAACB6515A1Z7', '', 'Uttar Pradesh', '09', '0697002373', '', '0242228', '', '', 'Merchant', 'P', 'SEASALT LIMITED', 'UNIT 8 FALMOUTH BUSINESS PARK, BICKLAND ', 'United Kingdom', 'GB', 'Amrit Seair Express Pvt.Ltd', 'ACC,New Delhi', 'AAACA6571BCH001', 'Rajasthan,', 'Belgium', '', '', '', 'Belgium', 'BE', 'Antwerp', 'BEANR', '', '0000-00-00', '', '', 'P', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '', '', '', '', 'I/WE UNDERTAKE TO ABIDE BY FOREIGN EXCHANGE MANAGEMENT ACT, 1999, AS AMENDED FROM TIME;TO TIME, INCLUDING REALIZATION/REPATRIATION OF FOREIGN EXCHANGE TO FROM INDIA.WE INTEND TO CLAIM; REWARDS UNDER MERCHANDISE EXPORTS FROM INDIA SCHEME (MEIS).'),
	(33, '14', '2020-02-19', 'New Delhi', '19-20', 'A.S. SPINNERS (P) LTD.', 'KABRI ROAD,', 'NEAR S.R. GODOWN,', 'Haryana,', 'PANIPAT,', '132103,', 'GSTIN', '', '', 'Haryana', '6', '3395001016', '', '', '', '', 'Merchant', 'P', 'WEBBED SPHERE INC,', '250 AMERICAN GREETING CARD ROAD,CORBIN, ', 'United States', 'US', 'Amrit Seair Express Pvt.Ltd', 'CusHouse JNPT', 'AAACA6571BCH003', 'Delhi,', 'Guatemala', 'GT', 'Champerico', 'GTCHR', 'Barbados', 'BB', 'Bridgetown', 'BBBGI', '', '0000-00-00', '', 'NO', 'P', 'NO', '14', '', '', '', '', '', '', '', '1', '14', '', '', '', '0000-00-00', '', '', '', '', '', 'I/WE UNDERTAKE TO ABIDE BY FOREIGN EXCHANGE MANAGEMENT ACT, 1999, AS AMENDED FROM TIME;TO TIME, INCLUDING REALIZATION/REPATRIATION OF FOREIGN EXCHANGE TO FROM INDIA.WE INTEND TO CLAIM; REWARDS UNDER MERCHANDISE EXPORTS FROM INDIA SCHEME (MEIS).'),
	(34, '6', '2020-02-20', 'Ludhiana', '19-20', 'AARAV IMPEX PRIVATE LIMITED', '9/31-32,', 'Netaji Subhash Place', 'Delhi', 'New Delhi,', '110027,', 'GSTIN', '07AAJCA678', '', 'Delhi', '7', '511045531', '0', '', '', '', 'Merchant', '', 'LES ALIMENTS NUTRIFRESH LIMITEE', '2550 RUE COHEN SAINT ,LAURENT ,QC,CA  CA', 'Canada', 'CA', 'Amrit Seair Express Pvt.Ltd', 'CusHouse JNPT', 'AAACA6571BCH003', 'Delhi,', 'Malaysia', 'MY', 'Lumut', 'MYLUM', 'Malaysia', 'MY', 'Labuan, Sabah', 'MYLBU', '', '0000-00-00', '', 'NO', 'P', 'NO', '22', 'Kgs', '-', '', '3221', '3110', 'Kg', '1', '14', '', '', '', '', '0000-00-00', '', '', '', '', '', 'I/WE UNDERTAKE TO ABIDE BY FOREIGN EXCHANGE MANAGEMENT ACT, 1999, AS AMENDED FROM TIME;TO TIME, INCLUDING REALIZATION/REPATRIATION OF FOREIGN EXCHANGE TO FROM INDIA.WE INTEND TO CLAIM; REWARDS UNDER MERCHANDISE EXPORTS FROM INDIA SCHEME (MEIS).'),
	(35, '7', '2020-02-22', 'Ludhiana', '19-20', 'MEHTA STONE EXPORT HOUSE', 'W 9/2 ,', 'DLF CITY PHASE 3,', 'Haryana,', 'Gurgaon', '122002,', '', '', '', 'Haryana,', '06', '0504040464', '0', '', '', '', 'Merchant', '', 'Lifetime INC', '22 BLAKE STREET MEDFORD,MA 02155,', 'United States', 'US', 'Amrit Seair Express Pvt.Ltd', 'CusHouse JNPT', 'AAACA6571BCH003', 'Haryana,', 'United States', 'US', 'Houston', 'USHOU', 'United States', 'US', 'Charleston', 'USCHS', '', '0000-00-00', '', '', '', '', '21', 'pkg', '', '', '', '', '', '1', '21', '', '', '', '', '0000-00-00', '', '', '', '', '', 'I/WE UNDERTAKE TO ABIDE BY FOREIGN EXCHANGE MANAGEMENT ACT, 1999, AS AMENDED FROM TIME;TO TIME, INCLUDING REALIZATION/REPATRIATION OF FOREIGN EXCHANGE TO FROM INDIA.WE INTEND TO CLAIM; REWARDS UNDER MERCHANDISE EXPORTS FROM INDIA SCHEME (MEIS).');
/*!40000 ALTER TABLE `edisb1` ENABLE KEYS */;

-- Dumping structure for table exportsea.esediinvoice
DROP TABLE IF EXISTS `esediinvoice`;
CREATE TABLE IF NOT EXISTS `esediinvoice` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `jobno` varchar(40) NOT NULL,
  `branch` varchar(40) NOT NULL,
  `fy` varchar(40) NOT NULL,
  `invoicesrno` varchar(20) NOT NULL,
  `invoiceno` varchar(40) NOT NULL,
  `invoicedate` date NOT NULL,
  `invoicevalue` float(10,4) NOT NULL,
  `currencyname` varchar(40) NOT NULL,
  `exchangerate` varchar(40) NOT NULL,
  `paymentnature` varchar(40) NOT NULL,
  `paymentperiod` varchar(40) NOT NULL,
  `contractno` varchar(40) NOT NULL,
  `natureofcontract` varchar(40) NOT NULL,
  `finb` varchar(40) NOT NULL,
  `buyerconsignee` varchar(20) NOT NULL,
  `buyername` varchar(40) NOT NULL,
  `buyeraddress` varchar(40) NOT NULL,
  `freightrate` float(10,4) NOT NULL,
  `freightcurrency` varchar(40) NOT NULL,
  `freightamount` float(10,4) NOT NULL,
  `insurancerate` varchar(40) NOT NULL,
  `insurancecurrency` varchar(20) NOT NULL,
  `insuranceamount` float(10,4) NOT NULL,
  `commissionrate` varchar(40) NOT NULL,
  `commissioncurrency` varchar(40) NOT NULL,
  `commissionamount` float(10,4) NOT NULL,
  `discountrate` float(10,4) NOT NULL,
  `discountcurrency` varchar(40) NOT NULL,
  `discountamount` float(10,4) NOT NULL,
  `packchgsrate` float(10,4) NOT NULL,
  `packchgscurrency` varchar(40) NOT NULL,
  `packchgsamount` float(10,4) NOT NULL,
  `otherdeductionrate` float(10,4) NOT NULL,
  `otherdeductioncurrency` varchar(40) NOT NULL,
  `otherdeductionamount` float(10,4) NOT NULL,
  `fob` float(10,4) NOT NULL,
  `fobfc` float(10,4) NOT NULL,
  `whetherthirdparty` varchar(20) NOT NULL,
  `thirdpartyname` varchar(50) NOT NULL,
  `thirdpartyaddress1` varchar(100) NOT NULL,
  `thirdpartyaddress2` varchar(100) NOT NULL,
  `thirdpartycity` varchar(50) NOT NULL,
  `thirdpartypin` varchar(50) NOT NULL,
  `thirdpartycountrysubdivision` varchar(50) NOT NULL,
  `thirdpartycountry` varchar(50) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

-- Dumping data for table exportsea.esediinvoice: ~29 rows (approximately)
/*!40000 ALTER TABLE `esediinvoice` DISABLE KEYS */;
INSERT INTO `esediinvoice` (`sno`, `jobno`, `branch`, `fy`, `invoicesrno`, `invoiceno`, `invoicedate`, `invoicevalue`, `currencyname`, `exchangerate`, `paymentnature`, `paymentperiod`, `contractno`, `natureofcontract`, `finb`, `buyerconsignee`, `buyername`, `buyeraddress`, `freightrate`, `freightcurrency`, `freightamount`, `insurancerate`, `insurancecurrency`, `insuranceamount`, `commissionrate`, `commissioncurrency`, `commissionamount`, `discountrate`, `discountcurrency`, `discountamount`, `packchgsrate`, `packchgscurrency`, `packchgsamount`, `otherdeductionrate`, `otherdeductioncurrency`, `otherdeductionamount`, `fob`, `fobfc`, `whetherthirdparty`, `thirdpartyname`, `thirdpartyaddress1`, `thirdpartyaddress2`, `thirdpartycity`, `thirdpartypin`, `thirdpartycountrysubdivision`, `thirdpartycountry`) VALUES
	(1, '1', 'New Delhi', '20-21', '1', 'exp/del/1/2021', '2019-09-18', 5643.1201, 'USD', '71.10', 'DP', '2', '121', 'CIF', 'B', '', 'saew', 'sjn123', 0.0000, 'USD', 1209.0000, '0', 'USD', 56.0000, '0', 'USD', 0.0000, 0.0000, 'USD', 0.0000, 0.0000, 'USD', 0.0000, 0.0000, 'USD', 0.0000, 311284.3438, 4378.1201, '', '', '', '', '', '', '', ''),
	(2, '1', 'Haryana', '20-21', '1', 'ex/h/1', '2019-11-13', 12000.0000, 'USD', '71.10', 'DP', '', '', 'CIF', 'B', '', '', '', 0.0000, 'USD', 1000.0000, '0', 'USD', 100.0000, '0', 'USD', 0.0000, 0.0000, 'USD', 0.0000, 0.0000, 'USD', 0.0000, 0.0000, 'USD', 0.0000, 774990.0000, 10900.0000, '', '', '', '', '', '', '', ''),
	(3, '2', 'New Delhi', '20-21', '1', 'RSLI/001', '2019-10-26', 950.0000, 'EUR', '77.85', 'DP', '0', '', 'CF', 'F', '', 'FABA DEUTSCHLAND GMBH', 'CHARLOTTENSTR. 6D- 66955 PIRMASENSMR. ', 0.0000, 'EUR', 25.0000, '', 'EUR', 0.0000, '', 'EUR', 0.0000, 0.0000, 'EUR', 0.0000, 0.0000, 'EUR', 0.0000, 0.0000, 'EUR', 0.0000, 72011.2500, 925.0000, '', '', '', '', '', '', '', ''),
	(4, '1', 'Mumbai', '20-21', '1', 'SH/1920/167', '2019-11-07', 7652.0801, 'USD', '71.10', 'DP', '0', '', 'FOB', 'N', '', 'IERA LIVING DESIGNS LLP', 'UNIT 1,1/F MAU LAM COM,JORDAN, KOWLOON, ', 0.0000, 'USD', 0.0000, '0', 'USD', 0.0000, '0', 'USD', 0.0000, 0.0000, 'USD', 0.0000, 0.0000, 'USD', 0.0000, 0.0000, 'USD', 0.0000, 544062.8750, 7652.0801, '', '', '', '', '', '', '', ''),
	(5, '2', 'Mumbai', '20-21', '1', 'ACCB-045/19-20', '2019-09-03', 2647.0801, 'GBP', '86.50', 'DP', '0', '0', 'FOB', 'N', '', 'SEASALT CORNWALL', 'UNIT 2, TRELEIGH INDUS,CORNWALL, TR16 4E', 0.0000, 'GBP', 0.0000, '0', 'GBP', 0.0000, '0', 'GBP', 0.0000, 0.0000, 'GBP', 0.0000, 0.0000, 'GBP', 0.0000, 0.0000, 'GBP', 0.0000, 228972.4219, 2647.0801, '', '', '', '', '', '', '', ''),
	(6, '1', 'Ludhiana', '20-21', '1', 'ex1vvfvfvv', '2019-11-14', 2343.2300, 'USD', '71.10', 'DP', '', '0', 'FOB', 'N', '', 'aa', '3556', 0.0000, 'USD', 0.0000, '0', 'USD', 0.0000, '0', 'USD', 0.0000, 0.0000, 'USD', 0.0000, 0.0000, 'USD', 0.0000, 0.0000, 'USD', 0.0000, 166603.6562, 2343.2300, '', '', '', '', '', '', '', ''),
	(7, '2', 'Haryana', '20-21', '1', 'QBF-EX/1920/139', '2019-11-06', 48360.0000, 'USD', '71.10', 'DP', '7', '', 'CIF', 'B', '', '', '', 0.0000, 'USD', 4550.0000, '0', 'USD', 30.0000, '0', 'USD', 1450.8000, 3.0000, 'USD', 0.0000, 0.0000, 'USD', 0.0000, 0.0000, 'USD', 0.0000, 1000000.0000, 43780.0000, '', '', '', '', '', '', '', ''),
	(8, '3', 'Mumbai', '20-21', '1', 'sh-ge-19-20-15', '2019-11-29', 5555.2002, 'USD', '71.10', 'DA', '', '', 'FOB', 'N', '', 'M/s s2 Resources Inc', '', 0.0000, 'USD', 0.0000, '0', 'USD', 0.0000, '0', 'USD', 0.0000, 0.0000, 'USD', 0.0000, 0.0000, 'USD', 0.0000, 0.0000, 'USD', 0.0000, 394974.7188, 5555.2002, '', '', '', '', '', '', '', ''),
	(9, '1792', 'Mumbai', '19-20', '1', 'JIN/007/EX/19-20', '2019-12-25', 2217.6001, 'USD', '71.05', 'DA', '90', '', 'FOB', 'N', '', 'SEAWAY LOGISTICS SOLUTIONS ', '910 OAK TREE AVE,SUITE-H, SOUTH PLAINFIE', 0.0000, 'USD', 0.0000, '0', 'USD', 0.0000, '0', 'USD', 0.0000, 0.0000, 'USD', 0.0000, 0.0000, 'USD', 0.0000, 0.0000, 'USD', 0.0000, 157560.4844, 2217.6001, '', '', '', '', '', '', '', ''),
	(10, '1794', 'Mumbai', '19-20', '1', 'JIN/007/EX/19-20', '2019-11-25', 2217.6001, 'USD', '71.05', 'DA', '90', '', 'FOB', 'N', '', 'SEAway logistics', '910 OAK TREE AVE', 0.0000, 'USD', 0.0000, '0', 'USD', 0.0000, '0', 'USD', 0.0000, 0.0000, 'USD', 0.0000, 0.0000, 'USD', 0.0000, 0.0000, 'USD', 0.0000, 157560.4844, 2217.6001, '', '', '', '', '', '', '', ''),
	(11, '2', 'Ludhiana', '19-20', '1', '1113', '2019-12-04', 1000000.0000, 'INR', '1.00', 'AP', '0', '', 'FOB', 'N', '', 'Versova Inc', '6800 REXWOOD ROAD, MISSISSAUGA, Ontanrio', 0.0000, 'INR', 0.0000, '0', 'INR', 0.0000, '0', 'INR', 0.0000, 0.0000, 'INR', 0.0000, 0.0000, 'INR', 0.0000, 0.0000, 'INR', 0.0000, 1000000.0000, 1000000.0000, '', '', '', '', '', '', '', ''),
	(12, '3', 'Ludhiana', '19-20', '1', '1114', '2019-12-18', 1000000.0000, 'INR', '1.00', 'AP', '', '', 'FOB', 'N', '', 'versova', 'ontario cananda', 0.0000, 'INR', 0.0000, '0', 'INR', 0.0000, '0', 'INR', 0.0000, 0.0000, 'INR', 0.0000, 0.0000, 'INR', 0.0000, 0.0000, 'INR', 0.0000, 1000000.0000, 1000000.0000, '', '', '', '', '', '', '', ''),
	(13, '2', 'Uttar Pradesh', '19-20', '1', '101', '2019-12-18', 3456.4500, 'USD', '71.05', 'AP', '', '', 'FOB', 'N', '', 'same as', 'consignee', 0.0000, 'USD', 0.0000, '0', 'USD', 0.0000, '0', 'USD', 0.0000, 0.0000, 'USD', 0.0000, 0.0000, 'USD', 0.0000, 0.0000, 'USD', 0.0000, 245580.7656, 3456.4500, '', '', '', '', '', '', '', ''),
	(14, '4', 'Ludhiana', '19-20', '1', '1092', '2019-12-28', 14552.8896, 'USD', '71.05', 'AP', '0', '', 'FOB', 'N', '', '', '', 0.0000, '', 0.0000, '0', '', 0.0000, '0', '', 0.0000, 0.0000, '', 0.0000, 0.0000, '', 0.0000, 0.0000, '', 0.0000, 1000000.0000, 14552.8896, '', '', '', '', '', '', '', ''),
	(15, '4', 'Mumbai', '19-20', '1', 'BKG/047/19-20', '2019-06-07', 5253.6001, 'USD', '71.05', 'DP', '', '', 'FOB', 'N', '', 'SAME AS CONSIGNEE', ',', 0.0000, 'USD', 0.0000, '0', 'USD', 0.0000, '0', 'USD', 0.0000, 0.0000, 'USD', 0.0000, 0.0000, 'USD', 250.0000, 0.0000, 'USD', 0.0000, 373268.2812, 5253.6001, '', '', '', '', '', '', '', ''),
	(16, '5', 'Mumbai', '19-20', '1', 'EXP-57-2019-2020', '2019-12-04', 306000.0000, 'USD', '71.05', 'DP', '0', '', 'CIF', 'B', 'YES', 'SAME AS CONSIGNEE', ',', 0.0000, 'USD', 70.0000, '0', 'USD', 30.0000, '0', 'USD', 0.0000, 0.0000, 'USD', 0.0000, 0.0000, 'USD', 0.0000, 0.0000, 'USD', 0.0000, 1000000.0000, 305900.0000, '', '', '', '', '', '', '', ''),
	(17, '3', 'New Delhi', '19-20', '1', 'c1', '0000-00-00', 1234.0000, 'USD', '71.05', '', '', '', 'CIF', 'B', 'YES', '', '', 0.0000, 'USD', 200.0000, '', 'USD', 50.0000, '', 'USD', 0.0000, 0.0000, 'USD', 0.0000, 0.0000, 'USD', 0.0000, 0.0000, 'USD', 0.0000, 69913.2031, 984.0000, '', '', '', '', '', '', '', ''),
	(18, '4', 'New Delhi', '19-20', '1', 'e3', '2020-01-08', 3245.0000, 'USD', '71.05', 'DP', '', '', 'CIF', 'B', 'NO', 'ggffr', 'frfrgg53tt', 0.0000, 'USD', 345.0000, '', 'USD', 33.0000, '', 'USD', 0.0000, 0.0000, 'USD', 0.0000, 0.0000, 'USD', 0.0000, 0.0000, 'USD', 0.0000, 203700.3438, 2867.0000, '', '', '', '', '', '', '', ''),
	(19, '4', 'New Delhi', '19-20', '', '', '2020-01-07', 0.0000, 'CNY', '10.05', '', '', '', '', '', 'YES', '', '', 0.0000, '', 0.0000, '', '', 0.0000, '', '', 0.0000, 0.0000, '', 0.0000, 0.0000, '', 0.0000, 0.0000, '', 0.0000, 0.0000, 0.0000, '', '', '', '', '', '', '', ''),
	(20, '5', 'New Delhi', '19-20', '1', 'ded34', '2020-01-08', 4567.6699, 'AUD', '47.85', 'DP', '', '', 'CIF', 'B', 'YES', '', '', 0.0000, 'AUD', 45.0000, '', 'AUD', 4.0000, '', 'AUD', 0.0000, 0.0000, 'AUD', 0.0000, 0.0000, 'AUD', 0.0000, 0.0000, 'AUD', 0.0000, 216218.3594, 4518.6699, '', '', '', '', '', '', '', ''),
	(21, '6', 'Mumbai', '19-20', '1', 'd3', '2020-01-14', 32355.2305, 'GBP', '91.30', 'DP', '', '', 'CIF', 'B', '', '', '', 0.0000, 'GBP', 212.0000, '', 'GBP', 22.0000, '', 'GBP', 0.0000, 0.0000, 'GBP', 0.0000, 0.0000, 'GBP', 0.0000, 0.0000, 'GBP', 0.0000, 1000000.0000, 32121.2305, '', '', '', '', '', '', '', ''),
	(22, '7', 'Mumbai', '19-20', '1', 'BKG/180/1920', '2020-01-30', 9586.4004, 'USD', '71.05', '', '', '', 'FOB', 'N', 'NO', 'MARISOL INTERNATIONAL', '871 RIDGEWAY LOOP ROAD, SUITE 203 MEMPHI', 0.0000, 'USD', 0.0000, '0', 'USD', 0.0000, '0', 'USD', 0.0000, 0.0000, 'USD', 0.0000, 0.0000, 'USD', 0.0000, 0.0000, 'USD', 0.0000, 681113.7500, 9586.4004, '', '', '', '', '', '', '', ''),
	(23, '8', 'Mumbai', '19-20', '1', 'KLK/042/19-20', '2020-01-23', 20965.5996, 'USD', '71.05', 'DA', '120', '', 'FOB', 'N', 'NO', 'NOTIFY- SEAWAY LOGISTICS SOLUTIONS', 'LLC- 910 OAK TREE AVE, SUITE-H, SOUTH PL', 0.0000, 'USD', 0.0000, '0', 'USD', 0.0000, '0', 'USD', 0.0000, 0.0000, 'USD', 0.0000, 0.0000, 'USD', 0.0000, 0.0000, 'USD', 0.0000, 1000000.0000, 20965.5996, '', '', '', '', '', '', '', ''),
	(24, '8', 'New Delhi', '19-20', '1', 'BME/2019-20/080', '2019-12-24', 27118.5000, 'USD', '71.05', 'DP', '', '', 'FOB', 'N', 'NO', 'BARNES & NOBLE PURCHASING, INC', 'P. O. BOX 1843 DEPT. # - 192673X - CASEP', 0.0000, 'USD', 0.0000, '0', 'USD', 0.0000, '0', 'USD', 0.0000, 0.0000, 'USD', 0.0000, 0.0000, 'USD', 0.0000, 0.0000, 'USD', 0.0000, 1000000.0000, 27118.5000, '', '', '', '', '', '', '', ''),
	(25, '9', 'New Delhi', '19-20', '1', 'c3', '2020-01-08', 2234.0000, 'USD', '71.05', 'DP', '', '', 'FOB', 'N', 'NO', '', '', 0.0000, 'USD', 0.0000, '0', 'USD', 0.0000, '0', 'USD', 0.0000, 0.0000, 'USD', 0.0000, 0.0000, 'USD', 0.0000, 0.0000, 'USD', 0.0000, 158725.7031, 2234.0000, '', '', '', '', '', '', '', ''),
	(26, '10', 'New Delhi', '19-20', '1', 'swdw', '2020-01-15', 12049.0000, 'USD', '71.05', '', '', '', 'FOB', 'N', 'YES', '', '', 0.0000, 'USD', 0.0000, '0', 'USD', 0.0000, '0', 'USD', 0.0000, 0.0000, 'USD', 0.0000, 0.0000, 'USD', 0.0000, 0.0000, 'USD', 0.0000, 856081.4375, 12049.0000, '', '', '', '', '', '', '', ''),
	(27, '11', 'New Delhi', '19-20', '1', 'fre/11', '2020-01-08', 3452.2300, 'GBP', '91.30', 'DP', '', '', 'FOB', 'N', 'NO', 'e4rr4', 'daewffrfrfrfrfrfrfrf', 0.0000, 'GBP', 0.0000, '0', 'GBP', 0.0000, '0', 'GBP', 0.0000, 0.0000, 'GBP', 0.0000, 0.0000, 'GBP', 0.0000, 0.0000, 'GBP', 0.0000, 315188.5938, 3452.2300, '', '', '', '', '', '', '', ''),
	(28, '13', 'New Delhi', '19-20', '1', 'tp/12', '2020-01-08', 112.0000, 'USD', '71.05', 'DP', '', '', 'FOB', 'N', '', 'ad', 'sdeee', 0.0000, 'USD', 0.0000, '0', 'USD', 0.0000, '0', 'USD', 0.0000, 0.0000, 'USD', 0.0000, 0.0000, 'USD', 0.0000, 0.0000, 'USD', 0.0000, 7957.6001, 112.0000, 'YES', 'TP!', 'tpadd1', 'tpadd2', 'tpcity', '1001', 'United States', 'China'),
	(29, '9', 'Mumbai', '19-20', '1', '1/sh/19-20', '2020-01-08', 5478.7500, 'USD', '71.05', 'DP', '', '', 'FOB', 'N', 'NO', 'LANDMARK RETAIL INVESTMENT CO L.L.C', 'DIVISION- HOME CENTRE P.O. BOX. 113630 D', 0.0000, 'USD', 0.0000, '0', 'USD', 0.0000, '0', 'USD', 0.0000, 0.0000, 'USD', 0.0000, 0.0000, 'USD', 0.0000, 0.0000, 'USD', 0.0000, 389265.1875, 5478.7500, '', '', '', '', '', '', '', ''),
	(30, '3', 'Haryana', '19-20', '1', 'fdff/1', '2020-01-09', 1232.0000, 'USD', '71.05', 'DP', '', '', 'FOB', 'N', 'NO', 'sss', 'defefefef', 0.0000, 'USD', 0.0000, '0', 'USD', 0.0000, '0', 'USD', 0.0000, 0.0000, 'USD', 0.0000, 0.0000, 'USD', 0.0000, 0.0000, 'USD', 0.0000, 87533.6016, 1232.0000, '', '', '', '', '', '', '', ''),
	(31, '4', 'Haryana', '19-20', '1', 'QBF-EX/19-20/145', '2020-01-09', 47430.0000, 'USD', '71.05', 'DP', '', '', 'FOB', 'N', 'YES', '', '', 0.0000, 'USD', 0.0000, '', 'USD', 0.0000, '', 'USD', 0.0000, 0.0000, 'USD', 0.0000, 0.0000, 'USD', 0.0000, 0.0000, 'USD', 0.0000, 1000000.0000, 47430.0000, 'YES', 'TP1', 'ADD1', 'ADD2', 'ACITY', '', 'United States', 'United States'),
	(32, '5', 'Haryana', '19-20', '1', '18817', '2020-02-01', 55440.0000, 'CAD', '53.05', 'DP', '', '', 'FOB', 'N', 'NO', 'GELDA SCIENTIFIC AND INDUSTRIAL ', 'DEVELOPMENT CORPORATION ,6320 NORTHWEST ', 0.0000, 'CAD', 0.0000, '0', 'CAD', 0.0000, '0', 'CAD', 0.0000, 0.0000, 'CAD', 0.0000, 0.0000, 'CAD', 0.0000, 0.0000, 'CAD', 0.0000, 1000000.0000, 55440.0000, '', '', '', '', '', '', '', ''),
	(33, '5', 'Ludhiana', '19-20', '1', 'beny/12', '2020-02-05', 2100.0000, 'GBP', '91.30', 'DP', '', '', 'FOB', 'N', 'YES', '', '', 0.0000, 'GBP', 0.0000, '0', 'GBP', 0.0000, '0', 'GBP', 0.0000, 0.0000, 'GBP', 0.0000, 0.0000, 'GBP', 0.0000, 0.0000, 'GBP', 0.0000, 191730.0000, 2100.0000, 'NO', '', '', '', '', '', '', ''),
	(34, '14', 'New Delhi', '19-20', '1', 'ax/es/12', '2020-02-05', 1280.0000, 'USD', '71.05', 'DP', '', '', 'FOB', 'N', 'NO', 'dcdfdf', 'deddefefefe', 0.0000, 'USD', 0.0000, '0', 'USD', 0.0000, '0', 'USD', 0.0000, 0.0000, 'USD', 0.0000, 0.0000, 'USD', 0.0000, 0.0000, 'USD', 0.0000, 90944.0000, 1280.0000, '', '', '', '', '', '', '', ''),
	(35, '6', 'Ludhiana', '19-20', '1', '1ksk', '2020-02-06', 1245.0000, 'USD', '71.05', 'DP', '', '', 'FOB', 'N', 'YES', 'sdd', 'deded', 0.0000, 'USD', 0.0000, '0', 'USD', 0.0000, '0', 'USD', 0.0000, 0.0000, 'USD', 0.0000, 0.0000, 'USD', 0.0000, 0.0000, 'USD', 0.0000, 88457.2500, 1245.0000, '', '', '', '', '', '', '', ''),
	(36, '7', 'Ludhiana', '19-20', '1', 'meh/1921', '2020-02-05', 3212.2400, 'USD', '71.05', 'DP', '', '', 'FOB', 'N', 'NO', '', '', 0.0000, 'USD', 0.0000, '0', 'USD', 0.0000, '0', 'USD', 0.0000, 0.0000, 'USD', 0.0000, 0.0000, 'USD', 0.0000, 0.0000, 'USD', 0.0000, 228229.6562, 3212.2400, 'NO', '', '', '', '', '', '', '');
/*!40000 ALTER TABLE `esediinvoice` ENABLE KEYS */;

-- Dumping structure for table exportsea.esediitem
DROP TABLE IF EXISTS `esediitem`;
CREATE TABLE IF NOT EXISTS `esediitem` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `jobno` varchar(20) NOT NULL,
  `branch` varchar(40) NOT NULL,
  `fy` varchar(40) NOT NULL,
  `invoicesrno` varchar(20) NOT NULL,
  `itemno` varchar(30) NOT NULL,
  `ritc` varchar(40) NOT NULL,
  `goodsdescription` varchar(100) NOT NULL,
  `quantity` varchar(40) NOT NULL,
  `unit` varchar(40) NOT NULL,
  `productrate` varchar(40) NOT NULL,
  `currencyname` varchar(40) NOT NULL,
  `exchangerate` varchar(40) NOT NULL,
  `totalvaluefc` varchar(40) NOT NULL,
  `fobinr` varchar(40) NOT NULL,
  `dbksrno` varchar(40) NOT NULL,
  `dbkrate` varchar(30) NOT NULL,
  `dbkratespec` varchar(40) NOT NULL,
  `dbkamount` varchar(40) NOT NULL,
  `schemecode` varchar(40) NOT NULL,
  `schemedescription` varchar(80) NOT NULL,
  `pmvpercentage` varchar(40) NOT NULL,
  `pmv` varchar(40) NOT NULL,
  `totalpmv` varchar(40) NOT NULL,
  `endusecode` varchar(40) NOT NULL,
  `endusedescription` varchar(100) NOT NULL,
  `igstpaymentstatus` varchar(40) NOT NULL,
  `taxablevalue` varchar(40) NOT NULL,
  `igstrate` varchar(40) NOT NULL,
  `igstamount` varchar(50) NOT NULL,
  `reward` varchar(11) NOT NULL,
  `str` varchar(11) NOT NULL,
  `accessory` varchar(11) NOT NULL,
  `cess` varchar(40) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=97 DEFAULT CHARSET=latin1;

-- Dumping data for table exportsea.esediitem: ~75 rows (approximately)
/*!40000 ALTER TABLE `esediitem` DISABLE KEYS */;
INSERT INTO `esediitem` (`sno`, `jobno`, `branch`, `fy`, `invoicesrno`, `itemno`, `ritc`, `goodsdescription`, `quantity`, `unit`, `productrate`, `currencyname`, `exchangerate`, `totalvaluefc`, `fobinr`, `dbksrno`, `dbkrate`, `dbkratespec`, `dbkamount`, `schemecode`, `schemedescription`, `pmvpercentage`, `pmv`, `totalpmv`, `endusecode`, `endusedescription`, `igstpaymentstatus`, `taxablevalue`, `igstrate`, `igstamount`, `reward`, `str`, `accessory`, `cess`) VALUES
	(1, '1', 'New Delhi', '20-21', '1', '1', '85168000', 'description of item 1', '32', 'kgs', '4.5', 'USD', '71.10', '21456.34', '1154705.4', '851230', '0.15', '0', '1234', '19', 'Drawback', '110', '351.945', '11262.24', 'DCH300', 'For Human Medical Use as a Transplanted Organ, Tissue, or Fluid', 'LUT', '0', '0', '0', 'N', 'N', 'N', 'N'),
	(2, '1', 'New Delhi', '20-21', '1', '2', '85166000', 'description item 2', '1100', 'kg', '5.5', 'USD', '71.10', '4512.09', '334582.86', '84321', '1.4', '0', '1234.34', '19', 'Drawback', '110', '430.155', '473170.49999999994', 'DCH400', 'For Human Medical Use as a Non-Food Product under Controlled Distribution', 'LUT', '0', '0', '0', 'N', 'N', 'N', 'N'),
	(3, '1', 'Haryana', '20-21', '1', '1', '85167910', 'desription of item 1', '1200', 'kg', '12', 'USD', '71.10', '14400', '12000', '', '', '', '', '19', 'Drawback', '110', '938.5199999999999', '1126223.9999999998', 'FSH750', 'Food -For use in International Sports Events', 'LUT', '', '', '', 'N', 'N', 'N', 'N'),
	(4, '2', 'New Delhi', '20-21', '1', '1', '84194020', 'PLASTIC SHOE LAST', '100', 'PRS', '9.5', 'EUR', '77.85', '950', '73957.5', '392601B', '1.5', '', '', '19', '', '110', '737.77', '7377', '', '', 'LUT', '', '', '', 'N', 'N', 'N', 'N'),
	(5, '1', 'Mumbai', '20-21', '1', '1', '73269099', 'HANDICRAFTS OF IRON ARTWARE -S/4 COPP NAPKIN RING', '324', 'SET', '1.67', 'USD', '71.10', '541.0799999999999', '38470.78799999999', '732601B', '1.8', '0', '', '22', 'Duty Free Credit Entitlement Certificate', '110', '130.61069999999998', '42317.866799999996', 'GNX 100', 'Generic -For Consumer use under commercial distribution (for Trading ï¿½ wholesale or retail)', 'LUT', '0', '0', '0', 'N', 'N', 'N', 'N'),
	(6, '1', 'Mumbai', '20-21', '1', '2', '73269099', 'HANDICRAFTS OF IRON ARTWARE -S/4 COPP NAPKIN RING', '324', 'SET', '1.67', 'USD', '71.10', '541.0799999999999', '38470.78799999999', '732601B', '1.8', '0', '', '22', 'Duty Free Credit Entitlement Certificate', '110', '130.61069999999998', '42317.866799999996', 'GNX 100', 'Generic -For Consumer use under commercial distribution (for Trading ï¿½ wholesale or retail)', 'LUT', '0', '0', '0', 'N', 'N', 'N', 'N'),
	(7, '2', 'Mumbai', '20-21', '1', '1', '851672', 'ladies', '223', 'pcs', '3.95', 'GBP', '77.85', '880.85', '68574.1725', '6241010B', '1.9', '0', '1302.9092775', '60', '', '110', '338.25825', '75431.58975', 'GNX 100', 'Generic -For Consumer use under commercial distribution (for Trading ï¿½ wholesale or retail)', 'LUT', '0', '0', '0', 'N', 'N', 'N', 'N'),
	(8, '1', 'Mumbai', '20-21', '1', '3', '85167200', 'ds', '120', 'pcs', '2.67', 'USD', '71.10', '320.4', '22780.439999999995', '730402B', '', '', '410.0479199999999', '19', 'Drawback', '110', '208.8207', '25058.483999999997', 'GNX 100', 'Generic -For Consumer use under commercial distribution (for Trading ï¿½ wholesale or retail)', 'LUT', '0', '0', '0', 'N', 'N', 'N', 'N'),
	(9, '1', 'Mumbai', '20-21', '1', '2', '85167910', 'handicraft', '120', 'pcs', '2.5', 'USD', '71.10', '300', '21330', '030699B', '0.100', '0.000', '21.33', '19', 'Drawback', '110', '195.525', '23463', 'GNX 100', 'Generic -For Consumer use under commercial distribution (for Trading ï¿½ wholesale or retail)', 'LUT', '0', '0', '0', 'N', 'N', 'N', 'N'),
	(10, '1', 'Ludhiana', '20-21', '1', '1', '90178090', 'fresh food', '200', 'kg', '2.8', 'USD', '71.10', '560', '39816', 'dbksr', '0.100', '0.000', '39.816', '19', 'Drawback', '110', '218.988', '43797.6', 'GNX 100', 'Generic -For Consumer use under commercial distribution (for Trading ï¿½ wholesale or retail)', 'LUT', '0', '0', '0', 'N', 'N', '', 'N'),
	(11, '2', 'Haryana', '20-21', '1', '1', '04090000', 'iINDIAN BEES INDIGINEOUS HONEY', '37200', 'KG', '1.3', 'USD', '77.85', '48360', '3764825.9999999995', 'dbksr', '', '', '', '00', 'Free SB Involving Remittance Of Foreign ', '110', '111.32549999999999', '4141308.5999999996', 'GNX 100', 'Generic -For Consumer use under commercial distribution (for Trading ï¿½ wholesale or retail)', 'LUT', '0', '0', '0', 'Y', '', 'N', 'N'),
	(12, '3', 'Mumbai', '20-21', '1', '1', '83113090', 'Articles of glass', '824', 'kg', '6.2', 'USD', '71.10', '5108.8', '363235.68', 'dbksr', '', '', '0', '19', 'Drawback', '110', '484.902', '399559.24799999996', 'GNX 100', 'Generic -For Consumer use under commercial distribution (for Trading ï¿½ wholesale or retail)', 'LUT', '0', '0', '0', 'N', 'N', 'N', 'N'),
	(13, '1792', 'Mumbai', '19-20', '1', '1', '82159900', 'STAINLESS STEEL CUTLERY-LONG HANDLE SPOON REST', '2112', 'PCS', '1.05', 'USD', '71.05', '2217.6', '157560.47999999998', '82510B', '2.3', '0.0', '', '44', 'Drawback and Concessional Duty EPCG', '110', '82.06275000000001', '173316.52800000002', 'GNX 100', 'Generic -For Consumer use under commercial distribution (for Trading ï¿½ wholesale or retail)', 'LUT', '0', '0', '0', 'N', 'N', 'N', 'N'),
	(14, '1794', 'Mumbai', '19-20', '1', '1', '82159900', 'Stainless Steel  cutlery-Long handle  spoon', '2112', 'PCS', '1.05', 'USD', '71.05', '2217.6', '157560.47999999998', '821501B', '1.800', '0.000', '2836.08864', '19', 'Drawback', '110', '82.06275000000001', '173316.52800000002', 'GNX 100', 'Generic -For Consumer use under commercial distribution (for Trading ï¿½ wholesale or retail)', 'LUT', '0', '0', '0', 'N', 'N', 'N', 'N'),
	(15, '2', 'Ludhiana', '19-20', '1', '1', '07129060', 'Jaggery Powder 3kg *4', '19800', 'kg', '81.25', 'INR', '1.00', '1608750', '1608750', 'dbksr', '', '', '', '19', 'Drawback', '110', '89.375', '1769625', 'GNX 100', 'Generic -For Consumer use under commercial distribution (for Trading ï¿½ wholesale or retail)', 'NA', '0', '0', '0', 'N', 'N', 'N', 'N'),
	(16, '3', 'Ludhiana', '19-20', '1', '1', '17023010', 'jaggery', '1909', 'kg', '18.03', 'INR', '1.00', '34419.270000000004', '34419.270000000004', '1701B', '0.150', '0.000', '51.628905', '19', 'Drawback', '110', '19.833000000000002', '37861.197', 'GNX 100', 'Generic -For Consumer use under commercial distribution (for Trading ï¿½ wholesale or retail)', 'NA', '0', '0', '0', 'N', 'N', 'N', 'N'),
	(17, '2', 'Uttar Pradesh', '19-20', '1', '1', '20011000', '', '1201', 'kg', '12.56', 'USD', '71.05', '15084.56', '1071757.99', 'dbksr', '', '', '', '', '', '', '', '', '', '', 'LUT', '', '', '', '', '', '', ''),
	(18, '7', 'Mumbai', '19-20', '1', '1', '70200090', 'HANDICRAFTS OF GLASS ARTWARE - GLASS BALLOON VASE,ANTIQUE COPPER DETAIL SILVER COATED', '120', 'PCS', '5.5', 'USD', '71.05', '660.00', '46893.00', 'dbksr', '', '', '', '19', 'Drawback', '110', '429.85', '51582.00', 'GNX 100', 'Generic -For Consumer use under commercial distribution (for Trading – wholesale or retail)', 'LUT', '0', '0', '0', 'Y', 'N', 'N', 'N'),
	(19, '7', 'Mumbai', '19-20', '1', '2', '70109000', 'ARTICLE OF GLASS - GLASS BOTTLE', '160', 'PCS', '9.5', 'USD', '71.05', '1520.00', '107996.00', 'dbksr', '', '', '', '19', 'Drawback', '110', '742.47', '118795.20', 'GNX 100', 'Generic -For Consumer use under commercial distribution (for Trading – wholesale or retail)', 'LUT', '0', '0', '0', 'Y', 'N', 'N', 'N'),
	(20, '7', 'Mumbai', '19-20', '1', '3', '70109000', 'ARTICLE OF GLASS - GLASS BOTTLE', '150', 'PCS', '9', 'USD', '71.05', '1350.00', '95917.50', 'dbksr', '', '', '', '19', 'Drawback', '110', '703.39', '105508.50', 'GNX 100', 'Generic -For Consumer use under commercial distribution (for Trading – wholesale or retail)', 'LUT', '0', '0', '0', 'Y', 'N', 'N', 'N'),
	(21, '7', 'Mumbai', '19-20', '1', '4', '70200090', 'HANDICRAFTS OF GLASS ARTWARE - GLASS VASE GREEN', '800', 'PCS', '5.25', 'USD', '71.05', '4200.00', '298410.00', '702001B', '2.200', '24.500', '6565.02', '', '', '110', '410.31', '328248.00', 'GNX 100', 'Generic -For Consumer use under commercial distribution (for Trading – wholesale or retail)', 'LUT', '0', '0', '0', 'Y', 'N', 'N', 'N'),
	(22, '8', 'Mumbai', '19-20', '1', '1', '73269099', 'HANDICRAFT/ARTWARE OF S.STEEL - ALMERE ENAMEL METAL TOOTH BRUSH HOLDER', '336', 'PCS', '2.5', 'USD', '71.05', '840.00', '59682.00', '732602B', '1.800', '0.000', '1074.276', '19', 'Drawback', '110', '195.39', '65651.04', 'GNX 100', 'Generic -For Consumer use under commercial distribution (for Trading – wholesale or retail)', 'P', '0', '0', '0', 'Y', 'N', 'N', 'N'),
	(23, '8', 'Mumbai', '19-20', '1', '2', '73269099', 'HANDICRAFT/ARTWARE OF IRON - KITCHEN PAPER TOWEL HOLDER COPPER HAMMERED', '120', 'PCS', '3.5', 'USD', '71.05', '420.00', '29841.00', '732601B', '1.800', '0.000', '537.138', '19', 'Drawback', '110', '273.54', '32824.80', 'GNX 100', 'Generic -For Consumer use under commercial distribution (for Trading – wholesale or retail)', 'P', '0', '0', '0', 'Y', 'N', 'N', 'N'),
	(24, '8', 'Mumbai', '19-20', '1', '3', '73269099', 'HANDICRAFT/ARTWARE OF IRON - KITCHEN PAPER TOWEL HOLDER ROSE GOLD', '120', 'PCS', '3.5', 'USD', '71.05', '420.00', '29841.00', '732601B', '1.800', '0.000', '537.138', '19', 'Drawback', '110', '273.54', '32824.80', 'GNX 100', 'Generic -For Consumer use under commercial distribution (for Trading – wholesale or retail)', 'P', '0', '0', '0', 'Y', 'N', 'N', 'N'),
	(25, '8', 'Mumbai', '19-20', '1', '4', '73269099', 'HANDICRAFT/ARTWARE OF IRON - KITCHEN PAPER TOWEL HOLDER ORB', '120', 'PCS', '3.5', 'USD', '71.05', '420.00', '29841.00', '732601B', '1.800', '0.000', '537.138', '19', 'Drawback', '110', '273.54', '32824.80', 'GNX 100', 'Generic -For Consumer use under commercial distribution (for Trading – wholesale or retail)', 'P', '0', '0', '0', 'Y', 'N', 'N', 'N'),
	(26, '8', 'Mumbai', '19-20', '1', '5', '73269099', 'HANDICRAFT/ARTWARE OF S.STEEL - BOGART TOOTH BRUSH HOLDER', '480', 'PCS', '2.3', 'USD', '71.05', '1104.00', '78439.20', '732602B', '1.800', '0.000', '1411.9056', '19', 'Drawback', '110', '179.76', '86284.80', 'GNX 100', 'Generic -For Consumer use under commercial distribution (for Trading – wholesale or retail)', 'P', '0', '0', '0', 'Y', 'N', 'N', 'N'),
	(27, '8', 'Mumbai', '19-20', '1', '6', '73269099', 'HANDICRAFT/ARTWARE OF S.STEEL - BOGART TUMBLER', '480', 'PCS', '2', 'USD', '71.05', '960.00', '68208.00', '732602B', '1.800', '0.000', '1227.7440000000001', '19', 'Drawback', '110', '156.31', '75028.80', 'GNX 100', 'Generic -For Consumer use under commercial distribution (for Trading – wholesale or retail)', 'P', '0', '0', '0', 'Y', 'N', 'N', 'N'),
	(28, '8', 'Mumbai', '19-20', '1', '7', '73269099', 'HANDICRAFT/ARTWARE OF S.STEEL - BOGART WASTE BASKET', '180', 'PCS', '8.5', 'USD', '71.05', '1530.00', '108706.50', '732602B', '1.800', '0.000', '1956.717', '19', 'Drawback', '110', '664.32', '119577.60', 'GNX 100', 'Generic -For Consumer use under commercial distribution (for Trading – wholesale or retail)', 'P', '0', '0', '0', 'Y', 'N', 'N', 'N'),
	(29, '8', 'Mumbai', '19-20', '1', '8', '73269099', 'HANDICRAFT/ARTWARE OF S.STEEL - SEA FOAM LOTION PUMP', '96', 'PCS', '3.35', 'USD', '71.05', '321.60', '22849.68', '732602B', '1.800', '0.000', '411.29424', '19', 'Drawback', '110', '261.82', '25134.72', 'GNX 100', 'Generic -For Consumer use under commercial distribution (for Trading – wholesale or retail)', 'P', '0', '0', '0', 'Y', 'N', 'N', 'N'),
	(30, '8', 'Mumbai', '19-20', '1', '9', '73269099', 'HANDICRAFT/ARTWARE OF S.STEEL - NEW ANAHEIM CAN BRUSHED FINISHED', '2400', 'PCS', '3.75', 'USD', '71.05', '9000.00', '639450.00', '732602B', '1.800', '0.000', '11510.1', '19', 'Drawback', '110', '293.08', '703392.00', 'GNX 100', 'Generic -For Consumer use under commercial distribution (for Trading – wholesale or retail)', 'P', '0', '0', '0', 'Y', 'N', 'N', 'N'),
	(31, '8', 'Mumbai', '19-20', '1', '10', '73269099', 'HANDICRAFT/ARTWARE OF S.STEEL - PARKSTON TWO-ONE METAL WASTE BASKET', '700', 'PCS', '8.5', 'USD', '71.05', '5950.00', '422747.50', '732602B', '1.800', '0.000', '7609.455', '19', 'Drawback', '110', '664.32', '465024.00', 'GNX 100', 'Generic -For Consumer use under commercial distribution (for Trading – wholesale or retail)', 'P', '0', '0', '0', 'Y', 'N', 'N', 'N'),
	(32, '8', 'New Delhi', '19-20', '1', '1', '30059010', 'ARTICLE OF WAX FILLING - CNDL GLD MRCRY GLASS & IRON CONTAINER', '1044', 'PCS', '8.25', 'USD', '71.05', '8613.00', '611953.65', '300501B', '1.600', '0.000', '9791.2584', '19', 'Drawback', '110', '644.78', '673150.32', 'GNX 100', 'Generic -For Consumer use under commercial distribution (for Trading – wholesale or retail)', 'LUT', '0', '0', '0', 'Y', 'N', 'Y', 'N'),
	(33, '9', 'New Delhi', '19-20', '1', '1', '85167990', '', '1200', 'KGS', '2.3', 'USD', '71.05', '2760.00', '196098.00', '8518B', '1.000', '0.000', '1960.98', '19', 'Drawback', '110', '179.76', '215712.00', 'GNX 100', 'Generic -For Consumer use under commercial distribution (for Trading – wholesale or retail)', 'LUT', '0', '0', '0', 'Y', 'N', 'N', 'N'),
	(34, '10', 'New Delhi', '19-20', 'i', 'i', '30403939', 'jjhsdg', '12', 'kg', '2.4', 'USD', '71.05', '123', '3223i', '30', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
	(35, '10', 'New Delhi', '19-20', '1', '1', '30403939', 'jjhsdg', '12', 'kg', '2.4', 'USD', '71.05', '123', '32233', '30', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
	(36, '10', 'New Delhi', '19-20', '1', '2', '31203939', 'dd', '12', 'kg', '2.4', 'USD', '71.05', '123', '3223', '30', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
	(37, '11', 'New Delhi', '19-20', '1', '1', '30403939', 'jjhsdg', '12', 'kg', '2.4', 'GBP', '71.05', '123', '32233', '30', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
	(38, '11', 'New Delhi', '19-20', '1', '2', '31203939', 'dd', '111', 'kg', '1.23', 'GBP', '71.05', '112', '3223', '30', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
	(39, '11', 'New Delhi', '19-20', '1', '3', '33203922', 'thhh', '129', 'kg', '11.09', 'GBP', '71.05', '34', '34', '22', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
	(40, '11', 'New Delhi', '19-20', '1', '4', '34029483', 'frgtggt', '9', 'kg', '11.234', 'GBP', '71.05', '122', '110', '33', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
	(41, '11', 'New Delhi', '19-20', '1', '1', '30403939', 'jjhsdg', '12', 'kg', '2.4', 'GBP', '71.05', '123', '32233', '30', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
	(42, '11', 'New Delhi', '19-20', '1', '2', '31203939', 'dd', '111', 'kg', '1.23', 'GBP', '71.05', '112', '3223', '30', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
	(43, '11', 'New Delhi', '19-20', '1', '3', '33203922', 'thhh', '129', 'kg', '11.09', 'GBP', '71.05', '34', '34', '22', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
	(44, '11', 'New Delhi', '19-20', '1', '4', '34029483', 'frgtggt', '9', 'kg', '11.234', 'GBP', '71.05', '122', '110', '33', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
	(45, '12', 'New Delhi', '19-20', '1', '1', '30403939', 'jjhsdg', '12', 'kg', '2.4', '2.4', '71.05', '123', '32233', '30', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
	(46, '12', 'New Delhi', '19-20', '1', '2', '31203939', 'dd', '111', 'kg', '1.23', '1.23', '71.05', '112', '3223', '30', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
	(47, '12', 'New Delhi', '19-20', '1', '3', '33203922', 'thhh', '129', 'kg', '11.09', '11.09', '71.05', '34', '121', '22', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
	(48, '12', 'New Delhi', '19-20', '1', '4', '34029483', 'frgtggt', '9', 'kg', '11.234', '11.234', '71.05', '122', '110', '33', '1', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
	(49, '12', 'New Delhi', '19-20', '1', '1', '30403939', 'jjhsdg', '12', 'kg', '2.4', '2.4', '71.05', '123', '32233', '30', '1', '0', '100', '19', '12a', '110', '', '', '', '', '', '', '', '', '', '', '', ''),
	(50, '12', 'New Delhi', '19-20', '1', '2', '31203939', 'dd', '111', 'kg', '1.23', '1.23', '71.05', '112', '3223', '30', '1', '0', '100', '19', '112', '110', '', '', '', '', '', '', '', '', '', '', '', ''),
	(51, '12', 'New Delhi', '19-20', '1', '3', '33203922', 'thhh', '129', 'kg', '11.09', '11.09', '71.05', '34', '121', '22', '1', '0', '100', '19', '12', '110', '', '', '', '', '', '', '', '', '', '', '', ''),
	(52, '12', 'New Delhi', '19-20', '1', '4', '34029483', 'frgtggt', '9', 'kg', '11.234', '11.234', '71.05', '122', '110', '33', '1', '0', '100', '19', '123', '110', '', '', '', '', '', '', '', '', '', '', '', ''),
	(53, '12', 'New Delhi', '19-20', '1', '1', '30403939', 'jjhsdg', '12', 'kg', '2.4', '2.4', '71.05', '123', '32233', '30', '1', '0', '100', '19', '12a', '110', '', '', '', '', '', '', '', '', '', '', '', ''),
	(54, '12', 'New Delhi', '19-20', '1', '2', '31203939', 'dd', '111', 'kg', '1.23', '1.23', '71.05', '112', '3223', '30', '1', '0', '100', '19', '112', '110', '', '', '', '', '', '', '', '', '', '', '', ''),
	(55, '12', 'New Delhi', '19-20', '1', '3', '33203922', 'thhh', '129', 'kg', '11.09', '11.09', '71.05', '34', '121', '22', '1', '0', '100', '19', '12', '110', '', '', '', '', '', '', '', '', '', '', '', ''),
	(56, '12', 'New Delhi', '19-20', '1', '4', '34029483', 'frgtggt', '9', 'kg', '11.234', '11.234', '71.05', '122', '110', '33', '1', '0', '100', '19', '123', '110', '', '', '', '', '', '', '', '', '', '', '', ''),
	(57, '12', 'New Delhi', '19-20', '1', '1', '30403939', 'jjhsdg', '12', 'kg', '2.4', 'GBP', '71.05', '123', '32233', '30', '1', '0', '100', '19', '12a', '110', 'a', 'b', '', '', '', '', '', '', '', '', '', ''),
	(58, '12', 'New Delhi', '19-20', '1', '2', '31203939', 'dd', '111', 'kg', '1.23', 'GBP', '71.05', '112', '3223', '30', '1', '0', '100', '19', '112', '110', 'a', 'b', '', '', '', '', '', '', '', '', '', ''),
	(59, '12', 'New Delhi', '19-20', '1', '3', '33203922', 'thhh', '129', 'kg', '11.09', 'GBP', '71.05', '34', '121', '22', '1', '0', '100', '19', '12', '110', 'a', 'b', '', '', '', '', '', '', '', '', '', ''),
	(60, '12', 'New Delhi', '19-20', '1', '4', '34029483', 'frgtggt', '9', 'kg', '11.234', 'GBP', '71.05', '122', '110', '33', '1', '0', '100', '19', '123', '110', 'a', 'b', '', '', '', '', '', '', '', '', '', ''),
	(61, '12', 'New Delhi', '19-20', '1', '1', '30403939', 'jjhsdg', '12', 'kg', '2.4', 'GBP', '71.05', '123', '32233', '30', '1', '0', '100', '19', '12a', '110', 'a', 'b', 'c', '', '', '', '', '', '', '', '', ''),
	(62, '12', 'New Delhi', '19-20', '1', '2', '31203939', 'dd', '111', 'kg', '1.23', 'GBP', '71.05', '112', '3223', '30', '1', '0', '100', '19', '112', '110', 'a', 'b', 'c', '', '', '', '', '', '', '', '', ''),
	(63, '12', 'New Delhi', '19-20', '1', '3', '33203922', 'thhh', '129', 'kg', '11.09', 'GBP', '71.05', '34', '121', '22', '1', '0', '100', '19', '12', '110', 'a', 'b', 'c', '', '', '', '', '', '', '', '', ''),
	(64, '12', 'New Delhi', '19-20', '1', '4', '34029483', 'frgtggt', '9', 'kg', '11.234', 'GBP', '71.05', '122', '110', '33', '1', '0', '100', '19', '123', '110', 'a', 'b', 'c', '', '', '', '', '', '', '', '', ''),
	(65, '12', 'New Delhi', '19-20', '1', '1', '30403939', 'jjhsdg', '12', 'kg', '2.4', 'GBP', '71.05', '123', '32233', '30', '1', '0', '100', '19', '12a', '110', 'a', 'b', 'c', '', '', '', '', '', '', '', '', ''),
	(66, '12', 'New Delhi', '19-20', '1', '2', '31203939', 'dd', '111', 'kg', '1.23', 'GBP', '71.05', '112', '3223', '30', '1', '0', '100', '19', '112', '110', 'a', 'b', 'c', '', '', '', '', '', '', '', '', ''),
	(67, '12', 'New Delhi', '19-20', '1', '3', '33203922', 'thhh', '129', 'kg', '11.09', 'GBP', '71.05', '34', '121', '22', '1', '0', '100', '19', '12', '110', 'a', 'b', 'c', '', '', '', '', '', '', '', '', ''),
	(68, '12', 'New Delhi', '19-20', '1', '4', '34029483', 'frgtggt', '9', 'kg', '11.234', 'GBP', '71.05', '122', '110', '33', '1', '0', '100', '19', '123', '110', 'a', 'b', 'c', '', '', '', '', '', '', '', '', ''),
	(69, '12', 'New Delhi', '19-20', '1', '1', '30403939', 'jjhsdg', '12', 'kg', '2.4', 'GBP', '71.05', '123', '32233', '30', '1', '0', '100', '19', '12a', '110', 'a', 'b', 'c', '', '', '', '', '', '', '', '', ''),
	(70, '12', 'New Delhi', '19-20', '1', '2', '31203939', 'dd', '111', 'kg', '1.23', 'GBP', '71.05', '112', '3223', '30', '1', '0', '100', '19', '112', '110', 'a', 'b', 'c', '', '', '', '', '', '', '', '', ''),
	(71, '12', 'New Delhi', '19-20', '1', '3', '33203922', 'thhh', '129', 'kg', '11.09', 'GBP', '71.05', '34', '121', '22', '1', '0', '100', '19', '12', '110', 'a', 'b', 'c', '', '', '', '', '', '', '', '', ''),
	(72, '12', 'New Delhi', '19-20', '1', '4', '34029483', 'frgtggt', '9', 'kg', '11.234', 'GBP', '71.05', '122', '110', '33', '1', '0', '100', '19', '123', '110', 'a', 'b', 'c', '', '', '', '', '', '', '', '', ''),
	(73, '12', 'New Delhi', '19-20', '1', '1', '30403939', 'jjhsdg', '12', 'kg', '2.4', 'GBP', '71.05', '123', '32233', '30', '1', '0', '100', '19', '12a', '110', 'a', 'b', 'c', '', '', '', '', '', '', '', '', ''),
	(74, '12', 'New Delhi', '19-20', '1', '2', '31203939', 'dd', '111', 'kg', '1.23', 'GBP', '71.05', '112', '3223', '30', '1', '0', '100', '19', '112', '110', 'a', 'b', 'c', '', '', '', '', '', '', '', '', ''),
	(75, '12', 'New Delhi', '19-20', '1', '3', '33203922', 'thhh', '129', 'kg', '11.09', 'GBP', '71.05', '34', '121', '22', '1', '0', '100', '19', '12', '110', 'a', 'b', 'c', '', '', '', '', '', '', '', '', ''),
	(76, '12', 'New Delhi', '19-20', '1', '4', '34029483', 'frgtggt', '9', 'kg', '11.234', 'GBP', '71.05', '122', '110', '33', '1', '0', '100', '19', '123', '110', 'a', 'b', 'c', '', '', '', '', '', '', '', '', ''),
	(77, '9', 'Mumbai', '19-20', '1', '1', '30403939', 'jjhsdg', '12', 'kg', '2.4', 'GBP', '71.05', '123', '32233', '30', '1', '0', '100', '19', '12a', '110', 'a', 'b', 'c', '', '', '', '', '', '', '', '', ''),
	(78, '9', 'Mumbai', '19-20', '1', '2', '31203939', 'dd', '111', 'kg', '1.23', 'GBP', '71.05', '112', '3223', '30', '1', '0', '100', '19', '112', '110', 'a', 'b', 'c', '', '', '', '', '', '', '', '', ''),
	(79, '9', 'Mumbai', '19-20', '1', '3', '33203922', 'thhh', '129', 'kg', '11.09', 'GBP', '71.05', '34', '121', '22', '1', '0', '100', '19', '12', '110', 'a', 'b', 'c', '', '', '', '', '', '', '', '', ''),
	(80, '9', 'Mumbai', '19-20', '1', '4', '34029483', 'frgtggt', '9', 'kg', '11.234', 'GBP', '71.05', '122', '110', '33', '1', '0', '100', '19', '123', '110', 'a', 'b', 'c', '', '', '', '', '', '', '', '', ''),
	(81, '3', 'Haryana', '19-20', '1', '1', '232938238', 'hhgf', '12', 'kg', '2.2', 'usd', '71', '100', '1000', '2343', '', '', '', '19', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
	(82, '4', 'Haryana', '19-20', '1', '1', '61013010', 'HONEY DRUMS', '11020', 'kg', '2.4', 'USD', '71.05', '26448.00', '1879130.40', '610104B', '5.200', 'rate', '97714.78080000001', '19', 'Drawback', '110', '187.57', '2067021.40', 'GNX100', 'Generic -For Consumer use under commercial distribution (for Trading – wholesale or retail)', 'LUT', '0', '0', '0', 'Y', 'N', 'N', 'N'),
	(83, '5', 'Haryana', '19-20', '1', '1', '10063020', 'Indian Basmati Rice', '9240', 'Bags', '6', 'CAD', '53.05', '55440.00', '2941092.00', '100602B', '0.000', 'rate', '0', '19', 'Drawback', '110', '350.13', '3235201.20', 'GNX600', 'Generic -For Repair or Refurbishing as defective or second hand goods', 'LUT', '0', '0', '0', 'Y', 'N', 'N', 'N'),
	(84, '5', 'Ludhiana', '19-20', '1', '1', '232938238', 'hhgf', '12', 'kg', '2.2', 'usd', '71', '100', '1000', '2343', '', '', '', '19', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
	(85, '5', 'Ludhiana', '19-21', '1', '2', '04-01-97', 'rr', '13', 'kg', '3.2', 'usd', '71', '100', '1000', '2343', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
	(86, '5', 'Ludhiana', '19-22', '1', '3', '11-04-82', 'AWD', '14', 'kg', '4.2', 'usd', '71', '100', '1000', '2343', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
	(87, '5', 'Ludhiana', '19-20', '1', '1', '232938238', 'hhgf', '12', 'kg', '2.2', 'usd', '71', '100', '1000', '2343', '', '', '', '19', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
	(88, '5', 'Ludhiana', '19-21', '1', '2', '04-01-97', 'rr', '13', 'kg', '3.2', 'usd', '71', '100', '1000', '2343', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
	(89, '5', 'Ludhiana', '19-22', '1', '3', '11-04-82', 'AWD', '14', 'kg', '4.2', 'usd', '71', '100', '1000', '2343', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
	(90, '5', 'Ludhiana', '19-20', '1', '1', '232938238', 'hhgf', '12', 'kg', '2.2', 'usd', '71', '100', '1000', '2343', '', '', '', '19', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
	(91, '5', 'Ludhiana', '19-20', '1', '2', '12348474', 'rr', '13', 'kg', '3.2', 'usd', '71', '100', '1000', '2343', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
	(92, '5', 'Ludhiana', '19-20', '1', '3', '232245', 'AWD', '14', 'kg', '4.2', 'usd', '71', '100', '1000', '2343', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
	(93, '14', 'New Delhi', '19-20', '1', '1', '85159000', 'ffdfs', '12', 'Kgs', '23.4', 'USD', '71.05', '280.80', '19950.84', '8515B', '2.000', '0.000', '399.0168', '00', 'Free SB Involving Remittance Of Foreign ', '110', '1828.83', '0.00', 'FSH900', 'Food – For personal consumption', 'LUT', '0', '0', '0', 'Y', 'N', 'N', 'N'),
	(94, '14', 'New Delhi', '19-20', '1', '2', '85167990', 'sfdfef', '100', 'Kgs', '1.4', 'USD', '71.05', '140.00', '9947.00', '8515B', '2.000', '0.000', '198.94', '00', '', '110', '109.42', '10942.00', 'GNX100', 'Generic -For Consumer use under commercial distribution (for Trading – wholesale or retail)', 'LUT', '0', '0', '0', 'Y', 'N', 'N', 'N'),
	(95, '6', 'Ludhiana', '19-20', '1', '1', '85168000', 'sdsdsada', '21', 'Kgs', '2.2', 'USD', '71.05', '46.20', '3282.51', 'dbksr', '', '', '', '00', 'Free SB Involving Remittance Of Foreign ', '110', '171.94', '3610.74', 'GNX100', 'Generic -For Consumer use under commercial distribution (for Trading – wholesale or retail)', 'LUT', '0', '0', '0', 'Y', 'N', 'N', 'N'),
	(96, '7', 'Ludhiana', '19-20', '1', '1', '54011000', 'cdcdcdesc', '1212', 'kg', '3.7', 'USD', '71.05', '4484.40', '318616.62', 'dbksr', '', '', '', '73', 'EPCG, Drawback and Jobbing', '110', '289.17', '350474.04', 'GNX100', 'Generic -For Consumer use under commercial distribution (for Trading – wholesale or retail)', 'LUT', '0', '0', '0', 'Y', 'N', 'N', 'N');
/*!40000 ALTER TABLE `esediitem` ENABLE KEYS */;

-- Dumping structure for table exportsea.esedilicensedet
DROP TABLE IF EXISTS `esedilicensedet`;
CREATE TABLE IF NOT EXISTS `esedilicensedet` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `jobno` varchar(50) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `fy` varchar(50) NOT NULL,
  `invoicesrno` int(11) NOT NULL,
  `licensetype` varchar(50) NOT NULL,
  `registrationno` varchar(50) NOT NULL,
  `registrationdate` date NOT NULL,
  `itemsno` int(11) NOT NULL,
  `slnoinc` int(11) NOT NULL,
  `slnoine` int(11) NOT NULL,
  `expitemdet` varchar(60) NOT NULL,
  `expquantity` float(10,3) NOT NULL,
  `impitemdet` varchar(60) NOT NULL,
  `quantity` float(10,3) NOT NULL,
  `unit` varchar(20) NOT NULL,
  `impind` varchar(20) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table exportsea.esedilicensedet: ~7 rows (approximately)
/*!40000 ALTER TABLE `esedilicensedet` DISABLE KEYS */;
INSERT INTO `esedilicensedet` (`sno`, `jobno`, `branch`, `fy`, `invoicesrno`, `licensetype`, `registrationno`, `registrationdate`, `itemsno`, `slnoinc`, `slnoine`, `expitemdet`, `expquantity`, `impitemdet`, `quantity`, `unit`, `impind`) VALUES
	(1, '7', 'Ludhiana', '19-20', 1, 'DEEC', '0310827718', '2019-03-15', 1, 1, 1, '', 27120.000, 'SODA ASH (DENSE/LIGHT)', 5424.000, 'KGS', 'M'),
	(2, '7', 'Ludhiana', '19-20', 1, 'DEEC', '310827718', '2019-03-15', 1, 2, 1, '', 27120.000, 'PACKING\nMATERIAL', 120.530, 'KGS', 'M'),
	(3, '7', 'Ludhiana', '19-20', 1, 'EPCG', '0310827718', '2019-05-15', 1, 1, 1, '', 26180.000, 'Soda Ash', 120.530, 'KGS', 'M'),
	(4, '7', 'Ludhiana', '19-20', 1, 'EPCG', '0310827718', '2019-03-14', 1, 2, 1, '', 26180.000, 'PACKING MATERIAL - LDPEDENSITY 0.92 GSM', 120.530, 'KGS', 'M'),
	(5, '7', 'Ludhiana', '19-20', 1, 'EPCG', '0310827718', '2019-03-15', 1, 2, 1, '', 26180.000, 'Packing', 120.530, 'KGS', 'M'),
	(6, '7', 'Ludhiana', '19-20', 1, 'EPCG', '0310827718', '2019-04-15', 1, 3, 1, '', 26180.000, 'Packing', 120.530, 'KGS', 'M'),
	(7, '7', 'Ludhiana', '19-20', 1, 'EPCG', '0310827718', '2019-04-15', 1, 3, 1, '', 26180.000, 'Packing', 120.530, 'KGS', 'M');
/*!40000 ALTER TABLE `esedilicensedet` ENABLE KEYS */;

-- Dumping structure for table exportsea.esedisinglewindowinfo
DROP TABLE IF EXISTS `esedisinglewindowinfo`;
CREATE TABLE IF NOT EXISTS `esedisinglewindowinfo` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `jobno` int(11) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `fy` varchar(40) NOT NULL,
  `invoicesrno` int(11) NOT NULL,
  `itemno` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `qualifier` varchar(50) NOT NULL,
  `swcode` varchar(50) NOT NULL,
  `swtext` varchar(50) NOT NULL,
  `measurement` varchar(50) NOT NULL,
  `unit` varchar(50) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table exportsea.esedisinglewindowinfo: ~12 rows (approximately)
/*!40000 ALTER TABLE `esedisinglewindowinfo` DISABLE KEYS */;
INSERT INTO `esedisinglewindowinfo` (`sno`, `jobno`, `branch`, `fy`, `invoicesrno`, `itemno`, `type`, `qualifier`, `swcode`, `swtext`, `measurement`, `unit`) VALUES
	(1, 14, 'New Delhi', '19-20', 1, 1, 'CHR', 'SQC', '', '', '', ''),
	(2, 14, 'New Delhi', '19-20', 1, 1, 'ORC', 'STO', '07-DELHI', '', '', ''),
	(3, 14, 'New Delhi', '19-20', 1, 1, 'DTY', 'GCESS', '', '', '', ''),
	(4, 14, 'New Delhi', '19-20', 1, 2, '232938238', 'CHR', 'SQC', '', '', ''),
	(5, 14, 'New Delhi', '19-20', 1, 2, '12348474', 'ORC', 'STO', '', '', ''),
	(6, 14, 'New Delhi', '19-20', 1, 2, '232245', 'CHR', 'SQC', '', '', ''),
	(7, 14, 'New Delhi', '19-20', 1, 2, '232938238', 'CHR', 'SQC', '', '', ''),
	(8, 14, 'New Delhi', '19-20', 1, 2, '12348474', 'ORC', 'STO', '', '', ''),
	(9, 14, 'New Delhi', '19-20', 1, 2, '232245', 'CHR', 'SQC', '', '', ''),
	(10, 6, 'Ludhiana', '19-20', 1, 1, 'CHR', 'SQC', '', '', '', ''),
	(11, 6, 'Ludhiana', '19-20', 1, 1, 'ORC', 'STO', '07-DELHI', '', '', ''),
	(12, 6, 'Ludhiana', '19-20', 1, 1, 'DTY', 'GCESS', '', '', '0.000', 'KGS');
/*!40000 ALTER TABLE `esedisinglewindowinfo` ENABLE KEYS */;

-- Dumping structure for table exportsea.esedisupporting
DROP TABLE IF EXISTS `esedisupporting`;
CREATE TABLE IF NOT EXISTS `esedisupporting` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `jobno` varchar(40) NOT NULL,
  `branch` varchar(40) NOT NULL,
  `fy` varchar(30) NOT NULL,
  `invoicesrno` varchar(20) NOT NULL,
  `itemno` varchar(20) NOT NULL,
  `statementfor` varchar(20) NOT NULL,
  `irnno` varchar(20) NOT NULL,
  `doctype` varchar(20) NOT NULL,
  `doccode` varchar(20) NOT NULL,
  `issuedpartyname` varchar(40) NOT NULL,
  `issuedpartyaddress` varchar(40) NOT NULL,
  `drn` varchar(40) NOT NULL,
  `place` varchar(40) NOT NULL,
  `issuedate` date NOT NULL,
  `expirydate` date NOT NULL,
  `bnfpartyname` varchar(40) NOT NULL,
  `bnfpartyaddress` varchar(100) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Dumping data for table exportsea.esedisupporting: ~5 rows (approximately)
/*!40000 ALTER TABLE `esedisupporting` DISABLE KEYS */;
INSERT INTO `esedisupporting` (`sno`, `jobno`, `branch`, `fy`, `invoicesrno`, `itemno`, `statementfor`, `irnno`, `doctype`, `doccode`, `issuedpartyname`, `issuedpartyaddress`, `drn`, `place`, `issuedate`, `expirydate`, `bnfpartyname`, `bnfpartyaddress`) VALUES
	(1, '1', 'New Delhi', '20-21', '1', '1', 'Invoice', '2019091600051042', 'Customs invoice', '331000', 'RELIANCE INDUSTRIES LTD', 'HOSHIARPUR,PUN JAB', '2019091600018368', 'Punjab', '2019-10-16', '2019-10-18', 'RELIANCE INDUSTRIES LIMITED', 'Hoshiarpur,Punjab'),
	(2, '1', 'New Delhi', '20-21', '1', '2', 'Invoice', '2019091600051232', 'Customs Invoice', '935000', 'Reliance Industries Ltd', 'HOSHIARPUR,PUN JAB', '2019091600018439', 'Punjab', '2019-10-22', '2019-10-23', 'RELIANCE INDUSTRIES LTD', 'Hoshiarpur,Punjab'),
	(3, '1', 'Haryana', '20-21', '1', '1', 'invoice', '2019371338', 'customs', '11329', 'ktke maam', 'adwdfefe', '110939393', 'Delhi', '2019-10-16', '2019-10-23', 'self', '  '),
	(4, '2', 'Haryana', '20-21', '1', '1', 'SB', '2019110600052014', 'Commercial Invoice i', '331000Q', 'QUEENBEE FOOD PVT LTD', 'A-36 IIND FLOOR,LOK VIHAR,pITAMPURA', '201911060018746', '', '2019-11-06', '0000-00-00', 'ODEM iNTERNATIONAL', 'INC 850 CALCON HOOK UNITED STATES'),
	(5, '4', 'Mumbai', '19-20', '1', '1', 'SB', '2019061200011676', 'COMMERCIAL INVOICE W', '331000', 'BKK OVERSEAS', 'BOHRAN STREET FIROZABAD 283203', '2019061200004289', '', '2019-06-07', '0000-00-00', 'CACHET POPULART ', 'AG SWITZERLAND'),
	(6, '8', 'Mumbai', '19-20', '1', '1', 'SB', '2019122400 088631', 'Commercial invoice w', '3310000', 'KLK INTERNATIONAL', 'PETAL BASTI, RAMPUR ROAD MORADABAD 24400', '201912240003 1027', '', '2019-12-23', '0000-00-00', 'TATARA GROUP', '381 BLAIR ROAD, AVENEL, NJ-07001- 2291');
/*!40000 ALTER TABLE `esedisupporting` ENABLE KEYS */;

-- Dumping structure for table exportsea.esedithirdparty
DROP TABLE IF EXISTS `esedithirdparty`;
CREATE TABLE IF NOT EXISTS `esedithirdparty` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `jobno` varchar(20) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `fy` varchar(20) NOT NULL,
  `invoicesrno` varchar(20) NOT NULL,
  `itemno` varchar(20) NOT NULL,
  `ieccode` varchar(50) NOT NULL,
  `branchsrno` varchar(10) NOT NULL,
  `manufacturername` varchar(50) NOT NULL,
  `manufactureraddress1` varchar(80) NOT NULL,
  `manufactureraddress2` varchar(80) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pin` varchar(30) NOT NULL,
  `gstintype` varchar(30) NOT NULL,
  `gstinno` varchar(30) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table exportsea.esedithirdparty: ~0 rows (approximately)
/*!40000 ALTER TABLE `esedithirdparty` DISABLE KEYS */;
INSERT INTO `esedithirdparty` (`sno`, `jobno`, `branch`, `fy`, `invoicesrno`, `itemno`, `ieccode`, `branchsrno`, `manufacturername`, `manufactureraddress1`, `manufactureraddress2`, `city`, `pin`, `gstintype`, `gstinno`) VALUES
	(1, '4', 'Haryana', '19-20', '1', '1', '1222173', '0', 'QUEEN', 'XJCJC', 'JCJFIR', 'NEW DELHI', '119921', '', '');
/*!40000 ALTER TABLE `esedithirdparty` ENABLE KEYS */;

-- Dumping structure for table exportsea.esinvoicecharge
DROP TABLE IF EXISTS `esinvoicecharge`;
CREATE TABLE IF NOT EXISTS `esinvoicecharge` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `docketno` varchar(20) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `fy` varchar(30) NOT NULL,
  `chargename` varchar(20) NOT NULL,
  `hsncode` varchar(20) NOT NULL,
  `currencyname` varchar(30) NOT NULL,
  `exchangerate` float(5,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `rate` int(11) NOT NULL,
  `amount` float(10,2) NOT NULL,
  `discount` float(3,2) NOT NULL,
  `cgstrate` float(3,2) NOT NULL,
  `sgstrate` float(3,2) NOT NULL,
  `igstrate` float(3,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

-- Dumping data for table exportsea.esinvoicecharge: ~23 rows (approximately)
/*!40000 ALTER TABLE `esinvoicecharge` DISABLE KEYS */;
INSERT INTO `esinvoicecharge` (`id`, `docketno`, `branch`, `fy`, `chargename`, `hsncode`, `currencyname`, `exchangerate`, `quantity`, `rate`, `amount`, `discount`, `cgstrate`, `sgstrate`, `igstrate`) VALUES
	(1, 'NDL/SE/1/20-21', 'New Delhi', '20-21', 'Agency charge', '996712', 'USD', 71.10, 1, 1, 500.00, 0.00, 0.00, 0.00, 0.18),
	(2, 'NDL/SE/1/20-21', 'New Delhi', '20-21', 'B/L Charges', '996719', 'USD', 71.10, 1, 1, 1245.00, 0.00, 0.00, 0.00, 0.00),
	(3, 'UP/SE/1/20-21', 'Uttar Pradesh', '20-21', 'B/L Charges', '996719', 'INR', 1.00, 1, 1, 100.00, 0.00, 9.00, 9.00, 0.00),
	(4, 'UP/SE/1/20-21', 'Uttar Pradesh', '20-21', 'Ocean Freight', '996521', 'USD', 71.10, 1, 25, 1824.75, 0.00, 0.00, 0.00, 0.00),
	(5, 'UP/SE/2/20-21', 'Uttar Pradesh', '20-21', 'B/L Charges', '996719', 'INR', 1.00, 1, 1, 100.00, 0.00, 9.00, 9.00, 0.00),
	(6, 'MUM/SE/3/20-21', 'Mumbai', '20-21', 'B/L Charges', '996719', 'USD', 71.10, 1, 1, 1200.00, 0.00, 0.00, 0.00, 0.00),
	(7, 'MUM/SE/3/20-21', 'Mumbai', '20-21', 'B/L Charges', '996719', 'USD', 71.10, 1, 1, 1200.00, 0.00, 9.00, 9.00, 0.00),
	(8, 'MUM/SE/6/20-21', 'Mumbai', '20-21', 'Toll Charges', '996511', 'INR', 1.00, 1, 1, 267.00, 0.00, 0.09, 0.09, 0.00),
	(9, 'MUM/SE/6/20-21', 'Mumbai', '20-21', 'THC', '996711', 'INR', 1.00, 1, 1, 7900.00, 0.00, 0.09, 0.09, 0.00),
	(10, 'MUM/SE/6/20-21', 'Mumbai', '20-21', 'B/L Charges', '996719', 'INR', 1.00, 1, 1, 3000.00, 0.00, 0.09, 0.09, 0.00),
	(11, 'MUM/SE/6/20-21', 'Mumbai', '20-21', 'Seal Charges', '996711', 'INR', 1.00, 1, 1, 350.00, 0.00, 0.09, 0.09, 0.00),
	(12, 'HR/SE/6/20-21', 'Haryana', '20-21', 'ACD Charges', '996711', 'USD', 71.10, 1, 1, 1250.00, 0.00, 0.09, 0.09, 0.00),
	(13, 'NDL/SE/7/19-20', 'New Delhi', '19-20', 'D.O Charges', '996719', 'USD', 71.05, 1, 1, 2345.00, 0.00, 0.09, 0.09, 0.00),
	(14, 'NDL/SE/800/19-20', 'New Delhi', '19-20', 'VGM Charges', '996711', 'INR', 1.00, 1, 1, 500.00, 0.00, 0.00, 0.00, 0.18),
	(15, 'NDL/SE/800/19-20', 'New Delhi', '19-20', 'THC', '996711', 'INR', 1.00, 1, 1, 17235.00, 0.00, 0.00, 0.00, 0.18),
	(16, 'NDL/SE/800/19-20', 'New Delhi', '19-20', 'B/L Charges', '996719', 'INR', 1.00, 1, 1, 2850.00, 0.00, 0.00, 0.00, 0.18),
	(17, 'NDL/SE/800/19-20', 'New Delhi', '19-20', 'Seal Charges', '996711', 'INR', 1.00, 1, 1, 550.00, 0.00, 0.00, 0.00, 0.18),
	(18, 'NDL/SE/801/19-20', 'New Delhi', '19-20', 'Ocean Freight', '996521', 'USD', 71.05, 1, 1, 145342.69, 0.00, 0.00, 0.00, 0.00),
	(19, 'NDL/SE/801/19-20', 'New Delhi', '19-20', 'THC', '996711', 'INR', 0.00, 1, 1, 5400.00, 0.00, 9.00, 0.00, 0.18),
	(20, 'NDL/SE/801/19-20', 'New Delhi', '19-20', 'B/L Charges', '996719', 'INR', 1.00, 1, 1, 3200.00, 0.00, 0.00, 0.00, 0.18),
	(21, 'NDL/SE/801/19-20', 'New Delhi', '19-20', 'ACD Charges', '996711', 'INR', 1.00, 1, 30, 2193.30, 0.00, 0.00, 0.00, 0.18),
	(22, 'NDL/SE/801/19-20', 'New Delhi', '19-20', 'Seal Charges', '996711', 'INR', 1.00, 1, 1, 375.00, 0.00, 0.00, 0.00, 0.18),
	(23, 'NDL/SE/801/19-20', 'New Delhi', '19-20', 'ISPS Charges', '996719', 'USD', 71.05, 1, 12, 877.32, 0.00, 0.00, 0.00, 0.18),
	(24, 'NDL/SE/9/19-20', 'New Delhi', '19-20', 'B/L Charges', '996719', 'CNY', 10.05, 1, 1, 112.00, 0.00, 0.00, 0.00, 0.00),
	(25, 'NDL/SE/9/19-20', 'New Delhi', '19-20', 'Carting Charges', '996719', 'USD', 71.05, 1, 1, 23.00, 0.00, 0.00, 0.00, 0.00),
	(26, 'HR/SE/10/19-20', 'Haryana', '19-20', 'Examination Charges', '996719', 'INR', 1.00, 1, 1, 3000.00, 0.00, 0.90, 0.90, 0.00),
	(27, 'HR/SE/10/19-20', 'Haryana', '19-20', 'B/L Charges', '996719', 'INR', 0.00, 1, 1, 200.00, 0.00, 0.90, 0.90, 0.00);
/*!40000 ALTER TABLE `esinvoicecharge` ENABLE KEYS */;

-- Dumping structure for table exportsea.esserviceinvoice
DROP TABLE IF EXISTS `esserviceinvoice`;
CREATE TABLE IF NOT EXISTS `esserviceinvoice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `docketno` varchar(30) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `fy` varchar(20) NOT NULL,
  `billno` varchar(20) NOT NULL,
  `billdate` date NOT NULL,
  `invoiceno` varchar(20) NOT NULL,
  `invoicedate` date NOT NULL,
  `category` varchar(20) NOT NULL,
  `narration` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

-- Dumping data for table exportsea.esserviceinvoice: ~11 rows (approximately)
/*!40000 ALTER TABLE `esserviceinvoice` DISABLE KEYS */;
INSERT INTO `esserviceinvoice` (`id`, `docketno`, `branch`, `fy`, `billno`, `billdate`, `invoiceno`, `invoicedate`, `category`, `narration`) VALUES
	(1, 'NDL/SE/1/20-21', 'New Delhi', '20-21', 'DEL/SE/S1/2021', '2019-10-16', 'exp/se/1', '2019-10-22', 'tkd', ''),
	(2, 'UP/SE/1/20-21', 'Uttar Pradesh', '20-21', 'UP/SE/S1/2021', '2019-10-02', '05/1920', '0000-00-00', 'mbd', ''),
	(3, 'UP/SE/2/20-21', 'Uttar Pradesh', '20-21', 'UP/SE/S2/2021', '2019-10-23', '05.1920', '2019-10-23', 'mbd', ''),
	(4, 'MUM/SE/3/20-21', 'Mumbai', '20-21', 'MH/SE/S3/2021', '0000-00-00', '', '0000-00-00', '', ''),
	(5, 'MUM/SE/6/20-21', 'Mumbai', '20-21', 'MH/SE/S6/20-21', '2019-10-19', '', '0000-00-00', '', 'BLNOMUMA/310'),
	(6, 'MUM/SE/1/20-21', 'Mumbai', '20-21', 'MH/SE/S1/20-21', '2019-11-21', '', '0000-00-00', '', ''),
	(7, 'MUM/SE/4/20-21', 'Mumbai', '20-21', 'MH/SE/S4/20-21', '2019-11-14', '', '0000-00-00', '', ''),
	(8, 'HR/SE/6/20-21', 'Haryana', '20-21', 'HR/SE/S6/20-21', '2019-12-02', 'pf001', '2019-11-27', '', ''),
	(9, 'NDL/SE/7/19-20', 'New Delhi', '19-20', 'DEL/SE/S7/19-20', '2019-12-04', 'FRU/1', '2019-12-18', 'JNPT', ''),
	(10, 'NDL/SE/800/19-20', 'New Delhi', '19-20', 'DEL/SE/S800/19-20', '2019-09-17', 'EXRAI/1920/006', '2019-12-26', 'TKD(F/w)', 'DEL/251/19-20, MEDU7954549/40 CTNS- 2757 INV NO- E'),
	(11, 'NDL/SE/801/19-20', 'New Delhi', '19-20', 'DEL/SE/S801/19-20', '2019-09-17', 'MSEC/786/256/1920', '2019-08-14', 'chennai', 'DEL/250/19-20, EITU0613686/20 CTNS- 21 IN VNO- MES'),
	(12, 'NDL/SE/9/19-20', 'New Delhi', '19-20', 'DEL/SE/S9/19-20', '2020-01-16', 'gfg', '2020-01-15', 'ctd', 'ngbgbg'),
	(13, 'HR/SE/10/19-20', 'Haryana', '19-20', 'HR/SE/S10/19-20', '0000-00-00', 'BHP EX 38', '2020-01-08', '', '');
/*!40000 ALTER TABLE `esserviceinvoice` ENABLE KEYS */;

-- Dumping structure for table exportsea.hbldetails
DROP TABLE IF EXISTS `hbldetails`;
CREATE TABLE IF NOT EXISTS `hbldetails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `docketno` varchar(30) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `fy` varchar(20) NOT NULL,
  `freightamt` varchar(10) NOT NULL,
  `freightpayableat` varchar(30) NOT NULL,
  `shipmenttype` varchar(20) NOT NULL,
  `modeoftransport` varchar(30) NOT NULL,
  `transhipment` varchar(30) NOT NULL,
  `invoiceno` varchar(30) NOT NULL,
  `invoicedate` date NOT NULL,
  `sbno` varchar(30) NOT NULL,
  `sbdate` date NOT NULL,
  `hscode` varchar(40) NOT NULL,
  `ieccode` varchar(40) NOT NULL,
  `oceanthc` varchar(30) NOT NULL,
  `oceanfreight` varchar(30) NOT NULL,
  `destinationthc` varchar(30) NOT NULL,
  `inlandhaulage` varchar(30) NOT NULL,
  `destinationinlandhaulage` varchar(30) NOT NULL,
  `noofbl` varchar(10) NOT NULL,
  `placeofissue` varchar(20) NOT NULL,
  `dateofissue` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Dumping data for table exportsea.hbldetails: ~11 rows (approximately)
/*!40000 ALTER TABLE `hbldetails` DISABLE KEYS */;
INSERT INTO `hbldetails` (`id`, `docketno`, `branch`, `fy`, `freightamt`, `freightpayableat`, `shipmenttype`, `modeoftransport`, `transhipment`, `invoiceno`, `invoicedate`, `sbno`, `sbdate`, `hscode`, `ieccode`, `oceanthc`, `oceanfreight`, `destinationthc`, `inlandhaulage`, `destinationinlandhaulage`, `noofbl`, `placeofissue`, `dateofissue`) VALUES
	(1, 'NDL/SE/1/20-21', 'New Delhi', '20-21', '', 'Destination', 'FCL/FCL', '', '', '', '0000-00-00', '', '0000-00-00', '', '', 'None', 'Collect', 'None', 'Prepaid', 'None', '3', 'Delhi', '2019-10-22'),
	(2, 'NDL/SE/2/20-21', 'New Delhi', '20-21', '', 'Destination', 'FCL/FCL', '', '', '', '0000-00-00', '', '0000-00-00', '', '', 'Prepaid', 'Prepaid', 'Collect', 'None', 'None', '3', '', '2019-11-06'),
	(3, 'UP/SE/1/20-21', 'Uttar Pradesh', '20-21', '', 'Destination', 'FCL/FCL', '', '', '', '0000-00-00', '', '0000-00-00', '', '', 'Prepaid', 'Collect', 'None', 'None', 'None', '3', '', '2019-11-14'),
	(4, 'HR/SE/4/20-21', 'Haryana', '20-21', '', 'Destination', 'FCL/FCL', '', '', '', '0000-00-00', '', '0000-00-00', '', '', '', 'Collect', '', '', '', '3', '', '2019-10-31'),
	(5, 'HR/SE/5/20-21', 'Haryana', '20-21', '', 'NEW DELHI', 'FCL/FCL', '', '', '', '0000-00-00', '', '0000-00-00', '', '', 'Prepaid', 'Prepaid', 'Collect', 'None', 'None', '3', 'HARYANA', '2019-11-16'),
	(6, 'HR/SE/6/20-21', 'Haryana', '20-21', '', 'Destination', 'FCL/FCL', '', '', '', '0000-00-00', '', '0000-00-00', '', '', 'Prepaid', 'Collect', 'None', 'None', 'None', '3', 'Haryana', '2019-11-30'),
	(7, 'NDL/SE/6/20-21', 'New Delhi', '20-21', '', 'Destination', 'FCL/FCL', '', '', '2019-12-11', '0000-00-00', '2019-12-17', '0000-00-00', '16690192', '0819028484', 'None', 'Prepaid', 'Prepaid', 'None', 'None', '3', 'Delhi', '2019-12-17'),
	(8, 'NDL/SE/7/19-20', 'New Delhi', '19-20', '', 'DESTINATION', 'FCL/FCL', '', '', '2019-12-15', '0000-00-00', '', '0000-00-00', '', '', 'None', 'Prepaid', 'Prepaid', 'None', 'None', '3', 'TELANGANA', '2019-12-16'),
	(9, 'NDL/SE/800/19-20', 'New Delhi', '19-20', '', 'DESTINATION', 'FCL/FCL', '', '', 'EXRAI/19-20/006 ', '2019-10-29', '121234', '2019-09-25', '0596057741,0596057742', '0596057741', 'Prepaid', 'Collect', 'None', 'Prepaid', 'Collect', '3', 'Delhi', '2019-09-13'),
	(10, 'NDL/SE/801/19-20', 'New Delhi', '19-20', '', 'Destination', 'FCL/FCL', '', '', 'MSEH/786/265/19-20', '2019-08-28', '663841', '2019-08-31', '25210090', '', 'Prepaid', 'Prepaid', 'None', 'None', 'None', '3', 'Delhi', '2019-09-02'),
	(11, 'HR/SE/500/19-20', 'Haryana', '19-20', '', 'New Delhi', 'FCL/FCL', '', '', 'KM-Ex/19-20/A037', '2019-08-29', '6551893', '2019-08-28', '04090000', '0515019771', 'Prepaid', 'Prepaid', 'None', 'Prepaid', 'None', '3', 'Haryana', '2019-09-12'),
	(12, 'UP/SE/6/19-20', 'Uttar Pradesh', '19-20', '', 'DESTINATION', 'FCL/FCL', '', '', 'EXP-53-2019-2020', '2020-11-26', '7893463', '2020-10-28', '29061100', '2903001936', 'Prepaid', 'Prepaid', 'None', 'None', 'None', '3', 'Mumbai', '2020-01-29'),
	(13, 'HR/SE/9/19-20', 'Haryana', '19-20', '', 'Destination', 'LCL/LCL', '', '', 'QBF/EX/19-20/145', '0000-00-00', '', '0000-00-00', '6119029', '', 'Prepaid', 'Collect', 'Collect', 'None', 'None', '3', 'Delhi', '2020-01-16'),
	(14, 'HR/SE/10/19-20', 'Haryana', '19-20', '', 'DESTINATION', 'LCL/LCL', '', '', 'BHP EX 38', '0000-00-00', '', '0000-00-00', '', '', 'Prepaid', 'Prepaid', 'Collect', 'None', 'None', '3', 'DELHI', '2020-01-22');
/*!40000 ALTER TABLE `hbldetails` ENABLE KEYS */;

-- Dumping structure for table exportsea.invoicecharge
DROP TABLE IF EXISTS `invoicecharge`;
CREATE TABLE IF NOT EXISTS `invoicecharge` (
  `chargename` varchar(30) NOT NULL,
  `hsncode` varchar(20) NOT NULL,
  PRIMARY KEY (`chargename`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table exportsea.invoicecharge: ~19 rows (approximately)
/*!40000 ALTER TABLE `invoicecharge` DISABLE KEYS */;
INSERT INTO `invoicecharge` (`chargename`, `hsncode`) VALUES
	('ACD Charges', '996711'),
	('Agency charge', '996712'),
	('B/L Charges', '996719'),
	('B/L Surrender Fees', '996719'),
	('Carting Charges', '996719'),
	('CMC Charges', '996719'),
	('COC Certification', '996719'),
	('D.O Charges', '996719'),
	('Documentaition Charges', '996719'),
	('Examination Charges', '996719'),
	('ISPS Charges', '996719'),
	('Ocean Freight', '996521'),
	('On Carriage', '996711'),
	('R.M.S Processing Charges', '996719'),
	('Seal Charges', '996711'),
	('Shipping Bill charges', '996719'),
	('THC', '996711'),
	('Toll Charges', '996511'),
	('VGM Charges', '996711');
/*!40000 ALTER TABLE `invoicecharge` ENABLE KEYS */;

-- Dumping structure for table exportsea.shipmentregister
DROP TABLE IF EXISTS `shipmentregister`;
CREATE TABLE IF NOT EXISTS `shipmentregister` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `docketno` varchar(20) NOT NULL,
  `docketdate` date NOT NULL,
  `clearancedate` date NOT NULL,
  `branch` varchar(20) NOT NULL,
  `fy` varchar(10) NOT NULL,
  `exportername` varchar(50) NOT NULL,
  `exporteraddress` varchar(130) NOT NULL,
  `exporterinvoice` varchar(40) NOT NULL,
  `gststatename` varchar(40) NOT NULL,
  `gststatecode` varchar(40) NOT NULL,
  `consigneename` varchar(50) NOT NULL,
  `consigneeaddress` varchar(80) NOT NULL,
  `shiplinename` varchar(50) NOT NULL,
  `shiplineaddress` varchar(80) NOT NULL,
  `overseasagentname` varchar(80) NOT NULL,
  `forwarder` varchar(50) NOT NULL,
  `notify` varchar(50) NOT NULL,
  `notifyaddress` varchar(50) NOT NULL,
  `sagent` varchar(50) NOT NULL,
  `buyer` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `shipmenttype` varchar(50) NOT NULL,
  `blno` varchar(50) NOT NULL,
  `bldate` date NOT NULL,
  `hblno` varchar(20) NOT NULL,
  `hbldate` date NOT NULL,
  `mblno` varchar(20) NOT NULL,
  `mbldate` date NOT NULL,
  `grnno` varchar(20) NOT NULL,
  `pono` varchar(20) NOT NULL,
  `lrno` varchar(20) NOT NULL,
  `lrdate` date NOT NULL,
  `shipmentterms` varchar(20) NOT NULL,
  `placeofsupply` varchar(20) NOT NULL,
  `noofpackages` varchar(20) NOT NULL,
  `units1` varchar(20) NOT NULL,
  `grossweight` float(10,2) NOT NULL,
  `units2` varchar(10) NOT NULL,
  `netweight` float(10,2) NOT NULL,
  `units3` varchar(10) NOT NULL,
  `goodsdescription` varchar(300) NOT NULL,
  `marksandnos` varchar(300) NOT NULL,
  `containertype` varchar(20) NOT NULL,
  `cbm` varchar(20) NOT NULL,
  `containersize` varchar(50) NOT NULL,
  `containerno` varchar(50) NOT NULL,
  `containerpickup` date NOT NULL,
  `handover` date NOT NULL,
  `package` varchar(20) NOT NULL,
  `weight` float(10,2) NOT NULL,
  `customseal` varchar(20) NOT NULL,
  `shipperseal` varchar(30) NOT NULL,
  `carrierseal` varchar(30) NOT NULL,
  `origincountry` varchar(30) NOT NULL,
  `originport` varchar(30) NOT NULL,
  `loadcountry` varchar(30) NOT NULL,
  `loadport` varchar(30) NOT NULL,
  `dischargecountry` varchar(30) NOT NULL,
  `dischargeport` varchar(30) NOT NULL,
  `destinationcountry` varchar(30) NOT NULL,
  `destinationport` varchar(30) NOT NULL,
  `clearanceat` varchar(30) NOT NULL,
  `terminal` varchar(30) NOT NULL,
  `vessel` varchar(50) NOT NULL,
  `voyage` varchar(50) NOT NULL,
  `eta` date NOT NULL,
  `etd` date NOT NULL,
  `stuffingdate` date NOT NULL,
  `cartingdate` date NOT NULL,
  `shed` varchar(30) NOT NULL,
  `trainno` varchar(20) NOT NULL,
  `wagonno` varchar(20) NOT NULL,
  `etarail` date NOT NULL,
  `etdrail` date NOT NULL,
  `bookingno` varchar(30) NOT NULL,
  `referenceno` varchar(30) NOT NULL,
  `chaname` varchar(30) NOT NULL,
  `sb` varchar(30) NOT NULL,
  `remarks` varchar(50) NOT NULL,
  `cocdate` date NOT NULL,
  `embassydate` date NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=latin1;

-- Dumping data for table exportsea.shipmentregister: ~59 rows (approximately)
/*!40000 ALTER TABLE `shipmentregister` DISABLE KEYS */;
INSERT INTO `shipmentregister` (`sno`, `docketno`, `docketdate`, `clearancedate`, `branch`, `fy`, `exportername`, `exporteraddress`, `exporterinvoice`, `gststatename`, `gststatecode`, `consigneename`, `consigneeaddress`, `shiplinename`, `shiplineaddress`, `overseasagentname`, `forwarder`, `notify`, `notifyaddress`, `sagent`, `buyer`, `type`, `shipmenttype`, `blno`, `bldate`, `hblno`, `hbldate`, `mblno`, `mbldate`, `grnno`, `pono`, `lrno`, `lrdate`, `shipmentterms`, `placeofsupply`, `noofpackages`, `units1`, `grossweight`, `units2`, `netweight`, `units3`, `goodsdescription`, `marksandnos`, `containertype`, `cbm`, `containersize`, `containerno`, `containerpickup`, `handover`, `package`, `weight`, `customseal`, `shipperseal`, `carrierseal`, `origincountry`, `originport`, `loadcountry`, `loadport`, `dischargecountry`, `dischargeport`, `destinationcountry`, `destinationport`, `clearanceat`, `terminal`, `vessel`, `voyage`, `eta`, `etd`, `stuffingdate`, `cartingdate`, `shed`, `trainno`, `wagonno`, `etarail`, `etdrail`, `bookingno`, `referenceno`, `chaname`, `sb`, `remarks`, `cocdate`, `embassydate`) VALUES
	(1, 'NDL/SE/1/19-20', '2019-04-02', '2019-10-22', 'New Delhi', '19-20', 'Jasleen Overseas', 'PLOT NO 164,,SEC 29 PART-2 HUDA,PANIPAT,132103,HARYANA,HARYANA,India,', '1', '', '', 'To Order,', ',,,', 'COSCO (INDIA) SHIPPING PRIVATE LIMITED', '1014-1015 HEMKUNT CHAMBERS,89, NEHRU PLACE,New Delhi,Delhi,110015,', 'SEABRIDGE, INC. HEAD OFFICE(MOJI)', '', '', '', '', '', 'FRIEGHTFORWADER', 'direct', 'insi22292', '2019-10-30', 'delfed223', '2019-10-23', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '14', 'kg', 0.00, '', 0.00, '', 'handicraft', '01 to 14', 'LCL', '', '20 st dry', 'FCIU5090270', '0000-00-00', '0000-00-00', '', 0.00, '', '', '', 'India', 'Mumbai', 'India', 'Mumbai', 'United States', 'Houston', 'United States', 'Houston', 'ICD DADRI', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00'),
	(2, 'NDL/SE/2/19-20', '2019-10-24', '0000-00-00', 'New Delhi', '19-20', '5-ELEMENTS', '16/10181 GURUDWARA ROAD,Karol Bagh,NEW DELHI,Delhi,110005,India,', '1', '', '', 'to order', ',,,,,', 'COSCO (INDIA) SHIPPING PRIVATE LIMITED', '1014-1015 HEMKUNT CHAMBERS,89, NEHRU PLACE,New Delhi,Delhi,110015,', 'SEABRIDGE, INC. HEAD OFFICE(MOJI)', '', '', '', '', '', '', '', '', '0000-00-00', 'del23959', '0000-00-00', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', 0.00, '', 0.00, '', '', '', '', '', '', 'OOCU6913076', '0000-00-00', '0000-00-00', '', 0.00, '', '', '', 'Barbados', 'Bridgetown', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00'),
	(3, 'MUM/SE/1/19-20', '2019-10-25', '0000-00-00', 'Mumbai', '19-20', 'NIDHI EXPORTS', 'D-108, UDYOG VIHAR, PHASE-V,GurgoanGURGAON,Haryana,', '', 'Haryana,', '06', 'M/s Kerala Foods Center', 'CENTER  P.O. Box,2867,Doha', 'MAERSK INDIA PVT LTD', '', 'SEAWAY LOGISTICS SOLUTIONS LLC', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', 0.00, '', 0.00, '', '', '', '', '', '20 ST DRY', 'trgks203843', '0000-00-00', '0000-00-00', '', 0.00, '', '', '', 'Algeria', 'Algiers', 'Algeria', 'Algiers', 'Angola', 'Cabinda', 'Angola', 'Cabinda', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00'),
	(4, 'NDL/SE/3/20-21', '2019-10-25', '0000-00-00', 'New Delhi', '20-21', 'A. L. PAPER HOUSE LLP', 'SHIKARPURA ROAD NEAR,TEMPO STAND SANGANER,JAIPUR,Rajasthan,302029,India', '1', 'Rajasthan,', '08', 'M/s Kerala Foods Center', 'CENTER  P.O. Box,2867Doha', 'Hapag LLoyd India Pvt. Ltd-CR', 'FIRST FLOOR, BUILDING NO-26,OKHLA INDUSTRIAL ESTATE,New Delhi,Delhi,110020India', 'SEAWAY LOGISTICS SOLUTIONS LLC', '', '', '', '', '', 'FRIEGHTFORWADER', 'customclearence', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', 0.00, '', 0.00, '', '', '', 'LCL', '', '20 ST DRY', 'HLBU2521722', '0000-00-00', '0000-00-00', '', 0.00, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '2019-10-16', '2019-10-31'),
	(5, 'MUM/SE/2/19-20', '2019-10-25', '0000-00-00', 'Mumbai', '19-20', 'B. P. IMPEX', 'F-22, SECTOR-6, NOIDA,G. B. NAGAR,Noida,Uttar Pradesh,201301,India,', '2', 'Uttar Pradesh,', '09', '', 'To order,,', 'MAERSK INDIA PVT LTD', '', '', '', '', '', '', '', '', 'customclearence', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', 0.00, '', 0.00, '', '', '', '', '', '20 ST DRY', 'fgghtjhy561', '0000-00-00', '0000-00-00', '', 0.00, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00'),
	(6, 'LDH/SE/1/19-20', '2019-10-25', '0000-00-00', 'Ludhiana', '19-20', '5-ELEMENTS', '', '2', 'Maharashtra,', '', 'ALTER EGO LIMITED', '', 'CMA CGM AGENCIES (I) PVT LTD (CR)', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', 0.00, '', 0.00, '', '', '', '', '', '20 ST DRY', 'UNIU2040816', '0000-00-00', '0000-00-00', '', 0.00, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00'),
	(7, 'NDL/SE/4/19-20', '2019-10-28', '0000-00-00', 'New Delhi', '19-20', '5-ELEMENTS', '', '3', 'Delhi,', '', 'M/s Kerala Foods Center', '', 'Hapag LLoyd India Pvt. Ltd-CR', '', 'SEABRIDGE, INC. HEAD OFFICE(MOJI)', '', '', '', '', '', 'FRIEGHTFORWADER', 'direct', '', '0000-00-00', 'del676', '2019-10-09', '', '0000-00-00', '', '', '', '0000-00-00', 'term1', 'delhi', '12', 'pkg', 1100.00, 'kg', 1200.00, 'kg', '', '', 'LCL', '', '20 ST DRY', 'HLXU1416822', '2019-10-16', '0000-00-00', '', 0.00, '', '', '', 'India', '', 'India', '', 'United States', '', 'United States', '', 'ICD TUGHLAKABAD', '', '', '', '2019-10-23', '2019-10-31', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '2019-10-24', '0000-00-00'),
	(8, 'UP/SE/1/19-20', '2019-10-28', '2019-10-30', 'Uttar Pradesh', '19-20', 'Brassy Arts International', 'Nai Sarak Kohna mughalpura,Opp Moti So,und Service,Moradaba,dUttar Pradesh,24400', '05/1920', 'Uttar Pradesh,', '09', 'Noor Al Qadisyah', 'Garment trading llcP.O Box 6888DubaiUnited Arab Emirates', 'FairFreight', 'New DelhiDelhiDelhi,', 'SEAWAY LOGISTICS SOLUTIONS LLC', 'Nepcon shipping', '', '', '', '', '', 'direct', '', '2019-10-28', 'up/27/1920', '0000-00-00', 'fflu2022009', '2019-11-02', '', '', '', '0000-00-00', '', '', '29', 'PKG', 4615.13, 'kg', 3809.17, 'kg2', '290)(two hundred ninety cartons onlyHandicraft items of brass,coper,iron,mango wood', '01 To 290', 'FCL', '19.184', '20 ST DRY', 'FFLU2002039', '2019-10-09', '2019-10-30', '', 0.00, '0047756', '', '1002153', 'India', 'tughlakabad', 'India', 'tughlakabad', 'United Arab Emirates', 'JEBEL ALI', 'United Arab Emirates', 'JEBEL ALI', 'MUNDRA', '', 'colette', '05/E', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', 'dlh0041', 'dlh0041', '', '', '', '0000-00-00', '0000-00-00'),
	(9, 'UP/SE/2/19-20', '2019-10-28', '2019-11-13', 'Uttar Pradesh', '19-20', 'S M ENTERPRISES', 'LAKRIWALAN MUGHALPURA 1ST,Near LIMA INTER COLLEGE,Moradabad,Uttar Pradesh,244001,', '05/1920', 'Uttar Pradesh,', '09', 'Noor Al Qadisyah', 'Garment trading llcP.O Box 6888DubaiUnited Arab Emirates', 'Prudential Shipping Agencies Pvt. Ltd.', 'Rz 128-129 2nd Floor,Nh-8 Mahipalpur Exten,New Delhi,Delhi,110037,India', 'NEPCON SHIPPING LLC.', '', '', '', '', '', 'FRIEGHTFORWADER', 'direct', '', '0000-00-00', 'up27/1920', '0000-00-00', 'fflmun200912', '2019-11-07', '', '', '', '0000-00-00', '', 'Uttar Pradesh', '255', 'Pkg', 3469.18, 'kg', 3809.17, 'kg', '255(Two hundred Fity five cartons Only)\r\nHandicrafted iTEMS OF BRASS IRON AND WOOD', '01 to 255', 'FCL', '10.148', '20 ST DRY', 'FFLU2002039', '2019-10-18', '2019-10-24', '', 0.00, '0047756', '', '1002153', 'India', 'Mundra', 'India', 'Mundra', 'United Arab Emirates', 'JEBEL ALI', 'United Arab Emirates', 'JEBEL ALI', 'MUNDRA', '', 'COLETTE/', '05E', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', 'DLH/0041', 'DLH/0041', '', '', '', '0000-00-00', '0000-00-00'),
	(10, 'MUM/SE/3/19-20', '2019-10-28', '2019-10-16', 'Mumbai', '19-20', 'NEERU MENTHOL PRIVATE LIMITED', '6 SALEEM MANZIL,Civil lines,Rampur,Uttar Pradesh,244901,India', 'sm/ex/1920/35', 'Maharashtra,', '27', 'To Order,,', '', 'ONE (Ocean Network Express) Line (India) Pvt Ltd', '3rd Floor A-Wing  Fulcrum, Hiranandani Business Park, Sahar Road Andheri east,Mu', 'EXPRESS AIR FREIGHT / SKYLINE OCEAN FREIGHT', '', '', '', '', '', 'FRIEGHTFORWADER', 'direct', '', '0000-00-00', 'muma/235/1920', '2019-11-07', 'oneymum29372', '2019-11-08', '', '', '', '0000-00-00', 'term1', 'mumbai', '320', 'Pkg', 9152.00, 'kg', 8000.00, 'kg', '', '', 'FCL', '', '20 ST DRY', 'TCKU3771790', '0000-00-00', '0000-00-00', '', 0.00, '', '', '', 'India', 'Nhava Sheva', 'India', 'Nhava Sheva', 'United States', 'Detroit', 'United States', 'Detroit', 'MUNDRA', '', 'CMA CGMTTIUS', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', 'SM/EX190', 'SM/EX19', '', '', '', '0000-00-00', '0000-00-00'),
	(11, 'MUM/SE/4/19-20', '2019-10-29', '2019-11-06', 'Mumbai', '19-20', 'SRF Limited', 'D-II/I GIDC PCPIR GIDC PHASE-2,TAL VAGRA VILLAGE DAHEJ,Bharuch,Gujarat,392130,India', 'mh/se/to288/1920', 'Madhya Pradesh,', '23', 'QINGDAO RITZY INTERNATIONAL CARGO TRANSP', '11F TIMES SQUARE NO. 52, HONGKONG MIDDLE ROAD ,QINGDAO, China', 'HYUNDAI MERCHANT MARINE INDIA PVT LTD -MUM', '601,VIRAJ TOWER ANDHERI-KURLA ROAD ,Mumbai,Maharashtra,40069,India', 'AERONAUTIC FREIGHT SYSTEMS INC', '', '', '', '', '', 'CONSOL', 'toothers', 'HDMUNSWB1908571', '2019-10-18', 'MUMA/272/19-20', '2019-10-16', 'HDMUNSWB1908571', '2019-10-18', '', '', '', '0000-00-00', '', 'MUMBAI', '1', 'TANK', 7560.00, 'KG', 140.00, 'KG', '1ISO SOCTANK', '', 'LCL', '', '20 ST DRY', 'AAMU7000400', '2019-10-20', '0000-00-00', '', 0.00, '', '', '', 'India', 'Nhava Sheva', 'India', 'Nhava Sheva', 'China', 'Qinhuangdao', 'China', 'Qinhuangdao', 'MUNDRA', '', 'CONTI STOCKHOLM', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', 'NSNS509681', 'NSNS509681', '', '', '', '0000-00-00', '0000-00-00'),
	(12, 'MUM/SE/5/19-20', '2019-10-29', '2019-11-01', 'Mumbai', '19-20', 'NOAH S ARK INTERNATIONAL EXPORTS', 'INFRONT OF DEEPAK CORPORATION, BEHIND AKANKSHA AUTOMOBILE DELHI ROAD,Moradabad,DElhi,244001,India', ' mh/se/to299/1920', 'Uttar Pradesh,', '09', 'GLOBEIN ELANDERS AMERICAS', '1925 SHILOH RD NW, BUILDING #1 ,KENNESAW GA 30144-6, usaUnited States', 'EMU LINES PVT LTD -MUM', '410-413 MONARCH PLAZA PLOT NO. 56 SECTOR -11,C.B.D BELAPUR NAVI MUMBAI,Mumbai,Ma', 'SEAWAY LOGISTICS SOLUTIONS LLC', '', '', '', '', '', 'CONSOL', 'to us', 'MU19S0019191', '2019-11-08', 'MUMA/283/1920', '2019-10-02', 'MU19S0019191', '2019-11-08', '', '', '', '0000-00-00', '', 'MUMBAI', '117', 'PKG', 1243.85, 'KG', 934.80, 'KG', '117 CARTONSOF HANDICRAFT  OF STAINLESS STEEL', '1 TO 117', 'FCL', '', '40 High Cube', 'MRKU2828554', '0000-00-00', '0000-00-00', '', 0.00, '', '', '', 'India', 'Nhava Sheva', 'India', 'Nhava Sheva', 'United States', 'Seattle', 'United States', 'Seattle', '', '', 'MAERKS SALETAR', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', 'NSI2015907', '', '', '', '', '0000-00-00', '0000-00-00'),
	(13, 'LDH/SE/2/19-20', '2019-10-29', '2019-11-07', 'Ludhiana', '19-20', 'STYLAM INDUSTRIES LIMITED', 'VILLAGE MANAK TABRA,NEAR RAIPUR RANI ROAD,PANCHKULA,Haryana,134204,India', '22', 'Haryana,', '06', 'GEAVES SURFACE SOLUTION', '81 HAL TWHISTLE ROAD,SOUTH,WOODHAM FERRERS ESSEX,CM3 5ZA,,U.K,United Kingdom', 'MAERSK INDIA PVT LTD', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', 0.00, '', 0.00, '', '', '', '', '', '20 ST DRY', 'PONU0025827', '0000-00-00', '0000-00-00', '', 0.00, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00'),
	(14, 'HR/SE/1/19-20', '2019-10-30', '2019-10-16', 'Haryana', '19-20', 'BRIJ HONEY PRIVATE LIMITED', 'VILLAGE TEHRA LODHA,AGRA ROAD N. H 11bharatpur,Rajasthan,321001,India', '1', 'Rajasthan,', '08', 'ODEM INTERNATIONAL INC', '3400 RUE DOUGLAS B.FLOREANI,ST LAURENT,QC,H4S 1V,Canada,,Canada', 'Msc Agency (India) Pvt. Ltd-CR.', 'CABIN NO. 20, 2ND FLOOR, MEETING POINT SCO 487-488 SEC-35C,Chandigarh,Haryana,In', 'SEAWAY LOGISTICS SOLUTIONS LLC', '', '', '', '', '', '', 'to us', '', '0000-00-00', 'HAR/254/19-20', '2019-10-23', '363IN3368601019-1', '2019-10-30', '', '', '', '0000-00-00', 'term1', 'HARYANA', '124', 'PKG', 393700.00, 'KG', 30400.00, 'KG', '', '', 'LCL', '', '20 ST DRY', 'MRKU4958737', '2019-10-23', '2019-10-16', '', 0.00, 'BOLT00739520', '', 'FJ05658897', 'India', 'Mundra', 'India', 'Mundra', 'United States', 'Philadelphia', 'United States', 'Philadelphia', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '1232MNY6', '', '', '', '', '0000-00-00', '0000-00-00'),
	(15, 'NDL/SE/5/19-20', '2019-10-30', '0000-00-00', 'New Delhi', '19-20', 'A. L. PAPER HOUSE LLP', 'SHIKARPURA ROAD NEAR,TEMPO STAND SANGANER,JAIPUR,Rajasthan,302029,India', 't0255', 'Rajasthan,', '08', 'WEBBED SPHERE INC,', '250 AMERICAN GREETING CARD ROAD,CORBIN, KENTUCKY0-40701,United States', 'COSCO (INDIA) SHIPPING PRIVATE LIMITED', '1014-1015 HEMKUNT CHAMBERS,89, NEHRU PLACE,New Delhi,Delhi,110015,', 'EXPRESS AIR FREIGHT / SKYLINE OCEAN FREIGHT', '', '', '', '', '', 'FRIEGHTFORWADER', '', '', '0000-00-00', 'dela/292/19-20', '2019-10-23', '6225715660', '2019-10-23', '', '', '', '0000-00-00', '', '', '74', 'pkg', 576.40, 'kg', 500.00, '', '', '', 'LCL', '57.05', '40 High Cube', 'csnu6101791', '0000-00-00', '0000-00-00', '', 0.00, '', '', '1156617', 'India', 'Nhava Sheva', 'India', 'Nhava Sheva', 'United States', 'NORFOLK', 'United States', 'Houston', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '622571560', '', '', '', '', '0000-00-00', '0000-00-00'),
	(16, 'NDL/SE/6/19-20', '2019-10-30', '2019-10-16', 'New Delhi', '19-20', 'PEARLCOT ENTERPRISES', 'A-33,  LOK VIHAR, Pitampura,New Delhi,110034,India', '1', 'Delhi,', '07', 'WEBBED SPHERE INC,', '250 AMERICAN GREETING CARD ROAD,CORBIN, KENTUCKY0-40701,United States', 'Msc Agency (India) Pvt. Ltd-CR.', '', 'AERONAUTIC FREIGHT SYSTEMS INC', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '12', '', 0.00, '', 0.00, '', '', '', '', '', '20 ST DRY', 'MEDU4578366', '0000-00-00', '0000-00-00', '', 0.00, '', '', '', 'India', 'Nhava Sheva', 'India', 'Nhava Sheva', 'United States', 'CINCINNATI', 'United States', 'CINCINNATI', 'ICD TUGHLAKABAD', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00'),
	(17, 'LDH/SE/3/19-20', '2019-10-30', '0000-00-00', 'Ludhiana', '19-20', 'STYLAM INDUSTRIES LIMITED', 'VILLAGE MANAK TABRA,NEAR RAIPUR RANI ROAD,PANCHKULA,Haryana,134204,India', '34', 'Haryana,', '06', 'SWEET HOLDINGS LLC', '15100 BUSINESS PARKAWAY ROSEMOUNT ,MN 55068 651 322 1745,', 'EMU LINES PVT LTD -MUM', '410-413 MONARCH PLAZA PLOT NO. 56 SECTOR -11,C.B.D BELAPUR NAVI MUMBAI,Mumbai,Ma', 'SEABRIDGE, INC. HEAD OFFICE(MOJI)', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', 0.00, '', 0.00, '', '', '', '', '', '20 ST DRY', 'dfgrgrrgr45', '0000-00-00', '0000-00-00', '', 0.00, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00'),
	(18, 'LDH/SE/4/19-20', '2019-10-30', '0000-00-00', 'Ludhiana', '19-20', 'QUEENBEE FOODS PVT.LTD.', 'A-36 IInd FLOOR,LOK VIHAR  PitampuraNew DelhiDelhi,110034,India', 'xxss', '', '', 'WEBBED SPHERE INC,', '250 AMERICAN GREETING CARD ROAD,CORBIN, KENTUCKY0-40701,United States', 'EMU LINES PVT LTD -MUM', '410-413 MONARCH PLAZA PLOT NO. 56 SECTOR -11,C.B.D BELAPUR NAVI MUMBAI,Mumbai,Ma', 'SEABRIDGE, INC. HEAD OFFICE(MOJI)', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '12', '', 0.00, '', 0.00, '', '', '', '', '', '20 ST DRY', 'cdcdcfe4r4r', '0000-00-00', '0000-00-00', '', 0.00, '', '', '', 'India', 'Mundra', 'India', 'Mundra', 'Belize', 'Belize City', 'Benin', 'Cotonou', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00'),
	(19, 'UP/SE/3/20-21', '2019-10-30', '0000-00-00', 'Uttar Pradesh', '20-21', 'NOAH S ARK INTERNATIONAL EXPORTS', 'INFRONT OF DEEPAK CORPORATION, BEHIND AKANKSHA AUTOMOBILE DELHI ROAD,Moradabad,244001India', 'btht', 'Uttar Pradesh,', '09', 'To Order', '', 'MAERSK INDIA PVT LTD', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', 0.00, '', 0.00, '', '', '', '', '', '20 ST DRY', 'tegu4857564', '0000-00-00', '0000-00-00', '', 0.00, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00'),
	(20, 'UP/SE/4/20-21', '2019-10-30', '0000-00-00', 'Uttar Pradesh', '20-21', 'TAPOVAN IMPEX PVT. LTD', '9/31-32 GROUND FLOOR,SUBHASH NAGAR,New Delhi,Delhi,110027,India', 'aaa', 'Delhi,', '07', 'To Order', '', 'MAERSK INDIA PVT LTD', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', 0.00, '', 0.00, '', '', '', '', '', '40 Reefer', 'rtwrkeneini', '0000-00-00', '0000-00-00', '', 0.00, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00'),
	(21, 'HR/SE/2/19-20', '2019-11-01', '0000-00-00', 'Haryana', '19-20', 'QUEENBEE FOODS PVT.LTD.', 'A-36 IInd FLOOR,LOK VIHAR  PitampuraNew DelhiDelhi,110034,India', '34', 'Delhi,', '07', 'SWEET HOLDINGS LLC', '15100 BUSINESS PARKAWAY ROSEMOUNT ,MN 55068 651 322 1745,', 'MAERSK INDIA PVT LTD (D.L)', '', 'NEPCON SHIPPING LLC.', '', '', '', '', '', '', '', '', '0000-00-00', '3333', '0000-00-00', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', 0.00, '', 0.00, '', '', '', '', '', '20 ST DRY', 'dkbg4040400', '0000-00-00', '0000-00-00', '', 0.00, '', '', '', 'India', 'Bombay (Mumbai)', 'India', 'Bombay (Mumbai)', 'Australia', 'Cairns', 'Bahrain', 'Mina Salman', 'ICD DADRI', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00'),
	(22, 'MUM/SE/6/19-20', '2019-11-01', '0000-00-00', 'Mumbai', '19-20', 'UNIQUE FRAGRANCES', 'HALF PART OF 2ND FLOOR PLOT NO.C- 114 & C-115, MIDC  TTC IND AREA,PAWANE NAVI MUMBAI,Maharashtra,40075,India', 'DER1', 'Maharashtra,', '27', 'LES ALIMENTS NUTRIFRESH LIMITEE', '2550 RUE COHEN SAINT ,LAURENT ,QC,CA  CANADA,Canada', 'Msc Agency (India) Pvt. Ltd-CR.', 'CABIN NO. 20, 2ND FLOOR, MEETING POINT SCO 487-488 SEC-35C,Chandigarh,Haryana,In', 'AERONAUTIC FREIGHT SYSTEMS INC', '', 'NUTRIFRESH FOODS INC', '2550,COHEN,SAINT LAURENT QUEBEC', '', '', '', '', '', '0000-00-00', 'MUMA/310/19-20', '2019-11-12', '363IN3147191019', '2019-11-20', '', '', '', '0000-00-00', 'term1', 'MUMBAI', '761', 'PKG', 8582.12, 'KG', 7900.28, 'KG', 'FOODSTUFF and other general items', '01 to 761', 'FCL', '', '20 ST DRY', 'MSDU7125735', '2019-11-14', '0000-00-00', '', 0.00, 'ITEK01084877', '', 'FJ05431029', 'India', 'Nhava Sheva', 'India', 'Nhava Sheva', 'Canada', 'Montreal', 'Canada', 'Montreal', 'ICD DADRI', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '363IN3147191019-1', '363IN3147191019-1', '', '', '', '0000-00-00', '0000-00-00'),
	(23, 'HR/SE/3/19-20', '2019-11-01', '0000-00-00', 'Haryana', '19-20', 'PARLE PRODUCTS PVT. LIMITED', 'NORTH LEVEL, CROSSING,VILE PARLE EAST,mumbai,Maharashtra,400057,India', 'h12', 'Maharashtra,', '27', 'PTI FOODS,', '6885  DAVAND DRIVE  MISSISSAUGA,ONTARIO, L5T 1L5,Canada', 'Hapag LLoyd India Pvt. Ltd-CR', 'FIRST FLOOR, BUILDING NO-26,OKHLA INDUSTRIAL ESTATE,New Delhi,Delhi,110020India', 'AERONAUTIC FREIGHT SYSTEMS INC', '', '', '', '', '', 'FRIEGHTFORWADER', 'direct', '', '0000-00-00', 'HAR/289/1920', '2019-11-13', 'INSOR22018273', '2019-11-06', '', '', '', '0000-00-00', 'term2', '', '43650', 'pkg', 18937.00, 'KG', 17000.00, 'KG', '3650 packs parle biscuits', '01 to 40', 'FCL', '0', '40 High Cube', 'TCNU8383658', '0000-00-00', '0000-00-00', '', 0.00, '', '', '', 'India', 'Nhava Sheva', 'India', 'Nhava Sheva', 'Canada', 'Toronto', 'Canada', 'Toronto', 'MUNDRA', '', 'api le havre', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '84425223', '', '', '', '', '0000-00-00', '0000-00-00'),
	(24, 'HR/SE/4/19-20', '2019-11-02', '0000-00-00', 'Haryana', '19-20', 'OBSON INTERNATIONAL PVT.LTD', '3 DECOR, SHASTRI NAGAR,OFF FOUR BUNGLOWS,Mumbai,Maharashtra,400053,India', 'MH/SE/TO231/1920', 'Maharashtra,', '27', 'SHAH BROTHERS IMPORTS', 'ONTARIO LST,1XB ,Canada', 'Msc Agency (India) Pvt. Ltd-CR.', 'CABIN NO. 20, 2ND FLOOR, MEETING POINT SCO 487-488 SEC-35C,Chandigarh,Haryana,In', 'AERONAUTIC FREIGHT SYSTEMS INC', '', 'shah brothers', '', '', '', 'FRIEGHTFORWADER', 'direct', '', '0000-00-00', 'HAR/311/19-20', '2019-11-01', '363IN3147481019-1', '2019-11-02', '', '', '', '0000-00-00', 'term1', 'HARYANA', '1684', 'PKG', 25362.00, 'KG', 23982.20, 'KG', 'FOOD STUFF AND PROVISIONS', '01 TO 3684', 'FCL', '0', '40 High Cube', 'TCLU7895518', '2019-11-07', '2019-11-12', '', 0.00, '', '', 'FJ05441249', 'India', 'Nhava Sheva', 'India', 'Nhava Sheva', 'Canada', 'Montreal', 'Canada', 'Toronto', 'ICD DADRI', '', 'MSCEMMA', '/1S941R', '2019-11-13', '2019-11-16', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '363IN3147481019-1', '363IN3147481019-1', '', '', '', '0000-00-00', '0000-00-00'),
	(25, 'HR/SE/5/19-20', '2019-11-26', '2019-11-27', 'Haryana', '19-20', 'QUEENBEE FOODS PVT.LTD.', 'A-36 IInd FLOOR,LOK VIHAR  Pitampura,New Delhi,Delhi,110034,India', 'QBF-EX/1920/139', 'Delhi,', '07', 'ODEM INTERNATIONAL INC', '3400 RUE DOUGLAS B.FLOREANI,ST LAURENT,QC,H4S 1V,Canada,,Canada', 'Msc Agency (India) Pvt. Ltd-CR.', 'CABIN NO. 20, 2ND FLOOR, MEETING POINT SCO 487-488 SEC-35C,Chandigarh,Haryana,In', 'SEAWAY LOGISTICS SOLUTIONS LLC', '', 'odem International', 'c/o dhl global 850 calcon hook road,Bay-11-16 shar', '', '', 'FRIEGHTFORWADER', 'to us', 'MEDUUM896087', '2019-11-16', 'HAR/284/1920', '2019-11-16', 'MEDUUM896087', '2019-11-16', '', '', '', '0000-00-00', 'term9', 'NEW DELHI', '124', 'MS DRUMS', 39432.00, 'KG', 37200.00, 'KG', '124 MS DRUMS iNDIGINEOUS HONEY', ' iCH -509/40,01 TO 62,63TO 124 ,MS DRUMS COLOR ELA', 'FCL', '', '20 ST DRY', 'GESU2737347', '2019-11-20', '2019-11-22', '', 0.00, 'BOLT01172963', '', 'FJ07143470', 'India', 'Dadri', 'India', 'Mundra', 'United States', 'New York', 'United States', 'Chicago', 'ICD DADRI', '', 'MSCBILBAO/', 'IU946A', '2019-11-30', '2019-11-24', '2019-11-25', '2019-11-26', '', '', '', '0000-00-00', '0000-00-00', '363IN3486471119-1', '363IN3486471119-1', '', '', '', '0000-00-00', '0000-00-00'),
	(26, 'HR/SE/6/19-20', '2019-11-30', '2019-12-27', 'Haryana', '19-20', 'Pachranga Foods', 'C-3,Industrial Area,Panipat,Haryana,1321003India,', 'pf001', 'Haryana,', '06', 'To Order', '', 'Evergreen India Pvt.Ltd. (Cr)', '8 L.S.C. Okhla Industrial Area,Phase-Ii ,New Delhi,Delhi,110020,', 'POLE STAR SHIPPING INC', '', '', '', '', '', 'FRIEGHTFORWADER', 'customclearence', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '12', 'box', 1100.00, 'kg', 1000.00, 'kg', '', '', '', '', '20 ST DRY', 'mrkgh332010', '0000-00-00', '0000-00-00', '', 0.00, '', '', '', 'India', 'ICD SONEPAT', 'India', 'Dadri', 'United States', 'Houston', 'United States', 'Houston', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00'),
	(27, 'NDL/SE/7/19-20', '2019-12-12', '2019-12-12', 'New Delhi', '19-20', 'FRUMAR MARKETING PRIVATE LIMITED.', 'PLOT NO 241-C FIRST FLOOR NR ,VAJRAS SREE NIVASAM RAGHAVENDRA COLONY KONDAPUR,Hyderabad,Telangana,50084,India', 'fr/1', 'Telangana,', '36', 'VDYAS LLC.', '70W ETHEL ROAD UNIT 2,PISCATAWAY NJ,08854 US,United States', 'COSCO (INDIA) SHIPPING PRIVATE LIMITED', '1014-1015 HEMKUNT CHAMBERS,89, NEHRU PLACE,New Delhi,Delhi,110015,', 'SEAWAY LOGISTICS SOLUTIONS LLC', '', '', '', '', '', 'FRIEGHTFORWADER', '', '6225766220', '0000-00-00', 'MUMA/369/19-20', '0000-00-00', '6225766220', '0000-00-00', '', '', '', '0000-00-00', '', 'Telangana', '1640', 'pkg', 16653.00, 'KGS', 12512.00, 'KGS', '', '', 'FCL', '0.00', '40 High Cube', 'OOCU7129325', '0000-00-00', '0000-00-00', '1640', 999.99, '', '', '11565070', 'India', 'Nhava Sheva', 'India', 'Nhava Sheva', 'United States', 'New York', 'United States', 'New York', 'Nhava Sheva Sea', '', 'TENO', '9149', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00'),
	(28, 'NDL/SE/8/19-20', '2019-12-16', '0000-00-00', 'New Delhi', '19-20', 'DELTA EXPORTS INTERNATIONAL', '293 DHANMILL ROAD ,,CHATTARPUR PAHADI,New Delhi,Delhi,110030,India', 'DH/2019-2020/119', 'Delhi,', '07', 'The Reject Shop', '245 Racecorse Road,Kensington ,Vic 3031,Australia', 'MAERSK INDIA PVT LTD', '', '', '', '', '', '', '', 'FRIEGHTFORWADER', 'direct', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '', '', '0000-00-00', '', 'Delhi', '499', 'PKG', 4201.50, 'Kgs', 3226.21, 'Kgs', '', '', 'LCL', '', '20 ST DRY', '           ', '0000-00-00', '0000-00-00', '', 0.00, '', '', '', 'India', 'Bombay (Mumbai)', 'India', 'Bombay (Mumbai)', 'Australia', 'Brisbane', 'Australia', 'Brisbane', 'ICD TUGHLAKABAD', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00'),
	(29, 'NDL/SE/9/19-20', '2019-12-16', '0000-00-00', 'New Delhi', '19-20', 'BALAJI INDUSTRIAL CORPORATION,', 'M-3  14 SCHOOL LANE,CONNAUGHT PLACE,New Delhi,Delhi,110001,India', 'BIC/25/2019-20', 'Delhi,', '07', 'To Order', ',,,,', 'MAERSK INDIA PVT LTD', '', '', '', '', '', '', '', 'FRIEGHTFORWADER', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '', '', '0000-00-00', '', 'Delhi', '1303', 'PKg', 22000.00, 'Kg', 19564.00, 'Kg', '', '', 'LCL', '', '20 ST DRY', '           ', '0000-00-00', '0000-00-00', '', 0.00, '', '', '', 'India', 'Bombay (Mumbai)', 'India', 'Bombay (Mumbai)', 'Turkey', 'MERSIN', 'Turkey', 'MERSIN', 'ICD TUGHLAKABAD', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00'),
	(30, 'HR/SE/7/19-20', '2019-12-17', '0000-00-00', 'Haryana', '19-20', 'INDOCAN HONEY PVT LTD', 'PLOT NO.1  KAMI GANNAUR ROAD,VILLAGE KAMI ,sonepat,Haryana,131001,India', 'KM-EX/19-20/A037', 'Haryana,', '06', 'Odem International Inc.', '850 CALCON HOOK ROAD, BAY 11-16, SHARON HILL PA 19079,United States', 'Msc Agency (India) Pvt. Ltd-CR.', 'CABIN NO. 20, 2ND FLOOR, MEETING POINT SCO 487-488 SEC-35C,Chandigarh,Haryana,In', 'SEAWAY LOGISTICS SOLUTIONS LLC', '', '', '', '', '', 'FRIEGHTFORWADER', '', '363IN2751960819-1', '2019-09-12', 'HAR/161/19-20', '2019-09-12', '363IN2751960819-1', '2019-09-12', '', '', '', '0000-00-00', '', 'Haryana', '124', 'Pkg', 39432.00, 'kg', 37200.00, 'kg', '124(ONE HUNDRED TWENTY FOUR DRUMS ONLY)\r\nUNBRANDED INDIAN BEES ', '01 To 124', 'FCL', '', '20 ST DRY', 'MSCU1392258', '0000-00-00', '0000-00-00', '124', 39432.00, 'BOLT00855936', '', 'FJ05454896', 'India', 'Mundra', 'India', 'Mundra', 'United States', 'Philadelphia', 'United States', 'Philadelphia', 'ICD SONEPAT', '', 'MSC Ruby', 'IS936R', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00'),
	(31, 'MUM/SE/7/19-20', '2019-12-18', '0000-00-00', 'Mumbai', '19-20', 'AURRA INTERNATIONAL', 'DESH BANDHU GUPTA MARG,DES RAJ COLONY,Haryana,Haryana,132103,India,', 'AI-234', 'Haryana,', '06', 'VERSOVA INC.', '6800 REXWOOD ROAD,MISSISSAUGA,Ontanrio,Canada', 'Msc Agency (India) Pvt. Ltd-CR.', '', 'SEAWAY LOGISTICS SOLUTIONS LLC', '', '', '', '', '', 'FRIEGHTFORWADER', '', 'meduin251663', '2019-05-26', '', '0000-00-00', 'meduin251663', '2019-05-26', '', '', '', '0000-00-00', '', '', '905', 'PKG', 13622.50, 'Kg', 13171.00, 'Kg', '', '', 'LCL', '', '20 ST DRY', '           ', '0000-00-00', '0000-00-00', '', 0.00, '', '', '', 'India', 'Bombay (Mumbai)', 'India', 'Bombay (Mumbai)', 'Italy', 'Palermo', 'Italy', 'Palermo', 'Nhava Sheva Sea', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00'),
	(32, 'NDL/SE/8/19-20', '2019-12-20', '0000-00-00', 'New Delhi', '19-20', 'Rural Craft and Creation', 'C-62,DHARAM NARAYAN JI KA HATHA PAOTA ,Jodhpur,Rajasthan,342006,India,', 'rc1', 'Rajasthan,', '08', 'Homegoods', '770 Cochituate Road,,route # 500-a2 Framingham,01701,United States', 'MAERSK INDIA PVT LTD', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '145', 'PKG', 8237.79, 'kg', 7488.90, 'Kg', '', '', 'FCL', '', '20 ST DRY', '           ', '0000-00-00', '0000-00-00', '', 0.00, '', '', '', 'India', 'Mundra', 'India', 'Mundra', 'United States', 'Los Angeles', 'United States', 'Los Angles', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00'),
	(33, 'NDL/SE/9/19-20', '2019-12-20', '0000-00-00', 'New Delhi', '19-20', 'ENGRAVE ENGINEERING', 'PLOT NO. 05 SECTOR II, I.I.E. SIDCUL. HARIDWAR,\r\nUttarakhand,249403,,India,', '1819-00052', 'Uttarakhand,', '05', 'To Order', ',,,,', 'Greenwich Meridian Logistics ( India ) Pvt. Ltd-Cr', '1007 K M TRADE TOWER,HOTEL RADISSON BLU,11th FLOOR KAUSHAMBI,Ghaziabad,Uttar Pra', '', '', '', '', '', '', 'FRIEGHTFORWADER', '', '15719000593', '0000-00-00', '', '0000-00-00', '15719000593', '0000-00-00', '', '', '', '0000-00-00', '', '', '7', 'PKG', 4981.00, 'KGS', 4469.48, 'KGS', '', '', '', '', '20 ST DRY', '           ', '0000-00-00', '0000-00-00', '', 0.00, '', '', '', 'India', 'Bombay (Mumbai)', 'India', 'Bombay (Mumbai)', 'Qatar', 'Doha', 'Qatar', 'Doha', 'Tughlakabad', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00'),
	(34, 'NDL/SE/10/19-20', '2019-12-20', '0000-00-00', 'New Delhi', '19-20', 'PEARLCOT ENTERPRISES', 'A-33  LOK VIHAR, Pitampura,New Delhi,Delhi,110034,India,', 'PAT/EXP/G-801', 'Delhi,', '07', 'Odem International Inc.', '850 CALCON HOOK ROAD, BAY 11-16, SHARON HILL PA 19079,United States', 'SAFMARINE INDIA PVT LTD(DL)', 'Max House, Block-A, 2nd Floor, 1 Dr. Jha Marg,Opp. Modi Flour Mill, Okhla Indl. ', 'AMRIT SEAIR EXPRESS PVT LTD USA AIR', '', '', '', '', '', 'FRIEGHTFORWADER', '', '711810072', '0000-00-00', 'DEL/4/19-20', '0000-00-00', '711810072', '0000-00-00', '', '', '', '0000-00-00', '', '', '124', 'PKG', 39432.00, 'KGS', 37200.00, 'KGS', '', '', 'LCL', '', '20 ST DRY', 'SUDU1895050', '0000-00-00', '0000-00-00', '124', 39432.00, '', '', '', 'India', 'PIPAVAV', 'India', 'PIPAVAV', 'United States', 'NEWARK', 'United States', 'Chicago', '', '', 'MAERSK SENTOSA', '914W', '2019-04-09', '2019-04-13', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00'),
	(35, 'NDL/SE/11/19-20', '2019-12-20', '0000-00-00', 'New Delhi', '19-20', 'MARICO LIMITED', '7TH FLOOR GRANDE PALLADIUM, 175  CST ROAD KALINA  SANTACRUZ (E) ,MUMBAI,Maharashtra,400098, India,', 'MIL/18-19/33097', 'Maharashtra,', '27', 'To Order', ',,,,', 'CMA CGM AGENCIES (I) PVT LTD (CR)', '', 'AMRIT SEAIR EXPRESS PVT.LTD', '', '', '', '', '', 'FRIEGHTFORWADER', 'direct', 'CSN0148374', '0000-00-00', '                    ', '0000-00-00', 'CSN0148374', '0000-00-00', '', '', '', '0000-00-00', '', 'Maharashtra', '226', 'PKG', 44475.69, 'KGS', 3865.42, 'KGS', '', '', 'LCL', '25', '20 ST DRY', 'UETU2636626', '0000-00-00', '0000-00-00', '226', 4476.00, '', 'G5192492', '', 'India', 'Bombay (Mumbai)', 'India', 'Bombay (Mumbai)', 'Kazakhstan', '', 'Kazakhstan', '', '', '', 'SARAYU', '067N/S', '2019-04-19', '2019-12-05', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00'),
	(36, 'NDL/SE/12/19-20', '2019-12-20', '0000-00-00', 'New Delhi', '19-20', 'SMS ENGINEERS AND CONSULTANTS', 'C-905 RAJHANS APARTMENT OPP. AXIS,BANK AHINSA KHAND INDIRAPURAM,Ghaziabad,Uttar Pradesh,201010,India,', 'SMS/2019-20/EX/01', 'Uttar Pradesh,', '09', 'To Order', ',,,,', 'MAERSK INDIA PVT LTD', '', '', '', '', '', '', '', '', '', ' INKN1860294', '0000-00-00', '', '0000-00-00', ' INKN1860294', '0000-00-00', '', '', '', '0000-00-00', '', '', '24', 'PKG', 4387.00, 'KGS', 4310.00, 'KGS', '', '', '', '', '20 ST DRY', '           ', '0000-00-00', '0000-00-00', '', 0.00, '', '', '', 'India', 'Bombay (Mumbai)', 'India', 'Bombay (Mumbai)', 'Pakistan', 'Karachi', 'Pakistan', 'Karachi', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00'),
	(37, 'NDL/SE/13/19-20', '2019-07-23', '0000-00-00', 'New Delhi', '19-20', 'BHARAT OVERSEAS IND', 'KH NO 653, GF BRIJWASAN SEC-23 ROAd,New Delhi,Delhi.110061,India', '075/2018-2019', 'Delhi', '07', 'GULATI INTERNATIONAL', '122 CHARLES STREET, SOMEREST, N J 08873,United States', 'ONE (Ocean Network Express) Line (India) Pvt Ltd', '', 'AMRIT SEAIR EXPRESS PVT.LTD', '', '', '', '', '', '', '', 'DELV14529900', '0000-00-00', 'DEL/10/19-20', '0000-00-00', 'DELV14529900', '0000-00-00', '', '', '', '0000-00-00', '', '', '56', 'PKG', 16500.00, 'KGS', 15500.00, 'KGS', '', '', 'LCL', '0', '40 High Cube', 'KKFU7580866', '0000-00-00', '0000-00-00', '56', 16500.00, '460852', '', 'INA055497', 'India', 'Mundra', 'India', 'Mundra', 'United States', 'New York', 'United States', 'New York', 'Tughlakabad', '', 'CMA CGM ALMAVIVA', '9115', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00'),
	(38, 'NDL/SE/14/19-20', '2019-11-20', '0000-00-00', 'New Delhi', '19-20', 'SPICE NEST', 'PLOT NO.6 RAMESHVAR INDUSTRIAL ZONE,B/H PARIN FURNITURE,,RAJKOT GONDAL HIGHWAY,VAVADI SURVEY, RAJKOT,,GUJRAT, INDIA,', '', 'Gujrat', '24', 'PTI FOODS', '885 DAVAND DRIVE,MISSISSAUGA,= ON,L5T 1L5, CANADA ,', 'Hapag Lloyd', '', 'AERONAUTIC FREIGHT SYSTEMS INC', '', '', '', '', '', '', '', '83307782', '0000-00-00', 'DEL/2/19-20', '0000-00-00', '83307782', '0000-00-00', '', '', '', '0000-00-00', '', '', '1678', 'PKG', 17115.60, 'KGS', 15102.00, 'KGS', '', '', '', '', '20 ST DRY', 'UACU4121369', '0000-00-00', '0000-00-00', '', 0.00, '', '', '', 'India', 'Mundra,', 'India', 'Mundra', 'Canada', 'Montreal', 'Canada', 'Toronto', 'Mundra', '', 'EXPRESS ATHENS', '9310W', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00'),
	(39, 'MUM/SE/7/19-20', '2019-12-21', '0000-00-00', 'Mumbai', '19-20', 'PATEL RETAIL PVT LTD', 'PLOT NO M-2, ADDITIONAL MIDC ANAND NAGAR  ,AMBARNATH,Maharashtra,421506,India,', 'PRt/1920/1', 'Maharashtra,', '27', 'SHAH BROTHERS IMPORTS', '6070 TOMKEN ROAD, MISSISSAUGA,ONTARIO L5T 1X8,Canada', 'Hapag LLoyd India Pvt. Ltd-CR', 'FIRST FLOOR, BUILDING NO-26,OKHLA INDUSTRIAL ESTATE,New Delhi,Delhi,110020India', 'AERONAUTIC FREIGHT SYSTEMS INC', '', '', '', '', '', '', '', '83321075', '0000-00-00', 'MUMA/7/19-20', '0000-00-00', '83321075', '0000-00-00', '', '', '', '0000-00-00', '', '', '839', 'PKG', 21200.00, 'KGS', 20975.00, 'KGS', '', '', '', '', '20 ST DRY', '           ', '0000-00-00', '0000-00-00', '', 0.00, '', '', '', 'India', 'Nhava Sheva', 'India', 'Nhava Sheva', 'Canada', 'Montreal', 'Canada', 'Toronto', '', '', 'EXPRESS ATHENS', '9310W', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00'),
	(40, 'HR/SE/8/19-20', '2019-12-21', '0000-00-00', 'Haryana', '19-20', 'BHARAT AGRO FOUNDRY', 'INDRI ROAD, NEAR LIBERTY CHOWK ,Karnal,Haryana,132001,India,', 'bh/1', 'Haryana,', '06', 'SING TAVORN KOLAKARN CO. Ltd', '383/62-64, VORACHAK TRADE CENTER, CAHKAPATDIPONG ROAD, POMPRAB Thailand', 'MAERSK INDIA PVT LTD', '', '', '', '', '', '', '', 'FRIEGHTFORWADER', '', 'INBK1859237', '0000-00-00', '                    ', '0000-00-00', 'INBK1859237', '0000-00-00', '', '', '', '0000-00-00', '', '', '40', 'PKG', 27460.00, 'KGS', 2700.00, 'KGS', '', '', '', '', '20 ST DRY', '           ', '0000-00-00', '0000-00-00', '', 0.00, '', '', '', 'India', 'Bombay (Mumbai)', 'India', 'Bombay (Mumbai)', 'Thailand', 'Bangkok', 'Thailand', 'Bangkok', 'Jaipur ICD', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00'),
	(41, 'UP/SE/5/19-20', '2019-12-21', '0000-00-00', 'Uttar Pradesh', '19-20', 'M/S FLAVOUR JURAK TRADERS,', 'FAIZ GUNJ,,MORADABAD.,Uttar Pradesh,244001,India,', 'mf/01', 'Uttar Pradesh,', '09', 'A.A.SALEH SULEMAN SINDI TRADING EST.', 'BABSHARIEF ,AL-SABEEL ,Jeddah,Saudi Arabia', 'MAERSK INDIA PVT LTD', '', '', 'AMRIT FREIGHT FORWARDER', '', '', '', '', '', '', 'CAD0371955', '0000-00-00', '                    ', '0000-00-00', 'CAD0371955', '0000-00-00', '', '', '', '0000-00-00', '', 'Uttar Pradesh', '', '', 0.00, '', 0.00, '', '', '', '', '', '20 ST DRY', '           ', '0000-00-00', '0000-00-00', '', 0.00, '', '', '', 'India', 'Bombay (Mumbai)', 'India', 'Bombay (Mumbai)', 'Saudi Arabia', 'Jeddah', 'Saudi Arabia', 'Jeddah', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00'),
	(42, 'NDL/SE/15/19-20', '2019-04-03', '0000-00-00', 'New Delhi', '19-20', 'Rural Craft & Creation P. Ltd.', 'C-62, DHARAM NARAYAN JI KA HATHA PAOTA ,JODHPUR,342006,RAJASTHAN,India', 'rc1', 'Rajasthan ', '08', 'HOMEGOODS INC. ', '770 COCHITUATE ROAD ,FRAMIGHAM, MA. ,U.S.A. 01701,,UNITED STATES', 'MAERSK INDIA PVT LTD', '', '', '', '', '', '', '', 'FrieghtForwarder', 'Direct', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '90', 'PKG', 7219.00, 'kg', 6562.00, 'kg', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', 6562.80, '', '', '', 'India', 'Bombay (Mumbai)', 'India', 'Bombay (Mumbai)', 'United States', 'Los Angles', 'United States', 'Los Angles', 'icd jodhpur', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00'),
	(43, 'UP/SE/6/19-20', '2020-01-09', '0000-00-00', 'Uttar Pradesh', '19-20', 'ECO ORGANICS', 'B-5/C-5 INDUSTRIAL ESTATE,AJEETPUR,RAMPUR,Uttar Pradesh,244901,India,', 'exp/53/2019-2020', 'Uttar Pradesh,', '09', 'To Order', ',,,', 'WAN HAI', '1104 -1106 DLF Tower A,District Center Jasola,New Delhi,Delhi,110025,India', 'SEAWAY LOGISTICS SOLUTIONS LLC', 'amrit seair', 'JIANGSU DAHUA PHARMACEUTICAL CO. Ltd', 'B-802, NEW CENTURY CITY GARDEN NO. 71, HUAIHAI EAS', '', '', 'FRIEGHTFORWADER', 'direct', '0679X28811', '2020-11-03', '0679X28811', '0000-00-00', '0679X28811', '0000-00-00', '', '', '', '0000-00-00', '', '', '80', 'DRUMS', 16160.00, 'KG', 14440.00, 'KG', '', '', 'FCL', '0', '20 ST DRY', 'whlu0438180', '0000-00-00', '0000-00-00', '', 0.00, '', '', '', '', '', '', '', '', '', '', '', '', '', 'wan hai 517', '049', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '0679X28811', '', '', '', '', '0000-00-00', '0000-00-00'),
	(44, 'MUM/SE/8/19-20', '2019-07-23', '0000-00-00', 'Mumbai', '19-20', 'PARLE PRODUCTS PVT. LIMITED', 'NORTH LEVEL, CROSSING,VILE PARLE,(EAST) MUMBAI-400057,INDIA,', 'par/1920', 'Maharashtra', '27', 'PTI FOODS ', '6885 DAVAND DRIVE,,MISSISSAUGA, ON,L5T 1L5, CANADA ,,,,', 'Hapag LLoyd India Pvt. Ltd-CR', 'VBC SOLITAIRE, 6th FLOOR, 47 & 49,BAZULLAH ROAD, T NAGAR,CHENNAI,600017,Tamil Na', 'AERONAUTIC FREIGHT SYSTEMS INC', 'VISHAL SHIPPING AGENCIES PVT LTD', '', '', '', '', 'FreightForwarder', 'Direct', '83320572', '0000-00-00', 'MUMA/6/19-20', '0000-00-00', '83320572', '0000-00-00', '', '', '', '0000-00-00', '', 'Maharashtra,', '3420', 'PKG', 18909.00, 'KGS', 17280.00, 'KGS', '', '', '                ', '', ' ', '', '0000-00-00', '0000-00-00', '', 0.00, '', '', '', 'India', 'Nhava Sheva', 'India', 'Nhava Sheva', 'Canada', 'Montreal', 'Canada', 'Montreal', '', '', 'EXPRESS ', '9310W', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00'),
	(45, 'MUM/SE/9/19-20', '2019-07-23', '2000-00-01', 'Mumbai', '19-20', 'GODREJ & BOYCE MFG. CO. LTD.', 'CORPORATE EXPORT DEPATMENT, PLOT NO,11 2ND FLOOR PIROJSHANGAR, VIKHROLI, MUMBAI400079,India,', 'godb/1920', 'Maharashtra', '27', 'PUYANG ZHONGWEI FINE CHEMICAL CO LTD', 'ADD NO 1 ZHENXING ROAD PUWNG INDUSTRY,PARK FANXIAN COUNTRY, PUYANG CITY HENNAN ,', 'HYUNDAI MERCHANT MARINE INDIA PVT LTD -MUM', '601,VIRAJ TOWER ANDHERI-KURLA ROAD ,MUMBAI,400069,MAHARASHTRA,India', '', '', '', '', '', '', '', '', 'NSNS498840', '0000-00-00', 'MUMA/9/19-20', '0000-00-00', 'NSNS498840', '0000-00-00', '', '', '', '0000-00-00', '', '', '1', 'PKG', 7450.00, 'KGS', 7450.00, 'KGS', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', 0.00, '', '', '', 'India', 'Nhava Sheva', 'India', 'Nhava Sheva', 'China', 'Qingdao', 'China', 'Qingdao', '', '', 'TASMAN', '024we', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00'),
	(46, 'MUM/SE/10/19-20', '2019-07-23', '2000-00-02', 'Mumbai', '19-20', 'TOJO VIKAS INTERNATIONAL PRIVATE LIMITED', 'PLOT NO.F-289-291, PHASE 1 MASURI GULAWTI ROAD,  HAPUR, GHAZIABAD 201001,Uttar Pradesh,Uttar Pradesh,India,', 'tojo/1920', 'Delhi,', '7', 'ERNESTO VENTOS S.A.', 'PASSEIG DE CAN SAGRERA, 38,POL. IND. SUD-OEST,08960 SANT JUST DESVERN,BARCELONA,', 'EMU LINES PVT LTD -MUM', '410-413 MONARCH PLAZA PLOT NO. 56 SECTOR -11,C.B.D BELAPUR NAVI MUMBAI,MUMBAI,40', '', '', '', '', '', '', '', '', 'NSNS499459', '0000-00-00', 'MUMA/10/19-20', '0000-00-00', 'MU19S0000250', '0000-00-00', '', '', '', '0000-00-00', '', '', '10', 'PKG', 265.00, 'KGS', 210.00, 'KGS', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', 0.00, '', '', '', 'India', 'Mumbai', 'India', 'Mumbai', 'Barcelona', 'Spain', 'Barcelona', 'Spain', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00'),
	(47, 'MUM/SE/12/19-20', '2019-07-23', '2000-00-03', 'Mumbai', '19-20', 'SRF Limited', 'PLOT NO. 2/1 GIDC PHASE II TAL. VAGRA ,VILL. DAHEJ, BHARUCH GUJRAT-39213 INDIA,', 'srfl/1920', 'Gujarat,', '24', 'PUYANG ZHONGWEI FINE CHEMICAL CO LTD', 'ADD NO 1 ZHENXING ROAD PUWNG INDUSTRY,PARK FANXIAN COUNTRY, PUYANG CITY HENNAN ,', 'HYUNDAI MERCHANT MARINE INDIA PVT LTD -MUM', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', 0.00, '', 0.00, '', '', '', 'SIMU7102217', '', '', '', '0000-00-00', '0000-00-00', '', 0.00, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00'),
	(48, 'MUM/SE/14/19-20', '2019-07-23', '2000-00-04', 'Mumbai', '19-20', 'MARICO LIMITED', '7th floor  Grande Palladium 175, CST Road  Kalina, Mumbai,Maharashtra,400098', 'Mar-20', 'Maharashtra', '27', 'ZEMA WAL LTD', '', 'MAERSK INDIA PVT LTD', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', 0.00, '', 0.00, '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', 0.00, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00'),
	(49, 'MUM/SE/15/19-20', '2020-01-13', '0000-00-00', 'Mumbai', '19-20', 'OBSON INTERNATIONAL PVT.LTD', '3 DECOR, SHASTRI NAGAR,OFF FOUR BUNGLOWS,Mumbai,Maharashtra,400053,India,', 'ob/15/1920', 'Maharashtra,', '27', 'To Order', ',,,', 'HYUNDAI MERCHANT MARINE INDIA PVT LTD -MUM', '601,VIRAJ TOWER ANDHERI-KURLA ROAD ,Mumbai,Maharashtra,40069,India', '', '', '', '', '', '', 'FRIEGHTFORWADER', 'customclearence', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '1927', 'PKG', 24224.00, 'KGS', 20157.45, 'KGS', '', '', '', '', '20 ST DRY', '           ', '0000-00-00', '0000-00-00', '', 0.00, '', '', '', 'India', 'Nhava Sheva', 'India', 'Nhava Sheva', 'Canada', 'Montreal', 'Canada', 'Toronto', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00'),
	(50, 'MUM/SE/16/19-20', '2019-04-09', '0000-00-00', 'Mumbai', '19-20', 'HALDIRAM FOODS INTERNATIONAL PVT.LTD.', '20 KM STONE,VILLAGE-GUMTHALA,,TAH-KAMPTEE BHANDARA ,ROAD, NAGPUR-441104 INDIA,,,,', '1847000002', 'Maharashtra,', '27', 'HATHI BRAND FOODS.', '39201 CHERRY ST, NEWARK,CA 94560, U.S.A.,,,,,,', 'EVERGREEN SHIPPING AGENCY ( I ) PVT LTD-MUM', '', 'AMRIT SEAIR EXPRESS PVT.LTD', '', '', '', '', '', '', '', '1.0095E+11', '0000-00-00', 'MUMA/13/19-20', '0000-00-00', '1.0095E+11', '0000-00-00', '', '', '', '0000-00-00', '', '', '1702', 'pkg', 14375.14, 'Kgs', 12285.61, 'Kgs', '', '', '', '0.000', '40\' REEFER', 'TRIU8981050', '0000-00-00', '0000-00-00', '', 0.00, 'KLIK10043807', '', 'EMCRZU0918', 'INDIA', 'JAWAHARLAL NEHRU (NHAVA SHEVA)', 'INDIA', 'JAWAHARLAL NEHRU (NHAVA SHEVA)', 'UNITED STATES', 'OAKLAND', 'UNITED STATES', 'OAKLAND', '', '', 'WAN HAI 509', 'E059', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00'),
	(51, 'MUM/SE/17/19-20', '2019-04-09', '0000-00-00', 'Mumbai', '19-20', 'HALDIRAM FOODS INTERNATIONAL PVT.LTD.', '20 KM STONE,VILLAGE-GUMTHALA,,TAH-KAMPTEE BHANDARA ,ROAD, NAGPUR-441104 INDIA,,,,', '1847000003', 'Maharashtra,', '27', 'HATHI BRAND FOODS.', '39201 CHERRY ST, NEWARK,CA 94560, U.S.A.,,,,,,', 'ONE (Ocean Network Express) Line (India) Pvt Ltd', '', 'AMRIT SEAIR EXPRESS PVT.LTD', '', '', '', '', '', '', '', 'NAGV00305500', '0000-00-00', 'MUMA/12/19-20', '0000-00-00', 'NAGV00305500', '0000-00-00', '', '', '', '0000-00-00', '', '', '1090', 'pkg', 10834.05, 'Kgs', 9133.00, 'Kgs', '', '', '', '0.000', '40 Standard Dry', 'KKFU1833340', '0000-00-00', '0000-00-00', '', 0.00, 'KLIK00127897', '', '47547', 'INDIA', 'JAWAHARLAL NEHRU (NHAVA SHEVA)', 'INDIA', 'JAWAHARLAL NEHRU (NHAVA SHEVA)', 'UNITED STATES', 'OAKLAND', 'UNITED STATES', 'OAKLAND', '', '', 'NYK ATLAS', '107E', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00'),
	(52, 'MUM/SE/18/19-20', '2019-04-09', '0000-00-00', 'Mumbai', '19-20', 'KOHLICO FOODS & BEVERAGES PVT.LTD.', 'UNIT NO. 1 & 2, MAHESH CHAMBERS, ,1ST FLOOR, 391 NARSI NATHA STREET, , MUMBAI 400009,Maharashtra,Maharashtra,India,', '1847000004', 'Maharashtra,', '27', 'TO ORDER', ',,,,,,', 'HAPAG LLOYD  AKTIENGESELLSCHAFT-MUM', '', 'AERONAUTIC FREIGHT SYSTEMS INC', '', '', '', '', '', '', '', '83340088', '0000-00-00', 'MUMA/14/19-20', '0000-00-00', '83340088', '0000-00-00', '', '', '', '0000-00-00', '', '', '2553', 'pkg', 22157.00, 'Kgs', 18483.76, 'Kgs', '', '', '', '0.000', '40 Standard Dry', 'HLXU5256403', '0000-00-00', '0000-00-00', '', 0.00, 'ITEK00710269', '', '2434624', 'INDIA', 'JAWAHARLAL NEHRU (NHAVA SHEVA)', 'INDIA', 'JAWAHARLAL NEHRU (NHAVA SHEVA)', 'CANADA', 'MONTREAL', 'CANADA', 'TORONTO', '', '', 'APL CHONGQING', '9311W', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00'),
	(53, 'MUM/SE/19/19-20', '2019-04-11', '0000-00-00', 'Mumbai', '19-20', 'FRUMAR MARKETING PRIVATE LIMITED.', 'PLOT NO 241-C,FIRST FLOOR,NR ,VAJRA\'S SREE NIVASAM,RAGHAVENDRA ,COLONY,KONDAPUR,HYDERABAD 500084,HYDERABAD 500084,TELENGANA,INDIA,', '1847000005', 'Telangana,', '36', 'AKSHAR SALES LLC', '4813 DAVANPORT PLACE,FREMONT,,CA, U.S.A,,,,,', 'EVERGREEN SHIPPING AGENCY ( I ) PVT LTD-MUM', '', 'AMRIT SEAIR EXPRESS PVT.LTD', '', '', '', '', '', '', '', '1.0095E+11', '0000-00-00', 'MUMA/11/19-20', '0000-00-00', '1.0095E+11', '0000-00-00', '', '', '', '0000-00-00', '', '', '1294', 'pkg', 19277.30, 'Kgs', 17527.64, 'Kgs', '', '', '', '0.000', '40 Standard Dry', 'EMCU1361772', '0000-00-00', '0000-00-00', '', 0.00, '', '', 'EMCSAH7848', 'INDIA', 'JAWAHARLAL NEHRU (NHAVA SHEVA)', 'INDIA', 'JAWAHARLAL NEHRU (NHAVA SHEVA)', 'UNITED STATES', 'OAKLAND', 'UNITED STATES', 'OAKLAND', '', '', 'ITAL MILIONE', 'E128', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00'),
	(54, 'MUM/SE/20/19-20', '2019-04-11', '0000-00-00', 'Mumbai', '19-20', 'VORKA IMPEX', 'BARWALAN ROAD, KATGHAR MORADABAD-244001 UTTAR PRADESH INDIA,EMAIL:vorkaimp@sancharnetnet.in ,,,,,', '1847000006', 'Uttar Pradesh,', '9', 'TO ORDER', ',,,,,,', 'CMA CGM AGENCIES (INDIA) PVT LTD-A/C-SA  ( MUM)', '', 'AMRIT SEAIR EXPRESS PVT.LTD', '', '', '', '', '', '', '', 'AMC0732698', '0000-00-00', 'MUMA/16/19-20', '0000-00-00', 'AMC0732698', '0000-00-00', '', '', '', '0000-00-00', '', '', '1000', '0', 4200.00, 'Kgs', 3060.00, 'Kgs', '', '', '', '32.076', '40 High Cube', 'CMAU7362808', '0000-00-00', '0000-00-00', '', 0.00, '', '', 'G6024433', 'INDIA', 'JAWAHARLAL NEHRU (NHAVA SHEVA)', 'INDIA', 'JAWAHARLAL NEHRU (NHAVA SHEVA)', 'UNITED STATES', 'NEW YORK', 'UNITED STATES', 'NEW YORK', '', '', 'CMA CGM ALMAVIVA', '0IN31W1MA', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00'),
	(55, 'HR/SE/9/19-20', '2020-01-21', '0000-00-00', 'Haryana', '19-20', 'QUEENBEE FOODS PVT.LTD.', 'A-36 IInd FLOOR,,LOK VIHAR  Pitampura,New DelhiDelhi,110034,India,', 'QBF-EX/19-20/145', 'Delhi,', '07', 'SWEET HOLDINGS LLC', '15100 BUSINESS PARKAWAY ROSEMOUNT ,MN 55068 651 322 1745,', 'HAPAG LLOYD AKTIENGESELLSCHAFT', 'C/O-Hapag Lloyd India Pvt.Ltd-FIRST FLOOR BUILDING NO-26,OKHLA INDUSTRIAL ESTATE', 'SEAWAY LOGISTICS SOLUTIONS LLC', '', 'Kuchne and Nagle', '1675  Meadow view rd ,Minnesota USA', '', '', 'FRIEGHTFORWADER', '', 'in-2939281', '0000-00-00', 'har/se/122', '2020-01-15', 'in-2939281', '2020-01-09', '', '', '', '0000-00-00', '', '', '124', 'PKG', 39432.00, 'KG', 37200.00, 'KG', 'honey drums', '01-124', 'LCL', '0', '20 ST DRY', 'hapg0284718', '0000-00-00', '0000-00-00', '124', 37200.00, '', '', '', 'India', 'Nhava Sheva', 'India', 'Nhava Sheva', 'United States', 'Charleston', 'United States', 'New York', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00'),
	(56, 'HR/SE/10/19-20', '2020-01-31', '0000-00-00', 'Haryana', '19-20', 'BRIJ HONEY PRIVATE LIMITED', 'VILLAGE TEHRA LODHA,AGRA ROAD N. H 11bharatpur,Rajasthan,321001,India,', 'BHP EX 38', 'Haryana,', '06', 'ODEM INTERNATIONAL INC', '3400 RUE DOUGLAS B.FLOREANI,ST LAURENT,QC,H4S 1V,Canada,,Canada', 'Msc Agency (India) Pvt. Ltd-CR.', 'CABIN NO. 20, 2ND FLOOR, MEETING POINT SCO 487-488 SEC-35C,Chandigarh,Haryana,In', '', '', '', '', '', '', 'FRIEGHTFORWADER', 'direct', '363IN2054520619-1', '0000-00-00', 'HAR/87/19-20', '2019-06-26', '363IN2054520619-1', '0000-00-00', '', '', '', '0000-00-00', '', '', '124', 'PKG', 39370.00, 'KGS', 37200.00, 'KGS', '', '', 'LCL', '0', '20 ST DRY', 'CARU3816357', '2019-06-26', '0000-00-00', '124', 37200.00, 'BOLT00839421', '', 'FJ05547870', 'India', 'Mundra', 'India', 'Mundra', 'United States', 'Philadelphia', 'United States', 'Philadelphia', 'ICD DADRI', '', 'MSC CRISTINA', 'IS926R', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '363IN2054520619', '134136786', '', '', '', '0000-00-00', '0000-00-00'),
	(57, 'NDL/SE/16/19-20', '2020-02-03', '0000-00-00', 'New Delhi', '19-20', 'CHAMAN LAL SETIA EXPORTS LTD.', 'KAITHAL ROAD,OPPOSITE CENTRAL SCHOOL,Karnal,Haryana,132001,India', '18817', 'Haryana,', '06', 'To Order', ',,,', 'Barwill Forbes Shipping Service Ltd', '3RD. FLOOR HIMALAYA BUILDING GEETMALA COMPLEX ,NEAR SHAH INDL. ESTATE ANDHERI (E', 'SEAWAY LOGISTICS SOLUTIONS LLC', '', '', '', '', '', '', '', '', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '', '', 0.00, '', 0.00, '', '', '', '', '', '20 ST DRY', 'mdhi2034948', '0000-00-00', '0000-00-00', '', 0.00, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '0000-00-00', '0000-00-00'),
	(58, 'LDH/SE/5/19-20', '2020-02-04', '0000-00-00', 'Ludhiana', '19-20', 'Jyoti Spinners', 'T-8, Industrial Area,Panipat,Haryana,132103,India,', 'js/12', 'Haryana,', '06', 'SPINNERS AND SPINNERS LIMITED', 'P.O.BOX NO. 46206,, NAIROBI ,,Kenya', 'CMA CGM AGENCIES (I) PVT LTD (CR)', '', 'POLE STAR SHIPPING INC', '', '', '', '', '', 'FRIEGHTFORWADER', 'direct', '938428384-43', '0000-00-00', 'ldh/se/234', '0000-00-00', '938428384-43', '0000-00-00', '', '', '', '0000-00-00', '', 'Haryana', '300', 'pkg', 0.00, '', 0.00, '', '', '', 'FCL', '0', '40 High Cube', 'TCLU3931788', '0000-00-00', '0000-00-00', '', 0.00, '', '', '', 'India', 'Mundra', 'India', 'Mundra', 'Kenya', 'Mombasa', 'Kenya', 'Mombasa', '', '', '', '', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', 'CAD0381470', 'CAD0381470', '', '', '', '0000-00-00', '0000-00-00'),
	(59, 'HR/SE/11/19-20', '2020-02-04', '2020-02-13', 'Haryana', '19-20', 'THREE ANGELS EXPORT PVT. LTD.', '1364 ,SECTOR 34 C ,Chandigarh,Haryana,160034 ,India,', 'than/1', 'Haryana,', '06', 'HOMESCAPES EUROPA LTD', 'UNITS 1 1A & 2 CORNGREAVES  TRADING ESTATE CENTRAL AVENUE,CRADLEY HEATH WEST MID', 'OOCL INDIA P LTD-DL', '304,EROS CORPORATE TOWER,NEHRU PLACENEW DELHIDELHI110019INDIA', 'AMRIT SEAIR EXPRESS PVT.LTD', '', '', '', '', '', 'FRIEGHTFORWADER', 'direct', '6210606380', '2020-02-13', 'hr/se/12', '0000-00-00', '6210606380', '2020-02-13', '', '', '', '0000-00-00', '', 'Haryana', '852', 'Pkg', 6227.90, 'Kgs', 5401.70, 'Kgs', '', '', 'LCL', '0', '40 High Cube', 'OOCU7159079', '2020-02-07', '0000-00-00', '852', 5401.70, '', '', '', 'India', 'Mundra', 'India', 'Mundra', 'United States', 'NORFOLK', 'United States', 'NORFOLK', 'Dadri,Greater Noida', '', 'MSC TOMOKO', '0EG37W1MA', '0000-00-00', '0000-00-00', '0000-00-00', '0000-00-00', '', '', '', '0000-00-00', '0000-00-00', '6210606380', '6210606380', '', '', '', '0000-00-00', '0000-00-00');
/*!40000 ALTER TABLE `shipmentregister` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

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


-- Dumping database structure for importair
DROP DATABASE IF EXISTS `importair`;
CREATE DATABASE IF NOT EXISTS `importair` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `importair`;

-- Dumping structure for table importair.branchdocket
DROP TABLE IF EXISTS `branchdocket`;
CREATE TABLE IF NOT EXISTS `branchdocket` (
  `branch` varchar(40) NOT NULL,
  `docketno` varchar(40) NOT NULL,
  PRIMARY KEY (`branch`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table importair.branchdocket: ~5 rows (approximately)
/*!40000 ALTER TABLE `branchdocket` DISABLE KEYS */;
INSERT INTO `branchdocket` (`branch`, `docketno`) VALUES
	('Haryana', '1'),
	('Ludhiana', '1'),
	('Mumbai', '1'),
	('New Delhi', '3'),
	('Uttar Pradesh', '1');
/*!40000 ALTER TABLE `branchdocket` ENABLE KEYS */;

-- Dumping structure for table importair.edijob
DROP TABLE IF EXISTS `edijob`;
CREATE TABLE IF NOT EXISTS `edijob` (
  `branch` varchar(40) NOT NULL,
  `jobno` varchar(40) NOT NULL,
  PRIMARY KEY (`branch`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table importair.edijob: ~5 rows (approximately)
/*!40000 ALTER TABLE `edijob` DISABLE KEYS */;
INSERT INTO `edijob` (`branch`, `jobno`) VALUES
	('Haryana', '0'),
	('Ludhiana', '2'),
	('Mumbai', '0'),
	('New Delhi', '2'),
	('Uttar Pradesh', '0');
/*!40000 ALTER TABLE `edijob` ENABLE KEYS */;

-- Dumping structure for procedure importair.getcat
DROP PROCEDURE IF EXISTS `getcat`;
DELIMITER //
CREATE PROCEDURE `getcat`(IN `cid` INT)
SELECT * FROM categories WHERE cat_id=cid//
DELIMITER ;

-- Dumping structure for table importair.iaedidet
DROP TABLE IF EXISTS `iaedidet`;
CREATE TABLE IF NOT EXISTS `iaedidet` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `jobno` varchar(20) NOT NULL,
  `jobdate` date NOT NULL,
  `branch` varchar(40) NOT NULL,
  `fy` varchar(40) NOT NULL,
  `chaname` varchar(40) NOT NULL,
  `location` varchar(40) NOT NULL,
  `chanumber` varchar(40) NOT NULL,
  `importername` varchar(40) NOT NULL,
  `importeraddress1` varchar(40) NOT NULL,
  `importeraddress2` varchar(40) NOT NULL,
  `state` varchar(40) NOT NULL,
  `city` varchar(40) NOT NULL,
  `pin` varchar(40) NOT NULL,
  `iec` varchar(40) NOT NULL,
  `adcode` varchar(40) NOT NULL,
  `branchcode` varchar(40) NOT NULL,
  `panno` varchar(40) NOT NULL,
  `gstintype` varchar(40) NOT NULL,
  `gstin` varchar(40) NOT NULL,
  `gststatename` varchar(40) NOT NULL,
  `gststatecode` varchar(40) NOT NULL,
  `origincountry` varchar(40) NOT NULL,
  `origincountrycode` varchar(40) NOT NULL,
  `originport` varchar(40) NOT NULL,
  `originportcode` varchar(40) NOT NULL,
  `consigneecountry` varchar(40) NOT NULL,
  `consigneecountrycode` varchar(40) NOT NULL,
  `reportingport` varchar(40) NOT NULL,
  `reportingportcode` varchar(40) NOT NULL,
  `transportmode` varchar(40) NOT NULL,
  `betype` varchar(40) NOT NULL,
  `kachabe` varchar(40) NOT NULL,
  `highseasale` varchar(10) NOT NULL,
  `importertype` varchar(40) NOT NULL,
  `greenchannel` varchar(20) NOT NULL,
  `section48` varchar(20) NOT NULL,
  `firstcheck` varchar(20) NOT NULL,
  `paymode` varchar(40) NOT NULL,
  `publicsector` varchar(30) NOT NULL,
  `priorbe` varchar(30) NOT NULL,
  `igmno` varchar(20) NOT NULL,
  `igmdate` date NOT NULL,
  `igminwarddate` date NOT NULL,
  `blno` varchar(40) NOT NULL,
  `bldate` date NOT NULL,
  `hblno` varchar(40) NOT NULL,
  `hbldate` date NOT NULL,
  `noofpackages` varchar(40) NOT NULL,
  `unit` varchar(40) NOT NULL,
  `grossweight` varchar(40) NOT NULL,
  `wtunit` varchar(40) NOT NULL,
  `marksno` varchar(60) NOT NULL,
  `containerno` varchar(40) NOT NULL,
  `lclfcl` varchar(40) NOT NULL,
  `containersize` varchar(40) NOT NULL,
  `seal` varchar(40) NOT NULL,
  `truckno` varchar(40) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table importair.iaedidet: ~0 rows (approximately)
/*!40000 ALTER TABLE `iaedidet` DISABLE KEYS */;
INSERT INTO `iaedidet` (`sno`, `jobno`, `jobdate`, `branch`, `fy`, `chaname`, `location`, `chanumber`, `importername`, `importeraddress1`, `importeraddress2`, `state`, `city`, `pin`, `iec`, `adcode`, `branchcode`, `panno`, `gstintype`, `gstin`, `gststatename`, `gststatecode`, `origincountry`, `origincountrycode`, `originport`, `originportcode`, `consigneecountry`, `consigneecountrycode`, `reportingport`, `reportingportcode`, `transportmode`, `betype`, `kachabe`, `highseasale`, `importertype`, `greenchannel`, `section48`, `firstcheck`, `paymode`, `publicsector`, `priorbe`, `igmno`, `igmdate`, `igminwarddate`, `blno`, `bldate`, `hblno`, `hbldate`, `noofpackages`, `unit`, `grossweight`, `wtunit`, `marksno`, `containerno`, `lclfcl`, `containersize`, `seal`, `truckno`) VALUES
	(1, '1', '2019-10-23', 'New Delhi', '2021', 'AMRIT SEAIR EXPRESS PVT LTD.', 'ACC,New Delhi', 'AAACA6571BCH001', 'Imperial Impex', 'C-226, Focal Point, Phase Viii,', 'Chandigarh Road, Ludhiana', 'Punjab,', 'Ludhiana', '141010', '3099010359', '', '', '', 'GSTIN', '', 'Himachal Pradesh,', '02', 'Albania', 'AL', 'Algiers', 'ALG', 'Afghanistan', 'AF', 'Kabul', 'KBL', 'A', 'H', 'N', 'N', 'P', 'N', 'N', 'N', 'T', 'N', 'N', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '12', '', '120', 'kg', '', '', 'LCL', '', '', '');
/*!40000 ALTER TABLE `iaedidet` ENABLE KEYS */;

-- Dumping structure for table importair.iaediinvoice
DROP TABLE IF EXISTS `iaediinvoice`;
CREATE TABLE IF NOT EXISTS `iaediinvoice` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `jobno` varchar(40) NOT NULL,
  `branch` varchar(40) NOT NULL,
  `fy` varchar(40) NOT NULL,
  `invoicesrno` varchar(40) NOT NULL,
  `invoiceno` varchar(40) NOT NULL,
  `invoicedate` date NOT NULL,
  `invoicevalue` varchar(40) NOT NULL,
  `currencyname` varchar(40) NOT NULL,
  `exchangerate` varchar(40) NOT NULL,
  `termsofinvoice` varchar(40) NOT NULL,
  `locno` varchar(40) NOT NULL,
  `locdate` date NOT NULL,
  `suppliername` varchar(40) NOT NULL,
  `supplieraddress1` varchar(40) NOT NULL,
  `supplieraddress2` varchar(40) NOT NULL,
  `city` varchar(40) NOT NULL,
  `country` varchar(40) NOT NULL,
  `bsrelated` varchar(40) NOT NULL,
  `natureoftransaction` varchar(40) NOT NULL,
  `termsofpayment` varchar(40) NOT NULL,
  `valuationmethod` varchar(40) NOT NULL,
  `freight` varchar(40) NOT NULL,
  `insurance` varchar(40) NOT NULL,
  `agencycomm` varchar(40) NOT NULL,
  `loadingcharges` varchar(40) NOT NULL,
  `misccharges` varchar(40) NOT NULL,
  `discount` varchar(40) NOT NULL,
  `highseasale` varchar(40) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table importair.iaediinvoice: ~0 rows (approximately)
/*!40000 ALTER TABLE `iaediinvoice` DISABLE KEYS */;
INSERT INTO `iaediinvoice` (`sno`, `jobno`, `branch`, `fy`, `invoicesrno`, `invoiceno`, `invoicedate`, `invoicevalue`, `currencyname`, `exchangerate`, `termsofinvoice`, `locno`, `locdate`, `suppliername`, `supplieraddress1`, `supplieraddress2`, `city`, `country`, `bsrelated`, `natureoftransaction`, `termsofpayment`, `valuationmethod`, `freight`, `insurance`, `agencycomm`, `loadingcharges`, `misccharges`, `discount`, `highseasale`) VALUES
	(1, '1', 'New Delhi', '2021', '1', 'expair/ai/232', '2019-10-09', '12000', '', '', '', '', '0000-00-00', 'GEYSER" GROUP OF COMPANIES', 'PROSPECT AVIAKONSTRUKTOROV,', 'DOM 49, KV.165 SAINT PETERSBURG,', '197373, RUSSIA', 'United States', 'N', 'O', 'OTH', 'Rule4', '', '', '', '', '', '', '');
/*!40000 ALTER TABLE `iaediinvoice` ENABLE KEYS */;

-- Dumping structure for table importair.iaediitem
DROP TABLE IF EXISTS `iaediitem`;
CREATE TABLE IF NOT EXISTS `iaediitem` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `jobno` varchar(40) NOT NULL,
  `branch` varchar(40) NOT NULL,
  `fy` varchar(40) NOT NULL,
  `invoicesrno` varchar(40) NOT NULL,
  `invoiceno` varchar(40) NOT NULL,
  `invoicedate` varchar(40) NOT NULL,
  `itemno` varchar(40) NOT NULL,
  `ritc` varchar(40) NOT NULL,
  `goodsdescription` varchar(40) NOT NULL,
  `quantity` varchar(40) NOT NULL,
  `unit` varchar(40) NOT NULL,
  `productrate` varchar(50) NOT NULL,
  `stdpref` varchar(40) NOT NULL,
  `manufacturer` varchar(40) NOT NULL,
  `origincountry` varchar(40) NOT NULL,
  `sourcecountryname` varchar(40) NOT NULL,
  `sourcecountrycode` varchar(40) NOT NULL,
  `transitcountryname` varchar(40) NOT NULL,
  `transitcountrycode` varchar(40) NOT NULL,
  `accessedvalue` varchar(40) NOT NULL,
  `endusecode` varchar(40) NOT NULL,
  `endusedescription` varchar(40) NOT NULL,
  `svbaccessed` varchar(40) NOT NULL,
  `svbduty` varchar(40) NOT NULL,
  `accessorystatus` varchar(30) NOT NULL,
  `custnotn` varchar(30) NOT NULL,
  `custsrno` varchar(30) NOT NULL,
  `excnotn` varchar(40) NOT NULL,
  `excsrno` varchar(40) NOT NULL,
  `bcdnotn` varchar(40) NOT NULL,
  `bcdsrno` varchar(40) NOT NULL,
  `cvdnotn` varchar(40) NOT NULL,
  `cvdsrno` varchar(40) NOT NULL,
  `addcvdnotn` varchar(40) NOT NULL,
  `addcvdsrno` varchar(40) NOT NULL,
  `swsnotn` varchar(40) NOT NULL,
  `swssrno` varchar(40) NOT NULL,
  `saptanotn` varchar(40) NOT NULL,
  `saptasrno` varchar(40) NOT NULL,
  `igstrate` varchar(40) NOT NULL,
  `igstamount` varchar(40) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table importair.iaediitem: ~0 rows (approximately)
/*!40000 ALTER TABLE `iaediitem` DISABLE KEYS */;
INSERT INTO `iaediitem` (`sno`, `jobno`, `branch`, `fy`, `invoicesrno`, `invoiceno`, `invoicedate`, `itemno`, `ritc`, `goodsdescription`, `quantity`, `unit`, `productrate`, `stdpref`, `manufacturer`, `origincountry`, `sourcecountryname`, `sourcecountrycode`, `transitcountryname`, `transitcountrycode`, `accessedvalue`, `endusecode`, `endusedescription`, `svbaccessed`, `svbduty`, `accessorystatus`, `custnotn`, `custsrno`, `excnotn`, `excsrno`, `bcdnotn`, `bcdsrno`, `cvdnotn`, `cvdsrno`, `addcvdnotn`, `addcvdsrno`, `swsnotn`, `swssrno`, `saptanotn`, `saptasrno`, `igstrate`, `igstamount`) VALUES
	(1, '1', 'New Delhi', '2021', '1', 'expair/ai/232', '2019-10-09', '1', '85167910', 'des 1', '12', 'kg', '12', 'Std', 'GEYSER" GROUP OF COMPANIES', 'United States', 'United States', 'US', 'United States', 'US', '', 'DCH100', 'For Human Medical Use as a Non-Food Prod', '', '', '0', '50/2017', '110', '', '11', '', '', '', '', '', '', '', '', '', '', '', '');
/*!40000 ALTER TABLE `iaediitem` ENABLE KEYS */;

-- Dumping structure for table importair.iaedisupporting
DROP TABLE IF EXISTS `iaedisupporting`;
CREATE TABLE IF NOT EXISTS `iaedisupporting` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `jobno` varchar(40) NOT NULL,
  `branch` varchar(40) NOT NULL,
  `fy` varchar(30) NOT NULL,
  `invoicesrno` varchar(20) NOT NULL,
  `itemno` varchar(20) NOT NULL,
  `statementfor` varchar(20) NOT NULL,
  `doctypecode` varchar(20) NOT NULL,
  `chanumber` varchar(40) NOT NULL,
  `ieccode` varchar(40) NOT NULL,
  `doctype` varchar(20) NOT NULL,
  `doccode` varchar(20) NOT NULL,
  `issuedpartyname` varchar(40) NOT NULL,
  `issuedpartyaddress` varchar(40) NOT NULL,
  `drn` varchar(40) NOT NULL,
  `place` varchar(40) NOT NULL,
  `issuedate` date NOT NULL,
  `bnfpartyname` varchar(40) NOT NULL,
  `bnfpartyaddress` varchar(100) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table importair.iaedisupporting: ~0 rows (approximately)
/*!40000 ALTER TABLE `iaedisupporting` DISABLE KEYS */;
INSERT INTO `iaedisupporting` (`sno`, `jobno`, `branch`, `fy`, `invoicesrno`, `itemno`, `statementfor`, `doctypecode`, `chanumber`, `ieccode`, `doctype`, `doccode`, `issuedpartyname`, `issuedpartyaddress`, `drn`, `place`, `issuedate`, `bnfpartyname`, `bnfpartyaddress`) VALUES
	(1, '1', 'New Delhi', '2021', '1', '1', 'vv', 'ff', 'sbbgf-', 'dsdsd', 'cffff', '2019382743747', 'cmkf', 'cjcj', 'fkfkf', 'Delhi', '2019-10-24', 'bnbg', 'fgg');
/*!40000 ALTER TABLE `iaedisupporting` ENABLE KEYS */;

-- Dumping structure for table importair.iainvoicecharge
DROP TABLE IF EXISTS `iainvoicecharge`;
CREATE TABLE IF NOT EXISTS `iainvoicecharge` (
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
  `amount` float(6,2) NOT NULL,
  `discount` float(3,2) NOT NULL,
  `cgstrate` float(3,2) NOT NULL,
  `sgstrate` float(3,2) NOT NULL,
  `igstrate` float(3,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table importair.iainvoicecharge: ~0 rows (approximately)
/*!40000 ALTER TABLE `iainvoicecharge` DISABLE KEYS */;
INSERT INTO `iainvoicecharge` (`id`, `docketno`, `branch`, `fy`, `chargename`, `hsncode`, `currencyname`, `exchangerate`, `quantity`, `rate`, `amount`, `discount`, `cgstrate`, `sgstrate`, `igstrate`) VALUES
	(1, 'NDL/AI/1/20-21', 'New Delhi', '20-21', 'Toll Charges', '996511', 'USD', 71.10, 1, 1, 1209.00, 0.00, 0.09, 0.09, 0.00);
/*!40000 ALTER TABLE `iainvoicecharge` ENABLE KEYS */;

-- Dumping structure for table importair.iaserviceinvoice
DROP TABLE IF EXISTS `iaserviceinvoice`;
CREATE TABLE IF NOT EXISTS `iaserviceinvoice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `docketno` varchar(20) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `fy` varchar(20) NOT NULL,
  `billno` varchar(20) NOT NULL,
  `billdate` date NOT NULL,
  `invoiceno` varchar(20) NOT NULL,
  `invoicedate` date NOT NULL,
  `category` varchar(20) NOT NULL,
  `commodity` varchar(40) NOT NULL,
  `narration` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table importair.iaserviceinvoice: ~0 rows (approximately)
/*!40000 ALTER TABLE `iaserviceinvoice` DISABLE KEYS */;
INSERT INTO `iaserviceinvoice` (`id`, `docketno`, `branch`, `fy`, `billno`, `billdate`, `invoiceno`, `invoicedate`, `category`, `commodity`, `narration`) VALUES
	(1, 'NDL/AI/1/20-21', 'New Delhi', '20-21', 'DEL/AI/S1/20-21', '0000-00-00', '1', '2019-11-12', 'tkd', '', '');
/*!40000 ALTER TABLE `iaserviceinvoice` ENABLE KEYS */;

-- Dumping structure for table importair.invoicecharge
DROP TABLE IF EXISTS `invoicecharge`;
CREATE TABLE IF NOT EXISTS `invoicecharge` (
  `chargename` varchar(30) NOT NULL,
  `hsncode` varchar(20) NOT NULL,
  PRIMARY KEY (`chargename`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table importair.invoicecharge: ~13 rows (approximately)
/*!40000 ALTER TABLE `invoicecharge` DISABLE KEYS */;
INSERT INTO `invoicecharge` (`chargename`, `hsncode`) VALUES
	('Agency charge', '996712'),
	('B/L Charges', '996719'),
	('Carting Charges', '996719'),
	('CMC Charges', '996719'),
	('D.O Charges', '996719'),
	('Examination Charges', '996719'),
	('Ocean Freight', '996521'),
	('R.M.S Processing Charges', '996719'),
	('Seal Charges', '996711'),
	('Shipping Bill charges', '996719'),
	('THC', '996711'),
	('Toll Charges', '996511'),
	('VGM Charges', '996711');
/*!40000 ALTER TABLE `invoicecharge` ENABLE KEYS */;

-- Dumping structure for table importair.shipmentregister
DROP TABLE IF EXISTS `shipmentregister`;
CREATE TABLE IF NOT EXISTS `shipmentregister` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `docketno` varchar(20) NOT NULL,
  `docketdate` date NOT NULL,
  `clearancedate` date NOT NULL,
  `branch` varchar(20) NOT NULL,
  `fy` varchar(10) NOT NULL,
  `importername` varchar(20) NOT NULL,
  `importeraddress` varchar(80) NOT NULL,
  `importerinvoice` varchar(40) NOT NULL,
  `gststatename` varchar(40) NOT NULL,
  `gststatecode` varchar(40) NOT NULL,
  `suppliername` varchar(50) NOT NULL,
  `supplieraddress` varchar(80) NOT NULL,
  `overseasagentname` varchar(80) NOT NULL,
  `forwarder` varchar(50) NOT NULL,
  `notify` varchar(50) NOT NULL,
  `notifyaddress` varchar(50) NOT NULL,
  `sagent` varchar(50) NOT NULL,
  `seller` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `shipmenttype` varchar(50) NOT NULL,
  `hawbnature` varchar(40) NOT NULL,
  `mode` varchar(40) NOT NULL,
  `cargotype` varchar(40) NOT NULL,
  `hawbblno` varchar(20) NOT NULL,
  `hawbbldate` date NOT NULL,
  `mawbblno` varchar(20) NOT NULL,
  `mawbbldate` date NOT NULL,
  `grnno` varchar(20) NOT NULL,
  `pono` varchar(20) NOT NULL,
  `dono` varchar(20) NOT NULL,
  `dodate` date NOT NULL,
  `shipmentterms` varchar(20) NOT NULL,
  `placeofsupply` varchar(20) NOT NULL,
  `noofpackages` varchar(20) NOT NULL,
  `units1` varchar(20) NOT NULL,
  `grossweight` float(10,2) NOT NULL,
  `units2` varchar(10) NOT NULL,
  `netweight` float(10,2) NOT NULL,
  `units3` varchar(10) NOT NULL,
  `goodsdescription` varchar(50) NOT NULL,
  `marksandnos` varchar(50) NOT NULL,
  `carrierseal` varchar(30) NOT NULL,
  `origincountry` varchar(30) NOT NULL,
  `originport` varchar(30) NOT NULL,
  `destinationcountry` varchar(30) NOT NULL,
  `destinationport` varchar(30) NOT NULL,
  `clearanceat` varchar(30) NOT NULL,
  `terminal` varchar(30) NOT NULL,
  `firstcarrier` varchar(50) NOT NULL,
  `secondcarrier` varchar(40) NOT NULL,
  `eta` date NOT NULL,
  `etd` date NOT NULL,
  `igmno` varchar(40) NOT NULL,
  `igmdate` date NOT NULL,
  `bookingno` varchar(30) NOT NULL,
  `referenceno` varchar(30) NOT NULL,
  `remarks` varchar(50) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table importair.shipmentregister: ~2 rows (approximately)
/*!40000 ALTER TABLE `shipmentregister` DISABLE KEYS */;
INSERT INTO `shipmentregister` (`sno`, `docketno`, `docketdate`, `clearancedate`, `branch`, `fy`, `importername`, `importeraddress`, `importerinvoice`, `gststatename`, `gststatecode`, `suppliername`, `supplieraddress`, `overseasagentname`, `forwarder`, `notify`, `notifyaddress`, `sagent`, `seller`, `type`, `shipmenttype`, `hawbnature`, `mode`, `cargotype`, `hawbblno`, `hawbbldate`, `mawbblno`, `mawbbldate`, `grnno`, `pono`, `dono`, `dodate`, `shipmentterms`, `placeofsupply`, `noofpackages`, `units1`, `grossweight`, `units2`, `netweight`, `units3`, `goodsdescription`, `marksandnos`, `carrierseal`, `origincountry`, `originport`, `destinationcountry`, `destinationport`, `clearanceat`, `terminal`, `firstcarrier`, `secondcarrier`, `eta`, `etd`, `igmno`, `igmdate`, `bookingno`, `referenceno`, `remarks`) VALUES
	(1, 'NDL/AI/1/19-20', '2019-10-22', '0000-00-00', 'New Delhi', '19-20', 'P.k. International', '97 A/2 ,Civil,LINES,Moradabad,Uttarpradesh,244001India', '', '', '', '(1) KARINA JAMAICA LTD.', 'SHOP NO. 10, THE SHOPPES AT ROSE ST JAMES, JAMAICA', 'SEAWAY LOGISTICS SOLUTIONS LLC', '', '', '', '', '', 'House', 'Consol', 'Prepaid', 'Direct', 'General', '', '0000-00-00', '', '0000-00-00', '', '', '', '0000-00-00', 'term1', '', '12', '', 120.00, 'kg', 100.00, 'kg', '', '', '', 'United Kingdom', 'Gatwick', 'United States', 'Houston', '', '', '', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '', '', ''),
	(2, 'NDL/AI/2/19-20', '2019-11-06', '0000-00-00', 'New Delhi', '19-20', 'Imperial Impex', '', 'aq1', 'Select State', 'Select code', 'GEYSER" GROUP OF COMPANIES', '', 'NEPCON SHIPPING LLC.', '', '', '', '', '', 'House', 'Consol', 'Prepaid', 'Direct', 'General', 'del/air/1', '0000-00-00', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '34', 'pkg', 500.00, 'kg', 300.00, 'kg', '', '', '', 'Australia', '', 'India', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '', '', '');
/*!40000 ALTER TABLE `shipmentregister` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

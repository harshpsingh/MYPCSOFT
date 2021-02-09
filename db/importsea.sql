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


-- Dumping database structure for importsea
DROP DATABASE IF EXISTS `importsea`;
CREATE DATABASE IF NOT EXISTS `importsea` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `importsea`;

-- Dumping structure for table importsea.branchdocket
DROP TABLE IF EXISTS `branchdocket`;
CREATE TABLE IF NOT EXISTS `branchdocket` (
  `branch` varchar(40) NOT NULL,
  `docketno` varchar(40) NOT NULL,
  PRIMARY KEY (`branch`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table importsea.branchdocket: ~5 rows (approximately)
/*!40000 ALTER TABLE `branchdocket` DISABLE KEYS */;
INSERT INTO `branchdocket` (`branch`, `docketno`) VALUES
	('Haryana', '1'),
	('Ludhiana', '1'),
	('Mumbai', '1'),
	('New Delhi', '3'),
	('Uttar Pradesh', '1');
/*!40000 ALTER TABLE `branchdocket` ENABLE KEYS */;

-- Dumping structure for table importsea.edijob
DROP TABLE IF EXISTS `edijob`;
CREATE TABLE IF NOT EXISTS `edijob` (
  `branch` varchar(40) NOT NULL,
  `jobno` varchar(40) NOT NULL,
  PRIMARY KEY (`branch`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table importsea.edijob: ~5 rows (approximately)
/*!40000 ALTER TABLE `edijob` DISABLE KEYS */;
INSERT INTO `edijob` (`branch`, `jobno`) VALUES
	('Haryana', '0'),
	('Ludhiana', '1'),
	('Mumbai', '-1'),
	('New Delhi', '8'),
	('Uttar Pradesh', '0');
/*!40000 ALTER TABLE `edijob` ENABLE KEYS */;

-- Dumping structure for table importsea.invoicecharge
DROP TABLE IF EXISTS `invoicecharge`;
CREATE TABLE IF NOT EXISTS `invoicecharge` (
  `chargename` varchar(30) NOT NULL,
  `hsncode` varchar(20) NOT NULL,
  PRIMARY KEY (`chargename`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table importsea.invoicecharge: ~13 rows (approximately)
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

-- Dumping structure for table importsea.isedidet
DROP TABLE IF EXISTS `isedidet`;
CREATE TABLE IF NOT EXISTS `isedidet` (
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table importsea.isedidet: ~0 rows (approximately)
/*!40000 ALTER TABLE `isedidet` DISABLE KEYS */;
INSERT INTO `isedidet` (`sno`, `jobno`, `jobdate`, `branch`, `fy`, `chaname`, `location`, `chanumber`, `importername`, `importeraddress1`, `importeraddress2`, `state`, `city`, `pin`, `iec`, `adcode`, `branchcode`, `panno`, `gstintype`, `gstin`, `gststatename`, `gststatecode`, `origincountry`, `origincountrycode`, `originport`, `originportcode`, `consigneecountry`, `consigneecountrycode`, `reportingport`, `reportingportcode`, `transportmode`, `betype`, `kachabe`, `highseasale`, `importertype`, `greenchannel`, `section48`, `firstcheck`, `paymode`, `publicsector`, `priorbe`, `igmno`, `igmdate`, `igminwarddate`, `blno`, `bldate`, `hblno`, `hbldate`, `noofpackages`, `unit`, `grossweight`, `wtunit`, `marksno`, `containerno`, `lclfcl`, `containersize`, `seal`, `truckno`) VALUES
	(1, '1', '2019-10-12', 'New Delhi', '2021', 'AMRIT SEAIR EXPRESS PVT LTD.', 'Agra, ICD', 'AAACA6571BCH001', 'P.k. International', '97 A/2 Civil', 'LINES', 'Uttarpradesh', 'Moradabad', '244001', '2999001983', '4r454', '1', 'sdsdas', 'GSTIN', 'vvfve32', 'Uttar Pradesh,', '09', 'Afghanistan', 'AF', 'KABUL', 'AFKBL', 'India', 'IN', 'Dadri', 'INALP6', 'S', 'W', 'N', 'N', 'P', 'N', 'N', 'N', 'T', 'N', 'N', 'ere12', '2019-10-15', '2019-10-16', 'ddd3454', '2019-10-23', 'vfv544', '2019-10-23', '12', 'pkt', '12034', 'kg', 'as defined', 'mkdcje303', 'LCL', '40"', 'bol2443', 'mm34'),
	(2, '6', '2020-02-11', 'New Delhi', '19-20', 'AMRIT SEAIR EXPRESS PVT LTD.', '', '', 'P.k. International', '', '', '', 'Moradabad', '244001', '2999001983', '', '', '', 'GSTIN', '09AAAAP094', 'Uttar Pradesh', '', 'Azerbaijan', 'AZ', 'Baku', 'AZBAK', 'India', 'IN', 'Nhava Sheva', 'INNSA', 'S', 'W', '', '', '', '', '', '', 'T', '', '', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '');
/*!40000 ALTER TABLE `isedidet` ENABLE KEYS */;

-- Dumping structure for table importsea.isediinvoice
DROP TABLE IF EXISTS `isediinvoice`;
CREATE TABLE IF NOT EXISTS `isediinvoice` (
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table importsea.isediinvoice: ~0 rows (approximately)
/*!40000 ALTER TABLE `isediinvoice` DISABLE KEYS */;
INSERT INTO `isediinvoice` (`sno`, `jobno`, `branch`, `fy`, `invoicesrno`, `invoiceno`, `invoicedate`, `invoicevalue`, `currencyname`, `exchangerate`, `termsofinvoice`, `locno`, `locdate`, `suppliername`, `supplieraddress1`, `supplieraddress2`, `city`, `country`, `bsrelated`, `natureoftransaction`, `termsofpayment`, `valuationmethod`, `freight`, `insurance`, `agencycomm`, `loadingcharges`, `misccharges`, `discount`, `highseasale`) VALUES
	(1, '1', 'New Delhi', '2021', '1', '2019081029', '2019-10-22', '20000', 'USD', '72.80', 'FOB', '', '0000-00-00', 'GEYSER" GROUP OF COMPANIES', 'PROSPECT AVIAKONSTRUKTOROV,', 'DOM 49, KV.165 SAINT PETERSBURG,', '197373, RUSSIA', 'United States', 'N', 'O', 'OTH', 'Rule4', '390', '225', '0', '0', '0', '0', '0'),
	(2, '6', 'New Delhi', '19-20', '1', 'sd', '2020-02-06', '', '', '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
/*!40000 ALTER TABLE `isediinvoice` ENABLE KEYS */;

-- Dumping structure for table importsea.isediitem
DROP TABLE IF EXISTS `isediitem`;
CREATE TABLE IF NOT EXISTS `isediitem` (
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table importsea.isediitem: ~0 rows (approximately)
/*!40000 ALTER TABLE `isediitem` DISABLE KEYS */;
INSERT INTO `isediitem` (`sno`, `jobno`, `branch`, `fy`, `invoicesrno`, `invoiceno`, `invoicedate`, `itemno`, `ritc`, `goodsdescription`, `quantity`, `unit`, `productrate`, `stdpref`, `manufacturer`, `origincountry`, `sourcecountryname`, `sourcecountrycode`, `transitcountryname`, `transitcountrycode`, `accessedvalue`, `endusecode`, `endusedescription`, `svbaccessed`, `svbduty`, `accessorystatus`, `custnotn`, `custsrno`, `excnotn`, `excsrno`, `bcdnotn`, `bcdsrno`, `cvdnotn`, `cvdsrno`, `addcvdnotn`, `addcvdsrno`, `swsnotn`, `swssrno`, `saptanotn`, `saptasrno`, `igstrate`, `igstamount`) VALUES
	(1, '1', 'New Delhi', '2021', '1', '2019081029', '2019-10-22', '1', '85167200', 'description of item 1', '1200', 'kg', '12.5', 'Std', 'GEYSER" GROUP OF COMPANIES', 'United States', 'China', 'CN', 'China', 'CN', '12049', 'DCH100', 'For Human Medical Use as a Non-Food Prod', '0', '0', '0', '050/2017', '11', '10/2017', '9', '050/2017', '185', '', '', '', '', '', '', '', '', '', ''),
	(2, '7', 'New Delhi', '19-20', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');
/*!40000 ALTER TABLE `isediitem` ENABLE KEYS */;

-- Dumping structure for table importsea.isedisupporting
DROP TABLE IF EXISTS `isedisupporting`;
CREATE TABLE IF NOT EXISTS `isedisupporting` (
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table importsea.isedisupporting: ~0 rows (approximately)
/*!40000 ALTER TABLE `isedisupporting` DISABLE KEYS */;
/*!40000 ALTER TABLE `isedisupporting` ENABLE KEYS */;

-- Dumping structure for table importsea.isinvoicecharge
DROP TABLE IF EXISTS `isinvoicecharge`;
CREATE TABLE IF NOT EXISTS `isinvoicecharge` (
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
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table importsea.isinvoicecharge: ~2 rows (approximately)
/*!40000 ALTER TABLE `isinvoicecharge` DISABLE KEYS */;
INSERT INTO `isinvoicecharge` (`id`, `docketno`, `branch`, `fy`, `chargename`, `hsncode`, `currencyname`, `exchangerate`, `quantity`, `rate`, `amount`, `discount`, `cgstrate`, `sgstrate`, `igstrate`) VALUES
	(1, 'NDL/SI/1/20-21', 'New Delhi', '20-21', 'Agency charge', '996712', 'USD', 71.10, 1, 1, 120.00, 0.00, 0.00, 0.00, 0.18),
	(2, 'NDL/SI/1/20-21', 'New Delhi', '20-21', 'Ocean Freight', '996521', 'USD', 71.10, 1, 1, 12.00, 0.00, 0.00, 0.00, 0.00);
/*!40000 ALTER TABLE `isinvoicecharge` ENABLE KEYS */;

-- Dumping structure for table importsea.isserviceinvoice
DROP TABLE IF EXISTS `isserviceinvoice`;
CREATE TABLE IF NOT EXISTS `isserviceinvoice` (
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

-- Dumping data for table importsea.isserviceinvoice: ~0 rows (approximately)
/*!40000 ALTER TABLE `isserviceinvoice` DISABLE KEYS */;
INSERT INTO `isserviceinvoice` (`id`, `docketno`, `branch`, `fy`, `billno`, `billdate`, `invoiceno`, `invoicedate`, `category`, `commodity`, `narration`) VALUES
	(1, 'NDL/SI/1/20-21', 'New Delhi', '20-21', 'DEL/SI/S1/2021', '2019-10-09', '', '0000-00-00', '', 'iso butane', '');
/*!40000 ALTER TABLE `isserviceinvoice` ENABLE KEYS */;

-- Dumping structure for table importsea.shipmentregister
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
  `shiplinename` varchar(50) NOT NULL,
  `shiplineaddress` varchar(80) NOT NULL,
  `overseasagentname` varchar(80) NOT NULL,
  `forwarder` varchar(50) NOT NULL,
  `notify` varchar(50) NOT NULL,
  `notifyaddress` varchar(50) NOT NULL,
  `sagent` varchar(50) NOT NULL,
  `seller` varchar(50) NOT NULL,
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
  `goodsdescription` varchar(50) NOT NULL,
  `marksandnos` varchar(50) NOT NULL,
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
  `firstvessel` varchar(50) NOT NULL,
  `secondvessel` varchar(40) NOT NULL,
  `voyage` varchar(50) NOT NULL,
  `rotationno` varchar(40) NOT NULL,
  `eta` date NOT NULL,
  `etd` date NOT NULL,
  `igmno` varchar(40) NOT NULL,
  `igmdate` date NOT NULL,
  `igmgateway` varchar(40) NOT NULL,
  `igmgatewaydate` date NOT NULL,
  `inwarddate` date NOT NULL,
  `itemno` varchar(40) NOT NULL,
  `subitemno` varchar(40) NOT NULL,
  `shed` varchar(30) NOT NULL,
  `vesselcode` varchar(40) NOT NULL,
  `emptyyard` varchar(40) NOT NULL,
  `bookingno` varchar(30) NOT NULL,
  `referenceno` varchar(30) NOT NULL,
  `chaname` varchar(30) NOT NULL,
  `sb` varchar(30) NOT NULL,
  `remarks` varchar(50) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table importsea.shipmentregister: ~2 rows (approximately)
/*!40000 ALTER TABLE `shipmentregister` DISABLE KEYS */;
INSERT INTO `shipmentregister` (`sno`, `docketno`, `docketdate`, `clearancedate`, `branch`, `fy`, `importername`, `importeraddress`, `importerinvoice`, `gststatename`, `gststatecode`, `suppliername`, `supplieraddress`, `shiplinename`, `shiplineaddress`, `overseasagentname`, `forwarder`, `notify`, `notifyaddress`, `sagent`, `seller`, `type`, `shipmenttype`, `blno`, `bldate`, `hblno`, `hbldate`, `mblno`, `mbldate`, `grnno`, `pono`, `lrno`, `lrdate`, `shipmentterms`, `placeofsupply`, `noofpackages`, `units1`, `grossweight`, `units2`, `netweight`, `units3`, `goodsdescription`, `marksandnos`, `containertype`, `cbm`, `containersize`, `containerno`, `containerpickup`, `handover`, `package`, `weight`, `customseal`, `shipperseal`, `carrierseal`, `origincountry`, `originport`, `loadcountry`, `loadport`, `dischargecountry`, `dischargeport`, `destinationcountry`, `destinationport`, `clearanceat`, `terminal`, `firstvessel`, `secondvessel`, `voyage`, `rotationno`, `eta`, `etd`, `igmno`, `igmdate`, `igmgateway`, `igmgatewaydate`, `inwarddate`, `itemno`, `subitemno`, `shed`, `vesselcode`, `emptyyard`, `bookingno`, `referenceno`, `chaname`, `sb`, `remarks`) VALUES
	(1, 'NDL/SI/1/19-20', '2019-10-15', '2019-10-16', 'New Delhi', '19-20', 'P.k. International', '97 A/2 CivilL,INES,Moradabad,Uttarpradesh,244001,India', '2999001983', 'Uttar Pradesh', '09', '(1) KARINA JAMAICA LTD.', 'SHOP NO. 10, THE SHOPPES AT ROSE ST JAMES, JAMAICA', 'COSCO (INDIA) SHIPPING PRIVATE LIMITED', '1014-1015 HEMKUNT CHAMBERS,89, NEHRU PLACE,New Delhi,Delhi,110015,', 'SEABRIDGE, INC. HEAD OFFICE(MOJI)', '', '', '', '', '', '', '', 'FLR903522961', '2019-10-18', '', '0000-00-00', '', '0000-00-00', '', '', '', '0000-00-00', '', '', '2', 'PLT', 999.99, 'kgs', 0.00, '', '', '', 'FCL', '', '', '', '0000-00-00', '0000-00-00', '', 0.00, '', '', '', 'Albania', 'Berat', 'India', 'Dadri', 'India', 'Dadri', 'India', 'Dadri', 'MUNDRA', '', '', '', '', '', '2019-10-16', '0000-00-00', '', '2019-10-24', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', 'dddd'),
	(2, 'NDL/SI/2/19-20', '2019-11-05', '2019-11-13', 'New Delhi', '19-20', 'P.k. International', '97 A/2 CivilLINESMoradabadUttarpradesh244001India', '1', 'Haryana,', '06', '(1) KARINA JAMAICA LTD.', 'SHOP NO. 10, THE SHOPPES AT ROSE ST JAMES, JAMAICA', 'Hapag LLoyd India Pvt. Ltd-CR', 'FIRST FLOOR, BUILDING NO-26,OKHLA INDUSTRIAL ESTATE,New Delhi,Delhi,110020India', 'SEAWAY LOGISTICS SOLUTIONS LLC', '', '', '', '', '', 'FRIEGHTFORWADER', '', '', '0000-00-00', 'del/si/1', '2019-11-21', 'idnvbrf', '2019-11-21', '', '', '', '0000-00-00', '', 'delhi', '', '', 0.00, '', 0.00, '', '', '', '', '', '20 ST DRY', 'mrkfir78ryf', '0000-00-00', '0000-00-00', '', 0.00, '', '', '', 'India', 'Nhava Sheva', 'India', 'Nhava Sheva', 'Belgium', 'Antwerp', 'Belgium', 'Aalst', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '0000-00-00', '', '0000-00-00', '0000-00-00', '', '', '', '', '', '', '', '', '', '');
/*!40000 ALTER TABLE `shipmentregister` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

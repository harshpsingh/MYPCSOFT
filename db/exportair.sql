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


-- Dumping database structure for exportair
DROP DATABASE IF EXISTS `exportair`;
CREATE DATABASE IF NOT EXISTS `exportair` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `exportair`;

-- Dumping structure for table exportair.branchdocket
DROP TABLE IF EXISTS `branchdocket`;
CREATE TABLE IF NOT EXISTS `branchdocket` (
  `branch` varchar(40) NOT NULL,
  `docketno` varchar(40) NOT NULL,
  PRIMARY KEY (`branch`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table exportair.branchdocket: ~5 rows (approximately)
/*!40000 ALTER TABLE `branchdocket` DISABLE KEYS */;
INSERT INTO `branchdocket` (`branch`, `docketno`) VALUES
	('Haryana', '1'),
	('Ludhiana', '1'),
	('Mumbai', '2'),
	('New Delhi', '3'),
	('Uttar Pradesh', '1');
/*!40000 ALTER TABLE `branchdocket` ENABLE KEYS */;

-- Dumping structure for table exportair.eaediinvoice
DROP TABLE IF EXISTS `eaediinvoice`;
CREATE TABLE IF NOT EXISTS `eaediinvoice` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `jobno` varchar(40) NOT NULL,
  `branch` varchar(40) NOT NULL,
  `fy` varchar(40) NOT NULL,
  `invoicesrno` varchar(20) NOT NULL,
  `invoiceno` varchar(40) NOT NULL,
  `invoicedate` date NOT NULL,
  `invoicevalue` varchar(40) NOT NULL,
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
  `freightrate` varchar(40) NOT NULL,
  `freightcurrency` varchar(40) NOT NULL,
  `freightamount` varchar(40) NOT NULL,
  `insurancerate` varchar(40) NOT NULL,
  `insurancecurrency` varchar(20) NOT NULL,
  `insuranceamount` varchar(40) NOT NULL,
  `commissionrate` varchar(40) NOT NULL,
  `commissioncurrency` varchar(40) NOT NULL,
  `commissionamount` varchar(40) NOT NULL,
  `discountrate` varchar(40) NOT NULL,
  `discountcurrency` varchar(40) NOT NULL,
  `discountamount` varchar(40) NOT NULL,
  `packchgsrate` varchar(40) NOT NULL,
  `packchgscurrency` varchar(40) NOT NULL,
  `packchgsamount` varchar(30) NOT NULL,
  `otherdeductionrate` varchar(40) NOT NULL,
  `otherdeductioncurrency` varchar(40) NOT NULL,
  `otherdeductionamount` varchar(40) NOT NULL,
  `fob` varchar(40) NOT NULL,
  `fobfc` varchar(40) NOT NULL,
  `whetherthirdparty` varchar(30) NOT NULL,
  `thirdpartyname` varchar(50) NOT NULL,
  `thirdpartyaddress1` varchar(80) NOT NULL,
  `thirdpartyaddress2` varchar(80) NOT NULL,
  `thirdpartycity` varchar(50) NOT NULL,
  `thirdpartypin` varchar(30) NOT NULL,
  `thirdpartycountrysubdivision` varchar(50) NOT NULL,
  `thirdpartycountry` varchar(50) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table exportair.eaediinvoice: ~0 rows (approximately)
/*!40000 ALTER TABLE `eaediinvoice` DISABLE KEYS */;
INSERT INTO `eaediinvoice` (`sno`, `jobno`, `branch`, `fy`, `invoicesrno`, `invoiceno`, `invoicedate`, `invoicevalue`, `currencyname`, `exchangerate`, `paymentnature`, `paymentperiod`, `contractno`, `natureofcontract`, `finb`, `buyerconsignee`, `buyername`, `buyeraddress`, `freightrate`, `freightcurrency`, `freightamount`, `insurancerate`, `insurancecurrency`, `insuranceamount`, `commissionrate`, `commissioncurrency`, `commissionamount`, `discountrate`, `discountcurrency`, `discountamount`, `packchgsrate`, `packchgscurrency`, `packchgsamount`, `otherdeductionrate`, `otherdeductioncurrency`, `otherdeductionamount`, `fob`, `fobfc`, `whetherthirdparty`, `thirdpartyname`, `thirdpartyaddress1`, `thirdpartyaddress2`, `thirdpartycity`, `thirdpartypin`, `thirdpartycountrysubdivision`, `thirdpartycountry`) VALUES
	(1, '1', 'New Delhi', '2021', '1', 'exp/ae/1', '2019-10-09', '1200', 'USD', '71.10', 'DP', '2', '1', 'FOB', '', '', 'buyer ', 'adress of buyer', '0', 'USD', '12', '0', 'USD', '11', '0', 'USD', '0', '0', 'USD', '0', '0', 'USD', '0', '0', 'USD', '0', '83684.7', '1177', '', '', '', '', '', '', '', ''),
	(2, '3', 'New Delhi', '19-20', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'NO', '', '', '', '', '', '', '');
/*!40000 ALTER TABLE `eaediinvoice` ENABLE KEYS */;

-- Dumping structure for table exportair.eaediitem
DROP TABLE IF EXISTS `eaediitem`;
CREATE TABLE IF NOT EXISTS `eaediitem` (
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
  `schemedescription` varchar(40) NOT NULL,
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table exportair.eaediitem: ~0 rows (approximately)
/*!40000 ALTER TABLE `eaediitem` DISABLE KEYS */;
INSERT INTO `eaediitem` (`sno`, `jobno`, `branch`, `fy`, `invoicesrno`, `itemno`, `ritc`, `goodsdescription`, `quantity`, `unit`, `productrate`, `currencyname`, `exchangerate`, `totalvaluefc`, `fobinr`, `dbksrno`, `dbkrate`, `dbkratespec`, `dbkamount`, `schemecode`, `schemedescription`, `pmvpercentage`, `pmv`, `totalpmv`, `endusecode`, `endusedescription`, `igstpaymentstatus`, `taxablevalue`, `igstrate`, `igstamount`, `reward`, `str`, `accessory`, `cess`) VALUES
	(1, '1', 'New Delhi', '2021', '1', '1', '848999', 'dfffffrf', '2200', 'kg', '2.7', 'USD', '71.10', '5940', '34098', '097', '087', '', '', '19', 'Drawback', '110', '211.167', '464567.4', '', '', '', '', '', '', 'N', 'N', 'N', 'N');
/*!40000 ALTER TABLE `eaediitem` ENABLE KEYS */;

-- Dumping structure for table exportair.eaedisupporting
DROP TABLE IF EXISTS `eaedisupporting`;
CREATE TABLE IF NOT EXISTS `eaedisupporting` (
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table exportair.eaedisupporting: ~0 rows (approximately)
/*!40000 ALTER TABLE `eaedisupporting` DISABLE KEYS */;
INSERT INTO `eaedisupporting` (`sno`, `jobno`, `branch`, `fy`, `invoicesrno`, `itemno`, `statementfor`, `irnno`, `doctype`, `doccode`, `issuedpartyname`, `issuedpartyaddress`, `drn`, `place`, `issuedate`, `expirydate`, `bnfpartyname`, `bnfpartyaddress`) VALUES
	(1, '1', 'New Delhi', '2021', '1', '1', '', '', '', '', '', '', '', '', '0000-00-00', '0000-00-00', '', '');
/*!40000 ALTER TABLE `eaedisupporting` ENABLE KEYS */;

-- Dumping structure for table exportair.eaedithirdparty
DROP TABLE IF EXISTS `eaedithirdparty`;
CREATE TABLE IF NOT EXISTS `eaedithirdparty` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table exportair.eaedithirdparty: ~0 rows (approximately)
/*!40000 ALTER TABLE `eaedithirdparty` DISABLE KEYS */;
/*!40000 ALTER TABLE `eaedithirdparty` ENABLE KEYS */;

-- Dumping structure for table exportair.eainvoicecharge
DROP TABLE IF EXISTS `eainvoicecharge`;
CREATE TABLE IF NOT EXISTS `eainvoicecharge` (
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

-- Dumping data for table exportair.eainvoicecharge: ~0 rows (approximately)
/*!40000 ALTER TABLE `eainvoicecharge` DISABLE KEYS */;
INSERT INTO `eainvoicecharge` (`id`, `docketno`, `branch`, `fy`, `chargename`, `hsncode`, `currencyname`, `exchangerate`, `quantity`, `rate`, `amount`, `discount`, `cgstrate`, `sgstrate`, `igstrate`) VALUES
	(1, 'MUM/AE/1/20-21', 'Mumbai', '20-21', 'B/L Charges', '996719', 'USD', 71.10, 1, 1, 1200.00, 0.00, 0.09, 0.09, 0.00);
/*!40000 ALTER TABLE `eainvoicecharge` ENABLE KEYS */;

-- Dumping structure for table exportair.edijob
DROP TABLE IF EXISTS `edijob`;
CREATE TABLE IF NOT EXISTS `edijob` (
  `branch` varchar(40) NOT NULL,
  `jobno` varchar(40) NOT NULL,
  PRIMARY KEY (`branch`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table exportair.edijob: ~5 rows (approximately)
/*!40000 ALTER TABLE `edijob` DISABLE KEYS */;
INSERT INTO `edijob` (`branch`, `jobno`) VALUES
	('Haryana', '0'),
	('Ludhiana', '0'),
	('Mumbai', '0'),
	('New Delhi', '4'),
	('Uttar Pradesh', '1');
/*!40000 ALTER TABLE `edijob` ENABLE KEYS */;

-- Dumping structure for table exportair.edisb1
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table exportair.edisb1: ~0 rows (approximately)
/*!40000 ALTER TABLE `edisb1` DISABLE KEYS */;
INSERT INTO `edisb1` (`sno`, `jobno`, `jobdate`, `branch`, `fy`, `exportername`, `exporteraddress1`, `exporteraddress2`, `city`, `state`, `pin`, `gstintype`, `gstin`, `panno`, `gststate`, `gstcode`, `iec`, `branchcode`, `adcode`, `forexcode`, `ifsccode`, `exportertype`, `exporterclass`, `consigneename`, `consigneeaddress`, `consigneecountryname`, `consigneecountrycode`, `chaname`, `locationname`, `chanumber`, `stateorigin`, `dischargecountryname`, `dischargecountrycode`, `dischargeportname`, `dischargeportcode`, `destinationcountryname`, `destinationcountrycode`, `destinationportname`, `destinationportcode`, `rbiwaiverno`, `rbiwaiverdate`, `seal`, `factorystuffed`, `natureofcargo`, `sample`, `totalpackages`, `packunit`, `loosepackages`, `noofcontainers`, `grossweight`, `netweight`, `wtunit`, `packfrom`, `packto`, `packtype`, `containerno`, `containersize`, `excisesealno`, `sealdate`, `noofpacketsstuffed`, `sealtype`, `deviceid`, `doctype`, `docno`, `marksno`) VALUES
	(1, '1', '2019-10-19', 'New Delhi', '2021', 'NIDHI EXPORTS', 'D-108, UDYOG VIHAR, PHASE-V,', 'Gurgoan', 'Haryana,', 'GURGAON,', '', 'GSTIN', 'fgfgdgfgf', '1222', 'Haryana,', '06', '', '', '', '', '', 'Merchant', 'P', 'M/s Kerala Foods Center', 'CENTER  P.O. Box,2867Doha', 'Afghanistan', 'AF', 'amrit seair express', 'CusHouse JNPT', 'AAACA6571BCH003', 'Delhi,', 'United States', 'US', 'Los Angles', 'USLAX', 'United States', 'US', 'Houston', 'USHOU', '', '0000-00-00', 'bol1245', 'NO', 'C', 'NO', '12', 'kg', '0', '', '1209', '1209', 'kg', '`1', '12', '', '', '', '', '0000-00-00', '', '', '', '', '', 'I/WE UNDERTAKE TO ABIDE BY FOREIGN EXCHANGE MANAGEMENT ACT, 1999, AS AMENDED FROM TIME;TO TIME, INCLUDING REALIZATION/REPATRIATION OF FOREIGN EXCHANGE TO FROM INDIA.WE INTEND TO CLAIM; REWARDS UNDER MERCHANDISE EXPORTS FROM INDIA SCHEME (MEIS).');
/*!40000 ALTER TABLE `edisb1` ENABLE KEYS */;

-- Dumping structure for table exportair.hbldetails
DROP TABLE IF EXISTS `hbldetails`;
CREATE TABLE IF NOT EXISTS `hbldetails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `docketno` varchar(20) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `fy` varchar(20) NOT NULL,
  `freightamt` varchar(10) NOT NULL,
  `freightpayableat` varchar(30) NOT NULL,
  `shipmenttype` varchar(20) NOT NULL,
  `modeoftransport` varchar(30) NOT NULL,
  `transhipment` varchar(30) NOT NULL,
  `invoiceno` varchar(20) NOT NULL,
  `invoicedate` date NOT NULL,
  `sbno` varchar(20) NOT NULL,
  `sbdate` date NOT NULL,
  `hscode` varchar(40) NOT NULL,
  `iec` varchar(20) NOT NULL,
  `oceanthc` varchar(30) NOT NULL,
  `oceanfreight` varchar(30) NOT NULL,
  `destinationthc` varchar(30) NOT NULL,
  `inlandhaulage` varchar(30) NOT NULL,
  `destinationinlandhaulage` varchar(30) NOT NULL,
  `noofbl` varchar(10) NOT NULL,
  `placeofissue` varchar(20) NOT NULL,
  `dateofissue` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `docketno` (`docketno`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table exportair.hbldetails: ~0 rows (approximately)
/*!40000 ALTER TABLE `hbldetails` DISABLE KEYS */;
INSERT INTO `hbldetails` (`id`, `docketno`, `branch`, `fy`, `freightamt`, `freightpayableat`, `shipmenttype`, `modeoftransport`, `transhipment`, `invoiceno`, `invoicedate`, `sbno`, `sbdate`, `hscode`, `iec`, `oceanthc`, `oceanfreight`, `destinationthc`, `inlandhaulage`, `destinationinlandhaulage`, `noofbl`, `placeofissue`, `dateofissue`) VALUES
	(1, 'MUM/AE/1/20-21', 'Mumbai', '20-21', '', 'Destination', 'FCL/FCL', '', '', '', '0000-00-00', '', '0000-00-00', '', '', 'None', 'None', 'Collect', 'Collect', 'Prepaid', '3', 'mumbai', '2019-11-13');
/*!40000 ALTER TABLE `hbldetails` ENABLE KEYS */;

-- Dumping structure for table exportair.invoicecharge
DROP TABLE IF EXISTS `invoicecharge`;
CREATE TABLE IF NOT EXISTS `invoicecharge` (
  `chargename` varchar(30) NOT NULL,
  `hsncode` varchar(20) NOT NULL,
  PRIMARY KEY (`chargename`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table exportair.invoicecharge: ~13 rows (approximately)
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

-- Dumping structure for table exportair.serviceinvoice
DROP TABLE IF EXISTS `serviceinvoice`;
CREATE TABLE IF NOT EXISTS `serviceinvoice` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `docketno` varchar(20) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `fy` varchar(20) NOT NULL,
  `billno` varchar(20) NOT NULL,
  `billdate` date NOT NULL,
  `invoiceno` varchar(20) NOT NULL,
  `invoicedate` date NOT NULL,
  `category` varchar(20) NOT NULL,
  `narration` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table exportair.serviceinvoice: ~0 rows (approximately)
/*!40000 ALTER TABLE `serviceinvoice` DISABLE KEYS */;
INSERT INTO `serviceinvoice` (`id`, `docketno`, `branch`, `fy`, `billno`, `billdate`, `invoiceno`, `invoicedate`, `category`, `narration`) VALUES
	(1, 'MUM/AE/1/20-21', 'Mumbai', '20-21', 'MH/AE/S1/20-21', '2019-11-06', 'ex/mh/1', '2019-11-13', '', '');
/*!40000 ALTER TABLE `serviceinvoice` ENABLE KEYS */;

-- Dumping structure for table exportair.shipmentregister
DROP TABLE IF EXISTS `shipmentregister`;
CREATE TABLE IF NOT EXISTS `shipmentregister` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `docketno` varchar(20) NOT NULL,
  `docketdate` date NOT NULL,
  `clearancedate` date NOT NULL,
  `branch` varchar(20) NOT NULL,
  `fy` varchar(10) NOT NULL,
  `exportername` varchar(20) NOT NULL,
  `exporteraddress` varchar(80) NOT NULL,
  `exporterinvoice` varchar(40) NOT NULL,
  `gststatename` varchar(40) NOT NULL,
  `gststatecode` varchar(40) NOT NULL,
  `consigneename` varchar(50) NOT NULL,
  `consigneeaddress` varchar(80) NOT NULL,
  `overseasagentname` varchar(80) NOT NULL,
  `forwarder` varchar(50) NOT NULL,
  `notify` varchar(50) NOT NULL,
  `notifyaddress` varchar(50) NOT NULL,
  `sagent` varchar(50) NOT NULL,
  `buyer` varchar(50) NOT NULL,
  `shipmenttype` varchar(50) NOT NULL,
  `hawbblno` varchar(20) NOT NULL,
  `hawbbldate` date NOT NULL,
  `mawbblno` varchar(20) NOT NULL,
  `mawbbldate` date NOT NULL,
  `grnno` varchar(20) NOT NULL,
  `pono` varchar(20) NOT NULL,
  `shipmentterms` varchar(20) NOT NULL,
  `cargotype` varchar(40) NOT NULL,
  `noofpackages` varchar(20) NOT NULL,
  `units1` varchar(20) NOT NULL,
  `grossweight` float(10,2) NOT NULL,
  `units2` varchar(10) NOT NULL,
  `netweight` float(10,2) NOT NULL,
  `units3` varchar(10) NOT NULL,
  `goodsdescription` varchar(50) NOT NULL,
  `marksandnos` varchar(50) NOT NULL,
  `origincountry` varchar(30) NOT NULL,
  `originport` varchar(30) NOT NULL,
  `destinationcountry` varchar(30) NOT NULL,
  `destinationport` varchar(30) NOT NULL,
  `length` varchar(30) NOT NULL,
  `width` varchar(30) NOT NULL,
  `height` varchar(50) NOT NULL,
  `pkgs` varchar(50) NOT NULL,
  `dimunit` date NOT NULL,
  `bookingno` varchar(30) NOT NULL,
  `referenceno` varchar(30) NOT NULL,
  `clearanceat` varchar(40) NOT NULL,
  `placeofsupply` varchar(40) NOT NULL,
  `chaname` varchar(30) NOT NULL,
  `sb` varchar(30) NOT NULL,
  `remarks` varchar(50) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Dumping data for table exportair.shipmentregister: ~3 rows (approximately)
/*!40000 ALTER TABLE `shipmentregister` DISABLE KEYS */;
INSERT INTO `shipmentregister` (`sno`, `docketno`, `docketdate`, `clearancedate`, `branch`, `fy`, `exportername`, `exporteraddress`, `exporterinvoice`, `gststatename`, `gststatecode`, `consigneename`, `consigneeaddress`, `overseasagentname`, `forwarder`, `notify`, `notifyaddress`, `sagent`, `buyer`, `shipmenttype`, `hawbblno`, `hawbbldate`, `mawbblno`, `mawbbldate`, `grnno`, `pono`, `shipmentterms`, `cargotype`, `noofpackages`, `units1`, `grossweight`, `units2`, `netweight`, `units3`, `goodsdescription`, `marksandnos`, `origincountry`, `originport`, `destinationcountry`, `destinationport`, `length`, `width`, `height`, `pkgs`, `dimunit`, `bookingno`, `referenceno`, `clearanceat`, `placeofsupply`, `chaname`, `sb`, `remarks`) VALUES
	(1, 'NDL/AE/1/19-20', '2019-10-15', '2019-11-06', 'New Delhi', '19-20', 'B. P. IMPEX', '', '1', '', '', '', '', 'SEABRIDGE, INC. HEAD OFFICE(MOJI)', '', '', '', '', '', 'direct', '', '0000-00-00', '', '0000-00-00', '', '', 'term2', '', '12', 'PLt', 999.99, 'kg', 0.00, '', '', '', 'India', 'Delhi', 'United States', 'Houston', '', '', '', '', '0000-00-00', '', '', 'ICD DADRI', 'Delhi', '', '', ''),
	(2, 'NDL/AE/2/19-20', '2019-10-19', '0000-00-00', 'New Delhi', '19-20', 'BASANT ISPAT UDYOG P', 'c-34 ,FOUNDRY,NAGAR,AGRA,Uttar Pradesh,282006,India,', '', 'Uttar pradesh', '09', 'REVIMPORT S.A.S,', 'ESPACE POLYGONE NORD,122 RUE BEAU DE ROCHAS,6600 PERPIGNAN,France', 'SEABRIDGE, INC. HEAD OFFICE(MOJI)', '', '', '', '', '', '', 'nh5e343', '2019-10-09', 'ff3434', '2019-10-09', '', '', 'term1', '', '21', 'pkg', 10937.34, 'kg', 0.00, '', '', '', 'India', 'Delhi', 'Belgium', 'Antwerp', '', '', '', '', '0000-00-00', '', '', 'ICD DADRI', '', '', '', ''),
	(3, 'MUM/AE/1/19-20', '2019-11-06', '2019-11-13', 'Mumbai', '19-20', 'QUEENBEE FOODS PVT.L', 'A-36 IInd FLOOR,LOK VIHAR  Pitampura,New Delhi,Delhi,110034,India', '12', 'Kerala,', '32', 'LES ALIMENTS NUTRIFRESH LIMITEE', '2550 RUE COHEN SAINT ,LAURENT ,QC,CA  CANADA,Canada', 'EXPRESS AIR FREIGHT / SKYLINE OCEAN FREIGHT', '', '', '', '', '', 'to us', 'muma/1/19-20', '2019-11-14', 'isneu28skdjf-1', '2019-11-14', '', '', '', '', '234', 'pkg', 3000.00, 'kg', 2500.00, 'kg', 'description of goods is as follow', '01 to 243', 'India', 'Mumbai', 'Brazil', 'Sao Paulo', '', '', '', '', '0000-00-00', 'isneu28skdjf-1', 'isneu28skdjf-1', 'ICD MORADABAD', 'mumbai', '', '', '');
/*!40000 ALTER TABLE `shipmentregister` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;

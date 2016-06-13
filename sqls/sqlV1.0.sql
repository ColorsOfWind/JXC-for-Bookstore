-- MySQL dump 10.13  Distrib 5.6.23, for Win64 (x86_64)
--
-- Host: localhost    Database: jxc_for_book
-- ------------------------------------------------------
-- Server version	5.6.25-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `client_information`
--

DROP TABLE IF EXISTS `client_information`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `client_information` (
  `client_ID` bigint(11) NOT NULL AUTO_INCREMENT,
  `cl_Name` varchar(255) NOT NULL DEFAULT '',
  `cl_Area` varchar(255) NOT NULL DEFAULT '',
  `cl_Pinyincode` varchar(255) NOT NULL DEFAULT '',
  `cl_Brief` varchar(255) default NULL,
  `cl_Tel` bigint(20) NOT NULL DEFAULT '0',
  `cl_Contacts` varchar(255) NOT NULL DEFAULT '',
  `cl_Fax` int(11) default NULL,
  `cl_Postcode` int(11) NOT NULL DEFAULT '0',
  `cl_Address` varchar(255) NOT NULL default '',
  `cl_Bank` varchar(255) DEFAULT NULL,
  `cl_BankAccount` bigint(20) NOT NULL DEFAULT '0',
  `cl_Email` varchar(255) DEFAULT NULL,
  `cl_Note` varchar(255) DEFAULT NULL,
  `cl_Internet` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`client_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `client_information`
--

LOCK TABLES `client_information` WRITE;
/*!40000 ALTER TABLE `client_information` DISABLE KEYS */;
/*!40000 ALTER TABLE `client_information` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `diary_cash`
--

DROP TABLE IF EXISTS `diary_cash`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `diary_cash` (
  `cash_ID` bigint(20) NOT NULL,
  `cash_billID` bigint(20) NOT NULL,
  `cash_Loan` int(11) NOT NULL,
  `cash_UserID` bigint(20) NOT NULL,
  `cash_Amount` float NOT NULL,
  `cash_Date` date NOT NULL,
  PRIMARY KEY (`cash_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `diary_cash`
--

LOCK TABLES `diary_cash` WRITE;
/*!40000 ALTER TABLE `diary_cash` DISABLE KEYS */;
/*!40000 ALTER TABLE `diary_cash` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `front_sale`
--

DROP TABLE IF EXISTS `front_sale`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `front_sale` (
  `sale_ID` bigint(20) NOT NULL,
  `cl_Name` varchar(255) NOT NULL,
  `sale_userID` bigint(11) NOT NULL,
  `sale_Counter` varchar(255) NOT NULL,
  `sale_Destination` varchar(255) NOT NULL,
  `sale_Filldate` date NOT NULL,
  `sale_Dealdate` date NOT NULL,
  `sale_State` int(11) NOT NULL,
  `sale_Remarks` text NOT NULL,
  PRIMARY KEY (`sale_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `front_sale`
--

LOCK TABLES `front_sale` WRITE;
/*!40000 ALTER TABLE `front_sale` DISABLE KEYS */;
/*!40000 ALTER TABLE `front_sale` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `front_saledetail`
--

DROP TABLE IF EXISTS `front_saledetail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `front_saledetail` (
  `saledetail_ID` bigint(20) NOT NULL,
  `sale_ID` bigint(20) NOT NULL,
  `inf_Barcode` bigint(20) NOT NULL,
  `inf_Commodityprice` float NOT NULL,
  `saledetail_Discount` float NOT NULL,
  `saledetail_Price` float NOT NULL,
  `saledetail_Number` int(11) NOT NULL,
  `saledetail_Amount` float NOT NULL,
  `saledetail_Totle` float NOT NULL,
  PRIMARY KEY (`saledetail_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `front_saledetail`
--

LOCK TABLES `front_saledetail` WRITE;
/*!40000 ALTER TABLE `front_saledetail` DISABLE KEYS */;
/*!40000 ALTER TABLE `front_saledetail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `goods_categoryinformation`
--

DROP TABLE IF EXISTS `goods_categoryinformation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `goods_categoryinformation` (
  `catInf_ID` bigint(11) NOT NULL AUTO_INCREMENT,
  `catInf_Index` varchar(255) DEFAULT NULL,
  `catInf_Name` varchar(255) DEFAULT NULL,
  `catInf_Describe` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`catInf_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `goods_categoryinformation`
--

LOCK TABLES `goods_categoryinformation` WRITE;
/*!40000 ALTER TABLE `goods_categoryinformation` DISABLE KEYS */;
/*!40000 ALTER TABLE `goods_categoryinformation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `goods_discoutinformation`
--

DROP TABLE IF EXISTS `goods_discoutinformation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `goods_discoutinformation` (
  `disInf_ID` bigint(11) NOT NULL AUTO_INCREMENT,
  `inf_Barcode` varchar(255) NOT NULL DEFAULT '',
  `inf_Name` varchar(255) NOT NULL DEFAULT '',
  `disInf_Discount` float DEFAULT NULL,
  PRIMARY KEY (`disInf_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `goods_discoutinformation`
--

LOCK TABLES `goods_discoutinformation` WRITE;
/*!40000 ALTER TABLE `goods_discoutinformation` DISABLE KEYS */;
/*!40000 ALTER TABLE `goods_discoutinformation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `goods_information`
--

DROP TABLE IF EXISTS `goods_information`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `goods_information` (
  `inf_Barcode` bigint(11) NOT NULL AUTO_INCREMENT,
  `inf_Classify` varchar(255) NOT NULL DEFAULT '',
  `inf_Name` varchar(255) NOT NULL DEFAULT '',
  `inf_Alias` varchar(255) DEFAULT NULL,
  `inf_Mnemonniccode` varchar(255) DEFAULT NULL,
  `inf_Pinyincode` varchar(255) NOT NULL DEFAULT '',
  `inf_Manufacture` varchar(255) NOT NULL DEFAULT '',
  `inf_Commodityprice` float NOT NULL DEFAULT '0',
  PRIMARY KEY (`inf_Barcode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `goods_information`
--

LOCK TABLES `goods_information` WRITE;
/*!40000 ALTER TABLE `goods_information` DISABLE KEYS */;
/*!40000 ALTER TABLE `goods_information` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `goods_special`
--

DROP TABLE IF EXISTS `goods_special`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `goods_special` (
  `special_Barcode` bigint(20) NOT NULL,
  `special_Name` varchar(255) NOT NULL,
  `special_Price` float NOT NULL,
  `special_Discount` float NOT NULL,
  PRIMARY KEY (`special_Barcode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `goods_special`
--

LOCK TABLES `goods_special` WRITE;
/*!40000 ALTER TABLE `goods_special` DISABLE KEYS */;
/*!40000 ALTER TABLE `goods_special` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payment_inf`
--

DROP TABLE IF EXISTS `payment_inf`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payment_inf` (
  `payment_ID` int(11) NOT NULL AUTO_INCREMENT,
  `payment_Sign` bigint(20) NOT NULL DEFAULT '0',
  `payment_JinE` float NOT NULL DEFAULT '0',
  `sup_Name` varchar(255) NOT NULL DEFAULT '',
  `payment_Ticketuser` varchar(255) NOT NULL DEFAULT '',
  `payment_Crashguanliyuan` varchar(255) NOT NULL DEFAULT '',
  `payment_TicketDate` varchar(255) NOT NULL DEFAULT '',
  `payment_PayDate` varchar(255) NOT NULL DEFAULT '',
  `payment_FinishState` varchar(255) DEFAULT NULL,
  `payment_Note` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`payment_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payment_inf`
--

LOCK TABLES `payment_inf` WRITE;
/*!40000 ALTER TABLE `payment_inf` DISABLE KEYS */;
/*!40000 ALTER TABLE `payment_inf` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `purchase_calculateinf`
--

DROP TABLE IF EXISTS `purchase_calculateinf`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `purchase_calculateinf` (
  `calinf_ID` int(11) NOT NULL AUTO_INCREMENT,
  `purchase_ID` int(11) NOT NULL DEFAULT '0',
  `inf_Barcode` varchar(255) NOT NULL DEFAULT '',
  `calinf_Purprice` float NOT NULL DEFAULT '0',
  `calinf_Number` int(11) NOT NULL DEFAULT '0',
  `calinf_JinE` float NOT NULL DEFAULT '0',
  `calinf_Time` varchar(255) NOT NULL DEFAULT '',
  `calinf_TotalPrice` float NOT NULL DEFAULT '0',
  PRIMARY KEY (`calinf_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `purchase_calculateinf`
--

LOCK TABLES `purchase_calculateinf` WRITE;
/*!40000 ALTER TABLE `purchase_calculateinf` DISABLE KEYS */;
/*!40000 ALTER TABLE `purchase_calculateinf` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `purchase_information`
--

DROP TABLE IF EXISTS `purchase_information`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `purchase_information` (
  `purchase_ID` int(11) NOT NULL AUTO_INCREMENT,
  `sup_Name` varchar(255) NOT NULL DEFAULT '',
  `purchase_Qinggouyuan` varchar(255) NOT NULL DEFAULT '',
  `purchase_Dinggouyuan` varchar(255) NOT NULL DEFAULT '',
  `purchase_Yanshouyuan` varchar(255) NOT NULL DEFAULT '',
  `purchase_Crashguanliyuan` varchar(255) NOT NULL DEFAULT '',
  `purchase_Shouhuoaddress` varchar(255) NOT NULL DEFAULT '',
  `warehouse_Name` varchar(255) NOT NULL DEFAULT '',
  `purchase_Dingdandate` varchar(255) NOT NULL DEFAULT '',
  `purchase_Daohuodate` varchar(255) NOT NULL DEFAULT '',
  `purchase_Finishstate` varchar(255) DEFAULT NULL,
  `purhase_Note` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`purchase_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `purchase_information`
--

LOCK TABLES `purchase_information` WRITE;
/*!40000 ALTER TABLE `purchase_information` DISABLE KEYS */;
/*!40000 ALTER TABLE `purchase_information` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `purchasepay_inf`
--

DROP TABLE IF EXISTS `purchasepay_inf`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `purchasepay_inf` (
  `payment_ID` int(11) NOT NULL AUTO_INCREMENT,
  `payment_Sign` varchar(20) NOT NULL DEFAULT '',
  `purchasepay_JinE` float NOT NULL DEFAULT '0',
  `sup_Name` varchar(255) NOT NULL DEFAULT '',
  `purchase_Yanshouyuan` varchar(255) NOT NULL DEFAULT '',
  `purchase_Crashguanliyuan` varchar(255) NOT NULL DEFAULT '',
  `purchasepay_TicketDate` varchar(255) NOT NULL DEFAULT '',
  `purchasepay_PayDate` varchar(255) NOT NULL DEFAULT '',
  `purchasepay_FinishState` varchar(255) DEFAULT NULL,
  `purchasepay_Note` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`payment_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `purchasepay_inf`
--

LOCK TABLES `purchasepay_inf` WRITE;
/*!40000 ALTER TABLE `purchasepay_inf` DISABLE KEYS */;
/*!40000 ALTER TABLE `purchasepay_inf` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sale_bill`
--

DROP TABLE IF EXISTS `sale_bill`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sale_bill` (
  `salebill_ID` bigint(20) NOT NULL,
  `cl_Name` varchar(255) NOT NULL,
  `sale_Counter` varchar(255) NOT NULL,
  `salebill_Username` varchar(255) NOT NULL,
  `salebill_Destination` varchar(255) NOT NULL,
  `salebill_Filldate` date NOT NULL,
  `salebill_Dealdate` date NOT NULL,
  `salebill_State` int(11) NOT NULL,
  `salebill_Remarks` text,
  `purchase_Crashguanliyuan` varchar(255) NOT NULL,
  PRIMARY KEY (`salebill_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sale_bill`
--

LOCK TABLES `sale_bill` WRITE;
/*!40000 ALTER TABLE `sale_bill` DISABLE KEYS */;
/*!40000 ALTER TABLE `sale_bill` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sale_collection`
--

DROP TABLE IF EXISTS `sale_collection`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sale_collection` (
  `collection_ID` bigint(20) NOT NULL,
  `collection_billID` bigint(20) NOT NULL,
  `collection_Amount` float NOT NULL,
  `sup_Name` varchar(255) NOT NULL,
  `collection_userID` bigint(20) NOT NULL,
  `purchase_Crashguanliyuan` varchar(255) NOT NULL,
  `collection_Filldate` date NOT NULL,
  `collection_Dealdate` date NOT NULL,
  `collection_State` int(11) NOT NULL,
  `collection_Remarks` text,
  PRIMARY KEY (`collection_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sale_collection`
--

LOCK TABLES `sale_collection` WRITE;
/*!40000 ALTER TABLE `sale_collection` DISABLE KEYS */;
/*!40000 ALTER TABLE `sale_collection` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sale_detail`
--

DROP TABLE IF EXISTS `sale_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sale_detail` (
  `detail_ID` bigint(20) NOT NULL,
  `salebill_ID` bigint(20) NOT NULL,
  `inf_Barcode` bigint(20) NOT NULL,
  `inf_Commodityprice` float NOT NULL,
  `detail_Discount` float NOT NULL,
  `detail_Price` float NOT NULL,
  `detail_Number` int(11) NOT NULL,
  `detail_Amount` float NOT NULL,
  `detail_Totle` float NOT NULL,
  PRIMARY KEY (`detail_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sale_detail`
--

LOCK TABLES `sale_detail` WRITE;
/*!40000 ALTER TABLE `sale_detail` DISABLE KEYS */;
/*!40000 ALTER TABLE `sale_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stock_bill`
--

DROP TABLE IF EXISTS `stock_bill`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stock_bill` (
  `bill_ID` bigint(20) NOT NULL,
  `bill_Identifier` varchar(45) NOT NULL,
  `bill_Filler` varchar(45) NOT NULL,
  `bill_Checker` varchar(45) NOT NULL,
  `bill_Action` int(11) NOT NULL,
  `warehouse_ID` int(11) NOT NULL,
  `bill_Filldate` date NOT NULL,
  `bill_Checkdate` date NOT NULL,
  `bill_State` int(11) NOT NULL,
  `bill_Remarks` text NOT NULL,
  PRIMARY KEY (`bill_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stock_bill`
--

LOCK TABLES `stock_bill` WRITE;
/*!40000 ALTER TABLE `stock_bill` DISABLE KEYS */;
/*!40000 ALTER TABLE `stock_bill` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stock_billdetail`
--

DROP TABLE IF EXISTS `stock_billdetail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stock_billdetail` (
  `billdetail_ID` bigint(20) NOT NULL,
  `bill_ID` bigint(20) NOT NULL,
  `inf_Barcode` bigint(20) NOT NULL,
  `billdetail_Purprice` float NOT NULL,
  `billdetail_Number` int(11) NOT NULL,
  `billdetail_Amount` float NOT NULL,
  `billdetail_Valperiod` date NOT NULL,
  `billdetail_Totle` float NOT NULL,
  PRIMARY KEY (`billdetail_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stock_billdetail`
--

LOCK TABLES `stock_billdetail` WRITE;
/*!40000 ALTER TABLE `stock_billdetail` DISABLE KEYS */;
/*!40000 ALTER TABLE `stock_billdetail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stock_commodity`
--

DROP TABLE IF EXISTS `stock_commodity`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stock_commodity` (
  `warehouse_ID` int(11) NOT NULL,
  `inf_Barcode` bigint(20) NOT NULL,
  `calinf_Purprice` float NOT NULL,
  `commodity_Number` int(11) NOT NULL,
  `commodity_Period` float NOT NULL,
  `commodity_Totle` float NOT NULL,
  `commodity_Valperiod` date NOT NULL,
  PRIMARY KEY (`warehouse_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stock_commodity`
--

LOCK TABLES `stock_commodity` WRITE;
/*!40000 ALTER TABLE `stock_commodity` DISABLE KEYS */;
/*!40000 ALTER TABLE `stock_commodity` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stock_invdetail`
--

DROP TABLE IF EXISTS `stock_invdetail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stock_invdetail` (
  `invDetail_ID` bigint(20) NOT NULL,
  `inv_ID` bigint(20) NOT NULL,
  `inf_Barcode` bigint(20) NOT NULL,
  `invDetail_Quantity` bigint(20) NOT NULL,
  PRIMARY KEY (`invDetail_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stock_invdetail`
--

LOCK TABLES `stock_invdetail` WRITE;
/*!40000 ALTER TABLE `stock_invdetail` DISABLE KEYS */;
/*!40000 ALTER TABLE `stock_invdetail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stock_inventory`
--

DROP TABLE IF EXISTS `stock_inventory`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stock_inventory` (
  `inv_ID` bigint(20) NOT NULL,
  `user_ID` int(11) NOT NULL,
  `warehouse_ID` int(11) NOT NULL,
  `inv_Date` date NOT NULL,
  `inv_State` int(11) NOT NULL,
  `inv_Remarks` text,
  PRIMARY KEY (`inv_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stock_inventory`
--

LOCK TABLES `stock_inventory` WRITE;
/*!40000 ALTER TABLE `stock_inventory` DISABLE KEYS */;
/*!40000 ALTER TABLE `stock_inventory` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stock_warning`
--

DROP TABLE IF EXISTS `stock_warning`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stock_warning` (
  `inf_Barcode` bigint(20) NOT NULL,
  `inf_Name` varchar(255) NOT NULL,
  `warning_Max` int(11) NOT NULL,
  `warning_Min` int(11) NOT NULL,
  `commodity_Number` int(11) NOT NULL,
  `warning_State` int(11) NOT NULL,
  PRIMARY KEY (`inf_Barcode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stock_warning`
--

LOCK TABLES `stock_warning` WRITE;
/*!40000 ALTER TABLE `stock_warning` DISABLE KEYS */;
/*!40000 ALTER TABLE `stock_warning` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `supplier_information`
--

DROP TABLE IF EXISTS `supplier_information`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `supplier_information` (
  `sup_ID` bigint(11) NOT NULL AUTO_INCREMENT,
  `sup_Name` varchar(255) NOT NULL DEFAULT '',
  `sup_Area` varchar(255) NOT NULL default '',
  `sup_Pinyincode` varchar(255) NOT NULL DEFAULT '',
  `sup_Brief` varchar(255) default NULL,
  `sup_Tel` bigint(20) NOT NULL DEFAULT '0',
  `sup_Contact` varchar(255) NOT NULL DEFAULT '',
  `sup_Fax` int(11) DEFAULT NULL,
  `sup_Postcode` int(11) NOT NULL DEFAULT '0',
  `sup_Address` varchar(255) NOT NULL DEFAULT '',
  `sup_Bank` varchar(255) DEFAULT NULL,
  `sup_BankAccount` bigint(20) NOT NULL DEFAULT '0',
  `sup_Email` varchar(255) DEFAULT NULL,
  `sup_Note` varchar(255) DEFAULT NULL,
  `sup_Internet` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`sup_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `supplier_information`
--

LOCK TABLES `supplier_information` WRITE;
/*!40000 ALTER TABLE `supplier_information` DISABLE KEYS */;
/*!40000 ALTER TABLE `supplier_information` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `user_ID` bigint(11) NOT NULL AUTO_INCREMENT,
  `user_Name` varchar(255) NOT NULL DEFAULT '',
  `user_Password` varchar(255) NOT NULL DEFAULT '',
  `user_AllPermission` varchar(2) NOT NULL DEFAULT '0',
  `user_BasicInformationPermission` varchar(2) NOT NULL DEFAULT '0',
  `user_B_User` varchar(2) NOT NULL DEFAULT '0',
  `user_B_Good` varchar(2) NOT NULL DEFAULT '0',
  `user_B_Supplier` varchar(2) NOT NULL DEFAULT '0',
  `user_B_Client` varchar(2) NOT NULL DEFAULT '0',
  `user_B_Warehouse` varchar(2) NOT NULL DEFAULT '0',
  `user_B_Gooddis` varchar(2) NOT NULL DEFAULT '0',
  `user_PurchasePermission` varchar(2) NOT NULL DEFAULT '0',
  `user_StockPermission` varchar(2) NOT NULL DEFAULT '0',
  `user_SellPermission` varchar(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--



--
-- Table structure for table `warehouse_information`
--

DROP TABLE IF EXISTS `warehouse_information`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `warehouse_information` (
  `warehouse_ID` int(11) NOT NULL AUTO_INCREMENT,
  `warehouse_Name` varchar(255) NOT NULL DEFAULT '',
  `warehouse_Pinyincode` varchar(255) NOT NULL DEFAULT '',
  `warehouse_Location` varchar(255) NOT NULL DEFAULT '',
  `warehouse_Describe` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`warehouse_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `warehouse_information`
--

LOCK TABLES `warehouse_information` WRITE;
/*!40000 ALTER TABLE `warehouse_information` DISABLE KEYS */;
/*!40000 ALTER TABLE `warehouse_information` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-06-07 19:26:03

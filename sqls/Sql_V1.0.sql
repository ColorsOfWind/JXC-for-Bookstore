CREATE DATABASE JXC_Book;
use JXC_Book;

CREATE TABLE `user` (
  `user_ID` bigint(11) NOT NULL auto_increment,
  `user_Name` varchar(255) NOT NULL default '',
  `user_Password` varchar(255) NOT NULL default '',
  `user_AllPermission` varchar(255) NOT NULL default '',
  `user_BasicInformationPermission` varchar(255) NOT NULL default '',
  `user_PurchasePermission` varchar(255) NOT NULL default '',
  `c` varchar(255) NOT NULL default '',
  `user_SellPermission` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`user_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `goods_categoryinformation` (
  `catInf_ID` bigint(11) NOT NULL auto_increment,
  `catInf_Index` varchar(255) default NULL,
  `catInf_Name` varchar(255) default NULL,
  `catInf_Describe` varchar(255) default NULL,
  PRIMARY KEY  (`catInf_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `goods_information` (
  `inf_Barcode` bigint(11) NOT NULL auto_increment,
  `inf_Classify` varchar(255) NOT NULL default '',
  `inf_Name` varchar(255) NOT NULL default '',
  `inf_Alias` varchar(255) default NULL,
  `inf_Mnemonniccode` varchar(255) default NULL,
  `inf_Pinyincode` varchar(255) NOT NULL default '',
  `inf_Measure` varchar(255) NOT NULL default '',
  `inf_Specifications` varchar(255) NOT NULL default '',
  `inf_Manufacture` varchar(255) NOT NULL default '',
  `inf_Commodityprice` FLOAT NOT NULL default '0',
  PRIMARY KEY  (`inf-Barcode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;	

CREATE TABLE `goods_discoutinformation` (
  `disInf_ID` bigint(11) NOT NULL auto_increment,
  `inf_Barcode` varchar(255) NOT NULL default '',
  `inf_Name` varchar(255) NOT NULL default '',
  `disInf_Discount` FLOAT default NULL,
  PRIMARY KEY  (`disInf_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `supplier_information` (
  `sup_ID` bigint(11) NOT NULL auto_increment,
  `sup_Name` varchar(255) NOT NULL default '',
  `sup_Area` varchar(255) NOT NULL default '',
  `sup_Pinyincode` varchar(255) NOT NULL default '',
  `sup_Brief` varchar(255) default NULL,
  `sup_Tel` bigint(20) NOT NULL default '0',
  `sup_Contact` varchar(255) NOT NULL default '',
  `sup_Fax` int(11) default NULL,
  `sup_Postcode` int(11) NOT NULL default '0',
  `sup_Address` varchar(255) NOT NULL default '',
  `sup_Bank` varchar(255) default NULL,
  `sup_BankAccount` bigint(20) NOT NULL default '0',
  `sup_Email` varchar(255) default NULL,
  `sup_Note` varchar(255) default NULL,
  `sup_Internet` varchar(255) default NULL,
  PRIMARY KEY  (`sup_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `client_information` (
  `client_ID` bigint(11) NOT NULL auto_increment,
  `cl_Name` varchar(255) NOT NULL default '',
  `cl_Area` varchar(255) NOT NULL default '',
  `cl_Pinyincode` varchar(255) NOT NULL default '',
  `cl_Brief` varchar(255) default NULL,
  `cl_Tel` bigint(20) NOT NULL default '0',
  `cl_Contacts` varchar(255) NOT NULL default '',
  `cl_Fax` int(11) default NULL,
  `cl_Postcode` int(11) NOT NULL default '0',
  `cl_Address` varchar(255) NOT NULL default '',
  `cl_Bank` varchar(255) default NULL,
  `cl_BankAccount` bigint(20) NOT NULL default '0',
  `cl_Email` varchar(255) default NULL,
  `cl_Note` varchar(255) default NULL,
  `cl_Internet` varchar(255) default NULL,
  PRIMARY KEY  (`client_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `client_creditinformation` (
  `cl_Name` int(11) NOT NULL auto_increment,
  `creditInf_Limit` FLOAT default NULL,
  PRIMARY KEY  (`cl_Name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `warehouse_information` (
  `warehouse_ID` int(11) NOT NULL auto_increment,
  `warehouse_Name` varchar(255) NOT NULL default '',
  `warehouse_Pinyincode` varchar(255) NOT NULL default '',
  `warehouse_Location` varchar(255) NOT NULL default '',
  `warehouse_Describe` varchar(255) default NULL,
  PRIMARY KEY  (`warehouse_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `journal_operateinf` (
  `operateInf_ID` int(11) NOT NULL auto_increment,
  `operateInf_Program` varchar(255) NOT NULL default '',
  `operateInf_Context` varchar(255) NOT NULL default '',
  `operateInf_Username` varchar(255) NOT NULL default '',
  `operateInf_Time` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`operateInf_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `purchase_information` (
  `purchase_ID` int(11) NOT NULL auto_increment,
  `sup_Name` varchar(255) NOT NULL default '',
  `purchase_Qinggouyuan` varchar(255) NOT NULL default '',
  `purchase_Dinggouyuan` varchar(255) NOT NULL default '',
  `purchase_Yanshouyuan` varchar(255) NOT NULL default '',
  `purchase_Crashguanliyuan` varchar(255) NOT NULL default '',
  `purchase_Shouhuoaddress` varchar(255) NOT NULL default '',
  `warehouse_Name` varchar(255) NOT NULL default '',
  `purchase_Dingdandate` varchar(255) NOT NULL default '',
  `purchase_Daohuodate` varchar(255) NOT NULL default '',
  `purchase_Finishstate` varchar(255) default NULL,
  `purhase_Note` varchar(255) default NULL,
  PRIMARY KEY  (`purchase_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `purchase_calculateinf` (
  `calinf_ID` int(11) NOT NULL auto_increment,
  `purchase_ID` int(11) NOT NULL default '0',
  `inf_Barcode` varchar(255) NOT NULL default '',
  `calinf_Purprice` FLOAT NOT NULL default '0',
  `calinf_Number` int(11) NOT NULL default '0',
  `calinf_JinE` FLOAT NOT NULL default '0',
  `calinf_Time` varchar(255) NOT NULL default '',
  `calinf_TotalPrice` FLOAT NOT NULL default '0',
  PRIMARY KEY  (`calinf_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `payment_inf` (
  `payment_ID` int(11) NOT NULL auto_increment,
  `payment_Sign` bigint(20) NOT NULL default '0',
  `payment_JinE` FLOAT NOT NULL default '0',
  `sup_Name` varchar(255) NOT NULL default '',
  `payment_Ticketuser` varchar(255) NOT NULL default '',
  `payment_Crashguanliyuan` varchar(255) NOT NULL default '',
  `payment_TicketDate` varchar(255) NOT NULL default '',
  `payment_PayDate` varchar(255) NOT NULL default '',
  `payment_FinishState` varchar(255) default NULL,
  `payment_Note` varchar(255) default NULL,
  PRIMARY KEY  (`payment_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `purchasepay_inf` (
  `payment_ID` int(11) NOT NULL auto_increment,
  `payment_Sign` varchar(20) NOT NULL default '',
  `purchasepay_JinE` FLOAT NOT NULL default '0',
  `sup_Name` varchar(255) NOT NULL default '',
  `purchase_Yanshouyuan` varchar(255) NOT NULL default '',
  `purchase_Crashguanliyuan` varchar(255) NOT NULL default '',
  `purchasepay_TicketDate` varchar(255) NOT NULL default '',
  `purchasepay_PayDate` varchar(255) NOT NULL default '',
  `purchasepay_FinishState` varchar(255) default NULL,
  `purchasepay_Note` varchar(255) default NULL,
  PRIMARY KEY  (`payment_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `puraccount_fenluinf` (
  `puraccount_ID` int(11) NOT NULL auto_increment,
  `payment_Sign` bigint(20) NOT NULL default '0',
  `puraccount_JiName` varchar(255) NOT NULL default '',
  `puraccount_ShenName` varchar(255) NOT NULL default '',
  `puraccount_JiDate` varchar(255) NOT NULL default '',
  `puraccount_ShenDate` varchar(255) NOT NULL default '',
  `puraccount_FinishState` varchar(255) default NULL,
  `puraccount_Note` varchar(255) default NULL,
  PRIMARY KEY  (`puraccount_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `puraccount_minginf` (
  `minginf_ID` int(11) NOT NULL auto_increment,
  `minginf_Glzd` varchar(255) default NULL,
  `minginf_Jdbs` varchar(255) default NULL,
  `minginf_Kjkm` varchar(255) default NULL,
  `minginf_Fsje` bigint(20) default '0',
  `minginf_Jdph` varchar(255) default NULL,
  PRIMARY KEY  (`minginf_ID`));

CREATE TABLE `stock_inventory` (
  `inv_ID` BIGINT NOT NULL,
  `user_ID` INT NOT NULL,
  `warehouse_ID` INT NOT NULL,
  `inv_Date` DATE NOT NULL,
  `inv_State` INT NOT NULL,
  `inv_Remarks` TEXT(500) NULL,
  PRIMARY KEY (`inv_ID`));

CREATE TABLE`stock_invdetail` (
  `invDetail_ID` BIGINT NOT NULL,
  `inv_ID` BIGINT NOT NULL,
  `inf_Barcode` BIGINT NOT NULL,
  `invDetail_Quantity` BIGINT NOT NULL,
  PRIMARY KEY (`invDetail_ID`));

CREATE TABLE `stock_profit` (
  `profit_ID` BIGINT NOT NULL,
  `inv_ID` BIGINT NOT NULL,
  `inf_Barcode` BIGINT ZEROFILL NOT NULL,
  `calinf_Purprice` FLOAT NOT NULL,
  `profit_Number` INT NOT NULL,
  `profit_Amount` FLOAT NOT NULL,
  `profit_Valperiod` DATE NOT NULL,
  `profit_Total` FLOAT NOT NULL,
  PRIMARY KEY (`profit_ID`));

CREATE TABLE `stock_commodity` (
  `warehouse_ID` INT NOT NULL,
  `inf_Barcode` BIGINT NOT NULL,
  `calinf_Purprice` FLOAT NOT NULL,
  `commodity_Number` INT NOT NULL,
  `commodity_Period` FLOAT NOT NULL,
  `commodity_Totle` FLOAT NOT NULL,
  `commodity_Valperiod` DATE NOT NULL,
  PRIMARY KEY (`warehouse_ID`));

CREATE TABLE `stock_bill` (
  `bill_ID` BIGINT NOT NULL,
  `bill_Identifier` VARCHAR(45) NOT NULL,
  `bill_Filler` VARCHAR(45) NOT NULL,
  `bill_Checker` VARCHAR(45) NOT NULL,
  `bill_Action` INT NOT NULL,
  `warehouse_ID` INT NOT NULL,
  `bill_Filldate` DATE NOT NULL,
  `bill_Checkdate` DATE NOT NULL,
  `bill_State` INT NOT NULL,
  `bill_Remarks` TEXT(500) NOT NULL,
  PRIMARY KEY (`bill_ID`));

CREATE TABLE `stock_billdetail` (
  `billdetail_ID` BIGINT NOT NULL,
  `bill_ID` BIGINT NOT NULL,
  `inf_Barcode` BIGINT NOT NULL,
  `billdetail_Purprice` FLOAT NOT NULL,
  `billdetail_Number` INT NOT NULL,
  `billdetail_Amount` FLOAT NOT NULL,
  `billdetail_Valperiod` DATE NOT NULL,
  `billdetail_Totle` FLOAT NOT NULL,
  PRIMARY KEY (`billdetail_ID`));

CREATE TABLE `stock_warning` (
  `inf_Barcode` BIGINT NOT NULL,
  `inf_Name` VARCHAR(255) NOT NULL,
  `warning_Max` INT NOT NULL,
  `warning_Min` INT NOT NULL,
  `commodity_Number` INT NOT NULL,
  `warning_State` INT NOT NULL,
  PRIMARY KEY (`inf_Barcode`));

CREATE TABLE `goods_special` (
  `special_Barcode` BIGINT NOT NULL,
  `special_Name` VARCHAR(255) NOT NULL,
  `special_Price` FLOAT NOT NULL,
  `special_Discount` FLOAT NOT NULL,
  PRIMARY KEY (`special_Barcode`));

CREATE TABLE `front_sale` (
  `sale_ID` BIGINT NOT NULL,
  `cl_Name` VARCHAR(255) NOT NULL,
  `sale_userID` BIGINT(11) NOT NULL,
  `sale_Counter` VARCHAR(255) NOT NULL,
  `sale_Destination` VARCHAR(255) NOT NULL,
  `sale_Filldate` DATE NOT NULL,
  `sale_Dealdate` DATE NOT NULL,
  `sale_State` INT NOT NULL,
  `sale_Remarks` TEXT NOT NULL,
  PRIMARY KEY (`sale_ID`));


CREATE TABLE `front_saledetail` (
  `saledetail_ID` BIGINT NOT NULL,
  `sale_ID` BIGINT NOT NULL,
  `inf_Barcode` BIGINT NOT NULL,
  `inf_Commodityprice` FLOAT NOT NULL,
  `saledetail_Discount` FLOAT NOT NULL,
  `saledetail_Price` FLOAT NOT NULL,
  `saledetail_Number` INT NOT NULL,
  `saledetail_Amount` FLOAT NOT NULL,
  `saledetail_Totle` FLOAT NOT NULL,
  PRIMARY KEY (`saledetail_ID`));

CREATE TABLE `diary_cash` (
  `cash_ID` BIGINT NOT NULL,
  `cash_billID` BIGINT NOT NULL,
  `cash_Loan` INT NOT NULL,
  `cash_UserID` BIGINT NOT NULL,
  `cash_Amount` FLOAT NOT NULL,
  `cash_Date` DATE NOT NULL,
  PRIMARY KEY (`cash_ID`));

CREATE TABLE `sale_collection` (
  `collection_ID` BIGINT NOT NULL,
  `collection_billID` BIGINT NOT NULL,
  `collection_Amount` FLOAT NOT NULL,
  `sup_Name` VARCHAR(255) NOT NULL,
  `collection_userID` BIGINT NOT NULL,
  `purchase_Crashguanliyuan` VARCHAR(255) NOT NULL,
  `collection_Filldate` DATE NOT NULL,
  `collection_Dealdate` DATE NOT NULL,
  `collection_State` INT NOT NULL,
  `collection_Remarks` TEXT(500) NULL,
  PRIMARY KEY (`collection_ID`));

CREATE TABLE `sale_bill` (
  `salebill_ID` BIGINT NOT NULL,
  `cl_Name` VARCHAR(255) NOT NULL,
  `sale_Counter` VARCHAR(255) NOT NULL,
  `salebill_Username` VARCHAR(255) NOT NULL,
  `salebill_Destination` VARCHAR(255) NOT NULL,
  `salebill_Filldate` DATE NOT NULL,
  `salebill_Dealdate` DATE NOT NULL,
  `salebill_State` INT NOT NULL,
  `salebill_Remarks` TEXT(500) NULL,
  `purchase_Crashguanliyuan` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`salebill_ID`));

CREATE TABLE `sale_detail` (
  `detail_ID` BIGINT NOT NULL,
  `salebill_ID` BIGINT NOT NULL,
  `inf_Barcode` BIGINT NOT NULL,
  `inf_Commodityprice` FLOAT NOT NULL,
  `detail_Discount` FLOAT NOT NULL,
  `detail_Price` FLOAT NOT NULL,
  `detail_Number` INT NOT NULL,
  `detail_Amount` FLOAT NOT NULL,
  `detail_Totle` FLOAT NOT NULL,
  PRIMARY KEY (`detail_ID`));


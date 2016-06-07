[toc]

## 用户表(user)
    用户编号user_ID 
    用户名user_Name 
    密码user_Password 
    系统总用户权限user_AllPermission 
    基础信息模块总用户权限user_BasicInformationPermission 
    进货模块总用户权限user_PurchasePermission 
    库存模块总用户权限user_StockPermission 
    销售模块总用户权限user_SellPermission 

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

## 商品类别信息表(goods_categoryinformation)
    类别编号catInf_ID 
    父索引catInf_Index 
    商品类别名称catInf_Name 
    商品类别描述catInf_Describe 

CREATE TABLE `goods_categoryinformation` (
  `catInf_ID` bigint(11) NOT NULL auto_increment,
  `catInf_Index` varchar(255) default NULL,
  `catInf_Name` varchar(255) default NULL,
  `catInf_Describe` varchar(255) default NULL,
  PRIMARY KEY  (`catInf_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

## 商品信息表(goods_information)
    商品条形码inf-Barcode 
    商品分类标识inf_Classify 
    商品名称inf_Name 
    商品别名inf_Alias 
    助记码Inf_Mnemonniccode 
    拼音码inf_Pinyincode 
    计量单位inf_Specifications 
    规格inf_Specifications 
    生产厂商inf_Manufacture 
    商品售价inf_Commodityprice 


CREATE TABLE `goods_information` (
  `inf-Barcode` bigint(11) NOT NULL auto_increment,
  `inf_Classify` varchar(255) NOT NULL default '',
  `inf_Name` varchar(255) NOT NULL default '',
  `inf_Alias` varchar(255) default NULL,
  `Inf_Mnemonniccode` varchar(255) default NULL,
  `inf_Pinyincode` varchar(255) NOT NULL default '',
  `inf_Measure` varchar(255) NOT NULL default '',
  `inf_Specifications` varchar(255) NOT NULL default '',
  `inf_Manufacture` varchar(255) NOT NULL default '',
  `inf_Commodityprice` FLOAT NOT NULL default '0',
  PRIMARY KEY  (`inf-Barcode`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1; 

## 商品折扣信息表(goods_discoutinformation)
    折扣编号disInf_ID 
    商品条形码inf_Barcode 
    商品名称inf_Name 
    商品折扣disInf_Discount 

CREATE TABLE `goods_discoutinformation` (
  `disInf_ID` bigint(11) NOT NULL auto_increment,
  `inf_Barcode` varchar(255) NOT NULL default '',
  `inf_Name` varchar(255) NOT NULL default '',
  `disInf_Discount` FLOAT default NULL,
  PRIMARY KEY  (`disInf_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

## 供应商信息表(supplier_information)
    供货商编号sup_ID 
    供应商名sup_Name 
    地区sup_Area 
    拼音码sup_Pinyincode 
    简称sup_Brief 
    联系电话sup_Tel
    联系人sup_Contact 
    传真sup_Fax 
    邮编sup_Postcode 
    地址sup_Address 
    开户银行sup_Bank 
    银行账号sup_BankAccount 
    电子邮件sup_Email 
    网址sup_Internet 
    备注sup_Note 

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

## 客户信息表(client_information)
    客户编号client_ID 
    客户名cl_Name 
    地区cl_Area 
    拼音码cl_Pinyincode 
    简称cl_Brief 
    联系电话cl_Tel 
    联系人cl_Contacts 
    传真cl_Fax 
    邮编cl_Postcode 
    地址cl_Address 
    开户银行cl_Bank 
    银行账号cl_BankAccount 
    电子邮件cl_Email 
    网址cl_Internet 
    备注cl_Note

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


## 客户信用数据信息表(client_creditinformation)
    客户名cl_Name 
    信用额度creditInf_Limit 


CREATE TABLE `client_creditinformation` (
  `cl_Name` int(11) NOT NULL auto_increment,
  `creditInf_Limit` FLOAT default NULL,
  PRIMARY KEY  (`cl_Name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

## 仓库数据信息表(warehouse_information)
    仓库编号warehouse_ID 
    仓库名字warehouse_Name 
    拼音码warehouse_Pinyincode 
    位置warehouse_Location 
    描述warehouse_Describe 

CREATE TABLE `warehouse_information` (
  `warehouse_ID` int(11) NOT NULL auto_increment,
  `warehouse_Name` varchar(255) NOT NULL default '',
  `warehouse_Pinyincode` varchar(255) NOT NULL default '',
  `warehouse_Location` varchar(255) NOT NULL default '',
  `warehouse_Describe` varchar(255) default NULL,
  PRIMARY KEY  (`warehouse_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

## 用户日志操作信息表(journal_operateinf)
    操作编号operateInf_ID 
    操作程序名字operateInf_Program 
    操作内容operateInf_Context 
    用户名字operateInf_Username 
    操作时间operateInf_Time 


CREATE TABLE `journal_operateinf` (
  `operateInf_ID` int(11) NOT NULL auto_increment,
  `operateInf_Program` varchar(255) NOT NULL default '',
  `operateInf_Context` varchar(255) NOT NULL default '',
  `operateInf_Username` varchar(255) NOT NULL default '',
  `operateInf_Time` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`operateInf_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

## 进货单信息表(purchase_information)
    进货单据编号purchase_ID 
    供应商sup_Name 
    请购员purchase_Qinggouyuan 
    订购员purchase_Dinggouyuan 
    验收员purchase_Yanshouyuan 
    现金管理员purchase_Crashguanliyuan 
    收货地址purchase_Shouhuoaddress 
    仓库名warehouse_Name 
    订单日期purchase_Dingdandate 
    到货日期purchase_Daohuodate 
    完成状态purchase_Finishstate 
    备注purhase_Note 

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

## 进货明细信息表 (purchase_calculateinf)
    明细编号calinf_ID 
    进货单据编号purchase_ID 
    商品条形码inf_Barcode 
    进货价calinf_Purprice 
    数量calinf_Number 
    金额calinf_JinE 
    有效期calinf_Time 
    总价calinf_TotalPrice 

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


## 付款单信息表(payment_inf) 
    付款票据编号payment_ID 
    相关联的票据标识payment_Sign 
    金额payment_JinE 
    供应商名字sup_Name 
    开票据的用户名payment_Ticketuser 
    现金管理员名字payment_Crashguanliyuan 
    开票据日期payment_TicketDate 
    付款日期payment_PayDate 
    完成状态payment_FinishState 
    备注payment_Note 

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


## 进货付款信息表(purchasepay_inf)
    票据编号payment_ID 
    相关联的票据标识payment_Sign 
    金额purchasepay_JinE 
    供应商sup_Name 
    验收员purchase_Yanshouyuan 
    现金管理员purchase_Crashguanliyuan 
    开票据日期purchasepay_TicketDate 
    付款日期purchasepay_PayDate 
    完成状态purchasepay_FinishState 
    备注purchasepay_Note 


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

## 进货会计分录信息(puraccount_fenluinf)
    编号puraccount_ID 
    相关联的票据标识payment_Sign 
    记帐用户puraccount_JiName 
    审核用户puraccount_ShenName 
    记帐日期puraccount_JiDate 
    审核日期puraccount_ShenDate 
    完成状态puraccount_FinishState 
    备注puraccount_Note 

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

## 进货会计分录明细信息(puraccount_minginf)
    明细编号minginf_ID 
    关联字段minginf_Glzd 
    借贷标识minginf_Jdbs 
    会计科目minginf_Kjkm 
    发生金额minginf_Fsje 
    借贷平衡minginf_Jdph 

CREATE TABLE `puraccount_minginf` (
  `minginf_ID` int(11) NOT NULL auto_increment,
  `minginf_Glzd` varchar(255) default NULL,
  `minginf_Jdbs` varchar(255) default NULL,
  `minginf_Kjkm` varchar(255) default NULL,
  `minginf_Fsje` bigint(20) default '0',
  `minginf_Jdph` varchar(255) default NULL,
  PRIMARY KEY  (`minginf_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

## 库存盘点信息（stock_Inventory）
    单据编号inv_ID
    盘点/填写用户user_ID
    盘点仓库warehouse_ID
    盘点/填写日期inv_Date
    完成状态inv_State
    备注inv_Remarks


CREATE TABLE `stock_inventory` (
  `inv_ID` BIGINT NOT NULL,
  `user_ID` INT NOT NULL,
  `warehouse_ID` INT NOT NULL,
  `inv_Date` DATE NOT NULL,
  `inv_State` INT NOT NULL,
  `inv_Remarks` TEXT(500) NULL,
  PRIMARY KEY (`inv_ID`));
## 库存盘点明细信息（stock_invdetail）
    明细编号invDetail_ID
    单据编号inv_ID
    商品条形码inf_Barcode
    盘点数量invDetail_Quantity

CREATE TABLE`stock_invdetail` (
  `invDetail_ID` BIGINT NOT NULL,
  `inv_ID` BIGINT NOT NULL,
  `inf_Barcode` BIGINT NOT NULL,
  `invDetail_Quantity` BIGINT NOT NULL,
  PRIMARY KEY (`invDetail_ID`));

## 库存盘点盈收/损失明细信息（stock_profit）
    明细编号profit_ID
    单据编号inv_ID
    商品条形码inf_Barcode
    进货价calinf_Purprice
    盈收/损失数量profit_Number
    金额profit_Amount
    有效期profit_Valperiod
    总价profit_Total

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

## 库存商品信息（stock_commodity）
    仓库warehouse_ID
商品条形码inf_Barcode
    进货价calinf_Purprice
    数量commodity_Number
    金额commodity_Period
    总价值commodity_Totle
    有效期commodity_Valperiod

CREATE TABLE `stock_commodity` (
  `warehouse_ID` INT NOT NULL,
  `inf_Barcode` BIGINT NOT NULL,
  `calinf_Purprice` FLOAT NOT NULL,
  `commodity_Number` INT NOT NULL,
  `commodity_Period` FLOAT NOT NULL,
  `commodity_Totle` FLOAT NOT NULL,
  `commodity_Valperiod` DATE NOT NULL,
  PRIMARY KEY (`warehouse_ID`));


## 库存单据信息（stock_bill）
    单据编号bill_ID
    关联标识bill_Identifier
    填写用户bill_Filler
    检查用户bill_Checker
    调出/入仓库bill_Action
    仓库warehouse_ID
    填写日期bill_Filldate
    检查日期bill_Checkdate
    完成状态bill_State
    备注bill_Remarks

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


## 库存单据明细信息（stock_billdetail）
    明细编号billdetail_ID
    单据编号bill_ID
    商品条形码inf_Barcode
    进货价billdetail_Purprice
    数量billdetail_Number
    金额billdetail_Amount
    有效期billdetail_Valperiod
    总价billdetail_Totle

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

## 库存警告信息（stock_warning）
    商品条形码inf_Barcode
    商品名称inf_Name
    库存最大数warning_Max
    库存最小数warning_Min
    库存数量commodity_Number
    库存状态warning_State

CREATE TABLE `stock_warning` (
  `inf_Barcode` BIGINT NOT NULL,
  `inf_Name` VARCHAR(255) NOT NULL,
  `warning_Max` INT NOT NULL,
  `warning_Min` INT NOT NULL,
  `commodity_Number` INT NOT NULL,
  `warning_State` INT NOT NULL,
  PRIMARY KEY (`inf_Barcode`));

## 特价商品信息（goods_special）
    商品条形码special_Barcode
    商品名称special_Name
    销售价special_Price
    折扣special_Discount

CREATE TABLE `goods_special` (
  `special_Barcode` BIGINT NOT NULL,
  `special_Name` VARCHAR(255) NOT NULL,
  `special_Price` FLOAT NOT NULL,
  `special_Discount` FLOAT NOT NULL,
  PRIMARY KEY (`special_Barcode`));

## 前台销售信息（front_sale）
    单据编号sale_ID
    客户姓名cl_Name
    前台销售用户编号sale_userID
    柜台名字sale_Counter
    送货地址sale_Destination
    填写日期sale_Filldate
    完成日期sale_Dealdate
    完成状态sale_State
    备注sale_Remarks

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

## 前台销售明细信息（front_saledetail）
    明细编号saledetail_ID
    单据编号sale_ID
    商品条形码inf_Barcode
    销售价inf_Commodityprice
    折扣saledetail_Discount
    实际售价saledetail_Price
    数量saledetail_Number
    金额saledetail_Amount
    总价saledetail_Totle

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

## 现金日记帐信息（diary_cash）
    编号cash_ID
    相关联的票据标识cash_billID
    借贷标识cash_Loan
    记账用户cash_UserID
    发生金额cash_Amount
    发生日期cash_Date

CREATE TABLE `diary_cash` (
  `cash_ID` BIGINT NOT NULL,
  `cash_billID` BIGINT NOT NULL,
  `cash_Loan` INT NOT NULL,
  `cash_UserID` BIGINT NOT NULL,
  `cash_Amount` FLOAT NOT NULL,
  `cash_Date` DATE NOT NULL,
  PRIMARY KEY (`cash_ID`));

## 销售收款信息（sale_collection）
    票据编号collection_ID
    相关联的票据标识collection_billID
    金额collection_Amount
    供应商名字sup_Name
    开票据的用户名collection_userID
    现金管理员名字purchase_Crashguanliyuan
    开票据日期collection_Filldate
    收款日期collection_Dealdate
    完成状态collection_State
    备注collection_Remarks

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

## 销售单信息（sale_bill）
    单据编号salebill_ID
    客户cl_Name
    柜台名字sale_Counter
    销售用户名字salebill_Username
    现金管理员名字purchase_Crashguanliyuan
    送货地址salebill_Destination
    填写日期salebill_Filldate
    完成日期salebill_Dealdate
    完成状态salebill_State
    备注salebill_Remarks

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

## 销售明细信息(sale_detail)
    明细编号detail_ID
    单据编号salebill_ID
    商品条形码inf_Barcode
    销售价inf_Commodityprice
    折扣detail_Discount
    实际售价detail_Price
    数量detail_Number
    金额detail_Amount
    总价detail_Totle

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

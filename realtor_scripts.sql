/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     2020/6/12 22:05:40                           */
/*==============================================================*/


drop table if exists ADDRESS;

drop table if exists BUYERS;

drop table if exists CONTAINS_HISTORY_TRANSACTIONS;

drop table if exists CUSTOMERS;

drop table if exists HOUSE;

drop table if exists HOUSE_INSPECTION;

drop table if exists INSPECTION_RESULT;

drop table if exists INSPECTORS;

drop table if exists NEIGHBORHOOD;

drop table if exists OFFER_CONTRACT;

drop table if exists PREVIOUS_OWNERS;

drop table if exists PROPERTY_TYPE;

drop table if exists REALTOR;

drop table if exists SELLER;

/*==============================================================*/
/* Table: ADDRESS                                               */
/*==============================================================*/
create table ADDRESS
(
   ADDRESS_ID           int not null,
   ADDRESS              varchar(40) not null,
   NEIGHBOR_ID          int,
   primary key (ADDRESS_ID)
);

/*==============================================================*/
/* Table: BUYERS                                                */
/*==============================================================*/
create table BUYERS
(
   CUSTOMER_ID          int not null,
   CREDIT_SCORE         int,
   primary key (CUSTOMER_ID)
);

/*==============================================================*/
/* Table: CONTAINS_HISTORY_TRANSACTIONS                         */
/*==============================================================*/
create table CONTAINS_HISTORY_TRANSACTIONS
(
   TRANSACTION_ID       int not null,
   YEAR                 int,
   PRICE                real,
   HOUSE_ID             int,
   primary key (TRANSACTION_ID)
);

/*==============================================================*/
/* Table: CUSTOMERS                                             */
/*==============================================================*/
create table CUSTOMERS
(
   CUSTOMER_ID          int not null,
   NAME                 varchar(40),
   PHONE                varchar(12),
   SSN                  varbinary(12),
   primary key (CUSTOMER_ID)
);

/*==============================================================*/
/* Table: HOUSE                                                 */
/*==============================================================*/
create table HOUSE
(
   HOUSE_ID             int not null auto_increment,
   ADDRESS_ID           int,
   LISTING_DATE         date,
   LISTING_PRICE        real,
   SELLER_ID            int,
   REALTOR_ID           int,
   FLOOR_SPACE          real,
   PROPERTY_TYPE_ID     int,
   primary key (HOUSE_ID)
);

/*==============================================================*/
/* Table: HOUSE_INSPECTION                                      */
/*==============================================================*/
create table HOUSE_INSPECTION
(
   INSPECTION_ID        int not null,
   INSPECTED_DATE       date,
   BUYER_ID             int,
   HOUSE_ID             int,
   INSPECTOR_ID         int,
   primary key (INSPECTION_ID)
);

/*==============================================================*/
/* Table: INSPECTION_RESULT                                     */
/*==============================================================*/
create table INSPECTION_RESULT
(
   INSPECTION_ID        int not null,
   RESULT               varchar(255),
   primary key (INSPECTION_ID)
);

/*==============================================================*/
/* Table: INSPECTORS                                            */
/*==============================================================*/
create table INSPECTORS
(
   INSPECTOR_ID         int not null,
   INSPECTOR_PHONE      varchar(12) not null,
   INSPECTOR_NAME       varchar(40),
   RATE                 int,
   primary key (INSPECTOR_ID)
);

/*==============================================================*/
/* Table: NEIGHBORHOOD                                          */
/*==============================================================*/
create table NEIGHBORHOOD
(
   NEIGHBOR_ID          int not null,
   NEIGHBOR_NAME        varchar(40) not null,
   INCOME               int,
   SCHOOL_DISTRICT      varchar(40),
   POPULATION_SIZE      int,
   primary key (NEIGHBOR_ID)
);

/*==============================================================*/
/* Table: OFFER_CONTRACT                                        */
/*==============================================================*/
create table OFFER_CONTRACT
(
   CONTRACT_ID          int,
   BUYER_ID             int not null,
   HOUSE_ID             int not null,
   CONTRACT_DATE        date,
   PRICE                real,
   primary key (BUYER_ID, HOUSE_ID)
);

/*==============================================================*/
/* Table: PREVIOUS_OWNERS                                       */
/*==============================================================*/
create table PREVIOUS_OWNERS
(
   HOUSE_ID             int not null,
   NAME                 varchar(255) not null,
   OWN_DATE             date,
   primary key (HOUSE_ID, NAME)
);

/*==============================================================*/
/* Table: PROPERTY_TYPE                                         */
/*==============================================================*/
create table PROPERTY_TYPE
(
   PROPERTY_TYPE_ID     int not null,
   TYPE                 varchar(40),
   primary key (PROPERTY_TYPE_ID)
);

/*==============================================================*/
/* Table: REALTOR                                               */
/*==============================================================*/
create table REALTOR
(
   REALTOR_ID           int not null,
   NAME                 varchar(40),
   PHONE                varchar(12),
   primary key (REALTOR_ID)
);

/*==============================================================*/
/* Table: SELLER                                                */
/*==============================================================*/
create table SELLER
(
   CUSTOMER_ID          int not null,
   primary key (CUSTOMER_ID)
);

alter table ADDRESS add constraint FK_REFERENCE_19 foreign key (NEIGHBOR_ID)
      references NEIGHBORHOOD (NEIGHBOR_ID) on delete cascade on update restrict;

alter table BUYERS add constraint FK_REFERENCE_14 foreign key (CUSTOMER_ID)
      references CUSTOMERS (CUSTOMER_ID) on delete restrict on update restrict;

alter table CONTAINS_HISTORY_TRANSACTIONS add constraint FK_REFERENCE_8 foreign key (HOUSE_ID)
      references HOUSE (HOUSE_ID) on delete restrict on update restrict;

alter table HOUSE add constraint FK_REFERENCE_17 foreign key (PROPERTY_TYPE_ID)
      references PROPERTY_TYPE (PROPERTY_TYPE_ID) on delete restrict on update restrict;

alter table HOUSE add constraint FK_REFERENCE_18 foreign key (ADDRESS_ID)
      references ADDRESS (ADDRESS_ID) on delete set null on update restrict;

alter table HOUSE add constraint FK_REFERENCE_3 foreign key (SELLER_ID)
      references SELLER (CUSTOMER_ID) on delete restrict on update restrict;

alter table HOUSE add constraint FK_REFERENCE_4 foreign key (REALTOR_ID)
      references REALTOR (REALTOR_ID) on delete restrict on update restrict;

alter table HOUSE_INSPECTION add constraint FK_REFERENCE_1 foreign key (BUYER_ID)
      references BUYERS (CUSTOMER_ID) on delete restrict on update restrict;

alter table HOUSE_INSPECTION add constraint FK_REFERENCE_13 foreign key (INSPECTOR_ID)
      references INSPECTORS (INSPECTOR_ID) on delete restrict on update restrict;

alter table HOUSE_INSPECTION add constraint FK_REFERENCE_5 foreign key (HOUSE_ID)
      references HOUSE (HOUSE_ID) on delete restrict on update restrict;

alter table INSPECTION_RESULT add constraint FK_REFERENCE_16 foreign key (INSPECTION_ID)
      references HOUSE_INSPECTION (INSPECTION_ID) on delete restrict on update restrict;

alter table OFFER_CONTRACT add constraint FK_REFERENCE_11 foreign key (BUYER_ID)
      references BUYERS (CUSTOMER_ID) on delete restrict on update restrict;

alter table OFFER_CONTRACT add constraint FK_REFERENCE_12 foreign key (HOUSE_ID)
      references HOUSE (HOUSE_ID) on delete restrict on update restrict;

alter table PREVIOUS_OWNERS add constraint FK_REFERENCE_20 foreign key (HOUSE_ID)
      references HOUSE (HOUSE_ID) on delete restrict on update restrict;

alter table SELLER add constraint FK_REFERENCE_15 foreign key (CUSTOMER_ID)
      references CUSTOMERS (CUSTOMER_ID) on delete restrict on update restrict;


/*==============================================================*/
/* Table: INSERT DATA                                          */
/*==============================================================*/

insert into INSPECTORS (INSPECTOR_ID, INSPECTOR_PHONE, INSPECTOR_NAME, RATE) values (3, 'DS42P4P8YXAT', '7R328H0JUSSMTFQVESLE3X9PVJPY4MI2CBA1K OA', 1);

insert into INSPECTORS (INSPECTOR_ID, INSPECTOR_PHONE, INSPECTOR_NAME, RATE) values (2, 'OIYW229KQHRA', 'QWUUQBT6EEMPIUL4 1LJTNT1GWPOAL4O47615LO2', 3);

insert into INSPECTORS (INSPECTOR_ID, INSPECTOR_PHONE, INSPECTOR_NAME, RATE) values (4, '8X6AIMLASKQM', 'WE0HDSLTGA6SY3BUVXMMFR81WB8NARKPQFNCA0LM', 2);

insert into INSPECTORS (INSPECTOR_ID, INSPECTOR_PHONE, INSPECTOR_NAME, RATE) values (0, '5J6T83NUDU4C', 'SGY4UVLUHD0C74HAVAWFX0GTSEMO2KMIBOBCL8LM', 0);

insert into INSPECTORS (INSPECTOR_ID, INSPECTOR_PHONE, INSPECTOR_NAME, RATE) values (1, '8PAVC1B35KTO', 'NPGT3BKB65XWVY6XL24I1JB7H283 0IE5HS BE19', 4);

insert into REALTOR (REALTOR_ID, NAME, PHONE) values (2, 'BKIV7QQH0XQ66G87XI4H6DFGAF2H2R0SL9GXYDML', 'D543N92F0 B1');

insert into REALTOR (REALTOR_ID, NAME, PHONE) values (0, '6N3JS3O75A214599XL7XWAE8EV9DJ9LCRK02OIAB', 'HT9J 42UAC 5');

insert into REALTOR (REALTOR_ID, NAME, PHONE) values (3, 'GQBW53H2P81ID4DJUK0FYU2Q4N133 NEST727SWD', 'A127WA2FQU5O');

insert into REALTOR (REALTOR_ID, NAME, PHONE) values (4, 'PLTNODAPTJMT95YEI7 64Y3S233R5P J6KUAI3BC', 'YSQACJMGAJPS');

insert into REALTOR (REALTOR_ID, NAME, PHONE) values (1, 'L31RYAJMWLFKSSIJ X84NALE2OTHK1BNE6MITR2R', 'I2UCM8C25LU2');

insert into NEIGHBORHOOD (NEIGHBOR_ID, NEIGHBOR_NAME, INCOME, SCHOOL_DISTRICT, POPULATION_SIZE) values (4, 'AGNST432535NBGK6W289F92TW8TEIUAES1ND JL1', 3, 'EYYNJYIOPTH8TBFNM408QEHWTF3IMKHDXHWJTKPO', 4);

insert into NEIGHBORHOOD (NEIGHBOR_ID, NEIGHBOR_NAME, INCOME, SCHOOL_DISTRICT, POPULATION_SIZE) values (0, '1F2XUKMOCQG5I4TGYDQY7OS63SPK5PI56T82GS7U', 2, 'KBK3CD17LSH8F1J 6PI9BL3UHI7N3G7MNDVHQA66', 1);

insert into NEIGHBORHOOD (NEIGHBOR_ID, NEIGHBOR_NAME, INCOME, SCHOOL_DISTRICT, POPULATION_SIZE) values (2, 'X8AP1L8TOP4SRFKV2W2QS9Y5KF4A2JKIPUH61THS', 4, '5JWIYUWJQPT36GYX2 12QHYPMX6BSRRQWM2K4BKU', 2);

insert into NEIGHBORHOOD (NEIGHBOR_ID, NEIGHBOR_NAME, INCOME, SCHOOL_DISTRICT, POPULATION_SIZE) values (3, 'C5SQTV4J08BR5I9UPCPMA U6 73NOQ5UJ26C25JU', 1, 'T1UA0QFRUXK7ABXRCPP27NUUV2KG JO35D6FRTL3', 3);

insert into NEIGHBORHOOD (NEIGHBOR_ID, NEIGHBOR_NAME, INCOME, SCHOOL_DISTRICT, POPULATION_SIZE) values (1, '1437R3L23YKMFGA53 8O2585R7TE4P3CRC78H 5L', 0, 'WBA9KSFNVQX8J3KG91JK2ROQX XDTV9L37L4RO X', 0);

insert into CUSTOMERS (CUSTOMER_ID, NAME, PHONE) values (1, 'V1L 8 7OUC0UUHU2PTN2XN5AABMBH834X9I3DGRP', 'XLTL14LGE0EN');

insert into CUSTOMERS (CUSTOMER_ID, NAME, PHONE) values (3, 'PL626FR3RJE9QXCFUNA66HVTA7GU12VJRJOP6C G', 'MWW3T2LRRDL5');

insert into CUSTOMERS (CUSTOMER_ID, NAME, PHONE) values (4, ' A7H2YGUNGD98WO91AS5N992AWFFE0M7XQ9NJ4GG', '30DW2OJMY6E ');

insert into CUSTOMERS (CUSTOMER_ID, NAME, PHONE) values (2, 'XGKYKIWRNX8L2CN2RH6UIKMDFQ9U7XA4UXGKH540', 'J66TKAOFCF3I');

insert into CUSTOMERS (CUSTOMER_ID, NAME, PHONE) values (0, 'W052QWNA2T8303 Q90GANYMMMY650KPNI7C 9XPW', 'ELADPKUU HMK');

insert into PROPERTY_TYPE (PROPERTY_TYPE_ID, TYPE) values (3, 'VKKBN5NPNDH 3XK4YIM8QY08QWOG P9LTHTMDCUW');

insert into PROPERTY_TYPE (PROPERTY_TYPE_ID, TYPE) values (2, '3IXA2R2NYV2UDO0PH  HGPNMVTL969RWBBNIOH3Y');

insert into PROPERTY_TYPE (PROPERTY_TYPE_ID, TYPE) values (0, 'SDGBP7XTMS9 3D2YP1TUCEEPIGXAJM 2EB7HOO5C');

insert into PROPERTY_TYPE (PROPERTY_TYPE_ID, TYPE) values (4, '1TMK5W2WP17IMTHIFOMBMVDKITFSP67U5 6KDPM3');

insert into PROPERTY_TYPE (PROPERTY_TYPE_ID, TYPE) values (1, 'D0VDJHQ9FA3ETD997C2DTJLM264DIALR4B9IXJPX');

insert into ADDRESS (ADDRESS_ID, ADDRESS, NEIGHBOR_ID) values (3, '8N8V3N SLVM59NROF47KSP46199SPPJ8ASIGE61L', 2);

insert into ADDRESS (ADDRESS_ID, ADDRESS, NEIGHBOR_ID) values (0, 'N6SIHC8P5N79L46A6JUIGVK 70RG2D5YWTV2FXKF', 4);

insert into ADDRESS (ADDRESS_ID, ADDRESS, NEIGHBOR_ID) values (4, 'ES27XBPVMJMNFP41KFRYEEWNVE4RY08K9TXH0D3I', 0);

insert into ADDRESS (ADDRESS_ID, ADDRESS, NEIGHBOR_ID) values (2, 'OB73SQE5RPFGO 5VUQORXMTPU1G58A54VYWU8DXM', 0);

insert into ADDRESS (ADDRESS_ID, ADDRESS, NEIGHBOR_ID) values (1, 'ARXJG25S3AN7S8WYFXQ789OIYRGKTSO08OPH80DH', 3);

insert into SELLER (CUSTOMER_ID) values (1);

insert into SELLER (CUSTOMER_ID) values (3);

insert into SELLER (CUSTOMER_ID) values (4);

insert into SELLER (CUSTOMER_ID) values (2);

insert into SELLER (CUSTOMER_ID) values (0);

insert into BUYERS (CUSTOMER_ID, CREDIT_SCORE) values (1, 0);

insert into BUYERS (CUSTOMER_ID, CREDIT_SCORE) values (3, 2);

insert into BUYERS (CUSTOMER_ID, CREDIT_SCORE) values (4, 1);

insert into BUYERS (CUSTOMER_ID, CREDIT_SCORE) values (2, 4);

insert into BUYERS (CUSTOMER_ID, CREDIT_SCORE) values (0, 3);

insert into HOUSE (HOUSE_ID, ADDRESS_ID, LISTING_DATE, LISTING_PRICE, SELLER_ID, REALTOR_ID, FLOOR_SPACE, PROPERTY_TYPE_ID) values (3, 1, '558-6-27', 4, 3, 0, 1, 3);

insert into HOUSE (HOUSE_ID, ADDRESS_ID, LISTING_DATE, LISTING_PRICE, SELLER_ID, REALTOR_ID, FLOOR_SPACE, PROPERTY_TYPE_ID) values (4, 3, '1414-9-5', 2, 1, 3, 4, 2);

insert into HOUSE (HOUSE_ID, ADDRESS_ID, LISTING_DATE, LISTING_PRICE, SELLER_ID, REALTOR_ID, FLOOR_SPACE, PROPERTY_TYPE_ID) values (2, 4, '1064-2-23', 1, 4, 2, 2, 0);

insert into HOUSE (HOUSE_ID, ADDRESS_ID, LISTING_DATE, LISTING_PRICE, SELLER_ID, REALTOR_ID, FLOOR_SPACE, PROPERTY_TYPE_ID) values (0, 4, '1-1-1', 3, 4, 4, 0, 2);

insert into HOUSE (HOUSE_ID, ADDRESS_ID, LISTING_DATE, LISTING_PRICE, SELLER_ID, REALTOR_ID, FLOOR_SPACE, PROPERTY_TYPE_ID) values (1, 2, '773-11-7', 0, 1, 4, 3, 2);

insert into PREVIOUS_OWNERS (HOUSE_ID, NAME, OWN_DATE) values (3, 'TBEUGE8 K20J05 EMETAX1152NQRC RVLHBMOK6185TUVDGE3780DMC1JA32XA M4XX9RJAQHTPX2XFNJ6GY1CQQRTMN0H3NFLLW94HP99KFL3HVNE6RG31HNWALLDSB2RL18U4X4DRQLNNH0QE1ORNUYA72F632AXCXLQ1N38BJ0L7CDC3SLF6QP1PTTSOBALXDTVYE46WJP903PK3B5BYUXOTYFIAE0IOFEKC ESNJW74CX85XQJ6DWH 971A', '1-1-1');

insert into PREVIOUS_OWNERS (HOUSE_ID, NAME, OWN_DATE) values (4, 'MOON6NAU5W3LCRUWLURCTMC3ODGBJAVT6JA2 7XJ3SYXQJTGKFU94ASB H1NUGG48JJCKGLN1P76Y2XJ1PHQ7GFLB68B8SWY FP76DD556WO6G5KH09XH4JTAMR37VHWN919MAW8M 17H1H VNEEYKWGOI9GUVY9GP2BF8T31NQL8UY56OE0A9NH4B3R3UBYILIUXH ASVUAGGR3H5GMPRUBX IYNH3TC5N714007BKBT3L6FQJKGXT0NM6 O86', '334-7-15');

insert into PREVIOUS_OWNERS (HOUSE_ID, NAME, OWN_DATE) values (2, 'LOFXUEX3SVL3NVX83R6GWB9V8EXSMXAY42OTR0HUGKLKEM9HN9NFVUW38O5UOXFR6 9UUQ983MY8V553BH4ALC3AXOUU66FP3HNVQ62MPE1 MR5B0HCCVIYLAMEH9LL 2GPMQCYX273C9X5AGRLW4W8K1AXDBN46S9BDBUXA6YFVSMSMWFPH6B0FQV1UORKEYES12AAMLQXCBTC0DKY89DOXKIX2C8E3I7XLW0PCVGOP7P2TPOKH6NNVCM6YHBP', '1457-7-24');

insert into PREVIOUS_OWNERS (HOUSE_ID, NAME, OWN_DATE) values (0, 'CX5E3L9FBX21VLEV2SUGMX8NRGINEISFRG2C9QVOBQQYLN7 Q2 34E8Q21UBK97J45VPBPQ5PK LE5TD0AY3FTLUAEG9Y6LOCMUIWIN KJ7YS5I01ES3JOC5CJGPTHTU66BV40VAOB1X1X9ROG7GWI1J9G8MVD6A27A6HVO3U9VM3OOEU11CF8E6NICUUJ94D3T1TDRTRDXBNKRRPU640CF56QON X  884K9JO961W9LPYHV9L7ESG27FI3CTP', '1233-12-14');

insert into PREVIOUS_OWNERS (HOUSE_ID, NAME, OWN_DATE) values (1, '1D H4TNCWWQBEKRTYD8K2331JMT17EFSM2MP HFHH0YBL850 JFP0JCR4SQV GSAKDI9 ODHK90KM03EVQ8NJ6GI4B10V11KUKMB8C6C 7WRYCUVFV F X5X 86WJV4M4PJ994S8UKHOWQX02JH7P1W6DJOHLA4BAB 75TUGYMNDTP3FBX52FNWCNTJBHT0OFMMT9LRF2FG54N0YSUW5ALY079BKG71KBWFQE4H70H5MJ8YTFNF0UM5QC 8QVY4', '841-6-25');

insert into CONTAINS_HISTORY_TRANSACTIONS (TRANSACTION_ID, YEAR, PRICE, HOUSE_ID) values (1, 1, 0, 0);

insert into CONTAINS_HISTORY_TRANSACTIONS (TRANSACTION_ID, YEAR, PRICE, HOUSE_ID) values (3, 0, 1, 3);

insert into CONTAINS_HISTORY_TRANSACTIONS (TRANSACTION_ID, YEAR, PRICE, HOUSE_ID) values (0, 3, 2, 2);

insert into CONTAINS_HISTORY_TRANSACTIONS (TRANSACTION_ID, YEAR, PRICE, HOUSE_ID) values (4, 2, 3, 2);

insert into CONTAINS_HISTORY_TRANSACTIONS (TRANSACTION_ID, YEAR, PRICE, HOUSE_ID) values (2, 4, 4, 4);

insert into OFFER_CONTRACT (CONTRACT_ID, BUYER_ID, HOUSE_ID, CONTRACT_DATE, PRICE) values (3, 1, 3, '1-1-1', 2);

insert into OFFER_CONTRACT (CONTRACT_ID, BUYER_ID, HOUSE_ID, CONTRACT_DATE, PRICE) values (4, 3, 4, '319-11-24', 0);

insert into OFFER_CONTRACT (CONTRACT_ID, BUYER_ID, HOUSE_ID, CONTRACT_DATE, PRICE) values (2, 4, 2, '794-3-11', 1);

insert into OFFER_CONTRACT (CONTRACT_ID, BUYER_ID, HOUSE_ID, CONTRACT_DATE, PRICE) values (1, 2, 0, '1579-7-13', 4);

insert into OFFER_CONTRACT (CONTRACT_ID, BUYER_ID, HOUSE_ID, CONTRACT_DATE, PRICE) values (0, 0, 1, '1324-10-30', 3);

insert into HOUSE_INSPECTION (INSPECTION_ID, INSPECTED_DATE, BUYER_ID, HOUSE_ID, INSPECTOR_ID) values (4, '552-4-19', 3, 4, 1);

insert into HOUSE_INSPECTION (INSPECTION_ID, INSPECTED_DATE, BUYER_ID, HOUSE_ID, INSPECTOR_ID) values (3, '1-1-1', 3, 4, 4);

insert into HOUSE_INSPECTION (INSPECTION_ID, INSPECTED_DATE, BUYER_ID, HOUSE_ID, INSPECTOR_ID) values (1, '342-3-14', 2, 2, 3);

insert into HOUSE_INSPECTION (INSPECTION_ID, INSPECTED_DATE, BUYER_ID, HOUSE_ID, INSPECTOR_ID) values (2, '898-6-14', 1, 4, 2);

insert into HOUSE_INSPECTION (INSPECTION_ID, INSPECTED_DATE, BUYER_ID, HOUSE_ID, INSPECTOR_ID) values (0, '1328-3-20', 1, 4, 0);

insert into INSPECTION_RESULT (INSPECTION_ID, RESULT) values (4, 'FOHMEX6 8WJYM LGDNMMJR4XQVCDK9PH8MYJV 42 ODPO00 83YLI8X1J070L WUKACJL0RF62HCLOHXLFE5EG8J3U T0NTPLNA867YP4EV95TP53NSDFX 5M97DTWWCCAN6A3SK8LLM581JD6P3E1K1NSMKU7YAAUAGC AU6HW98Q3ECO56KU03OREH58BB3NBYNF92RA7PQ5KUPX G2CIBREJLRXQPDIUOKF9COVMUN52YSKB9V6O5K1GFE7Y');

insert into INSPECTION_RESULT (INSPECTION_ID, RESULT) values (3, '9OH6DF01LVE0H5S5H5IDNF8COGD964E3M2XHK5GUDEG4Y0TK4BT4M0KVFPGEADS5MCWBWD0OR2Q7EDIYYAB8PLF58UXVK221GPGR989XJUM76VDDUYLCK8ALR YAS KPD0Y33 VGRFO1PX 0VVBJ4B R7TC1 KNE N8XHXXQMWRKI0 7NY6P69UA5SGKHXGO58YM22YJA8Y688FPR2BRV9G3HLVQ 8ETLAO2L5AO94NRYRCTK7K7OQCT9U564X6');

insert into INSPECTION_RESULT (INSPECTION_ID, RESULT) values (1, 'B59N212 HLFIC2L979KYUOWCDVOKSBQ41A07O8D4P0H6ABCLSEBX327JO4EC75P623JG1I3QD3E41VVA2X6NXRPB7U8CRJNR4U6PERTMUQ8F6XRHMU1JR1XQ70CXU37G9PVS3 JUOE61YYFGVO9U3K51PFDFF9J6MD7ESYB3T M2JC8CM2Q74TE7H677Q 1AP4OP2NIAS4WL0YBWFTA21MC2WPJ2992W058II94780 YKNYF1KYTU5 SR6GPWC9');

insert into INSPECTION_RESULT (INSPECTION_ID, RESULT) values (2, '6T9FYW6X9T6XHHPY4A5X2R4BLYYTRHUB30R0OOAWBMNTVB1RAA2V29FYSDIYPL2GM84CLP7QGNAVXIG337HPMBAJWQGNRFS297IQCFCC5 YK7XP5BHIKA17YIW4B4BLRC8PAN8NF7RL507DC2WQQY43HRIIKQ42Y9N9YFDAYH8FCG2KSVE6YVDIIWWWCIDYQAVSWYDLHB4IQA721RBTVAL19EMYWF YKWSWXFCJOMUYS8CVQJEMY8U2TPWFNGY7');

insert into INSPECTION_RESULT (INSPECTION_ID, RESULT) values (0, '7S4 P3WOHK15PI3HVI5 H0AGPWASWV0K4NBT9K 4MUYW7MBI3ANDU8L9UR34G0FREESEMQFJABC3G0W3IIG7CR181QWV9UYPPK2HLM N A80OH9QNLDVH3UY0VFFJI2AESAG5AM8MQE9SQ 0IKTF0IEV8WI3OCV2783EUFROFR0MX3FI6TVHEQ AGPKPFYMG1LG5EDHVINJATYBVKQT5X48NSXWPN4OASXLQ5G48U4YWDR1 EGWX535FS83RN0T');


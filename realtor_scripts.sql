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

insert into INSPECTORS (INSPECTOR_ID, INSPECTOR_PHONE, INSPECTOR_NAME, RATE) values (0, '604-111-2222', 'Jon Snow', 300);

insert into INSPECTORS (INSPECTOR_ID, INSPECTOR_PHONE, INSPECTOR_NAME, RATE) values (1, '604-222-2222', 'Arya Stark', 200);

insert into INSPECTORS (INSPECTOR_ID, INSPECTOR_PHONE, INSPECTOR_NAME, RATE) values (2, '604-111-3333', 'Tony Stark', 300);

insert into INSPECTORS (INSPECTOR_ID, INSPECTOR_PHONE, INSPECTOR_NAME, RATE) values (3, '604-000-2222', 'John Watson', 180);

insert into INSPECTORS (INSPECTOR_ID, INSPECTOR_PHONE, INSPECTOR_NAME, RATE) values (4, '604-111-4444', 'Mulan', 400);

insert into REALTOR (REALTOR_ID, NAME, PHONE) values (0, 'Sherlock Holmes', '778-000-3333');

insert into REALTOR (REALTOR_ID, NAME, PHONE) values (1, 'Dean Winchester', '778-100-5555');

insert into REALTOR (REALTOR_ID, NAME, PHONE) values (2, 'Sam Winchester', '778-999-6666');

insert into REALTOR (REALTOR_ID, NAME, PHONE) values (3, 'Hank Anderson', '778-777-8888');

insert into REALTOR (REALTOR_ID, NAME, PHONE) values (4, 'Steve Rogers', '778-123-4567');

insert into NEIGHBORHOOD (NEIGHBOR_ID, NEIGHBOR_NAME, INCOME, SCHOOL_DISTRICT, POPULATION_SIZE) values (0, 'Downtown', 800000, 'District 11', 581000);

insert into NEIGHBORHOOD (NEIGHBOR_ID, NEIGHBOR_NAME, INCOME, SCHOOL_DISTRICT, POPULATION_SIZE) values (1, 'University', 500000, 'District 13', 181000);

insert into NEIGHBORHOOD (NEIGHBOR_ID, NEIGHBOR_NAME, INCOME, SCHOOL_DISTRICT, POPULATION_SIZE) values (2, 'Yaletown', 600000, 'District 17', 81000);

insert into NEIGHBORHOOD (NEIGHBOR_ID, NEIGHBOR_NAME, INCOME, SCHOOL_DISTRICT, POPULATION_SIZE) values (3, 'Kerrisdale', 700000, 'District 19', 282000);

insert into NEIGHBORHOOD (NEIGHBOR_ID, NEIGHBOR_NAME, INCOME, SCHOOL_DISTRICT, POPULATION_SIZE) values (4, 'Cambie', 100000, 'District 23', 123000);

insert into NEIGHBORHOOD (NEIGHBOR_ID, NEIGHBOR_NAME, INCOME, SCHOOL_DISTRICT, POPULATION_SIZE) values (5, 'Victoria', 80000, 'District 29', 393000);

insert into NEIGHBORHOOD (NEIGHBOR_ID, NEIGHBOR_NAME, INCOME, SCHOOL_DISTRICT, POPULATION_SIZE) values (6, 'Grandview', 280000, 'District 29', 92000);

insert into NEIGHBORHOOD (NEIGHBOR_ID, NEIGHBOR_NAME, INCOME, SCHOOL_DISTRICT, POPULATION_SIZE) values (7, 'Marine', 180000, 'District 29', 92000);

insert into CUSTOMERS (CUSTOMER_ID, NAME, PHONE) values (0, 'Bruce Wayne', '416-000-1111');

insert into CUSTOMERS (CUSTOMER_ID, NAME, PHONE) values (1, 'Clint Barton', '416-000-1111');

insert into CUSTOMERS (CUSTOMER_ID, NAME, PHONE) values (2, 'Peter Parker', '416-000-2222');

insert into CUSTOMERS (CUSTOMER_ID, NAME, PHONE) values (3, 'Bruce Banner', '416-3333-4444');

insert into CUSTOMERS (CUSTOMER_ID, NAME, PHONE) values (4, 'Wonder Girl', '416-666-7777');

insert into CUSTOMERS (CUSTOMER_ID, NAME, PHONE) values (5, 'Alfred Wayne', '605-000-1133');

insert into CUSTOMERS (CUSTOMER_ID, NAME, PHONE) values (6, 'Lisa Barton', '605-000-1199');

insert into CUSTOMERS (CUSTOMER_ID, NAME, PHONE) values (7, 'James Parker', '605-000-0022');

insert into CUSTOMERS (CUSTOMER_ID, NAME, PHONE) values (8, 'Allen Banner', '605-3333-1144');

insert into CUSTOMERS (CUSTOMER_ID, NAME, PHONE) values (9, 'Natasha Girl', '605-666-2277');

insert into SELLER (CUSTOMER_ID) values (0);

insert into SELLER (CUSTOMER_ID) values (1);

insert into SELLER (CUSTOMER_ID) values (2);

insert into SELLER (CUSTOMER_ID) values (3);

insert into SELLER (CUSTOMER_ID) values (4);

insert into BUYERS (CUSTOMER_ID, CREDIT_SCORE) values (5, 99);

insert into BUYERS (CUSTOMER_ID, CREDIT_SCORE) values (6, 90);

insert into BUYERS (CUSTOMER_ID, CREDIT_SCORE) values (7, 40);

insert into BUYERS (CUSTOMER_ID, CREDIT_SCORE) values (8, 77);

insert into BUYERS (CUSTOMER_ID, CREDIT_SCORE) values (9, 60);

insert into PROPERTY_TYPE (PROPERTY_TYPE_ID, TYPE) values (0, 'Apartment');

insert into PROPERTY_TYPE (PROPERTY_TYPE_ID, TYPE) values (1, 'Condo');

insert into PROPERTY_TYPE (PROPERTY_TYPE_ID, TYPE) values (2, 'Townhouse');

insert into PROPERTY_TYPE (PROPERTY_TYPE_ID, TYPE) values (3, 'Bungalow');

insert into PROPERTY_TYPE (PROPERTY_TYPE_ID, TYPE) values (4, 'Mansion');

insert into ADDRESS (ADDRESS_ID, ADDRESS, NEIGHBOR_ID) values (0, '2728 Parker Street, Vancouver, BC', 2);

insert into ADDRESS (ADDRESS_ID, ADDRESS, NEIGHBOR_ID) values (1, '119-3163 Riverwalk Avenue, Vancouver, BC ', 7);

insert into ADDRESS (ADDRESS_ID, ADDRESS, NEIGHBOR_ID) values (2, '1002-5838 Berton Avenue, Vancouver BC', 1);

insert into ADDRESS (ADDRESS_ID, ADDRESS, NEIGHBOR_ID) values (3, '805-1050 Burrard Street, Vancouver BC', 0);

insert into ADDRESS (ADDRESS_ID, ADDRESS, NEIGHBOR_ID) values (4, '2906-602 Citadel Parade, Vancouver BC', 0);

insert into ADDRESS (ADDRESS_ID, ADDRESS, NEIGHBOR_ID) values (5, '901-930 Cambie Street Vancouver BC', 2);

insert into ADDRESS (ADDRESS_ID, ADDRESS, NEIGHBOR_ID) values (6, '40th Avenue W, Vancouver BC', 4);

insert into ADDRESS (ADDRESS_ID, ADDRESS, NEIGHBOR_ID) values (7, '4132 Beatrice Street, Vancouver, BC', 5);

insert into ADDRESS (ADDRESS_ID, ADDRESS, NEIGHBOR_ID) values (8, '151 41st Avenue W Vancouver', 3);

insert into ADDRESS (ADDRESS_ID, ADDRESS, NEIGHBOR_ID) values (9, '2148 Venables Street, Vancouver, BC', 6);

insert into HOUSE (HOUSE_ID, ADDRESS_ID, LISTING_DATE, LISTING_PRICE, SELLER_ID, REALTOR_ID, FLOOR_SPACE, PROPERTY_TYPE_ID) 
      values (0, 0, '2019-6-27', 1799000, 0, 0, 1844, 4);

insert into HOUSE (HOUSE_ID, ADDRESS_ID, LISTING_DATE, LISTING_PRICE, SELLER_ID, REALTOR_ID, FLOOR_SPACE, PROPERTY_TYPE_ID) 
      values (1, 1, '2019-9-5', 579900, 1, 1, 775, 1);

insert into HOUSE (HOUSE_ID, ADDRESS_ID, LISTING_DATE, LISTING_PRICE, SELLER_ID, REALTOR_ID, FLOOR_SPACE, PROPERTY_TYPE_ID) 
      values (2, 2, '2019-2-23', 1890000, 4, 2, 1657, 4);

insert into HOUSE (HOUSE_ID, ADDRESS_ID, LISTING_DATE, LISTING_PRICE, SELLER_ID, REALTOR_ID, FLOOR_SPACE, PROPERTY_TYPE_ID) 
      values (3, 3, '2020-1-1', 734000, 3, 1, 703, 0);

insert into HOUSE (HOUSE_ID, ADDRESS_ID, LISTING_DATE, LISTING_PRICE, SELLER_ID, REALTOR_ID, FLOOR_SPACE, PROPERTY_TYPE_ID) 
      values (4, 4, '2019-12-22', 899900, 2, 4, 810, 1);

insert into HOUSE (HOUSE_ID, ADDRESS_ID, LISTING_DATE, LISTING_PRICE, SELLER_ID, REALTOR_ID, FLOOR_SPACE, PROPERTY_TYPE_ID) 
      values (5, 5, '2019-11-9', 920000, 2, 1, 1105, 2);

insert into HOUSE (HOUSE_ID, ADDRESS_ID, LISTING_DATE, LISTING_PRICE, SELLER_ID, REALTOR_ID, FLOOR_SPACE, PROPERTY_TYPE_ID) 
      values (6, 6, '2019-5-7', 980000, 3, 1, 1220, 3);

insert into HOUSE (HOUSE_ID, ADDRESS_ID, LISTING_DATE, LISTING_PRICE, SELLER_ID, REALTOR_ID, FLOOR_SPACE, PROPERTY_TYPE_ID) 
      values (7, 7, '2019-1-17', 1479000, 0, 3, 1494, 3);

insert into HOUSE (HOUSE_ID, ADDRESS_ID, LISTING_DATE, LISTING_PRICE, SELLER_ID, REALTOR_ID, FLOOR_SPACE, PROPERTY_TYPE_ID) 
      values (8, 8, '2019-3-7', 1225000, 4, 0, 1066, 1);

insert into HOUSE (HOUSE_ID, ADDRESS_ID, LISTING_DATE, LISTING_PRICE, SELLER_ID, REALTOR_ID, FLOOR_SPACE, PROPERTY_TYPE_ID) 
      values (9, 9, '2019-4-16', 1549000, 1, 1, 1578, 4);

insert into PREVIOUS_OWNERS (HOUSE_ID, NAME, OWN_DATE) values (3, 'Barry Allen', '2017-1-1');

insert into PREVIOUS_OWNERS (HOUSE_ID, NAME, OWN_DATE) values (4, 'Baby Doll', '2010-7-15');

insert into PREVIOUS_OWNERS (HOUSE_ID, NAME, OWN_DATE) values (2, 'Cracker Bain', '2002-7-24');

insert into PREVIOUS_OWNERS (HOUSE_ID, NAME, OWN_DATE) values (0, 'Ellen Baker', '2018-12-14');

insert into PREVIOUS_OWNERS (HOUSE_ID, NAME, OWN_DATE) values (1, 'Mary Batson', '841-6-25');

insert into PREVIOUS_OWNERS (HOUSE_ID, NAME, OWN_DATE) values (2, 'Harley Quinn', '2009-8-24');

insert into CONTAINS_HISTORY_TRANSACTIONS (TRANSACTION_ID, YEAR, PRICE, HOUSE_ID) values (0, 2002, 660666, 2);

insert into CONTAINS_HISTORY_TRANSACTIONS (TRANSACTION_ID, YEAR, PRICE, HOUSE_ID) values (1, 2018, 2200111, 0);

insert into CONTAINS_HISTORY_TRANSACTIONS (TRANSACTION_ID, YEAR, PRICE, HOUSE_ID) values (2, 2010, 1009028, 4);

insert into CONTAINS_HISTORY_TRANSACTIONS (TRANSACTION_ID, YEAR, PRICE, HOUSE_ID) values (3, 2017, 790999, 3);

insert into CONTAINS_HISTORY_TRANSACTIONS (TRANSACTION_ID, YEAR, PRICE, HOUSE_ID) values (4, 2009, 990002, 2);

insert into CONTAINS_HISTORY_TRANSACTIONS (TRANSACTION_ID, YEAR, PRICE, HOUSE_ID) values (5, 2012, 340111, 1);

insert into OFFER_CONTRACT (CONTRACT_ID, BUYER_ID, HOUSE_ID, CONTRACT_DATE, PRICE) values (0, 5, 0, '2020-10-30', 1599000);

insert into OFFER_CONTRACT (CONTRACT_ID, BUYER_ID, HOUSE_ID, CONTRACT_DATE, PRICE) values (1, 5, 1, '2020-7-13', 479900);

insert into OFFER_CONTRACT (CONTRACT_ID, BUYER_ID, HOUSE_ID, CONTRACT_DATE, PRICE) values (2, 9, 2, '2020-3-11', 1990000);

insert into OFFER_CONTRACT (CONTRACT_ID, BUYER_ID, HOUSE_ID, CONTRACT_DATE, PRICE) values (3, 6, 3, '2020-12-1', 704000);

insert into OFFER_CONTRACT (CONTRACT_ID, BUYER_ID, HOUSE_ID, CONTRACT_DATE, PRICE) values (4, 7, 4, '2020-1-24', 90000);

insert into OFFER_CONTRACT (CONTRACT_ID, BUYER_ID, HOUSE_ID, CONTRACT_DATE, PRICE) values (5, 8, 5, '2020-3-24', 910000);

insert into OFFER_CONTRACT (CONTRACT_ID, BUYER_ID, HOUSE_ID, CONTRACT_DATE, PRICE) values (6, 9, 6, '2020-6-2', 900000);

insert into OFFER_CONTRACT (CONTRACT_ID, BUYER_ID, HOUSE_ID, CONTRACT_DATE, PRICE) values (7, 9, 7, '2020-7-14', 1460000);

insert into OFFER_CONTRACT (CONTRACT_ID, BUYER_ID, HOUSE_ID, CONTRACT_DATE, PRICE) values (8, 6, 8, '2020-9-4', 1220000);

insert into OFFER_CONTRACT (CONTRACT_ID, BUYER_ID, HOUSE_ID, CONTRACT_DATE, PRICE) values (9, 6, 9, '2020-11-2', 1555000);

insert into HOUSE_INSPECTION (INSPECTION_ID, INSPECTED_DATE, BUYER_ID, HOUSE_ID, INSPECTOR_ID) values (4, '2019-4-19', 6, 4, 1);

insert into HOUSE_INSPECTION (INSPECTION_ID, INSPECTED_DATE, BUYER_ID, HOUSE_ID, INSPECTOR_ID) values (3, '2019-1-1', 7, 4, 4);

insert into HOUSE_INSPECTION (INSPECTION_ID, INSPECTED_DATE, BUYER_ID, HOUSE_ID, INSPECTOR_ID) values (1, '2019-3-14', 8, 2, 3);

insert into HOUSE_INSPECTION (INSPECTION_ID, INSPECTED_DATE, BUYER_ID, HOUSE_ID, INSPECTOR_ID) values (2, '2019-6-14', 9, 4, 2);

insert into HOUSE_INSPECTION (INSPECTION_ID, INSPECTED_DATE, BUYER_ID, HOUSE_ID, INSPECTOR_ID) values (0, '2019-3-20', 5, 4, 0);

insert into INSPECTION_RESULT (INSPECTION_ID, RESULT) values (4, 'PASS');

insert into INSPECTION_RESULT (INSPECTION_ID, RESULT) values (3, 'CONDITIONAL PASS');

insert into INSPECTION_RESULT (INSPECTION_ID, RESULT) values (1, 'NEEDs RENOVATION');

insert into INSPECTION_RESULT (INSPECTION_ID, RESULT) values (2, 'FAIL');

insert into INSPECTION_RESULT (INSPECTION_ID, RESULT) values (0, 'PASS');


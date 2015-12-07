/*
Navicat MySQL Data Transfer

Source Server         : my
Source Server Version : 50708
Source Host           : localhost:3306
Source Database       : biantara

Target Server Type    : MYSQL
Target Server Version : 50708
File Encoding         : 65001

Date: 2015-10-16 22:01:55
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for clients
-- ----------------------------
DROP TABLE IF EXISTS `clients`;
CREATE TABLE `clients` (
  `id` int(11) NOT NULL,
  `unique_id` varchar(50) DEFAULT NULL,
  `client_name` varchar(100) DEFAULT NULL,
  `patner` varchar(100) DEFAULT NULL,
  `start_date` datetime DEFAULT CURRENT_TIMESTAMP,
  `end_date` date DEFAULT NULL,
  `contact_person1` varchar(100) DEFAULT NULL,
  `contact_number1` varchar(100) DEFAULT NULL,
  `contact_name2` varchar(100) DEFAULT NULL,
  `contact_number2` varchar(100) DEFAULT NULL,
  `business_ector` varchar(255) DEFAULT NULL,
  `status` enum('Active','Inactive') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of clients
-- ----------------------------
INSERT INTO `clients` VALUES ('1', null, 'Abhitech Matra Indah, PT', null, '2014-10-01 00:00:00', '0000-00-00', 'Mrs. Yulia', '021 - 640 08 05', 'Mr. Rudi H', '021 - 640 09 04', 'Service Oil & Gas Company', 'Active');
INSERT INTO `clients` VALUES ('2', null, 'ABM Investama, PT', null, '2011-03-01 00:00:00', '0000-00-00', 'Mr. Erie Pane', '021 - 2997 6767', null, null, 'Holding Compny Energy Related', 'Active');
INSERT INTO `clients` VALUES ('3', '', 'Ace Ina Insurance, PT', '', '2012-11-01 00:00:00', '0000-00-00', 'Mrs. Dessy', '+65 685 451 96', '', '', 'Insurance Company', 'Active');
INSERT INTO `clients` VALUES ('4', null, 'Aero Flayer Institute', null, '2015-08-11 00:00:00', '0000-00-00', 'Mr. Catur', '021 - 351 12 61', 'Mr. Ba’im', '021 - 351 12 64', 'Instutute Aviasion', null);
INSERT INTO `clients` VALUES ('5', null, 'Alfa  Retailindo, PT, Tbk', null, '2010-03-01 00:00:00', '0000-00-00', 'Mrs. Joyce', '021 - 2758 58 00', null, null, 'Trading Company', null);
INSERT INTO `clients` VALUES ('6', null, 'Alfa Trans Raya, PT', null, '2013-03-01 00:00:00', '0000-00-00', 'Mr. Dwimas', '021 - 299 766 73', 'Ms. Puspita Rini', '021 - 219 935 435', 'Shipping Company', null);
INSERT INTO `clients` VALUES ('7', null, 'Alfindo sumber Mkmur, PT', null, '2014-03-01 00:00:00', '0000-00-00', 'Mr. Nanag', '021 - 5573 1597', null, '021 - 5573 1595', 'Trading Company', null);
INSERT INTO `clients` VALUES ('8', null, 'AmCham Indonesia', null, '2014-11-01 00:00:00', '0000-00-00', 'Mrs. Sarah Howe', '021 - 526 28 60', 'Mrs. Vita Antasari', '021 - 526 28 61', 'The American Chamber of Commerce Indonesia (Kamar Dagang Amerika di Indonesia)', null);
INSERT INTO `clients` VALUES ('9', null, 'Amcor Flexibles Indonesia, PT', null, '2015-09-15 00:00:00', '0000-00-00', 'Mrs. Pricilla Jatmiko', 'Priscilla@psop.co', null, 'Pricilla.jatmiko@live.com', 'Plastics Industrie Company', null);
INSERT INTO `clients` VALUES ('10', null, 'AMEC Berca Indonesia, PT', null, '2015-07-01 00:00:00', '0000-00-00', 'Mrs. Medi', '021 315 90 40', null, null, 'Construction Services Company', null);
INSERT INTO `clients` VALUES ('11', null, 'Anadarko Indonesia Nunukan Company', null, '2011-01-01 00:00:00', '0000-00-00', 'Mrs. Dwi S', '021 - 300 61 679', 'Mrs. Lieke S', null, 'Oil & Gas Company', null);
INSERT INTO `clients` VALUES ('12', null, 'Anggun Permai Tekindo, PT', null, '2015-04-01 00:00:00', '0000-00-00', 'Mrs. Ayu Prafitri', '021-2221-0471 ', null, '021-2221-0472', 'Coal & Mining Services Company', null);
INSERT INTO `clients` VALUES ('13', null, 'Aon Indonesia, PT', null, '2015-03-01 00:00:00', '0000-00-00', 'Mrs. Hani S ', '021 - 298 585 00', 'Ms. Jodia Pravitadini ', '021 – 529 717 94', 'Insurance Company', null);
INSERT INTO `clients` VALUES ('14', null, 'Arlie Labora Utama, PT', null, '2011-12-01 00:00:00', '0000-00-00', 'Mr. Don Bosco', '021 - 791 903 57', null, '021 - 790 13 21', 'Counsultant Manpower Services', null);
INSERT INTO `clients` VALUES ('15', null, 'Armada Johnson Controls, PT', null, '2012-01-01 00:00:00', '0000-00-00', 'Mrs. Eki Nurwidyastuti', '+65 685 49340', null, null, 'Industri Perlengkapan Otomotive Roda 4 atau Lebih', null);
INSERT INTO `clients` VALUES ('16', null, 'Ascena Global Sourcing Hongkong Limited ', 'SSEK', '2015-03-01 00:00:00', '0000-00-00', 'Mr. Stephen Igor Waroka ', '021 - 295 32 000', null, '021 - 521 50 38', 'Trading Company', null);
INSERT INTO `clients` VALUES ('17', null, 'Astari Niagara Internasional, PT', null, '2014-09-01 00:00:00', '0000-00-00', 'Mrs. Arline Lukito', '021 - 300 600 80 ', null, null, 'Trading Company', null);
INSERT INTO `clients` VALUES ('18', null, 'Astra Juoku Indonesia, PT', null, '2012-10-01 00:00:00', '0000-00-00', 'Mr. Ichsantirta', '021 - 2998 1188', null, null, null, null);
INSERT INTO `clients` VALUES ('19', null, 'Astra Otoparts, PT, Tbk', null, '2011-07-01 00:00:00', '0000-00-00', 'Mr. Heryadi', '021 - 460 35 50', null, '021 - 460 35 49', 'Trading  Spare Part Otomotive', null);
INSERT INTO `clients` VALUES ('20', null, 'Astra Visteon Indonesia, PT', null, '2011-06-01 00:00:00', '0000-00-00', 'Mr. Adi', '021 - 879 19 130', null, null, 'Manufacturing', null);
INSERT INTO `clients` VALUES ('21', null, 'Asuransi Allianz Life Indonesia, PT', null, '2013-07-01 00:00:00', '0000-00-00', 'Mrs. Kiswati S', '021 - 292 688 88', 'Mrs. Dini Febriani', '021 - 292 680 80  ', 'Insurance Company', null);
INSERT INTO `clients` VALUES ('22', null, 'Asuransi Allianz Utama Indonesia, PT', null, '2013-07-01 00:00:00', '0000-00-00', 'Mrs. Kiswati S', '021 - 292 688 88', 'Mrs. Dini Febriani', '021 - 292 680 80', 'Insurance Company', null);
INSERT INTO `clients` VALUES ('23', null, 'Asuransi Jaya Proteksi, PT', null, '2012-11-01 00:00:00', '0000-00-00', 'Mrs. Dessy', '+65 685 451 96', null, null, 'Insurance Company', null);
INSERT INTO `clients` VALUES ('24', null, 'Atri Pasifik, PT', null, '2011-12-01 00:00:00', '0000-00-00', 'Mr. Hendra Kusuma', '021 - 5548 103', null, null, 'Trading Company', null);
INSERT INTO `clients` VALUES ('25', null, 'Atlas Copco Nusantara, PT', null, '2012-12-01 00:00:00', '0000-00-00', 'Mrs. Angki L M', '021 - 789 05 50', 'Mrs. Ndari Aprilia', '021 - 789 05 49', 'Engineering & Construction', null);
INSERT INTO `clients` VALUES ('26', null, 'Baruna Dirga Dharma, PT', null, '2013-03-01 00:00:00', '0000-00-00', 'Mr. Dwimas', '021 - 299 766 73', 'Ms. Puspita Rini', '021 - 219 935 435', 'Shipping Company', null);
INSERT INTO `clients` VALUES ('27', null, 'BGP Indonesia, PT', null, '2015-05-01 00:00:00', '0000-00-00', 'Mrs. Natalina ', '021 522 99 48', 'Mrs. Jemima B', null, 'Service Oil Company', null);
INSERT INTO `clients` VALUES ('28', null, 'Billiton Indonesia, PT', 'Deloitte', '2015-04-01 00:00:00', '0000-00-00', 'Mr. Arbytia', '021 - 2992 3100', 'Mr. Defryzal', '021 - 2992 8022', 'Mining Company', null);
INSERT INTO `clients` VALUES ('29', null, 'Biomerieux Singapore Pte Ltd', null, '2014-07-01 00:00:00', '0000-00-00', 'Mr. Lukas Q', '021 - 461 51 11', 'Mrs. Sri Sudarsih', '021 - 460 41 07', 'Trading Company Representative Office', null);
INSERT INTO `clients` VALUES ('30', null, 'BT Communications Indonesia, PT', null, '2014-01-01 00:00:00', '0000-00-00', 'Mrs. Shelly', '6568549347', null, '021 - 2934 9800', 'Trading Company', null);
INSERT INTO `clients` VALUES ('31', null, 'Cairnhill Serviech Inti, PT', null, '2014-10-01 00:00:00', '0000-00-00', 'Mrs. Fitri Aisyani', '021 - 8990 9127', null, '021 - 8977 3263', 'Trading Company', null);
INSERT INTO `clients` VALUES ('32', null, 'Capital Engineering & Research Incorporation Limited', 'Hanafiah Ponggawa & Partner’s', '2014-08-01 00:00:00', '0000-00-00', 'Mr. Rucci', '021 - 570 18 37', null, '021 - 570 18 35', 'Konsultan Konstruksi', null);
INSERT INTO `clients` VALUES ('33', null, 'Caraka Tirta Prtama, PT', null, '2013-03-01 00:00:00', '0000-00-00', 'Mr. Dado', '021 - 6922523', null, null, null, null);
INSERT INTO `clients` VALUES ('34', null, 'Carrefour Indonesia, PT', 'Trans Retail Indonesia', '2010-04-01 00:00:00', '0000-00-00', 'Mrs. Putri', '021 - 275 85 800', null, null, 'Trading Company', null);
INSERT INTO `clients` VALUES ('35', null, 'Cladtek BI Metal Manufacturing, PT', null, '2014-04-01 00:00:00', '0000-00-00', 'Mrs. Veliana Susandra', '0778 - 413 808', null, '0778 - 413 31 68', 'Manufacturing Company', null);
INSERT INTO `clients` VALUES ('36', null, 'Cipta Krida Bahari, PT', null, '2013-03-01 00:00:00', '0000-00-00', 'Ms. Opin', '021 - 299 766 73', 'Mr. Dwimas', '021 - 219 935 435', 'Shipping Company', null);
INSERT INTO `clients` VALUES ('37', null, 'Citic  Seram Energy Ltd', null, '2012-05-01 00:00:00', '0000-00-00', 'Mr. Iyan F.', '021 - 766 28 40', 'Mr. Agus H.', '021 - 766 28 45', 'Oil & Gas Company', null);
INSERT INTO `clients` VALUES ('38', null, 'Colgate Palmolive Indonesia, PT', null, '2013-03-01 00:00:00', '0000-00-00', 'Mrs. Shelly', '+65 685 49347', null, null, 'Trading Company', null);
INSERT INTO `clients` VALUES ('39', null, 'Combi Box Systems AB, PT', null, '2012-03-01 00:00:00', '0000-00-00', 'Mrs. Ita', '0813 1859 9913', 'Mrs. Linda', '0811 95 63 45', 'Trading Company', null);
INSERT INTO `clients` VALUES ('40', null, 'Commerzbank AG', null, '2015-03-01 00:00:00', '0000-00-00', 'Mrs. Lorenda', '021 - 572 71 18', null, '021 – 574 06 80', 'Lembaga Keuangan & Jasa Perbankan', null);
INSERT INTO `clients` VALUES ('41', null, 'Commonwealth Bank, PT', null, '2010-06-01 00:00:00', '0000-00-00', 'Mr. Rifat L', '021 - 528 98 940', 'Mr. Yosep Ahmar', '021 - 529 61 222', 'Perbankan', null);
INSERT INTO `clients` VALUES ('42', null, 'Commodities Indonesia Jaya, PT', null, '2012-05-01 00:00:00', '0000-00-00', 'Mrs. Anna', '021 - 279 358 00', null, '021 - 279 358 01', 'Palm Oil Company', null);
INSERT INTO `clients` VALUES ('43', null, 'Prabu Budi Mulia, PT', 'Crown Plaza Hotel', '2014-04-01 00:00:00', '0000-00-00', 'Mrs. Nidya', '021 - 526 68 65', null, '021 - 522 42 59', 'Development Perhotelan', null);
INSERT INTO `clients` VALUES ('44', null, 'CTI Engineering Pte Ltd', null, '2011-07-01 00:00:00', '0000-00-00', 'Mr. Hitomi', '021 - 720 40 90', null, null, 'Trading Representative Office', null);
INSERT INTO `clients` VALUES ('45', null, 'Cytec Indonesia, PT', null, '2014-06-01 00:00:00', '0000-00-00', 'Mr. Bara D', '021 - 2992 7892', null, '021 - 2993 0888', 'Trading Company', null);
INSERT INTO `clients` VALUES ('46', null, 'Dairi Prima Mineral, PT', null, '2015-04-10 00:00:00', '0000-00-00', 'Mrs. Henny S', '021 - 290 69 407', 'Mrs. Wansian', null, 'Mining Company', null);
INSERT INTO `clients` VALUES ('47', null, 'Deloitte Consulting, PT', null, '2014-07-01 00:00:00', '0000-00-00', 'Mr. Arbyt', '021 - 2992 3100', 'Mrs. Conie', '021 - 2992 8022', 'Counsultant Manpower Services', null);
INSERT INTO `clients` VALUES ('48', null, 'Deloitte Tax Solutions', null, '2014-07-01 00:00:00', '0000-00-00', 'Mr. Arbyt', '021 - 2992 3100', 'Mrs. Connie', '021 - 2992 8022', 'Tax Counsultant', null);
INSERT INTO `clients` VALUES ('49', null, 'Dipo Star Finance, PT', null, '2011-07-01 00:00:00', '0000-00-00', 'Sudarman', '021 - 579 54 100', 'M. Gustiawan', '021 - 579 54 099', 'Pembiayaan', null);
INSERT INTO `clients` VALUES ('50', null, 'Donggi Senoro LNG, PT', null, '2010-06-01 00:00:00', '0000-00-00', 'Mrs. Yanetta', '021 - 579 541 40', null, null, 'Oil & Gas Company ', null);
INSERT INTO `clients` VALUES ('51', null, 'Dover Chemical, PT', null, '2014-01-01 00:00:00', '0000-00-00', 'Mr. Dade Suparna', '0254 - 571 064', null, '0254 - 571 224', 'Industrie Kimia', null);
INSERT INTO `clients` VALUES ('52', null, 'Dover International Operations Inc.', 'Deloitte', '2015-09-15 00:00:00', '0000-00-00', 'Mr. Defry', '021 - 2992 3100', 'Mr. Arbyt', '021 - 2992 8022', 'Representative Office Company', null);
INSERT INTO `clients` VALUES ('53', null, 'Dresser-Rand Services Indonesia, PT', 'Deloitte', '2015-06-15 00:00:00', '0000-00-00', 'Mr. Arbyt', '021 - 2992 3100', 'Mrs. Connie', '021 - 2992 8022', 'Industrie Complessor Mesin Uap', null);
INSERT INTO `clients` VALUES ('54', null, 'Ecart Services Indonesia, PT', null, '2012-07-01 00:00:00', '0000-00-00', 'Mrs. Jenny', '021 -  294 90 210', null, null, 'Trading Company', null);
INSERT INTO `clients` VALUES ('55', null, 'EJJV Consultancy Indonesia, PT', null, '2013-10-01 00:00:00', '0000-00-00', 'Mr. Irfan', '021 - 531 643 88', null, '021 - 531 643 89', 'Trading Company', null);
INSERT INTO `clients` VALUES ('56', null, 'EJJV Engineering Indonesia, PT', null, '2010-06-01 00:00:00', '0000-00-00', 'Mrs. Novi', '021 - 579 30 878', 'Mr. Ferza', null, 'Service Oil & Gas Company', null);
INSERT INTO `clients` VALUES ('57', null, 'Emerson Indonesia, PT', null, '2011-11-01 00:00:00', '0000-00-00', 'Mrs. Lalita', '021 - 251 3003', null, null, 'Trading Company', null);
INSERT INTO `clients` VALUES ('58', null, 'EPHINDO Energy Private Limited', null, '2012-08-01 00:00:00', '0000-00-00', 'Mrs. Bhara P', '021 - 526 74 80', null, '021 - 526 74 81', 'Oil & Gas Company', null);
INSERT INTO `clients` VALUES ('59', null, 'EPHINDO Mega Methana Inc', null, '2013-11-01 00:00:00', '0000-00-00', 'Mrs. Bhara P', '021 - 526 74 80', null, '021 - 526 74 81', 'Oil & Gas Company', null);
INSERT INTO `clients` VALUES ('60', null, 'Exterran Indonesia, PT', 'SSEK', '2014-01-01 00:00:00', '0000-00-00', 'Mrs. Florence', '021 - 521 20 38', null, '021 - 304 16 700', 'Service Oil & Gas Company', null);
INSERT INTO `clients` VALUES ('61', null, 'Fast Retailing Indonesia, PT', null, '2015-05-01 00:00:00', '0000-00-00', 'Mrs. Erika Lumunon', '021 - 252 65 30', null, '021 - 252 65 31', 'Trading Company', null);
INSERT INTO `clients` VALUES ('62', null, 'Fontera Brands Indonesia, PT', null, '2010-07-01 00:00:00', '0000-00-00', 'Mrs. Cicilia K', '021 - 828 18 81', null, null, 'Industrie Milk', null);
INSERT INTO `clients` VALUES ('63', null, 'Foster Oil & Energy Pte Ltd', null, '2012-05-01 00:00:00', '0000-00-00', 'Mr. Nico H', null, 'Mr. Tony', '021 - 828 18 81', 'Representative Office', null);
INSERT INTO `clients` VALUES ('64', null, 'Foster Weeler C & P Indonesia, PT', null, '2012-02-01 00:00:00', '0000-00-00', 'Mr. Karlman', '021 - 489 53 22', 'Mrs. Desira', '021 - 489 51 31', 'Service Oil & Gas Company', null);
INSERT INTO `clients` VALUES ('65', null, 'FIS Global, PT', null, '2015-03-01 00:00:00', '0000-00-00', 'Mrs. Ralita Purba', '021 - 255 557 59', null, null, 'Trading Company', null);
INSERT INTO `clients` VALUES ('66', null, 'FLSmidth Indonesia, PT', null, '2010-04-01 00:00:00', '0000-00-00', 'Mrs. Srie Yulianti', '021 - 251 27 38', null, null, 'Engineering & Construction Company', null);
INSERT INTO `clients` VALUES ('67', null, 'FMC Technologies Subsea Indonesia, PT', null, '2015-05-01 00:00:00', '0000-00-00', 'Mr. Yoga Wahyu Aditama', '021 296 57 410', null, null, 'Service Oil & Gas Company', null);
INSERT INTO `clients` VALUES ('68', null, 'Fragomen Singapore Pte Ltd', null, '2010-10-01 00:00:00', '0000-00-00', 'Mr. Mark B', '+65 6334 0766', 'Mr. Kenny L', null, 'Law Firm & Consultant Immigartion for Asia Pacific', null);
INSERT INTO `clients` VALUES ('69', null, 'FTI Consulting Indonesia, PT', null, '2014-05-01 00:00:00', '0000-00-00', 'Mrs. Restu Wijayani', '021 - 292 77 812', null, '021 - 292 77 811', 'Counsultant Manpower Services', null);
INSERT INTO `clients` VALUES ('70', null, 'Genting Oil Natuna, Pte Ltd', null, '2010-04-01 00:00:00', '0000-00-00', 'Mr. Anton W', '021 - 527 38 28', null, null, 'Oil & Gas Company', null);
INSERT INTO `clients` VALUES ('71', null, 'Genting Oil Kasuri, Pte Ltd', null, '2010-04-01 00:00:00', '0000-00-00', 'Mrs. Evie', '021 - 527 38 28', 'Mr. Anton W', null, 'Oil & Gas Company', null);
INSERT INTO `clients` VALUES ('72', null, 'Greatwall Drilling Company', null, '2015-04-01 00:00:00', '0000-00-00', 'Mrs. Ika Astia', '021 - 578 52 815', null, ' 021 -  578 52 814', 'Service Oil Company', null);
INSERT INTO `clients` VALUES ('73', null, 'Gresik Distribution Terminal, PT', null, '2011-04-01 00:00:00', '0000-00-00', 'Mr. M. Arya', '021 - 759 24 700', 'Mrs. Grace S', null, 'Trading Company', null);
INSERT INTO `clients` VALUES ('74', null, 'Hanafiah Ponggawa & Partners', null, '2010-03-01 00:00:00', '0000-00-00', 'Mr. Fabian Budi  Fascoal', '021 - 570 18 37', null, null, 'Law Firm', null);
INSERT INTO `clients` VALUES ('75', null, 'Hansa Meyer Global Transport GmbH & Co KG', null, '2010-11-01 00:00:00', '0000-00-00', 'Mrs. Mytha', '021 - 570 83 18', null, null, 'Trading Company', null);
INSERT INTO `clients` VALUES ('76', null, 'HaskoningDHV Nederland B V', null, '2015-09-15 00:00:00', '0000-00-00', 'Mrs. Martini', '021 - 750 46 05', null, '021 - 750 46 10', 'Construction Service Company', null);
INSERT INTO `clients` VALUES ('77', null, 'Haskoning Indonesia, PT ', null, '2015-09-15 00:00:00', '0000-00-00', 'Mrs. Martini', '021 - 750 46 05', '021 - 750 46 10', null, 'Construction Service Company', null);
INSERT INTO `clients` VALUES ('78', null, 'Henrison Inti Persada, PT', null, '2012-08-01 00:00:00', '0000-00-00', 'Mrs. Anna', '021 - 292 45 600', null, null, 'Trading Company', null);
INSERT INTO `clients` VALUES ('79', null, 'Hunters Kartan Utama, PT', null, '2010-09-01 00:00:00', '0000-00-00', 'Mrs. Annie', '021 - 6530 2634', null, null, 'Service Oil & Gas Company', null);
INSERT INTO `clients` VALUES ('80', null, 'Husky Anugerah Limited', null, '2014-09-01 00:00:00', '0000-00-00', 'Mrs. Mary', '021 - 293 55 800', 'Mrs. Tirza D', '021 - 299 500 09', 'Oil & Gas Company', null);
INSERT INTO `clients` VALUES ('81', null, 'Husky Injection Molding System Singapore, Pte Ltd', null, '2010-12-01 00:00:00', '0000-00-00', 'Mrs.Rina', '021 - 5761238', 'Mr. Arie Akwan', null, 'Representative Office', null);
INSERT INTO `clients` VALUES ('82', null, 'Husky Oil North Sumbawa Ltd', null, '2013-05-01 00:00:00', '0000-00-00', 'Mrs. Mary', '021 - 2995 00 48', 'Mrs. Tirza D', '021 - 2995 00 49', 'Oil & Gas Company', null);
INSERT INTO `clients` VALUES ('83', null, 'Ichi Tan Indonesia, PT', null, '2015-02-01 00:00:00', '0000-00-00', 'Mrs. Mecca', '021 - 5575 5951  ', null, '021 - 5575 5810 ', 'Industri Bumbu Masak & Minuman Ringan', null);
INSERT INTO `clients` VALUES ('84', null, 'IEM Industries Indonesia, PT', null, '2015-09-15 00:00:00', '0000-00-00', 'Mrs. Nikita', '021 - 292 22 999', null, '021 - 292 22 990 ', 'Industrie Macine Company', null);
INSERT INTO `clients` VALUES ('85', null, 'Idea Murni 9, PT', null, '2011-06-01 00:00:00', '0000-00-00', 'Mrs. Ika', '0813 1859 99 13', 'Mrs. Erna L.', null, 'Trading Company', null);
INSERT INTO `clients` VALUES ('86', null, 'Indosopha, PT', null, '2011-03-01 00:00:00', '0000-00-00', 'Mrs. Riondi', '0858 810 10 470', null, null, 'Trading Company', null);
INSERT INTO `clients` VALUES ('87', null, 'Japan Tobacco International Indonesia, PT', null, '2013-05-01 00:00:00', '0000-00-00', 'Mrs. Deasy Renita', '021 - 263 55 611', null, '021 - 294 00 007', 'Trading Company', null);
INSERT INTO `clients` VALUES ('88', null, 'Java Taiko Mineralindo, PT', null, '2015-03-01 00:00:00', '0000-00-00', 'Mrs. Riska', '0254 - 575 1268', '021 – 575 3366', null, 'Industrie Kimia', null);
INSERT INTO `clients` VALUES ('89', null, 'Jaya Mandarin Agung, PT ', 'Mandarin Oriental Jakarta Hotel', '2015-03-01 00:00:00', '0000-00-00', 'Mrs. Anike', '021 - 2993 8888', 'Mrs. Katharina P', '021 - 2993 8889', 'Development Perhotelan', null);
INSERT INTO `clients` VALUES ('90', null, 'Jaya Salvage Indonesia, PT', null, '2013-03-01 00:00:00', '0000-00-00', 'Mrs. Iffa', '031 - 7493702', null, null, 'Shipping Company', null);
INSERT INTO `clients` VALUES ('91', null, 'Jaya Teknik Indonesia, PT', null, '2013-05-01 00:00:00', '0000-00-00', 'Mrs. Cut Elvina', '021 - 355 59 99', 'Mrs. Nunik S', '021 - 319 34 190', 'Engineering & Construction', null);
INSERT INTO `clients` VALUES ('92', null, 'JDA – Indonesia, PT', null, '2010-08-01 00:00:00', '0000-00-00', 'Mr. Sigit S', '021 - 75904835', 'Mrs. Luciana L.', null, 'Counsultant Manpower Services', null);
INSERT INTO `clients` VALUES ('93', null, 'Kakao Corporation Representative Office', 'SSEK', '2014-05-01 00:00:00', '0000-00-00', 'Mr. Harri', '021 - 30 41 67 00', '021 - 521 20 39', null, 'Trading Company', null);
INSERT INTO `clients` VALUES ('94', null, 'KBR Indonesia, PT', null, '2015-09-15 00:00:00', '0000-00-00', 'Mrs. Marlina ', '021 - 300 61 025', 'Mr. Doddy Irawan', null, 'Rekayasa Engineering Company', null);
INSERT INTO `clients` VALUES ('95', null, 'Kotaminyak Internusa, PT', null, '2011-08-01 00:00:00', '0000-00-00', 'Mrs. Yean Li', '021 - 6621725', 'Mrs. Rina Mareta', '021 - 6621733', 'Service Oil & Gas Company', null);
INSERT INTO `clients` VALUES ('96', null, 'Kufpec Regional Ventures (INDONESIA) Ltd', null, '2012-08-01 00:00:00', '0000-00-00', 'Mrs. Mawar', '021 - 578 52 784', 'Mr. Ichsan S', '021 - 578 52 785', 'Service Oil & Gas Company', null);
INSERT INTO `clients` VALUES ('97', null, 'Lahai Coal, PT Group Billiton Company’s', 'Deloitte', '2015-08-15 00:00:00', '0000-00-00', 'Mr. Defry', '021 - 2992 3100', 'Mr. Arbyt', '021 - 2992 8022', 'Mining Company', null);
INSERT INTO `clients` VALUES ('98', null, 'Leighton Contractors Indonesia, PT', null, '2013-09-01 00:00:00', '0000-00-00', 'Mrs. Rina Hamarto', '021 - 300 023 23', null, '021 - 300 023 21', 'Engineering & Construction', null);
INSERT INTO `clients` VALUES ('99', null, 'Lestari Banten Energi, PT', null, '2012-08-01 00:00:00', '0000-00-00', 'Mr. Anton W', '021 - 527 38 28', null, '021 - 299 500 50', 'Pembangkit Tenaga Uap Listrik', null);
INSERT INTO `clients` VALUES ('100', null, 'Lintas Benua Handalan Indonesia, PT', 'Hanafiah Ponggawa & Partner’s', '2013-12-01 00:00:00', '0000-00-00', 'Mr. Johanes', '021 - 570 18 37', null, '021 - 392 78 41', 'Shipping Company', null);
INSERT INTO `clients` VALUES ('101', null, 'Logisera, PT', null, '2014-03-01 00:00:00', '0000-00-00', 'Mrs. Diana', '021 - 579 40 988', null, '021 - 579 40 980', 'IT Company', null);
INSERT INTO `clients` VALUES ('102', null, 'Lotte Chemical Titan, PT', null, '2014-09-01 00:00:00', '0000-00-00', 'Mrs. Julia A', '021 - 5290 7008', 'Mr. Nurman H H', '021 - 5290 7281', 'Industry Poly Ethyleno', null);
INSERT INTO `clients` VALUES ('103', null, 'Lulu Group’s Retail, PT', null, '2015-06-15 00:00:00', '0000-00-00', 'Mr. Mahendra', '021 - 647 011 24', null, '021 - 647 012 10', 'Trading Company', null);
INSERT INTO `clients` VALUES ('104', null, 'Mahadana Dasha Utama, PT', null, '2013-10-01 00:00:00', '0000-00-00', 'Mrs. Novi', '021 - 2997 67 00', null, '021 - 2997 67 08', 'Trading Company', null);
INSERT INTO `clients` VALUES ('105', null, 'Menara Astra, PT', null, '2014-10-01 00:00:00', '0000-00-00', 'Mrs. Fani', '021 - 570 49 49', null, '021 - 570 69 11', 'Trading Company', null);
INSERT INTO `clients` VALUES ('106', null, 'Mercer Indonesia, PT', null, '2012-01-01 00:00:00', '0000-00-00', 'Mr. Ferris', '+65 685 49340', null, null, 'Jasa Konsultasi Bisnis & Management', null);
INSERT INTO `clients` VALUES ('107', null, 'Metro Batavia, PT', 'Batavia Air', '2010-03-01 00:00:00', '0000-00-00', 'Mr. Raden Catur', '021 - 386 43 08', 'Mr. Samuel T', '021 - 345 39 17', 'Aviation/Airline', null);
INSERT INTO `clients` VALUES ('108', null, 'Metal One Indonesia, PT', null, '2010-04-01 00:00:00', '0000-00-00', 'Mrs. Eppy', '021 - 515 15 28', null, null, 'Trading Company', null);
INSERT INTO `clients` VALUES ('109', null, 'Metal One Steel Service Indonesia, PT', null, '2013-11-01 00:00:00', '0000-00-00', 'Mr. Toni Junaedi', '021 - 579 511 13', null, null, 'Industrie Baja', null);
INSERT INTO `clients` VALUES ('110', null, 'MetalArt Indonesia, PT', null, '2014-02-01 00:00:00', '0000-00-00', 'Mr. Yanuar', '021 - 292 86 170', null, '021 - 292 86 206', 'Industri Perlengkapan & Komponen Kendaraan Bermotor', null);
INSERT INTO `clients` VALUES ('111', null, 'MC Auto Consulting Indonesia, PT', null, '2011-07-01 00:00:00', '0000-00-00', 'Sudarman', '021 - 579 54 100', 'M. Gustiawan', '021 - 579 54 099', 'Trading Company', null);
INSERT INTO `clients` VALUES ('112', null, 'Mitsubishi Corporation Indonesia, PT', null, '2010-04-01 00:00:00', '0000-00-00', 'Mrs. Cecilia K.', '021 - 579 511 13', 'Mr. Toni Junaedi', null, 'Trading Company', null);
INSERT INTO `clients` VALUES ('113', null, 'Mitsubishi Corporation', null, '2010-04-01 00:00:00', '0000-00-00', 'Mrs. Cecili K', '021 - 5S79 51 113', 'Mr. Toni Junaedi', null, 'Trading Company/Representative Office', null);
INSERT INTO `clients` VALUES ('114', null, 'Mitsubishi Corporation Fashion Co Ltd', null, '2011-11-01 00:00:00', '0000-00-00', 'Mrs. Nensi R Sibarani', '021 - 570 77 74', null, null, 'Trading Company', null);
INSERT INTO `clients` VALUES ('115', null, 'Mitsubishi Jaya Elevator and Escalator, PT', null, '2010-04-01 00:00:00', '0000-00-00', 'Mrs. Yuly', '021 - 319 28 100', null, null, 'Trading Company', null);
INSERT INTO `clients` VALUES ('116', null, 'MC Living Essentials Indonesia, PT', null, '2013-03-01 00:00:00', '0000-00-00', 'Mrs. Vella', '021 - 579 514 69', null, null, 'Trading Company', null);
INSERT INTO `clients` VALUES ('117', null, 'Midi Utama Indonesia, PT, Tbk', null, '2011-07-01 00:00:00', '0000-00-00', 'Mr. Tri', '021 - 554 3445', 'Mr Rahman', '021 - 554 9505', 'Trading Company', null);
INSERT INTO `clients` VALUES ('118', null, 'MU Research and Consulting Indonesia, PT', null, '2011-04-01 00:00:00', '0000-00-00', 'Mrs. Reni', '021 - 319 28 100', null, null, 'Trading Company', null);
INSERT INTO `clients` VALUES ('119', null, 'Mobile Innovation Indonesia, PT', 'Deloitte', '2014-10-01 00:00:00', '0000-00-00', 'Mr. Arbyt', '021 - 2992 3100', 'Mr. Defry N', '021 - 2992 8022', 'Trading Company', null);
INSERT INTO `clients` VALUES ('120', null, 'Monroe Consulting Group, PT', null, '2013-10-01 00:00:00', '0000-00-00', 'Mr. Budi K ', '021 - 2940 00 40', 'Mr. Andrew Hairs', '021 - 2940 00 41', 'Counsultant Manpower Services', null);
INSERT INTO `clients` VALUES ('121', null, 'Moody Technical Services, PT', null, '2014-12-01 00:00:00', '0000-00-00', 'Mrs. Reny', '021 - 781 43 28', 'Mrs. Nisa', '021 - 781 48 44', 'Service Oil & Gas Company', null);
INSERT INTO `clients` VALUES ('122', null, 'Newtech Energy, PT', null, '2010-06-01 00:00:00', '0000-00-00', 'Mrs. Jeanny', '021 - 724 80 82', 'Mr. Joe Alchi', null, null, null);
INSERT INTO `clients` VALUES ('123', null, 'NHF Auto Suplies Indonesia, PT', null, '2014-06-01 00:00:00', '0000-00-00', 'Mr. Teguh', '021 - 527 08 00', 'Mrs. Wulandari', '021 - 527 08 00', 'Trading Company', null);
INSERT INTO `clients` VALUES ('124', null, 'North Jakarta International School', 'NJIS', '2014-07-01 00:00:00', '0000-00-00', 'Mrs. Alfa', '021 - 458 65 264', 'Mr. Koeshartatno', null, 'Yayasan Pendidikan Sekolah', null);
INSERT INTO `clients` VALUES ('125', null, 'Nusapati prima, PT', null, '2013-03-01 00:00:00', '0000-00-00', 'Mrs. Diana', '021 - 295 43 880', 'Mrs. Stella C.', null, 'Trading Company', null);
INSERT INTO `clients` VALUES ('126', null, 'Opac Barata, PT', null, '2015-05-01 00:00:00', '0000-00-00', 'Mr. Matroji', '021 - 2903 5245', null, '021 - 2903 5246', 'Service Oil & Gas Company', null);
INSERT INTO `clients` VALUES ('127', null, 'Oracle Indonesia, PT', 'Deloitte', '2014-08-01 00:00:00', '0000-00-00', 'Mrs. Conie', '021 - 2992 3100', 'Mr. Arbyt', '021 - 2992 8022', 'Trading Company', null);
INSERT INTO `clients` VALUES ('128', null, 'Orica Mining Services, PT', null, '2010-03-01 00:00:00', '0000-00-00', 'Mrs. Leni P', '021 - 572 30 70', null, null, 'Coal & Mining Services', null);
INSERT INTO `clients` VALUES ('129', null, 'Oryx Services, PT', null, '2012-08-01 00:00:00', '0000-00-00', 'Mrs. Muliana', '021 - 6400 805', null, null, 'Service Oil & Gas Company', null);
INSERT INTO `clients` VALUES ('130', null, 'Pacific Metal, Co, Ltd', null, '2010-04-01 00:00:00', '0000-00-00', 'Mrs. Yon', '021 - 579 514 74', 'Mrs. Annisa', null, 'Trading Company', null);
INSERT INTO `clients` VALUES ('131', null, 'Panalpina Nusajaya Transport, PT', 'SSEK', '2014-01-01 00:00:00', '0000-00-00', 'Mr. Anto', '021 - 521 20 38', null, '021 - 304 16 700', 'Jasa Transportasi', null);
INSERT INTO `clients` VALUES ('132', null, 'Paradigm Geophysical Indonesia, PT', 'SSEK', '2014-11-01 00:00:00', '0000-00-00', 'Mrs. Florence', '021 - 521 20 38', null, '021 - 304 16 700', 'Service Oil & Gas Company', null);
INSERT INTO `clients` VALUES ('133', null, 'Parsons Brinckerhoff Australia Pty Ltd', null, '2012-08-01 00:00:00', '0000-00-00', 'Mrs. Romani Boen', '021 - 7588 23 38', null, '021 - 736 19 79', 'Jasa Konsultant Konstruksi', null);
INSERT INTO `clients` VALUES ('134', null, 'Pasific Vantage Indonesia, PT', 'Emergent Capital Partners', '2012-04-01 00:00:00', '0000-00-00', 'Mrs. Rahel', '021 - 290 35 414', null, null, 'Trading Company', null);
INSERT INTO `clients` VALUES ('135', null, 'Panverta Cakra Kencana, PT', null, '2012-07-01 00:00:00', '0000-00-00', 'Mrs. Dessy', '+65 685 451 96', 'Mr. Sujanto', '0343 - 631 656', 'Trading Company', null);
INSERT INTO `clients` VALUES ('136', null, 'Perdana Setia Abadi Jaya, PT', null, '2012-11-01 00:00:00', '0000-00-00', 'Mrs. Dessy', '+65 685 451 96', 'Mr. Bingtono T', '021 - 825 01 91', 'Industrie & Packaging', null);
INSERT INTO `clients` VALUES ('137', null, 'Peroksida Indonesia Pratama, PT', null, '2011-04-01 00:00:00', '0000-00-00', 'Mr. Agus', '0264 - 313 383', null, '0264 - 313 387', 'Industrie Kimia', null);
INSERT INTO `clients` VALUES ('138', null, 'Petrokimia Kayaku, PT', null, '2013-09-01 00:00:00', '0000-00-00', 'Mr. Agus', '021 - 720 54 53', null, '021 - 725 12 44', 'Industri Kimia', null);
INSERT INTO `clients` VALUES ('139', null, 'Petronas Niaga Indonesia, PT', null, '2010-05-01 00:00:00', '0000-00-00', 'Ms. Byu', '021 - 576 26 88', 'Ms. Nina', null, 'Trading Company', null);
INSERT INTO `clients` VALUES ('140', null, 'Plaza Auto Prima, PT', null, '2015-09-14 00:00:00', '0000-00-00', 'Mrs. Imelda Heriningrum', '021 - 529 63 555', null, '021 - 528 92 292 ', 'Trading Company', null);
INSERT INTO `clients` VALUES ('141', null, 'P & H MinePro Indonesia, PT', null, '2014-06-01 00:00:00', '0000-00-00', 'Mr. Sigit S', '021 - 75904835', 'Mrs. Luciana L.', null, 'Mining Company', null);
INSERT INTO `clients` VALUES ('142', null, 'Prima Adhitama International Development, PT', 'Intercontinental Hotel Jakarta', '2014-02-01 00:00:00', '0000-00-00', 'Mr. Abel', '021 - 251 08 88', 'Mrs. Puji Astuti', '021 - 571 17 77', 'Development Perhotelan ', null);
INSERT INTO `clients` VALUES ('143', null, 'Pusaka Agro Lestari, PT', null, '2012-08-01 00:00:00', '0000-00-00', 'Mrs. Anna', '021 - 292 45 600', null, null, 'Trading Company', null);
INSERT INTO `clients` VALUES ('144', null, 'Rejeki Inti Logam Jaya, PT', null, '2012-03-01 00:00:00', '0000-00-00', 'Mr. Sujono', '021 - 598 41 39', null, null, 'Trading Company', null);
INSERT INTO `clients` VALUES ('145', null, 'Repsol Exploracion Cendrawasih II BV', null, '2011-07-01 00:00:00', '0000-00-00', 'Mr. Willy', '021 - 292 742 01', null, '021 - 579 541 78', 'Oil & Gas Company', null);
INSERT INTO `clients` VALUES ('146', null, 'Saipem Indonesia, PT, ', 'Jakarta Office', '2015-10-01 00:00:00', '0000-00-00', 'Mr. Dhani W', '021 - 300 22 143', 'Mr. Indra Wirana', '021 - 296 61 551', 'Service Oil & Gas Company', null);
INSERT INTO `clients` VALUES ('147', null, 'Saipem Indonesia, PT, ', 'Tanjung Balai Karimun Office', '2015-10-01 00:00:00', '0000-00-00', 'Mr. Nanang C', '0778 - 600 7300', 'Mrs. Rizky Amelia', null, 'Construction Services Company', null);
INSERT INTO `clients` VALUES ('148', null, 'Sakti Nusantra Bakti, PT', null, '2012-10-01 00:00:00', '0000-00-00', 'Mrs. Inda', '021 - 7592 3035', null, null, 'Coal & Mining Services', null);
INSERT INTO `clients` VALUES ('149', null, 'Sapta Warna Cemerlang, PT', null, '2012-03-01 00:00:00', '0000-00-00', 'Mrs. Helen', '021 - 533 2459', null, null, 'Trading Company', null);
INSERT INTO `clients` VALUES ('150', null, 'Sandin Engineering, PT', null, '2015-03-01 00:00:00', '0000-00-00', 'Mr. Aldo ', '021 - 316 13 78', 'Mr. Lee Ali Effendy', '021 - 319 00 970', 'Engineering & Construction Company ', null);
INSERT INTO `clients` VALUES ('151', null, 'Selera Indonesia Makmur, PT', 'The Ducking Group’s', '2012-05-01 00:00:00', '0000-00-00', 'Mrs. Yuli', '021 - 589 01 530', 'Mr. Decky', '021 - 589 08 282', 'Restaurant', null);
INSERT INTO `clients` VALUES ('152', null, 'Selera Kian Makmur, PT', 'The Ducking Group’s', '2012-05-01 00:00:00', '0000-00-00', 'Mrs.Yuli', '021 - 589 01 530', 'Mr. Decky', '021 - 589 08 282', 'Restaurant', null);
INSERT INTO `clients` VALUES ('153', null, 'Selera Sejahtera Makmur, PT', 'The Ducking Group’s', '2012-07-01 00:00:00', '0000-00-00', 'Mrs.Yuli', '021 - 589 01 530', 'Mr. Decky', '021 - 589 08 282', 'Restaurant', null);
INSERT INTO `clients` VALUES ('154', null, 'Schenck Process Indonesia, PT', 'SSEK', '2013-01-01 00:00:00', '0000-00-00', 'Mr. Irham', '021 - 3041 6700', '021 - 521  2039', null, 'Trading Company', null);
INSERT INTO `clients` VALUES ('155', null, 'SDV Logistics Indonesia, PT', null, '2012-03-01 00:00:00', '0000-00-00', 'Mr. Sigit', '021 - 75904835', 'Mrs. Luciana L.', null, 'Counsultant Manpower Services', null);
INSERT INTO `clients` VALUES ('156', null, 'Shell Indonesia, PT', null, '2010-07-01 00:00:00', '0000-00-00', 'Mr. M. Arya', '021 - 759 24 700', 'Mrs. Grace S.', null, 'Trading & Oil Company', null);
INSERT INTO `clients` VALUES ('157', null, 'Shell Manufacturing Indonesia, PT', null, '2012-08-01 00:00:00', '0000-00-00', 'Mr. M. Arya', '021 - 759 24 700', 'Mrs. Grace S', null, 'Trading & Oil Company', null);
INSERT INTO `clients` VALUES ('158', null, 'Shell Upstream Indonesia Services BV', null, '2013-05-01 00:00:00', '0000-00-00', 'Mr. M. Arya', '021 - 759 24 700', 'Mrs. Grace S', null, 'Oil & Gas Company', null);
INSERT INTO `clients` VALUES ('159', null, 'Silverlake Advanced IT Solution, PT', null, '2010-03-01 00:00:00', '0000-00-00', 'Mrs. Sim', '021 - 529 022 80', 'Mr. Tryono', null, 'IT Company', null);
INSERT INTO `clients` VALUES ('160', null, 'Silverlake Informatikatama, PT', null, '2010-03-01 00:00:00', '0000-00-00', 'Mrs. Sim', '021 - 529 022 80', 'Mr. Tryono', null, 'Trading Company', null);
INSERT INTO `clients` VALUES ('161', null, 'Silverlake Technology, PT', null, '2010-03-01 00:00:00', '0000-00-00', 'Mrs. Sim', '021 - 529 022 80', 'Mr. Tryono', null, 'IT Company', null);
INSERT INTO `clients` VALUES ('162', null, 'Soewito Suhardiman Eddhymurty Kardono, Law Firm', 'SSEK', '2011-08-01 00:00:00', '0000-00-00', 'Mr. Michael,', '021 - 3041 6700', 'Mr. Stephen Waroka', '021 - 521  2039', 'Law Firm', null);
INSERT INTO `clients` VALUES ('163', null, 'Sonton Food Indonesia, PT', null, '2013-08-01 00:00:00', '0000-00-00', 'Mrs. Novi', '021 - 2997 6700', null, '021 - 2997 6708', 'Industri Pengolahan Susu Krim', null);
INSERT INTO `clients` VALUES ('164', null, 'Space Indonesia, PT', null, '2010-04-01 00:00:00', '0000-00-00', 'Mrs. Mitha', '021 - 897 12 07', 'Mr. Teddy', null, 'Trading Company', null);
INSERT INTO `clients` VALUES ('165', null, 'Star Regional (SEA) Pte Ltd', 'SSEK', '2014-01-01 00:00:00', '0000-00-00', 'Mr. Ryan', '021 - 579 52 550', null, '021 - 579 52 560', 'BUT Trading Company', null);
INSERT INTO `clients` VALUES ('166', null, 'Steel Center Indonesia, PT', null, '2010-12-01 00:00:00', '0000-00-00', 'Mr. Nursam', '021 - 651 28 00', null, null, 'Industrie Baja', null);
INSERT INTO `clients` VALUES ('167', null, 'Structured Services, PT', null, '2010-03-01 00:00:00', '0000-00-00', 'Mrs. Sim', '021 - 529 022 80', 'Mr. Tryono', null, 'Trading Company', null);
INSERT INTO `clients` VALUES ('168', null, 'Sumber Bumi Serasi, PT', null, '2012-08-01 00:00:00', '0000-00-00', 'Mrs. Vevi', '0541 - 2639 70', null, null, 'Trading Company', null);
INSERT INTO `clients` VALUES ('169', null, 'Sunyard Petro Craft, PT', null, '2010-03-01 00:00:00', '0000-00-00', 'Mrs. Hartini', '021 - 579 51 474', null, null, 'Trading company', null);
INSERT INTO `clients` VALUES ('170', null, 'Syngenta Agro Services, PT', null, '2010-05-01 00:00:00', '0000-00-00', 'Mrs. Yayi', '021 - 788 369 79', 'Mrs. Vanda', null, 'Industry Kimia', null);
INSERT INTO `clients` VALUES ('171', null, 'Syngenta Indonesia, PT', null, '2010-05-01 00:00:00', '0000-00-00', 'Mrs. Yayi', '021 - 788 369 79', 'Mrs. Vanda', null, 'Industry Kimia', null);
INSERT INTO `clients` VALUES ('172', null, 'Syngenta Seed Indonesia, PT', null, '2010-05-01 00:00:00', '0000-00-00', 'Mrs. Yayi', '021 - 788 369 79', 'Mrs. Vanda', null, 'Industry Kimia', null);
INSERT INTO `clients` VALUES ('173', null, 'Tatamulia Nusantara Indah, PT', null, '2015-08-15 00:00:00', '0000-00-00', 'Mr. Arihadi', '021 - 460 6960', null, '021 - 460 6962', 'Construction Company', null);
INSERT INTO `clients` VALUES ('174', null, 'Telkomtelstra, PT', null, '2015-08-15 00:00:00', '0000-00-00', 'Mr. Nanang Qosim', 'nanang.qosim@telkomtelstra.co.id', null, null, 'Provider Telecomunication', null);
INSERT INTO `clients` VALUES ('175', null, 'Tradecorp Indonesia, PT', null, '2014-11-01 00:00:00', '0000-00-00', 'Mr. David Abraham', '021 - 460 50 21', null, '021 - 460 50 28', 'Jasa Transportasi', null);
INSERT INTO `clients` VALUES ('176', null, 'Triptra Engineers and Constructors, PT', null, '2015-06-13 00:00:00', '0000-00-00', 'Mr. Asep S', '021 - 750 07 01', null, '021 - 750 07 00', 'Service Oil & Gas Company', null);
INSERT INTO `clients` VALUES ('177', null, 'Tripatra Engineering, PT', null, '2015-06-13 00:00:00', '0000-00-00', 'Mr. Asep Saifullah', '021 - 750 07 01', null, '021 - 750 07 00', 'Engineering', null);
INSERT INTO `clients` VALUES ('178', null, 'Triyasa Propertindo, PT', null, '2011-09-01 00:00:00', '0000-00-00', 'Mr. Pramono R', '021 - 299 766 77', null, null, 'Trading Company', null);
INSERT INTO `clients` VALUES ('179', null, 'Universal Support, PT', null, '2015-02-01 00:00:00', '0000-00-00', 'Mr. Samuel Tobing', '021 - 2567 5939', null, null, 'Mining Company Services', null);
INSERT INTO `clients` VALUES ('180', null, 'Universal Mineral, PT', null, '2015-02-01 00:00:00', '0000-00-00', 'Mr. Samuel Tobing', '021 - 2567 5939', null, null, 'Trading Company', null);
INSERT INTO `clients` VALUES ('181', null, 'Varita Majutama, PT', null, '2015-02-01 00:00:00', '0000-00-00', 'Mr. Anton Wibisono', '021 - 2988 77 00', null, '021 - 2988 77 01', 'Palm Oil Industrie Company', null);
INSERT INTO `clients` VALUES ('182', null, 'Wahana Sugih, PT', null, '2015-03-01 00:00:00', '0000-00-00', 'Mr. Anggie Pratama Febriyanto', '021 - 2940 0255 ', null, '021 - 2940 0257', 'Trading Company', null);
INSERT INTO `clients` VALUES ('183', null, 'Wahana Sugih Internasional, PT', null, '2015-03-01 00:00:00', '0000-00-00', 'Mr. Anggie Pratama Febriyanto', '021 - 2940 0255 ', null, '021 - 2940 0257', 'Trading Company', null);
INSERT INTO `clients` VALUES ('184', null, 'Woodgroup’s Indonesia, PT', null, '2011-07-01 00:00:00', '0000-00-00', 'Mrs. Ajeng', '021 - 837 02 454', 'Mrs. Anna', null, 'Service Oil & Gas Company', null);
INSERT INTO `clients` VALUES ('185', null, 'Yamazaki Indonesia, PT', null, '2013-03-01 00:00:00', '0000-00-00', 'Mr. Raphael Listyandoko', '021 - 5548103', null, null, 'Food & Beverage', null);
INSERT INTO `clients` VALUES ('186', null, 'Zhuo International, PT', null, '2011-07-01 00:00:00', '0000-00-00', 'Mr. Agus Satria', '021 - 638 63 555', null, null, 'Trading Company', null);

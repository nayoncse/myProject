/*
SQLyog Ultimate v10.42 
MySQL - 5.5.5-10.1.38-MariaDB : Database - my_project
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`my_project` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `my_project`;

/*Table structure for table `contact_msg` */

DROP TABLE IF EXISTS `contact_msg`;

CREATE TABLE `contact_msg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `message` text,
  `insert_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

/*Data for the table `contact_msg` */

insert  into `contact_msg`(`id`,`name`,`email`,`message`,`insert_time`) values (24,'Shihab','shihab@gmail.com','Coxâ€™s Bazar holds the honor of having the longest continuous natural beach in the world, at 77...','2019-03-22 08:16:41'),(25,'Riki','RIKI@gmail.com','Book this full-day tour that leaves from Sylhet and takes you to explore Jaflong and Lalakhal...','2019-03-22 08:17:14'),(26,'Arafat','shihab@gmail.com','See the lush tea plantations, forest, wetlands, and wildlife of Srimangal on a 3-day tour from...','2019-03-22 08:17:38'),(27,'Nayon','shihab@gmail.com','Recommended experiences in and around Dhaka City','2019-03-22 08:17:59'),(28,'Nayon','shihab@gmail.com','hi','2019-03-27 22:53:33');

/*Table structure for table `galary_product` */

DROP TABLE IF EXISTS `galary_product`;

CREATE TABLE `galary_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `g_image` varchar(500) DEFAULT NULL,
  `g_like` int(11) DEFAULT NULL,
  `g_comment` int(11) DEFAULT NULL,
  `g_status` tinyint(1) DEFAULT '1',
  `create_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*Data for the table `galary_product` */

insert  into `galary_product`(`id`,`g_image`,`g_like`,`g_comment`,`g_status`,`create_time`) values (1,'images/galaryProduct/i1.jpg',32,6,1,'2019-02-26 23:17:33'),(2,'images/galaryProduct/i2.jpg',84,7,1,NULL),(3,'images/galaryProduct/i3.jpg',87,7,1,NULL),(4,'images/galaryProduct/i4.jpg',88,77,1,NULL),(5,'images/galaryProduct/i5.jpg',78,87,1,NULL),(6,'images/galaryProduct/i6.jpg',85,7,1,NULL),(7,'images/galaryProduct/i7.jpg',84,52,1,NULL),(8,'images/galaryProduct/i8.jpg',87,4,1,NULL),(9,'images/galaryProduct/i9.jpg',45,5,1,NULL),(10,'images/galaryProduct/i10.jpg',45,5,1,NULL),(11,'images/galaryProduct/i11.jpg',75,7,1,NULL),(12,'images/galaryProduct/i12.jpg',47,5,1,NULL);

/*Table structure for table `k_product` */

DROP TABLE IF EXISTS `k_product`;

CREATE TABLE `k_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `k_image` varchar(500) DEFAULT NULL,
  `k_name` varchar(500) DEFAULT NULL,
  `k_newPrice` int(11) DEFAULT NULL,
  `k_oldPrice` int(11) DEFAULT NULL,
  `k_status` tinyint(1) DEFAULT '1',
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

/*Data for the table `k_product` */

insert  into `k_product`(`id`,`k_image`,`k_name`,`k_newPrice`,`k_oldPrice`,`k_status`,`create_time`) values (1,'images/kidsProduct/pg1.jpg','Midi/Knee Length Casual Dress!!!',80,100,1,'2019-02-27 02:36:56'),(2,'images/kidsProduct/pg2.jpg','Slim Fit Men\'s Gold Trousers',45,80,1,'2019-02-27 02:41:53'),(5,'images/kidsProduct/pg3.jpg','Midi/Knee Length Casual Dress',72,120,1,'2019-02-27 02:42:00'),(6,'images/kidsProduct/pg4.jpg','Midi/Knee Length Casual Dress',80,100,1,'2019-02-27 02:42:05'),(7,'images/kidsProduct/pg5.jpg','Midi/Knee Length Party Dress',89,87,1,'2019-02-27 02:42:11'),(8,'images/kidsProduct/pg6.jpg','Girls Party Top and Skirt Set',20,96,1,'2019-02-27 02:42:19'),(9,'images/kidsProduct/pg7.jpg','Girl\'s Full Length Party Dress',47,50,1,'2019-02-27 02:42:24'),(10,'images/kidsProduct/pb4.jpg','Boy\'s Casual Blue T-Shirt',66,99,1,'2019-02-27 02:42:31'),(11,'images/kidsProduct/pb7.jpg','Casual Shirt and Denim Jeans',41,50,1,'2019-02-27 02:42:36'),(12,'images/kidsProduct/pb8.jpg','Boy\'s Casual Grey T-Shirt',74,88,1,'2019-02-27 02:42:40'),(13,'images/kidsProduct/pb9.jpg','Festive Kurta And Pyjama Set',20,74,1,'2019-02-27 02:42:47');

/*Table structure for table `men_product` */

DROP TABLE IF EXISTS `men_product`;

CREATE TABLE `men_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `m_pname` varchar(500) DEFAULT NULL,
  `m_pimage` varchar(500) DEFAULT NULL,
  `m_pnewPrice` int(11) DEFAULT NULL,
  `m_poldPrice` int(11) DEFAULT NULL,
  `m_status` tinyint(1) DEFAULT '1',
  `pro_uplTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `men_product` */

insert  into `men_product`(`id`,`m_pname`,`m_pimage`,`m_pnewPrice`,`m_poldPrice`,`m_status`,`pro_uplTime`) values (1,'Slim Fit Men\'s Gold Trousers','images/menProduct/ms1.jpg',40,20,1,'2019-02-27 03:32:33'),(2,'Slim Fit Men\'s Denim Jeans','images/menProduct/ms2.jpg',74,23,1,'2019-02-27 03:32:38'),(3,'Slim Fit Men\'s Denim Jeans','images/menProduct/ms3.jpg',45,44,1,'2019-02-27 03:32:42'),(4,'Slim Fit Men\'s Black Trousers','images/menProduct/pm1.jpg',14,10,1,'2019-02-27 03:32:46'),(5,'Black Casual Men\'s Blazer','images/menProduct/pm2.jpg',72,100,1,'2019-02-27 03:32:51'),(6,'Slim Women\'s Blue Jeans','images/menProduct/pm3.jpg',73,80,1,'2019-02-27 03:33:00'),(7,'Slim Women\'s Blue Jeans','images/menProduct/pm7.jpg',52,40,1,'2019-02-27 03:33:06'),(8,'Solid Formal Black Shirt','images/menProduct/pm9.jpg',10,20,1,'2019-02-27 03:33:09');

/*Table structure for table `product_details` */

DROP TABLE IF EXISTS `product_details`;

CREATE TABLE `product_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prod_id` int(11) DEFAULT NULL,
  `details_descriptions` text,
  `img_view_1` varchar(100) DEFAULT NULL,
  `img_view_2` varchar(100) DEFAULT NULL,
  `img_view_3` varchar(100) DEFAULT NULL,
  `prod_type` varchar(100) DEFAULT NULL,
  `prod_color` varchar(100) DEFAULT NULL,
  `prod_febric` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=latin1;

/*Data for the table `product_details` */

insert  into `product_details`(`id`,`prod_id`,`details_descriptions`,`img_view_1`,`img_view_2`,`img_view_3`,`prod_type`,`prod_color`,`prod_febric`) values (7,13,'When unexpected showers strike, reach for this Faconnable cover-up to protect yourself from the elements. The jacket comes with a built-in pouch, so be sure to pack it away and throw this lightweight piece into your bag before you head out for the day. The easy navy hue and practical pockets make it an investment in effortless style. Shown here with a Faconnable shirt, Dunhill trousers, John Lobb shoes and a Jean Shop belt.','images/menProduct/ms1.jpg','images/menProduct/ms1.jpg','images/menProduct/ms1.jpg','Men','Red','coton'),(8,14,'When unexpected showers strike, reach for this Faconnable cover-up to protect yourself from the elements. The jacket comes with a built-in pouch, so be sure to pack it away and throw this lightweight piece into your bag before you head out for the day. The easy navy hue and practical pockets make it an investment in effortless style. Shown here with a Faconnable shirt, Dunhill trousers, John Lobb shoes and a Jean Shop belt.','images/menProduct/ms2.jpg','images/menProduct/ms2.jpg','images/menProduct/ms2.jpg','Men','grean','coton'),(9,22,'When unexpected showers strike, reach for this Faconnable cover-up to protect yourself from the elements. The jacket comes with a built-in pouch, so be sure to pack it away and throw this lightweight piece into your bag before you head out for the day. The easy navy hue and practical pockets make it an investment in effortless style. Shown here with a Faconnable shirt, Dunhill trousers, John Lobb shoes and a Jean Shop belt.','images/womenProduct/pf2.jpg','images/womenProduct/pf2.jpg','images/womenProduct/pf2.jpg','Famel','Red','coton'),(10,21,'When unexpected showers strike, reach for this Faconnable cover-up to protect yourself from the elements. The jacket comes with a built-in pouch, so be sure to pack it away and throw this lightweight piece into your bag before you head out for the day. The easy navy hue and practical pockets make it an investment in effortless style. Shown here with a Faconnable shirt, Dunhill trousers, John Lobb shoes and a Jean Shop belt.','images/womenProduct/pf1.jpg','images/womenProduct/pf1.jpg','images/womenProduct/pf1.jpg','Famel','grean','coton'),(11,36,'When unexpected showers strike, reach for this Faconnable cover-up to protect yourself from the elements. The jacket comes with a built-in pouch, so be sure to pack it away and throw this lightweight piece into your bag before you head out for the day. The easy navy hue and practical pockets make it an investment in effortless style. Shown here with a Faconnable shirt, Dunhill trousers, John Lobb shoes and a Jean Shop belt.','images/kidsProduct/pg6.jpg','images/kidsProduct/pg6.jpg','images/kidsProduct/pg6.jpg','Kids','Red','coton'),(12,37,'When unexpected showers strike, reach for this Faconnable cover-up to protect yourself from the elements. The jacket comes with a built-in pouch, so be sure to pack it away and throw this lightweight piece into your bag before you head out for the day. The easy navy hue and practical pockets make it an investment in effortless style. Shown here with a Faconnable shirt, Dunhill trousers, John Lobb shoes and a Jean Shop belt.','images/kidsProduct/pg7.jpg','images/kidsProduct/pg7.jpg','images/kidsProduct/pg7.jpg','Kids','grean','coton'),(23,98,'Dresses, dresses everywhere, not a name I know. Have you felt this way, looking at all the different types of dresses available in the stores? There are hundreds of different kinds of dresses â€“ in every style imaginable. Let us check out the most important types of dresses.','images/product/images (2).jpg','images/product/images (2).jpg','images/product/images (2).jpg',NULL,NULL,NULL),(38,113,'this','images/product/110871999_side.jpg','images/product/110871999_side.jpg','images/product/110871999_side.jpg',NULL,NULL,NULL),(39,114,'fghjkl','images/product/c26-B005F28HBM-1-l.jpg','images/product/c26-B005F28HBM-1-l.jpg','images/product/c26-B005F28HBM-1-l.jpg',NULL,NULL,NULL),(40,115,'qwertyuilo;\';lmnbvcxcvbnm,','images/product/images (2).jpg','images/product/images (2).jpg','images/product/images (2).jpg',NULL,NULL,NULL),(41,116,'wertyuilkjhgfd','images/product/pb11.jpg','images/product/pb11.jpg','images/product/pb11.jpg',NULL,NULL,NULL),(42,117,'vbhjk/','images/product/hmgoepprod.jpg','images/product/hmgoepprod.jpg','images/product/hmgoepprod.jpg',NULL,NULL,NULL),(43,118,'v,mnbv','images/product/s19_03_a06_59027_1274_off_a.jpg','images/product/s19_03_a06_59027_1274_off_a.jpg','images/product/s19_03_a06_59027_1274_off_a.jpg',NULL,NULL,NULL),(44,119,'Product description Vestibulum ante ipsum primis in faucibus orci luctus.','images/product/pf1.jpg','images/product/pf1.jpg','images/product/pf1.jpg',NULL,NULL,NULL),(45,120,'Product description Vestibulum ante ipsum primis in faucibus orci luctus.','images/product/pf2.jpg','images/product/pf2.jpg','images/product/pf2.jpg',NULL,NULL,NULL),(46,121,'Product description Vestibulum ante ipsum primis in faucibus orci luctus.','images/product/pf3.jpg','images/product/pf3.jpg','images/product/pf3.jpg',NULL,NULL,NULL),(47,122,'Product description Vestibulum ante ipsum primis in faucibus orci luctus.','images/product/pf4.jpg','images/product/pf4.jpg','images/product/pf4.jpg',NULL,NULL,NULL),(48,123,'Product description Vestibulum ante ipsum primis in faucibus orci luctus.','images/product/pf5.jpg','images/product/pf5.jpg','images/product/pf5.jpg',NULL,NULL,NULL),(49,124,'Product description Vestibulum ante ipsum primis in faucibus orci luctus.','images/product/pf6.jpg','images/product/pf6.jpg','images/product/pf6.jpg',NULL,NULL,NULL),(50,125,'Product description Vestibulum ante ipsum primis in faucibus orci luctus.','images/product/pf7.jpg','images/product/pf7.jpg','images/product/pf7.jpg',NULL,NULL,NULL),(51,126,'Product description Vestibulum ante ipsum primis in faucibus orci luctus.','images/product/pf9.jpg','images/product/pf9.jpg','images/product/pf9.jpg',NULL,NULL,NULL),(52,127,'Product description Vestibulum ante ipsum primis in faucibus orci luctus.','images/product/pf10.jpg','images/product/pf10.jpg','images/product/pf10.jpg',NULL,NULL,NULL),(53,128,'Product description Vestibulum ante ipsum primis in faucibus orci luctus.','images/product/pf12.jpg','images/product/pf12.jpg','images/product/pf12.jpg',NULL,NULL,NULL),(54,129,'The details you provide for a product affect the way the product appears to customers, make it easier for you to organize your products, and help customers find the product. You don\'t have to provide every detail for each product.','images/product/pt8.jpg','images/product/pt8.jpg','images/product/pt8.jpg',NULL,NULL,NULL),(55,130,'The details you provide for a product affect the way the product appears to customers, make it easier for you to organize your products, and help customers find the product. You don\'t have to provide every detail for each product.','images/product/pt7.jpg','images/product/pt7.jpg','images/product/pt7.jpg',NULL,NULL,NULL),(56,131,'The details you provide for a product affect the way the product appears to customers, make it easier for you to organize your products, and help customers find the product. You don\'t have to provide every detail for each product.','images/product/pt6.jpg','images/product/pt6.jpg','images/product/pt6.jpg',NULL,NULL,NULL),(57,132,'The details you provide for a product affect the way the product appears to customers, make it easier for you to organize your products, and help customers find the product. You don\'t have to provide every detail for each product.','images/product/pt5.jpg','images/product/pt5.jpg','images/product/pt5.jpg',NULL,NULL,NULL),(58,133,'The details you provide for a product affect the way the product appears to customers, make it easier for you to organize your products, and help customers find the product. You don\'t have to provide every detail for each product.','images/product/pt4.jpg','images/product/pt4.jpg','images/product/pt4.jpg',NULL,NULL,NULL),(59,134,'The details you provide for a product affect the way the product appears to customers, make it easier for you to organize your products, and help customers find the product. You don\'t have to provide every detail for each product.','images/product/pt2.jpg','images/product/pt2.jpg','images/product/pt2.jpg',NULL,NULL,NULL),(60,135,'The details you provide for a product affect the way the product appears to customers, make it easier for you to organize your products, and help customers find the product. You don\'t have to provide every detail for each product.','images/product/pt1.jpg','images/product/pt1.jpg','images/product/pt1.jpg',NULL,NULL,NULL),(61,136,'The details you provide for a product affect the way the product appears to customers, make it easier for you to organize your products, and help customers find the product. You don\'t have to provide every detail for each product.','images/product/pm13.jpg','images/product/pm13.jpg','images/product/pm13.jpg',NULL,NULL,NULL),(62,137,'The details you provide for a product affect the way the product appears to customers, make it easier for you to organize your products, and help customers find the product. You don\'t have to provide every detail for each product.','images/product/pm12.jpg','images/product/pm12.jpg','images/product/pm12.jpg',NULL,NULL,NULL),(63,138,'The details you provide for a product affect the way the product appears to customers, make it easier for you to organize your products, and help customers find the product. You don\'t have to provide every detail for each product.','images/product/pm11.jpg','images/product/pm11.jpg','images/product/pm11.jpg',NULL,NULL,NULL),(64,139,'The details you provide for a product affect the way the product appears to customers, make it easier for you to organize your products, and help customers find the product. You don\'t have to provide every detail for each product.','images/product/pgg3.jpg','images/product/pgg3.jpg','images/product/pgg3.jpg',NULL,NULL,NULL),(65,140,'The details you provide for a product affect the way the product appears to customers, make it easier for you to organize your products, and help customers find the product. You don\'t have to provide every detail for each product.','images/product/pb4.jpg','images/product/pb4.jpg','images/product/pb4.jpg',NULL,NULL,NULL),(66,141,'The details you provide for a product affect the way the product appears to customers, make it easier for you to organize your products, and help customers find the product. You don\'t have to provide every detail for each product.','images/product/pb7.jpg','images/product/pb7.jpg','images/product/pb7.jpg',NULL,NULL,NULL),(67,142,'The details you provide for a product affect the way the product appears to customers, make it easier for you to organize your products, and help customers find the product. You don\'t have to provide every detail for each product.','images/product/pg1.jpg','images/product/pg1.jpg','images/product/pg1.jpg',NULL,NULL,NULL),(68,143,'The details you provide for a product affect the way the product appears to customers, make it easier for you to organize your products, and help customers find the product. You don\'t have to provide every detail for each product.','images/product/pg6.jpg','images/product/pg6.jpg','images/product/pg6.jpg',NULL,NULL,NULL),(69,144,'The details you provide for a product affect the way the product appears to customers, make it easier for you to organize your products, and help customers find the product. You don\'t have to provide every detail for each product.','images/product/pf9.jpg','images/product/pf9.jpg','images/product/pf9.jpg',NULL,NULL,NULL);

/*Table structure for table `products` */

DROP TABLE IF EXISTS `products`;

CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) DEFAULT NULL,
  `n_price` decimal(15,2) DEFAULT NULL,
  `o_price` decimal(15,2) DEFAULT NULL,
  `description` text,
  `img` varchar(100) DEFAULT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `cat_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  `is_featured` tinyint(1) DEFAULT '0',
  `color_id` varchar(50) DEFAULT NULL,
  `size_id` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=145 DEFAULT CHARSET=latin1;

/*Data for the table `products` */

insert  into `products`(`id`,`name`,`n_price`,`o_price`,`description`,`img`,`create_date`,`cat_id`,`quantity`,`status`,`is_featured`,`color_id`,`size_id`) values (120,'Vestibulum ante ipsum primis',10.00,12.00,'Product description Vestibulum ante ipsum primis in faucibus orci luctus.','images/product/pf2.jpg','2019-03-28 00:02:41',2,4,1,0,NULL,NULL),(121,' faucibus orci luctus.',80.00,62.00,'Product description Vestibulum ante ipsum primis in faucibus orci luctus.','images/product/pf3.jpg','2019-03-28 00:03:25',2,4,1,0,NULL,NULL),(122,' faucibus orci luctus.',80.00,62.00,'Product description Vestibulum ante ipsum primis in faucibus orci luctus.','images/product/pf4.jpg','2019-03-28 00:04:31',2,4,1,0,NULL,NULL),(123,' faucibus orci luctus.',80.00,12.00,'Product description Vestibulum ante ipsum primis in faucibus orci luctus.','images/product/pf5.jpg','2019-03-28 00:05:02',2,4,1,0,NULL,NULL),(124,' faucibus orci luctus.',10.00,12.00,'Product description Vestibulum ante ipsum primis in faucibus orci luctus.','images/product/pf6.jpg','2019-03-28 00:05:27',2,2,1,0,NULL,NULL),(125,' faucibus orci luctus.',80.00,12.00,'Product description Vestibulum ante ipsum primis in faucibus orci luctus.','images/product/pf7.jpg','2019-03-28 00:06:03',2,4,1,0,NULL,NULL),(126,' faucibus orci luctus.',10.00,20.00,'Product description Vestibulum ante ipsum primis in faucibus orci luctus.','images/product/pf9.jpg','2019-03-28 00:07:23',2,4,1,0,NULL,NULL),(127,' faucibus orci luctus.',80.00,20.00,'Product description Vestibulum ante ipsum primis in faucibus orci luctus.','images/product/pf10.jpg','2019-03-28 00:07:52',2,4,1,0,NULL,NULL),(128,' faucibus orci luctus.',10.00,20.00,'Product description Vestibulum ante ipsum primis in faucibus orci luctus.','images/product/pf12.jpg','2019-03-28 00:08:53',2,4,1,0,NULL,NULL),(129,' faucibus orci luctus.',10.00,12.00,'The details you provide for a product affect the way the product appears to customers, make it easier for you to organize your products, and help customers find the product. You don\'t have to provide every detail for each product.','images/product/pt8.jpg','2019-03-28 00:59:22',1,4,1,0,NULL,NULL),(130,' faucibus orci luctus.',80.00,20.00,'The details you provide for a product affect the way the product appears to customers, make it easier for you to organize your products, and help customers find the product. You don\'t have to provide every detail for each product.','images/product/pt7.jpg','2019-03-28 01:02:03',1,4,1,0,NULL,NULL),(131,' faucibus orci luctus.',80.00,20.00,'The details you provide for a product affect the way the product appears to customers, make it easier for you to organize your products, and help customers find the product. You don\'t have to provide every detail for each product.','images/product/pt6.jpg','2019-03-28 01:02:34',1,4,1,0,NULL,NULL),(132,' faucibus orci luctus.',10.00,20.00,'The details you provide for a product affect the way the product appears to customers, make it easier for you to organize your products, and help customers find the product. You don\'t have to provide every detail for each product.','images/product/pt5.jpg','2019-03-28 01:03:06',1,4,1,0,NULL,NULL),(133,' faucibus orci luctus.',10.00,20.00,'The details you provide for a product affect the way the product appears to customers, make it easier for you to organize your products, and help customers find the product. You don\'t have to provide every detail for each product.','images/product/pt4.jpg','2019-03-28 01:03:52',1,4,1,0,NULL,NULL),(134,' faucibus orci luctus.',10.00,12.00,'The details you provide for a product affect the way the product appears to customers, make it easier for you to organize your products, and help customers find the product. You don\'t have to provide every detail for each product.','images/product/pt2.jpg','2019-03-28 01:04:24',1,4,1,0,NULL,NULL),(135,' faucibus orci luctus.',10.00,12.00,'The details you provide for a product affect the way the product appears to customers, make it easier for you to organize your products, and help customers find the product. You don\'t have to provide every detail for each product.','images/product/pt1.jpg','2019-03-28 01:05:26',1,4,1,0,NULL,NULL),(136,' faucibus orci luctus.',10.00,12.00,'The details you provide for a product affect the way the product appears to customers, make it easier for you to organize your products, and help customers find the product. You don\'t have to provide every detail for each product.','images/product/pm13.jpg','2019-03-28 01:06:30',1,4,1,0,NULL,NULL),(137,' faucibus orci luctus.',80.00,20.00,'The details you provide for a product affect the way the product appears to customers, make it easier for you to organize your products, and help customers find the product. You don\'t have to provide every detail for each product.','images/product/pm12.jpg','2019-03-28 01:07:14',1,4,1,0,NULL,NULL),(138,' faucibus orci luctus.',10.00,20.00,'The details you provide for a product affect the way the product appears to customers, make it easier for you to organize your products, and help customers find the product. You don\'t have to provide every detail for each product.','images/product/pm11.jpg','2019-03-28 01:09:34',1,4,1,0,NULL,NULL),(139,' faucibus orci luctus.',10.00,12.00,'The details you provide for a product affect the way the product appears to customers, make it easier for you to organize your products, and help customers find the product. You don\'t have to provide every detail for each product.','images/product/pgg3.jpg','2019-03-28 01:10:17',3,4,1,0,NULL,NULL),(140,' faucibus orci luctus.',10.00,20.00,'The details you provide for a product affect the way the product appears to customers, make it easier for you to organize your products, and help customers find the product. You don\'t have to provide every detail for each product.','images/product/pb4.jpg','2019-04-26 07:55:20',3,0,1,0,NULL,NULL),(141,' faucibus orci luctus.',10.00,12.00,'The details you provide for a product affect the way the product appears to customers, make it easier for you to organize your products, and help customers find the product. You don\'t have to provide every detail for each product.','images/product/pb7.jpg','2019-04-26 07:32:08',3,3,1,0,NULL,NULL),(142,' faucibus orci luctus.',80.00,12.00,'The details you provide for a product affect the way the product appears to customers, make it easier for you to organize your products, and help customers find the product. You don\'t have to provide every detail for each product.','images/product/pg1.jpg','2019-04-26 07:56:05',3,3,1,0,NULL,NULL),(143,' faucibus orci luctus.',80.00,20.00,'The details you provide for a product affect the way the product appears to customers, make it easier for you to organize your products, and help customers find the product. You don\'t have to provide every detail for each product.','images/product/pg6.jpg','2019-03-28 01:12:40',3,4,1,0,NULL,NULL),(144,' faucibus orci luctus.',80.00,20.00,'The details you provide for a product affect the way the product appears to customers, make it easier for you to organize your products, and help customers find the product. You don\'t have to provide every detail for each product.','images/product/pf9.jpg','2019-03-28 01:13:18',2,4,1,0,NULL,NULL);

/*Table structure for table `sell_report` */

DROP TABLE IF EXISTS `sell_report`;

CREATE TABLE `sell_report` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prod_id` int(11) DEFAULT NULL,
  `prod_name` varchar(500) DEFAULT NULL,
  `prod_price` int(11) DEFAULT NULL,
  `total_price` int(11) DEFAULT NULL,
  `sell_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(1) DEFAULT '1',
  `user_id` int(11) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `sell_report` */

insert  into `sell_report`(`id`,`prod_id`,`prod_name`,`prod_price`,`total_price`,`sell_date`,`status`,`user_id`,`address`) values (1,140,' faucibus orci luctus.',10,10,'2019-04-26 07:55:19',1,76,''),(2,142,' faucibus orci luctus.',80,80,'2019-04-26 07:56:05',1,76,'');

/*Table structure for table `site_descreption` */

DROP TABLE IF EXISTS `site_descreption`;

CREATE TABLE `site_descreption` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `site_image` varchar(500) DEFAULT NULL,
  `site_name` varchar(500) DEFAULT NULL,
  `site_link` varchar(500) DEFAULT NULL,
  `site_status` tinyint(1) NOT NULL DEFAULT '1',
  `site_updateTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `site_descreption` */

insert  into `site_descreption`(`id`,`site_image`,`site_name`,`site_link`,`site_status`,`site_updateTime`) values (1,'images/siteImage/a1.jpg','women\'s fashion','women.php',1,'2019-02-27 05:58:17'),(2,'images/siteImage/a2.jpg','men\'s fashion','men.php',1,'2019-02-27 05:58:09'),(3,'images/siteImage/a3.jpg','kid\'s fashion','girls.php',1,'2019-02-27 05:58:01');

/*Table structure for table `slider` */

DROP TABLE IF EXISTS `slider`;

CREATE TABLE `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(500) DEFAULT NULL,
  `link` varchar(500) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  `offer_rate` int(11) DEFAULT NULL,
  `f_n` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `slider` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `address` text,
  `phone_no` varchar(50) DEFAULT NULL,
  `status` tinyint(1) DEFAULT '1',
  `type` int(1) DEFAULT '2' COMMENT '1= admin, 2=customer',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=79 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id`,`full_name`,`email`,`password`,`address`,`phone_no`,`status`,`type`) values (64,'Nayon','fx@fvv','$2y$10$emZlNGFzZmYjZmZ1ODEhIOl92J0HdnL8Lr80b0cKpKc/VIuPefzb6',NULL,NULL,1,2),(65,'Nayon','fx@fvvljhh.com','$2y$10$emZlNGFzZmYjZmZ1ODEhIOl92J0HdnL8Lr80b0cKpKc/VIuPefzb6',NULL,NULL,1,2),(66,'mvg','fxii@fvv','$2y$10$emZlNGFzZmYjZmZ1ODEhIOneRPpuYUnv0LVuUoDzTaWfSolHFSPcW',NULL,NULL,1,2),(67,'Nayon1','1fx@fvv','$2y$10$emZlNGFzZmYjZmZ1ODEhIOl92J0HdnL8Lr80b0cKpKc/VIuPefzb6',NULL,NULL,1,2),(68,'Nayondd','ddfx@fvv','$2y$10$emZlNGFzZmYjZmZ1ODEhIOl92J0HdnL8Lr80b0cKpKc/VIuPefzb6',NULL,NULL,1,2),(69,'Nayon','ddfx@fvvg','$2y$10$emZlNGFzZmYjZmZ1ODEhIOl92J0HdnL8Lr80b0cKpKc/VIuPefzb6',NULL,NULL,1,2),(70,'Nayon','Afx@fvv','$2y$10$emZlNGFzZmYjZmZ1ODEhIOlNgNZrqKYaJLP2cM0OM.J303WvmxKFK',NULL,NULL,1,2),(71,'Nayon','flx@fvv','$2y$10$emZlNGFzZmYjZmZ1ODEhIOl92J0HdnL8Lr80b0cKpKc/VIuPefzb6',NULL,NULL,1,2),(72,'Nayon Hossain','mdnayon@gmail.com','$2y$10$emZlNGFzZmYjZmZ1ODEhIOl92J0HdnL8Lr80b0cKpKc/VIuPefzb6',NULL,NULL,1,1),(73,'Atiqul','Rahman15-8061@diu.edu.bd','$2y$10$emZlNGFzZmYjZmZ1ODEhIOXH4BPDonCt.JCg9q7ICVO35thNoqFmu',NULL,NULL,1,2),(74,'Nayon','mdnayonhossain29@gmail.com','$2y$10$emZlNGFzZmYjZmZ1ODEhIO3mcDWVoY2xz5C9.SdvSYDzTRVOP/1O6',NULL,NULL,1,1),(76,'Nayon','nayonhossain29@gmail.com','$2y$10$emZlNGFzZmYjZmZ1ODEhIOl92J0HdnL8Lr80b0cKpKc/VIuPefzb6',NULL,NULL,1,2),(78,'Shhiahab','ad@gmail.com','$2y$10$emZlNGFzZmYjZmZ1ODEhIOl92J0HdnL8Lr80b0cKpKc/VIuPefzb6','Dhaka',NULL,1,2);

/*Table structure for table `women_product` */

DROP TABLE IF EXISTS `women_product`;

CREATE TABLE `women_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `w_pname` varchar(500) DEFAULT NULL,
  `w_pimage` varchar(500) DEFAULT NULL,
  `w_pnewPrice` int(11) DEFAULT NULL,
  `w_poldPrice` int(11) DEFAULT NULL,
  `w_status` tinyint(1) DEFAULT '1',
  `pro_uplTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `women_product` */

insert  into `women_product`(`id`,`w_pname`,`w_pimage`,`w_pnewPrice`,`w_poldPrice`,`w_status`,`pro_uplTime`) values (1,'Black Casual Men\'s Blazer','images/womenProduct/pf1.jpg',85,400,1,'2019-02-27 03:45:46'),(2,'Slim Fit Men\'s Black Trousers','images/womenProduct/pf2.jpg',50,401,1,'2019-02-27 03:45:54'),(3,'Black Casual Men\'s Blazer','images/womenProduct/pf3.jpg',70,80,1,'2019-02-27 03:46:00'),(4,'Slim Women\'s Blue Jeans','images/womenProduct/pf4.jpg',70,77,1,'2019-02-27 03:46:06'),(5,'Slim Fit Men\'s Black Trousers','images/womenProduct/pf5.jpg',20,23,1,'2019-02-27 03:46:11'),(6,'Slim Fit Men\'s Denim Jeans','images/womenProduct/pf6.jpg',10,20,1,'2019-02-27 03:46:16'),(7,'Slim Fit Men\'s Denim Jeans','images/womenProduct/pf7.jpg',50,60,1,'2019-02-27 03:46:21'),(8,'Slim Fit Men\'s Black Trousers','images/womenProduct/pf8.jpg',40,60,1,'2019-02-27 03:46:26'),(9,'Black Casual Men\'s Blazer','images/womenProduct/pf9.jpg',22,55,1,'2019-02-27 03:46:33'),(10,'Slim Fit Men\'s Denim Jeans','images/womenProduct/pf10.jpg',30,50,1,'2019-02-27 03:46:43');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

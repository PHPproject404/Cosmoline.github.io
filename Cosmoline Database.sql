/*
SQLyog Professional v13.1.1 (64 bit)
MySQL - 10.4.8-MariaDB : Database - sarisari
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`sarisari` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `sarisari`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(155) NOT NULL,
  `password` varchar(155) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `admin` */

insert  into `admin`(`user_id`,`email`,`password`) values 
(3,'admin@gmail.com','d033e22ae348aeb5660fc2140aec35850c4da997');

/*Table structure for table `customers` */

DROP TABLE IF EXISTS `customers`;

CREATE TABLE `customers` (
  `customerid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `address` varchar(80) NOT NULL,
  PRIMARY KEY (`customerid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `customers` */

/*Table structure for table `manufacturer` */

DROP TABLE IF EXISTS `manufacturer`;

CREATE TABLE `manufacturer` (
  `Manufacturer_ID` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Manufacturer_Name` varchar(60) NOT NULL,
  PRIMARY KEY (`Manufacturer_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

/*Data for the table `manufacturer` */

insert  into `manufacturer`(`Manufacturer_ID`,`Manufacturer_Name`) values 
(1,'Lip Products'),
(2,'Eye Products'),
(3,'Face Products');

/*Table structure for table `order_items` */

DROP TABLE IF EXISTS `order_items`;

CREATE TABLE `order_items` (
  `orderid` int(10) unsigned NOT NULL,
  `product_id` varchar(20) NOT NULL,
  `item_price` decimal(6,2) NOT NULL,
  `quantity` tinyint(3) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `order_items` */

/*Table structure for table `orders` */

DROP TABLE IF EXISTS `orders`;

CREATE TABLE `orders` (
  `orderid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `customerid` int(10) unsigned NOT NULL,
  `amount` decimal(6,2) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `ship_name` char(60) NOT NULL,
  `ship_address` char(80) NOT NULL,
  PRIMARY KEY (`orderid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `orders` */

/*Table structure for table `owner` */

DROP TABLE IF EXISTS `owner`;

CREATE TABLE `owner` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(155) NOT NULL,
  `Phone_Number` int(11) NOT NULL,
  `Address` varchar(155) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `owner` */

/*Table structure for table `product` */

DROP TABLE IF EXISTS `product`;

CREATE TABLE `product` (
  `Product_ID` int(20) NOT NULL,
  `Product_Name` varchar(60) DEFAULT NULL,
  `Product_Image` varchar(40) DEFAULT NULL,
  `Product_Desc` text DEFAULT NULL,
  `Product_Price` decimal(6,2) NOT NULL,
  `Manufacturer_ID` int(10) unsigned NOT NULL,
  PRIMARY KEY (`Product_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `product` */

insert  into `product`(`Product_ID`,`Product_Name`,`Product_Image`,`Product_Desc`,`Product_Price`,`Manufacturer_ID`) values 
(1,'Guerlain','Guerlain.jpg','The lipstick itself is enriched with hyaluronic acid spheres, mango butter and jojoba oil to give it a creamy, moisturizing formula, and it glides on like a dream.',2500.00,1),
(2,'Clarins','Clarins.jpg','Moisture-rich formula deposits intense colour and a delicate satin sheen to lips. Enriched with soothing Mango Oil and moisturizing organic Marsh Samphire—Joli Rouge comforts, conditions and nourishes lips for 6 hours.',4923.94,1),
(3,'Burberry','Burberry.jpg','A comfortable, non-drying, soft-matte lipstick with a lasting, velvety finish. This creamy lipstick locks in rich pigments, glides on effortlessly, and delivers a soft-matte finish in one stroke.',6400.00,1),
(4,'Dior Addict Lip Tattoo','Dior Addict Lip Tattoo.jpg','Dior Addict Lip Tattoo, the first long wear lip tint by Dior, is about to shake up your makeup routine. With its 10-hour hold*, comfortable formula and weightless “no transfer” finish, the colour fuses to the lips like a tattoo just seconds after application.',2200.00,1),
(5,'Giorgio Armani Beauty Lip Maestro','Giorgio Armani Beauty Lip Maestro.jpg','Giorgio Armani introduces Lip Maestro, their first lip lacquer with a comfortable velvety texture and a radiant finish. Lips appear instantly plumper and radiant',4199.00,1),
(6,'Yves Saint Laurent Tatouage Couture Liquid Matte Lip Stain','Yves.jpg','A revolutionary formula for ultra-matte, high impact color with a lightweight, naked-lip feel. ... The spatula-like applicator gives the precision of a liner with the control of a brush for perfectly defined lips with every application.',2399.00,1),
(7,'Dior Addict Lip Glow','Dior Addict Lip Glow.jpg','A tinted balm with a velvety, matte finish for a soft blurring effect that enhances lips. Hydrating and nourishing, it has the same Color Reviver technology to flush the lips a soft pink.',2100.00,1),
(8,'Bobbi Brown SPF 15 Lip Balm','Bobbi Brown SPF 15 Lip Balm.jpg','comes in a sleek and portable polished silver tin. Avocado, olive, and wheat germ oils help create a protective layer. Petrolatum helps rehydrate and provides immediate comfort.',3250.00,1),
(9,'La Mer Lip Balm','La Mer Lip Balm.jpg','This velveteen balm with a hint of mint calms, restores and conditions, transforming lips with the most tender touch. Instantly helping to soften dryness, this emollient treatment nourishes, restores and strengthens the natural moisture barrier to help prevent further environmental damage',1200.00,1),
(10,'Fenty Beauty','Fenty Beauty.jpg','An ultra-fine, retractable brow pencil made for hair-like precision, born in a ground-breaking range of 14 longwear, waterproof, smudge-resistant shades – plus a built-in paddle brush for effortless blending and styling.',935.00,2),
(11,'Iconic London','Iconic London.jpg','This is a Beyond Beauty product which means it has been sourced, tried and tested and finally declared one of the most new and innovative heroes out there.',1100.00,2),
(12,'Hourglass','Hourglass.jpg','The Arch Brow Micro Sculpting Pencil by Hourglass is an ultra-precise brow pencil designed to impart the thinnest hair-like strokes for microblade-worthy effects without the blade.',1500.00,2),
(13,'Chanel Le Volume de Chanel Mascara','Chanel Le Volume de Chanel Mascara.jpg','It mixes long and short bristles to cling to each lash, plumping and lengthening them for a major Twiggy moment.',1976.45,2),
(14,'Giorgio Armani Eyes to Kill Mascara','Giorgio Armani Eyes to Kill Mascara.jpg','Firstly, its ultra-rich pigment means that just one swipe gives your lashes a full coat of product. Add the oversized brush, which lifts and separates lashes, and you\'ve got a close-to-perfect mascara.',3499.00,2),
(15,'Benefit Roller Lash Super Curling & Lifting Mascara','Benefit Roller Mascara.jpg','Our beauty director Cat Quinn swears by Benefit Roller Lash because of its ability to curl lashes in one swipe. The formula actually constricts lashes to pull them out and up, and the brush is designed to grab each individual lash.',2999.00,2),
(16,'Urban Decay Naked Palette','Urban Decay Naked Palette.jpg','It\'s the palette that revolutionized neutrals forever. Loaded with 12 bronze-hued shadows in an insane range of textures only Wende and our product development team could dream up—including matte, satin, shimmer and sparkle',5990.00,2),
(17,'KVD Vegan Beauty Serpentina Eyeshadow Palette','KVD Palette.jpg','A limited-edition eye shadow palette with a gold loose pigment jar and eight rich, jeweled tones, inspired by the essence of Egypt. Serpentina Eyeshadow Palette captures',2900.00,2),
(18,'Lorac UNZIPPED Eye Shadow Palette','Lorac UNZIPPED Eye Shadow Palette.jpg','“universally flattering nude eyeshadow palette.” It includes ten eyeshadows (0.39 oz. in total, or 0.039 oz. each) and a miniature-sized Behind the Scenes Eye Primer (0.19 oz.). Overall, it\'s a good palette with ten shades and no major issues.',2800.00,2),
(19,'Giorgio Armani Luminous Silk Foundation','Giorgio Foundation.jpg','n oil-free hydrating fluid with exclusive Micro-fil™ technology which helps to sculpt and brighten the skin, improving texture and blurring imperfections.',5790.00,3),
(20,'Chanel Vitalumière Aqua','Chanel Vitalumière Aqua.jpg','With a soft, water-light texture and light-to-medium coverage, the tiniest drop of this hybrid fluid foundation creates a natural-looking glow. Skin looks refined and feels refreshed, for an exquisite makeup experience.',2525.46,3),
(21,'Charlotte Tilbury Light Wonder Skin Foundation','Charlotte Foundation.jpg','lightweight formula that illuminates, smooths, hydrates, and visibly minimizes pores and wrinkles for flawless-looking skin.',2500.00,3),
(22,'NARS Radiant Creamy Concealer','NARS Radiant Creamy Concealer.jpg','multi-action, 16-hour formula that instantly masks imperfections, blurs the look of lines and wrinkles, and hides dark circles and signs of fatigue',2000.00,3),
(23,'Maybelline Super Stay Full Coverage Under-Eye Concealer','Maybelline Super Stay Concealer.jpg','This full-coverage, yet lightweight concealer features a precise paddle applicator that effortlessly glides the formula onto the skin for a smooth, seamless finish.',2594.00,3),
(24,'mac pro longwear concealer','mac pro longwear concealer.jpg','lightweight, fluid concealer that provides medium to full coverage with a comfortable, natural matte finish. Gives a smoother, flawless-looking finish on skin.',2050.00,3),
(25,'Jelly Pop Flush Blush','Jelly Pop Flush Blush.jpg','This unique jelly textured blush seamlessly melts into the cheeks for a sheer wash of color and sheen, without the stickiness.',845.74,3),
(26,'Artistique Blush','Artistique Blush.jpg','Supposed to have a “naturally glowing finish.” The formula is consistent: the blushes have a very soft, almost cream-like powder texture that blends out effortlessly to a luminous sheen with semi-opaque to opaque coverage',2308.68,3),
(27,'Beach Lip & Cheek Stick','Beach Lip & Cheek Stick.jpg','A dual-purpose lip-to-cheek creamy color stick. What it does: Beach Sticks can be used on cheeks as blush or on lips as a soft tint.',1950.00,3);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

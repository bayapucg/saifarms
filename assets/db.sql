/*
SQLyog Community v11.52 (64 bit)
MySQL - 10.1.32-MariaDB : Database - saif
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`saif` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `saif`;

/*Table structure for table `aboutus_details` */

DROP TABLE IF EXISTS `aboutus_details`;

CREATE TABLE `aboutus_details` (
  `ab_id` int(11) NOT NULL AUTO_INCREMENT,
  `aboutus` longtext,
  `choose_us` longtext,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`ab_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `aboutus_details` */

insert  into `aboutus_details`(`ab_id`,`aboutus`,`choose_us`,`updated_at`,`created_by`) values (1,' <p class=\"text-left\" xss=removed>SAIFARMS Goat & Sheep Farm is situated at the outskirts of Jangamvaripalle, C.S. Puram Prakasam District, Andhrapradesh, India. The farm has been established to pioneer in identifying, developing and propogating the best goat breeds that is suitable to the conditions preventant in C.S. Puram.</p>\r\n          <p class=\"text-left\">A lot of hard work has been put in to earn customer trust by ensuring that they are getting a great goat for breeding. We at the farm have been able to successfully blend, technology in traditional goat farming in the areas of goat stalls, feed, broiler goat concept and breeding.      </p>\r\n        ','<div class=\"text-left\">  SAIFARMS Goat & Sheep Farm has a team of experts including a dedicated vet to take care of the goats. SAIFARMS Goat & Sheep Farm has adopted and implemented modern, scientific and traditional methods to make goat farming a more commercially viable business for the local population. The staff is well trained and they ensure proper documentation of every goat in the farm to monitor their progress, growth and health.</div>\r\n        </header>\r\n  <br>\r\n  <h4 xss=removed>Mission:</h4>\r\n  <div>Ensuring that our products are of outstanding quality and value for money.</div>\r\n  <br>\r\n  <h4 xss=removed>Vission:</h4>\r\n  <div>Through our commitment to quality and constant monitoring and respect for the planet, we aim to exceed expectations and be rewarded with customer satisfaction.\r\n\r\n</div>','2019-12-17 11:15:06',0);

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(45) DEFAULT NULL,
  `name` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `designation` varchar(250) DEFAULT NULL,
  `dob` varchar(250) DEFAULT NULL,
  `qualification` varchar(250) DEFAULT NULL,
  `pwd` varchar(250) DEFAULT NULL,
  `org_password` varchar(250) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `mobile` varchar(45) DEFAULT NULL,
  `notes` varchar(250) DEFAULT NULL,
  `profile_pic` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert  into `admin`(`id`,`role`,`name`,`email`,`designation`,`dob`,`qualification`,`pwd`,`org_password`,`address`,`mobile`,`notes`,`profile_pic`,`status`,`created_at`,`updated_at`,`created_by`) values (3,'1','Admin','admin@gmail.com','','','','e10adc3949ba59abbe56e057f20f883e','123456','kothallai','9638527410','texXZ','1576475805.png',1,NULL,'2019-12-16 11:26:44',NULL);

/*Table structure for table `contact_list` */

DROP TABLE IF EXISTS `contact_list`;

CREATE TABLE `contact_list` (
  `c_l_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `mobile` varchar(45) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `message` longtext,
  `create_at` datetime DEFAULT NULL,
  PRIMARY KEY (`c_l_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `contact_list` */

insert  into `contact_list`(`c_l_id`,`name`,`mobile`,`email`,`message`,`create_at`) values (1,'Vasudevareddy','8500050944','vasudevareddy@gmail.com','LIke  this ','2019-12-16 19:28:57'),(2,'Vasudevareddy','8500050944','vasudevareddy@gmail.com','LIke  this ','2019-12-16 19:29:27');

/*Table structure for table `contactus_details` */

DROP TABLE IF EXISTS `contactus_details`;

CREATE TABLE `contactus_details` (
  `c_d_id` int(11) NOT NULL AUTO_INCREMENT,
  `text` text,
  `mobile` varchar(45) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `address` text,
  `tw` varchar(250) DEFAULT NULL,
  `fb` varchar(250) DEFAULT NULL,
  `ln` varchar(250) DEFAULT NULL,
  `you` varchar(250) DEFAULT NULL,
  `pin` varchar(250) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`c_d_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `contactus_details` */

insert  into `contactus_details`(`c_d_id`,`text`,`mobile`,`email`,`address`,`tw`,`fb`,`ln`,`you`,`pin`,`created_at`,`updated_at`,`created_by`) values (1,'Give us a ring to speak to a member of our team in the strictest confidence. Or you can fill out our contact form and we\'ll ring you back. 087 12 12 39 67 Our phone lines are open 24/7, 365 days a year','+91 97054 74959 ','saisheepfarm7@gmail.com','    Jangamvaripalle, C.S. Puram Prakasam District, Andhrapradesh ','xcZXC','xzcZXC','xzcZXC','xcZXC','xcZXc',NULL,'2019-12-16 07:15:54',0);

/*Table structure for table `founder_details` */

DROP TABLE IF EXISTS `founder_details`;

CREATE TABLE `founder_details` (
  `f_d_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `mobile` varchar(250) DEFAULT NULL,
  `text` text,
  `image` varchar(250) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`f_d_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `founder_details` */

insert  into `founder_details`(`f_d_id`,`name`,`email`,`mobile`,`text`,`image`,`updated_at`,`created_by`) values (1,'V.Srinivasa Reddy','Saisheepfarm7@gmail.com','+91 97054 74959 | +91 94903 73838 | +91 70328 68969','We Have Been Sheep Farmers In Maine Since 2013 With A Foundation Flock Of Nellore zodepi And Nellore Brown Sheep. Both Side Of Our Families Have A Long And Notable History Of Raising Sheep.','1576496615.png','2019-12-16 05:13:34',0);

/*Table structure for table `galleries` */

DROP TABLE IF EXISTS `galleries`;

CREATE TABLE `galleries` (
  `g_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `org_image` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`g_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

/*Data for the table `galleries` */

insert  into `galleries`(`g_id`,`name`,`image`,`org_image`,`status`,`created_at`,`updated_at`,`created_by`) values (2,'Breading Sheap','1576500894.png','3.png',1,'2019-12-16 18:24:54','2019-12-16 18:29:58',3),(3,'Breading Sheap','1576501073.png','1.png',1,'2019-12-16 18:27:53',NULL,3),(4,'Breading Sheap','1576501080.png','4.png',1,'2019-12-16 18:28:00',NULL,3),(5,'Breading Sheap','1576501088.png','5.png',1,'2019-12-16 18:28:07',NULL,3),(6,'Breading Sheap','1576501093.png','8.png',1,'2019-12-16 18:28:13',NULL,3),(7,'Breading Sheap','1576501099.png','7.png',1,'2019-12-16 18:28:19',NULL,3),(8,'Breading Sheap','1576501105.png','9.png',1,'2019-12-16 18:28:24',NULL,3),(9,'Breading Sheap','1576501110.png','11.png',1,'2019-12-16 18:28:30',NULL,3),(11,'Breading Sheap','1576501151.png','12.png',1,'2019-12-16 18:29:10',NULL,3),(12,'Breading Sheap','1576501158.png','11.png',1,'2019-12-16 18:29:18',NULL,3),(13,'Breading Sheap','1576501164.png','10.png',1,'2019-12-16 18:29:24',NULL,3),(14,'Breading Sheap','1576501174.png','2.png',1,'2019-12-16 18:29:33',NULL,3),(15,'Breading Sheap','1576501181.png','6.png',1,'2019-12-16 18:29:40',NULL,3),(17,'Breading Sheap','1576501721.png','1.png',1,'2019-12-16 18:38:40',NULL,3);

/*Table structure for table `home_banners` */

DROP TABLE IF EXISTS `home_banners`;

CREATE TABLE `home_banners` (
  `b_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text,
  `image` varchar(250) DEFAULT NULL,
  `org_image` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `create_at` datetime DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `create_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`b_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `home_banners` */

insert  into `home_banners`(`b_id`,`title`,`image`,`org_image`,`status`,`create_at`,`update_at`,`create_by`) values (2,'We Supply Consistently Better Silage','1576478167.jpg','1.jpg',1,'2019-12-16 12:06:07','2019-12-16 12:06:07',3),(3,'  Natural Ethical and Sustainable Sheap | Country Bird Farm Get Started Previous Next','1576478185.jpg','2.jpg',1,'2019-12-16 12:06:24','2019-12-16 12:06:24',3);

/*Table structure for table `home_page_about` */

DROP TABLE IF EXISTS `home_page_about`;

CREATE TABLE `home_page_about` (
  `h_p_a_id` int(11) NOT NULL AUTO_INCREMENT,
  `text` longtext,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`h_p_a_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `home_page_about` */

insert  into `home_page_about`(`h_p_a_id`,`text`,`status`,`created_at`,`created_by`,`updated_at`) values (1,'If you’ve suffered as a result of medical malpractice we’re here for you. As the One and Only clinical and medical negligence help line in the India, we know how to make a positive difference to your life. Our experienced medical negligence Clinicians & legal experts will take the time to understand what you’re going through, helping you get the answers and compensation you deserve.',1,NULL,3,'2019-12-16 05:16:49');

/*Table structure for table `home_page_about_more` */

DROP TABLE IF EXISTS `home_page_about_more`;

CREATE TABLE `home_page_about_more` (
  `h_p_a_m_id` int(11) NOT NULL AUTO_INCREMENT,
  `h_p_a_id` int(11) DEFAULT NULL,
  `img_ab_image` varchar(250) DEFAULT NULL,
  `img_ab_icon` varchar(250) DEFAULT NULL,
  `ab_image` varchar(250) DEFAULT NULL,
  `ab_icon` varchar(250) DEFAULT NULL,
  `ab_title` text,
  `ab_subtitle` text,
  `status` int(1) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`h_p_a_m_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

/*Data for the table `home_page_about_more` */

insert  into `home_page_about_more`(`h_p_a_m_id`,`h_p_a_id`,`img_ab_image`,`img_ab_icon`,`ab_image`,`ab_icon`,`ab_title`,`ab_subtitle`,`status`,`created_at`,`updated_at`,`created_by`) values (9,1,'1.png','sheep-ram-farm-animal-512.png','01576488432.png','001576490836.png','Sheap Farming ','help with planning and accessing the best care and support ',1,'2019-12-16 14:57:12','2019-12-16 17:16:49',3),(10,1,'7.png','14-512.png','11576488432.png','111576490143.png','Country Bird Farming','find out how rehabilitation can change lives ',1,'2019-12-16 14:57:12','2019-12-16 17:16:49',3),(11,1,'12.png','1063423.png','21576488432.png','221576490143.png','Goat Farming ','Our factsheets provide information on benefits you may be entitled to following an injury ',1,'2019-12-16 14:57:12','2019-12-16 17:16:49',3);

/*Table structure for table `home_page_fact_details` */

DROP TABLE IF EXISTS `home_page_fact_details`;

CREATE TABLE `home_page_fact_details` (
  `h_p_f_d_id` int(11) NOT NULL AUTO_INCREMENT,
  `text` text,
  `sheaps` varchar(45) DEFAULT NULL,
  `goats` varchar(45) DEFAULT NULL,
  `country_birds` varchar(45) DEFAULT NULL,
  `hard_workers` varchar(45) DEFAULT NULL,
  `updated_by` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`h_p_f_d_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `home_page_fact_details` */

insert  into `home_page_fact_details`(`h_p_f_d_id`,`text`,`sheaps`,`goats`,`country_birds`,`hard_workers`,`updated_by`,`created_by`) values (1,'Agrienvironmental schemes support conversion from conventional towards organic farming. Only few know how difficult organic sheep and goat farming is from animal welfare, ecological and economic perspective. Newcomers particularly overestimate the production and marketing potential of the field, and underestimate the associated husbandry ','10000','8000','20000 ','50','2019-12-16 04:37:11',3);

/*Table structure for table `home_page_service` */

DROP TABLE IF EXISTS `home_page_service`;

CREATE TABLE `home_page_service` (
  `h_p_s_id` int(11) NOT NULL AUTO_INCREMENT,
  `text` longtext,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`h_p_s_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `home_page_service` */

insert  into `home_page_service`(`h_p_s_id`,`text`,`status`,`created_at`,`created_by`,`updated_at`) values (1,'If you’ve suffered as a result of medical malpractice we’re here for you. As the One and Only clinical and medical negligence help line in the India, we know how to make a positive difference to your life. Our experienced medical negligence Clinicians & legal experts will take the time to understand what you’re going through, helping you get the answers and compensation you deserve.',1,NULL,3,'2019-12-16 04:07:06');

/*Table structure for table `home_page_service_more` */

DROP TABLE IF EXISTS `home_page_service_more`;

CREATE TABLE `home_page_service_more` (
  `h_p_a_sm_id` int(11) NOT NULL AUTO_INCREMENT,
  `h_p_s_id` int(11) DEFAULT NULL,
  `s_title` text,
  `s_subtitle` text,
  `status` int(1) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`h_p_a_sm_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

/*Data for the table `home_page_service_more` */

insert  into `home_page_service_more`(`h_p_a_sm_id`,`h_p_s_id`,`s_title`,`s_subtitle`,`status`,`created_at`,`updated_at`,`created_by`) values (12,1,'Breeding Rams','Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata',1,'2019-12-16 15:59:44','2019-12-16 16:07:06',3),(13,1,'Ramlams','Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur',1,'2019-12-16 15:59:44','2019-12-16 16:07:06',3),(15,1,'Sheep Supply','Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum',1,'2019-12-16 16:07:06',NULL,3),(16,1,'Meat Supply','At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque',1,'2019-12-16 16:07:06',NULL,3),(17,1,'Silage Grass','Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi',1,'2019-12-16 16:07:06',NULL,3),(18,1,'Live','Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi',1,'2019-12-16 16:07:06',NULL,3);

/*Table structure for table `services` */

DROP TABLE IF EXISTS `services`;

CREATE TABLE `services` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `b_description` longtext,
  `description` longtext,
  `image` varchar(250) DEFAULT NULL,
  `org_image` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `services` */

insert  into `services`(`s_id`,`name`,`b_description`,`description`,`image`,`org_image`,`status`,`created_at`,`updated_at`,`created_by`) values (2,'Breading Rams',' <p><strong>Breed selection</strong> is based on the intended\r\nmarket(s), on local climate, and personal preference. Breeds can be divided into eight categories.</p>\r\n    <p>To produce organic sheep, the farm must be registered with an approved organic control body. These control bodies each require a detailed set of standards to be followed. The system adopted should comply with those of your chosen control body since individual control body standards may differ slightly from each other, and from the EU Organic Standard. Some of the key aspects of production are given below.</p>\r\n   ','<p>If you are interested in alternative production and marketing methods, you may want to consider organic. “Organic” means, among other things, raising crops or livestock in a way that builds the soil and enhances biodiversity and ecological balance. Th e term “organic” may not be used except under a production system that meets all the requirements of the National Organic Program Regulations</p>\r\n','1576565585.mp4','breeding.mp4',1,'2019-12-17 12:23:05','2019-12-17 13:01:36',3),(3,'Breading Rams 1',' <p><strong>Breed selection</strong> is based on the intended\r\nmarket(s), on local climate, and personal preference. Breeds can be divided into eight categories.</p>\r\n    <p>To produce organic sheep, the farm must be registered with an approved organic control body. These control bodies each require a detailed set of standards to be followed. The system adopted should comply with those of your chosen control body since individual control body standards may differ slightly from each other, and from the EU Organic Standard. Some of the key aspects of production are given below.</p>\r\n   ','<p>If you are interested in alternative production and marketing methods, you may want to consider organic. “Organic” means, among other things, raising crops or livestock in a way that builds the soil and enhances biodiversity and ecological balance. Th e term “organic” may not be used except under a production system that meets all the requirements of the National Organic Program Regulations</p>\r\n','1576565615.mp4','chiken.mp4',1,'2019-12-17 12:23:35','2019-12-17 13:01:10',3);

/*Table structure for table `testimonials` */

DROP TABLE IF EXISTS `testimonials`;

CREATE TABLE `testimonials` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `text` varchar(250) DEFAULT NULL,
  `message` text,
  `image` varchar(250) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `testimonials` */

insert  into `testimonials`(`t_id`,`name`,`text`,`message`,`image`,`status`,`created_at`,`updated_at`,`created_by`) values (1,'Srinivasa Reddy','Reddy Meat Store','Sai meat farms is a great place to work. It was organized and everyone got along. Goats and Sheap is very healthy and active.','1576497780.jpg',2,'2019-12-16 17:33:14','2019-12-16 17:33:14',3),(2,'Srinivasa Reddy','Reddy Meat Store','Sai meat farms is a great place to work. It was organized and everyone got along. Goats and Sheap is very healthy and active.','1576497831.jpg',1,'2019-12-16 17:34:43','2019-12-16 17:34:43',3),(3,'Chandu','Chandu Chicken & Mutton Center','Thanks for Sai Farms, Really am so happy for joined with Sai Farms. They provide on time and health Goats and Sheap with Organic process','1576497984.jpg',1,'2019-12-16 17:36:24','0000-00-00 00:00:00',3);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

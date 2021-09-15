DROP TABLE IF EXISTS `movie`;

CREATE TABLE `movie` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `year` int(4) NOT NULL,
  `direction` varchar(50) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;

/*Data for the table `movie` */

insert  into `movie`(`id`,`name`,`year`,`direction`,`date`) values 
(1,'aaa',1234,'aaa','2021-09-15 14:31:29'),
(2,'qwe',1212,'acxs','2021-09-15 15:41:48'),
(3,'asd',2006,'amb','2021-09-15 15:54:09'),
(4,'zzz',2010,'mks','2021-09-15 15:54:29'),
(5,'try',2010,'poi','2021-09-15 16:00:09'),
(6,'fds',2010,'qwe','2021-09-15 15:58:32'),
(7,'mhg',2011,'cds','2021-09-15 15:58:32'),
(8,'dre',2017,'gfd','2021-09-15 15:58:32'),
(9,'mbb',2013,'bgf','2021-09-15 15:58:32'),
(10,'mmm',2015,'mkj','2021-09-15 15:58:32'),
(11,'vfg',2013,'aqw','2021-09-15 15:58:32'),
(12,'cds',2011,'xsa','2021-09-15 15:58:32'),
(13,'mld',2011,'vfd','2021-09-15 15:58:32'),
(14,'axz',2009,'aqwer','2021-09-15 17:18:17');

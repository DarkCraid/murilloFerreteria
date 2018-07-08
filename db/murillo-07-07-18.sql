/*
SQLyog Community v12.4.2 (64 bit)
MySQL - 10.1.26-MariaDB : Database - murilloferreteria
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`murilloferreteria` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish2_ci */;

USE `murilloferreteria`;

/*Table structure for table `compras` */

DROP TABLE IF EXISTS `compras`;

CREATE TABLE `compras` (
  `folio` varchar(9) COLLATE utf8_spanish2_ci NOT NULL,
  `nota` text COLLATE utf8_spanish2_ci NOT NULL,
  `id_proveedor` int(10) unsigned NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `total` double NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`folio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `compras` */

/*Table structure for table `inventario` */

DROP TABLE IF EXISTS `inventario`;

CREATE TABLE `inventario` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `costo_unidad` double NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `inventario` */

insert  into `inventario`(`id`,`descripcion`,`costo_unidad`,`status`) values 
(1,'tornillo',5,1),
(2,'torniquete',80,1);

/*Table structure for table `menu` */

DROP TABLE IF EXISTS `menu`;

CREATE TABLE `menu` (
  `id` int(2) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(40) NOT NULL COMMENT 'Opcion del menu',
  `ruta` text NOT NULL COMMENT 'ruta del archivo a cargar',
  `icono` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

/*Data for the table `menu` */

insert  into `menu`(`id`,`descripcion`,`ruta`,`icono`,`status`) values 
(1,'Inicio','Inicio','fa-home',1),
(2,'Ventas','Inicio/venta','fa-credit-card',1),
(3,'Compras','Compras','fa-shopping-cart',1),
(4,'Empleados','Inicio/Empleados','fa-user',1),
(5,'Proveedores','Inicio/Proveedores','fa-industry',1),
(6,'Inventario','Inicio/Inventario','fa-archive',1),
(7,'Historial','Inicio/Historial','fa-history',1),
(8,'Clientes','Inicio/Clientes','fa-users',1),
(9,'Caja','Inicio/Caja','fa-briefcase',1),
(10,'Reportes','Inicio/Reportes','',1);

/*Table structure for table `pedidos` */

DROP TABLE IF EXISTS `pedidos`;

CREATE TABLE `pedidos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `folio_compra` varchar(9) COLLATE utf8_spanish2_ci NOT NULL,
  `articulo` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `cantidad` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `folio_compra` (`folio_compra`),
  CONSTRAINT `folio_compra` FOREIGN KEY (`folio_compra`) REFERENCES `compras` (`folio`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `pedidos` */

/*Table structure for table `proveedores` */

DROP TABLE IF EXISTS `proveedores`;

CREATE TABLE `proveedores` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `a_p` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `a_m` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `domicilio` text COLLATE utf8_spanish2_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `proveedores` */

insert  into `proveedores`(`id`,`nombre`,`a_p`,`a_m`,`domicilio`,`status`) values 
(1,'Jesus Daniel','Perez','Duran','mi casa',1);

/*Table structure for table `telefonos` */

DROP TABLE IF EXISTS `telefonos`;

CREATE TABLE `telefonos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `numero` varchar(12) COLLATE utf8_spanish2_ci NOT NULL,
  `id_proveedor` int(10) unsigned NOT NULL,
  `id_tipo_telefono` enum('Empleado','Proveedor') COLLATE utf8_spanish2_ci NOT NULL DEFAULT 'Proveedor',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `telefonos` */

insert  into `telefonos`(`id`,`numero`,`id_proveedor`,`id_tipo_telefono`,`status`) values 
(1,'4871537745',1,'Proveedor',1);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user` varchar(30) NOT NULL,
  `tipo` varchar(45) NOT NULL,
  `pssw` text NOT NULL,
  `email` varchar(130) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `users` */

insert  into `users`(`id`,`user`,`tipo`,`pssw`,`email`,`status`) values 
(1,'daniel','administrador','110d46fcd978c24f306cd7fa23464d73','jesusperez@solemti.com',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

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

/*Table structure for table `caja` */

DROP TABLE IF EXISTS `caja`;

CREATE TABLE `caja` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `monto_inicial` double unsigned NOT NULL,
  `monto_entrada` double unsigned NOT NULL,
  `monto_salida` double unsigned NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `empleado_id` int(10) unsigned NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `caja` */

/*Table structure for table `categoria_producto` */

DROP TABLE IF EXISTS `categoria_producto`;

CREATE TABLE `categoria_producto` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `categoria` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `categoria_producto` */

/*Table structure for table `clientes` */

DROP TABLE IF EXISTS `clientes`;

CREATE TABLE `clientes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `a_p` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `a_m` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `domicilio` text COLLATE utf8_spanish2_ci NOT NULL,
  `puntos` int(10) unsigned NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `clientes` */

insert  into `clientes`(`id`,`nombre`,`a_p`,`a_m`,`domicilio`,`puntos`,`status`) values 
(1,'','','','↨',0,1),
(2,'qqw','w','w','e↨qw',0,1),
(3,'45645','&/(/&(&/',' g d---','-↨56876=/(=/(',0,1);

/*Table structure for table `compras` */

DROP TABLE IF EXISTS `compras`;

CREATE TABLE `compras` (
  `folio` varchar(11) COLLATE utf8_spanish2_ci NOT NULL,
  `nota` text COLLATE utf8_spanish2_ci,
  `id_proveedor` int(10) unsigned NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `total` double NOT NULL,
  `id_empleado` int(10) unsigned NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`folio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `compras` */

/*Table structure for table `empleados` */

DROP TABLE IF EXISTS `empleados`;

CREATE TABLE `empleados` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `a_p` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `a_m` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `domicilio` text COLLATE utf8_spanish2_ci NOT NULL,
  `id_user` int(10) unsigned NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `empleados` */

insert  into `empleados`(`id`,`nombre`,`a_p`,`a_m`,`domicilio`,`id_user`,`status`) values 
(1,'Jesus Daniel','Pérez','Durán','mi casa',1,1);

/*Table structure for table `inventario` */

DROP TABLE IF EXISTS `inventario`;

CREATE TABLE `inventario` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `costo_unidad` double unsigned NOT NULL,
  `cantidad` int(10) unsigned NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `inventario` */

insert  into `inventario`(`id`,`descripcion`,`costo_unidad`,`cantidad`,`status`) values 
(1,'tornillo',5,4,1),
(2,'torniquete',80,2,1),
(3,'qwe',5,2106,1),
(4,'wer',5,2225,1),
(5,'wre',5,468,1),
(6,'fgh',5,456,1),
(7,'yui',5,67,1);

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
(2,'Ventas','Ventas','fa-credit-card',1),
(3,'Compras','Compras','fa-shopping-cart',1),
(4,'Empleados','Empleado','fa-user',1),
(5,'Proveedores','Proveedores','fa-industry',1),
(6,'Inventario','Inventario','fa-archive',1),
(7,'Historial','Inicio/Historial','fa-history',0),
(8,'Clientes','Cliente','fa-users',1),
(9,'Caja','Caja','fa-briefcase',1),
(10,'Reportes','Reportes','fa-line-chart',1);

/*Table structure for table `movimientos` */

DROP TABLE IF EXISTS `movimientos`;

CREATE TABLE `movimientos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tipo_movimiento` int(10) unsigned NOT NULL,
  `descripcion` text COLLATE utf8_spanish2_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `empleado_id` int(10) unsigned NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `movimientos` */

/*Table structure for table `pedidos` */

DROP TABLE IF EXISTS `pedidos`;

CREATE TABLE `pedidos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `folio_compra` varchar(11) COLLATE utf8_spanish2_ci NOT NULL,
  `articulo` varchar(200) COLLATE utf8_spanish2_ci NOT NULL,
  `cantidad` int(11) NOT NULL,
  `costo_unitario` double NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `folio_compra` (`folio_compra`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `pedidos` */

/*Table structure for table `productos_proveedores` */

DROP TABLE IF EXISTS `productos_proveedores`;

CREATE TABLE `productos_proveedores` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `inventario_id` int(10) unsigned NOT NULL,
  `proveedor_id` int(10) unsigned NOT NULL,
  `costo_compra` double unsigned NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `productos_proveedores` */

/*Table structure for table `productos_venta` */

DROP TABLE IF EXISTS `productos_venta`;

CREATE TABLE `productos_venta` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `folio_venta` varchar(11) COLLATE utf8_spanish2_ci NOT NULL,
  `articulo` text COLLATE utf8_spanish2_ci NOT NULL,
  `cantidad` int(10) unsigned NOT NULL,
  `costo_unitario` double unsigned NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `productos_venta` */

/*Table structure for table `proveedores` */

DROP TABLE IF EXISTS `proveedores`;

CREATE TABLE `proveedores` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `a_p` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `a_m` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `domicilio` text COLLATE utf8_spanish2_ci NOT NULL,
  `rfc` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `proveedores` */

insert  into `proveedores`(`id`,`nombre`,`a_p`,`a_m`,`domicilio`,`rfc`,`status`) values 
(1,'jesus daniel','perez','duran','traca, su casa, la','matraca',1),
(2,'jose','perez','leon','esta, donde, su','canton',1);

/*Table structure for table `telefonos` */

DROP TABLE IF EXISTS `telefonos`;

CREATE TABLE `telefonos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `numero` varchar(12) COLLATE utf8_spanish2_ci NOT NULL,
  `id_person` int(10) unsigned NOT NULL COMMENT 'corresponde al id de un cliente, un empleado o un proveedor',
  `tipo` enum('Empleado','Proveedor','Cliente') COLLATE utf8_spanish2_ci NOT NULL DEFAULT 'Proveedor' COMMENT 'tipo de telefono, si es usuario o proveedor',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `telefonos` */

insert  into `telefonos`(`id`,`numero`,`id_person`,`tipo`,`status`) values 
(1,'56783325567',1,'Proveedor',1),
(2,'876544332233',1,'Proveedor',1),
(3,'1231231233',2,'Proveedor',1),
(4,'7897897896',2,'Proveedor',1),
(5,'4564564565',2,'Proveedor',1),
(6,'',1,'Cliente',1),
(7,'e',2,'Cliente',1),
(8,'-',3,'',1);

/*Table structure for table `tipo_movimientos` */

DROP TABLE IF EXISTS `tipo_movimientos`;

CREATE TABLE `tipo_movimientos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tipo` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `tipo_movimientos` */

insert  into `tipo_movimientos`(`id`,`tipo`,`status`) values 
(1,'Compra',1),
(2,'Venta',1),
(3,'Devolución cliente',1),
(4,'Devolición proveedor',1);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user` varchar(30) NOT NULL,
  `tipo` enum('Administrador','Empleado') NOT NULL DEFAULT 'Empleado',
  `pssw` text NOT NULL,
  `email` varchar(130) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `users` */

insert  into `users`(`id`,`user`,`tipo`,`pssw`,`email`,`status`) values 
(1,'daniel','Administrador','110d46fcd978c24f306cd7fa23464d73','jesusperez@solemti.com',1);

/*Table structure for table `ventas` */

DROP TABLE IF EXISTS `ventas`;

CREATE TABLE `ventas` (
  `folio` varchar(11) COLLATE utf8_spanish2_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `total` double unsigned NOT NULL,
  `id_empleado` int(10) unsigned NOT NULL,
  `id_cliente` int(10) unsigned DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`folio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

/*Data for the table `ventas` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
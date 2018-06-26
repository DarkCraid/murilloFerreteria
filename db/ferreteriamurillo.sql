/*
SQLyog Community v12.4.2 (64 bit)
MySQL - 10.1.26-MariaDB : Database - ferreteriamurillo
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`ferreteriamurillo` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `ferreteriamurillo`;

/*Table structure for table `caja` */

DROP TABLE IF EXISTS `caja`;

CREATE TABLE `caja` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `dinero_entrada` double unsigned NOT NULL DEFAULT '0' COMMENT 'Dinero que entra a la caja (forma de ventas realizadas al día). Todo el dinero que entra al negocio',
  `dinero_salida` double unsigned NOT NULL DEFAULT '0' COMMENT 'Dinero que sale del negocio (compras de insumos, devoluciones, etc...)',
  `dinero_inicio` double unsigned NOT NULL DEFAULT '0' COMMENT 'Dinero Inicial del negocio al día',
  `TIMESTAMP` timestamp(6) NULL DEFAULT NULL,
  `empleados_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`,`empleados_id`),
  KEY `fk_caja_empleados1_idx` (`empleados_id`),
  CONSTRAINT `fk_caja_empleados1` FOREIGN KEY (`empleados_id`) REFERENCES `empleados` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `caja` */

/*Table structure for table `categoria_producto` */

DROP TABLE IF EXISTS `categoria_producto`;

CREATE TABLE `categoria_producto` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Categoria de producto, donde se establece si en el inventario el producto es, tornillos, clavos, martillos.... etc...';

/*Data for the table `categoria_producto` */

/*Table structure for table `cliente` */

DROP TABLE IF EXISTS `cliente`;

CREATE TABLE `cliente` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `domicilio` varchar(255) DEFAULT NULL,
  `telefono_cliente_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`telefono_cliente_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `cliente` */

/*Table structure for table `compra` */

DROP TABLE IF EXISTS `compra`;

CREATE TABLE `compra` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `fecha_de_compra` timestamp(6) NULL DEFAULT NULL,
  `productos_proveedores_proveedores_id` int(10) unsigned NOT NULL,
  `productos_proveedores_inventario_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`,`productos_proveedores_proveedores_id`,`productos_proveedores_inventario_id`),
  KEY `fk_compra_productos_proveedores1_idx` (`productos_proveedores_proveedores_id`,`productos_proveedores_inventario_id`),
  CONSTRAINT `fk_compra_productos_proveedores1` FOREIGN KEY (`productos_proveedores_proveedores_id`, `productos_proveedores_inventario_id`) REFERENCES `productos_proveedores` (`proveedores_id`, `inventario_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Ticket de compra de producto hacia el proveedor, tiene timestamp para conocer cuando se realizo la compra, esta relacionada con:\n-Prodcutos proveedores\n-Inventario (desde la tabla productos proveedores)';

/*Data for the table `compra` */

/*Table structure for table `empleados` */

DROP TABLE IF EXISTS `empleados`;

CREATE TABLE `empleados` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `apellido_paterno` varchar(45) NOT NULL,
  `apellido_materno` varchar(45) NOT NULL,
  `domicilio` varchar(45) DEFAULT NULL,
  `telefono_empleado_id` int(10) unsigned NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `id_user` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`,`telefono_empleado_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `empleados` */

/*Table structure for table `inventario` */

DROP TABLE IF EXISTS `inventario`;

CREATE TABLE `inventario` (
  `id` int(10) unsigned NOT NULL,
  `cantidad_en_inventario` int(10) unsigned NOT NULL,
  `costo` double NOT NULL,
  `impuesto` double DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  `ganancia` double unsigned NOT NULL DEFAULT '0',
  `descripcion` text NOT NULL,
  `Categoria_Producto_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`,`Categoria_Producto_id`),
  KEY `fk_inventario_Categoria_Producto1_idx` (`Categoria_Producto_id`),
  CONSTRAINT `fk_inventario_Categoria_Producto1` FOREIGN KEY (`Categoria_Producto_id`) REFERENCES `categoria_producto` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabla de Inventario, se guarda la información de cantidad de un producto en específico, el costo, el iva, el status, la ganancia (que se obtiene mediante una operación, no recuerdo cual es la operación que maneja, preguntar a Fer), Descripcion del objeto de inventario.\nEsta relacionada con:\n-Categoria de producto';

/*Data for the table `inventario` */

/*Table structure for table `menu` */

DROP TABLE IF EXISTS `menu`;

CREATE TABLE `menu` (
  `id` int(2) unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(40) NOT NULL COMMENT 'Opcion del menu',
  `ruta` text NOT NULL COMMENT 'ruta del archivo a cargar',
  `icono` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

/*Data for the table `menu` */

insert  into `menu`(`id`,`descripcion`,`ruta`,`icono`,`status`) values 
(1,'Inicio','Inicio/index','fa-home',1),
(2,'Ventas','Inicio/venta','fa-credit-card',1),
(3,'Compras','Inicio/Compra','fa-shopping-cart',1),
(4,'Empleados','Inicio/Empleados','fa-user',1),
(5,'Proveedores','Inicio/Proveedores','fa-industry',1),
(6,'Inventario','Inicio/Inventario','fa-archive',1),
(7,'Historial','Inicio/Historial','fa-history',1),
(8,'Clientes','Inicio/Clientes','fa-users',1),
(9,'Caja','Inicio/Caja','fa-briefcase',1);

/*Table structure for table `movimiento` */

DROP TABLE IF EXISTS `movimiento`;

CREATE TABLE `movimiento` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `relacion_movimiento_id` int(11) NOT NULL,
  `inventario_id` int(10) unsigned NOT NULL,
  `Cantidad` int(10) unsigned NOT NULL DEFAULT '1',
  `Motivo` text,
  PRIMARY KEY (`id`,`relacion_movimiento_id`,`inventario_id`),
  KEY `fk_venta_cliente_compro_producto1_idx` (`relacion_movimiento_id`),
  KEY `fk_venta_inventario1_idx` (`inventario_id`),
  CONSTRAINT `fk_venta_cliente_compro_producto1` FOREIGN KEY (`relacion_movimiento_id`) REFERENCES `relacion_movimiento` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_venta_inventario1` FOREIGN KEY (`inventario_id`) REFERENCES `inventario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Movimientos, aqui se guardan los movimientos de compras y devoluciones con los clientes. Se relaciona con:\n-Cliente';

/*Data for the table `movimiento` */

/*Table structure for table `productos_proveedores` */

DROP TABLE IF EXISTS `productos_proveedores`;

CREATE TABLE `productos_proveedores` (
  `proveedores_id` int(10) unsigned NOT NULL,
  `inventario_id` int(10) unsigned NOT NULL,
  `Precio` double NOT NULL,
  PRIMARY KEY (`proveedores_id`,`inventario_id`),
  KEY `fk_proveedores_has_inventario_inventario1_idx` (`inventario_id`),
  KEY `fk_proveedores_has_inventario_proveedores1_idx` (`proveedores_id`),
  CONSTRAINT `fk_proveedores_has_inventario_inventario1` FOREIGN KEY (`inventario_id`) REFERENCES `inventario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_proveedores_has_inventario_proveedores1` FOREIGN KEY (`proveedores_id`) REFERENCES `proveedores` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Tabla donde se guarda el registro en el inventario del producto que se compro/comprara al proveedor, asi como el precio de compra del mismo producto. Esta relacionada con:\n-Proveedores';

/*Data for the table `productos_proveedores` */

/*Table structure for table `proveedores` */

DROP TABLE IF EXISTS `proveedores`;

CREATE TABLE `proveedores` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `domicilio` varchar(45) NOT NULL,
  `RFC` varchar(45) NOT NULL,
  `telefono_proveedor_id` int(10) unsigned NOT NULL,
  `status` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`,`telefono_proveedor_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `proveedores` */

/*Table structure for table `relacion_movimiento` */

DROP TABLE IF EXISTS `relacion_movimiento`;

CREATE TABLE `relacion_movimiento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cliente_id` int(10) unsigned NOT NULL,
  `empleados_id` int(10) unsigned NOT NULL,
  `fecha_de_compra` timestamp(6) NULL DEFAULT NULL,
  `total` double unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`,`cliente_id`,`empleados_id`),
  KEY `fk_inventario_has_cliente_cliente1_idx` (`cliente_id`),
  KEY `fk_cliente_compro_producto_empleados1_idx` (`empleados_id`),
  CONSTRAINT `fk_cliente_compro_producto_empleados1` FOREIGN KEY (`empleados_id`) REFERENCES `empleados` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_inventario_has_cliente_cliente1` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `relacion_movimiento` */

/*Table structure for table `tipo_telefono` */

DROP TABLE IF EXISTS `tipo_telefono`;

CREATE TABLE `tipo_telefono` (
  `id` int(11) NOT NULL,
  `telefono` varchar(45) NOT NULL DEFAULT 'Sin Telefono',
  `empleados_id` int(10) unsigned DEFAULT '0',
  `proveedores_id` int(10) unsigned DEFAULT '0',
  `cliente_id` int(10) unsigned DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `fk_tipo_telefono_empleados1_idx` (`empleados_id`),
  KEY `fk_tipo_telefono_proveedores1_idx` (`proveedores_id`),
  KEY `fk_tipo_telefono_cliente1_idx` (`cliente_id`),
  CONSTRAINT `fk_tipo_telefono_cliente1` FOREIGN KEY (`cliente_id`) REFERENCES `cliente` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_tipo_telefono_empleados1` FOREIGN KEY (`empleados_id`) REFERENCES `empleados` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `fk_tipo_telefono_proveedores1` FOREIGN KEY (`proveedores_id`) REFERENCES `proveedores` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `tipo_telefono` */

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

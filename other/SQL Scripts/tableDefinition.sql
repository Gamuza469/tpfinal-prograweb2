CREATE DATABASE `tpfinal-prograweb2`;
USE `tpfinal-prograweb2`;

CREATE TABLE cliente (
	cuit VARCHAR(11),
	nombre VARCHAR(127) NOT NULL,
	apellido VARCHAR(127),
	telefono VARCHAR(127) NOT NULL,
	domicilio VARCHAR(255),
	eMail VARCHAR(127),
	PRIMARY KEY (`cuit`)
);

CREATE TABLE categoria_de_producto (
	idCategoria INTEGER AUTO_INCREMENT,
	descripcion VARCHAR(255) NOT NULL,
	PRIMARY KEY (`idCategoria`)
);

CREATE TABLE producto (
	codigoProducto INTEGER AUTO_INCREMENT,
	descripcion VARCHAR(255) NOT NULL,
	idCategoria INTEGER,
	costo FLOAT(5,2),
	precioDeVenta FLOAT(5,2) NOT NULL,
	PRIMARY KEY (`codigoProducto`),
	FOREIGN KEY (`idCategoria`) REFERENCES `categoria_de_producto` (`idCategoria`)
		ON UPDATE CASCADE
		ON DELETE CASCADE
);

CREATE TABLE factura (
	numeroFactura INTEGER AUTO_INCREMENT,
	cuit VARCHAR(11),
	PRIMARY KEY (`numeroFactura`),
	FOREIGN KEY (`cuit`) REFERENCES `cliente` (`cuit`)
		ON UPDATE CASCADE
		ON DELETE CASCADE
);

CREATE TABLE movimiento_factura (
	idMovimiento INTEGER AUTO_INCREMENT,
	numeroFactura INTEGER,
	codigoProducto INTEGER,
	PRIMARY KEY (`idMovimiento`),
	FOREIGN KEY (`numeroFactura`) REFERENCES `factura` (`numeroFactura`)
		ON UPDATE CASCADE
		ON DELETE CASCADE,
	FOREIGN KEY (`codigoProducto`) REFERENCES `producto` (`codigoProducto`)
		ON UPDATE CASCADE
		ON DELETE CASCADE
);

CREATE TABLE service (
	codigoService INTEGER AUTO_INCREMENT,
	cuit VARCHAR(11),
	equipo VARCHAR(255) NOT NULL,
	problema VARCHAR(255) NOT NULL,
	diagnostico VARCHAR(255),
	solucion VARCHAR(255),
	fechaDeEntrada DATE,
	PRIMARY KEY (`codigoService`),
	FOREIGN KEY (`cuit`) REFERENCES `cliente` (`cuit`)
		ON UPDATE CASCADE
		ON DELETE CASCADE
);
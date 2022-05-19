create database almacensoporte;
CREATE SCHEMA `almacensoporte` DEFAULT CHARACTER SET utf8 ;

use almacensoporte;

create table usuarios(
    id_usuario int auto_increment,
    nombUsuario varchar(50),
    passUsuario text(50),
    fechaCaptura date,
    primary key(id_usuario)
);
create table categorias(
    id_categoria int auto_increment,
    id_usuario int not null,
    nombCategoria varchar(150),
    fechaCaptura date,
    primary key(id_categoria)
);
create table contratos(
    id_contrato int auto_increment,
    id_usuario int not null,
    nombContrato varchar(150),
    fechaAdquiere date,
    garantia varchar(150),
    proveedor varchar(500),
    fechaCaptura date,
    primary key(id_contrato)
);
create table productos(
    id_producto int auto_increment,
    id_categoria int not null,
    id_contrato int not null,
    nombProducto varchar(500),
    serieProducto varchar(50),
    codigoProducto varchar(20),
    marcaProducto varchar(50),
    modeloProducto varchar(50),
    cantidadProducto int,
    estadoProducto varchar(50),
    fechaCaptura date,
    primary key(id_producto)
);
create table empleados(
    id_empleado int auto_increment,
    nombEmpleado varchar(200),
    apellidoEmpleado varchar(200),
    cargoEmpleado varchar(200),
    gerencia varchar(200),
    estadoEmpleado varchar(50),
    primary key(id_empleado)
);
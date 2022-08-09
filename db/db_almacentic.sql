create database db_almacentic;
CREATE SCHEMA `db_almacentic` DEFAULT CHARACTER SET utf8 ;

use db_almacentic;

create table rol(
    id_rol int auto_increment,
    nom_rol varchar(50),
    desc_rol varchar(100),
    primary key(id_rol)
);

create table usuario(
    id_usuario int auto_increment,
    id_rol int not null,
    id_empleado int not null,
    nom_usuario varchar(100),
    pass_usuario varchar(100),
    estado_usuario int,
    fecha_captura date,
    primary key(id_usuario)
);

create table empleado(
    id_empleado int auto_increment,
    nom_empleado varchar(200),
    ape_empleado varchar(200),
    cargo_empleado varchar(245),
    area_empleado varchar(245),
    gerencia_empleado varchar(245),
    grupo_empleado int,
    estado_empleado int,
    primary key(id_empleado)
);

create table equipo(
    id_equipo int auto_increment,
    id_categoria int not null,
    id_contrato int not null,
    nom_equipo varchar(200),
    serie_equipo varchar(100),
    codigo_equipo varchar(50),
    marca_equipo varchar(100),
    modelo_equipo varchar(100),
    cantidad_equipo int(100),
    estado_equipo int,
    fecha_captura date,
    primary key(id_equipo)
);

create table categoria(
    id_categoria int auto_increment,
    nom_categoria varchar(50),
    desc_categoria varchar(100),
    fecha_captura date,
    primary key(id_categoria)
);

create table contrato(
    id_contrato int auto_increment,
    nom_contrato varchar(50),
    adquiere_contrato date,
    garantia_contrato varchar(100),
    proveedor_contrato varchar(100),
    fecha_captura date,
    primary key(id_contrato)
);

create table sede(
    id_sede int auto_increment,
    nom_sede varchar(50),
    direccion_sede varchar(200),
    ciudad_sede varchar(50),
    primary key(id_sede)
);

create table movimiento(
    id_movimiento int not null,
    id_usuario int,
    id_equipo int,
    id_empleado int,
    id_sede int,
    fecha_movimiento date,
    tipo_movimiento varchar(100),
    obs_movimiento varchar(245)
);
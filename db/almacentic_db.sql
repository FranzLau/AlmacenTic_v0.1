create database almacentic_db;
CREATE SCHEMA `almacentic_db` DEFAULT CHARACTER SET utf8 ;

use almacentic_db;

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
    id_emp int auto_increment,
    id_cargo int not null,
    id_area int not null,
    id_gerencia int not null,
    nom_emp varchar(200),
    ape_emp varchar(200),
    email_emp varchar(200),
    telefono_emp varchar(20),
    estado_emp int,
    primary key(id_emp)
);

create table equipo(
    id_equipo int auto_increment,
    id_categoria int not null,
    id_contrato int not null,
    nom_equipo varchar(200),
    tcod_equipo varchar(10),
    cod_equipo varchar(20),
    inv_equipo varchar(20),
    serie_equipo varchar(100),
    marca_equipo varchar(100),
    modelo_equipo varchar(100),
    cantidad_equipo int,
    estado_equipo varchar(10),
    condicion_equipo varchar(10),
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

create table sede(
    id_sede int auto_increment,
    nom_sede varchar(50),
    direccion_sede varchar(200),
    ciudad_sede varchar(50),
    primary key(id_sede)
);

create table contrato(
    id_contrato int auto_increment,
    nom_contrato varchar(50),
    num_pedido varchar(100),
    num_contrato varchar(100),
    fecha_contrato date,
    garantia_contrato varchar(100),
    prov_contrato varchar(100),
    tipo_contrato int,
    primary key(id_contrato)
);

create table cargo(
    id_cargo int auto_increment,
    nom_cargo varchar(200),
    primary key(id_cargo)
);

create table area(
    id_area int auto_increment,
    nom_area varchar(200),
    primary key(id_area)
);

create table gerencia(
    id_gerencia int auto_increment,
    nom_gerencia varchar(200),
    primary key(id_gerencia)
);

create table movimiento(
    id_mov int auto_increment,
    id_usuario int,
    id_emp int,
    id_sede int,
    fecha_mov date,
    tipo_mov varchar(50),
    detalles_mov varchar(245),
    grupo_mov varchar(100),
    primary key(id_mov)
);

create table detalleMovimiento(
    id_dmov int auto_increment,
    id_mov int,
    id_equipo int,
    cantidad_equipo int,
    bandera_dmov varchar(100),
    sticker_dmov varchar(100),
    primary key(id_dmov)
)

/*-----------------------------------------------------------------*/

create table imagen(
    id_imagen int auto_increment,
    id_categoria int not null,
    nom_imagen varchar(100),
    ruta_imagen varchar(200),
    fecha_subida date,
    primary key(id_imagen)
);



create table soporte (
    id_soporte int auto_increment,
    id_sede int,
    id_empleado int,
    fecha_inicio date,
    fecha_fin date,
    equipo_soporte varchar(50),
    servicio_soporte varchar(50),
    tipo_soporte varchar(50),
    num_soporte varchar(100),
    desc_soporte varchar(250),
    trat_soporte varchar(250),
    solu_soporte varchar(50),
    primary key(id_soporte)
);
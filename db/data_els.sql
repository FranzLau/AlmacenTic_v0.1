--
-- Estructura de tabla para la tabla `GERENCIA`
--
INSERT INTO gerencia (nom_gerencia) VALUES ('GERENCIA GENERAL');
INSERT INTO gerencia (nom_gerencia) VALUES ('GERENCIA COMERCIAL');
INSERT INTO gerencia (nom_gerencia) VALUES ('GERENCIA DE ADMINISTRACIÓN Y FINANZAS');
INSERT INTO gerencia (nom_gerencia) VALUES ('GERENCIA DE PLANEAMIENTO Y CONTROL DE GESTIÓN');
INSERT INTO gerencia (nom_gerencia) VALUES ('GERENCIA TÉCNICA');
INSERT INTO gerencia (nom_gerencia) VALUES ('GERENCIA DE PROYECTOS');
INSERT INTO gerencia (nom_gerencia) VALUES ('GERENCIA ZONAL MOQUEGUA');
INSERT INTO gerencia (nom_gerencia) VALUES ('GERENCIA ZONAL TACNA');
INSERT INTO gerencia (nom_gerencia) VALUES ('GERENCIA ZONAL ILO');
INSERT INTO gerencia (nom_gerencia) VALUES ('SUB GERENCIA DE TECNOLOGÍA DE INFORMACIÓN Y COMUNICACIONES');
INSERT INTO gerencia (nom_gerencia) VALUES ('SUB GERENCIA LEGAL');

--
-- Estructura de tabla para la tabla `AREA`
--
INSERT INTO area (nom_area) VALUES ('GERENCIA GENERAL');
INSERT INTO area (nom_area) VALUES ('GERENCIA COMERCIAL');
INSERT INTO area (nom_area) VALUES ('GERENCIA DE ADMINISTRACIÓN Y FINANZAS');
INSERT INTO area (nom_area) VALUES ('GERENCIA DE PLANEAMIENTO Y CONTROL DE GESTIÓN');
INSERT INTO area (nom_area) VALUES ('GERENCIA TÉCNICA');
INSERT INTO area (nom_area) VALUES ('GERENCIA DE PROYECTOS');
INSERT INTO area (nom_area) VALUES ('GERENCIA ZONAL MOQUEGUA');
INSERT INTO area (nom_area) VALUES ('GERENCIA ZONAL TACNA');
INSERT INTO area (nom_area) VALUES ('GERENCIA ZONAL ILO');
INSERT INTO area (nom_area) VALUES ('SUB GERENCIA DE TECNOLOGÍA DE INFORMACIÓN Y COMUNICACIONES');
INSERT INTO area (nom_area) VALUES ('SUB GERENCIA LEGAL');

INSERT INTO area (nom_area) VALUES ('DEPARTAMENTO COMERCIAL ZONAL TACNA');
INSERT INTO area (nom_area) VALUES ('DEPARTAMENTO COMERCIAL ZONAL MOQUEGUA');
INSERT INTO area (nom_area) VALUES ('DEPARTAMENTO COMERCIAL ZONAL ILO');
INSERT INTO area (nom_area) VALUES ('DEPARTAMENTO DE OPERACIONES ZONAL TACNA');
INSERT INTO area (nom_area) VALUES ('DEPARTAMENTO DE OPERACIONES ZONAL MOQUEGUA');
INSERT INTO area (nom_area) VALUES ('DEPARTAMENTO DE OPERACIONES ZONAL ILO');
INSERT INTO area (nom_area) VALUES ('DEPARTAMENTO DE ADMINISTRACIÓN ZONAL MOQUEGUA');
INSERT INTO area (nom_area) VALUES ('DEPARTAMENTO DE ADMINISTRACIÓN ZONAL ILO');
INSERT INTO area (nom_area) VALUES ('DEPARTAMENTO DE SEGURIDAD Y MEDIO AMBIENTE');
INSERT INTO area (nom_area) VALUES ('DEPARTAMENTO DE CONTROL DE GESTIÓN');
INSERT INTO area (nom_area) VALUES ('DEPARTAMENTO DE PLANEAMIENTO ELÉCTRICO');
INSERT INTO area (nom_area) VALUES ('DEPARTAMENTO DE CONTABILIDAD Y FINANZAS');
INSERT INTO area (nom_area) VALUES ('DEPARTAMENTO DE LOGISTICA');
INSERT INTO area (nom_area) VALUES ('DEPARTAMENTO DE OPERACIONES COMERCIALES');
INSERT INTO area (nom_area) VALUES ('DEPARTAMENTO DE OPERACIONES Y TRANSMISIÓN');
INSERT INTO area (nom_area) VALUES ('DEPARTAMENTO DE PROGRAMACIÓN DE CONEXIONES');
INSERT INTO area (nom_area) VALUES ('DEPARTAMENTO DE FISCALIZACIÓN Y CALIDAD');
INSERT INTO area (nom_area) VALUES ('DEPARTAMENTO DE MANTENIMIENTO');
INSERT INTO area (nom_area) VALUES ('DEPARTAMENTO DE EXCELENCIA OPERACIONAL');
INSERT INTO area (nom_area) VALUES ('DEPARTAMENTO DE ACTIVO FIJO');
INSERT INTO area (nom_area) VALUES ('DEPARTAMENTO DE GESTIÓN HUMANA');
INSERT INTO area (nom_area) VALUES ('DEPARTAMENTO DE DESARROLLO DE PROYECTOS');
INSERT INTO area (nom_area) VALUES ('DEPARTAMENTO DE INVESTIGACIÓN DE PROYECTOS');
INSERT INTO area (nom_area) VALUES ('DEPARTAMENTO DE ATENCIÓN AL CLIENTE');
INSERT INTO area (nom_area) VALUES ('DEPARTAMENTO DE CLIENTES LIBRES Y MAYORES');
INSERT INTO area (nom_area) VALUES ('OFICINA DE IMAGEN Y RESPONSABILIDAD SOCIAL');
INSERT INTO area (nom_area) VALUES ('ORGANO DE CONTROL INSTITUCIONAL');

--
-- Estructura de tabla para la tabla `CARGO`
--
INSERT INTO cargo (nom_cargo) VALUES ('');

--
-- Estructura de tabla para la tabla `ROL`
--
INSERT INTO rol (nom_rol,desc_rol) VALUES ('Admin','Administrador del sistema');
INSERT INTO rol (nom_rol,desc_rol) VALUES ('Operador','Operador del sistema');
INSERT INTO rol (nom_rol,desc_rol) VALUES ('Cliente','Cliente del sistema');

--
-- Estructura de tabla para la tabla `usuarios`
--
INSERT INTO usuario (id_rol,nom_usuario,pass_usuario,estado_usuario,fecha_captura) VALUES ('1','tsoporte7','admin','1','2023-11-14');

--
-- Estructura de tabla para la tabla `sedes`
--
INSERT INTO sede (nom_cargo) VALUES ('');
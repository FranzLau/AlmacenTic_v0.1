--
-- Estructura de tabla para la tabla `ROL`
--
INSERT INTO rol (nom_rol,desc_rol) VALUES ('Admin','Administrador del sistema');
INSERT INTO rol (nom_rol,desc_rol) VALUES ('Operador','Operador del sistema');
INSERT INTO rol (nom_rol,desc_rol) VALUES ('Cliente','Cliente del sistema');
--
-- Estructura de tabla para la tabla `GERENCIA`
--
INSERT INTO gerencia (nom_gerencia) VALUES ('SUB GERENCIA DE TECNOLOGÍA DE INFORMACIÓN Y COMUNICACIONES');
INSERT INTO gerencia (nom_gerencia) VALUES ('SUB GERENCIA LEGAL');
INSERT INTO gerencia (nom_gerencia) VALUES ('GERENCIA GENERAL');
INSERT INTO gerencia (nom_gerencia) VALUES ('GERENCIA COMERCIAL');
INSERT INTO gerencia (nom_gerencia) VALUES ('GERENCIA DE ADMINISTRACIÓN Y FINANZAS');
INSERT INTO gerencia (nom_gerencia) VALUES ('GERENCIA DE PLANEAMIENTO Y CONTROL DE GESTIÓN');
INSERT INTO gerencia (nom_gerencia) VALUES ('GERENCIA TÉCNICA');
INSERT INTO gerencia (nom_gerencia) VALUES ('GERENCIA DE PROYECTOS');
INSERT INTO gerencia (nom_gerencia) VALUES ('GERENCIA ZONAL MOQUEGUA');
INSERT INTO gerencia (nom_gerencia) VALUES ('GERENCIA ZONAL TACNA');
INSERT INTO gerencia (nom_gerencia) VALUES ('GERENCIA ZONAL ILO');

--
-- Estructura de tabla para la tabla `AREA`
--
INSERT INTO area (nom_area) VALUES ('SUB GERENCIA DE TECNOLOGÍA DE INFORMACIÓN Y COMUNICACIONES');
INSERT INTO area (nom_area) VALUES ('GERENCIA GENERAL');
INSERT INTO area (nom_area) VALUES ('GERENCIA COMERCIAL');
INSERT INTO area (nom_area) VALUES ('GERENCIA DE ADMINISTRACIÓN Y FINANZAS');
INSERT INTO area (nom_area) VALUES ('GERENCIA DE PLANEAMIENTO Y CONTROL DE GESTIÓN');
INSERT INTO area (nom_area) VALUES ('GERENCIA TÉCNICA');
INSERT INTO area (nom_area) VALUES ('GERENCIA DE PROYECTOS');
INSERT INTO area (nom_area) VALUES ('GERENCIA ZONAL MOQUEGUA');
INSERT INTO area (nom_area) VALUES ('GERENCIA ZONAL TACNA');
INSERT INTO area (nom_area) VALUES ('GERENCIA ZONAL ILO');
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
INSERT INTO cargo (nom_cargo) VALUES ('Gerente General');
INSERT INTO cargo (nom_cargo) VALUES ('Asistente de Gerencia');
INSERT INTO cargo (nom_cargo) VALUES ('Especialista de Redes y Comunicaciones');
--
-- Estructura de tabla para la tabla `empleado`
--
INSERT INTO empleado (id_cargo,id_area,id_gerencia,nom_emp,ape_nom,email_emp,telefono_emp,estado_emp) VALUES ('3','1','1','Ricardo Manuel','Sante Zavaleta','rsante@electrosur.com.pe','158','1');

--
-- Estructura de tabla para la tabla `usuarios`
--
INSERT INTO usuario (id_rol,nom_usuario,pass_usuario,estado_usuario,fecha_captura) VALUES ('1','tsoporte7','admin','1','2023-11-21');

--
-- Estructura de tabla para la tabla `sedes`
--
INSERT INTO sede (nom_sede,direccion_sede,ciudad_sede) VALUES ('Sede 28 de Julio','Calle 28 de Julio Nro 263 - Cercado','Tacna');
INSERT INTO sede (nom_sede,direccion_sede,ciudad_sede) VALUES ('Sede Av. Leguia','Calle 28 de Julio Nro 651 / Av. A.B. Leguia Nro 403','Tacna');
INSERT INTO sede (nom_sede,direccion_sede,ciudad_sede) VALUES ('Sede S.E. Para','Av. Ejercito s/n P. J. Para Grande ','Tacna');
INSERT INTO sede (nom_sede,direccion_sede,ciudad_sede) VALUES ('Sede Parque Industrial','Av. Crnl. Juan Valer Sandoval Mz. G Lt. 4 y 5 Parque Industrial','Tacna');
INSERT INTO sede (nom_sede,direccion_sede,ciudad_sede) VALUES ('Sede Vinani','Parcela 6F Asent. H. Vinani - Crnl. Greg. Albarracin Lanchipa','Tacna');
INSERT INTO sede (nom_sede,direccion_sede,ciudad_sede) VALUES ('Sede Moquegua','Av. Andres A. Caceres s/n Alto Zapata ','Moquegua');
INSERT INTO sede (nom_sede,direccion_sede,ciudad_sede) VALUES ('Sede Ilo','Calle Junin Nro. 606 - Cercado','Ilo');

--
-- Estructura de tabla para la tabla `Categorias`
--
INSERT INTO categoria (nom_categoria,desc_categoria) VALUES ('Laptop','Microcomputadora Portatil');
INSERT INTO categoria (nom_categoria,desc_categoria) VALUES ('Desktop','Microcomputadora de Escritorio');
INSERT INTO categoria (nom_categoria,desc_categoria) VALUES ('Mouse','Dispositivo de entrada para manipular objetos en pantalla');
INSERT INTO categoria (nom_categoria,desc_categoria) VALUES ('Teclado','Dispositivo de entrada manual de datos');
INSERT INTO categoria (nom_categoria,desc_categoria) VALUES ('Monitor','Dispositivo para mostrar informacion del equipo');
INSERT INTO categoria (nom_categoria,desc_categoria) VALUES ('Telefono','Periferico de comunicacion por llamada de voz');
INSERT INTO categoria (nom_categoria,desc_categoria) VALUES ('Impresora','Periferico utilizado para imprimir informacion');
INSERT INTO categoria (nom_categoria,desc_categoria) VALUES ('Escaner','Dispositivo de exploracion y registro de una imagen');
INSERT INTO categoria (nom_categoria,desc_categoria) VALUES ('Switch','Dispositivo de interconexion');

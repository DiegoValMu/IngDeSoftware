
CREATE TABLE region (
cod_region INT PRIMARY KEY,
nomb_region VARCHAR(30));

CREATE TABLE ciudad (
cod_ciudad INT PRIMARY KEY,
nombre_ciudad VARCHAR(20),
cod_region INT,
FOREIGN KEY (cod_region) REFERENCES region(cod_region) ); 

CREATE TABLE administrador (
id_admin INT PRIMARY KEY,
nomb_admin VARCHAR(20),
apellidos_adm VARCHAR(20),
rut_adm INT,
digito_verificador_admin VARCHAR(1), 
telefono_adm VARCHAR(30),
correo_adm VARCHAR(30),
contrasena_adm VARCHAR(30));

CREATE TABLE Encargado (
id_encargado INT PRIMARY KEY, 
nomb_encargado VARCHAR(20),
apellidos_encargado VARCHAR(20),
cargo VARCHAR(30),
rut_encargado INT,
digito_verificador_encargado VARCHAR (1),
correo_encargado VARCHAR (40),
telefono_encargado INT,
contrasena_encargado VARCHAR(30));

CREATE TABLE condominio(
cod_condominio INT PRIMARY KEY,
nomb_condominio VARCHAR(20),
cod_ciudad INT,
id_admin INT,
id_encargado INT,
FOREIGN KEY (cod_ciudad) REFERENCES ciudad(cod_ciudad),
FOREIGN KEY (id_admin) REFERENCES administrador(id_admin),
FOREIGN KEY (id_encargado) REFERENCES encargado(id_encargado));

CREATE TABLE torres_calles(
cod_torre_calle INT PRIMARY KEY,
nomb_torre_calle VARCHAR(20) ,
cod_condominio INT ,
FOREIGN KEY (cod_condominio) REFERENCES condominio(cod_condominio));

CREATE TABLE casa_departamento(
numero_C_D INT PRIMARY KEY,
cod_torre_calle INT ,
id_propietario INT ,
FOREIGN KEY (cod_torre_calle) REFERENCES torres_calles(cod_torre_calle),
FOREIGN KEY (id_propietario) REFERENCES propietario(id_propietario));

CREATE TABLE propietario (
id_propietario INT PRIMARY KEY ,
nomb_propietario VARCHAR(20) ,
apellidos_propietario VARCHAR(20) ,
rut_propietario INT ,
digito_verificador_propietario VARCHAR (1) ,
correo_propietario VARCHAR (40) ,
telefono_propietario INT ,
contrasena_propietario VARCHAR(30) );

CREATE TABLE fallas(
cod_falla INT PRIMARY KEY ,
descripcion VARCHAR(100) ,
id_propietario INT ,
FOREIGN KEY (id_propietario) REFERENCES propietario(id_propietario));

CREATE TABLE mantencion (
cod_mantencion INT PRIMARY KEY ,
nomb_mantencion VARCHAR(30) ,
estado VARCHAR(30) ,
observacion VARCHAR(30) ,
fecha_inicio DATE,
fecha_fin DATE,
id_encargado INT ,
FOREIGN KEY (id_encargado) REFERENCES encargado(id_encargado));

CREATE TABLE contratista (
id_contratista INT PRIMARY KEY ,
nomb_contratista VARCHAR(20) ,
apellidos_contratista VARCHAR(20) ,
costo_servicio INT ,
oficio VARCHAR(30) ,
correo_contratista VARCHAR (40) ,
telefono_contratista INT );

CREATE TABLE realiza(
cod_mantencion INT ,
id_contratista INT ,
FOREIGN KEY (id_contratista) REFERENCES contratista(id_contratista),
FOREIGN KEY (cod_mantencion) REFERENCES mantencion(cod_mantencion));

CREATE TABLE trabaja(
cod_empresam INT ,
id_contratista INT ,
FOREIGN KEY (id_contratista) REFERENCES contratista(id_contratista),
FOREIGN KEY (cod_empresam) REFERENCES empresa_mantenciones(cod_empresam));

CREATE TABLE empresa_mantenciones (
cod_empresam INT PRIMARY KEY ,
nomb_Empresa VARCHAR(30) ,
tipo_mantenciones VARCHAR(30) ,
detalle_servicio VARCHAR(30) ,
telefono_empresa INT );




INSERT INTO `region`(`cod_region`,`nomb_region`) VALUES ('1','Tarapacá');
INSERT INTO `region`(`cod_region`,`nomb_region`) VALUES ('2','Antofagasta');
INSERT INTO `region`(`cod_region`,`nomb_region`) VALUES ('3','Atacama');
INSERT INTO `region`(`cod_region`,`nomb_region`) VALUES ('4','Coquimbo');
INSERT INTO `region`(`cod_region`,`nomb_region`) VALUES ('5','Valparaiso');
INSERT INTO `region`(`cod_region`,`nomb_region`) VALUES ('6','Ohiggins');
INSERT INTO `region`(`cod_region`,`nomb_region`) VALUES ('7','Maule');
INSERT INTO `region`(`cod_region`,`nomb_region`) VALUES ('8','Bio-bio');
INSERT INTO `region`(`cod_region`,`nomb_region`) VALUES ('9','Araucania');
INSERT INTO `region`(`cod_region`,`nomb_region`) VALUES ('10','Los Lagos');
INSERT INTO `region`(`cod_region`,`nomb_region`) VALUES ('11','Aysén');
INSERT INTO `region`(`cod_region`,`nomb_region`) VALUES ('12','Magallanes');
INSERT INTO `region`(`cod_region`,`nomb_region`) VALUES ('13','Metropolitana');
INSERT INTO `region`(`cod_region`,`nomb_region`) VALUES ('14','Los Rios');
INSERT INTO `region`(`cod_region`,`nomb_region`) VALUES ('15','Arica y parinacota');
INSERT INTO `region`(`cod_region`,`nomb_region`) VALUES ('16','Ñuble');

INSERT INTO `ciudad`(`cod_ciudad`,`nombre_ciudad`,`cod_region`) VALUES ('1','concepcion','8');
INSERT INTO `ciudad`(`cod_ciudad`,`nombre_ciudad`,`cod_region`) VALUES ('2','san pedro de la paz','8');
INSERT INTO `ciudad`(`cod_ciudad`,`nombre_ciudad`,`cod_region`) VALUES ('3','hualpen','8');
INSERT INTO `ciudad`(`cod_ciudad`,`nombre_ciudad`,`cod_region`) VALUES ('4','talcahuano','8');
INSERT INTO `ciudad`(`cod_ciudad`,`nombre_ciudad`,`cod_region`) VALUES ('5','chiguayante','8');

INSERT INTO `ciudad`(`cod_ciudad`,`nombre_ciudad`,`cod_region`) VALUES ('6','linares','7');
INSERT INTO `ciudad`(`cod_ciudad`,`nombre_ciudad`,`cod_region`) VALUES ('7','talca','7');
INSERT INTO `ciudad`(`cod_ciudad`,`nombre_ciudad`,`cod_region`) VALUES ('8','constitucion','7');
INSERT INTO `ciudad`(`cod_ciudad`,`nombre_ciudad`,`cod_region`) VALUES ('9','curico','7');

INSERT INTO `ciudad`(`cod_ciudad`,`nombre_ciudad`,`cod_region`) VALUES ('10','santiago','13');
INSERT INTO `ciudad`(`cod_ciudad`,`nombre_ciudad`,`cod_region`) VALUES ('11','pirque','13');
INSERT INTO `ciudad`(`cod_ciudad`,`nombre_ciudad`,`cod_region`) VALUES ('12','san bernardo','13');
INSERT INTO `ciudad`(`cod_ciudad`,`nombre_ciudad`,`cod_region`) VALUES ('13','las condes','13');


INSERT INTO `administrador`(`id_admin`,`nomb_admin`,`apellidos_adm`,`rut_adm`,`digito_verificador_admin`,`telefono_adm`,`correo_adm`,`contrasena_adm`) 
        VALUES ('111','Diego','Valderrama Muñoz','18983834','4','+56944818425','diego.valderrama1501@alumnos.ubiobio.cl','holamundo');

INSERT INTO `encargado`(`id_encargado`,`nomb_encargado`,`apellidos_encargado`,`cargo`,`rut_encargado`,`digito_verificador_encargado`,`telefono_encargado`,`correo_encargado`,`contrasena_encargado`) 
        VALUES ('10','Juan','Ito Tapia','conserje','26699310','2','+56944818425','diego.valderrama.mu@gmail.cl','holamundo2');
INSERT INTO `encargado`(`id_encargado`,`nomb_encargado`,`apellidos_encargado`,`cargo`,`rut_encargado`,`digito_verificador_encargado`,`telefono_encargado`,`correo_encargado`,`contrasena_encargado`) 
        VALUES ('20','Marcela','Torres','portera','12131323','3','+56944818425','diego.valderrama.mu@gmail.cl','holamundo22');
INSERT INTO `encargado`(`id_encargado`,`nomb_encargado`,`apellidos_encargado`,`cargo`,`rut_encargado`,`digito_verificador_encargado`,`telefono_encargado`,`correo_encargado`,`contrasena_encargado`) 
        VALUES ('30','Samantha','Satre','conserje','15754438','4','+56944818425','diego.valderrama.mu@gmail.cl','holamundo23');
INSERT INTO `encargado`(`id_encargado`,`nomb_encargado`,`apellidos_encargado`,`cargo`,`rut_encargado`,`digito_verificador_encargado`,`telefono_encargado`,`correo_encargado`,`contrasena_encargado`) 
        VALUES ('40','Fabian','Muñoz','jardinero','23512434','5','+56944818425','diego.valderrama.mu@gmail.cl','holamundo24');

INSERT INTO `propietario`(`id_propietario`,`nomb_propietario`,`apellidos_propietario`,`rut_propietario`,`digito_verificador_propietario`,`telefono_propietario`,`correo_propietario`,`contrasena_propietario`) 
        VALUES ('1','Isabella','Valderrama','16123534','2','+56944818425','diego.valderrama.mu@gmail.cl','holamundo3');        


INSERT INTO `condominio` (`cod_condominio`, `nomb_condominio`, `cod_ciudad`, `id_admin`, `id_encargado`) VALUES ('102', 'Bella vista','1', '111', '10');
INSERT INTO `condominio` (`cod_condominio`, `nomb_condominio`, `cod_ciudad`, `id_admin`, `id_encargado`) VALUES ('101', 'Atardeceres rojos','2', '111', '20');
INSERT INTO `condominio` (`cod_condominio`, `nomb_condominio`, `cod_ciudad`, `id_admin`, `id_encargado`) VALUES ('103', 'Descanso de paz','3', '111', '30');
INSERT INTO `condominio` (`cod_condominio`, `nomb_condominio`, `cod_ciudad`, `id_admin`, `id_encargado`) VALUES ('104', 'Los Huertos','4', '111', '40');

INSERT INTO `contratista` (`id_contratista`, `nomb_contratista`, `apellidos_contratista`, `costo_servicio`, `oficio`, `correo_contratista`, `telefono_contratista`) 
        VALUES ('1010', 'Jose', 'Peñaylillo', 'Control de plagas', 20000, 'jose.peñay@gmail.com', '976642561');



INSERT INTO `torres_calles` (`cod_torre_calle`, `nomb_torre_calle`, `cod_condominio`) VALUES ('1', 'los lirios', '101'), ('2', 'los limoneros', '101');
INSERT INTO `torres_calles` (`cod_torre_calle`, `nomb_torre_calle`, `cod_condominio`) VALUES ('1', 'los lirios', '101'), ('2', 'los limoneros', '101');


INSERT INTO `casa_departamento` (`numero_C_D`, `cod_torre_calle`, `id_propietario`) VALUES ('1', '1', '1'), ('2', '2', '1');
INSERT INTO `casa_departamento` (`numero_C_D`, `cod_torre_calle`, `id_propietario`) VALUES ('1', '1', '1'), ('2', '2', '1');


INSERT INTO `contratista` (`id_contratista`, `nomb_contratista`, `apellidos_contratista`, `costo_servicio`, `oficio`, `correo_contratista`, `telefono_contratista`) 
        VALUES ('1020', 'Isabella', 'Matus', 20000, 'Soldadora', 'Isa.matus@gmail.com', '962367132');
INSERT INTO `contratista` (`id_contratista`, `nomb_contratista`, `apellidos_contratista`, `costo_servicio`, `oficio`, `correo_contratista`, `telefono_contratista`) 
        VALUES ('1030', 'Joaquin', 'Westcoast', 20000, 'Electronico', 'joawets@gmail.com', '962561742');
INSERT INTO `contratista` (`id_contratista`, `nomb_contratista`, `apellidos_contratista`, `costo_servicio`, `oficio`, `correo_contratista`, `telefono_contratista`) 
        VALUES ('1040', 'Constanza', 'Matus', 20000, 'Carpintera', 'coni.matus@gmail.com', '987671242');
INSERT INTO `contratista` (`id_contratista`, `nomb_contratista`, `apellidos_contratista`, `costo_servicio`, `oficio`, `correo_contratista`, `telefono_contratista`) 
        VALUES ('1050', 'Nancy', 'Cifuentes', 20000, 'Gasfiter', 'nancygas@gmail.com', '987652831');


INSERT INTO `empresa_mantenciones` (`cod_empresam`, `nomb_Empresa`, `tipo_mantenciones`,  `detalle_servicio`, `telefono_empresa`) 
        VALUES ('1100', 'Estructuras Matus', 'soldaduras',  'soldaduras por arco, gas y laser', '945261731');
INSERT INTO `empresa_mantenciones` (`cod_empresam`, `nomb_Empresa`, `tipo_mantenciones`,  `detalle_servicio`, `telefono_empresa`)
        VALUES ('1200', 'Maderas Matus', 'carpinteria', 'Estructuras en madera, trabajo de pintura y barniz', '946761231');
INSERT INTO `empresa_mantenciones` (`cod_empresam`, `nomb_Empresa`, `tipo_mantenciones`,  `detalle_servicio`, `telefono_empresa`) 
        VALUES ('1300', 'Electronica Westcoast', 'Revisión circuitos seguridad',  'Reparación y mantención de alarmas, portones, timbres y cámaras', '965723641');
INSERT INTO `empresa_mantenciones` (`cod_empresam`, `nomb_Empresa`, `tipo_mantenciones`,  `detalle_servicio`, `telefono_empresa`) 
        VALUES ('1400', 'Gasfitería Cifuentes', 'Gasfitería',  'Gasfitería en general, revisión, mantención y creación de circuitos de riego', '965172342');

INSERT INTO `trabaja` (`cod_empresam`, `id_contratista`) VALUES ('1400', '1050');
INSERT INTO `trabaja` (`cod_empresam`, `id_contratista`) VALUES ('1000', '1010');
INSERT INTO `trabaja` (`cod_empresam`, `id_contratista`) VALUES ('1300', '1030');
INSERT INTO `trabaja` (`cod_empresam`, `id_contratista`) VALUES ('1200', '1040');
INSERT INTO `trabaja` (`cod_empresam`, `id_contratista`) VALUES ('1100', '1020');

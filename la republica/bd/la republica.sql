DROP DATABASE IF EXISTS universidad;
CREATE DATABASE universidad CHARACTER SET utf8mb4;
USE universidad;
 
CREATE TABLE persona (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(25) NOT NULL,
    apellido1 VARCHAR(50) NOT NULL,
    apellido2 VARCHAR(50),
    ciudad VARCHAR(25) NOT NULL,
    sexo ENUM('H', 'M') NOT NULL
);
 
 CREATE TABLE grado (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL
);
create table asignatura (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    creditos FLOAT UNSIGNED NOT NULL,
    tipo ENUM('básica', 'obligatoria', 'optativa') NOT NULL,
    id_grado INT UNSIGNED NOT NULL,
    FOREIGN KEY(id_grado) REFERENCES grado(id)
);
insert into persona values(1,"pedro","jimenez","jimenez","lima","H");

INSERT into grado values
(1,"Grado en Informática"),
(2,"Grado en Matemáticas"),
(3,"Grado en Agronomía"),
(4,"Grado en Química"),
(5,"Grado en Idiomas");

INSERT INTO asignatura values
(1,"Desarrollo de aplicaciones web", "25","obligatoria", '1'),
(2,"Animación web", "20","básica", '1'),
(3,"Microsoft", "25","básica", '1'),
(4,"Programación", "30","obligatoria", '1'),
(5,"Álgebra", "25","obligatoria", '2'),
(6,"Geometría", "25","obligatoria", '2'),
(7,"Aritmética", "25","obligatoria", '2'),
(8,"Razonamiento Matemático", "25","obligatoria", '2'),
(9,"Protección de Cultivos", "25","obligatoria", '3'),
(10,"Gestión e Innovación para el Desarrollo Agrario Sustentable", "25","obligatoria", '3'),
(11,"Agronegocios de Exportación", "25","obligatoria", '3'),
(12,"Aplicación de Aviones no Tripulados ", "25","obligatoria", '3'),
(13,"Química orgánica", "25","obligatoria", '4'),
(14,"Química inorgánica", "25","obligatoria", '4'),
(15,"Química analítica", "20","obligatoria", '4'),
(16,"Química física", "30","obligatoria", '4'),
(17,"Ingles", "30","obligatoria", '5'),
(18,"Francés", "25","obligatoria", '5'),
(19,"Chino Mandarín", "20","obligatoria", '5'),
(20,"Italiano", "25","obligatoria", '5');

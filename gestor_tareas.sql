drop database if exists gestor_tareas;
create database gestor_tareas;
use gestor_tareas;

create table usuarios(
    id int not null  auto_increment primary key,
    nombre VARCHAR(50) not null
)

create table tareas(
    id int not null AUTO_INCREMENT PRIMARY KEY,
    nombre_tarea text NOT NULL
)


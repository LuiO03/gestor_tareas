drop database if exists gestor_tareas;
create database gestor_tareas;
use gestor_tareas;

create table usuario(
    id int not null  auto_increment primary key,
    nombre VARCHAR(50) not null
)


create database cliente;

show databases;

use cliente;

create table cliente(
cedula bigint,
nombre varchar(20),
direccion varchar (50),
telefono int,
email varchar(100),
primary key (cedula));

create database cliente;

show databases;

use cliente;

create table cliente(
cedula bigint,
nombre varchar(20),
direccion varchar (50),
telefono bigint,
email varchar(100),
primary key (cedula));

create table pagos(
  fecha varchar(20),
  cedula bigint,
  valor bigint,
  mes varchar(20),
  primary key(fecha, cedula),
  foreign key(cedula) references cliente(cedula)
);
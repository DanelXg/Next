create database nextpage;
use nextpage;

create table CLIENTE(
ID_cliente int auto_increment, 
nombre varchar(20), 
edad int(3), 
email varchar(50), 
contraseña varchar(40),
primary key(ID_cliente));

create table LIBROS(
ID_libro int auto_increment,
ID_clienteFK int,
titulo varchar(40), 
autor varchar(30), 
precio float,
editorial varchar(20),
primary key(ID_libro));


create table COMPRA(
ID_compra int(10), 
ID_clienteFK int,
ID_libroFK int, 
precio float, 
compra_date date, 
primary key(ID_compra),
foreign key(ID_clienteFK) references cliente(ID_cliente),
foreign key(ID_libroFK) references libros(ID_libro));


create table ENVÍO(
ID_envio int(5),
ID_compraFK int,
ID_clienteFK int, 
ciudad_destino varchar(20), 
Fecha datetime,
primary key(ID_envio),
foreign key(ID_compraFK) references COMPRA(ID_compra),
foreign key(ID_clienteFK) references cliente(ID_cliente));

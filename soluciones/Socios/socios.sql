create database if not exists socios;
use socios;
create table socio
(
   dni varchar(10),
   nombre varchar(50),
   apellidos varchar(100),
   fechaalta datetime,
   PRIMARY KEY(dni)		
);

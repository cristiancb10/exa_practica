create database repaso 1;

use repaso1;

create table users(
    id int unsigned primary key auto_increment,
    name varchar(50),
    correo varchar(50)
);

insert into users(name, correo) values 
("cristian", "cristian@gmail.com");
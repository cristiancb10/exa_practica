-- Eliminar tabla si exite previamente
DROP TABLE IF EXISTS users;

CREATE TABLE users(
    id int unsigned auto_increment primary key,
    name varchar(50) not null,
    age int unsigned,
    email varchar(50) not null,
    password varchar(50) not null,
    created_at timestamp default current_timestamp,
    updated_at timestamp default current_timestamp on update current_timestamp
);

INSERT INTO users (name, age, email, password) VALUES
("cristian", 27, "yo@gmail.com","123456"); 


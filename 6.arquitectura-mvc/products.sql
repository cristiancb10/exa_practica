CREATE DATABASE backend;

USE backend;

CREATE TABLE products(
    id INT unsigned primary key auto_increment,
    name VARCHAR(50),
    description VARCHAR(255),
    created_at TIMESTAMP default CURRENT_TIMESTAMP
)
INSERT INTO products (name , description) VALUES (
    "pan", "pan de queso"
);
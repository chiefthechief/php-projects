create database mydb;
use mydb;

create table users (
   id int auto_increment primary key,
   username varchar(255) not null,
   password varchar(10) not null,
);
create database if not exists hello_php;
use hello_php;

drop table if exists user;
create table if not exists user(
  id int auto_increment,
  username char(20),
  password varchar(30),
  primary key (id),
  unique (username)
);

insert into user(username, password)
VALUES ('Jon Snow', '123456');
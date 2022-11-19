create database karma;

use karma;

select *from user;

create table user (

  id varchar(100) not null,
  primeiro_nome varchar (100) not null,
  ultimo_nome varchar (100) not null,
  email varchar (50) not null,
  tel1 varchar(20) not null,
  tel2 varchar(20),
  genero enum ('1','2','3'),
  data_aniversario DATE 
);

create table seller(

    id varchar(100) not null,
  	id_user varchar(100)not null,
  	
  	password varchar(50) not null,
  
  	foreign key (id_user) references user.id

);

create table client(

    id varchar(100) not null,
  	id_user varchar(100)not null,
  	password varchar(50) not null,
  
  	foreign key (id_user) references user.id

);

create table product (

  	id varchar(100) not null,
  	produto_name varchar (100) not null,
  	description varchar (500) not null,
  	price decimal(15,2) not null,
  	soldprice decimal(15,2),
  	amount int not null,	
	availability bool not null,
  	id_seller varchar(100) not null,
  	img_url varchar(100) not null,
  
  	foreign key (id_seller) references seller.id

);









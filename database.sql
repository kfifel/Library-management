create database if not exists library;
use library;
create table if not exists reader(
                                     id int(8) PRIMARY KEY AUTO_INCREMENT,
                                     first_name varchar(255) not null,
                                     last_name varchar(255) not null
);
create table if not exists state(
                                    id int(8) PRIMARY KEY AUTO_INCREMENT,
                                    name varchar(255) not null
);
create table if not exists manager(
                                      id int(8) PRIMARY KEY AUTO_INCREMENT,
                                      first_name varchar(255) not null,
                                      last_name varchar(255) not null,
                                      email varchar(255) not null unique,
                                      password varchar(255) not null
);
create table if not exists book(
                                   isbn int(8) PRIMARY KEY AUTO_INCREMENT,
                                   title varchar(255) not null,
                                   n_page int(8),
                                   quantity varchar(255) not null,
                                   description varchar(255)
);
create table if not exists lend(
                                   id_reader int(8),
                                   isbn int(8),
                                   lend_date datetime,
                                   return_date datetime,
                                   provided_by int(8),
                                   state int(8),
                                   CONSTRAINT FK_LendReader FOREIGN KEY (id_reader) REFERENCES reader(id),
                                   CONSTRAINT PK_BookLend FOREIGN KEY (isbn) REFERENCES book(isbn),
                                   CONSTRAINT PK_ManagerLend FOREIGN KEY (provided_by) REFERENCES manager(id),
                                   CONSTRAINT PK_StateLend FOREIGN KEY (state) REFERENCES state(id)

);
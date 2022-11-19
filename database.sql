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
                                   isbn varchar(255) PRIMARY KEY,
                                   title varchar(255) not null,
                                   n_page int(8),
                                   quantity varchar(255) not null,
                                   description varchar(255)
);
create table if not exists lend(
                                   id_reader int(8),
                                   isbn varchar(255),
                                   lend_date date,
                                   return_date date,
                                   provided_by int(8),
                                   state int(8),
                                   CONSTRAINT FK_LendReader FOREIGN KEY (id_reader) REFERENCES reader(id)ON DELETE CASCADE ON UPDATE NO ACTION ,
                                   CONSTRAINT FK_BookLend FOREIGN KEY (isbn) REFERENCES book(isbn) ON DELETE CASCADE ON UPDATE NO ACTION,
                                   CONSTRAINT FK_ManagerLend FOREIGN KEY (provided_by) REFERENCES manager(id) ON DELETE CASCADE ON UPDATE NO ACTION,
                                   CONSTRAINT FK_StateLend FOREIGN KEY (state) REFERENCES state(id) ON DELETE CASCADE ON UPDATE NO ACTION

);
/*
alter table lend
    drop constraint PK_BookLend;

ALTER TABLE lend
    ADD CONSTRAINT PK_BookLend
        FOREIGN KEY (isbn)
            REFERENCES book(isbn)
            ON DELETE CASCADE ON UPDATE NO ACTION;
*/
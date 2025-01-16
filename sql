create table cinamonabouts(name varchar(50),mail varchar(255) primary key,message varchar(255));
use bridal;
desc cinamonabouts;
create table samudraabouts(name varchar(50),mail varchar(255) primary key,message varchar(255));
create table sunsetreservation(name varchar(50),connect_number varchar(20),email varchar(50),date date(20),wedding_plan varchar(50),foo,food_combo varchar(5),cockt_menu varchar(50),Number_of_Guests int(10));
 create table sunsetreservation(name varchar(50),connect_number varchar(20),email varchar(50),date date,wedding_plan varchar(50),foo,food_combo varchar(5),cockt_menu varchar(50),Number_of_Guests int(10));
 create table samudrareservation(name varchar(50),connect_number varchar(20),email varchar(50),date date,wedding_plan varchar(50),food_combo varchar(5),cockt_menu varchar(50),Number_of_Guests int(10));
 create table cinamonreservation(name varchar(50),connect_number varchar(20),email varchar(50),date date,wedding_plan varchar(50),food_combo varchar(5),cockt_menu varchar(50),Number_of_Guests int(10));
 CREATE TABLE hall (
    hallName VARCHAR(30) NULL,
    hallNo VARCHAR(10) NULL,
    phoneNo VARCHAR(20) NULL,
    place VARCHAR(30) NULL,
    package VARCHAR(30) NULL,
    describtion VARCHAR(500) NULL
);
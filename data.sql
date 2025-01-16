CREATE TABLE cinamonabouts (
    name VARCHAR(50) DEFAULT NULL,
    mail VARCHAR(255) NOT NULL PRIMARY KEY,
    message VARCHAR(255) DEFAULT NULL
);

CREATE TABLE abouts (
    name VARCHAR(50) DEFAULT NULL,
    mail VARCHAR(255) NOT NULL PRIMARY KEY,
    message VARCHAR(255) DEFAULT NULL
);


CREATE TABLE cinamonreservation (
    name VARCHAR(50) DEFAULT NULL,
    connect_number VARCHAR(20) DEFAULT NULL,
    email VARCHAR(50) DEFAULT NULL,
    date DATE DEFAULT NULL,
    wedding_plan VARCHAR(50) DEFAULT NULL,
    food_combo VARCHAR(50) DEFAULT NULL,
    cockt_menu VARCHAR(50) DEFAULT NULL,
    Number_of_Guests INT(10) DEFAULT NULL
);


CREATE TABLE hall (
    hallName VARCHAR(30) DEFAULT NULL,
    hallNo VARCHAR(10) DEFAULT NULL,
    phoneNo VARCHAR(20) DEFAULT NULL,
    place VARCHAR(30) DEFAULT NULL,
    package VARCHAR(30) DEFAULT NULL,
    describtion VARCHAR(500) DEFAULT NULL
);


-- Create table samudraabouts
CREATE TABLE samudraabouts (
    name VARCHAR(50),
    mail VARCHAR(255) NOT NULL PRIMARY KEY,
    message VARCHAR(255)
);

-- Create table samudrareservation
CREATE TABLE samudrareservation (
    name VARCHAR(50),
    connect_number VARCHAR(20),
    email VARCHAR(50),
    date DATE,
    wedding_plan VARCHAR(50),
    food_combo VARCHAR(50),
    cockt_menu VARCHAR(50),
    Number_of_Guests INT(10)
);


-- Create table sucinamnonreservation
CREATE TABLE sucinamnonreservation (
    name VARCHAR(50) NULL,
    connect_number VARCHAR(20) NULL,
    email VARCHAR(50) NULL,
    date DATE NULL,
    wedding_plan VARCHAR(50) NULL,
    food_combo VARCHAR(5) NULL,
    cockt_menu VARCHAR(50) NULL,
    Number_of_Guests INT(10) NULL
);

-- Create table sunsetreservation
CREATE TABLE sunsetreservation (
    name VARCHAR(50) NULL,
    connect_number VARCHAR(20) NULL,
    email VARCHAR(50) NULL,
    date DATE NULL,
    wedding_plan VARCHAR(50) NULL,
    food_combo VARCHAR(5) NULL,
    cockt_menu VARCHAR(50) NULL,
    Number_of_Guests INT(10) NULL
);


-- Create table user
CREATE TABLE user (
    username VARCHAR(30) NOT NULL PRIMARY KEY,
    password VARCHAR(255) NULL,
    email VARCHAR(50) NULL
);

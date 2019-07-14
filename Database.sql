CREATE DATABASE social_media;

CREATE TABLE users(
    id int NOT NULL AUTO_INCREMENT,
    name varchar(255) NOT NULL,
    email varchar(255) NOT NULL,
    password varchar(255) NOT NULL,
    institute_name varchar(255),
    phone_no varchar(255),
    PRIMARY KEY (id)
);

CREATE TABLE statuses(
    id int NOT NULL AUTO_INCREMENT,
    user_id int NOT NULL,
    status varchar(255) NOT NULL,
    created_day varchar(255) NOT NULL,
    created_date varchar(255) NOT NULL,
    created_time varchar(255) NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE users (

    username VARCHAR(50) PRIMARY KEY,

    password VARCHAR(100) NOT NULL

);

INSERT INTO users(username, password) VALUES ('Zaid', MD5('zaid123'));

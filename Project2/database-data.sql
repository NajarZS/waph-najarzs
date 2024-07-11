DROP TABLE IF EXISTS users;



CREATE TABLE users (

    username VARCHAR(50) PRIMARY KEY,

    password VARCHAR(100) NOT NULL,

    email VARCHAR(100) NOT NULL UNIQUE,

    phone VARCHAR(15) NOT NULL

);



INSERT INTO users(username, password, email, phone) VALUES ('testuser', MD5('testpass'), 'testuser@example.com', '1234567890');


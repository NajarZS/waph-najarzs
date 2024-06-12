# waph-najarzs 
## WAPH- Web Application Programming and Hacking 
## Lab 3 - Secure Web Application Development in PHP/MySQL
Name: Zaid Najar 
Instructor: Dr. Phu Phung
Email: najarzs@mail.uc.edu

[![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/7efdc406-f5ce-4fbb-80fc-cfe00133c98c)](https://private-user-images.githubusercontent.com/169232307/332916820-7efdc406-f5ce-4fbb-80fc-cfe00133c98c.png?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3MTY0MTUxMjMsIm5iZiI6MTcxNjQxNDgyMywicGF0aCI6Ii8xNjkyMzIzMDcvMzMyOTE2ODIwLTdlZmRjNDA2LWY1Y2UtNGZiYi04MGZjLWNmZTAwMTMzYzk4Yy5wbmc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBVkNPRFlMU0E1M1BRSzRaQSUyRjIwMjQwNTIyJTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDI0MDUyMlQyMTUzNDNaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT04MTIxYTU4YzUwYjYyYzAwNmMxNjcyZTg3MTFlNTdhZWU5ZWZiMWZiY2YwNmI3M2UzYTJiNjkxMTdkZTcyM2M1JlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCZhY3Rvcl9pZD0wJmtleV9pZD0wJnJlcG9faWQ9MCJ9.KkBr_xzTTFJNVcUA1LYnh_42ldA2tX1KxMRDfHYd_Qs)

Lab 3 Github Link: https://github.com/NajarZS/waph-najarzs/tree/main/Labs/Lab3

## Overview

In this lab, I learned the fundementals of creating an sql database and the basic functions. 

## Task a: Database Setup and Management

First I downloaded sql as instructed in the lecture and made a new file called database-account.sql in my repository. Here is the code in it: 

``` sql
CREATE DATABASE waph;

CREATE USER 'Zaid'@'localhost' IDENTIFIED BY 'zaid123';

GRANT ALL PRIVILEGES ON waph.* TO 'Zaid'@'localhost';
```
This creates a new database, adds me as a user with the password, and lets the user access it. 

I then created a table named users and used a hashed password for it. I then added myself in the table and was able to query it. I put the code into a file named database-data.sql.
Here is the code: 

``` sql
CREATE TABLE users (

    username VARCHAR(50) PRIMARY KEY,

    password VARCHAR(100) NOT NULL

);

INSERT INTO users(username, password) VALUES ('Zaid', MD5('zaid123'));
```
Here is the outcome: 
![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/d1e9b423-ea00-4eb1-8845-7b7c4734670a)

## Task b. A Simple (Insecure) Login System with PHP/MySQL 

In this part, I downloaded mysqli and modified a basic login form to connect to my database and accept my username and password. I modified form.php and index.php and added a new function called checklogin_mysql. I followed the instructions from the lecture and it was able to log me in. The code for the files is found in the repository. 

New function:

``` php
function checklogin_mysql($username, $password) {

   		 $mysqli = new mysqli('localhost', 'Zaid', 'zaid123', 'waph');



  		  if ($mysqli->connect_errno) {

    		     printf("Database connection failed: %s\n", $mysqli->connect_error);

       		     exit();

                  }               

  		  $sql = "SELECT * FROM users WHERE username='" . $username . "'";

    		  $sql = $sql . " AND password = md5('" . $password . "')";

                  $result = $mysqli->query($sql);

                  if($result->num_rows == 1)

                      return TRUE;

                  return FALSE;

}
```
Result: ![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/ec91901d-2192-408c-929c-16295b2a2182)
        ![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/eefb72f7-5402-4f3c-9afe-d4a95b9e3e01)







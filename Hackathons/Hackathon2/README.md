# waph-najarzs 
## WAPH - Web Application Programming and Hacking 
## Hackathon 2 - SQL Injection Attacks
Name: Zaid Najar 
Instructor: Dr. Phu Phung
Email: najarzs@mail.uc.edu

[![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/7efdc406-f5ce-4fbb-80fc-cfe00133c98c)](https://private-user-images.githubusercontent.com/169232307/332916820-7efdc406-f5ce-4fbb-80fc-cfe00133c98c.png?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3MTY0MTUxMjMsIm5iZiI6MTcxNjQxNDgyMywicGF0aCI6Ii8xNjkyMzIzMDcvMzMyOTE2ODIwLTdlZmRjNDA2LWY1Y2UtNGZiYi04MGZjLWNmZTAwMTMzYzk4Yy5wbmc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBVkNPRFlMU0E1M1BRSzRaQSUyRjIwMjQwNTIyJTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDI0MDUyMlQyMTUzNDNaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT04MTIxYTU4YzUwYjYyYzAwNmMxNjcyZTg3MTFlNTdhZWU5ZWZiMWZiY2YwNmI3M2UzYTJiNjkxMTdkZTcyM2M1JlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCZhY3Rvcl9pZD0wJmtleV9pZD0wJnJlcG9faWQ9MCJ9.KkBr_xzTTFJNVcUA1LYnh_42ldA2tX1KxMRDfHYd_Qs)

Hackathon 2 Github Link: https://github.com/NajarZS/waph-najarzs/tree/main/Hackathons/Hackathon2

## Overview

In this hackathon, I learned how to peform SQLi attacks where I will learn to indentify and exploit SQL vulnerbilities. I will also learn how to defend against them. 

### Level 0 
For level 0, I added what I learned from Lab 3 and simply put najarzs' OR '1'='1' -- in the username input and anything in the password. This completes an SQL query and it reads it as code. This allows me to pass with no valid credentials. 
![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/59eab1dc-2018-43ce-861b-2d34d14d989f)

### Level 1
Level 1 is a bit harder than level 0, but it uses the same idea. I looked at the backend query from the lecture and constructured najarzs" OR 1=1 LIMIT 1;#. This worked because they backend query most likely looks like: select * from users where username="" or 1=1 limit 1;#. I just added on the limit 1;# part. Here is the outcome: 
![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/41c19ac9-31aa-417b-a0f6-469cfef6e52c)

### Level 2
This step is a lot more complicated with a lot more steps. The page includes some tables and then the login page. The first step is to find what php page is vunerable. I did this by going in the tables pages and messing with the id in the url. This return an error that said the error was found on product.php. I now know which page to attack. 
![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/2e6fe34f-c7a6-429b-82e1-44af3fb06a63)

Then I need to return a command that returns the database information. This command is only possible if I find out how many columns there are. If I use the union select command and guess and check while incrementing the number of columns, I can find out how many columns there are if the number I am on did not return an error. Here is an incorrect column guess:
![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/ea2a6138-c8a1-49fe-9210-06ff84c041ef

And here is a correct one: 
![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/8f228289-9a28-4159-b53a-ed68ae92c10a)

This returned a slightly modified table which lets me know that there are indeed three columns. Then I can change "1, 2, 3" to my name, school, and section and this is the result: 
![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/19f43c03-ff1a-4b47-be36-b5e1227f5234)

Now that I know the number of columns, I need to find out more about the database. This is done by using the function: UNION SELECT 1, database(), 3. This calls the name of the database: 
![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/e0d2fb80-696a-48c8-b7dc-b7f393b5fd05)

I can also call the users and the table names: 
![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/5a6ab038-67a7-40a5-8873-9f8922b35567)
![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/98d57ddd-b3be-4e1b-b851-793980a53dd6)

The table titled login clearly caught my interest so I need to investigate further. I can then use a command to return the columns of the login table. This shows me that is there a loginname section and password section. This is the function UNION SELECT 1, column_name, 3 FROM information_schema.columns WHERE table_name='login'
![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/5e046ab3-b6ac-47a4-b42e-1b9e56d1a0a5)

I can then extract the usernames from loginname using UNION SELECT 1, loginname, 3 FROM login. This shows me that there are two possible usernames: admin and test
![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/d1861be2-f884-4313-b439-b8ee061cb29a)

I also did the same for password: UNION SELECT 1, password, 3 FROM login
![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/f6ae1666-7912-49f5-b0b3-029026e0fd99)

This returned to me two hashed passwords that I can easily google and find out since they are common passwords. 
![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/ec7f000e-5c6d-4b6c-9744-351fa392dedb)

I now know that one of the usernames is admin and the corresponding password is qwerty. The other possibility is test and the password is abc123. Here is my login: 
![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/177f1dd6-50c5-49a0-89ce-2348457536d9)























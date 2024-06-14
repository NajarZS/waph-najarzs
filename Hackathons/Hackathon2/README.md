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
Level 1 is a bit harder than level 0, but it uses the same idea. I looked at the backend query from the lecture and constructured najarzs" OR 1=1 LIMIT 1;#. This worked because they backend query most likely looks like: select * from users where username="" or 1=1 limit 1;#. I just added on the limit 1;# part. 


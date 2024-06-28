# waph-najarzs 
## WAPH- Web Application Programming and Hacking 
## Lab 4 - A Secure Login System with Session Authentication
Name: Zaid Najar 
Instructor: Dr. Phu Phung
Email: najarzs@mail.uc.edu

[![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/7efdc406-f5ce-4fbb-80fc-cfe00133c98c)](https://private-user-images.githubusercontent.com/169232307/332916820-7efdc406-f5ce-4fbb-80fc-cfe00133c98c.png?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3MTY0MTUxMjMsIm5iZiI6MTcxNjQxNDgyMywicGF0aCI6Ii8xNjkyMzIzMDcvMzMyOTE2ODIwLTdlZmRjNDA2LWY1Y2UtNGZiYi04MGZjLWNmZTAwMTMzYzk4Yy5wbmc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBVkNPRFlMU0E1M1BRSzRaQSUyRjIwMjQwNTIyJTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDI0MDUyMlQyMTUzNDNaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT04MTIxYTU4YzUwYjYyYzAwNmMxNjcyZTg3MTFlNTdhZWU5ZWZiMWZiY2YwNmI3M2UzYTJiNjkxMTdkZTcyM2M1JlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCZhY3Rvcl9pZD0wJmtleV9pZD0wJnJlcG9faWQ9MCJ9.KkBr_xzTTFJNVcUA1LYnh_42ldA2tX1KxMRDfHYd_Qs)

Github Link: https://github.com/NajarZS/waph-najarzs/tree/main/Labs/Lab4


## Overview

In this lab, I learned the fundementals of making a secure login system with session authentication. 

## Task 1: Understanding Session Management in a PHP Web Application

a: ![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/c809595c-ed5f-435a-8c61-d7a4a9e6beac)
![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/ea25bd2f-715b-410c-b0f5-640acca01258)

b. ![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/638d7ab1-e2c6-4987-816d-2cbcb46e1758)
![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/d6499aa0-3747-47a6-90bc-c03c6b01aa1a)

The session handhsaking proccess starts with the client making a request to the server with no sessioninfo. The server responds by setting a session cookie in the browser. This cookie is used in the following requests. This allows the client to recognize the user and maintain the same session state. This keeps it continuous. 

c.![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/ab087e1b-2319-4166-8bf9-4ade73ffa634)
![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/ac3ce79c-449e-4cad-b3df-104fe94df306)

## Task 2: Insecure Session Authentication

a: ![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/3c2d28f5-a42a-42d6-b157-3cd3d88d3477)
![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/339f623d-6953-4057-90d4-362a13b837d8)
![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/06f21337-eaa3-462d-98ad-2a4246df7cec)

b. ![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/d2cb1868-2bde-4216-a715-6f3cf8182dc4)
![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/3631491e-d9d9-4bb6-a339-7ac22bbf11f9)
I copied the session value from firefox and pasted it into chrome. Now when I navigate directly to index.php it still has me logged in even in incognito mode.

## Task 3: Securing sessions and session authentication

a. ![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/03637704-e6ce-45e2-a2e6-bd791989c459)
![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/bc7dbe35-a0ba-4a73-aa6f-5fe6625fd993)

b. ![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/e9cacc12-d23e-4225-b5b3-f2135cbe7282)

c. ![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/b1166ffb-95b3-40a3-b3e6-b3f670d2c06e)



















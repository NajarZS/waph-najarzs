# waph-najarzs 
## WAPH- Web Application Programming and Hacking 
## Indivual Project 2 - Full-stack Web Application Development
Name: Zaid Najar 
Instructor: Dr. Phu Phung
Email: najarzs@mail.uc.edu

[![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/7efdc406-f5ce-4fbb-80fc-cfe00133c98c)](https://private-user-images.githubusercontent.com/169232307/332916820-7efdc406-f5ce-4fbb-80fc-cfe00133c98c.png?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3MTY0MTUxMjMsIm5iZiI6MTcxNjQxNDgyMywicGF0aCI6Ii8xNjkyMzIzMDcvMzMyOTE2ODIwLTdlZmRjNDA2LWY1Y2UtNGZiYi04MGZjLWNmZTAwMTMzYzk4Yy5wbmc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBVkNPRFlMU0E1M1BRSzRaQSUyRjIwMjQwNTIyJTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDI0MDUyMlQyMTUzNDNaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT04MTIxYTU4YzUwYjYyYzAwNmMxNjcyZTg3MTFlNTdhZWU5ZWZiMWZiY2YwNmI3M2UzYTJiNjkxMTdkZTcyM2M1JlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCZhY3Rvcl9pZD0wJmtleV9pZD0wJnJlcG9faWQ9MCJ9.KkBr_xzTTFJNVcUA1LYnh_42ldA2tX1KxMRDfHYd_Qs)

Github Link: https://github.com/NajarZS/waph-najarzs/edit/main/Project2


## Overview

In this project, I used everything I learned from Labs 3 and 4 to make a login system that has access to a database. This allows users to make new users, securely login, and edit and view their info. 

## Task 1: User Registration 
I created two new php files: addnewuser.php and registrationform.php. I used the slides to add upon my previous form.phps and index.phps to allow users to make a user. This involves a user picking out a username, password, email, and phone number. The site checks if the fields are valid such as an email being a valid form or a phone number being 10 digits. It is also very secure. Then addnewuser adds it to the database. 

## Task 2: Login
This is the same login system from previous labs with the session checking. I just added a new UI and made sure that all the php files link together seamlessly. 

## Task 3: Database Design
I made a database that gets new users added to it when someone registers or changes their info. This is a basic one with a table. Security measures are intact. 

## Task 4: Password Update
I gave users the ability to change their password. This has extensive security measures. I first added two files: changeuserpasswordform.php and changeuserpassword.php. This allows a user to open a form to change their password. If its valid, it will change and be updated in the database. I then had to add CSRF protection to it. I learned how coding works for things like this and how to replicate it. I made sure that the new password cannot match the old password. 

## Task 5: Profile Management
Upon logging in, the user will see their name, email, and phone number. This graphs the info from the database as intructed in the slides and lists it. Instead of creating a new form to edit the info, I changed the changeuserpasswordform to be changeuserinfoform. This allows the security measures to stay intact and saves me time as well. I made sure that the form does not require all fields to be filled out. 

## Security
All security measures can be viewed in the code. I used basic CSS styling to make the pages a bit more appealing. All the protections I learned from previous Labs and Hackathons are present. As far as I know, this site is imprenetreable. 

# WAPH - NajarZS 
## WAPH - Web Application Programming and Hacking 
### Hackathon 3 - Session Hijacking Attacks and Defenses
**Name:** Zaid Najar  
**Instructor:** Dr. Phu Phung  
**Email:** najarzs@mail.uc.edu

[![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/7efdc406-f5ce-4fbb-80fc-cfe00133c98c)](https://private-user-images.githubusercontent.com/169232307/332916820-7efdc406-f5ce-4fbb-80fc-cfe00133c98c.png?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3MTY0MTUxMjMsIm5iZiI6MTcxNjQxNDgyMywicGF0aCI6Ii8xNjkyMzIzMDcvMzMyOTE2ODIwLTdlZmRjNDA2LWY1Y2UtNGZiYi04MGZjLWNmZTAwMTMzYzk4Yy5wbmc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBVkNPRFlMU0E1M1BRSzRaQSUyRjIwMjQwNTIyJTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDI0MDUyMlQyMTUzNDNaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT04MTIxYTU4YzUwYjYyYzAwNmMxNjcyZTg3MTFlNTdhZWU5ZWZiMWZiY2YwNmI3M2UzYTJiNjkxMTdkZTcyM2M1JlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCZhY3Rvcl9pZD0wJmtleV9pZD0wJnJlcG9faWQ9MCJ9.KkBr_xzTTFJNVcUA1LYnh_42ldA2tX1KxMRDfHYd_Qs)

[Hackathon 3 Github Link](https://github.com/NajarZS/waph-najarzs/tree/main/Hackathons/Hackathon3)

## Overview

In this hackathon, I learned how to use a session ID from a link click to login without a username or password. 

## Part 1: Video links
https://www.loom.com/share/08e2f562c1c546ccadbc37e4adbba845?sid=b806dd88-84cc-417d-9faa-8af1b36c46c7
https://www.loom.com/share/2d2caba4936647d98acd0e55998925c7?sid=aba36c10-dbf5-4671-ad1f-370d2644ef43

## Part 2: Questions

In part one, there were vulnerbilities such as XSS and insecure handling of user input. For the XSS, it worked because I added a payload in the input field. This had JS code that captured the user's session cookie. When someone else clicks it, it reads the document.cookie value which adds their cookie. This was only possible because the site did not have input sanitization. It also allows anyone even if they are not trusted to post. There is no filtering or cleaning upon posts or users or what verified users can access. 

To protect against this, there could be filtering applied such as $safe_input = htmlentities($user_input, ENT_QUOTES, 'UTF-8');. This converts special characters to HTML entities which prevents attack cause it reads it as plain text. I can also use DOMPurify which is a JS library that sanitizes inputs. I can also import a CSP which restricts the source of content. And finally, I can just use the HttpOnly and Secure flags for cookies to prevent them from being accessed. 





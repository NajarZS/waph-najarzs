# waph-najarzs
## WAPH-Web Application Programming and Hacking
## Lab 1 - Foundations of the Web

Name: Zaid Najar

Instructor: Dr. Phu Phung

Email: najarzs@mail.uc.edu

## Overview 

this lab shows core concepts of the web and HHTP protocol through Wireshark and web application programming. There are two parts: HTTP protocol and basic web application programming. I should be bale to use Wireshark to analyze HTTP traffic, use telnet, and develop applications using CGI and PHP.

# Part 1 - The Web and HTTP Protocol

## Task 1. Familiar with the Wireshark tool and HTTP protocol

I used Wireshark by running it as the lecture instructed me to do and opened an example html page in chrome. I then used the filter to search through all HTTP protocols and used that to take my screenshots. 

Screenshot 1: Request
[![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/3f63e16b-8846-4cca-be53-12698a0b7261)](https://private-user-images.githubusercontent.com/169232307/330586464-3f63e16b-8846-4cca-be53-12698a0b7261.png?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3MTU3MjUzMjgsIm5iZiI6MTcxNTcyNTAyOCwicGF0aCI6Ii8xNjkyMzIzMDcvMzMwNTg2NDY0LTNmNjNlMTZiLTg4NDYtNGNjYS1iZTUzLTEyNjk4YTBiNzI2MS5wbmc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBVkNPRFlMU0E1M1BRSzRaQSUyRjIwMjQwNTE0JTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDI0MDUxNFQyMjE3MDhaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT04NmM4MzBhZWQ4NmJkYmI1ZmRmODU1ZGY3MzNjNGZlZGI4ODM5NDhiZGI3MGJlOTg1NzM5ZTA3YmRlYjEwMzcxJlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCZhY3Rvcl9pZD0wJmtleV9pZD0wJnJlcG9faWQ9MCJ9.TUWgaR5F9YAiO_G_SwKaVHc73nt8y_W1BCHeVxNPY5A)

Screenshot 2: Response
[![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/1594a9ec-c9d5-485a-9df0-441889a69abc)](https://private-user-images.githubusercontent.com/169232307/330586682-1594a9ec-c9d5-485a-9df0-441889a69abc.png?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3MTU3MjUzMjgsIm5iZiI6MTcxNTcyNTAyOCwicGF0aCI6Ii8xNjkyMzIzMDcvMzMwNTg2NjgyLTE1OTRhOWVjLWM5ZDUtNDg1YS05ZGYwLTQ0MTg4OWE2OWFiYy5wbmc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBVkNPRFlMU0E1M1BRSzRaQSUyRjIwMjQwNTE0JTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDI0MDUxNFQyMjE3MDhaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT1kOTU1MzBiOTRiOWY5ODY4M2YzMTk3NWU0NGNiMjNiMzlmZWFlYjgyYzI5MDM5NGJhYzE0MTU2NjNkMzQzZDI4JlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCZhY3Rvcl9pZD0wJmtleV9pZD0wJnJlcG9faWQ9MCJ9.S7BMCRkjYPoAJcJR_FjmX3ljxiB8zS7JhTOnP5KiSrE)

Screenshot 3: HTTP Stream
[![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/5be3d125-dc87-4d26-9c20-cab75c81feb3)](https://private-user-images.githubusercontent.com/169232307/330586924-5be3d125-dc87-4d26-9c20-cab75c81feb3.png?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3MTU3MjUzMjgsIm5iZiI6MTcxNTcyNTAyOCwicGF0aCI6Ii8xNjkyMzIzMDcvMzMwNTg2OTI0LTViZTNkMTI1LWRjODctNGQyNi05YzIwLWNhYjc1YzgxZmViMy5wbmc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBVkNPRFlMU0E1M1BRSzRaQSUyRjIwMjQwNTE0JTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDI0MDUxNFQyMjE3MDhaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT03YmQ0ZjE0ODYxNjQ4NWFkNzEwYzE2ZjQ2YjYzODNjMGU0YzQxMzA1MzBjMDU1OWFkZDk1OGU2MmFlYzE3NzBlJlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCZhY3Rvcl9pZD0wJmtleV9pZD0wJnJlcG9faWQ9MCJ9.q63oK0uI4h4kjLXqEqkQfTgykjbRakAL-c4rNBUlnw8)

## Task 2. Understanding HTTP using telnet and Wireshark

Telnet was used in this task to send a minimal HTTP request to Wireshark. After opening the example.com link and filtering by HTTP, I opened the terminal and used the command telnet example.com 80. This connected and then I used a GET method and the Host header to analyze the capture. 

1. A screenshot of your terminal showing the HTTP Request (you typed) and HTTP response from the server
  [ ![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/89ed3500-4618-4126-b395-2035122ed694)](https://private-user-images.githubusercontent.com/169232307/330593090-89ed3500-4618-4126-b395-2035122ed694.png?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3MTU3MjUzMjgsIm5iZiI6MTcxNTcyNTAyOCwicGF0aCI6Ii8xNjkyMzIzMDcvMzMwNTkzMDkwLTg5ZWQzNTAwLTQ2MTgtNDEyNi1iMzk1LTIwMzUxMjJlZDY5NC5wbmc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBVkNPRFlMU0E1M1BRSzRaQSUyRjIwMjQwNTE0JTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDI0MDUxNFQyMjE3MDhaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT1jM2Q3YjQ0MTNmODYzMTk0ZTJiNzkyNmQ3YzBmYWE2ZmNhMmQ1ZjI3ODcwNDQyMjJiOTE0Y2Y0YjA5ZmFiYTY2JlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCZhY3Rvcl9pZD0wJmtleV9pZD0wJnJlcG9faWQ9MCJ9.XemGsooxh0hhUJUF8qvg-pimWe8t0QWlLJH4iyKbW5U)
 
2. A screenshot of the HTTP Request message (you typed in telnet above) in Wireshark as in Task 1
[![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/d2e5cedf-f585-44b0-ba8b-8519807c1a84)](https://private-user-images.githubusercontent.com/169232307/330593723-d2e5cedf-f585-44b0-ba8b-8519807c1a84.png?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3MTU3MjUzMjgsIm5iZiI6MTcxNTcyNTAyOCwicGF0aCI6Ii8xNjkyMzIzMDcvMzMwNTkzNzIzLWQyZTVjZWRmLWY1ODUtNDRiMC1iYThiLTg1MTk4MDdjMWE4NC5wbmc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBVkNPRFlMU0E1M1BRSzRaQSUyRjIwMjQwNTE0JTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDI0MDUxNFQyMjE3MDhaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT0yYjY5NjI0NzA0YjA4ZjI1ZWYzMDgwMTVjY2Q5MzA2MzA1OTJjYTkxYzVkMDAyZWFjNDM5Y2I0ZDE4NDdmYjQ1JlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCZhY3Rvcl9pZD0wJmtleV9pZD0wJnJlcG9faWQ9MCJ9.gJQBArpKe1gIQ8HwRAKElIi1kd2-96S37rjbCoiQlAc)
The differences are there are two different HTTP versions used with Telnet using 1.0 and the browser using 1.1. The telnet is also missing the User-Agent field, the Accept, the Accept-Language, Accept-Encoding, Connection, and Upgrade-Insecure-Reuqests fields. 

3. A screenshot of the HTTP Response message in Wireshark that the server responded to your request. 
[![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/fb2df53e-16e5-4b63-8004-d0bb3aa6088f)](https://private-user-images.githubusercontent.com/169232307/330594214-fb2df53e-16e5-4b63-8004-d0bb3aa6088f.png?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3MTU3MjUzMjgsIm5iZiI6MTcxNTcyNTAyOCwicGF0aCI6Ii8xNjkyMzIzMDcvMzMwNTk0MjE0LWZiMmRmNTNlLTE2ZTUtNGI2My04MDA0LWQwYmIzYWE2MDg4Zi5wbmc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBVkNPRFlMU0E1M1BRSzRaQSUyRjIwMjQwNTE0JTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDI0MDUxNFQyMjE3MDhaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT0zMDhlNmFiY2JlZDAzZTNjNTU0MzA5YmZiZGI1YWRhOWU4MTk0MmI5NzVkNzgxNzU1MDI2NGUyMjAzN2JhMjA0JlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCZhY3Rvcl9pZD0wJmtleV9pZD0wJnJlcG9faWQ9MCJ9.BsuT28pSkSfcFs613vB8QjX56hedv60MeoLUsw1q0FI)
The differences are that the Telnet uses another HTTP version. It is also missing the fields: Connection Handling, Transger Encoding, Content-Encoding, and other headers such as Cache-Control, ETag, Set-Cookie, etc.

# Part II - Basic Web Application Programming

## Task 1. CGI Web applications in C

a. Summarize how you developed a Hello World CGI program in C and compiled and deployed the program on the web server. 
I created a new file called hellowrold.c that was a simple print statement. I compiled it using gcc to turn it into a .cgi file. I then configured the Apache web server. I then copied the CGI program to the cgi-bin directory and then navigated to the given link. This is where I saw the expected output as shown in the screenshot below. 
[![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/b8a7df0e-03fa-4a32-a9cf-b6d94abe3f8a)](https://private-user-images.githubusercontent.com/169232307/330596247-b8a7df0e-03fa-4a32-a9cf-b6d94abe3f8a.png?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3MTU3MjUzMjgsIm5iZiI6MTcxNTcyNTAyOCwicGF0aCI6Ii8xNjkyMzIzMDcvMzMwNTk2MjQ3LWI4YTdkZjBlLTAzZmEtNGEzMi1hOWNmLWI2ZDk0YWJlM2Y4YS5wbmc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBVkNPRFlMU0E1M1BRSzRaQSUyRjIwMjQwNTE0JTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDI0MDUxNFQyMjE3MDhaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT04YzdiZGIyZjdiN2E1OTYzZGEwNTM0N2VhYjM1MTE2MGMzOTZkYTBjM2M1OWY2MTc5OTY2YzgyYzAyNDNmYTFlJlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCZhY3Rvcl9pZD0wJmtleV9pZD0wJnJlcG9faWQ9MCJ9.O9VvEWi2HrmGMtnQYZxFBzul2dtIdhQ1memQbFCzcng)

b. Summarize and demonstrate with a screenshot that you can write another C CGI program and deploy it with a simple HTML template provided on https://www.w3schools.com/html/ with proper title, heading, and paragraph, i.e., the course and your information should be there.
I copied the earlier helloworld file and repeated the exact steps as above. This time, I just changed the code up a bit following a template. Here is the source code from index.c as well as a screenshot of the output. 

Included file `index.c`:

```c
#include <stdio.h>



int main(void) {

    printf("Content-Type: text/html; charset=utf-8\n\n");

    printf("<!DOCTYPE html>\n");

    printf("<html>\n");

    printf("<head>\n");

    printf("<title>WAPH- Zaid Najar</title>\n"); 

    printf("</head>\n");

    printf("<body>\n");

    printf("<h1>Welcome to WAPH! I am Zaid Najar.</h1>\n"); 

    printf("<p> I am a Computer Science Major, class of 2025.</p>\n"); 

    printf("</body>\n");

    printf("</html>\n");

    return 0;

}
```
[![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/ecb90d8a-4a84-4248-89fe-25fa9c0c8a84)](https://private-user-images.githubusercontent.com/169232307/330598754-ecb90d8a-4a84-4248-89fe-25fa9c0c8a84.png?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3MTU3MjUzMjgsIm5iZiI6MTcxNTcyNTAyOCwicGF0aCI6Ii8xNjkyMzIzMDcvMzMwNTk4NzU0LWVjYjkwZDhhLTRhODQtNDI0OC04OWZlLTI1ZmE5YzBjOGE4NC5wbmc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBVkNPRFlMU0E1M1BRSzRaQSUyRjIwMjQwNTE0JTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDI0MDUxNFQyMjE3MDhaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT1mNDRhNTY3YmRiMzQ1ZTkwYWI4YWVhZmEyMjdmOWEyNjg3MzFjYzI4YzBiZmU4MzM0MjQ0ZTQ4NTEwNDU0ZjI0JlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCZhY3Rvcl9pZD0wJmtleV9pZD0wJnJlcG9faWQ9MCJ9.4cc_25pM8an8xiCdgigB3xHRMtryi7VYbhT4_vkLx7M)

## Task 2. A simple PHP Web Application with user input.

a.  Summarize and demonstrate with a screenshot that you have successfully developed a simple helloworld.php PHP page with your name and PHP configuration as guided in Lecture 3.
I installed php and followed the instructions given in the lecture. I created a new file called helloworld.php and then configured it to show up on my browser as shown in the screenshot below. 
[![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/e9677779-7a2e-496f-aa38-0aad9b8deb6f)](https://private-user-images.githubusercontent.com/169232307/330601921-e9677779-7a2e-496f-aa38-0aad9b8deb6f.png?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3MTU3MjUzMjgsIm5iZiI6MTcxNTcyNTAyOCwicGF0aCI6Ii8xNjkyMzIzMDcvMzMwNjAxOTIxLWU5Njc3Nzc5LTdhMmUtNDk2Zi1hYTM4LTBhYWQ5YjhkZWI2Zi5wbmc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBVkNPRFlMU0E1M1BRSzRaQSUyRjIwMjQwNTE0JTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDI0MDUxNFQyMjE3MDhaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT1mNTc0NWExNDE2NGE1Zjk4NGU4YzdhOWRmYjY1YWZiNmFiOWRhNGE2ZTRlNTk5ODUxMzRmYTk2ZTkzNzkxZDU3JlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCZhY3Rvcl9pZD0wJmtleV9pZD0wJnJlcG9faWQ9MCJ9.4-E7YYlYlcL6lF-_XEI4JfTyFf9EKXDMxk0rV7WA1VE)

b. Demonstrate that you developed and deployed an echo Web application in PHP, e.g., echo.php with a screenshot with your name in the data.
I created a new file called echo.php and deployed it the same as the previous file. I then made data equal my name. 

Included file `echo.php`:

```
<?php

echo $_REQUEST["data"];

?>
```
Screenshot of output: 
[![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/badd70b8-b19e-452e-8d4c-8dc76dd6d532)](https://private-user-images.githubusercontent.com/169232307/330601921-e9677779-7a2e-496f-aa38-0aad9b8deb6f.png?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3MTU3MjUzMjgsIm5iZiI6MTcxNTcyNTAyOCwicGF0aCI6Ii8xNjkyMzIzMDcvMzMwNjAxOTIxLWU5Njc3Nzc5LTdhMmUtNDk2Zi1hYTM4LTBhYWQ5YjhkZWI2Zi5wbmc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBVkNPRFlMU0E1M1BRSzRaQSUyRjIwMjQwNTE0JTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDI0MDUxNFQyMjE3MDhaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT1mNTc0NWExNDE2NGE1Zjk4NGU4YzdhOWRmYjY1YWZiNmFiOWRhNGE2ZTRlNTk5ODUxMzRmYTk2ZTkzNzkxZDU3JlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCZhY3Rvcl9pZD0wJmtleV9pZD0wJnJlcG9faWQ9MCJ9.4-E7YYlYlcL6lF-_XEI4JfTyFf9EKXDMxk0rV7WA1VE)

Security Risks: There are a few risks such as URL manipulation which allows users to manipulate the URL to add unintended data. There is also a lack of input validation which could lead to errors or unwanted access from other users. 

## Task 3. Understanding HTTP GET and POST requests.

a. Briefly describe how you used Wireshark to examine the HTTP GET Request and Response for the echo.php page with your name in the data.
I used Wireshark by running it as I did in the earlier tasks, navigating to my echo.php in the browser, and filtering by HTTP.
[![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/4ba1946d-9e20-4091-8123-082f0ae790bd)](https://private-user-images.githubusercontent.com/169232307/330604384-4ba1946d-9e20-4091-8123-082f0ae790bd.png?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3MTU3MjUzMjgsIm5iZiI6MTcxNTcyNTAyOCwicGF0aCI6Ii8xNjkyMzIzMDcvMzMwNjA0Mzg0LTRiYTE5NDZkLTllMjAtNDA5MS04MTIzLTA4MmYwYWU3OTBiZC5wbmc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBVkNPRFlMU0E1M1BRSzRaQSUyRjIwMjQwNTE0JTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDI0MDUxNFQyMjE3MDhaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT0yY2M3YzA2YWU3NzIwZTcxYjBlYWYzMWI2NWMwNWRmMzRjMTIyYmQ2OGJmMzE3MzUyMjNkYWNmYjNkMGFjZTAzJlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCZhY3Rvcl9pZD0wJmtleV9pZD0wJnJlcG9faWQ9MCJ9.CscqxqmjReQzykEnGoG1m12z6AOwr5LubmKzqD8y69g)
[![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/30ec03e1-48e1-4a27-b271-4f3da24f10b4)](https://private-user-images.githubusercontent.com/169232307/330604497-30ec03e1-48e1-4a27-b271-4f3da24f10b4.png?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3MTU3MjUzMjgsIm5iZiI6MTcxNTcyNTAyOCwicGF0aCI6Ii8xNjkyMzIzMDcvMzMwNjA0NDk3LTMwZWMwM2UxLTQ4ZTEtNGEyNy1iMjcxLTRmM2RhMjRmMTBiNC5wbmc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBVkNPRFlMU0E1M1BRSzRaQSUyRjIwMjQwNTE0JTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDI0MDUxNFQyMjE3MDhaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT1kMDc2MjBkNDc2MDJkMTdhYmI0MzZlYWEzZGVhYjIzYWJkMjY4NTNjMmNjNWE1OWZjZjkxYjQ1Y2MwZjRkMGViJlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCZhY3Rvcl9pZD0wJmtleV9pZD0wJnJlcG9faWQ9MCJ9.4r2n5-Iqtb_d17yp2iU5wyCJUaS91U80XHr2fKShmX4)

b. Summarize using curl to create an HTTP POST request with your name in the data.
I install curl then used the command as instructed with my data input to receive the POST request. The two screenshots below show the request using curl and the request from the HTTP Stream.
[![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/92fdc46f-6032-4447-94ad-5d5c8de0ce03)](https://private-user-images.githubusercontent.com/169232307/330605262-88882d62-50fb-4854-904d-d5ed385d928e.png?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3MTU3MjUzMjgsIm5iZiI6MTcxNTcyNTAyOCwicGF0aCI6Ii8xNjkyMzIzMDcvMzMwNjA1MjYyLTg4ODgyZDYyLTUwZmItNDg1NC05MDRkLWQ1ZWQzODVkOTI4ZS5wbmc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBVkNPRFlMU0E1M1BRSzRaQSUyRjIwMjQwNTE0JTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDI0MDUxNFQyMjE3MDhaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT02ZDFlODI1YTkyNzcxNzdjNjM4YTlmZmFiZTcwYzM3ZGFmN2QwNmMwZmExNGMyMDNkOTUwMDkwOTRhMjIyNjViJlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCZhY3Rvcl9pZD0wJmtleV9pZD0wJnJlcG9faWQ9MCJ9.Agg1AKHi3VMxuUbTJzwRek4mLMy8bwGOc852vlNVT28)
[![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/246419f0-f9f5-4c3a-af8d-3900bada48b5)](https://private-user-images.githubusercontent.com/169232307/330605285-246419f0-f9f5-4c3a-af8d-3900bada48b5.png?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3MTU3MjUzMjgsIm5iZiI6MTcxNTcyNTAyOCwicGF0aCI6Ii8xNjkyMzIzMDcvMzMwNjA1Mjg1LTI0NjQxOWYwLWY5ZjUtNGMzYS1hZjhkLTM5MDBiYWRhNDhiNS5wbmc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBVkNPRFlMU0E1M1BRSzRaQSUyRjIwMjQwNTE0JTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDI0MDUxNFQyMjE3MDhaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT1kZTI0NjA0NWNlZTFmYTdiZTY2Y2RiZDdkNDYyZjE5YzI1OTU0N2VkMjFlY2FiZGRiM2YwYTUwYzEzNTNhMTJjJlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCZhY3Rvcl9pZD0wJmtleV9pZD0wJnJlcG9faWQ9MCJ9.rAfREcWterogf5YOqczFV_mpr49rDlDv-o2Wqm2Ltr8)

c. Compare the similarity/difference between HTTP POST Request and HTTP GET Request and between the two HTTP Responses above. 
In the request method, GET adds data to the URL while the POST sends it in the request body. For data visbility, you can see the data in the URL in GET, but in POST the data is in the request body. GET is less secure while post is more secure. GET is for getting data while POST is for sending data to be processed.

















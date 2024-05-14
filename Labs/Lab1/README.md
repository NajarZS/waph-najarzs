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
![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/3f63e16b-8846-4cca-be53-12698a0b7261)

Screenshot 2: Response
![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/1594a9ec-c9d5-485a-9df0-441889a69abc)

Screenshot 3: HTTP Stream
![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/5be3d125-dc87-4d26-9c20-cab75c81feb3)

## Task 2. Understanding HTTP using telnet and Wireshark

Telnet was used in this task to send a minimal HTTP request to Wireshark. After opening the example.com link and filtering by HTTP, I opened the terminal and used the command telnet example.com 80. This connected and then I used a GET method and the Host header to analyze the capture. 

1. A screenshot of your terminal showing the HTTP Request (you typed) and HTTP response from the server
   ![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/89ed3500-4618-4126-b395-2035122ed694)
 
2. A screenshot of the HTTP Request message (you typed in telnet above) in Wireshark as in Task 1
![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/d2e5cedf-f585-44b0-ba8b-8519807c1a84)
The differences are there are two different HTTP versions used with Telnet using 1.0 and the browser using 1.1. The telnet is also missing the User-Agent field, the Accept, the Accept-Language, Accept-Encoding, Connection, and Upgrade-Insecure-Reuqests fields. 

3. A screenshot of the HTTP Response message in Wireshark that the server responded to your request. 
![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/fb2df53e-16e5-4b63-8004-d0bb3aa6088f)
The differences are that the Telnet uses another HTTP version. It is also missing the fields: Connection Handling, Transger Encoding, Content-Encoding, and other headers such as Cache-Control, ETag, Set-Cookie, etc.

# Part II - Basic Web Application Programming

## Task 1. CGI Web applications in C

a. Summarize how you developed a Hello World CGI program in C and compiled and deployed the program on the web server. 
I created a new file called hellowrold.c that was a simple print statement. I compiled it using gcc to turn it into a .cgi file. I then configured the Apache web server. I then copied the CGI program to the cgi-bin directory and then navigated to the given link. This is where I saw the expected output as shown in the screenshot below. 
![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/b8a7df0e-03fa-4a32-a9cf-b6d94abe3f8a)

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
![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/ecb90d8a-4a84-4248-89fe-25fa9c0c8a84)

## Task 2. A simple PHP Web Application with user input.

a.  Summarize and demonstrate with a screenshot that you have successfully developed a simple helloworld.php PHP page with your name and PHP configuration as guided in Lecture 3.
I installed php and followed the instructions given in the lecture. I created a new file called helloworld.php and then configured it to show up on my browser as shown in the screenshot below. 
![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/e9677779-7a2e-496f-aa38-0aad9b8deb6f)

b. Demonstrate that you developed and deployed an echo Web application in PHP, e.g., echo.php with a screenshot with your name in the data.
I created a new file called echo.php and deployed it the same as the previous file. I then made data equal my name. 

Included file `echo.php`:

```
<?php

echo $_REQUEST["data"];

?>
```
Screenshot of output: 
![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/badd70b8-b19e-452e-8d4c-8dc76dd6d532)

Security Risks: There are a few risks such as URL manipulation which allows users to manipulate the URL to add unintended data. There is also a lack of input validation which could lead to errors or unwanted access from other users. 

## Task 3. Understanding HTTP GET and POST requests.

a. Briefly describe how you used Wireshark to examine the HTTP GET Request and Response for the echo.php page with your name in the data.
I used Wireshark by running it as I did in the earlier tasks, navigating to my echo.php in the browser, and filtering by HTTP.
![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/4ba1946d-9e20-4091-8123-082f0ae790bd)
![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/30ec03e1-48e1-4a27-b271-4f3da24f10b4)

b. Summarize using curl to create an HTTP POST request with your name in the data.
I install curl then used the command as instructed with my data input to receive the POST request. The two screenshots below show the request using curl and the request from the HTTP Stream.
![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/88882d62-50fb-4854-904d-d5ed385d928e)
![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/246419f0-f9f5-4c3a-af8d-3900bada48b5)

c. Compare the similarity/difference between HTTP POST Request and HTTP GET Request and between the two HTTP Responses above. 
In the request method, GET adds data to the URL while the POST sends it in the request body. For data visbility, you can see the data in the URL in GET, but in POST the data is in the request body. GET is less secure while post is more secure. GET is for getting data while POST is for sending data to be processed.

















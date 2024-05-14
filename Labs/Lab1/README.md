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











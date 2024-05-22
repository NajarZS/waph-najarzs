# waph-najarzs 
## WAPH- Web Application Programming and Hacking 
## Lab 2 - Front-end Web Development
Name: Zaid Najar 
Instructor: Dr. Phu Phung
Email: najarzs@mail.uc.edu

[![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/7efdc406-f5ce-4fbb-80fc-cfe00133c98c)](https://private-user-images.githubusercontent.com/169232307/332916820-7efdc406-f5ce-4fbb-80fc-cfe00133c98c.png?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3MTY0MTUxMjMsIm5iZiI6MTcxNjQxNDgyMywicGF0aCI6Ii8xNjkyMzIzMDcvMzMyOTE2ODIwLTdlZmRjNDA2LWY1Y2UtNGZiYi04MGZjLWNmZTAwMTMzYzk4Yy5wbmc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBVkNPRFlMU0E1M1BRSzRaQSUyRjIwMjQwNTIyJTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDI0MDUyMlQyMTUzNDNaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT04MTIxYTU4YzUwYjYyYzAwNmMxNjcyZTg3MTFlNTdhZWU5ZWZiMWZiY2YwNmI3M2UzYTJiNjkxMTdkZTcyM2M1JlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCZhY3Rvcl9pZD0wJmtleV9pZD0wJnJlcG9faWQ9MCJ9.KkBr_xzTTFJNVcUA1LYnh_42ldA2tX1KxMRDfHYd_Qs)

Lab 2 Github Link: https://github.com/NajarZS/waph-najarzs/tree/main/Labs/Lab2

## Overview

In this lab, I learned the basics of web development starting with how to make a simple html page and then some simple in line JS code and apis. The lab is then expanded by using AJAx, CSS, and jQuery. 

## Task 1: Basic HTML with forms, and JavaScript

In this task, I created an HTML page and then incorporated some JS to have in line tags, a digital clock, and an email button. 

a. HTML

In this part, I followed the templates and codes in the lecture. It was not hard to replicate, and it taught me the basics of HTML all over again. The code is found under the Lab2 folder. 

b. Simple Javascript

This part was a bit harder to replicate, but the lecture was very direct and informative on what to add and how to write the code. I liked added the clock feature and have never seen anything like it. It also showed how to display things with a click. Below is a screenshot of the finished product. 

<div style="text-align: center;">
  <img src="https://github.com/NajarZS/waph-najarzs/assets/169232307/5c41f4d4-fcc2-464b-a853-187d786aa85a" alt="Finished code for task 1">
  <p><strong>Finished code for task 1</strong></p>
</div>

## Task 2: Ajax, CSS, jQuery, and Web API integration

This task will go over incorporating Ajax, CSS, jQuery, and Web API integration 

a. Ajax

In this part I added the HTML code as shown in the lecture to add a server repsonse feature on the page. When entering a user input and clicking submit, it will display what the user inputted right below it. The console and network also show the response. I then added another one but this time without a form. An Ajax request works by consturcting an XMLHttpRequest when the user interacts with the webpage. The server then responds to the request using the open and send methods and then using the echo.php to echo back the data received. The onreadystatechange will check if the request has been completed and successfully. When this is all done, the page is then updated with the response data without ever reloading the page. There are 3 screenshots below for this part. 

<div style="text-align: center;">
  <img src="https://private-user-images.githubusercontent.com/169232307/332946033-5841d2a4-a231-4cec-8f05-0294de878f05.png?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3MTY0MTUxMjMsIm5iZiI6MTcxNjQxNDgyMywicGF0aCI6Ii8xNjkyMzIzMDcvMzMyOTQ2MDMzLTU4NDFkMmE0LWEyMzEtNGNlYy04ZjA1LTAyOTRkZTg3OGYwNS5wbmc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBVkNPRFlMU0E1M1BRSzRaQSUyRjIwMjQwNTIyJTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDI0MDUyMlQyMTUzNDNaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT0wNmUwNjQyYzVmYjYwMmU5ZTU2MzVhMDQ1MTU4NmU2MGRhNTE0YjBjYmUyNTUxYWY3NzUwZGQ5Y2I3MjhhOTlmJlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCZhY3Rvcl9pZD0wJmtleV9pZD0wJnJlcG9faWQ9MCJ9.AhqgADslslUqcxvIvnuZob07U5zpWWhrLfwIqf_d_88" alt="Ajax Requests">
  <p><strong>Ajax Requests</strong></p>
</div>

<div style="text-align: center;">
  <img src="https://private-user-images.githubusercontent.com/169232307/332946558-9857e64a-b33c-48de-9501-e38a6bc714b6.png?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3MTY0MTUxMjMsIm5iZiI6MTcxNjQxNDgyMywicGF0aCI6Ii8xNjkyMzIzMDcvMzMyOTQ2NTU4LTk4NTdlNjRhLWIzM2MtNDhkZS05NTAxLWUzOGE2YmM3MTRiNi5wbmc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBVkNPRFlMU0E1M1BRSzRaQSUyRjIwMjQwNTIyJTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDI0MDUyMlQyMTUzNDNaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT1iYTM0MmE5ZjYyOTgzZjk3MzM1NzVhYjdjYmIxODM5Y2EzZWI5Njg1NTkyMTgzNjg4ZDU3N2VjYzBjNjVkOGQ4JlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCZhY3Rvcl9pZD0wJmtleV9pZD0wJnJlcG9faWQ9MCJ9.dbJ1-hix4HxiZyYfq3PIar-rEJEnqOxRASOO94NQdkw" alt="Ajax Requests without a form">
  <p><strong>Ajax Requests without a form</strong></p>
</div>

<div style="text-align: center;">
  <img src="https://private-user-images.githubusercontent.com/169232307/332946831-356f366b-2d62-4e33-ac76-1029b560e7bc.png?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3MTY0MTUxMjMsIm5iZiI6MTcxNjQxNDgyMywicGF0aCI6Ii8xNjkyMzIzMDcvMzMyOTQ2ODMxLTM1NmYzNjZiLTJkNjItNGUzMy1hYzc2LTEwMjliNTYwZTdiYy5wbmc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBVkNPRFlMU0E1M1BRSzRaQSUyRjIwMjQwNTIyJTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDI0MDUyMlQyMTUzNDNaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT0wNjAwZDU0NGRlMDg2YjE3MTVmNWMzZTBkZTgwNTVjZGY1N2Q5OTAzMmExZjFmOTc4YmI5NTUxMjRkNTU3MDJlJlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCZhY3Rvcl9pZD0wJmtleV9pZD0wJnJlcG9faWQ9MCJ9.NrYVcmPGQsIR4z813Y1_wtk_WQfW_e9R0K-lwY3viCc" alt="Network Analysis">
  <p><strong>Network Analysis</strong></p>
</div>

b. CSS

In this part, I added CSS using inline, internal, and external as shown in the lecture. The screenshot below shows the finished result. 

<div style="text-align: center;">
  <img src="https://private-user-images.githubusercontent.com/169232307/332953709-22bd9242-e224-4695-a648-42812113d2a7.png?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3MTY0MTUxMjMsIm5iZiI6MTcxNjQxNDgyMywicGF0aCI6Ii8xNjkyMzIzMDcvMzMyOTUzNzA5LTIyYmQ5MjQyLWUyMjQtNDY5NS1hNjQ4LTQyODEyMTEzZDJhNy5wbmc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBVkNPRFlMU0E1M1BRSzRaQSUyRjIwMjQwNTIyJTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDI0MDUyMlQyMTUzNDNaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT0wNzFlN2YzMDUyZGNmYTA0ODEwOTQ4YmE2M2EzMDM3Y2UyOWFhZmEwMGRkNGNlY2IwNDg3NTI2ODc4MzE3MWM2JlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCZhY3Rvcl9pZD0wJmtleV9pZD0wJnJlcG9faWQ9MCJ9.VrBkGgB8E5aln6UkMZELmuDWRwE1cuBuld5K5DbRqB8" alt="Added CSS">
  <p><strong>Page Added With CSS</strong></p>
</div>

c. jQuery 

In this part, I learned how to implement jQuery to add an Ajax GEt and Ajax Post reuqest button that print the response from the server. I followed the lecture exactly as listed and also learned how to use the network tool to look at the differences between the two. The main difference I noticed is that the post does not list what the input is in the name. Below is a screenshot of the new buttons and their network inspections. 

<div style="text-align: center;">
  <img src="https://private-user-images.githubusercontent.com/169232307/332961084-636670cc-b34a-4644-9c59-1a2ab5e1464e.png?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3MTY0MTUxMjMsIm5iZiI6MTcxNjQxNDgyMywicGF0aCI6Ii8xNjkyMzIzMDcvMzMyOTYxMDg0LTYzNjY3MGNjLWIzNGEtNDY0NC05YzU5LTFhMmFiNWUxNDY0ZS5wbmc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBVkNPRFlMU0E1M1BRSzRaQSUyRjIwMjQwNTIyJTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDI0MDUyMlQyMTUzNDNaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT04ZDAxMmMyYWE4NzMxYTAxOTA5YThlYjY2MDVhOTMwYzdkM2IwNWIwNTNmZTBiY2UyOWY0NGJhMzBmZWE2NzVjJlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCZhY3Rvcl9pZD0wJmtleV9pZD0wJnJlcG9faWQ9MCJ9.Qv_A20ZqMi4T_Boa5PfDz9tON3ik9O1_VQHjtBC_aFw" alt="New jQuery Buttons">
  <p><strong>New jQuery Buttons</strong></p>
</div>

<div style="text-align: center;">
  <img src="https://private-user-images.githubusercontent.com/169232307/332961399-a22411f4-95f8-48d7-a254-fcd1ea8bf494.png?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3MTY0MTUxMjMsIm5iZiI6MTcxNjQxNDgyMywicGF0aCI6Ii8xNjkyMzIzMDcvMzMyOTYxMzk5LWEyMjQxMWY0LTk1ZjgtNDhkNy1hMjU0LWZjZDFlYThiZjQ5NC5wbmc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBVkNPRFlMU0E1M1BRSzRaQSUyRjIwMjQwNTIyJTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDI0MDUyMlQyMTUzNDNaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT1mZGUwZGJhYzcxYzNhYWY0MjllNmFlYjY2MDJiZGU1M2FhOGY3NTlhMWQzZGNjZjYzM2RlODNhNDU0YTgwOTJlJlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCZhY3Rvcl9pZD0wJmtleV9pZD0wJnJlcG9faWQ9MCJ9.qs7TmFXOs7l3pZ01vXZlUSCCsvrbKDQHMz7EGeH4lwU" alt="GET Network Inspection">
  <p><strong>GET Network Inspection</strong></p>
</div>

<div style="text-align: center;">
  <img src="https://private-user-images.githubusercontent.com/169232307/332961628-1f13a38a-931c-47f5-9f3d-4045c2588681.png?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3MTY0MTUxMjMsIm5iZiI6MTcxNjQxNDgyMywicGF0aCI6Ii8xNjkyMzIzMDcvMzMyOTYxNjI4LTFmMTNhMzhhLTkzMWMtNDdmNS05ZjNkLTQwNDVjMjU4ODY4MS5wbmc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBVkNPRFlMU0E1M1BRSzRaQSUyRjIwMjQwNTIyJTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDI0MDUyMlQyMTUzNDNaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT1iMDUyMmY3YWU4ZDIxZDNmY2RhZWFmNDE5YmZjOGZjNmIzZDMwNzY5OWZiYjU5N2UxMmI1MWYyNTY3OGZmMDM5JlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCZhY3Rvcl9pZD0wJmtleV9pZD0wJnJlcG9faWQ9MCJ9.rAP5r-_A1yRkCgEnHGoNH7RI8t4Gvn6hVove_HhkL2s" alt="POST Network Inspection">
  <p><strong>POST Network Inspection</strong></p>
</div>

d. Web API integration

i. Using Ajax on https://v2.jokeapi.dev/joke/Programming?type=single

I used Ajax to use a joke api to display a random joke when the button is pressed. I followed the lecture, but this time I decided to turn it into a button that disiplays a random joke each time it is pressed. 

<div style="text-align: center;">
  <img src="https://private-user-images.githubusercontent.com/169232307/332969386-a7a7e8ad-d2a9-4788-bac8-63bfa74a6107.png?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3MTY0MTUxMjMsIm5iZiI6MTcxNjQxNDgyMywicGF0aCI6Ii8xNjkyMzIzMDcvMzMyOTY5Mzg2LWE3YTdlOGFkLWQyYTktNDc4OC1iYWM4LTYzYmZhNzRhNjEwNy5wbmc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBVkNPRFlMU0E1M1BRSzRaQSUyRjIwMjQwNTIyJTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDI0MDUyMlQyMTUzNDNaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT0wYWNiNmRkMDFkMjZiMGU2ODQyZTY2NTg3OWVmNGNkZDM3YWQzYWZlZTA1NTdhOWE1MjYzMTMwNTJkYWZhZTJkJlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCZhY3Rvcl9pZD0wJmtleV9pZD0wJnJlcG9faWQ9MCJ9.wHAZEGdMgdre_m3-Br-E2D39DgN2bYA4rgZXJCFKyok" alt="Joke API">
  <p><strong>Joke API</strong></p>
</div>

<div style="text-align: center;">
  <img src="https://private-user-images.githubusercontent.com/169232307/332969585-fa947860-1bc4-4ae7-9312-53136dc9850a.png?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3MTY0MTUxMjMsIm5iZiI6MTcxNjQxNDgyMywicGF0aCI6Ii8xNjkyMzIzMDcvMzMyOTY5NTg1LWZhOTQ3ODYwLTFiYzQtNGFlNy05MzEyLTUzMTM2ZGM5ODUwYS5wbmc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBVkNPRFlMU0E1M1BRSzRaQSUyRjIwMjQwNTIyJTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDI0MDUyMlQyMTUzNDNaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT0wMzQ3NDYwMWRmMTM5MjQ5OTRkZGM0ZjUxNjk1MWExNTU1NjVjZDY5MGU5ZGRmMjA0ODBjMzljZDgxYzJhMTYzJlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCZhY3Rvcl9pZD0wJmtleV9pZD0wJnJlcG9faWQ9MCJ9.3F-drenOfucj6XyUSlt5sDCtNxyeoY7VqjIla6rnCZs" alt="Joke API Network">
  <p><strong>Joke API Network </strong></p>
</div>

ii. Using the fetch API on https://api.agify.io/?name=input

I added HTML and JS code using the fetch() method as instructured to use an API that takes in a name from the user and guesses the age. This showed me how to use the fetch() method and expanded more on API use. 

<div style="text-align: center;">
  <img src="https://private-user-images.githubusercontent.com/169232307/332971920-9401cd74-8100-4966-8176-42e0a6c6523f.png?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3MTY0MTUxMjMsIm5iZiI6MTcxNjQxNDgyMywicGF0aCI6Ii8xNjkyMzIzMDcvMzMyOTcxOTIwLTk0MDFjZDc0LTgxMDAtNDk2Ni04MTc2LTQyZTBhNmM2NTIzZi5wbmc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBVkNPRFlMU0E1M1BRSzRaQSUyRjIwMjQwNTIyJTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDI0MDUyMlQyMTUzNDNaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT1jZTE3OGZhOGRmZWQxMWUxYzI0MjgzZDY4YjJkMTI1ZWI5YzdiZWQxNWE0MDA1ZmI3ZjYwOWFiOWQ3MjMyYjUzJlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCZhY3Rvcl9pZD0wJmtleV9pZD0wJnJlcG9faWQ9MCJ9.MX4J1XVnV-8-G3ZdfEtIQLTIl00urecFsw4GkKu19go" alt="Age Guesser">
  <p><strong>Age Guesser </strong></p>
</div>

<div style="text-align: center;">
  <img src="https://private-user-images.githubusercontent.com/169232307/332972088-17c8f6e8-0a9c-4fa3-8ab2-15f0848d6bd0.png?jwt=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpc3MiOiJnaXRodWIuY29tIiwiYXVkIjoicmF3LmdpdGh1YnVzZXJjb250ZW50LmNvbSIsImtleSI6ImtleTUiLCJleHAiOjE3MTY0MTUxMjMsIm5iZiI6MTcxNjQxNDgyMywicGF0aCI6Ii8xNjkyMzIzMDcvMzMyOTcyMDg4LTE3YzhmNmU4LTBhOWMtNGZhMy04YWIyLTE1ZjA4NDhkNmJkMC5wbmc_WC1BbXotQWxnb3JpdGhtPUFXUzQtSE1BQy1TSEEyNTYmWC1BbXotQ3JlZGVudGlhbD1BS0lBVkNPRFlMU0E1M1BRSzRaQSUyRjIwMjQwNTIyJTJGdXMtZWFzdC0xJTJGczMlMkZhd3M0X3JlcXVlc3QmWC1BbXotRGF0ZT0yMDI0MDUyMlQyMTUzNDNaJlgtQW16LUV4cGlyZXM9MzAwJlgtQW16LVNpZ25hdHVyZT03OWM1NmJjMmYwMTMyNDVlNWJhM2Y1ZGJjZjk5MzFkNWYwNTRiN2IwMjI4OTM3NmE1OTBkZTFkNzZlYWVkOWIyJlgtQW16LVNpZ25lZEhlYWRlcnM9aG9zdCZhY3Rvcl9pZD0wJmtleV9pZD0wJnJlcG9faWQ9MCJ9.ZWHy3AtYSFnfWzOf1J_Nd_E5aAVUY7-4KJ2LeVPvdOA" alt="Age Guesser Network">
  <p><strong>Age Guesser Network </strong></p>
</div>































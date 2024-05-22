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
  <img src="https://github.com/NajarZS/waph-najarzs/assets/169232307/5841d2a4-a231-4cec-8f05-0294de878f05" alt="Ajax Requests">
  <p><strong>Ajax Requests</strong></p>
</div>

<div style="text-align: center;">
  <img src="https://github.com/NajarZS/waph-najarzs/assets/169232307/9857e64a-b33c-48de-9501-e38a6bc714b6" alt="Ajax Requests without a form">
  <p><strong>Ajax Requests without a form</strong></p>
</div>

<div style="text-align: center;">
  <img src="https://github.com/NajarZS/waph-najarzs/assets/169232307/356f366b-2d62-4e33-ac76-1029b560e7bc" alt="Network Analysis">
  <p><strong>Network Analysis</strong></p>
</div>

b. CSS

In this part, I added CSS using inline, internal, and external as shown in the lecture. The screenshot below shows the finished result. 

<div style="text-align: center;">
  <img src="https://github.com/NajarZS/waph-najarzs/assets/169232307/22bd9242-e224-4695-a648-42812113d2a7" alt="Added CSS">
  <p><strong>Page Added With CSS</strong></p>
</div>

c. jQuery 

In this part, I learned how to implement jQuery to add an Ajax GEt and Ajax Post reuqest button that print the response from the server. I followed the lecture exactly as listed and also learned how to use the network tool to look at the differences between the two. The main difference I noticed is that the post does not list what the input is in the name. Below is a screenshot of the new buttons and their network inspections. 

<div style="text-align: center;">
  <img src="https://github.com/NajarZS/waph-najarzs/assets/169232307/636670cc-b34a-4644-9c59-1a2ab5e1464e" alt="New jQuery Buttons">
  <p><strong>New jQuery Buttons</strong></p>
</div>

<div style="text-align: center;">
  <img src="https://github.com/NajarZS/waph-najarzs/assets/169232307/a22411f4-95f8-48d7-a254-fcd1ea8bf494" alt="GET Network Inspection">
  <p><strong>GET Network Inspection</strong></p>
</div>

<div style="text-align: center;">
  <img src="https://github.com/NajarZS/waph-najarzs/assets/169232307/1f13a38a-931c-47f5-9f3d-4045c2588681" alt="POST Network Inspection">
  <p><strong>POST Network Inspection</strong></p>
</div>

d. Web API integration

i. Using Ajax on https://v2.jokeapi.dev/joke/Programming?type=single

I used Ajax to use a joke api to display a random joke when the button is pressed. I followed the lecture, but this time I decided to turn it into a button that disiplays a random joke each time it is pressed. 

<div style="text-align: center;">
  <img src="https://github.com/NajarZS/waph-najarzs/assets/169232307/a7a7e8ad-d2a9-4788-bac8-63bfa74a6107" alt="Joke API">
  <p><strong>Joke API</strong></p>
</div>

<div style="text-align: center;">
  <img src="https://github.com/NajarZS/waph-najarzs/assets/169232307/fa947860-1bc4-4ae7-9312-53136dc9850a" alt="Joke API Network">
  <p><strong>Joke API Network </strong></p>
</div>

ii. Using the fetch API on https://api.agify.io/?name=input

I added HTML and JS code using the fetch() method as instructured to use an API that takes in a name from the user and guesses the age. This showed me how to use the fetch() method and expanded more on API use. 

<div style="text-align: center;">
  <img src="https://github.com/NajarZS/waph-najarzs/assets/169232307/9401cd74-8100-4966-8176-42e0a6c6523f" alt="Age Guesser">
  <p><strong>Age Guesser </strong></p>
</div>

<div style="text-align: center;">
  <img src="https://github.com/NajarZS/waph-najarzs/assets/169232307/17c8f6e8-0a9c-4fa3-8ab2-15f0848d6bd0" alt="Age Guesser Network">
  <p><strong>Age Guesser Network </strong></p>
</div>































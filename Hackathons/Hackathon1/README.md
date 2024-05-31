# Waph-najarzs
# WAPH- Web Application Programming and Hacking

## Hackathon 1 - Cross-site Scripting Attacks and Defense

Name: Zaid Najar 
Instructor: Dr. Phu Phung 
Email: najarzs@mail.uc.edu


![image](https://github.com/NajarZS/najarzs.github.io/assets/169232307/ac395869-1294-4a44-8f74-a87156c15fe6)

Repository link: https://github.com/NajarZS/waph-najarzs/Hackathons

## Overview 

This is the first hackathon where I learned how to attack and defend on a site. The attacking consisted of 6 levels. 

## Task 1: Attack

Level 0: This one was simple because it was like lab 1. I just added a simple alert script. Here is the script I added: <script>alert('Zaid');</script> and here is the result: 
![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/12222056-4dac-4f18-a865-e550a8ca322c)

Level 1: Level 1 was the same as level 0, but instead of an input field, I just had to add it to the url. I just added ?input=<script>alert(%27Zaid%27)</script> to the end of the url and I got this:
![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/eb13551a-2e83-45c1-9e0d-38a6c29be4ef)

Level 2: For level 2, I created an HTML form with an XSS payload (the same as before). It used JavaScript to send a POST request to the target URL. The code is found in the repository under level2.html. Then on the page, I press submit and this is the result: 
![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/5ca4c2ab-e303-4080-a8e2-47bd4159c312)

Level 3: For level 3, I created another HTML form that sends a POST request, but this time I used an image tag with an "onerror" and inside of it is the alert with my name in it. The code is found in level3.html. Here is the result: 
![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/8d45c203-0f36-48e6-a9e8-5616c0b720a5)

Level 4: For this part, I did something similar to level 3, but I used an onload event to put an alert out ((<svg onload=alert("Zaid")></svg>)). This bypassed the filters. Here is the result and the code is in level4.html. 
![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/5e6b86e6-24bc-4f67-8337-8100ab2b9093)

Level 5: For this part, I did something similar to part 4, but ths time I did an "onfocus" event handler that triggers a confirm dialog. It looks like this: (<input type='text' onfocus='window["confirm"]("Zaid")' autofocus>). This bypasses the filters by blocking the 'script' and 'alert' keywords and indirectly displays the dialog. The code is in level5.html. Here is the outcome: 
![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/16f744d9-7920-4ae0-9dd2-76c1527650db)

## Task 2: Defense 

Input Validation Implementation: for this part, I simply went back to my html file from lab 2 and my echo.php file from lab 1 and added simple validations to make sure it is not null, empty, or undefined. I did this by adding a helper function named "isValidInput" that checks if the input is null, undefined, or empty. This enhances security and makes the code more effecient for both the developers and users. Here is the code of the function:
```javascript
function isValidInput(data) {
return data !== null && data !== undefined && data.trim() !== "";
}
```
For the echo.php, I just added a simple if statement that does the same thing. Here it is below: 

```php

<?php
if (isset($_REQUEST['data']) && $_REQUEST['data'] !== null && trim($_REQUEST['data']) !== '') {
    echo $_REQUEST['data'];
} else {
    echo "Input cannot be empty, null, or undefined";
}
?>
```







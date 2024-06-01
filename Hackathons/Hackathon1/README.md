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
![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/f6a2ba2b-8b4e-4b7f-a3e3-280d91065de5)

Level 1: Level 1 was the same as level 0, but instead of an input field, I just had to add it to the url. I just added ?input=<script>alert(%27Zaid%27)</script> to the end of the url and I got this:
![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/ebb96ce4-e6cf-4858-a117-f30b9199d06a)

Level 2: For level 2, I created an HTML form with an XSS payload (the same as before). It used JavaScript to send a POST request to the target URL. The code is found in the repository under level2.html. The source code of this level probably looks like (It is a simple echo post):
```php
<?php
echo $_POST['input'];
?>
```
  Then on the page, I press submit and this is the result: 
![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/7e7dc5f0-3d0d-4d87-b709-8f2d51046953)

Level 3: For level 3, I created another HTML form that sends a POST request, but this time I used an image tag with an "onerror" and inside of it is the alert with my name in it. The code is found in level3.html. The source code for level 3 probably looks like (It checks if an input field is set, and if not then it returns an error message. It also filters out the script tags). 
```php
<?php
if (isset($_POST['input'])) {
    $input = $_POST['input'];
    $input = preg_replace('/<script\b[^>]*>(.*?)<\/script>/is', '', $input);
    echo $input;
} else {
    echo json_encode(array("error" => "Please provide 'input' field"));
}
?>

```
Here is the result: 
![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/1b44a28c-c700-46c8-b30b-6d70dcf6efcc)

Level 4: For this part, I did something similar to level 3, but I used an onload event to put an alert out ((<svg onload=alert("Zaid")></svg>)). This bypassed the filters. The source code is probably similar to leevel 3, but it filters the img tag as well like this: 
```php
<?php
if (isset($_POST['input'])) {
    $input = $_POST['input'];
    $input = preg_replace('/<(script|img)\b[^>]*>(.*?)<\/(script|img)>/is', '', $input);
    echo $input;
} else {
    echo json_encode(array("error" => "Please provide 'input' field"));
}
?>
```
Here is the result and the code is in level4.html. 
![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/3a95d461-87c0-4011-b8cb-667b394caa87)

Level 5: For this part, I did something similar to part 4, but ths time I did an "onfocus" event handler that triggers a confirm dialog. It looks like this: (<input type='text' onfocus='window["confirm"]("Zaid")' autofocus>). This bypasses the filters by blocking the 'script' and 'alert' keywords and indirectly displays the dialog. The source code probably looks like this (alert is filtered out)
```php
<?php
// Ensure 'input' field is provided
if (isset($_POST['input'])) {
    $input = $_POST['input'];
    // Filter out <script> tags and alert function
    $input = preg_replace('/<script\b[^>]*>(.*?)<\/script>/is', '', $input);
    $input = preg_replace('/alert\s*\(/is', '', $input);
    // Echo the sanitized input
    echo $input;
} else {
    echo json_encode(array("error" => "Please provide 'input' field"));
}
?>
```
as well The code is in level5.html Here is the outcome: 
![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/16f744d9-7920-4ae0-9dd2-76c1527650db)
![image](https://github.com/NajarZS/waph-najarzs/assets/169232307/98df0413-f701-48c8-873c-f8d83486dd8f)


Level 6: I have not been able to figure out level 6, but I'm assuming the source code is just a simple script but with htmlentities used like this one 
```php
<?php
echo htmlentities($_REQUEST['data']);
?>
```

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

Encoding: For this part, I added basic encoding to the same functions and files that I added the validation to. For the html file, I added another function called encodeInput which turns characters into HTML entities. this is the function (it is the same as the one from the lecture): 

```javascript
function encodeInput(input) {
const encoded = document.createElement('div');
encoded.innerText = input;
return encoded.innerHTML;
}
```

For the echo.php, I just did what the lecture said and added htmlentities. This does the same thing and turns characters into their htmlentities. 







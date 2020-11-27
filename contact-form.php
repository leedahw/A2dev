<?php session_start();
//contact-form.php
include("includes/standardheader.html");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="contact form to submit. open to public">
    <meta name="keywords" content="HTML, PHP, IMM, News, Network, contact, form">
    <meta name="author" content="Alana Dahwoon Lee">
    <title>Contact Page</title>
</head>
<body>
<h1>CONTACT US</h1>

<div id ="contact-form">
    <form action = "process-contact-form.php" method = "POST" enctype="multipart/form-data">
    Name: <input type ="text" id= "name" name ="name" required><br/>
    <br/>
    Email Address: <input type = "email" id="emailAddress" name ="emailAddress" required><br/>
    <br/>
    Interests:
        <input type = "checkbox" id= "interests" name = "interests[];" value = "tech"><label id ="interestOption" for = "tech">Tech</label>
        <input type = "checkbox" id= "interests" name = "interests[];" value = "industry"><label id ="interestOption" for = "industry">Industry</label>
        <input type = "checkbox" id= "interests" name = "interests[];" value = "career"><label id ="interestOption" for ="career">Career</label><br/>
    <br/>
    Your Role: <br/>
    <select name="userRole" id="userRole">
        <option id="user-option" value = "writer">Writer</option>
        <option id="user-option" value = "contributor">Contributor</option>
        <option id="user-option" value = "administrator">Administrator</option>
    </select>
    <br/>
    <br/> 
    <input type = "submit" id="submit-data" value="Submit">
    </form>
</div>

    <section id="person-data">


    </section>

<script src= "contact.js"></script>
</body>
</html>
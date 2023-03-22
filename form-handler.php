<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

if(empty($name) || empty($visitor_email) || empty($subject) || empty($message))
    die("name or visitor_email is empty");                      
    
$email_form = 'info@bestschool.com';
$email_subject = 'New Form Submission';

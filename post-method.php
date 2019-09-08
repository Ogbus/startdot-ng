<?php
    if(isset($_POST['submit'])) {
        $fname = $_POST['fname'];
        $email = $_POST['email'];
        $title = $_POST['title'];
        $textArea = $_POST['text'];

        echo "Your full name is : ".$fname."<br>";
        echo "Your Email is : ".$email."<br>";
        echo "Your Title is : ".$title."<br>";
        echo "Your Text is : ".$textArea."<br>";
    }
?>
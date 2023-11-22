<?php 
    $name=$_POST['name'];

    $email=$_POST['email'];

    $subject=$_POST['subject'];

    $message=$_POST['message'];
    
    if (($name!="")||($email!="")||($message!="")) {   

        $from="From: $name<$email>\r\nReturn-path: $email";

        mail("lakshmik1380@gmail.com", $subject, $message, $from);  

        echo "Email sent!"; 
    }    
?> 
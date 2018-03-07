<?php

    if (isset)($_POST['submit'])) {
        $name=$_POST['name'];
        $mailFrom=$_POST['mail'];
        $message=$_POST['message'];

        $mailTo="shreedhar.amin@spaefs.com"
        $headers="From: ".$mailFrom;
        $txt="You have a message from" .$name.".\n\n".$message;


        mail($mailTo, $subject, $txt, $headers);
        header("Location: index.html?mailsend");

    }


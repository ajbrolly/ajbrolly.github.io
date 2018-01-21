<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $mailTo = "hello@ashleebrolly.com";
    $headers = "From: GitHub Profile";
    $txt = "You have received an email from ".$name.".\n\n".$mailFrom.".\n\n".$subject."\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);

    header("Location: contact.php?mailsend")
}


if (isset($_POST['submit'])) {
    if (empty($name) || empty($mailFrom) || empty($subject) || empty($message)) {
        header("Location: contact.php?form=empty");
        exit();
    } else {
        if (!preg_match("/^[a-zA-Z]*$/", $name) || !preg_match("/^[a-zA-Z]*$/", $subject)) {
            header("Location: contact.php?form=char");
            exit();
        } else {
            if (!filter_var($mailFrom, FILTER_VALIDATE_EMAIL)) {
                // if email is wrong, only the email field is cleared when error is thrown & page is reloaded
                header("Location: contact.php?form=email&name=$name&subject=$subject&message=$message");
                exit();
            } else {
                header("Location: contact.php?form=success");
                exit();
            }
        }
    }
}
else {
    header("Location: contact.php?form=error");
    exit();
}

?>
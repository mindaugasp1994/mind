<?php
if (isset($_POST['submit'])) {
    $email = trim($_POST['email']);
    $sub = trim($_POST['subject']);
    $message = trim($_POST['message']);

    if (!empty($email) && !empty($sub) && !empty($message)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $from = "$email";
            $to = "mindaugas.patumsis@gmail.com";
            $subject = "$sub";
            $author = 'from: ' . $email;
            $msg = htmlspecialchars($message);
            // mail($to, $subject, $author, $msg, $from);
            // echo "<script>alert('We got ur message'); </script>";
        }
    }
    include('db.php');
}

<?php
    $firstname = $_POST["fname"];
    $lname = $_POST["lname"];
    $mail = $_POST["mail"];
    $note = $_POST["note"];
    $counter = 1;
    while (file_exists($counter.".txt"))
    {
        $counter++ ;
    }
    $file = fopen($counter.".txt", "w");
    fwrite($file, "First name: ".$firstname."\n"."Last name: ".$lname."\n"."email: ".$mail."\n"."Message: ".$note);
    fclose($file);
    echo ("First name: ".$firstname."<br>"."Last name: ".$lname."<br>"."email: ".$mail."<br>"."Message: ".$note);
?>
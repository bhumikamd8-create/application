<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $course = htmlspecialchars($_POST["course"]);
    $address = nl2br(htmlspecialchars($_POST["address"]));

    echo "
    <div class='output-box'>
        <h3 style='color:#ff512f;'>Application Submitted Successfully 🎉</h3>

        <div class='field'><span class='label-title'>Name:</span> $name</div>
        <div class='field'><span class='label-title'>Email:</span> $email</div>
        <div class='field'><span class='label-title'>Phone:</span> $phone</div>
        <div class='field'><span class='label-title'>Course:</span> $course</div>
        <div class='field'><span class='label-title'>Address:</span> $address</div>
    </div>
    ";
}
?>

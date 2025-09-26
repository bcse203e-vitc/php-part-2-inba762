<?php
$emails = [
    "suresh@example.com",
    "don-email@",
    "steve@site",
    "steve123@gmail.com",
    "yokesh@mail.co.in",
    "invalid@.com",
    "@missinguser.com"
];
$pattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-z]{2,}$/";
echo "<h2>Valid Email Addresses</h2>";
foreach ($emails as $email) {
    if (preg_match($pattern, $email)) {
        echo $email . "<br>";
    }
}
?>


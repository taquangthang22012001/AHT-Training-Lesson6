<?php
function ValidEmail($email) {
    
    $pattern = '/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/';


    if (preg_match($pattern, $email)) {
        return true;
    } else {
        return false; 
    }
}

$email1 = "a@gmail.com";
$email2 = "ab@yahoo.com";
$email3 = "abc@hotmail.com";
$email4 = "@example.com";

if (ValidEmail($email1)) {
    echo "$email1 là email hợp lệ.\n";
} else {
    echo "$email1 là email không hợp lệ.\n";
}
echo "<br>";
if (ValidEmail($email2)) {
    echo "$email2 là email hợp lệ.\n";
} else {
    echo "$email2 là email không hợp lệ.\n";
}
echo "<br>";
if (ValidEmail($email3)) {
    echo "$email3 là email hợp lệ.\n";
} else {
    echo "$email3 là email không hợp lệ.\n";
}
echo "<br>";
if (ValidEmail($email4)) {
    echo "$email4 là email hợp lệ.\n";
} else {
    echo "$email4 là email không hợp lệ.\n";
}
?>

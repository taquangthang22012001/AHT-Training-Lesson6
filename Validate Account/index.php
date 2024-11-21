<?php
function isValidUsername($username) {

    $pattern = '/^[a-z0-9_]{6,}$/';

    if (preg_match($pattern, $username)) {
        return true; 
    } else {
        return false;
    }
}

$usernames = [
    "thang22",    
    "thang_22",   
    "Thang22@",    
    "1234"  
];

foreach ($usernames as $username) {
    if (isValidUsername($username)) {
        echo "$username là tên tài khoản hợp lệ.<br>";
    } else {
        echo "$username là tên tài khoản không hợp lệ.<br>";
    }
}
?>

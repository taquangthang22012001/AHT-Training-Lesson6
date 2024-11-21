<?php
function ValidPhoneNumber($phoneNumber) {
    $pattern = '/^\(\d{2}\)-\(0\d{9}\)$/';

    if (preg_match($pattern, $phoneNumber)) {
        return true;
    } else {
        return false;
    }
}

// Ví dụ kiểm tra
$phoneNumbers = [
    "(84)-(0978489648)",   // Hợp lệ
    "(84)-(1234567890)",   // Hợp lệ
    "(a8)-(0978489648)",   // Không hợp lệ (phần mã vùng chứa ký tự không phải số)
    "(84)-(0978489abc)",   // Không hợp lệ (phần số điện thoại chứa ký tự không phải số)
    "(8)-(0978489648)",    // Không hợp lệ (mã vùng không đủ 2 ký tự)

];

foreach ($phoneNumbers as $number) {
    if (ValidPhoneNumber($number)) {
        echo "$number là số điện thoại hợp lệ.<br>";
    } else {
        echo "$number là số điện thoại không hợp lệ.<br>";
    }
}
?>

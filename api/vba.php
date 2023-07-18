<?php
// 假设正确的密码是 "YourCorrectPassword"
$correctPassword = "湖南科鑫";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // 获取从Excel VBA发送过来的密码
    $enteredPassword = $_POST["password"];

    // 进行密码验证
    if ($enteredPassword === $correctPassword) {
        // 返回认证成功的响应
        echo "认证成功！";
    } else {
        // 返回认证失败的响应
        echo "密码错误，请重新输入。";
    }
}
?>

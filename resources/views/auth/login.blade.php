<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <title>تسجيل الدخول - النظام المحاسبي</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body { font-family: 'Tahoma', Arial, sans-serif; background:#f4f4f4; direction:rtl; }
        .login-box { background:#fff; width:330px; margin:70px auto; padding:25px; border-radius:10px; box-shadow:0 5px 12px #c9c9c9;}
        label { font-weight:bold; display:block; margin:10px 0 5px;}
        input[type=text],input[type=password] { width:100%; padding:10px; box-sizing:border-box; margin-bottom:15px; border-radius:5px; border:1px solid #ccc;}
        button { background:#234fad; color:#fff; border:0; padding:10px 30px; border-radius:5px; width:100%; font-size:16px; cursor:pointer;}
        button:hover { background:#1b3891;}
        .error-msg { color:#e00; background:#ffecec; padding:7px 12px; border-radius:5px; margin-bottom:10px;}
        footer { text-align:center; color:#888; font-size:13px; margin-top:40px;}
    </style>
</head>
<body>
    <div class="login-box">
        <h2 style="text-align:center;">الدخول للنظام</h2>
        <form method="post" action="{{ route('login') }}">
            @csrf
            <div>
                <label for="username">اسم المستخدم</label>
                <input type="text" id="username" name="username" required autofocus placeholder="أدخل اسم المستخدم">
            </div>
            <div>
                <label for="password">كلمة المرور</label>
                <input type="password" id="password" name="password" required placeholder="أدخل كلمة المرور">
            </div>
            @if($errors->any())
                <div class="error-msg">
                    {{ $errors->first() }}
                </div>
            @endif
            <button type="submit">دخول</button>
        </form>
    </div>
    <footer>
        مطور بواسطة احمد ابو الشيخ &copy; {{ date('Y') }}
    </footer>
</body>
</html>
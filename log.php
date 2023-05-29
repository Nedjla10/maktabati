<!DOCTYPE html>
 <head >
    <title>
        mon bibliotheque
    </title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login_page.css">
</head>
<body>
<div class="wrapper">
  <div class="title">تسجيل الدخول</div>
  <form action="config.php" method="POST">
    <div class="field">
        <input type="email" name="email">
        <label>البريد الالكتروني</label>
    </div>
    <div class="field">
        <input type="password" name="mdp">
        <label>كلمة السر</label>
    </div>
    <div dir="rtl" class="pass_link"> <a href="#">هل نسيت كلمة السر؟</a></div>
    <div class="field">
        <input type="submit" value="دخول" name="valider">
    </div>
    <div class="singup">أ لست عضوا؟<a href="ins.php">سجل الان</a></div>
  </form>
</div>
</body>

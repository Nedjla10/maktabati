<?php
$servername = "localhost";
$database = "form";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
      die("Échec de la connexion : " . mysqli_connect_error());
}
if(isset($_POST['valider']))
{
    $util=$_POST['util'];
    $email=$_POST['email'];
    $mdp=$_POST['mdp'];
   


$sql = mysqli_query($conn,"INSERT INTO inscreption (util, email, mdp) VALUE ('util', 'email', 'mdp')");
if ( $sql) {
    echo "Nouveau enregistrement créé avec succès";
} else {
     echo "Erreur : " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html >
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire</title>
    <link rel="stylesheet" href="ins.css">
</head>
<body>
<div class="reg">
    <div class="titel">تسجيل الدخول</div>

   <form action="ins.php" method="post">
      <div class="field">
        <input type="text" name="util">
        <label>اسم المستخدم</label><br>
      </div>
      <div class="field">
        <input type="email" name="email">
        <label>البريد الالكتروني</label><br>
      </div>
     <div class="field">
        <input type="password" name="mdp">
        <label>كلمة السر</label><br>
      </div>
      
      <div class="gender" dir="rtl">
        <label>اختر الجنس من فضلك</label>
        <select name="الجنس">
          <option>ذكر</option>
          <option>انثى</option>
       </select>
      </div>
      <div class="field">
        <input type="submit" value="تسجيل" name="valider"><br>
      </div>
      <span class="singup">هل تملك حسابا؟<a href="log.php">دخول</a></span>
   </form>
 </div>
    
</body>
</html>

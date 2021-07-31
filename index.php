<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    /* varibals data */
    $firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_STRING);
    $lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_STRING);
    $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $tel = filter_var($_POST['tel'], FILTER_SANITIZE_NUMBER_INT);
    $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
    $headers = $email;
    mail('ahmedhassan20029@gmail.com', 'ماك تك', $message, $headers);
}

?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>form</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
            <div class="container">
                <!--start form -->
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
                    <input class="form-control" type="text" name="firstname" placeholder="الاسم الاول" required/>
                    <input class="form-control" type="text" name="lastname" placeholder="الاسم الاوسط" required/>
                    <input class="form-control" type="text" name="username" placeholder="اسم المستخدم" required/>
                    <input class="form-control" type="email" name="email" placeholder="البريد الالكترونى" required/>
                    <input class="form-control" type="tel" name="tel" placeholder="التليفون" required/>
                    <textarea class="form-control" name="message" cols="30" rows="10" placeholder="رسالتك" required></textarea>
                    <input class="btn btn-success btn-block" type="submit" value="ارسال" name="login" />
                </form>
                <!--end form -->
            </div>
            <div class='container'>
                <?php 
                    if ($_SERVER['REQUEST_METHOD'] == "POST") {
                        echo '<P class="message-dane">تم ارسال رسالتك</p>';
                    }
                ?>
            </div>
        <!-- files js -->
        <script src='js/jquery-3.5.1.min.js'></script>
        <script src='js/bootstrap.bundle.min.js'></script>
        <script src='js/min.js'></script>
    </body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Azov RP | Особистий кабінет</title>
    <link rel="stylesheet" href="public/main/css/redirecting-donate&panel.css">
    <link rel="shortcut icon" href="public/main/images/favicon.ico" type="image/x-icon">
</head>

<body>
    
    <h1 class="wow fadeInBottom">Особистий кабінет</h1>
    <form action="/engine/obr/profile.php" method="post">
        <label for="nickname" class="wow fadeInLeft">
            <img src="public/main/images/redirecting-donate&panel/nickname.png">
            <input type="text" id="nickname" name="nickname" placeholder="Введіть нікнейм">
        </label>
        <label for="password" class="wow fadeInRight">
            <img src="public/main/images/redirecting-donate&panel/password.png">
            <input type="password" id="password" name="password" placeholder="Введіть пароль">
        </label>
        <input type="hidden" name="action" value="login">
        <button type="submit" id="login-button" class="wow fadeInUp login-btn">увійти</button>
    </form>

    <!-- SCRIPTS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="/public/admin/js/form.js" type="text/javascript"></script>

    <script>
        $(document).ready(function () {
            $("#login-button").click(function () {
                document.querySelector("body").style.backgroundImage = "url('/public/main/images/main/background.png')";
            });
        });
    </script>

</body>

</html>
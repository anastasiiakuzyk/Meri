<?php
$error ="";
if(isset($_COOKIE['insta'])){
    header("Location: /profile");
}

if(isset($_POST['inst'])){
}

if(isset($_POST['send'])){
    if( trim($_POST['inst']) != "" || trim($_POST['passwd']) != ""){
        setcookie('insta', $_POST['inst']);
        header("Location: "."/profile");
    } else{
        $error = "логин и пароль должны быть заполнены";
    }
}
?>

<div class="container">
    <div class="container pageHeading" style="text-align: center">
        <h1>Авторизация</h1>
    </div>
    <div class="description" style="margin-bottom: 10px; text-align: center">Заполните поля</div>
    <form action="" method="post">
        <div class="row" style="justify-content: center">
            <div class="col-4">
                <input class="inst" placeholder="Ваш instagram" name="inst" style="margin-bottom: 10px" required/>
            </div>
        </div>
        <div class="row" style="justify-content: center">
            <div class="col-4">
                <input class="inst" placeholder="Ваш пароль" name="passwd" type="password" style="margin-bottom: 10px"required/>
            </div>
        </div>
        <div class="row" style="justify-content: center">
            <div class="col-4">
                <input type="submit" value="Связаться" name="send" class="button" style="margin-bottom: 10px; width: 100%"/>
            </div>
        </div>
        <div class="row" style="justify-content: center; margin-bottom: 200px; color: #ff0000; text-align: center">
            <div class="col-4">
                <?= $error?>
            </div>
        </div>
    </form>
</div>

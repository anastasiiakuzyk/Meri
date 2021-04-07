<?php
if(!isset($_COOKIE['insta'])){
    header("Location: /login");
}
?>


<div class="container">
    <div class="container pageHeading" style="text-align: center; margin-bottom: 30px">
        <h1>Здравствуйте, <?= '@' . $_COOKIE['insta'];
            ?>
        </h1>
    </div>

    <div>
        <div class="row" style="justify-content: center; margin-bottom: 70px">
            <div class="col-4" style="display: flex; justify-self: center">
                <a href="/quit" class="button" style="width: 100%" >Выйти</a>
            </div>
        </div>
    </div>
</div>

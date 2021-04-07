<?php

if (!isset($_GET['id'])) {
    header("Location: /works");
}

$page_id = $_GET['id'];
$title = '';
if ($page_id == "0") {
    $title = "@doctorvasya";
} elseif ($page_id == "1") {
    $title = "@psycho.frolova";
}elseif ($page_id == "2") {
    $title = "@be_om_design";
}elseif ($page_id == "3") {
    $title = "@carnivala";
}elseif ($page_id == "4") {
    $title = "@gabbois";
}elseif ($page_id == "5") {
    $title = "@li_bash";
}
?>


<div id="Project" class="container project">
    <div class="row">
        <div class="col-12">
            <h1>
                <?= $title ?>
            </h1>
            <div class="project__description">
                Контент для блога психолога
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="profile">
                <img src="img/project/profile.png" alt="Profile"/>
                <img src="img/project/profile.png" alt="Profile"/>
                <img src="img/project/profile.png" alt="Profile"/>
            </div>
        </div>
        <div class="col-6 plainText">
            <div class="heading">
                <h2>
                    Задачи
                </h2>
                <div class="lines">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-4">
                    <div class="task">
                        <img src="img/project/t1.svg" alt="Task 1"/>
                        <div class="description">
                            Выстраивание личного бренда
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="task">
                        <img src="img/project/t2.svg" alt="Task 2"/>
                        <div class="description">
                            Поиск своего стиля
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="task">
                        <img src="img/project/t3.svg" alt="Task 3"/>
                        <div class="description">
                            Создание единого визуала
                        </div>
                    </div>
                </div>
            </div>
            <div class="heading">
                <h2>
                    Охваты
                </h2>
                <div class="lines">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </div>
            </div>
            <div class="stats">
                <div class="stats__nums">
                    <img src="img/project/left.svg" alt="before"/>
                    <img src="img/project/arrow.svg" alt="arrow"/>
                    <img src="img/project/right.svg" alt="right"/>
                </div>
                <h3>рост взаимодействия</h3>
            </div>
        </div>
    </div>
</div>

<div id="Stories" class="container">
    <div class="heading stories">
        <h2>
            Сторис
        </h2>
        <div class="lines">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </div>
    <div class="row stories__block">
        <div class="col-5">
            <div class="story">
                <div class="button">До</div>
                <img src="img/project/a.png" alt="Before"/>
            </div>
        </div>
        <div class="col-2">
            <img src="img/project/a2.svg" alt="Before"/>
        </div>
        <div class="col-5">
            <div class="story">
                <div class="button after">После</div>
                <img src="img/project/b.png" alt="After"/>
            </div>
        </div>
    </div>
</div>

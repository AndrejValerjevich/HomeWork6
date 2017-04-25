<?php
error_reporting(E_ALL);
require 'get_file.php';
if (!empty($_POST) && count($_POST)==count($response)) {
    $count_POST_mas = 0;
    $results = [];
    foreach ($response as $answer) {
        if (is_array($answer['answers'][$_POST["q$count_POST_mas"]])) {
            $results[] = "Верно!";
        } else {
            $results[] = "Не верно!";
        }
        $count_POST_mas++;
    }
}
else {
    $results[] = null;
}
include 'header.php';
?>
<div class="main-container">
    <fieldset class="main-container-fieldset-main">
        <form action="test.php?file_name=<?= $file_name?>" method="POST">
            <?php if ($results[0]!=null) {?>
                <?php $count=1; foreach ($results as $value) { ?>
                    <p class="main-container-fieldset-main__text">Ответ на задание <?= $count?> : <?= $value?></p><br/>
        <?php $count++; } ?>
                <p class="main-container-p__button"><input class="main-container__button-check" type="submit" value="Решить снова ->"></p>
            <?php } else { ?>
                <p class="main-container-fieldset-main__text">Вы прошли не весь тест! Пожалуйста, пройдите тест целиком!</p>
                <p class="main-container-p__button"><input class="main-container__button-check" type="submit" value="Пройти снова ->"></p>
            <?php } ?>
        </form>
        <form action="list.php" method="POST"
            <p class="main-container-p__button"><input class="main-container__button-check" type="submit" value="<- Список тестов"></p>
        </form>
    </fieldset>
</div>

<?php include 'footer.php'; ?>

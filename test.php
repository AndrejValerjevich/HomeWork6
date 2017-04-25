<?php
error_reporting(E_ALL);
require 'get_file.php';
include 'header.php';
?>
    <div class="main-container">
        <fieldset class="main-container-fieldset-main">
            <form action="check.php?file_name=<?= $file_name?>" method="POST">
                <p class="main-container-fieldset-main__text">Тест: <?= stristr($file_name, '.', true)?></p><br/>
                <?php $count=0; foreach ($response as $test)  {?>
                    <fieldset class="main-container-fieldset-tests">
                        <legend class="main-container-fieldset-tests__legend"><?= $test['question'] ?></legend>
                        <label><input type="radio" name="q<?= $count?>" value="0"><?php if (!is_array($test['answers'][0])) { echo $test['answers'][0];} else { echo $test['answers'][0]['answer'];} ?></label>
                        <label><input type="radio" name="q<?= $count?>" value="1"><?php if (!is_array($test['answers'][1])) { echo $test['answers'][1];} else { echo $test['answers'][1]['answer'];} ?></label>
                        <label><input type="radio" name="q<?= $count?>" value="2"><?php if (!is_array($test['answers'][2])) { echo $test['answers'][2];} else { echo $test['answers'][2]['answer'];} ?></label>
                        <label><input type="radio" name="q<?= $count?>" value="3"><?php if (!is_array($test['answers'][3])) { echo $test['answers'][3];} else { echo $test['answers'][3]['answer'];} ?></label>
                    </fieldset>
                    <?php $count++; } ?>
                <p class="main-container-p__button"><input class="main-container__button-check" type="submit" value="Отправить"></p>
            </form>
        </fieldset>
    </div>

<?php include 'footer.php'; ?>
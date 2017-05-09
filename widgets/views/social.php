<?php



    ?>
    <div>
    <?php
    if (!empty(Yii::$app->params['facebook'])) : ?>
    <a href="<?=Yii::$app->params['facebook']?>" class="social-ball fa fa-facebook" target="_blank"></a>
    <?php
    endif;
    if (!empty(Yii::$app->params['twitter'])): ?>
    <a href="<?=Yii::$app->params['twitter']?>" class="social-ball fa fa-twitter" target="_blank"></a>
    <?php
    endif;
    if (!empty(Yii::$app->params['linkedin'])) :
    ?>
    <a href="<?=Yii::$app->params['linkedin']?>" class="social-ball fa fa-linkedin" target="_blank"></a>
    <?php
    endif;
    if (!empty(Yii::$app->params['behance'])) :
    ?>
    <a href="<?=Yii::$app->params['behance']?>" class="social-ball fa fa-behance" target="_blank"></a>
    <?php
    endif;
    if (!empty(Yii::$app->params['dribbble'])) :
    ?>
    <a href="<?=Yii::$app->params['dribbble']?>" class="social-ball fa fa-dribbble" target="_blank"></a>
    <?php
    endif;
    if (!empty(Yii::$app->params['youtube'])) :
    ?>
    <a href="<?=Yii::$app->params['youtube']?>" class="social-ball fa fa-youtube" target="_blank"></a>
    <?php
    endif;
    ?>
    </div>
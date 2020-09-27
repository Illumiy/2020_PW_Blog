<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'Создание блога';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <?php $form = ActiveForm::begin();//Форма создания блога ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'text') ?>

    <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>

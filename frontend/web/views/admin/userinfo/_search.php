<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UserinfoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="userinfo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'usertype') ?>

    <?= $form->field($model, 'username') ?>

    <?= $form->field($model, 'password') ?>

    <?= $form->field($model, 'name') ?>

    <?php // echo $form->field($model, 'iphone') ?>

    <?php // echo $form->field($model, 'e_mail') ?>

    <?php // echo $form->field($model, 'sex') ?>

    <?php // echo $form->field($model, 'creattime') ?>

    <?php // echo $form->field($model, 'login_time') ?>

    <?php // echo $form->field($model, 'login_ip') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

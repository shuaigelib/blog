<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Userinfo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="userinfo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'usertype')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'iphone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'e_mail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sex')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'creattime')->textInput() ?>

    <?= $form->field($model, 'login_time')->textInput() ?>

    <?= $form->field($model, 'login_ip')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

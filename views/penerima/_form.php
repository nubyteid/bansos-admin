<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Penerima */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="penerima-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TempatLahir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TanggalLahir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'JenisKelamin')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'InstansiKerja')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'statusBansos')->textInput() ?>

    <?= $form->field($model, 'penghasilan')->textInput() ?>

    <?= $form->field($model, 'UserId')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TanggalInput')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\search\PenerimaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="penerima-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'Nama') ?>

    <?= $form->field($model, 'TempatLahir') ?>

    <?= $form->field($model, 'TanggalLahir') ?>

    <?= $form->field($model, 'JenisKelamin') ?>

    <?php // echo $form->field($model, 'InstansiKerja') ?>

    <?php // echo $form->field($model, 'statusBansos') ?>

    <?php // echo $form->field($model, 'penghasilan') ?>

    <?php // echo $form->field($model, 'UserId') ?>

    <?php // echo $form->field($model, 'TanggalInput') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

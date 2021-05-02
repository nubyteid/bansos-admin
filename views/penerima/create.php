<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Penerima */

$this->title = 'Create Penerima';
$this->params['breadcrumbs'][] = ['label' => 'Penerimas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penerima-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

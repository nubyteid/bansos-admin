<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\search\PenerimaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Penerima';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penerima-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Penerima', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'Nama',
            'TempatLahir',
            'TanggalLahir',
            'JenisKelamin',
            //'InstansiKerja',
            //'statusBansos',
            //'penghasilan',
            //'UserId',
            //'TanggalInput',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>

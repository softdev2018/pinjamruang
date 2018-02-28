<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\LogPeminjamanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Log Peminjamen';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="log-peminjaman-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Log Peminjaman', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ID_LOG',
            'RUANG',
            'PEMINJAM',
            'TANGGAL',
            'SESI_MULAI',
            // 'SESI_SELESAI',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>

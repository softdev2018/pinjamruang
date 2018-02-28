<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Sesi */

$this->title = $model->ID_SESI;
$this->params['breadcrumbs'][] = ['label' => 'Sesis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sesi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ID_SESI], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ID_SESI], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'ID_SESI',
            'SESI_MULAI',
            'SESI_SELESAI',
        ],
    ]) ?>

</div>

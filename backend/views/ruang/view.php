<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Ruang */

$this->title = $model->ID_RUANG;
$this->params['breadcrumbs'][] = ['label' => 'Ruangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ruang-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ID_RUANG], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ID_RUANG], [
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
            'ID_RUANG',
            'NAMA_RUANG',
        ],
    ]) ?>

</div>

<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\LogPeminjaman */

$this->title = 'Update Log Peminjaman: ' . $model->ID_LOG;
$this->params['breadcrumbs'][] = ['label' => 'Log Peminjamen', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_LOG, 'url' => ['view', 'id' => $model->ID_LOG]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="log-peminjaman-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

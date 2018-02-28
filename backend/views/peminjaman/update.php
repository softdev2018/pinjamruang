<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Peminjaman */

$this->title = 'Update Peminjaman: ' . $model->ID_PEMINJAMAN;
$this->params['breadcrumbs'][] = ['label' => 'Peminjamen', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_PEMINJAMAN, 'url' => ['view', 'id' => $model->ID_PEMINJAMAN]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="peminjaman-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

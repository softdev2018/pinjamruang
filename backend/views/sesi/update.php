<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Sesi */

$this->title = 'Update Sesi: ' . $model->ID_SESI;
$this->params['breadcrumbs'][] = ['label' => 'Sesis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_SESI, 'url' => ['view', 'id' => $model->ID_SESI]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sesi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

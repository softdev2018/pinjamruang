<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Ruang */

$this->title = 'Update Ruang: ' . $model->ID_RUANG;
$this->params['breadcrumbs'][] = ['label' => 'Ruangs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ID_RUANG, 'url' => ['view', 'id' => $model->ID_RUANG]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ruang-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

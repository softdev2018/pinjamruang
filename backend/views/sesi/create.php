<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Sesi */

$this->title = 'Create Sesi';
$this->params['breadcrumbs'][] = ['label' => 'Sesis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sesi-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

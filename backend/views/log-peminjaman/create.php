<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\LogPeminjaman */

$this->title = 'Create Log Peminjaman';
$this->params['breadcrumbs'][] = ['label' => 'Log Peminjamen', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="log-peminjaman-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

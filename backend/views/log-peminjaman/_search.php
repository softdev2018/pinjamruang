<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\LogPeminjamanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="log-peminjaman-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID_LOG') ?>

    <?= $form->field($model, 'RUANG') ?>

    <?= $form->field($model, 'PEMINJAM') ?>

    <?= $form->field($model, 'TANGGAL') ?>

    <?= $form->field($model, 'SESI_MULAI') ?>

    <?php // echo $form->field($model, 'SESI_SELESAI') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

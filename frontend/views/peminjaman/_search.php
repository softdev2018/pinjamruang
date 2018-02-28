<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\PeminjamanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="peminjaman-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'ID_PEMINJAMAN') ?>

    <?= $form->field($model, 'ID_PEMINJAM') ?>

    <?= $form->field($model, 'ID_RUANG') ?>

    <?= $form->field($model, 'ID_SESI') ?>

    <?= $form->field($model, 'TANGGAL_PINJAM') ?>

    <?php // echo $form->field($model, 'STATUS_PINJAM') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

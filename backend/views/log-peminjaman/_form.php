<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\LogPeminjaman */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="log-peminjaman-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'RUANG')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PEMINJAM')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'TANGGAL')->textInput() ?>

    <?= $form->field($model, 'SESI_MULAI')->textInput() ?>

    <?= $form->field($model, 'SESI_SELESAI')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

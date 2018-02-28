<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Peminjaman */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="peminjaman-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'ID_PEMINJAM')->textInput() ?>

    <?= $form->field($model, 'ID_RUANG')->textInput() ?>

    <?= $form->field($model, 'ID_SESI')->textInput() ?>

    <?= $form->field($model, 'TANGGAL_PINJAM')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'STATUS_PINJAM')->dropDownList([ 'DIPROSES' => 'DIPROSES', 'APPROVED' => 'APPROVED', 'NOT APPROVED' => 'NOT APPROVED', '' => '', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

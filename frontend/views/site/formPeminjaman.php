<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\helpers\ArrayHelper;
use dosamigos\datepicker\DatePicker;

$this->title = 'Form Peminjaman';
$this->params['breadcrumbs'][] = $this->title;
$items = ArrayHelper::map(item::find()->all(), 'id','title');

?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Surat Peminjaman Ruang
    </p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                <?= $form->field($model, 'Status Pinjam')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'Email') ?>

                <?= $form->field($model, 'Nomor Surat') ?>

                <?= $form->field($model, 'Ruangan') ?>
                <?= $form->field($modelsOrderdetail, "[{$i}]item_id")->dropDownList($items, ['options' => $options] ) ?>

                <?= $form->field($model, 'Ruang Dipinjam') ?>
                <?= $form->field($model, 'population')->checkbox(array('label'=>'')); ?>

                <?= $form->field($model, 'Sesi') ?>
                <?= $form->field($model, 'population')->checkbox(array('label'=>'')); ?>

                <?= $form->field($model, 'Tanggal') ?>
                <?= DatePicker::widget([
                    'name' => 'Test',
                    'value' => '02-16-2012',
                    'template' => '{addon}{input}',
                        'clientOptions' => [
                            'autoclose' => true,
                            'format' => 'dd-M-yyyy'
                        ]
                      ]);?>

                <?= $form->field($model, 'Ketua/Koordinator') ?>
                <?= $form->field($model, 'Sekretaris') ?>
                <?= $form->field($model, 'Nama Kegiatan') ?>
                <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                ]) ?>

                <div class="form-group">
                    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>

</div>

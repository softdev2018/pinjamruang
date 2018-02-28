<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use kartik\select2\Select2;
use kartik\widgets\DatePicker;
use common\models\Sesi;
/* @var $this yii\web\View */
/* @var $model common\models\Peminjaman */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="row"></div>

  <div class="col-md-12">
        <div class="box box-primary">
           <div class="box-body">
              <div class="box-header with-border">
                  <h3 class="box-title">Form Peminjaman</h3>
              </div>
              <?php $form = ActiveForm::begin(); ?>

                <?= $form->field($model, 'ID_PEMINJAM')->textInput([
                                    'value'=>Yii::$app->user->identity->username,
                                    'disabled' => 'readonly',
                                    ]) ?>

                <?php 
                    $model->ID_RUANG =  $_GET['ruang'];
                    echo $form->field($model, 'ID_RUANG')->widget(Select2::className(), [
                                      'model' => $model,
                                      'disabled' => 'readonly',
                                      'options' => ['placeholder' => 'Ruang yang dipinjam'],
                                      'data' => ArrayHelper::map(common\models\Ruang::find()->all(), 'ID_RUANG', 'NAMA_RUANG'),
                                      
                                  ]); ?>
                <?= $form->field($model, 'KEPERLUAN')->textarea(['rows' => 6]) ?>
                <?php  
                    $model->TANGGAL_PINJAM = $_GET['tgl'];
                    echo $form->field($model, 'TANGGAL_PINJAM')->widget(DatePicker::classname(), [
                                    'options' => ['placeholder' => 'Tanggal Ruang akan dipinjam'],
                                    'disabled' => 'readonly',
                                    'pluginOptions' => [
                                        'autoclose'=>true,
                                        'format' => 'yyyy-mm-dd'
                                    ]
                                ]);   

                                    ?>
                <p><b>Sesi yang dipinjam</b></p>                    
                <table width="100%" class="table table-bordered">
                  <tr class="info">
                    <td>
                      No. Sesi
                    </td>
                    <td>
                      Jam Sesi
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <?= $id_sesi = $_GET['sesi']; ?>  
                    </td>
                    <td>
                      <?= Sesi::find()->where(['ID_SESI' => $id_sesi])->one()->SESI_MULAI ?>
                      <?= ' - ' ?>
                      <?= Sesi::find()->where(['ID_SESI' => $id_sesi])->one()->SESI_SELESAI ?>
                    </td>
                    
                  </tr>
                </table>
                
    
                <br><br>
                <div class="form-group">
                    <?= Html::submitButton($model->isNewRecord ? 'Pinjam' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
                </div>

                <?php ActiveForm::end(); ?>
          </div>
      </div>
  </div>

</div>